<x-guest-layout>
    <div id="explanation" class="relative bg-white overflow-hidden">
        <div class="hidden lg:block lg:absolute lg:inset-0" aria-hidden="true">
            <svg class="absolute top-0 left-1/2 transform translate-x-64 -translate-y-8" width="640" height="784" fill="none" viewBox="0 0 640 784">
                <defs>
                    <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
                <rect x="118" width="404" height="784" fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
            </svg>
        </div>

        <div class="relative pt-2 sm:pt-6 pb-16 sm:pb-24 lg:pb-32">
            <div class="hidden sm:block">
                <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6" aria-label="Global">
                    <div class="flex items-center flex-1">
                        <div class="hidden md:block md:ml-10 md:space-x-10">
                            <a href="#explanation" class="font-medium text-gray-500 hover:text-gray-900">How It Works</a>

                            <a href="#features" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

                            <a href="#examples" class="font-medium text-gray-500 hover:text-gray-900">Examples</a>

                            <a href="#behind-the-scenes" class="font-medium text-gray-500 hover:text-gray-900">Behind The Scenes</a>

                            <a href="#faq" class="font-medium text-gray-500 hover:text-gray-900">FAQ</a>
                        </div>
                    </div>
                    <div class="hidden md:block text-right">
                      <span class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5">
                        <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50"> Login </a>
                      </span>
                    </div>
                </nav>
            </div>

            <livewire:landing-page-header/>
        </div>
    </div>

    <div id="features" class="relative bg-white pt-16 pb-32 overflow-hidden">
        <div class="relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div>
                            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
                              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Struggling to grow your podcast?</h2>
                            <p class="mt-4 text-lg text-gray-500">Our software will automatically create a podcast website with dedicated episodes pages for each episode you have and submit your site to Google so they can start including your podcast in search results! We also transcribe your episodes and include the transcripts on the episode pages to massively increase your SEO presence!</p>
                            <div class="mt-6">
                                <a href="{{ route('register') }}" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 border-t border-gray-200 pt-6">
                        <blockquote>
                            <div>
                                <p class="text-base text-gray-500">"Everyone wants SEO help so any way to make it easier is brilliant! Everyone wants growth too. I see this is absolutely fantastic. I'd like to offer it to Victory clients who have podcasts."</p>
                            </div>
                            <footer class="mt-3">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <img class="h-6 w-6 rounded-full" src="https://cdn.allfamous.org/people/headshots/lily-kate-cole-yblr-allfamous.org-1.jpg" alt="">
                                    </div>
                                    <div class="text-base font-medium text-gray-700">Lily Kate, CEO of Victory Social Media Agency</div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="/next-episode.png" alt="Inbox user interface">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-32 lg:max-w-none lg:mx-0 lg:px-0 lg:col-start-2">
                    <div>
                        <div>
                            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
                              <!-- Heroicon name: outline/sparkles -->
                              <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                              </svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Having a hard time monetizing your podcast?</h2>
                            <p class="mt-4 text-lg text-gray-500">The #1 way to monetize your podcast is to sell your own products, services and promote affiliate offers which you can easily do with SearchPod.io! We specifically designed the episode pages after high converting landing pages. You can also use this call to action section to encourage your listeners to leave a review or join your facebook group!</p>
                            <div class="mt-6">
                                <a href="{{ route('register') }}" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0 lg:col-start-1">
                    <div class="pr-4 -ml-48 sm:pr-6 md:-ml-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:right-0 lg:h-full lg:w-auto lg:max-w-none" src="/cta-zoom.png" alt="Customer profile user interface">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:grid-flow-col-dense lg:gap-24">
                <div class="px-4 max-w-xl mx-auto sm:px-6 lg:py-16 lg:max-w-none lg:mx-0 lg:px-0">
                    <div>
                        <div>
                            <span class="h-12 w-12 rounded-md flex items-center justify-center bg-indigo-600">
                              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path></svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Ever run out of ideas for episodes?</h2>
                            <p class="mt-4 text-lg text-gray-500">SearchPod.io's biggest selling feature is that it will automatically transcribe your podcasts and allow your listens to search your episodes to find exactly what they need! When you have your own search engine, you can also see common and frequent searches which will allow you to know what your listeners want to learn!</p>
                            <div class="mt-6">
                                <a href="{{ route('register') }}" class="inline-flex px-4 py-2 border border-transparent text-base font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700"> Get started </a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-8 border-t border-gray-200 pt-6">
                        <blockquote>
                            <div>
                                <p class="text-base text-gray-500">"Thanks to SearchPod.io, I am able to see what my listeners actually want to learn which makes recording killer podcasts easy! No more struggling to come up with podcast ideas instead I know exactly what I need to do which saves so much time!"</p>
                            </div>
                            <footer class="mt-3">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <img class="h-6 w-6 rounded-full" src="https://blendtw.com/wp-content/uploads/2020/10/Austin.jpg" alt="">
                                    </div>
                                    <div class="text-base font-medium text-gray-700">Austin Bouley, CEO of The Impeccable Stock Software</div>
                                </div>
                            </footer>
                        </blockquote>
                    </div>
                </div>
                <div class="mt-12 sm:mt-16 lg:mt-0">
                    <div class="pl-4 -mr-48 sm:pl-6 md:-mr-16 lg:px-0 lg:m-0 lg:relative lg:h-full">
                        <img class="w-full rounded-xl shadow-xl ring-1 ring-black ring-opacity-5 lg:absolute lg:left-0 lg:h-full lg:w-auto lg:max-w-none" src="analytics-page.png" alt="Inbox user interface">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="relative bg-white py-8 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-indigo-600 uppercase">Work Smarter, Not Harder</h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">Everything you need to grow your podcast</p>
            <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">SearchPod.io gives you the potential to turn your podcast into a massive growth engine and community builder! Check out some of the many benefits below.</p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Have WOW Factor</h3>
                                <p class="mt-5 text-base text-gray-500">Set yourself apart from other podcasters by having your own search engine! This will set you apart, help your listeners, and increase your downloads. If GaryVee has one <a href="https://search.garyvaynerchuk.com" target="_blank" class="underline">(click here)</a>, shouldn't we have one too?</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 18.657A8 8 0 016.343 7.343S7 9 9 10c0-2 .5-5 2.986-7C14 5 16.09 5.777 17.656 7.343A7.975 7.975 0 0120 13a7.975 7.975 0 01-2.343 5.657z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.879 16.121A3 3 0 1012.015 11L11 14H9c0 .768.293 1.536.879 2.121z"></path></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Spark Podcast Growth</h3>
                                <p class="mt-5 text-base text-gray-500">Afraid your title isn't catchy enough and people won't listen? That doesn't matter anymore! A podcast search engine will encourage them to listen by showing them that your podcast has everything they need.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Increase SEO Presence</h3>
                                <p class="mt-5 text-base text-gray-500">SearchPod.io will automatically create a dedicated podcast episode page with transcript included to help people more easily find you on the internet! It also allows you to set SEO keywords, tags and more.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Increase Sales</h3>
                                <p class="mt-5 text-base text-gray-500">The dedicated episode pages are designed like high converting landing pages instead of a boring old blog post! You can also easily add a call to action section to any episode with just one click!</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.121 14.121L19 19m-7-7l7-7m-7 7l-2.879 2.879M12 12L9.121 9.121m0 5.758a3 3 0 10-4.243 4.243 3 3 0 004.243-4.243zm0-5.758a3 3 0 10-4.243-4.243 3 3 0 004.243 4.243z"></path></svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Decrease Support Load</h3>
                                <p class="mt-5 text-base text-gray-500">Tired of being asked the same questions? Now, you can send people directly to your search engine so they can find exactly what they need in seconds.</p>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                      <!-- Heroicon name: outline/server -->
                                      <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                      </svg>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Completely Automated</h3>
                                <p class="mt-5 text-base text-gray-500">SearchPod.io will automatically transcribe every new podcast episode, create a dedicate page, and add it to the search engine every time a new episode drops!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="examples" class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div>
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Podcasters coming to SearchPod.io soon!</h2>
                    <p class="mt-3 max-w-3xl text-lg text-gray-500">These podcasters see the potential of SearchPod.io exclusive podcast search engine and SEO automation! You'll be able to check out their search engine once they are setup.</p>
                    <div class="mt-8 sm:flex">
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Join BETA Access</a>
                        </div>
                        <div class="mt-3 sm:mt-0 sm:ml-3">
                            <a href="#explanation" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-0 lg:grid-cols-2">
                    <div class="col-span-1 py-8 px-8 bg-gray-50">
                        <p class="text-lg text-gray-900 font-bold">The Impeccable Investor</p>
                        <p class="text-sm mt-2 text-gray-600">50k podcast downloads, 240K on Instagram</p>
                    </div>
                    <div class="col-span-1 py-8 px-8 bg-gray-50">
                        <p class="text-lg text-gray-900 font-bold">The Lily Kate Show</p>
                        <p class="text-sm mt-2 text-gray-600">30K podcast downloads, 45K on Instagram</p>
                    </div>
                    <div class="col-span-1 py-8 px-8 bg-gray-50">
                        <p class="text-lg text-gray-900 font-bold">Church Project North County</p>
                        <p class="text-sm mt-2 text-gray-600">30K podcast downloads, 1K on Instagram</p>
                    </div>
                    <div class="col-span-1 py-8 px-8 bg-gray-50">
                        <p class="text-lg text-gray-900 font-bold">YOU?</p>
                        <p class="text-sm mt-2 text-gray-600">Join BETA access! You'll also be able to be included in our podcast marketplace :)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Small Features That Set Us Apart</h2>
                <p class="mt-4 text-lg text-gray-500">This podcast software was built by a podcaster for other podcasters!</p>
            </div>
            <dl class="mt-12 space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:gap-x-6 sm:gap-y-12 lg:grid-cols-4 lg:gap-x-8">
                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Next Episode Popup</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">If someone is listening to your podcast and the episode ends, a popup will open encouraging them to listen to your most recent or a similar episode!</dd>
                </div>

                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Landing Page Design</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">The episode pages are designed based on high converting landing pages to encourage more downloads and conversions.</dd>
                </div>

                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Share Links</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">There are social sharing links on every episode page to encourage your listeners to share their favorite episodes.</dd>
                </div>

                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Simple To Use</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">Very simple and intuitive software so you can spend less time on tedious and annoying backend work and more time on recording your episodes.</dd>
                </div>

                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">YouTube Video Embed</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">If you also have a video recording for your podcast episode, you can easily include that on your dedicate podcast episode page!<dd>
                </div>

                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Reviews [COMING SOON]</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">Create a reviews page that will pull your reviews from Apple and allow people without Apple podcasts to leave reviews too!</dd>
                </div>

                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Social Scheduling [COMING SOON]</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">Post about your new podcast on social media automatically by integrating with Headliner!</dd>
                </div>

                <div class="relative">
                    <dt>
                        <!-- Heroicon name: outline/check -->
                        <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">Host Scheduling [COMING SOON]</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">Allow people to sign up to be on your podcast so you can manage your interviews and podcast all in one place.</dd>
                </div>
            </dl>
        </div>
    </div>

    <div id="behind-the-scenes" class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
            <div>
                <h2 class="text-base font-semibold text-indigo-600 uppercase tracking-wide">Everything you need</h2>
                <p class="mt-2 text-3xl font-extrabold text-gray-900">See what happens behind the scenes</p>
                <p class="mt-4 text-lg text-gray-500">Turn your podcast into your biggest marketing asset through a search engine and SEO automation.</p>
            </div>
            <div class="mt-12 lg:mt-0 lg:col-span-2">
                <dl class="space-y-10 sm:space-y-0 sm:grid sm:grid-cols-2 sm:grid-rows-4 sm:grid-flow-col sm:gap-x-6 sm:gap-y-10 lg:gap-x-8">
                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #1: You Do You!</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">You record, edit and upload your podcast to your host as usual. Now, sit back and let our software do the rest!</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #2: Create Your Search Engine</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">Our software will create a custom search engine for your podcast to help your listeners find episodes and increase your downloads.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #3: Monitor Your Podcast</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">Our software will automatically monitor your podcast to track when a new episode comes out without you needing to tell us.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #4: Transcribe New Episodes</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">Our software uses one of the most cutting edge and advanced AI models to accurately transcribe your episode into text.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #4: Add New Episode To Your Search Engine</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">Our software will take the new episode and transcript and add it to your personal search engine database.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #5: Create A Dedicate Episode Page</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">Our software will create a dedicated episode page with the transcript to help your show be found on Google and increase your SEO ratings.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #6: Give You Analytics On What Content To Make</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">Our software will share what your listeners are searching for on your search engine to help you make content they actually want.</dd>
                    </div>

                    <div class="relative">
                        <dt>
                            <!-- Heroicon name: outline/check -->
                            <svg class="absolute h-6 w-6 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                            <p class="ml-9 text-lg leading-6 font-bold text-gray-900">STEP #7: YOU NOW HAVE A GROWING AND SUCCESSFUL PODCAST</p>
                        </dt>
                        <dd class="mt-2 ml-9 text-base text-gray-500">You are now growing your podcast by focusing on creating amazing content and letting SearchPod.io handle the rest!</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>

    <div id="faq" class="bg-white">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-gray-900 text-center">Frequently asked questions</h2>
            <div class="mt-12">
                <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-12 lg:grid-cols-3">
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">How is this different from ListenNotes?</dt>
                        <dd class="mt-2 text-base text-gray-500">Although ListenNotes considers itself "the best podcast search engine", it is totally lacking (just like every other podcast search tool) because you can only find podcasts and episodes by tags and keywords instead of what is actually in the podcast!</dd>
                    </div>
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">What exactly are the SEO benefits?</dt>
                        <dd class="mt-2 text-base text-gray-500">SearchPod.io will automatically create a dedicated landing page for your podcast episode AND automatically include the transcript. Including the transcript will increase the page length which Google loves and will allow people to find you based on what you said in the podcast instead of random keywords.</dd>
                    </div>
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">Is this actually affordable?</dt>
                        <dd class="mt-2 text-base text-gray-500">As a small podcaster, I know it is hard to generate revenue from your podcast especially when you are starting. We will have plans for every type of podcaster (hobbyist, professional and huge brands). Our beta access plan is $20/month and if you join, you lock in this low price for life.</dd>
                    </div>

                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">Is This Site Functional?</dt>
                        <dd class="mt-2 text-base text-gray-500">This site is currently fully functional! Here is a <a class="underline" href="/theimpeccableinvestor" target="_blank">podcast</a> that is currently using our site and getting over 10,000 page views a month! We are in beta access because there are small bugs being fixed, and I'm working closely with our beta users to help ensure the software is nothing less than spectacular.</dd>
                    </div>
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">What Do I Get Joining The Beta Program?</dt>
                        <dd class="mt-2 text-base text-gray-500">The beta plan is currently $20/month which is super cheap for everything you get! You can watch the video above to learn more, but you will get the software and new features, direct access to the founder and developer of SearchPod.io for support and improvement ideas, and so much more!</dd>
                    </div>
                    <div>
                        <dt class="text-lg leading-6 font-medium text-gray-900">The Podcast Site Seems Too Basic?</dt>
                        <dd class="mt-2 text-base text-gray-500">SearchPod.io turns your podcast into a huge marketing asset by turning every episode into an episode landing page! Landing page designs statistically have higher conversion rates and will increase listens because of less distractions on the page like modern websites.</dd>
                    </div>

                    <!-- More questions... -->
                </dl>
            </div>
        </div>
    </div>

    <div class="bg-white">
        <div class="mb-36 max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block">Get Started Today!</span>
            </h2>
            <div class="mt-8 flex justify-center">
                <div class="inline-flex rounded-md shadow">
                    <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">Join BETA Access</a>
                </div>
                <div class="ml-3 inline-flex">
                    <a href="#explanation" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-indigo-100 hover:bg-indigo-200"> Learn more </a>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
