<div class="m-2 sm:m-0">
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 m-2">
        <div class="flex bg-white overflow-hidden shadow-xl rounded-lg p-1">
            <input
                wire:model.debounce.150ms="search"
                wire:keydown.enter="redirectTo"
                wire:keydown.escape="clear"
                type="search"
                placeholder="{{ 'Search for any topic or phrase you want to hear more about...' }}"
                class="shadow-sm hover:border-gray-200 block w-full sm:text-sm border-gray-100 rounded-md"
                required autofocus>
            <x-jet-secondary-button wire:click="redirectTo">
                <p>&#128270;</p>
            </x-jet-secondary-button>
        </div>
        @if(count($searchResults) > 0)
            <div class="shadow overflow-hidden border-b border-gray-200 rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($searchResults as $result)
                        <tr wire:click="redirectToTicker('{{ $result['symbol'] }}')" class="hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ $result['symbol'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $result['name'] }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                {{ $result['exchange'] }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
    @if(count($searchResults) == 0)
        <div class="mt-10 text-center">
            Most Recent Searches: Trend Following, Impeccable Stock Software, Swing Trading Strategies, etc
        </div>
    @endif
</div>
