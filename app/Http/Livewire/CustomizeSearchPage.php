<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CustomizeSearchPage extends Component
{
    public $pageDetails;

    public function mount()
    {
        $this->pageDetails = Auth::user()->pages()->first()->toArray();

        $this->pageDetails = [
            'search_title' => $this->pageDetails['search_title'] ?? 'The ' . $this->pageDetails['name'] . ' Search Engine',
            'sub_search_title' => $this->pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!',
            'search_bar_input' => $this->pageDetails['search_bar_input'] ?? 'What do you want to learn about?',
            'search_bar_text' => $this->pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc',
            'text_color' => $this->pageDetails['text_color'] ?? 'black',
            'background_color' => $this->pageDetails['background_color'] ?? '#f9fafb',
            'url_ending' => $this->pageDetails['url_ending'],
        ];
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
        return view('livewire.customize-search-page');
    }
}
