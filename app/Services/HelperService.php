<?php

namespace App\Services;



use App\Models\CallToAction;
use App\Models\Content;
use App\Models\Transcription;

class HelperService
{
    public static function setPageDetailsDefaults($pageDetails)
    {
        $pageDetails['search_title'] = $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine';
        $pageDetails['sub_search_title'] = $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!';
        $pageDetails['search_bar_input'] = $pageDetails['search_bar_input'] ?? 'What do you want to learn about?';
        $pageDetails['search_bar_text'] = $pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc';
        $pageDetails['text_color'] = $pageDetails['text_color'] ?? 'black';
        $pageDetails['background_color'] = $pageDetails['background_color'] ?? '#f9fafb';

        return $pageDetails;
    }

    public static function countCTAClicks($contentId)
    {
        $content = Content::where('id', $contentId)->first();
        $ctaId = $content->cta_id;

        $content->cta_clicks = $content->cta_clicks + 1;
        $content->save();

        $callToAction = CallToAction::where('id', $ctaId)->first();
        $callToAction->total_clicks = $callToAction->total_clicks + 1;
        $pageViews = $callToAction->total_views == 0 ? 1 : $callToAction->total_views;
        $callToAction->click_through_rate = round($callToAction->total_clicks / $pageViews, 4) * 100;
        $callToAction->save();

    }
}
