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

                            <a href="#pricing" class="font-medium text-gray-500 hover:text-gray-900">Pricing</a>

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
                            <p class="mt-4 text-lg text-gray-500">All you need to do is add your RSS feed and we take care of the rest: a podcast page, dedicated episode pages, add transcripts, optimize for mobile and SEO, submit to Google and more!</p>
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
                              <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </span>
                        </div>
                        <div class="mt-6">
                            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900">Having a hard time monetizing your podcast?</h2>
                            <p class="mt-4 text-lg text-gray-500">You can easily add a call to action section to any episode page! This way you can promote your own services, products, affiliate offers, free opt-ins, ask for a review and more!</p>
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
                            <p class="mt-4 text-lg text-gray-500">By having your own search engine, you can see what your listeners want to hear from you and see which episode has the highest conversion rate for your service, product, etc so you know what to make more of!</p>
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

    <div id="behind-the-scenes" class="relative bg-white py-8 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-md px-4 text-center sm:max-w-3xl sm:px-6 lg:px-8 lg:max-w-7xl">
            <h2 class="text-base font-semibold tracking-wider text-indigo-600 uppercase">Everything You Need</h2>
            <p class="mt-2 text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">See what happens behind the scenes</p>
            <p class="mt-5 max-w-prose mx-auto text-xl text-gray-500">All you do is connect your RSS feed and we do the rest!</p>
            <div class="mt-12">
                <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <p class="text-white font-bold">#1</p>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Record And Upload (like normal)</h3>
                                <div class="mt-3">
                                    <img src="/step-1.png"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <p class="text-white font-bold">#2</p>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">We Monitor Your Podcast</h3>
                                <div class="mt-3">
                                    <img src="/step-2.png"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <p class="text-white font-bold">#3</p>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">We Transcribe The New Episodes</h3>
                                <div class="mt-3">
                                    <img src="/step-3.png"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <p class="text-white font-bold">#4</p>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">We Create A Dedicate Episode Page</h3>
                                <div class="mt-3">
                                    <img src="/step-4.png"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <p class="text-white font-bold">#5</p>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">We Optimize For SEO and Mobile</h3>
                                <div class="mt-3">
                                    <img src="/step-5.png"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <div class="flow-root bg-gray-50 rounded-lg px-6 pb-8">
                            <div class="-mt-6">
                                <div>
                                    <span class="inline-flex items-center justify-center p-3 bg-indigo-500 rounded-md shadow-lg">
                                        <p class="text-white font-bold">#6</p>
                                    </span>
                                </div>
                                <h3 class="mt-8 text-lg font-medium text-gray-900 tracking-tight">Now You Have A Successful And Growing Podcast</h3>
                                <div class="mt-3">
                                    <img src="/step-6.png"/>
                                </div>
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
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Examples Of SearchPod.io</h2>
                    <p class="mt-3 max-w-3xl text-lg text-gray-500">Check out these sites and image what your site could be like! These sites are fully optimized for SEO, searchable and were created in less than 3 minutes!</p>
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
                    <a href="\theimpeccableinvestor" target="_blank">
                        <div class="col-span-1 py-8 px-8 bg-gray-50">
                            <img class="w-full h-full" src="https://is4-ssl.mzstatic.com/image/thumb/Podcasts125/v4/3f/b1/7e/3fb17e9c-37ec-edf3-3e9a-3f8923d07023/mza_3029821249158272722.jpg/313x0w.webp"/>
                        </div>
                    </a>
                    <a href="\marketing-in-your-car" target="_blank">
                        <div class="col-span-1 py-8 px-8 bg-gray-50">
                            <img class="w-full h-full" src="https://podcast-api-images.s3.amazonaws.com/corona/show/64179/logo_300x300.jpeg"/>
                        </div>
                    </a>
                    <a href="\jordan-peterson" target="_blank">
                        <div class="col-span-1 py-8 px-8 bg-gray-50">
                            <img class="w-full h-full" src="https://is5-ssl.mzstatic.com/image/thumb/Podcasts126/v4/50/6f/33/506f33d9-05d0-8537-caba-41105e071c9e/mza_15187147505185982871.jpg/313x0w.webp"/>
                        </div>
                    </a>
                    <a href="\marketing-secrets" target="_blank">
                        <div class="col-span-1 py-8 px-8 bg-gray-50">
                            <img class="w-full h-full" src="https://ssl-static.libsyn.com/p/assets/f/0/c/4/f0c4044a22f70e2f/Marketing_Secrets_-_V3.jpg"/>
                        </div>
                    </a>
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

    <div id="pricing" class="bg-gray-white">
        <div class="pt-12 sm:pt-16 lg:pt-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl lg:text-5xl">Simple no-tricks pricing</h2>
                    <p class="mt-4 text-xl text-gray-600">If you're not satisfied, contact us within the first 14 days and we'll send you a full refund.</p>
                </div>
            </div>
        </div>
        <div class="mt-8 bg-white pb-16 sm:mt-12 sm:pb-20 lg:pb-28">
            <div class="relative bg-white">
                <div class="absolute inset-0 h-1/2"></div>
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="max-w-lg mx-auto rounded-lg shadow-xl overflow-hidden lg:max-w-none lg:flex">
                        <div class="flex-1 bg-white px-6 py-8 lg:p-12">
                            <h3 class="text-2xl font-extrabold text-gray-900 sm:text-3xl">Founding Member Access</h3>
                            <p class="mt-6 text-base text-gray-500">Everything you need to grow and monetize your podcast automatically! You will also lock in this cheap price for life and get direct access to founder to help him improve the software!</p>
                            <div class="mt-8">
                                <div class="flex items-center">
                                    <h4 class="flex-shrink-0 pr-4 bg-white text-sm tracking-wider font-semibold uppercase text-indigo-600">What's included</h4>
                                    <div class="flex-1 border-t-2 border-gray-200"></div>
                                </div>
                                <ul role="list" class="mt-8 space-y-5 lg:space-y-0 lg:grid lg:grid-cols-2 lg:gap-x-8 lg:gap-y-5">
                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Access To SearchPod.io Software</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">5 FREE Hours Of Transcription / Month</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">15 FREE Hours Of Transcription For Setup</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Monthly Calls And Direct Access To The Team</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Website Hosting Provided</p>
                                    </li>

                                    <li class="flex items-start lg:col-span-1">
                                        <div class="flex-shrink-0">
                                            <!-- Heroicon name: solid/check-circle -->
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <p class="ml-3 text-sm text-gray-700">Basic Integrations (email, tracking, etc)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="py-8 px-6 text-center bg-gray-50 lg:flex-shrink-0 lg:flex lg:flex-col lg:justify-center lg:p-12">
                            <p class="text-lg leading-6 font-medium text-gray-900">Monthly plan</p>
                            <div class="mt-4 flex items-center justify-center text-5xl font-extrabold text-gray-900">
                                <span> $20 </span>
                                <span class="ml-3 text-xl font-medium text-gray-500"> USD </span>
                            </div>
                            <div class="mt-6">
                                <div class="rounded-md shadow">
                                    <a href="{{ route('register') }}" class="flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-800 hover:bg-gray-900"> Get Access </a>
                                </div>
                            </div>
                            <div class="mt-4 text-sm">
                                <p> This is the best deal ever... </p>
                                <p> We're practically losing money at this price. </p>
                            </div>
                        </div>
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
                        <p class="ml-9 text-lg leading-6 font-medium text-gray-900">YouTube Video Embed</p>
                    </dt>
                    <dd class="mt-2 ml-9 text-base text-gray-500">If you also have a video recording for your podcast episode, you can easily include that on your dedicate podcast episode page!<dd>
                </div>

            </dl>
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
