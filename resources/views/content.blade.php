<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Content') }}
        </h2>
    </x-slot>

    @if(Auth::user()->showOnboarding())
        <div class="pt-8 m-2 sm:m-0">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <livewire:onboarding-checklist/>
            </div>
        </div>
    @endif

    <div class="py-12 m-2 sm:m-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-3">
                    <livewire:content-table/>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-36 m-2 sm:m-0">
        <livewire:call-to-action/>
    </div>

    <script>
        function contentAdd(){
            Livewire.emit('createContent');
        }
    </script>
</x-app-layout>
