<x-app-layout>
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
                        <p>{{ $page['name'] }}'s Content</p>
                        <livewire:create-content/>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        @if(false)
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
                        @else
                            <div onclick="contentAdd()" class="relative block w-1/3 md:w-1/5 border border-gray-300 border-dashed rounded-lg p-12 text-center hover:border-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                                <span class="mt-2 block text-sm font-medium text-gray-900"> Create A New Call To Action Section </span>
                            </div>
                        @endif
                    </div>
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
