<?php

namespace App\Http\Livewire;

use App\Services\HelperService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomizeSearchPage extends Component
{
    public $pageDetails;

    protected $rules = [
        'pageDetails.search_title' => 'required|string',
        'pageDetails.sub_search_title' => 'required|string',
        'pageDetails.search_bar_input' => 'required|string',
        'pageDetails.text_color' => 'required|string',
        'pageDetails.background_color' => 'required|string',
    ];

    public function mount()
    {
        $this->pageDetails = Auth::user()->pages()->first()->toArray();
        $this->pageDetails = HelperService::setPageDetailsDefaults($this->pageDetails);
    }

    public function save()
    {
        $this->validate();

        $update = Auth::user()->pages()->first();
        $update->search_title = $this->pageDetails['search_title'];
        $update->sub_search_title = $this->pageDetails['sub_search_title'];
        $update->search_bar_input = $this->pageDetails['search_bar_input'];
        $update->text_color = $this->pageDetails['text_color'];
        $update->background_color = $this->pageDetails['background_color'];
        $update->save();

        Session()->flash('success', 'Your search page has been updated!');
    }

    public function render()
    {
        return view('livewire.customize-search-page');
    }
}
