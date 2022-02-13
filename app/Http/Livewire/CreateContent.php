<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Services\TranscriptionService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateContent extends Component
{
    use WithFileUploads;

    public $isViewing = false;
    public $content = [];

    protected $rules = [
        'content.name' => 'required|string',
        'content.type' => 'required',
        'content.file' => 'required|mimes:txt',
        'content.podcast_link' => 'required|url',
    ];

    public function mount()
    {
        $this->content = [
            'name' => null,
            'type' => null,
            'file' => null,
            'podcast_link' => null,
            'video_link' => null,
        ];
    }

    public function close()
    {
        $this->isViewing = false;
    }

    public function save()
    {
        $this->validate();

        $newContent = new Content();
        $newContent->title = $this->content['name'];
        $newContent->platform = $this->content['type'];
        $newContent->podcast_link = $this->content['podcast_link'];
        $newContent->video_link = $this->content['video_link'];
        Auth::user()->pages()->first()->contents()->save($newContent);

        $this->content['file']->store('temp_transcripts');
        $fileName = $this->content['file']->hashName();

        TranscriptionService::getTranscriptionFromImport($newContent->id, $fileName);

        return redirect(URL::previous());
    }

    public function render()
    {
        return view('livewire.create-content');
    }
}
