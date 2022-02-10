<?php

namespace App\Services;



use App\Models\Content;
use App\Models\Transcription;

class SearchService
{
    public static function getSearchResults($pageId, $search)
    {
        $result = [];
        $searchResults = Transcription::where('page_id', $pageId)
            ->where('starts_at', '!=', NULL)
            ->where('sentence', 'LIKE', "%$search%")
            ->take(5)
            ->get()
            ->toArray();

        foreach($searchResults as $item){
            if($content = Content::where('id', $item['content_id'])->first()){
                $temp = [
                    'title' => $content->title,
                    'sentence' => $item['sentence'],
                    'link' => $item['episode_link'],
                    'starts_at' => $item['starts_at'],
                ];
            array_push($result, $temp);
            }
        }

        return $result;
    }
}
