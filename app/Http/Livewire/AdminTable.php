<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Page;
use App\Models\TranscriptProcessing;
use App\Services\TranscriptionService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTable extends Component
{
    use WithPagination;

    public $name = 'TheImpeccableInvestor';
    public $searches;
    public $pageId;
    public $pageUrl;
    public $pageImage;
    public $pageName;
    public $transcriptions;

    public function mount()
    {
        if(!Auth::user()->isAdmin()){
            return redirect(route('dashboard'));
        }

        $page = Page::where('name', $this->name)->first();
        $this->pageId = $page->id;
        $this->pageUrl = $page->url_ending;
        $this->pageImage = $page->link_home;
        $this->pageName = $page->name;

        $this->transcriptions = TranscriptProcessing::where('uploaded_to_searchpod', true)->pluck('content_id')->toArray();

        $this->searches = Page::all()->pluck('name')->toArray();
    }

    public function updatedName()
    {
        $this->mount();
        $this->resetPage();
    }

    public function transcription($contentId)
    {
        $content = Content::where('id', $contentId)->first();
        TranscriptionService::uploadTranscripts($content->audio_url, $content->id, $this->pageId);
    }

    public function render()
    {
        $contents = Page::where('name', $this->name)->first()->contents()->paginate(10);

        return view('livewire.admin-table', [
            'contents' => $contents,
        ]);
    }
}
