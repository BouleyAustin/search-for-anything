<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Transcription;
use App\Services\TranscriptionService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class EditContent extends Component
{
    public $contentId;
    public $isViewing = false;
    public $content = [];
    public $transcript = [];
    public $callToActions = [];

    protected $rules = [
        'content.title' => 'required|string',
        'content.platform' => 'required',
        'content.podcast_link' => 'required|url',
        'content.show_cta' => 'required|boolean',
        'content.apple_link' => 'sometimes|nullable|url',
        'content.spotify_link' => 'sometimes|nullable|url',
        'content.meta_title' => 'sometimes|nullable|string',
        'content.meta_description' => 'sometimes|nullable|string',
        'content.meta_keywords' => 'sometimes|nullable|string',
    ];

    public function readyToLoad()
    {
        $this->content = Content::where('id', $this->contentId)->first()->toArray();
        $this->transcript = Transcription::where('content_id', $this->contentId)->get()->toArray();
        $this->callToActions = Auth::user()->pages()->first()->callToAction()->get()->toArray();
    }

    public function close()
    {
        $this->isViewing = false;
    }

    public function save()
    {
        $this->validate();

        $updateContent = Content::where('id', $this->contentId)->first();
        $updateContent->title = $this->content['title'];
        $updateContent->platform = $this->content['platform'];
        $updateContent->podcast_link = $this->content['podcast_link'];
        $updateContent->video_link = $this->content['video_link'];
        $updateContent->show_cta = $this->content['show_cta'];
        $updateContent->cta_id = $this->content['cta_id'];
        $updateContent->save();

        $this->isViewing = false;
    }

    public function updateTranscript()
    {
        foreach($this->transcript as $item){
            $update = Transcription::where('id', $item['id'])->first();
            $update->sentence = $item['sentence'];
            $update->confidence = 1;
            $update->save();
        }
    }

    public function render()
    {
        return view('livewire.edit-content');
    }
}
