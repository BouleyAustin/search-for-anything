<?php

namespace App\Services;



use App\Models\CallToAction;
use App\Models\Content;
use App\Models\Page;
use App\Models\PageViews;
use App\Models\Transcription;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class HelperService
{
    public static function setPageDetailsDefaults($pageDetails)
    {
        $pageDetails['search_title'] = $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine';
        $pageDetails['sub_search_title'] = $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!';
        $pageDetails['search_bar_input'] = $pageDetails['search_bar_input'] ?? 'What do you want to learn about?';
        $pageDetails['search_bar_text'] = $pageDetails['search_bar_text'] ?? 'Check out all our episodes here!';
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

    public static function recordPageViews($request)
    {
        $newPageView = new PageViews();
        $newPageView->url = $request->url();
        $newPageView->ip = $request->getClientIp();
        $newPageView->referring_url = $request->server('HTTP_REFERER');
        $newPageView->agent = $request->header('user-agent');

        try{
            $path = substr($request->getPathInfo(), 1);

            if(str_contains($path, '/')){
                $pagePath = substr($path, 0, strpos($path, '/'));
                $newPath = substr($path, strpos($path, '/'));

                if($page = Page::where('url_ending', $pagePath)->first()){
                    $newPageView->page_id = $page->id;
                }

                if(str_contains($newPath, '/')){
                    $episodePath = substr($newPath, strpos($newPath, '/') + 1);

                    if($content = Content::where('url_ending', $episodePath)->first()){
                        $newPageView->content_id = $content->id;

                        if($content->show_cta && $content->cta_id != null){
                            if($callToAction = CallToAction::where('id', $content->cta_id)->first()){
                                $callToAction->total_views = $callToAction->total_views + 1;
                                $pageViews = $callToAction->total_views == 0 ? 1 : $callToAction->total_views;
                                $callToAction->click_through_rate = round($callToAction->total_clicks / $pageViews, 4) * 100;
                                $callToAction->save();
                            }
                        }
                    }
                }
            }
        } catch(\Exception $exception){
            \Log::info('record page view failed: ' . $exception);
        }

        $newPageView->save();
    }

    public static function addEmailToPage($apiKey, $tag, $provider, $email)
    {
        if($provider == 'convertkit'){
            Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://api.convertkit.com/v3/tags/' . $tag .'/subscribe', [
                'api_key' => $apiKey,
                'email' => $email,
            ]);
        }
    }

    public static function deleteFromAmazons3($url)
    {
        $position = strpos($url, 'aws.com');
        $path = substr($url, $position + 8);
        Storage::delete($path);
    }
}
