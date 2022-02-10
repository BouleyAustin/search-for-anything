<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SearchBar extends Component
{
    public $search;
    public $searchResults = [];
    public $searchBarText;
    public $searchBarInput;
    public $textColor;

    public function render()
    {
        return view('livewire.search-bar');
    }
}
