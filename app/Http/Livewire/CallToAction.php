<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class CallToAction extends Component
{
    public $isCreating;
    public $isEditing;
    public $callToActions;
    public $callToAction = [];

    protected $rules = [
        'callToAction.name' => 'required|string',
        'callToAction.title' => 'required|string',
        'callToAction.sub_title' => 'required|string',
        'callToAction.button_text' => 'required|string',
        'callToAction.button_url' => 'required|url',
    ];

    public function mount()
    {
        $this->callToActions = Auth::user()->pages()->first()->callToAction()->get();
        $this->isCreating = false;
        $this->isEditing = false;
        $this->callToAction = [
            'name' => null,
            'title' => null,
            'sub_title' => null,
            'button_text' => null,
            'button_url' => null,
            'image_url' => null,
            'file' => null,
        ];
    }

    public function saveCreating()
    {
        $this->validate();

        $newCTA = new \App\Models\CallToAction();
        $newCTA->name = $this->callToAction['name'];
        $newCTA->title = $this->callToAction['title'];
        $newCTA->sub_title = $this->callToAction['sub_title'];
        $newCTA->button_text = $this->callToAction['button_text'];
        $newCTA->button_url = $this->callToAction['button_url'];
        Auth::user()->pages()->first()->callToAction()->save($newCTA);

        $this->mount();
    }

    public function openEdit($ctaId)
    {
        $this->isEditing = true;
        $this->callToAction = \App\Models\CallToAction::where('id', $ctaId)->first()->toArray();
    }

    public function saveEditing()
    {
        $this->validate();

        $updateCTA = \App\Models\CallToAction::where('id', $this->callToAction['id'])->first();
        $updateCTA->name = $this->callToAction['name'];
        $updateCTA->title = $this->callToAction['title'];
        $updateCTA->sub_title = $this->callToAction['sub_title'];
        $updateCTA->button_text = $this->callToAction['button_text'];
        $updateCTA->button_url = $this->callToAction['button_url'];
        $updateCTA->save();

        $this->mount();
    }

    public function deleteCTA($ctaId)
    {
        $contentsWithCTA = Content::where('cta_id', $ctaId)->get()->toArray();

        foreach($contentsWithCTA as $content){
            $update = Content::where('id', $content['id'])->first();
            $update->cta_id = null;
            $update->show_cta = 0;
            $update->save();
        }

        \App\Models\CallToAction::where('id', $ctaId)->first()->delete();
        $this->mount();
    }

    public function close()
    {
        $this->isCreating = false;
        $this->isEditing = false;
    }

    public function addLeaveAReview()
    {
        $newCTA = new \App\Models\CallToAction();
        $newCTA->name = 'Leave A Review CTA';
        $newCTA->title = 'Are you enjoying this podcast??';
        $newCTA->sub_title = 'Leave a review to show your support and help this podcast reach more people!';
        $newCTA->button_text = 'LEAVE A REVIEW :)';
        $newCTA->button_url = URL::previous();
        $newCTA->image_url = 'https://i5.walmartimages.com/asr/8e122f94-0ee7-4457-95e2-bbd70c0156e8_1.0ff2125f11697892eda3cffcdeceaa59.png';
        Auth::user()->pages()->first()->callToAction()->save($newCTA);

        $this->mount();
    }

    public function render()
    {
        return view('livewire.call-to-action');
    }
}
