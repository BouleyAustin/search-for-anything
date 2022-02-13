<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 m-2 sm:m-0">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:flex sm:gap-5 space-y-2 sm:space-y-0 sm:justify-center sm:items-center">
                <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
                    <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
                    </div>
                    <div class="mb-3">
                        <p class="font-sans text-5xl font-black">21.2k</p>
                        <p class="text-md text-gray-800">Total Searches</p>
                    </div>
                    <div class="flex flex-row gap-2 items-center justify-center">
                        <p class="text-sm text-green-500">▲</p>
                        <p class="text-green-500 font-semibold"> 112.71%</p>
                    </div>
                </div>
                <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
                    <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
                    </div>
                    <div class="mb-3">
                        <p class="font-sans text-5xl font-black">5.1k</p>
                        <p class="text-md text-gray-800">Email Optins</p>
                    </div>
                    <div class="flex flex-row gap-2 items-center justify-center">
                        <p class="text-sm text-green-500">▲</p>
                        <p class="text-green-500 font-semibold"> 50.71%</p>
                    </div>
                </div>
                <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
                    <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
                    </div>
                    <div class="mb-3">
                        <p class="font-sans text-5xl font-black">7.3k</p>
                        <p class="text-md text-gray-800">Listens From Search</p>
                    </div>
                    <div class="flex flex-row gap-2 items-center justify-center">
                        <p class="text-sm text-green-500">▲</p>
                        <p class="text-green-500 font-semibold"> 40.71%</p>
                    </div>
                </div>
                <div class="grow border rounded-md p-5 bg-white shadow-lg hover:bg-gray-50 text-center">
                    <div class="mb-4">
                        <span class="inline-flex items-center justify-center p-3 bg-green-50 rounded-md">
                            <svg class="w-6 h-6 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </span>
                    </div>
                    <div class="mb-3">
                        <p class="font-sans text-5xl font-black">82.2k</p>
                        <p class="text-md text-gray-800">Organic Pageviews</p>
                    </div>
                    <div class="flex flex-row gap-2 items-center justify-center">
                        <p class="text-sm text-green-500">▲</p>
                        <p class="text-green-500 font-semibold"> 252.71%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="pb-36 m-2 sm:m-0">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-3">
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
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">"what are the best stock market strategies?"</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1,000 searches / month</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Daily</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">"swing trading 101"</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">727 searches / month</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Daily</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">"the best stocks in the market right now"</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">652 searches / month</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Weekly</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">"how can I survive a crash?"</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">502 searches / month</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Weekly</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">"how to know when a stock is good"</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">252 searches / month</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Weekly</td>
                                </tr>
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">"what is the best broker?"</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">170 searches / month</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Monthly</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
