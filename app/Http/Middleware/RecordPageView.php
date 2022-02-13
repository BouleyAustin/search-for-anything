<?php

namespace App\Http\Middleware;

use App\Services\HelperService;
use Closure;
use Illuminate\Http\Request;

class RecordPageView
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        HelperService::recordPageViews($request);
        return $next($request);
    }
}
