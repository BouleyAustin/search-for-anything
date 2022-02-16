<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-3">
                <div class="mt-3">
                    <p class="text-center font-bold text-xl mb-5">The Podcast Settings</p>
                </div>
                @if (session()->has('successPodcast'))
                    <div class="rounded-md bg-green-50 p-4 mt-2">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/check-circle -->
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">
                                    {{ session('successPodcast') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div>
                    <div class="mb-3 flex flex-wrap justify-left items-center gap-5">
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Podcast RSS Feed:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.podcast_rss" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('pageDetails.podcast_rss') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="block text-sm font-medium">Automatic:</label>
                            <div class="pl-3">
                                <select wire:model="pageDetails.automatic_transcription" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                    <option value=1>Yes, Pull Automatically</option>
                                    <option value=0>No, I'll Upload Transcripts</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Apple Link:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.apple_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                @error('pageDetails.apple_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Spotify Link:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.spotify_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                @error('pageDetails.spotify_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Google Link:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.google_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                @error('pageDetails.google_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Overcast Link:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.overcast_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                @error('pageDetails.overcast_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Stitcher Link:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.stitcher_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                                @error('pageDetails.stitcher_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <x-jet-secondary-button wire:click="savePodcast">
                        Save Settings
                    </x-jet-secondary-button>
                    <p wire:loading wire:target="savePodcast">Loading...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-3">
                <div class="mt-3">
                    <p class="mb-5 text-center font-bold text-xl">The Social Links Settings</p>
                </div>
                @if (session()->has('successSocial'))
                    <div class="rounded-md bg-green-50 p-4 mt-2">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/check-circle -->
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">
                                    {{ session('successSocial') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mb-3 flex flex-wrap justify-left items-center gap-5">
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Instagram URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.link_instagram" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.link_instagram') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">TikTok URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.link_tiktok" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.link_tiktok') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">YouTube URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.link_youtube" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.link_youtube') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Twitter URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.link_twitter" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.link_twitter') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Facebook URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.link_facebook" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.link_facebook') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">LinkedIn URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.link_linkedin" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.link_linkedin') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Custom URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.link_url" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.link_url') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <x-jet-secondary-button wire:click="saveSocial">
                        Save Settings
                    </x-jet-secondary-button>
                    <p wire:loading wire:target="saveSocial">Loading...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-3">
                <div class="mt-3">
                    <p class="mb-5 text-center font-bold text-xl">The Advanced SEO Settings</p>
                </div>
                @if (session()->has('successSEO'))
                    <div class="rounded-md bg-green-50 p-4 mt-2">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/check-circle -->
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">
                                    {{ session('successSEO') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mb-3 flex flex-wrap justify-left items-center gap-5">
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Search Page URL:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.url_ending" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.url_ending') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Meta Title:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.meta_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.meta_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Meta Description:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.meta_description" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.meta_description') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Meta Keywords:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.meta_keywords" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.meta_keywords') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="block text-sm font-medium">Meta Robots:</label>
                        <div class="pl-3">
                            <select wire:model="pageDetails.meta_robots" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value=null>Index, Follow (recommended)</option>
                                <option value="Index">Index Only</option>
                                <option value="Follow">Follow Only</option>
                                <option value="NoIndex">No Index</option>
                                <option value="NoFollow">No Follow</option>
                                <option value="none">None</option>
                                <option value="rating">Rating (adult content)</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-5 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Favicon Image:</label>
                        <div class="pl-3">
                            <input wire:model="pageDetails.favicon_url" type="file" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                            @error('pageDetails.favicon_url') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <x-jet-secondary-button wire:click="saveSEO">
                        Save Settings
                    </x-jet-secondary-button>
                    <p wire:loading wire:target="saveSEO">Loading...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="pt-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-3">
                <div class="mt-3">
                    <p class="mb-5 text-center font-bold text-xl">Integrations And Tracking Settings</p>
                </div>
                @if (session()->has('successIntegrations'))
                    <div class="rounded-md bg-green-50 p-4 mt-2">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <!-- Heroicon name: solid/check-circle -->
                                <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm font-medium text-green-800">
                                    {{ session('successIntegrations') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mb-3 flex flex-wrap justify-left items-center gap-5">
                    <div class="flex flex-col sm:flex-row gap-5">
                        <div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="block text-sm font-medium">Collect Emails:</label>
                                <div class="pl-3">
                                    <select wire:model="pageDetails.collect_email" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <option value=1>Yes</option>
                                        <option value=0>No</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="block text-sm font-medium">Email Provider:</label>
                                <div class="pl-3">
                                    <select wire:model="pageDetails.email_provider" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <option value="">Select</option>
                                        <option value="convertkit">Convertkit</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Email API Key:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.email_api_key" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('pageDetails.email_api_key') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="block text-sm font-medium">Email Tag:</label>
                                <div class="pl-3">
                                    <select wire:model="pageDetails.email_api_tag" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <option value="">Select</option>
                                        @foreach($tags as $tag)
                                            <option value="{{ $tag['id'] }}">{{ $tag['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10 mb-3 flex flex-col sm:flex-row gap-5 justify-left items-center">
                        <div>
                            <div class="flex flex-col gap-3">
                                <p class="text-sm w-3/4">Add Tracking Code To The Search Page (Facebook Pixel, Google Analytics, etc)</p>
                                <textarea wire:model="pageDetails.tracking_code_search" class="w-96 rounded border border-gray-300 mt-2" rows="5"></textarea>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <p class="text-sm w-3/4">Add Tracking Code To The Episode Pages (Facebook Pixel, Google Analytics, etc)</p>
                                <textarea wire:model="pageDetails.tracking_code_episode" class="w-96 rounded border border-gray-300 mt-2" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <x-jet-secondary-button wire:click="saveIntegrations">
                        Save Settings
                    </x-jet-secondary-button>
                    <p wire:loading wire:target="saveIntegrations">Loading...</p>
                </div>
            </div>
        </div>
    </div>
</div>
