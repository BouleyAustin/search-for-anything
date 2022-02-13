<div>

    <button wire:click="$toggle('isViewing')" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
    </button>

    <x-jet-dialog-modal wire:model="isViewing">
        <x-slot name="title">
            Add Content Manually
        </x-slot>

        <x-slot name="content">

            <div class="mt-10 mb-3">

                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Content Name:</label>
                    <div class="pl-3">
                        <input wire:model="content.name" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
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
                    <label class="text-sm sm:text-md font-medium">Video Link (optional):</label>
                    <div class="pl-3">
                        <input wire:model="content.video_link" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.video_link') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="block text-sm font-medium text-gray-700">Content Type:</label>
                    <div class="pl-3">
                        <select wire:model="content.type" class="mt-1 block w-60 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                            <option value="">Select</option>
                            <option value="podcast">Podcast Episode</option>
                            <option value="youtube">YouTube Video</option>
                            <option value="blog">Blog Post</option>
                        </select>
                    </div>
                </div>
                @error('content.type') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                <div class="mt-5 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Upload Transcript (txt):</label>
                    <div class="pl-3">
                        <input wire:model="content.file" type="file" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('content.file') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
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
                    {{ __('Add Content') }}
                </x-jet-secondary-button>
                <div wire:loading wire:target="save">
                    Loading...
                </div>
            </div>
        </x-slot>
    </x-jet-dialog-modal>

</div>
