<body class="flex flex-col min-h-screen" style="{{ $pageDetails['background_color'] != null ? 'background-color: ' . $pageDetails['background_color'] : '' }}">
    <head class="">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $pageDetails['meta_title'] ?? 'SearchForAnything.io' }}</title>
        <meta name="keywords" content="{{ $pageDetails['meta_keywords'] ?? 'podcast automation, podcast search engine, podcast seo, podcast seo automation, podcast growth, podcast seo software, podcast software' }}">
        <meta name="description" content="{{ $pageDetails['meta_description'] ?? 'Turn your podcast into your biggest marketing asset in seconds! SearchForAnything.io increases your SEO presence, downloads, and conversion rates automatically!' }}">
        <meta name="robots" content="{{ $pageDetails['meta_robots'] ?? 'index, follow' }}" />

        <link rel="icon" href="{{ $pageDetails['favicon_url'] ?? '\logo.png' }}" type="image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        @if($pageDetails['tracking_code_episode'] != NULL)
            <script>
                {{ $pageDetails['tracking_code_episode'] }}
            </script>
        @endif
    </head>
    <main class="flex-grow">
        <div class="pt-12 m-2 sm:m-0">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl rounded sm:rounded-lg">
                    <div class="p-5">
                        <p class="mt-5 text-center text-2xl sm:text-3xl text-black">{{ $content['title'] }}</p>
                        <div class="mt-10 flex justify-center">
                            <iframe allow="autoplay *; encrypted-media *; fullscreen *" frameborder="0" height="175" style="width:100%;max-width:660px;overflow:hidden;background:transparent;" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-storage-access-by-user-activation allow-top-navigation-by-user-activation" src="https://embed.podcasts.apple.com/us/podcast/understanding-the-fear-and-greed-index/id1525402049?i=1000550666521"></iframe>
                        </div>
                        <div class="mt-10 text-center text-black">
                            <p class="text-lg sm:text-xl">In This Episode, you'll learn:</p>
                            <div class="text-md mt-5">
                                <p class="mt-3">How To Swing Trade Stocks</p>
                                <p class="mt-3">Swing Trading Strategies</p>
                                <p class="mt-3">The Best Stocks For Swing Trading</p>
                            </div>
                        </div>
                        <div class="mt-12 mb-5 text-sm text-center text-black">
                            <p>Listen on other platforms</p>
                            <div class="mt-5 flex justify-center items-center gap-3">
                                <img src="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/apple_podcasts.png" srcset="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/apple_podcasts.png 1x, https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/apple_podcasts@2x.png 2x" alt="Apple Podcasts Logo" height="36" width="36">
                                <img src="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/google_podcasts.png" srcset="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/google_podcasts.png 1x, https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/google_podcasts@2x.png 2x" alt="Google Podcasts Logo" height="36" width="36">
                                <img src="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/pocket_casts.png" srcset="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/pocket_casts.png 1x, https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/pocket_casts@2x.png 2x" alt="Pocket Casts Logo" height="36" width="36">
                                <img src="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/spotify.png" srcset="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/spotify.png 1x, https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/spotify@2x.png 2x" alt="Spotify Logo" height="36" width="36">
                                <img src="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/stitcher_dark.png" srcset="https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/stitcher_dark.png 1x, https://d12xoj7p9moygp.cloudfront.net/images/podcast/logo-square/006/stitcher_dark@2x.png 2x" alt="Stitcher Logo" height="36" width="36">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @if($pageDetails['collect_email'])
                <div class="mt-10 text-center text-black">
                    <livewire:email-optin :pageDetails="$pageDetails"/>
                </div>
            @endif

            @if($content['show_cta'])
                <div class="mt-10 text-center text-black">
                    <livewire:call-to-action-section :ctaId="$content['cta_id']" :contentId="$content['id']"/>
                </div>
            @endif

            <div class="mt-10 text-center pb-36 text-black">
                <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-xl rounded sm:rounded-lg">
                        <div class="p-5">
                            <p class="mt-5 text-xl">Transcript:</p>
                            <div class="mt-5 mb-5 max-w-5xl text-md text-center mx-auto sm:px-6 lg:px-8">
                                @foreach($transcript as $item)
                                    <p class="mt-3">{{ $item['sentence'] }}</p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="mb-10">
        <div class="text-center {{ $pageDetails['text_color'] != null ? ($pageDetails['text_color'] == 'black' ? 'text-black' : 'text-white') : '' }}">
            <div class="mb-5">
                <a href="{{ route('landing') }}"><p class="hover:underline">Want To Automate Your Own Podcast? Click Here!</p></a>
            </div>
            <div class="flex gap-4 justify-center items-center text-gray-400">
                <div>
                    <a href="">
                        <svg viewBox="0 0 20 20" height="20px" width="20px" aria-hidden="true" focusable="false" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M18.672 11H17v6c0 .445-.194 1-1 1h-4v-6H8v6H4c-.806 0-1-.555-1-1v-6H1.328c-.598 0-.47-.324-.06-.748L9.292 2.22c.195-.202.451-.302.708-.312.257.01.513.109.708.312l8.023 8.031c.411.425.539.749-.059.749z"></path></svg>
                    </a>
                </div>
                <div>
                    <a href="https://www.instagram.com/theimpeccableinvestor" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M19.9946 13.3302C16.3222 13.3302 13.3252 16.3272 13.3252 19.9996C13.3252 23.672 16.3222 26.669 19.9946 26.669C23.667 26.669 26.664 23.672 26.664 19.9996C26.664 16.3272 23.667 13.3302 19.9946 13.3302ZM39.9978 19.9996C39.9978 17.2378 40.0228 14.501 39.8677 11.7442C39.7126 8.5421 38.9821 5.70023 36.6406 3.35869C34.294 1.01215 31.4572 0.286676 28.2551 0.131574C25.4932 -0.0235283 22.7564 0.0014882 19.9996 0.0014882C17.2378 0.0014882 14.501 -0.0235283 11.7442 0.131574C8.5421 0.286676 5.70023 1.01716 3.35869 3.35869C1.01215 5.70524 0.286675 8.5421 0.131574 11.7442C-0.0235283 14.506 0.0014882 17.2428 0.0014882 19.9996C0.0014882 22.7564 -0.0235283 25.4982 0.131574 28.2551C0.286675 31.4572 1.01716 34.299 3.35869 36.6406C5.70524 38.9871 8.5421 39.7126 11.7442 39.8677C14.506 40.0228 17.2428 39.9978 19.9996 39.9978C22.7614 39.9978 25.4982 40.0228 28.2551 39.8677C31.4572 39.7126 34.299 38.9821 36.6406 36.6406C38.9871 34.294 39.7126 31.4572 39.8677 28.2551C40.0278 25.4982 39.9978 22.7614 39.9978 19.9996ZM19.9946 30.2614C14.3159 30.2614 9.73288 25.6784 9.73288 19.9996C9.73288 14.3209 14.3159 9.73789 19.9946 9.73789C25.6734 9.73789 30.2564 14.3209 30.2564 19.9996C30.2564 25.6784 25.6734 30.2614 19.9946 30.2614ZM30.6766 11.7142C29.3508 11.7142 28.2801 10.6435 28.2801 9.31761C28.2801 7.99174 29.3508 6.92104 30.6766 6.92104C32.0025 6.92104 33.0732 7.99174 33.0732 9.31761C33.0736 9.63244 33.0119 9.94426 32.8916 10.2352C32.7713 10.5262 32.5948 10.7905 32.3722 11.0131C32.1495 11.2357 31.8852 11.4123 31.5942 11.5326C31.3033 11.6529 30.9915 11.7146 30.6766 11.7142Z"></path></svg>
                    </a>
                </div>
{{--                <div>--}}
{{--                    <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M21.859 0.03375C23.9931 0 26.115 0.02 28.2345 0C28.3629 2.55125 29.2605 5.15 31.0877 6.95375C32.9112 8.8025 35.4904 9.64875 38 9.935V16.6463C35.6482 16.5675 33.2854 16.0675 31.1513 15.0325C30.2218 14.6025 29.3559 14.0488 28.5084 13.4825C28.4974 18.3525 28.528 23.2163 28.4778 28.0663C28.3506 30.3963 27.5985 32.715 26.2728 34.635C24.1399 37.8313 20.4379 39.915 16.6357 39.98C14.3034 40.1163 11.9736 39.4663 9.98627 38.2688C6.69277 36.2838 4.37521 32.65 4.03767 28.75C3.99515 27.924 3.98862 27.0966 4.0181 26.27C4.31162 23.0988 5.84647 20.065 8.22884 18.0013C10.9292 15.5975 14.7119 14.4525 18.2537 15.13C18.2867 17.5988 18.1901 20.065 18.1901 22.5338C16.5721 21.9988 14.6813 22.1488 13.2675 23.1525C12.2332 23.849 11.4515 24.8736 11.0429 26.0688C10.7054 26.9138 10.802 27.8525 10.8216 28.75C11.2093 31.485 13.7824 33.7838 16.5293 33.535C18.3503 33.515 20.0955 32.435 21.0445 30.8538C21.3515 30.3 21.6951 29.7338 21.7135 29.0825C21.8737 26.1013 21.8101 23.1325 21.8297 20.1513C21.8431 13.4325 21.8101 6.7325 21.8602 0.035L21.859 0.03375Z"></path></svg>--}}
{{--                </div>--}}
                <div>
                    <a href="https://www.youtube.com/c/theimpeccableinvestor" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M39.1652 10.3739C38.9375 9.52692 38.491 8.75454 37.8705 8.13405C37.25 7.51355 36.4772 7.0667 35.6295 6.83822C32.5089 6 20 6 20 6C20 6 7.49107 6 4.37054 6.83376C3.52241 7.0615 2.74922 7.5081 2.1286 8.12871C1.50798 8.74932 1.06178 9.5221 0.834821 10.3694C-1.70299e-07 13.4904 0 20 0 20C0 20 -1.70299e-07 26.5096 0.834821 29.6261C1.29464 31.3471 2.65179 32.7025 4.37054 33.1618C7.49107 34 20 34 20 34C20 34 32.5089 34 35.6295 33.1618C37.3527 32.7025 38.7054 31.3471 39.1652 29.6261C40 26.5096 40 20 40 20C40 20 40 13.4904 39.1652 10.3739ZM16.0268 25.9745V14.0255L26.3839 19.9554L16.0268 25.9745Z"></path></svg>
                    </a>
                </div>
                <div>
                    <a href="https://twitter.com/impeccablestock" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M40 7.8012C38.529 8.42605 36.9283 8.87576 35.2794 9.0509C36.9913 8.04942 38.2732 6.46723 38.8847 4.6012C37.2784 5.54222 35.5186 6.20207 33.6834 6.5515C32.9165 5.74405 31.9888 5.1008 30.9583 4.66183C29.9278 4.22286 28.8166 3.99758 27.6938 4.00002C23.1511 4.00002 19.4977 7.62605 19.4977 12.0758C19.4977 12.7006 19.5746 13.3255 19.6996 13.9266C12.8975 13.5763 6.83091 10.3763 2.79774 5.47694C2.06285 6.71299 1.67775 8.12038 1.68249 9.55268C1.68249 12.355 3.12943 14.826 5.3359 16.2793C4.03559 16.2289 2.76574 15.8769 1.62961 15.2521V15.3515C1.62961 19.2757 4.44658 22.5278 8.20094 23.2757C7.49602 23.4561 6.77085 23.5483 6.04254 23.5503C5.50895 23.5503 5.00421 23.4982 4.49465 23.4272C5.53299 26.6272 8.55666 28.9515 12.1572 29.0272C9.34022 31.2 5.8118 32.4781 1.98053 32.4781C1.29311 32.4781 0.658575 32.4544 0 32.3787C3.63418 34.6746 7.94616 36 12.5898 36C27.6649 36 35.914 23.7018 35.914 13.0272C35.914 12.6769 35.914 12.3266 35.8899 11.9763C37.4859 10.8261 38.8848 9.4012 40 7.8012Z"></path></svg>
                    </a>
                </div>
                <div>
                    <a href="https://wwww.facebook.com/groups/is2-official" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M38.4 0H1.6C0.715 0 0 0.715 0 1.6V38.4C0 39.285 0.715 40 1.6 40H38.4C39.285 40 40 39.285 40 38.4V1.6C40 0.715 39.285 0 38.4 0ZM33.78 11.675H30.585C28.08 11.675 27.595 12.865 27.595 14.615V18.47H33.575L32.795 24.505H27.595V40H21.36V24.51H16.145V18.47H21.36V14.02C21.36 8.855 24.515 6.04 29.125 6.04C31.335 6.04 33.23 6.205 33.785 6.28V11.675H33.78Z"></path></svg>
                    </a>
                </div>
                <div>
                    <a href="https://www.linkedin.com/in/austin-bouley/" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip1)"><path d="M8.67684 40V13.0121H0.483409V40H8.67684ZM4.58118 9.32512C7.43838 9.32512 9.21685 7.25276 9.21685 4.663C9.16361 2.01484 7.43849 0 4.6354 0C1.83276 0 0 2.01488 0 4.663C0 7.25288 1.77803 9.32512 4.5277 9.32512H4.58093H4.58118ZM13.2119 40H21.4053V24.9286C21.4053 24.122 21.4585 23.3163 21.6749 22.7397C22.2672 21.1281 23.6154 19.459 25.8788 19.459C28.8436 19.459 30.0297 21.9339 30.0297 25.5619V39.9998H38.2226V24.5252C38.2226 16.2356 34.1804 12.3785 28.7897 12.3785C24.3696 12.3785 22.4289 15.0834 21.3508 16.9256H21.4055V13.0115H13.2121C13.3196 15.5439 13.2121 39.9995 13.2121 39.9995L13.2119 40Z"></path></g><defs><clipPath id="clip1"><rect width="40" height="40" fill="white"></rect></clipPath></defs></svg>
                    </a>
                </div>
                <div>
                    <a href="https://www.theimpeccablestocksoftware.com/free-trial" target="_blank">
                        <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M20 0C8.97267 0 0 8.97267 0 20C0 31.0287 8.97267 40 20 40C31.028 40 40 31.0287 40 20C40 8.97267 31.0287 0 20 0ZM33.3647 30.8027C32.575 30.0868 31.7294 29.4352 30.836 28.854C31.9562 26.5892 32.6375 24.1329 32.844 21.6147H37.1173C36.8012 24.9807 35.4954 28.1778 33.3647 30.8027ZM2.884 21.6147H7.082C7.29024 24.1465 7.97777 26.6156 9.108 28.8907C8.23554 29.463 7.40883 30.1023 6.63533 30.8027C4.50445 28.178 3.19906 24.9807 2.884 21.6147ZM6.63533 9.198C7.408 9.89916 8.23478 10.5383 9.108 11.1093C7.91363 13.5116 7.21445 16.1295 7.052 18.8073H2.84867C3.0911 15.2907 4.41357 11.9347 6.63533 9.198ZM18.5967 5.03933V11.4713C16.6703 11.3199 14.7839 10.8408 13.0187 10.0547C14.4868 7.99324 16.3913 6.28082 18.5967 5.03933ZM18.5967 14.2853V18.8073H9.86467C10.0189 16.6086 10.5978 14.4605 11.5693 12.482C13.7805 13.5113 16.1631 14.1227 18.5967 14.2853ZM18.5967 21.6147V25.7147C16.1548 25.8784 13.7646 26.494 11.5473 27.53C10.6464 25.6735 10.0879 23.6696 9.89867 21.6147H18.5967ZM18.5967 28.53V34.9753C16.3763 33.7432 14.4601 32.0295 12.9887 29.96C14.7622 29.1654 16.6592 28.6817 18.5967 28.53ZM21.4033 34.9167V28.53C23.3333 28.6833 25.1913 29.1553 26.9213 29.9193C25.4678 31.967 23.5846 33.6726 21.4033 34.9167ZM21.4033 25.7147V21.6147H30.026C29.8309 23.6567 29.269 25.6468 28.3673 27.4893C26.1737 26.4778 23.8135 25.8764 21.4033 25.7147ZM21.4033 18.8073V14.2853C23.8147 14.1245 26.1762 13.523 28.3707 12.5107C29.3334 14.4814 29.9072 16.6193 30.0607 18.8073H21.4033ZM21.4033 11.4713V5.082C23.5861 6.32559 25.4707 8.03115 26.9253 10.0793C25.1762 10.8511 23.3093 11.3218 21.4033 11.4713ZM28.3553 7.31067C27.0381 5.71707 25.4824 4.33676 23.7433 3.21867C26.5987 3.85751 29.2432 5.21613 31.4253 7.16533C30.7947 7.73309 30.1227 8.25298 29.4147 8.72067C29.0834 8.23462 28.7299 7.76412 28.3553 7.31067ZM11.57 7.31133C11.2045 7.75443 10.8587 8.21332 10.5333 8.68667C9.8445 8.22756 9.18969 7.71935 8.574 7.166C10.7273 5.24281 13.331 3.89386 16.144 3.244C14.4198 4.35724 12.8771 5.72905 11.57 7.31133ZM10.534 31.314C10.806 31.71 11.0927 32.0967 11.3947 32.4727C12.739 34.1466 14.3437 35.5935 16.1473 36.758C13.3332 36.1086 10.7285 34.7594 8.57467 32.8353C9.19014 32.2815 9.84497 31.7731 10.534 31.314ZM28.3827 32.656C28.7468 32.2123 29.0918 31.7532 29.4167 31.28C30.124 31.748 30.7956 32.2679 31.426 32.8353C29.2436 34.7841 26.5992 36.1427 23.744 36.782C25.495 35.6558 27.06 34.2638 28.3827 32.656ZM32.874 18.8073C32.7133 16.1431 32.0203 13.538 30.836 11.146C31.7296 10.5653 32.5752 9.91386 33.3647 9.198C35.5868 11.9345 36.9093 15.2906 37.1513 18.8073H32.874Z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
</body>
