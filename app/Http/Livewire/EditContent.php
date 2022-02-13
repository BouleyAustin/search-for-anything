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

    protected $rules = [
        'content.title' => 'required|string',
        'content.platform' => 'required',
        'content.podcast_link' => 'required|url',
        'content.show_cta' => 'required|boolean'
    ];

    public function readyToLoad()
    {
        $this->content = Content::where('id', $this->contentId)->first()->toArray();
        $this->transcript = Transcription::where('content_id', $this->contentId)->get()->toArray();
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
