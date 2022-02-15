<div wire:init="readyToLoad">
    <x-jet-dialog-modal wire:model="isViewing">
        <x-slot name="title">
            Still Listening?
        </x-slot>

        <x-slot name="content">

            <div class="mt-10 mb-3">

                @if($content != null)
                    <div class="mb-5">
                        <p class="mb-5 text-base sm:text-lg">Checkout Our Newest Podcast Episode:</p>
                        <a href="{{ $content['link'] }}">
                            <div class="flex flex-col sm:flex-row justify-left items-center gap-3">
                                <img class="w-28 h-28" src="https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg"/>
                                <div>
                                    <p>{{ $content['title'] }}</p>
                                    <p class="mt-2 text-sm text-gray-800">Summary: {{ substr($content['summary'], 0, 200) }}...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif

                <div class="mt-10">
                    <p>Don't forget to subscribe to get notified of future episodes :)</p>
                </div>

            </div>

        </x-slot>

        <x-slot name="footer">
            <div class="flex gap-1 items-center">
                <x-jet-secondary-button wire:click="close" wire:loading.attr="disabled">
                    {{ __('Close') }}
                </x-jet-secondary-button>
                @if($content != null)
                    <a href="{{ $content['link'] }}">
                        <x-jet-secondary-button>
                            {{ __('Go Listen!') }}
                        </x-jet-secondary-button>
                    </a>
                @endif
            </div>
        </x-slot>
    </x-jet-dialog-modal>
</div>
