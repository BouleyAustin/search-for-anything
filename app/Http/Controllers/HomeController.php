<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function showSearchPage($name)
    {
        $pageDetails = Auth::user()->pages()->first()->toArray();

        $pageDetails = [
            'search_title' => $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine',
            'sub_search_title' => $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!',
            'search_bar_input' => $pageDetails['search_bar_input'] ?? 'What do you want to learn about?',
            'search_bar_text' => $pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc',
            'text_color' => $pageDetails['text_color'] ?? 'black',
            'background_color' => $pageDetails['background_color'] ?? '#f9fafb',
        ];

        return view('search-page', [
            'pageDetails' => $pageDetails
        ]);
    }

    public static function showContentPage()
    {
        $contents = Auth::user()->pages()->first()->contents()->get();

        return view('content', [
            'contents' => $contents
        ]);
    }
}
