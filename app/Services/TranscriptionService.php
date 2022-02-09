<?php

namespace App\Services;


use App\Models\Content;
use App\Models\Transcription;
use Illuminate\Support\Facades\Storage;

class TranscriptionService
{
    public static function getTranscriptionFromImport($contentId, $fileName)
    {
        $fileName = storage_path('app') . '/temp_transcripts/' . $fileName;
        $fopen = fopen($fileName, 'r');
        $fread = fread($fopen, filesize($fileName));
        fclose($fopen);

        $fread = str_replace("\n", "", $fread);
        $fread = str_replace("===", " ", $fread);
        $split = preg_split("/(?=\[(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)\])/", $fread);

        if($content = Content::where('id', $contentId)->first()){
            foreach($split as $section){
                $newItem = new Transcription();
                $newItem->sentence = $section;

                if(preg_match("/(?=\[(?:[01]\d|2[0123]):(?:[012345]\d):(?:[012345]\d)\])/", $section)){
                    $newItem->starts_at = substr($section, 1, strpos($section, ']') - 1);
                }

                $newItem->confidence = 1;
                $content->transcript()->save($newItem);
            }
        }
    }
}
