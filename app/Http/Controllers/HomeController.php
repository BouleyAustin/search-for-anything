<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function showSearchPage($name)
    {
        return view('search-page', [
            'name' => $name
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
