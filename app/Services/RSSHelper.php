<?php

namespace App\Services;



use App\Models\Content;
use App\Models\Page;
use Vedmant\FeedReader\Facades\FeedReader;

class RSSHelper
{
    public static function createEpisodesFromRSSFeed($rssUrl, $pageId)
    {
        $rssFeed = FeedReader::read('https://anchor.fm/s/6f67013c/podcast/rss')->get_items();

        $page = Page::where('id', $pageId)->first();
        $imageUrl = '';

        foreach($rssFeed as $item){
            $title = $item->get_title();
            $description = $item->get_description();
            $author = $item->get_author()->name;
            $hostLink = $item->get_link();
            $duration = intval($item->data['child']['http://www.itunes.com/dtds/podcast-1.0.dtd']['duration'][0]['data']);
            $imageUrl = $item->data['child']['http://www.itunes.com/dtds/podcast-1.0.dtd']['image'][0]['attribs']['']['href'];

            if(!Content::where('podcast_link', $hostLink)->first()){
                $newContent = new Content();

                $urlEnding = str_replace('|', '-', $title);
                $urlEnding = str_replace('-', '', $urlEnding);
                $urlEnding = preg_replace('/\s+/', ' ',$urlEnding);
                $urlEnding = str_replace(' ', '-', $urlEnding);

                if(Content::where('url_ending', $urlEnding)->first()){
                    $urlEnding = $urlEnding . '-' . rand(0,10);
                }

                $newContent->url_ending = $urlEnding;
                $newContent->title = $title;
                $newContent->podcast_rss = $rssUrl;
                $newContent->podcast_link = $hostLink;
                $newContent->summary = $description;
                $newContent->platform = 'podcast';
                $newContent->people = $author;
                $newContent->length = $duration;
                $page->contents()->save($newContent);
            }
        }

        $page->link_home = $imageUrl;
        $page->save();
    }
}
