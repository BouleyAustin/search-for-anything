<?php

namespace App\Http\Livewire;

use App\Services\SearchService;
use Illuminate\Http\Request;
use Livewire\Component;

class SearchBar extends Component
{
    public $search;
    public $searchResults = [];
    public $searchBarText;
    public $searchBarInput;
    public $textColor;
    public $pageId;

    public function updatedSearch()
    {
        if($this->search == NULL || $this->search == ' '){
            $this->search = NULL;
            $this->searchResults = [];
        }
        else{
            $this->searchResults = SearchService::getSearchResults($this->pageId, $this->search);
        }
    }

    public function redirectToPodcast($link, $startsAt)
    {
        return redirect()->away($link);
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
