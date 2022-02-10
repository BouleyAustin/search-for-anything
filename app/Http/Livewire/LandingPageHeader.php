<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class LandingPageHeader extends Component
{
    public $isViewing;
    public $email;

    public function mount()
    {
        $this->isViewing = false;
    }

    public function openClose()
    {
        $this->isViewing = !$this->isViewing;
    }

    public function addEmail()
    {
        try{
            $id = '2926579';

            Http::withHeaders([
                'Content-Type' => 'application/json',
            ])->post('https://api.convertkit.com/v3/tags/' . $id .'/subscribe', [
                'api_secret' => 'SXkfwmWFr_b5m8nssbwQPA',
                'email' => $this->email,
            ]);

            $this->email = NULL;

            return redirect()->away('https://forms.gle/uowdbnBA2M2NY6KMA');
            \Log::info('convertkit tag added');
        }catch(\Exception $exception){
            \Log::info('convertkit tag failed');
        }
    }

    public function render()
    {
        return view('livewire.landing-page-header');
    }
}
