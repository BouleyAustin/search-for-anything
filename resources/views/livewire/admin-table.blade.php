<div>
    <div class="flex justify-between items-center mb-3">
        <p>{{ $pageName }}'s Content</p>
        <div>
            <div class="overflow-hidden rounded-lg flex items-center justify-left">
                <div class="pl-3">
                    <select wire:model="name" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                        @foreach($searches as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap gap-3 justify-center items-center">
        @if(count($contents))
            @foreach($contents as $content)
                <div class="w-52 border rounded-md p-3 hover:bg-gray-50">
                    <div class="h-42 w-42">
                        <img src="{{ $pageImage ?? 'https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg' }}"/>
                    </div>
                    <div class="mt-2 text-center text-wrap">
                        <p>{{ substr($content->title, 0, 30) }}...</p>
                    </div>
                    <div class="mt-2 flex flex-col md:flex-row justify-center items-center gap-2">

                        @if(in_array($content->id, $transcriptions))
                            <x-jet-secondary-button>
                                Trans.
                            </x-jet-secondary-button>
                        @else
                            <x-jet-button wire:click="transcription({{ $content->id }})">
                                Trans.
                            </x-jet-button>
                        @endif

                        <a href="{{ '/' . $pageUrl . '/episodes/' . $content->url_ending }}" target="_blank">
                            <x-jet-secondary-button>
                                View
                            </x-jet-secondary-button>
                        </a>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="mt-5 px-3">
        {{ $contents->links() }}
    </div>
</div>
