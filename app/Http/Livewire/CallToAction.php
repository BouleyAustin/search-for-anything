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

    public function render()
    {
        return view('livewire.call-to-action');
    }
}
