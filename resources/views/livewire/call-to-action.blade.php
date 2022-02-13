<div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="p-3">
                <div class="flex justify-between items-center mb-3">
                    <p>Call To Actions</p>
                    <button wire:click="$toggle('isCreating')" class="inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path></svg>
                    </button>
                </div>
                <div class="flex flex-wrap gap-3">
                    @foreach($callToActions as $action)
                        <div class="w-1/5 border rounded-md p-3 hover:bg-gray-50">
                            <div class="h-42 w-42">
                                <img src="https://referralrock.com/blog/wp-content/uploads/2019/06/referral-call-to-action.jpg"/>
                            </div>
                            <div class="mt-2 text-center">
                                <p>{{ substr($action['name'], 0, 40) }}</p>
                            </div>
                            <div class="mt-2 flex justify-center items-center gap-2">
                                <x-jet-secondary-button wire:click="openEdit({{ $action['id'] }})">
                                    Edit
                                </x-jet-secondary-button>
                                <x-jet-danger-button wire:click="deleteCTA({{ $action['id'] }})">
                                    Delete
                                </x-jet-danger-button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="isCreating">
        <x-slot name="title">
            Create A Call To Action
        </x-slot>

        <x-slot name="content">

            <div class="mt-10 mb-3">

                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Reference Name (your use only):</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.name" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Title:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Sub Title:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.sub_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.sub_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Button Text:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.button_text" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.sub_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Button URL:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.button_url" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.sub_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-5 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Upload CTA Image:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.file" type="file" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.file') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

            </div>

        </x-slot>

        <x-slot name="footer">
            <div class="flex gap-1 items-center">
                <x-jet-secondary-button wire:click="close" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-jet-secondary-button>
                <x-jet-secondary-button class="ml-2" wire:click="saveCreating" wire:loading.attr="disabled">
                    {{ __('Create Call To Action') }}
                </x-jet-secondary-button>
                <div wire:loading wire:target="saveCreating">
                    Loading...
                </div>
            </div>
        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-dialog-modal wire:model="isEditing">
        <x-slot name="title">
            Edit Call To Action
        </x-slot>

        <x-slot name="content">

            <div class="mt-10 mb-3">

                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Reference Name (your use only):</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.name" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.name') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Title:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Sub Title:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.sub_title" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.sub_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Button Text:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.button_text" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.sub_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-3 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">CTA Button URL:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.button_url" type="text" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.sub_title') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="mt-5 overflow-hidden rounded-lg flex items-center justify-left">
                    <label class="text-sm sm:text-md font-medium">Upload CTA Image:</label>
                    <div class="pl-3">
                        <input wire:model="callToAction.file" type="file" class="shadow-sm focus:ring-blue-500 focus:border-blue-500 hover:border-blue-500 block w-60 sm:text-sm border-gray-300 rounded-md">
                        @error('callToAction.file') <span class="mt-2 text-xs font-medium text-red-500">{{ $message }}</span> @enderror
                    </div>
                </div>

            </div>

        </x-slot>

        <x-slot name="footer">
            <div class="flex gap-1 items-center">
                <x-jet-secondary-button wire:click="close" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-jet-secondary-button>
                <x-jet-secondary-button class="ml-2" wire:click="saveEditing" wire:loading.attr="disabled">
                    {{ __('Edit Call To Action') }}
                </x-jet-secondary-button>
                <div wire:loading wire:target="saveEditing">
                    Loading...
                </div>
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
