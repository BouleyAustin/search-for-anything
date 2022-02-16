<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Page;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEpisodes extends Component
{
    use WithPagination;

    public $pageId;
    public $pageUrl;
    public $pageImage;

    public function mount()
    {
        $this->pageUrl = Page::where('id', $this->pageId)->first()->url_ending;
    }

    public function render()
    {
        $contents = Content::where('page_id', $this->pageId)->paginate(24);

        return view('livewire.show-episodes', [
            'contents' => $contents,
        ]);
    }
}
