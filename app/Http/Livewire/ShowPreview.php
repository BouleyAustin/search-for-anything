<?php

namespace App\Http\Livewire;

use App\Models\Content;
use App\Models\Page;
use App\Services\RSSHelper;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPreview extends Component
{
    use WithPagination;

    public $pageDetails;
    public $preview;
    public $podcastName;
    public $results = [];
    public $contents = [];

    public function mount()
    {
        $this->preview = false;
        $this->pageDetails = Page::where('url_ending', 'marketing-secrets')->first()->toArray();
        $this->contents = Content::where('page_id', $this->pageDetails['id'])->limit(4)->get()->toArray();
    }

    public function updatedPodcastName()
    {
        $this->podcastName = str_replace('&amp;', '', $this->podcastName);

        $query_array = array (
            'term' => $this->podcastName,
            'entity' => 'podcast',
        );

        $query = http_build_query($query_array);

        $api = json_decode(file_get_contents('https://itunes.apple.com/search' . '?' . $query), true);

        if(count($api['results']) > 5){
            $this->results = array_slice($api['results'], 0, 5, true);
        }
        else{
            $this->results = $api['results'];
        }
    }

    public function getRSS($index)
    {
        $rss = $this->results[$index]['feedUrl'];

        $this->pageDetails['link_home'] = $this->results[$index]['artworkUrl600'];
        $this->pageDetails['search_title'] = $this->results[$index]['collectionName'];
        $this->pageDetails['sub_search_title'] = 'Search Anything I Have Ever Said In My Podcast';
        $this->contents = RSSHelper::getPreviewTitles($rss);

        $this->preview = true;
    }

    public function render()
    {
        return view('livewire.show-preview');
    }
}
