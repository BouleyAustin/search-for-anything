<?php

namespace App\Http\Livewire;

use App\Models\Content;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ContentTable extends Component
{
    use WithPagination;

    public $pageName = '';
    public $pageUrl = '';
    public $pageImage;

    public function mount()
    {
        $page = Auth::user()->pages()->first();
        $this->pageName = $page->name;
        $this->pageUrl = $page->url_ending;
        $this->pageImage = $page->link_home;
    }

    public function render()
    {
        $page = Auth::user()->pages()->first();
        $contents = Content::where('page_id', $page['id'])->paginate(10);

        return view('livewire.content-table', [
            'contents' => $contents,
        ]);
    }
}
