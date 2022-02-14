<?php

namespace App\Http\Livewire;

use App\Services\AnalyticsService;
use Livewire\Component;

class AnalyticsTopSearches extends Component
{
    public $topSearches;

    public function readyToLoad()
    {
        $this->topSearches = AnalyticsService::getTopSearches();
    }

    public function render()
    {
        return view('livewire.analytics-top-searches');
    }
}
