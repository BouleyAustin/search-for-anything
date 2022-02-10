<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomizeSearchAdvanced extends Component
{
    public $pageDetails;

    public function mount()
    {
        $this->pageDetails = Auth::user()->pages()->first()->toArray();
    }

    public function save()
    {
        $update = Auth::user()->pages()->first();
        $update->search_title = $this->pageDetails['search_title'];
        $update->sub_search_title = $this->pageDetails['sub_search_title'];
        $update->search_bar_input = $this->pageDetails['search_bar_input'];
        $update->search_bar_text = $this->pageDetails['search_bar_text'];
        $update->text_color = $this->pageDetails['text_color'];
        $update->background_color = $this->pageDetails['background_color'];
        $update->save();

        Session()->flash('success', 'Your search page has been updated!');
    }

    public function render()
    {
        return view('livewire.customize-search-advanced');
    }
}
