<div wire:init="readyToLoad">
    <div class="sm:flex sm:gap-5 space-y-2 sm:space-y-0 sm:justify-center sm:items-center">
        <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
            <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
            </div>
            <div class="mb-3">
                <p class="font-sans text-5xl font-black">{{ $searches['total'] ?? '...' }}</p>
                <p class="text-md text-gray-800">Total Searches</p>
            </div>
            <div class="flex flex-row gap-2 items-center justify-center">
                <p class="text-sm text-green-500">▲</p>
                <p class="text-green-500 font-semibold"> {{ $searches['change'] ?? '...' }}</p>
            </div>
        </div>
        <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
            <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
            </div>
            <div class="mb-3">
                <p class="font-sans text-5xl font-black">{{ $callToActions['total'] ?? '...' }}</p>
                <p class="text-md text-gray-800">CTA Clicks</p>
            </div>
            <div class="flex flex-row gap-2 items-center justify-center">
                <p class="text-sm text-green-500">▲</p>
                <p class="text-green-500 font-semibold"> {{ $callToActions['change'] ?? '...' }}</p>
            </div>
        </div>
        <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
            <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
            </div>
            <div class="mb-3">
                <p class="font-sans text-5xl font-black">{{ $listensFromSearch['total'] ?? '...' }}</p>
                <p class="text-md text-gray-800">Listens From Search</p>
            </div>
            <div class="flex flex-row gap-2 items-center justify-center">
                <p class="text-sm text-green-500">▲</p>
                <p class="text-green-500 font-semibold"> {{ $listensFromSearch['change'] ?? '...' }}</p>
            </div>
        </div>
        <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
            <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
            </div>
            <div class="mb-3">
                <p class="font-sans text-5xl font-black">{{ $organicPageViews['total'] ?? '...' }}</p>
                <p class="text-md text-gray-800">Total Pageviews</p>
            </div>
            <div class="flex flex-row gap-2 items-center justify-center">
                <p class="text-sm text-green-500">▲</p>
                <p class="text-green-500 font-semibold"> {{ $organicPageViews['change'] ?? '...' }}</p>
            </div>
        </div>
    </div>
</div>
