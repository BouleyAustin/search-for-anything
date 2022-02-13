<?php

namespace App\Http\Controllers;

use App\Models\CallToAction;
use App\Models\Content;
use App\Models\Page;
use App\Models\Transcription;
use App\Services\HelperService;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public static function showSearchPage($name)
    {
        if($page = Page::where('url_ending', $name)->first()){

            $pageDetails = $page->toArray();
            $pageDetails = HelperService::setPageDetailsDefaults($pageDetails);

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
            if($content = Content::where('url_ending', $episodeName)->where('page_id', $page->id)->first()){

                $pageDetails = $page->toArray();
                $pageDetails = HelperService::setPageDetailsDefaults($pageDetails);

                $content = $content->toArray();
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

                $pageDetails = $page->toArray();
                $pageDetails = HelperService::setPageDetailsDefaults($pageDetails);

                return view('search-page', [
                    'pageDetails' => $pageDetails
                ]);
            }
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
