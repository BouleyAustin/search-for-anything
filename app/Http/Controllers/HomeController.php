<?php

namespace App\Http\Controllers;

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

            $pageDetails = [
                'search_title' => $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine',
                'sub_search_title' => $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!',
                'search_bar_input' => $pageDetails['search_bar_input'] ?? 'What do you want to learn about?',
                'search_bar_text' => $pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc',
                'text_color' => $pageDetails['text_color'] ?? 'black',
                'background_color' => $pageDetails['background_color'] ?? '#f9fafb',
                'id' => $pageDetails['id'],
            ];

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

            $pageDetails = [
                'search_title' => $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine',
                'sub_search_title' => $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!',
                'search_bar_input' => $pageDetails['search_bar_input'] ?? 'What do you want to learn about?',
                'search_bar_text' => $pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc',
                'text_color' => $pageDetails['text_color'] ?? 'black',
                'background_color' => $pageDetails['background_color'] ?? '#f9fafb',
                'id' => $pageDetails['id'],
            ];

            $content = Content::where('page_id', $page->id)->first()->toArray();

            $transcript = Transcription::where('content_id', $content['id'])->get()->toArray();

            return view('episode-page', [
                'pageDetails' => $pageDetails,
                'content' => $content,
                'transcript' => $transcript,
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
