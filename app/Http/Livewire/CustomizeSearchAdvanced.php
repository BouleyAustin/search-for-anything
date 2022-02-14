<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomizeSearchAdvanced extends Component
{
    public $pageDetails;
    public $tags;

    protected $rules = [
        'pageDetails.link_instagram' => 'sometimes|nullable|url',
        'pageDetails.link_tiktok' => 'sometimes|nullable|url',
        'pageDetails.link_youtube' => 'sometimes|nullable|url',
        'pageDetails.link_twitter' => 'sometimes|nullable|url',
        'pageDetails.link_facebook' => 'sometimes|nullable|url',
        'pageDetails.link_linkedin' => 'sometimes|nullable|url',
        'pageDetails.link_url' => 'sometimes|nullable|url',
    ];

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
        $this->validate();

        $update = Auth::user()->pages()->first();
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
        $update->save();

        return redirect(route('custom'));
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
