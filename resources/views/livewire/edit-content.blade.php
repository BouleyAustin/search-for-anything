<div wire:init="readyToLoad">

    <button wire:click="$toggle('isViewing')" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
        Edit
    </button>

    <x-jet-dialog-modal wire:model="isViewing">
        <x-slot name="title">
            Edit The Episode
        </x-slot>

        <x-slot name="content">

            <div class="mt-10 mb-3">

                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Title:</label>
                    <div class="pl-3">
                        <input wire:model="content.title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Podcast Link:</label>
                    <div class="pl-3">
                        <input wire:model="content.podcast_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.podcast_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Apple Podcast Link (optional):</label>
                    <div class="pl-3">
                        <input wire:model="content.apple_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.apple_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Spotify Podcast Link (optional):</label>
                    <div class="pl-3">
                        <input wire:model="content.spotify_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.spotify_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Video Link (optional):</label>
                    <div class="pl-3">
                        <input wire:model="content.video_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.video_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="block text-sm font-medium text-gray-700">Content Type:</label>
                    <div class="pl-3">
                        <select wire:model="content.platform" class="mt-1 block w-60 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">Select</option>
                            <option value="podcast">Podcast Episode</option>
                            <option value="youtube">YouTube Video</option>
                            <option value="blog">Blog Post</option>
                        </select>
                    </div>
                </div>
                @error('content.platform') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror

                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="block text-sm font-medium text-gray-700">Include A CTA:</label>
                    <div class="pl-3">
                        <select wire:model="content.show_cta" class="mt-1 block w-60 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value=1>Yes</option>
                            <option value=0>No</option>
                        </select>
                    </div>
                </div>

                @if(count($content) && $content['show_cta'])
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="block text-sm font-medium text-gray-700">Select A CTA:</label>
                        <div class="pl-3">
                            <select wire:model="content.cta_id" class="mt-1 block w-60 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                <option value="">Select</option>
                                @foreach($callToActions as $cta)
                                    <option value="{{ $cta['id'] }}">{{ $cta['name'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                @endif

                <div class="mt-5">
                    <p class="mb-3 text-sm">SEO Details:</p>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Meta Title:</label>
                        <div class="pl-3">
                            <input wire:model="content.meta_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                            @error('content.meta_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Meta Description:</label>
                        <div class="pl-3">
                            <input wire:model="content.meta_description" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                            @error('content.meta_description') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                    <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                        <label class="text-sm sm:text-md font-medium">Meta Keywords:</label>
                        <div class="pl-3">
                            <input wire:model="content.meta_keywords" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                            @error('content.meta_keywords') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>

                <div x-data="{ open: false }">
                    <div x-show="!open">
                        <p @click="open = true" class="mt-10 text-gray-700 font-medium text-sm underline">Click To Edit Transcript</p>
                    </div>
                    <div x-show="open">
                        <p @click="open = false" class="mt-10 text-sm text-gray-700 font-medium underline">Close The Transcript</p>
                        <div class="text-sm text-gray-700 font-medium">
                            @foreach($transcript as $item)
                                <div class="mt-5">
                                    <p>Section #{{ $loop->index + 1 }} - {{ $item['confidence'] * 100 }}% Confidence</p>
                                    <textarea class="w-full rounded border border-gray-300 mt-2" rows="5" wire:model="transcript.{{ $loop->index }}.sentence">
                                    </textarea>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-5">
                            <x-jet-secondary-button wire:click="updateTranscript" @click="open = false">
                                Update Transcript
                            </x-jet-secondary-button>
                        </div>
                    </div>
                </div>

            </div>

        </x-slot>

        <x-slot name="footer">
            <div class="flex gap-1 items-center">
                <x-jet-secondary-button wire:click="close" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-jet-secondary-button>
                <x-jet-secondary-button class="ml-2" wire:click="save" wire:loading.attr="disabled">
                    {{ __('Save Content') }}
                </x-jet-secondary-button>
                <div wire:loading wire:target="save">
                    Loading...
                </div>
            </div>
        </x-slot>
    </x-jet-dialog-modal>

</div>
