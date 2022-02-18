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
    public $pageDetails;

    public function mount()
    {
        $this->pageUrl = $this->pageDetails['url_ending'];
        $this->pageId = $this->pageDetails['id'];
        $this->pageImage = $this->pageDetails['link_home'];
    }

    public function render()
    {
        $contents = Content::where('page_id', $this->pageId)->paginate(10);

        return view('livewire.show-episodes', [
            'contents' => $contents,
        ]);
    }
}
