<div>
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl rounded sm:rounded-lg">
            <div class="p-6">
                <div class="flex flex-col sm:flex-row gap-3 justify-center items-center">
                    <div>
                        <img class="w-full sm:w-80 h-auto" src="{{ $callToAction['image_url'] }}"/>
                    </div>
                    <div class="max-w-md">
                        <p class="text-xl sm:text-2xl font-bold">{{ $callToAction['title'] }}</p>
                        <p class="mt-2 text-sm sm:text-md">{{ $callToAction['sub_title'] }}</p>
                        <div class="mt-5">
                            <a wire:click="recordCTAClick" href="{{ $callToAction['button_url'] }}" target="_blank">
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
