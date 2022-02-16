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
                <div class="flex flex-wrap justify-center items-center gap-3">
                    @if(count($callToActions))
                        @foreach($callToActions as $action)
                            <div class="w-1/3 md:w-1/5 h-64 border rounded-md p-3 hover:bg-gray-50">
                                <div class="h-42 w-42">
                                    <img src="{{ $action['image_url'] ?? 'https://referralrock.com/blog/wp-content/uploads/2019/06/referral-call-to-action.jpg' }}"/>
                                </div>
                                <div class="mt-2 text-center">
                                    <p>{{ substr($action['name'], 0, 40) }}</p>
                                </div>
                                <div class="mt-2 flex flex-col md:flex-row justify-center items-center gap-2">
                                    <x-jet-secondary-button wire:click="openEdit({{ $action['id'] }})">
                                        Edit
                                    </x-jet-secondary-button>
                                    <x-jet-danger-button wire:click="deleteCTA({{ $action['id'] }})">
                                        Delete
                                    </x-jet-danger-button>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div wire:click="$toggle('isCreating')" class="relative block w-1/3 md:w-1/5 border border-gray-300 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path></svg>
                            <span class="mt-2 block text-sm font-medium text-gray-900"> Create A New Call To Action Section </span>
                        </div>
                        <div wire:click="addLeaveAReview" class="relative block w-1/3 md:w-1/5 border border-gray-300 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            <img class="h-12 w-auto mx-auto" src="https://i5.walmartimages.com/asr/8e122f94-0ee7-4457-95e2-bbd70c0156e8_1.0ff2125f11697892eda3cffcdeceaa59.png"/>
                            <span class="mt-2 block text-sm font-medium text-gray-900"> Add The "Leave A Review" Call To Action Section </span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="isCreating">
        <x-slot name="title">
            Create A Call To Action
        </x-slot>

        <x-slot name="content">

            <div class="mt-5">
                <p class="mb-2">Preview:</p>
                <div class="w-full">
                    <div class="bg-white border border-gray-200 rounded sm:rounded-lg">
                        <div class="p-6">
                            <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                                <div>
                                    <img class="w-60 h-full" src="{{ $callToAction['image_url'] ?? '/logo.png' }}"/>
                                </div>
                                <div class="max-w-md">
                                    <p class="text-2xl font-bold">{{ $callToAction['title'] ?? 'Temp Title'}}</p>
                                    <p class="mt-2">{{ $callToAction['sub_title'] ?? 'Temp Sub Title' }}</p>
                                    <div class="mt-5">
                                        <a href="{{ $callToAction['button_url'] }}" target="_blank">
                                            <x-jet-secondary-button>
                                                {{ $callToAction['button_text'] ?? 'Place Holder' }}
                                            </x-jet-secondary-button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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

            <div class="mt-5">
                <p class="mb-2">Preview:</p>
                <div class="w-full">
                    <div class="bg-white border border-gray-200 rounded sm:rounded-lg">
                        <div class="p-6">
                            <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                                <div>
                                    <img class="w-96 h-full" src="{{ $callToAction['image_url'] }}"/>
                                </div>
                                <div class="max-w-md">
                                    <p class="text-2xl font-bold">{{ $callToAction['title'] }}</p>
                                    <p class="mt-2">{{ $callToAction['sub_title'] }}</p>
                                    <div class="mt-5">
                                        <a href="{{ $callToAction['button_url'] }}" target="_blank">
                                            <x-jet-secondary-button>
                                                {{ $callToAction['button_text'] }}
                                            </x-jet-secondary-button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
