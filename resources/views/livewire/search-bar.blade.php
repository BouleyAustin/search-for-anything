<div class="m-2 sm:m-0">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 m-2">
        <div class="flex bg-white overflow-hidden shadow-xl rounded-lg p-1">
            <input
                wire:model.debounce.500ms="search"
                wire:keydown.enter="search"
                wire:keydown.escape="clear"
                type="search"
                placeholder="{{ $searchBarInput ?? 'What do you want to learn about?' }}"
                class="border shadow-xs hover:border-gray-300 block w-full sm:text-sm border-gray-200 rounded-md text-center"
                required autofocus>
            <x-jet-secondary-button wire:click="search">
                <p>&#128270;</p>
            </x-jet-secondary-button>
        </div>
        @if (session()->has('error'))
            <div class="rounded-md bg-red-50 p-4 mt-2">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <!-- Heroicon name: solid/check-circle -->
                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-red-800">
                            {{ session('error') }}
                        </p>
                    </div>
                </div>
            </div>
        @endif

        @if(count($searchResults) > 0)
            <div class="mt-5 mb-24 flex overflow-hidden justify-center items-center flex-wrap gap-5">
                @foreach($searchResults as $result)
                    <div class="bg-white rounded-lg shadow-md w-full sm:w-72 h-48">
                        <a href="{{ $result['link'] }}" target="_blank">
                            <div class="p-5">
                                <div class="mt-1 whitespace-wrap text-sm font-medium text-gray-900">
                                    <div class="flex items-center gap-2">
                                        <img src="{{ $pageImage ?? 'https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg' }}" class="w-10 h-10"/>
                                        <p class="text-wrap font-bold">{{ $result['title'] }}</p>
                                    </div>
                                </div>
                                <div class="mt-3 text-left whitespace-wrao text-sm">
                                    <b>Starts At:</b> {{ $result['starts_at'] }}
                                </div>
                                <div class="mt-3 mb-2 text-left whitespace-wrap text-sm">
                                    <b>Summary:</b> {{ $result['sentence'] }}...
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
    @if(count($searchResults) == 0)
        <div class="mt-10 text-center text-sm sm:text-base {{ $textColor != null ? 'text-' . $textColor : '' }}">
            <a href="/{{ $pageUrl }}/episodes">
                <p class="hover:underline">{{ $searchBarText ?? 'Check out all our episodes here!' }}</p>
            </a>
        </div>
    @endif
</div>
