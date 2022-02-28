<div>
    @if($preview)
        <div class="mb-5 font-sans text-gray-900 antialiased" style="{{ $pageDetails['background_color'] != null ? 'background-color: ' . $pageDetails['background_color'] : '' }}">
            <div class="pt-12">
                <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                    <div class="text-center">
                        <p class="font-sans font-black text-2xl sm:text-3xl {{ $pageDetails['text_color'] != null ? 'text-' . $pageDetails['text_color'] : '' }}">{{ $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine' }}</p>
                        <p class="pt-4 text-md {{ $pageDetails['text_color'] != null ? 'text-' . $pageDetails['text_color'] : '' }}">{{ $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!' }}</p>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <div class="m-2 sm:m-0">
                    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 m-2">
                        <div class="flex bg-white overflow-hidden shadow-xl rounded-lg p-1">
                            <input
                                disabled
                                wire:model.debounce.500ms="search"
                                wire:keydown.enter="search"
                                wire:keydown.escape="clear"
                                type="search"
                                placeholder="What do you want to learn about?"
                                class="border shadow-xs hover:border-gray-300 block w-full sm:text-sm border-gray-300 rounded-md text-center"
                                required>
                            <x-jet-secondary-button>
                                <p>&#128270;</p>
                            </x-jet-secondary-button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-16">
                <div class="w-full">
                    <div class="bg-white rounded-t-md p-3">
                        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                            <div class="pt-8 flex flex-wrap gap-3 justify-center items-center">
                                @if(count($contents))
                                    @foreach($contents as $content)
                                        <a href="" target="_blank">
                                            <div class="w-52 border rounded-md p-3 hover:bg-gray-50">
                                                <div class="h-42 w-42">
                                                    <img src="{{ $pageDetails['link_home'] ?? 'https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg' }}"/>
                                                </div>
                                                <div class="pt-2 text-center text-wrap">
                                                    <p>{{ $content }}</p>
                                                </div>
                                            </div>
                                        </a>
                                    @endforeach
                                @else
                                    <p>There appears to be no episodes :(</p>
                                @endif
                            </div>
                        </div>
                        <div>
                            <div class="pt-12 pb-3 text-sm text-center text-black">
                                <p>Listen on other platforms</p>
                                <div class="mt-5 flex flex-col sm:flex-row justify-center items-center gap-3">
                                    <a href="" target="_blank">
                                        <img class="h-12 w-auto"  src="\apple-badge.svg">
                                    </a>
                                    <a href="" target="_blank">
                                        <img class="h-12 w-auto"  src="\spotify-badge.svg">
                                    </a>
                                    <a href="" target="_blank">
                                        <img class="h-12 w-auto" src="\google-badge.svg">
                                    </a>
                                    <a href="" target="_blank">
                                        <img class="h-12 w-auto"  src="\stitcher-badge.png">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-5 mb-5 text-center">
            <a href="{{ route('register') }}">
                <x-jet-button>
                    Get Started - Make Your Site Live!
                </x-jet-button>
            </a>
        </div>
    @else
        <div class="text-center mt-3">
            <p class="text-2xl font-bold">Preview Your Website</p>
            <div class="mt-3">
                <p>Find your podcast</p>
                <div class="mt-3">
                    <div class="mb-5 mt-3 overflow-hidden rounded-lg flex flex-col items-center justify-center">
                        <div class="">
                            <input wire:model="podcastName" placeholder="Enter your podcast..." type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-96 sm:text-sm border-gray-300 rounded-md">
                        </div>
                        <div class="mt-2 space-y-2">
                            @forelse($results as $result)
                                <div wire:click="getRSS({{ $loop->index }})" class="border rounded-lg w-96 p-3 hover:bg-gray-50">
                                    <div class="flex items-center justify-center gap-3">
                                        <div>
                                            <img class="w-12 h-12" src="{{ $result['artworkUrl100'] }}"/>
                                        </div>
                                        <div>
                                            <p>{{ $result['collectionName'] }}</p>
                                            <p>Episodes: {{ $result['trackCount'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
