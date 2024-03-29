<?php

namespace App\Http\Livewire;

use App\Services\RSSHelper;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CustomizeSearchAdvanced extends Component
{
    use WithFileUploads;

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

    public function savePodcast()
    {
        $this->validate([
            'pageDetails.podcast_rss' => 'sometimes|nullable|url',
            'pageDetails.automatic_transcription' => 'required|boolean',
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

        $update->podcast_rss = $this->pageDetails['podcast_rss'];
        $update->apple_link = $this->pageDetails['apple_link'];
        $update->google_link = $this->pageDetails['google_link'];
        $update->spotify_link = $this->pageDetails['spotify_link'];
        $update->overcast_link = $this->pageDetails['overcast_link'];
        $update->stitcher_link = $this->pageDetails['stitcher_link'];
        $update->save();

        session()->flash('successPodcast', 'Your settings have been successfully updated!');
    }

    public function saveSocial()
    {
        $this->validate([
            'pageDetails.link_instagram' => 'sometimes|nullable|url',
            'pageDetails.link_tiktok' => 'sometimes|nullable|url',
            'pageDetails.link_youtube' => 'sometimes|nullable|url',
            'pageDetails.link_twitter' => 'sometimes|nullable|url',
            'pageDetails.link_facebook' => 'sometimes|nullable|url',
            'pageDetails.link_linkedin' => 'sometimes|nullable|url',
            'pageDetails.link_url' => 'sometimes|nullable|url',
        ]);

        $update = Auth::user()->pages()->first();

        $update->link_instagram = $this->pageDetails['link_instagram'];
        $update->link_tiktok = $this->pageDetails['link_tiktok'];
        $update->link_youtube = $this->pageDetails['link_youtube'];
        $update->link_twitter = $this->pageDetails['link_twitter'];
        $update->link_facebook = $this->pageDetails['link_facebook'];
        $update->link_linkedin = $this->pageDetails['link_linkedin'];
        $update->link_url = $this->pageDetails['link_url'];
        $update->save();

        session()->flash('successSocial', 'Your settings have been successfully updated!');
    }

    public function saveSEO()
    {
        $this->validate([
            'pageDetails.url_ending' => 'required|string|unique:pages,url_ending,' . Auth::user()->id,
            'pageDetails.meta_title' => 'sometimes|nullable|string',
            'pageDetails.meta_description' => 'sometimes|nullable|string',
            'pageDetails.meta_keywords' => 'sometimes|nullable|string',
            'pageDetails.meta_robots' => 'sometimes|nullable|string',
            'pageDetails.favicon_url' => 'sometimes|nullable|image|max:2048',
        ]);

        $update = Auth::user()->pages()->first();

        if($this->pageDetails['favicon_url'] != null && $update->favicon_url == null){
            $file = $this->pageDetails['favicon_url']->store('images');
            $update->favicon_url = Storage::url($file);
        }

        $update->url_ending = $this->pageDetails['url_ending'];
        $update->meta_title = $this->pageDetails['meta_title'];
        $update->meta_description = $this->pageDetails['meta_description'];
        $update->meta_keywords = $this->pageDetails['meta_keywords'];
        $update->meta_robots = $this->pageDetails['meta_robots'];
        $update->save();

        session()->flash('successSEO', 'Your settings have been successfully updated!');
    }

    public function saveIntegrations()
    {
        $this->validate([
            'pageDetails.collect_email' => 'required|boolean',
            'pageDetails.email_provider' => 'sometimes|nullable|string',
            'pageDetails.email_api_key' => 'sometimes|nullable|string',
            'pageDetails.email_api_tag' => 'sometimes|nullable|string',
            'pageDetails.tracking_code_search' => 'sometimes|nullable|longText',
            'pageDetails.tracking_code_episode' => 'sometimes|nullable|longText',
        ]);

        $update = Auth::user()->pages()->first();

        $update->tracking_code_search = $this->pageDetails['tracking_code_search'];
        $update->tracking_code_episode = $this->pageDetails['tracking_code_episode'];
        $update->collect_email = $this->pageDetails['collect_email'];
        $update->email_provider = $this->pageDetails['email_provider'];
        $update->email_api_key = $this->pageDetails['email_api_key'];
        $update->email_api_tag = $this->pageDetails['email_api_tag'];
        $update->save();

        session()->flash('successIntegrations', 'Your settings have been successfully updated!');
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
