<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-3">
                <div class="mt-3">
                    <p class="text-center font-bold text-xl">Customize The Search Page</p>
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
                <div class="mt-5 sm:flex sm:justify-between sm:items-center sm:space-x-3">
                    <div class="hidden sm:block">
                        <div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Search Title:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.search_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('pageDetails.search_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Sub Search Title:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.sub_search_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('pageDetails.sub_search_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Search Bar Input Text:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.search_bar_input" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('pageDetails.search_bar_input') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Text Below Search Bar:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.search_bar_text" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('pageDetails.search_bar_text') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="block text-sm font-medium text-gray-700">Text Color:</label>
                                <div class="pl-3">
                                    <select wire:model="pageDetails.text_color" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <option value="black">Black</option>
                                        <option value="white">White</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Background Color:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.background_color" type="color" class="border shadow-sm block w-10 sm:text-sm border-gray-300 rounded-md">
                                    @error('pageDetails.background_color') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <x-jet-secondary-button wire:click="save">
                                Save
                            </x-jet-secondary-button>
                            <a href="/{{ $pageDetails['url_ending'] }}" target="_blank">
                                <x-jet-secondary-button>
                                    See Live Page
                                </x-jet-secondary-button>
                            </a>
                        </div>
                    </div>
                    <div class="w-full sm:w-3/5 border border-gray-200 rounded-lg" style="{{ $pageDetails['background_color'] != null ? 'background-color: ' . $pageDetails['background_color'] : '' }}">
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
                                            class="border shadow-xs hover:border-gray-300 block w-full sm:text-sm border-gray-200 rounded-md text-center">
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
                    <div class="block sm:hidden">
                        <div class="mt-5">
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Search Title:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.search_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Sub Search Title:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.sub_search_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Search Bar Input Text:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.search_bar_input" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Text Below Search Bar:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.search_bar_text" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-52 sm:text-sm border-gray-300 rounded-md">
                                    @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="block text-sm font-medium text-gray-700">Text Color:</label>
                                <div class="pl-3">
                                    <select wire:model="pageDetails.text_color" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                        <option value="black">Black</option>
                                        <option value="white">White</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                                <label class="text-sm sm:text-md font-medium">Background Color:</label>
                                <div class="pl-3">
                                    <input wire:model="pageDetails.background_color" type="color" class="border shadow-sm block w-10 sm:text-sm border-gray-300 rounded-md">
                                    @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mt-10">
                            <x-jet-secondary-button wire:click="save">
                                Save
                            </x-jet-secondary-button>
                            <a href="/{{ $pageDetails['url_ending'] }}" target="_blank">
                                <x-jet-secondary-button>
                                    See Live Page
                                </x-jet-secondary-button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
