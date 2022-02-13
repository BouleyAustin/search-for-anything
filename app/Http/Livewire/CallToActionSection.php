<?php

namespace App\Http\Livewire;

use App\Models\CallToAction;
use App\Services\HelperService;
use Livewire\Component;

class CallToActionSection extends Component
{
    public $ctaId;
    public $contentId;
    public $callToAction;

    public function mount()
    {
        $this->callToAction = CallToAction::where('id', $this->ctaId)->first()->toArray();
    }

    public function recordCTAClick()
    {
        HelperService::countCTAClicks($this->contentId);
    }

    public function render()
    {
        return view('livewire.call-to-action-section');
    }
}
