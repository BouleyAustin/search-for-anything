<?php

namespace App\Services;



use App\Models\Content;
use App\Models\Page;
use App\Models\SearchHistory;
use App\Models\Transcription;

class SearchService
{
    public static function getSearchResults($pageId, $search)
    {
        $pageUrl = Page::where('id', $pageId)->first()->url_ending;

        $result = [];
        $searchResults = Transcription::where('page_id', $pageId)
            ->where('starts_at', '!=', NULL)
            ->where('sentence', 'LIKE', "%$search%")
            ->take(9)
            ->get()
            ->toArray();

        foreach($searchResults as $item){
            if($content = Content::where('id', $item['content_id'])->first()){
                $temp = [
                    'title' => $content->title,
                    'sentence' => substr($item['sentence'], strpos($item['sentence'],  ' '),80),
                    'link' => '/' . $pageUrl . '/' . $content->url_ending,
                    'starts_at' => $item['starts_at'],
                    'content_id' => $content->id,
                ];
            array_push($result, $temp);
            }
        }

        return $result;
    }

    public static function recordSearchHistory($pageId, $searchTerm)
    {
        $newSearchHistory = new SearchHistory();
        $newSearchHistory->search_term = $searchTerm;

        $page = Page::where('id', $pageId)->first();
        $page->searchHistories()->save($newSearchHistory);
    }
}
