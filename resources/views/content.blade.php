<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Content') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-3">
                    <div class="flex justify-between items-center mb-3">
                        <p>The Impeccable Investor Content</p>
                        <livewire:create-content/>
                    </div>
                    <div class="flex flex-wrap space-x-3 space-y-3">
                        @foreach($contents as $content)
                            <div class="max-w-min border rounded-md p-3 hover:bg-gray-50">
                                <div class="h-48 w-48">
                                    <img src="https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg"/>
                                </div>
                                <div class="text-center">
                                    <p>{{ $content['title'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
