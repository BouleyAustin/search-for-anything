i<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Content') }}
        </h2>
    </x-slot>

    <div class="py-12 m-2 sm:m-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-3">
                    <div class="flex justify-between items-center mb-3">
                        <p>The Impeccable Investor Content</p>
                        <livewire:create-content/>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        @foreach($contents as $content)
                            <div class="w-1/3 md:w-1/5 border rounded-md p-3 hover:bg-gray-50">
                                <div class="h-42 w-42">
                                    <img src="https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg"/>
                                </div>
                                <div class="mt-2 text-center">
                                    <p>{{ substr($content['title'], 0, 35) }}</p>
                                </div>
                                <div class="mt-2 flex flex-col md:flex-row justify-center items-center gap-2">
                                    <livewire:edit-content :contentId="$content['id']"/>
                                    <x-jet-secondary-button>
                                        Export
                                    </x-jet-secondary-button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-36 m-2 sm:m-0">
        <livewire:call-to-action/>
    </div>
</x-app-layout>
