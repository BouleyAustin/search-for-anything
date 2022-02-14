<?php

namespace App\Http\Livewire;

use App\Services\AnalyticsService;
use Livewire\Component;

class AnalyticsDashboard extends Component
{
    public $searches;
    public $callToActions;
    public $listensFromSearch;
    public $organicPageViews;

    public function readyToLoad()
    {
        $this->searches = AnalyticsService::getTotalSearches();
        $this->callToActions = AnalyticsService::getCTAClicks();
        $this->listensFromSearch = AnalyticsService::getListensFromSearch();
        $this->organicPageViews = AnalyticsService::getTotalPageViews();
    }

    public function render()
    {
        return view('livewire.analytics-dashboard');
    }
}
