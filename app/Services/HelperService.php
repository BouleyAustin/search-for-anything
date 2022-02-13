<?php

namespace App\Services;



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
}
