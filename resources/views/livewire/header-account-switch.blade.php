<div>
    @if($showHeader)
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-left items-center">
                    <p>
                        {{ ucfirst($routeName) }} for
                    </p>
                    <div>
                        <div class="overflow-hidden rounded-lg flex items-center justify-left">
                            <div class="pl-3">
                                <select wire:model="selection" class="mt-1 block w-52 pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-blue-500 hover:border-blue-500 focus:border-blue-500 sm:text-sm rounded-md">
                                    @foreach($pages as $page)
                                        <option value={{ $page['id'] }}>{{ $page['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    @endif
</div>
