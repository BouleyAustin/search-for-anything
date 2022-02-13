<?php

namespace App\Http\Controllers;

use App\Models\CallToAction;
use App\Models\Content;
use App\Models\Page;
use App\Models\Transcription;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function showSearchPage($name)
    {
        if($page = Page::where('url_ending', $name)->first()){
            $pageDetails = $page->toArray();

            $pageDetails['search_title'] = $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine';
            $pageDetails['sub_search_title'] = $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!';
            $pageDetails['search_bar_input'] = $pageDetails['search_bar_input'] ?? 'What do you want to learn about?';
            $pageDetails['search_bar_text'] = $pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc';
            $pageDetails['text_color'] = $pageDetails['text_color'] ?? 'black';
            $pageDetails['background_color'] = $pageDetails['background_color'] ?? '#f9fafb';

            return view('search-page', [
                'pageDetails' => $pageDetails
            ]);
        }
        else{
            return view('landing');
        }
    }

    public static function showEpisodePage($name, $episodeName)
    {
        if($page = Page::where('url_ending', $name)->first()){
            $pageDetails = $page->toArray();

            $pageDetails['search_title'] = $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine';
            $pageDetails['sub_search_title'] = $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!';
            $pageDetails['search_bar_input'] = $pageDetails['search_bar_input'] ?? 'What do you want to learn about?';
            $pageDetails['search_bar_text'] = $pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc';
            $pageDetails['text_color'] = $pageDetails['text_color'] ?? 'black';
            $pageDetails['background_color'] = $pageDetails['background_color'] ?? '#f9fafb';

            $content = Content::where('page_id', $page->id)->first()->toArray();
            $transcript = Transcription::where('content_id', $content['id'])->get()->toArray();

            if($content['show_cta']){
                $callToAction = CallToAction::where('id', $content['cta_id'])->first()->toArray();
            }
            else{
                $callToAction = null;
            }

            return view('episode-page', [
                'pageDetails' => $pageDetails,
                'content' => $content,
                'transcript' => $transcript,
                'callToAction' => $callToAction,
            ]);
        }
        else{
            return view('landing');
        }
    }

    public static function showContentPage()
    {
        $contents = Auth::user()->pages()->first()->contents()->get();

        return view('content', [
            'contents' => $contents
        ]);
    }
}
