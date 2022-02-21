<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public static function show(Request $request)
    {
        $user = Auth::user();

        return view('payment',[
            'intent' => $user->createSetupIntent(),
        ]);
    }

    public function createSubscription(Request $request)
    {
        $user = Auth::user();

        $plan = 'price_1KTtM3AEQyG0bZNnYNtNOy1S';
        $planName = 'Founding Member SP';

        $subscription = $user->newSubscription($planName, $plan);

        $id = '2937862';

        try{
            Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://api.convertkit.com/v3/tags/' . $id .'/subscribe', [
                'api_key' => 'SXkfwmWFr_b5m8nssbwQPA',
                'email' => $this->email,
            ]);
        } catch(\Exception $exception){

        }

        $subscription->withCoupon('w4o8VJ5f')
            ->create($request->paymentMethod);

        $newPage = new Page();
        $newPage->name = $user->name;
        $newPage->url_ending = str_replace(' ', '', $user->name) . random_int(0, 1000);
        $user->pages()->save($newPage);

        return redirect(route('dashboard'));

    }
}
