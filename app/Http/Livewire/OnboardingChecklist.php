<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OnboardingChecklist extends Component
{
    public $partOneCompleted = false;
    public $rss;
    public $rssUrl;
    public $apple;
    public $favoritePodcasts;
    public $color;
    public $share;

    public function mount()
    {
        $page = Auth::user()->pages()->first();
        $this->rss = $page->podcast_rss != null;
        $this->apple = $page->apple_link != null;
        $this->color = $page->background_color != null;
        $this->share = $page->social_share;

        $this->favoritePodcasts = [
            'apple' => null,
            'spotify' => null,
            'google' => null,
            'overcast' => null,
            'breaker' => null,
            'castbox' => null,
            'pocketcasts' => null,
            'radiopublic' => null,
            'stitcher' => null,
        ];
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

        $this->mount();
    }

    public function saveFavorite()
    {

    }

    public function render()
    {
        return view('livewire.onboarding-checklist');
    }
}
