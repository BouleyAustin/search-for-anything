<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-3">
                <div class="mt-3">
                    <p class="text-center font-bold text-xl">The Search Page Settings</p>
                </div>
                @if (session()->has('success'))
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
                                    {{ session('success') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="mt-5 grid grid-cols-3">
                    <div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Search Page URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.url_ending" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Meta Title:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.meta_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Meta Description:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.meta_description" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Meta Keywords:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.meta_keywords" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Meta Robots:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.meta_robots" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-5 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Favicon Image:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.favicon_url" type="file" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Instagram URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.link_instagram" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">TikTok URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.link_tiktok" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">YouTube URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.link_youtube" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Twitter URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.link_twitter" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Facebook URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.link_facebook" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">LinkedIn URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.link_linkedin" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Custom URL:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.link_custom" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="text-sm sm:text-md font-medium">Podcast RSS Feed:</label>
                            <div class="pl-3">
                                <input wire:model="pageDetails.podcast_rss" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                            <label class="block text-sm font-medium">Automatic:</label>
                            <div class="pl-3">
                                <select wire:model="pageDetails.automatic_transcription" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                    <option value=true>Yes, Pull Automatically</option>
                                    <option value=false>No, I'll Upload Transcripts</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    <x-jet-secondary-button wire:click="save">
                        Save Settings
                    </x-jet-secondary-button>
                </div>
            </div>
        </div>
    </div>
</div>