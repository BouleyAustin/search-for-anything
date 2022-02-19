<?php

namespace App\Http\Livewire;

use App\Services\HelperService;
use App\Services\SearchService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class SearchBar extends Component
{
    public $search;
    public $searchResults = [];
    public $searchBarText;
    public $searchBarInput;
    public $pageImage;
    public $pageUrl;
    public $textColor;
    public $pageId;
    public $searched = false;
    public $test;

    public function mount()
    {
        $this->test = HelperService::testAccount($this->pageUrl);
    }

    public function search()
    {
        if($this->search == NULL || $this->search == ' '){
            $this->clear();
        }
        else{
            $this->searchResults = SearchService::getSearchResults($this->pageId, $this->search);

            SearchService::recordSearchHistory($this->pageId, $this->search);

            if(count($this->searchResults) == 0){
                session()->flash('error', 'Sorry, it appears we could not find anything matching that search term. Here are some of our top search terms to help you out!');
            }
        }
    }

    public function clear()
    {
        $this->search = NULL;
        $this->searchResults = [];
    }

    public function render()
    {
        return view('livewire.search-bar');
    }
}
