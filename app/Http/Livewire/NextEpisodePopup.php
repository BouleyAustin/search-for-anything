<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Page;
use Livewire\Component;

class NextEpisodePopup extends Component
{
    public $isViewing = false;
    public $pageId;
    public $contentId;
    public $content;
    public $pageImage;

    protected $listeners = ['openNextEpisodePopup' => 'open'];

    public function readyToLoad()
    {
        $newestContent = Content::where('page_id', $this->pageId)->latest()->first()->toArray();
        $page = Page::where('id', $this->pageId)->first();
        $this->pageImage = $page->link_home;
        $pageUrl = $page->url_ending;
        $newestContent['link'] = '/' . $pageUrl . '/' . $newestContent['url_ending'];
        $this->content = $newestContent;
    }

    public function open()
    {
        $this->isViewing = true;
    }

    public function close()
    {
        $this->isViewing = false;
    }

    public function render()
    {
        return view('livewire.next-episode-popup');
    }
}
