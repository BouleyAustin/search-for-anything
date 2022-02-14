<?php

namespace App\Services;



use App\Models\Content;
use App\Models\Page;
use App\Models\PageViews;
use App\Models\SearchHistory;
use App\Models\Transcription;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AnalyticsService
{
    public static function getTopSearches()
    {
        $page = Auth::user()->pages()->first();
        return $page->searchHistories()->orderByDesc('created_at')->limit(10)->get()->toArray();
    }

    public static function getTotalSearches()
    {
        $searches = Auth::user()->pages()->first()->searchHistories();
        $previousPeriod = Carbon::now()->subDays(30);
        $previousPeriodStart = Carbon::now()->subDays(60);

        $totalSearches = $searches->where('created_at', '>=', $previousPeriod)
            ->count();

        $totalPreviousSearches = $searches->where('created_at', '>=', $previousPeriodStart)
            ->where('created_at', '<=', $previousPeriod)
            ->count();

        $totalPreviousSearches = $totalPreviousSearches == 0 ? 1 : $totalPreviousSearches;

        $change = round($totalSearches / $totalPreviousSearches, 4) * 100;
        $change = $change . '%';

        return ['total' => $totalSearches, 'change' => $change];
    }

    public static function getCTAClicks()
    {
        $callToActions = Auth::user()->pages()->first()->callToAction();

        $total = $callToActions->sum('total_clicks');

        $change = round($callToActions->sum('click_through_rate') / $callToActions->count(), 2);
        $change = $change . '%';

        return ['total' => $total, 'change' => $change];
    }

    public static function getListensFromSearch()
    {
        $searches = Auth::user()->pages()->first()->searchHistories();
        $previousPeriod = Carbon::now()->subDays(30);
        $previousPeriodStart = Carbon::now()->subDays(60);

        $totalSearches = $searches->where('created_at', '>=', $previousPeriod)
            ->count();

        $totalPreviousSearches = $searches->where('created_at', '>=', $previousPeriodStart)
            ->where('created_at', '<=', $previousPeriod)
            ->count();

        $totalPreviousSearches = $totalPreviousSearches == 0 ? 1 : $totalPreviousSearches;

        $totalSearches = round($totalSearches * .75, 0);
        $totalPreviousSearches = $totalPreviousSearches * .75;

        $change = round($totalSearches / $totalPreviousSearches, 4) * 100;
        $change = $change . '%';

        return ['total' => $totalSearches, 'change' => $change];
    }

    public static function getTotalPageViews()
    {
        $pageId = Auth::user()->pages()->first()->id;
        $pageViews = PageViews::where('page_id', $pageId);
        $previousPeriod = Carbon::now()->subDays(30);
        $previousPeriodStart = Carbon::now()->subDays(60);

        $totalPageViews = $pageViews->where('created_at', '>=', $previousPeriod)
            ->count();

        $totalPreviousViews = $pageViews->where('created_at', '>=', $previousPeriodStart)
            ->where('created_at', '<=', $previousPeriod)
            ->count();

        $totalPreviousViews = $totalPreviousViews == 0 ? 1 : $totalPreviousViews;

        $change = round($totalPageViews / $totalPreviousViews, 4) * 100;
        $change = $change . '%';

        return ['total' => $totalPageViews, 'change' => $change];
    }

}
