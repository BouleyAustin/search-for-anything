<div>
    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
        <div class="p-3">
            <div class="flex flex-col text-center pr-2 sm:pr-2 pl-2 sm:pl-2 my-5">
                @if(!$partOneCompleted)
                    <h6 class="pl-2 text-lg sm:text-2xl font-semibold mb-1 mt-3">Onboarding Checklist To Get Started Quickly! (IMPORTANT!)</h6>
                @else
                    <h6 class="pl-2 text-lg sm:text-2xl font-semibold mb-1 mt-3">&#127881; Check out everything SearchPod.io has done for you! &#127881;</h6>
                @endif
                @if(!$partOneCompleted)
                    <div class="mt-5" x-data="{ dropdown: false }">
                        <div  x-bind:class="dropdown ? 'bg-blue-50 overflow-hidden rounded-lg' : ''">
                            <div class="p-3">
                                <div class="flex flex-col sm:flex-row justify-between items-center">
                                    <div class="flex justify-left items-center space-x-3">
                                        <div>
                                            @if($rss)
                                                <span class="h-8 w-8 rounded-full bg-green-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/check -->
                                                  <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                  </svg>
                                                </span>
                                            @else
                                                <span class="h-8 w-8 rounded-full bg-red-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/x -->
                                                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </span>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="text-md text-gray-900">Enter Your Podcast RSS Feed</p>
                                        </div>
                                    </div>
                                    <div @click="dropdown = !dropdown" class="flex justify-right items-center space-x-3">
                                        <p class="text-md text-gray-600">2 mins</p>
                                        <div x-show="dropdown == false">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                        <div x-show="dropdown == true">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none" x-show="dropdown == true" class="p-3 text-left">
                                    <p class="text-left text-gray-600 mb-3">Go to your podcast host and grab your RSS feed:</p>
                                    <div class="mb-5 mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                        <label class="text-sm sm:text-md font-medium text-gray-600">RSS Feed URL:</label>
                                        <div class="pl-3">
                                            <input wire:model="rssUrl" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                            @error('rssUrl') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <x-jet-secondary-button wire:click="submitRss">
                                        Save RSS Feed
                                    </x-jet-secondary-button>
                                    <div wire:loading wire:target="submitRss">
                                        <p>Loading...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ dropdown: false }">
                        <div x-bind:class="dropdown ? 'bg-blue-50 overflow-hidden rounded-lg' : ''">
                            <div class="p-3">
                                <div class="flex flex-col sm:flex-row justify-between items-center">
                                    <div class="flex justify-left items-center space-x-3">
                                        <div>
                                            @if($apple)
                                                <span class="h-8 w-8 rounded-full bg-green-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/check -->
                                                  <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                  </svg>
                                                </span>
                                            @else
                                                <span class="h-8 w-8 rounded-full bg-red-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/x -->
                                                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </span>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="text-md text-gray-900">Add Your Favorite Podcast Providers</p>
                                        </div>
                                    </div>
                                    <div @click="dropdown = !dropdown" class="flex justify-right items-center space-x-3">
                                        <p class="text-md text-gray-600">3 mins</p>
                                        <div x-show="dropdown == false">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                        <div x-show="dropdown == true">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none" x-show="dropdown == true" class="p-3 text-left">
                                    <p class="text-left text-gray-600 mb-3">Go to your podcast sources and </p>
                                    <div class="mb-5 mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                        <label class="text-sm sm:text-md font-medium text-gray-600">Apple Directory Link:</label>
                                        <div class="pl-3">
                                            <input wire:model="favoritePodcasts.apple" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                            @error('favoritePodcasts.apple') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5 mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                        <label class="text-sm sm:text-md font-medium text-gray-600">Spotify Directory Link:</label>
                                        <div class="pl-3">
                                            <input wire:model="favoritePodcasts.spotify" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                            @error('favoritePodcasts.spotify') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5 mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                        <label class="text-sm sm:text-md font-medium text-gray-600">Google Directory Link:</label>
                                        <div class="pl-3">
                                            <input wire:model="favoritePodcasts.google" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                            @error('favoritePodcasts.google') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5 mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                        <label class="text-sm sm:text-md font-medium text-gray-600">Overcast Directory Link:</label>
                                        <div class="pl-3">
                                            <input wire:model="favoritePodcasts.overcast" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                            @error('favoritePodcasts.overcast') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <div class="mb-5 mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                        <label class="text-sm sm:text-md font-medium text-gray-600">Stitcher Directory Link:</label>
                                        <div class="pl-3">
                                            <input wire:model="favoritePodcasts.stitcher" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                            @error('favoritePodcasts.stitcher') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <x-jet-secondary-button wire:click="saveFavorite">
                                        Save Podcast Directories
                                    </x-jet-secondary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ dropdown: false }">
                        <div x-bind:class="dropdown ? 'bg-blue-50 overflow-hidden rounded-lg' : ''">
                            <div class="p-3">
                                <div class="flex flex-col sm:flex-row justify-between items-center">
                                    <div class="flex justify-left items-center space-x-3">
                                        <div>
                                            @if($color)
                                                <span class="h-8 w-8 rounded-full bg-green-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/check -->
                                                  <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                  </svg>
                                                </span>
                                            @else
                                                <span class="h-8 w-8 rounded-full bg-red-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/x -->
                                                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </span>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="text-md text-gray-900">Customize Your Search Page</p>
                                        </div>
                                    </div>
                                    <div @click="dropdown = !dropdown" class="flex justify-right items-center space-x-3">
                                        <p class="text-md text-gray-600">3 mins</p>
                                        <div x-show="dropdown == false">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                        <div x-show="dropdown == true">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none" x-show="dropdown == true" class="p-3 text-left">
                                    <div class="mt-5">
                                        <div class="w-full border border-gray-200 rounded-lg" style="{{ $pageDetails['background_color'] != null ? 'background-color: ' . $pageDetails['background_color'] : '' }}">
                                            <div class="p-5">
                                                <div class="mb-5 font-sans text-gray-900 antialiased">
                                                    <div class="mt-10">
                                                        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
                                                            <div class="text-center">
                                                                <p class="font-sans font-black text-3xl {{ $pageDetails['text_color'] != null ? 'text-' . $pageDetails['text_color'] : '' }}">{{ $pageDetails['search_title'] ?? 'The ' . $pageDetails['name'] . ' Search Engine' }}</p>
                                                                <p class="pt-4 text-sm {{ $pageDetails['text_color'] != null ? 'text-' . $pageDetails['text_color'] : '' }}">{{ $pageDetails['sub_search_title'] ?? 'Search For Anything I Have Ever Said!' }}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-8">
                                                        <div class="flex bg-white overflow-hidden shadow-xl rounded-lg p-1">
                                                            <input disabled
                                                                   placeholder="{{ $pageDetails['search_bar_input'] ?? 'What do you want to learn about?' }}"
                                                                   class="border shadow-xs hover:border-gray-300 block w-full sm:text-sm border-gray-200 rounded-md text-center text-white bg-white">
                                                            <x-jet-secondary-button>
                                                                <p>&#128270;</p>
                                                            </x-jet-secondary-button>
                                                        </div>
                                                    </div>
                                                    <div class="mt-10 text-center text-sm {{ $pageDetails['text_color'] != null ? 'text-' . $pageDetails['text_color'] : '' }}">
                                                        {{ $pageDetails['search_bar_text'] ?? 'Most Recent Searches: Your Top Content Ideas, etc' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-left text-gray-600 mb-3 mt-5">This is what your search page (aka home page) looks like! Go customize it to your design and colors so it fits your brand and audience.</p>
                                    <a href="{{ route('custom') }}">
                                        <x-jet-secondary-button>
                                            Go Customize My Page
                                        </x-jet-secondary-button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div x-data="{ dropdown: false }">
                        <div x-bind:class="dropdown ? 'bg-blue-50 overflow-hidden rounded-lg' : ''">
                            <div class="p-3">
                                <div class="flex flex-col sm:flex-row justify-between items-center">
                                    <div class="flex justify-left items-center space-x-3">
                                        <div>
                                            @if($share)
                                                <span class="h-8 w-8 rounded-full bg-green-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/check -->
                                                  <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                                  </svg>
                                                </span>
                                            @else
                                                <span class="h-8 w-8 rounded-full bg-red-400 flex items-center justify-center">
                                                  <!-- Heroicon name: solid/x -->
                                                  <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </span>
                                            @endif
                                        </div>
                                        <div>
                                            <p class="text-md text-gray-900">Share With Your Audience and Start Growing</p>
                                        </div>
                                    </div>
                                    <div @click="dropdown = !dropdown" class="flex justify-right items-center space-x-3">
                                        <p class="text-md text-gray-600">2 mins</p>
                                        <div x-show="dropdown == false">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                        </div>
                                        <div x-show="dropdown == true">
                                            <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path></svg>
                                        </div>
                                    </div>
                                </div>
                                <div style="display: none" x-show="dropdown == true" class="p-3 text-left">
                                    <p class="text-left text-gray-600 mb-3 mt-3">Copy your search page link below and share it with your audience! They'll love your new site plus the initial traffic will help it rank higher in Google :)</p>
                                    <div class="mt-3 mb-5">
                                       <div class="bg-white p-3 rounded-lg">
                                          <p>https://www.searchpod.io/{{ $pageDetails['url_ending'] }}</p>
                                       </div>
                                    </div>
                                    <a href="{{ route('custom') }}">
                                        <p class="mt-3 mb-5 text-gray-600 underline">Change/Customize Your Link</p>
                                    </a>
                                    <x-jet-secondary-button wire:click="shareSite">
                                        Click When Done Sharing!
                                    </x-jet-secondary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="relative mt-3 mb-4">
                        <div class="text-center mt-3">
                            <div class="my-5">
                                <div class="flex flex-wrap justify-center items-center gap-5">
                                    <div class="flex justify-left items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <p>Podcast Info Imported From Your Feed</p>
                                    </div>
                                    <div class="flex justify-left items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <p>{{ $episodeCount }} Dedicated Episode Pages Created</p>
                                    </div>
                                    <div class="flex justify-left items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <p>Website Submitted To Be Indexed By Google</p>
                                    </div>
                                    <div class="flex justify-left items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <p>Player / Directory Links Added</p>
                                    </div>
                                    <div class="flex justify-left items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <p>Automatic Transcription Enabled</p>
                                    </div>
                                    <div class="flex justify-left items-center gap-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <p>Website Optimized For Mobile</p>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="pt-10">--}}
{{--                                <x-jet-secondary-button>--}}
{{--                                    <p class="text-md">Claim My FREE Gift!</p>--}}
{{--                                </x-jet-secondary-button>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
