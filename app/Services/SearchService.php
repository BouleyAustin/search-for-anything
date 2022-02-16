<?php

namespace App\Services;



use App\Models\Content;
use App\Models\Page;
use App\Models\SearchHistory;
use App\Models\Transcription;
use Illuminate\Support\Facades\Auth;

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

    public static function getEmbedLink($link)
    {
        if(str_contains($link, 'apple')){
            $position = strpos($link, '//') + 2;
            return substr($link, 0, $position) . 'embed.' . substr($link, $position);
        }
        elseif(str_contains($link, 'anchor')){
            return 'https://anchor.fm/theimpeccableinvestor/embed/episodes/Understanding-The-Fear-And-Greed-Index-e1dpjnh';
        }
        else{
            return 'https://anchor.fm/theimpeccableinvestor/embed/episodes/Understanding-The-Fear-And-Greed-Index-e1dpjnh';
        }
    }

    public static function getLinksForSiteMap()
    {
        $urls = [];
        $pages = Page::all();

        foreach($pages as $page){
            $url = $page->url_ending;
            $mod = $page->updated_at->tz('UTC')->toAtomString();
            $freq = 'daily';
            $priority = 1;

            array_push($urls, [
                'url' => $url,
                'mod' => $mod,
                'freq' => $freq,
                'priority' => $priority,
            ]);

            array_push($urls, [
                'url' => $url . '/episodes',
                'mod' => $mod,
                'freq' => $freq,
                'priority' => .75,
            ]);

            $contents = Content::where('page_id', $page->id)->get();
            foreach($contents as $content){
                $contentUrl = $url . '/episodes/' . $content->url_ending;
                $mod = $content->updated_at->tz('UTC')->toAtomString();
                $freq = 'weekly';
                $priority = .5;

                array_push($urls, [
                    'url' => $contentUrl,
                    'mod' => $mod,
                    'freq' => $freq,
                    'priority' => $priority,
                ]);
            }
        }

        return $urls;
    }
}
