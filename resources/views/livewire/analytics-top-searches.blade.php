<div wire:init="readyToLoad">
    <p class="mt-2 font-bold text-xl text-center">Top Searches This Month</p>
    <div class="mt-5">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="border-t border-gray-200">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Search Terms
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Number of Searches
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Frequency
                </th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
            @if($topSearches != null)
                @forelse($topSearches as $search)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">"{{ $search['search_term'] }}"</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Coming soon (more data needed)</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ \Carbon\Carbon::parse($search['created_at'])->diffForHumans() }}</td>
                    </tr>
                @empty
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">No Searches Found.</td>
                    </tr>
                @endforelse
            @else
                <tr class="hover:bg-gray-50">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Loading...</td>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
</div>
