<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Livewire\Component;

class SocialSharingButtons extends Component
{
    public $pageDetails;
    public $shareButtons;
    public $contentId;

    public function mount()
    {
        $this->shareButtons = \Share::currentPage()
            ->facebook()
            ->twitter()
            ->linkedin()
            ->reddit()
            ->getRawLinks();
    }

    public function recordSocialShare()
    {
        $update = Content::where('id', $this->contentId)->first();
        $update->social_share_clicks = $update->social_share_clicks + 1;
        $update->save();
    }

    public function render()
    {
        return view('livewire.social-sharing-buttons');
    }
}
