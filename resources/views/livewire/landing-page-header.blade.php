<div>
    <div class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6">
        <div class="">
            <div class="text-center md:max-w-4xl md:mx-auto">
                <h1>
                    <span class="mt-1 block text-3xl tracking-tight font-extrabold sm:text-4xl md:text-5xl">
                      <span class="block text-gray-900">Skyrocket Your Podcast Ranking On Google And Increase Downloads In Less Than 3 Minutes, Automatically</span>
                        <!-- Create A Podcast Website And Rank On Google In Less Than 1 Minute -->
                    </span>
                </h1>
                <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-xl">This site will convert your podcast into a fully optimized website with dedicated episode landing pages that rank on Google by automatically including transcripts!</p>
            </div>
            <div class="mt-8 relative sm:max-w-lg sm:mx-auto md:max-w-4xl">
                <svg class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-8 scale-75 origin-top sm:scale-100 hidden" width="640" height="784" fill="none" viewBox="0 0 640 784" aria-hidden="true">
                    <defs>
                        <pattern id="4f4f415c-a0e9-44c2-9601-6ded5a34a13e" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                        </pattern>
                    </defs>
                    <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                    <rect x="118" width="404" height="784" fill="url(#4f4f415c-a0e9-44c2-9601-6ded5a34a13e)" />
                </svg>
                <div class="relative mx-auto w-full rounded-lg shadow-xl">
                    <div style="padding:56.16% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/680035433?h=98656eec21&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Screen Recording 2022-01-31 at 110523 AM"></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
                </div>
            </div>
        </div>
        <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center">
            <a href="{{ route('preview') }}">
                <button class="mt-3 w-full px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 shadow-sm hover:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:flex-shrink-0 sm:inline-flex sm:items-center sm:w-auto">PREVIEW YOUR PODCAST SITE (FREE)</button>
            </a>
        </div>
    </div>

    <x-jet-dialog-modal wire:model="isViewing">
        <x-slot name="title">
            Watch This Short Explanation / DEMO!
        </x-slot>

        <x-slot name="content">

            <div class="mt-4">
                <div style="padding:56.6% 0 0 0;position:relative;"><iframe src="https://youtube/embed/vYc0ZrFWHn4" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;"></iframe></div>
            </div>

        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="openClose">
                {{ __('Close') }}
            </x-jet-secondary-button>
        </x-slot>
    </x-jet-dialog-modal>

</div>
