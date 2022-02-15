<div>
    <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
        <div class="p-3">
            <div class="flex flex-col text-center pr-2 sm:pr-2 pl-2 sm:pl-2 my-5">
                @if(!$partOneCompleted)
                    <h6 class="pl-2 text-lg sm:text-2xl font-semibold mb-1 mt-3">Onboarding Checklist To Get Started Quickly (Plus A Secret Gift)</h6>
                @else
                    <h6 class="pl-2 text-lg sm:text-2xl font-semibold mb-1 mt-3">&#127881; Congrats On Completing The Checklist! &#127881;</h6>
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
                                        <p class="text-md text-gray-600">4 mins</p>
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
                                        <label class="text-sm sm:text-md font-medium text-gray-600">RSS Feed URL:</label>
                                        <div class="pl-3">
                                            <input wire:model="rssUrl" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                            @error('rssUrl') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <x-jet-secondary-button wire:click="submitRss">
                                        Save RSS Feed
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
                                    <p class="text-left text-gray-600 mb-3">The Impeccable Screener is literally one of the best screeners on the internet right now! With a top rating by Benzinga and so many user reviews, you have to check this out if you want to find amazing stocks that fit you and your strategy in seconds!</p>
                                    <a href="">
                                        <x-jet-secondary-button>
                                            Find Some Amazing Stocks
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
                                    <p class="text-left text-gray-600 mb-3">The Impeccable Stock Alerts help you find stocks before they explode, keep you up to date on your portfolio and alert you to crashes before they happen! If you want to take advantage of this, you need to add stocks to your watchlist!</p>
                                    <a href="">
                                        <x-jet-secondary-button>
                                            Let's Add Some Stocks
                                        </x-jet-secondary-button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="relative mt-3 mb-8">
                        <div class="text-center mt-3">
                            <p class="text-lg text-gray-900 mb-3">Click Below And Sign Up For A Plan To Extend Your Trial And Get $10 Off For Life!</p>

                            <a href="">
                                <x-jet-secondary-button>
                                    <p class="text-md">Claim My Exclusive Perks!</p>
                                </x-jet-secondary-button>
                            </a>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
