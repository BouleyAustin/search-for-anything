<?php

namespace App\Http\Livewire;

use App\Services\RSSHelper;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomizeSearchAdvanced extends Component
{
    public $pageDetails;
    public $tags;

    public function mount()
    {
        $this->pageDetails = Auth::user()->pages()->first()->toArray();

        if($this->pageDetails['email_api_key'] != null && $this->pageDetails['email_provider'] == 'convertkit'){
            $this->tags = json_decode(file_get_contents("https://api.convertkit.com/v3/tags?api_key={$this->pageDetails['email_api_key']}"), true)['tags'];
        }
        else{
            $this->tags = [];
        }
    }

    public function save()
    {
        $this->validate([
            'pageDetails.link_instagram' => 'sometimes|nullable|url',
            'pageDetails.link_tiktok' => 'sometimes|nullable|url',
            'pageDetails.link_youtube' => 'sometimes|nullable|url',
            'pageDetails.link_twitter' => 'sometimes|nullable|url',
            'pageDetails.link_facebook' => 'sometimes|nullable|url',
            'pageDetails.link_linkedin' => 'sometimes|nullable|url',
            'pageDetails.link_url' => 'sometimes|nullable|url',
            'pageDetails.url_ending' => 'required|string|unique:pages,url_ending,' . Auth::user()->id,
            'pageDetails.meta_title' => 'sometimes|nullable|string',
            'pageDetails.meta_description' => 'sometimes|nullable|string',
            'pageDetails.meta_keywords' => 'sometimes|nullable|string',
            'pageDetails.meta_robots' => 'sometimes|nullable|string',
            'pageDetails.podcast_rss' => 'sometimes|nullable|url',
            'pageDetails.automatic_transcription' => 'required|boolean',
            'pageDetails.collect_email' => 'required|boolean',
            'pageDetails.email_provider' => 'sometimes|nullable|string',
            'pageDetails.email_api_key' => 'sometimes|nullable|string',
            'pageDetails.email_api_tag' => 'sometimes|nullable|string',
            'pageDetails.tracking_code_search' => 'sometimes|nullable|longText',
            'pageDetails.tracking_code_episode' => 'sometimes|nullable|longText',
            'pageDetails.apple_link' => 'sometimes|nullable|string',
            'pageDetails.spotify_link' => 'sometimes|nullable|string',
            'pageDetails.google_link' => 'sometimes|nullable|string',
            'pageDetails.stitcher_link' => 'sometimes|nullable|string',
            'pageDetails.overcast_link' => 'sometimes|nullable|string',
        ]);

        $update = Auth::user()->pages()->first();

        if($this->pageDetails['podcast_rss'] != null && $update->podcast_rss == null){
            RSSHelper::createEpisodesFromRSSFeed($this->pageDetails['podcast_rss'], $this->pageDetails['id']);
        }

        $update->url_ending = $this->pageDetails['url_ending'];
        $update->meta_title = $this->pageDetails['meta_title'];
        $update->meta_description = $this->pageDetails['meta_description'];
        $update->meta_keywords = $this->pageDetails['meta_keywords'];
        $update->meta_robots = $this->pageDetails['meta_robots'];
        $update->favicon_url = $this->pageDetails['favicon_url'];
        $update->link_instagram = $this->pageDetails['link_instagram'];
        $update->link_tiktok = $this->pageDetails['link_tiktok'];
        $update->link_youtube = $this->pageDetails['link_youtube'];
        $update->link_twitter = $this->pageDetails['link_twitter'];
        $update->link_facebook = $this->pageDetails['link_facebook'];
        $update->link_linkedin = $this->pageDetails['link_linkedin'];
        $update->link_url = $this->pageDetails['link_url'];
        $update->podcast_rss = $this->pageDetails['podcast_rss'];
        $update->automatic_transcription = $this->pageDetails['automatic_transcription'];
        $update->tracking_code_search = $this->pageDetails['tracking_code_search'];
        $update->tracking_code_episode = $this->pageDetails['tracking_code_episode'];
        $update->collect_email = $this->pageDetails['collect_email'];
        $update->email_provider = $this->pageDetails['email_provider'];
        $update->email_api_key = $this->pageDetails['email_api_key'];
        $update->email_api_tag = $this->pageDetails['email_api_tag'];
        $update->apple_link = $this->pageDetails['apple_link'];
        $update->google_link = $this->pageDetails['google_link'];
        $update->spotify_link = $this->pageDetails['spotify_link'];
        $update->overcast_link = $this->pageDetails['overcast_link'];
        $update->stitcher_link = $this->pageDetails['stitcher_link'];
        $update->save();

        session()->flash('success', 'Your settings have been successfully updated!');
    }

    public function updatedPageDetails()
    {
        if($this->pageDetails['email_api_key'] != null && $this->pageDetails['email_provider'] == 'convertkit'){
            $this->tags = json_decode(file_get_contents("https://api.convertkit.com/v3/tags?api_key={$this->pageDetails['email_api_key']}"), true)['tags'];
        }
    }

    public function render()
    {
        return view('livewire.customize-search-advanced');
    }
}
