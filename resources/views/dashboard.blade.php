<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 m-2 sm:m-0">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <livewire:analytics-dashboard/>
        </div>
    </div>

    <div class="pb-36 m-2 sm:m-0">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-3">
                    <livewire:analytics-top-searches/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
