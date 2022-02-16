<?php

namespace App\Services;


use App\Models\Content;
use App\Models\Transcription;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TranscriptionService
{
    public static function getTranscriptionFromImport($contentId, $imageUrl)
    {
        $text = file_get_contents($imageUrl);

        $text = str_replace("\n", "", $text);
        $text = str_replace("===", " ", $text);
        $split = preg_split("/(?=\[(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)\])/", $text);

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
    }
}
