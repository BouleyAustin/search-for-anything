<?php

namespace App\Http\Livewire;

use App\Services\HelperService;
use Livewire\Component;

class EmailOptin extends Component
{
    public $pageDetails;
    public $email;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function addEmail()
    {
        $this->validate();

        HelperService::addEmailToPage($this->pageDetails['email_api_key'], $this->pageDetails['email_api_tag'], $this->pageDetails['email_provider'], $this->email);
        $this->email = null;

        session()->flash('success', 'You have joined the email list, stay tuned for new episodes and giveaways!!');
    }

    public function render()
    {
        return view('livewire.email-optin');
    }
}
