<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customize') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <livewire:customize-search-page/>
    </div>

    <div class="pb-36">
        <livewire:customize-search-advanced/>
    </div>
</x-app-layout>
