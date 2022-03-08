<?php

namespace App\Services;


use App\Models\Content;
use App\Models\Page;
use App\Models\Transcription;
use App\Models\TranscriptProcessing;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TranscriptionService
{
    public static function getTranscriptionFromImport($contentId, $textUrl)
    {
        $text = file_get_contents($textUrl);

        $text = str_replace("\n", "", $text);
        $text = str_replace("===", " ", $text);
        $text = str_replace("\r", " ", $text);

        $split = preg_split("/(?=\[(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)\])/", $text);

        if(count($split) == 1){
            $split = preg_split("/(?:(\d{1,2}):)?(\d{1,2}):(\d{2})/", $text);
        }

        if($content = Content::where('id', $contentId)->first()){
            foreach($split as $section){
                $newItem = new Transcription();
                $newItem->sentence = $section;
                $newItem->page_id = $content->page_id;

                if(preg_match("/(?=\[(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)\])/", $section)){
                    $newItem->starts_at = substr($section, 1, strpos($section, ']') - 1);
                }

                $newItem->confidence = 1;
                $content->transcript()->save($newItem);
            }
        }

        HelperService::deleteFromAmazons3($textUrl);
    }

    public static function uploadTranscripts($audioUrl, $contentId, $pageId)
    {
        try{
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.assemblyai.com/v2/transcript',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode(
                    array(
                        'audio_url' => $audioUrl
                    )
                ),
                CURLOPT_HTTPHEADER => array(
                    'authorization: 598151c0076d45c5858c3ae0bbe71d73',
                    'content-type: application/json',
                ),
            ));

            $response = curl_exec($curl);
            $err = curl_error($curl);
            curl_close($curl);

            if ($err) {
                echo 'cURL Error #:' . $err;
            } else {

                $response = json_decode($response, true);

                $processing = new TranscriptProcessing();
                $processing->content_id = $contentId;
                $processing->transcript_id = $response['id'];
                $processing->status = $response['status'];

                $page = Page::where('id', $pageId)->first();
                $page->transcriptProcessing()->save($processing);

            }
        } catch(\Exception $exception){
            \log::info('upload transcript failed');
        }
    }

    public static function getTranscripts()
    {
        $transcripts = TranscriptProcessing::where('uploaded_to_searchpod', false)->pluck('id')->toArray();

        foreach($transcripts as $id){

            $transcriptProcess = TranscriptProcessing::where('id', $id)->first();

            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.assemblyai.com/v2/transcript/' . $transcriptProcess->transcript_id,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'authorization: 598151c0076d45c5858c3ae0bbe71d73',
                    'content-type: application/json',
                ),
            ));

            $response = curl_exec($curl); $err = curl_error($curl);
            curl_close($curl);
            if ($err) {
                echo 'cURL Error #:' . $err;
            } else {

                $response = json_decode($response, true);

                if($response['status'] == 'completed'){

                    $duration = round($response['audio_duration'], 2);
                    $audioUrl = $response['audio_url'];

                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.assemblyai.com/v2/transcript/' . $transcriptProcess->transcript_id . '/paragraphs',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                        CURLOPT_HTTPHEADER => array(
                            'authorization: 598151c0076d45c5858c3ae0bbe71d73',
                            'content-type: application/json',
                        ),
                    ));

                    $response = curl_exec($curl); $err = curl_error($curl);
                    curl_close($curl);
                    if ($err) {
                        echo 'cURL Error #:' . $err;
                    } else {

                        $response = json_decode($response, true);

                        $paragraphs = $response['paragraphs'];

                        foreach($paragraphs as $paragraph){

                            $content = Content::where('id', $transcriptProcess->content_id)->first();

                            $newItem = new Transcription();
                            $newItem->sentence = $paragraph['text'];
                            $newItem->page_id = $transcriptProcess->page_id;
                            $newItem->confidence = $paragraph['confidence'];
                            $newItem->starts_at = round($paragraph['start'] / 1000, 2);
                            $newItem->ends_at = round($paragraph['end'] / 1000, 2);
                            $content->transcript()->save($newItem);

                        }

                        $transcriptProcess->status = 'completed';
                        $transcriptProcess->duration = $duration;
                        $transcriptProcess->audio_url = $audioUrl;
                        $transcriptProcess->uploaded_to_searchpod = true;
                        $transcriptProcess->save();

                    }
                }


            }
        }
    }
}
