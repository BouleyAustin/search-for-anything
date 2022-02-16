<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Services\HelperService;
use Livewire\Component;

class EmailOptin extends Component
{
    public $pageDetails;
    public $email;
    public $contentId;

    protected $rules = [
        'email' => 'required|email',
    ];

    public function addEmail()
    {
        $this->validate();

        HelperService::addEmailToPage($this->pageDetails['email_api_key'], $this->pageDetails['email_api_tag'], $this->pageDetails['email_provider'], $this->email);
        $this->email = null;

        $content = Content::where('id', $this->contentId)->first();
        $content->email_optin = $content->email_optin + 1;
        $content->save();

        session()->flash('success', 'You have joined the email list, stay tuned for new episodes and giveaways!!');
    }

    public function render()
    {
        return view('livewire.email-optin');
    }
}
