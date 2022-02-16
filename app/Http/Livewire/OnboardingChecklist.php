<?php

namespace App\Http\Livewire;

use App\Services\HelperService;
use App\Services\RSSHelper;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OnboardingChecklist extends Component
{
    public $partOneCompleted;
    public $rss;
    public $rssUrl;
    public $apple;
    public $favoritePodcasts;
    public $color;
    public $share;
    public $pageDetails;
    public $episodeCount;

    public function mount()
    {
        $page = Auth::user()->pages()->first();
        $this->rss = $page->podcast_rss != null;
        $this->rssUrl = $page->podcast_rss;
        $this->apple = $page->apple_link != null;
        $this->color = $page->background_color != null;
        $this->share = $page->social_share;

        $this->partOneCompleted = $this->rss && $this->apple && $this->color && $this->share;

        $this->favoritePodcasts = [
            'apple' => $page->apple_link,
            'spotify' => $page->spotify_link,
            'google' => $page->google_link,
            'overcast' => $page->overcast_link,
            'stitcher' => $page->stitcher_link,
        ];

        $this->pageDetails = HelperService::setPageDetailsDefaults($page->toArray());

        if($this->partOneCompleted){
            $this->episodeCount = $page->contents()->count();
        }
    }

    public function submitRss()
    {
        $this->validate([
            'rssUrl' => 'required|string|url',
        ]);

        $page = Auth::user()->pages()->first();
        $page->podcast_rss = $this->rssUrl;
        $page->automatic_transcription = true;
        $page->save();

        RSSHelper::createEpisodesFromRSSFeed($this->rssUrl, $page->id);

        $this->mount();
    }

    public function saveFavorite()
    {
        $this->validate([
            'favoritePodcasts.apple' => 'required|string|url',
            'favoritePodcasts.spotify' => 'sometimes|nullable|url',
            'favoritePodcasts.google' => 'sometimes|nullable|url',
            'favoritePodcasts.overcast' => 'sometimes|nullable|url',
            'favoritePodcasts.stitcher' => 'sometimes|nullable|url',
        ]);

        $page = Auth::user()->pages()->first();
        $page->apple_link = $this->favoritePodcasts['apple'];
        $page->spotify_link = $this->favoritePodcasts['spotify'];
        $page->google_link = $this->favoritePodcasts['google'];
        $page->overcast_link = $this->favoritePodcasts['overcast'];
        $page->stitcher_link = $this->favoritePodcasts['stitcher'];
        $page->save();

        $this->mount();
    }

    public function shareSite()
    {
        $page = Auth::user()->pages()->first();
        $page->social_share = true;
        $page->save();

        $this->mount();
    }

    public function render()
    {
        return view('livewire.onboarding-checklist');
    }
}
