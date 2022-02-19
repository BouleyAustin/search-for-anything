<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreFreeTrialUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $subscription = $request->user()->getSubscription();

        if ($request->user() && !$subscription) {
            return redirect(route('payment'));
        }

        return $next($request);
    }
}
