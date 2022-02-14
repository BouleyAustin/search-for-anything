<div>
    <div wire:click="recordSocialShare">
        <div class="hidden lg:block fixed top-12 left-5">
            <div class="text-white">
                <div class="flex flex-col gap-4 justify-center items-left">
                    <div>
                        <p class="text-xs">Share</p>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['reddit'] }}" target="_blank">
                            @if($pageDetails['text_color'] == 'white')
                                <img width="20" height="20" src="\reddit-logo.png"/>
                            @else
                                <img width="20" height="20" src="\reddit-black.png"/>
                            @endif
                        </a>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['twitter'] }}" target="_blank">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M40 7.8012C38.529 8.42605 36.9283 8.87576 35.2794 9.0509C36.9913 8.04942 38.2732 6.46723 38.8847 4.6012C37.2784 5.54222 35.5186 6.20207 33.6834 6.5515C32.9165 5.74405 31.9888 5.1008 30.9583 4.66183C29.9278 4.22286 28.8166 3.99758 27.6938 4.00002C23.1511 4.00002 19.4977 7.62605 19.4977 12.0758C19.4977 12.7006 19.5746 13.3255 19.6996 13.9266C12.8975 13.5763 6.83091 10.3763 2.79774 5.47694C2.06285 6.71299 1.67775 8.12038 1.68249 9.55268C1.68249 12.355 3.12943 14.826 5.3359 16.2793C4.03559 16.2289 2.76574 15.8769 1.62961 15.2521V15.3515C1.62961 19.2757 4.44658 22.5278 8.20094 23.2757C7.49602 23.4561 6.77085 23.5483 6.04254 23.5503C5.50895 23.5503 5.00421 23.4982 4.49465 23.4272C5.53299 26.6272 8.55666 28.9515 12.1572 29.0272C9.34022 31.2 5.8118 32.4781 1.98053 32.4781C1.29311 32.4781 0.658575 32.4544 0 32.3787C3.63418 34.6746 7.94616 36 12.5898 36C27.6649 36 35.914 23.7018 35.914 13.0272C35.914 12.6769 35.914 12.3266 35.8899 11.9763C37.4859 10.8261 38.8848 9.4012 40 7.8012Z"></path></svg>
                        </a>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['facebook'] }}" target="_blank">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M38.4 0H1.6C0.715 0 0 0.715 0 1.6V38.4C0 39.285 0.715 40 1.6 40H38.4C39.285 40 40 39.285 40 38.4V1.6C40 0.715 39.285 0 38.4 0ZM33.78 11.675H30.585C28.08 11.675 27.595 12.865 27.595 14.615V18.47H33.575L32.795 24.505H27.595V40H21.36V24.51H16.145V18.47H21.36V14.02C21.36 8.855 24.515 6.04 29.125 6.04C31.335 6.04 33.23 6.205 33.785 6.28V11.675H33.78Z"></path></svg>
                        </a>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['linkedin'] }}" target="_blank">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip1)"><path d="M8.67684 40V13.0121H0.483409V40H8.67684ZM4.58118 9.32512C7.43838 9.32512 9.21685 7.25276 9.21685 4.663C9.16361 2.01484 7.43849 0 4.6354 0C1.83276 0 0 2.01488 0 4.663C0 7.25288 1.77803 9.32512 4.5277 9.32512H4.58093H4.58118ZM13.2119 40H21.4053V24.9286C21.4053 24.122 21.4585 23.3163 21.6749 22.7397C22.2672 21.1281 23.6154 19.459 25.8788 19.459C28.8436 19.459 30.0297 21.9339 30.0297 25.5619V39.9998H38.2226V24.5252C38.2226 16.2356 34.1804 12.3785 28.7897 12.3785C24.3696 12.3785 22.4289 15.0834 21.3508 16.9256H21.4055V13.0115H13.2121C13.3196 15.5439 13.2121 39.9995 13.2121 39.9995L13.2119 40Z"></path></g><defs><clipPath id="clip1"><rect width="40" height="40" fill="white"></rect></clipPath></defs></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block lg:hidden pt-5">
            <div class="text-white">
                <div class="flex flex-row gap-4 justify-center items-center">
                    <div>
                        <p class="text-xs">Share</p>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['reddit'] }}" target="_blank">
                            @if($pageDetails['text_color'] == 'white')
                                <img width="20" height="20" src="https://cdn.freebiesupply.com/logos/large/2x/reddit-logo-black-and-white.png"/>
                            @else
                                <img width="20" height="20" src="https://cdn3.iconfinder.com/data/icons/social-media-black-white-2/512/BW_Reddit_glyph_svg-512.png"/>
                            @endif
                        </a>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['twitter'] }}" target="_blank">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M40 7.8012C38.529 8.42605 36.9283 8.87576 35.2794 9.0509C36.9913 8.04942 38.2732 6.46723 38.8847 4.6012C37.2784 5.54222 35.5186 6.20207 33.6834 6.5515C32.9165 5.74405 31.9888 5.1008 30.9583 4.66183C29.9278 4.22286 28.8166 3.99758 27.6938 4.00002C23.1511 4.00002 19.4977 7.62605 19.4977 12.0758C19.4977 12.7006 19.5746 13.3255 19.6996 13.9266C12.8975 13.5763 6.83091 10.3763 2.79774 5.47694C2.06285 6.71299 1.67775 8.12038 1.68249 9.55268C1.68249 12.355 3.12943 14.826 5.3359 16.2793C4.03559 16.2289 2.76574 15.8769 1.62961 15.2521V15.3515C1.62961 19.2757 4.44658 22.5278 8.20094 23.2757C7.49602 23.4561 6.77085 23.5483 6.04254 23.5503C5.50895 23.5503 5.00421 23.4982 4.49465 23.4272C5.53299 26.6272 8.55666 28.9515 12.1572 29.0272C9.34022 31.2 5.8118 32.4781 1.98053 32.4781C1.29311 32.4781 0.658575 32.4544 0 32.3787C3.63418 34.6746 7.94616 36 12.5898 36C27.6649 36 35.914 23.7018 35.914 13.0272C35.914 12.6769 35.914 12.3266 35.8899 11.9763C37.4859 10.8261 38.8848 9.4012 40 7.8012Z"></path></svg>
                        </a>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['facebook'] }}" target="_blank">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><path d="M38.4 0H1.6C0.715 0 0 0.715 0 1.6V38.4C0 39.285 0.715 40 1.6 40H38.4C39.285 40 40 39.285 40 38.4V1.6C40 0.715 39.285 0 38.4 0ZM33.78 11.675H30.585C28.08 11.675 27.595 12.865 27.595 14.615V18.47H33.575L32.795 24.505H27.595V40H21.36V24.51H16.145V18.47H21.36V14.02C21.36 8.855 24.515 6.04 29.125 6.04C31.335 6.04 33.23 6.205 33.785 6.28V11.675H33.78Z"></path></svg>
                        </a>
                    </div>
                    <div>
                        <a href="{{ $shareButtons['linkedin'] }}" target="_blank">
                            <svg width="20" height="20" viewBox="0 0 40 40" fill="{{ $pageDetails['text_color'] != null ? $pageDetails['text_color'] : 'black' }}" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip1)"><path d="M8.67684 40V13.0121H0.483409V40H8.67684ZM4.58118 9.32512C7.43838 9.32512 9.21685 7.25276 9.21685 4.663C9.16361 2.01484 7.43849 0 4.6354 0C1.83276 0 0 2.01488 0 4.663C0 7.25288 1.77803 9.32512 4.5277 9.32512H4.58093H4.58118ZM13.2119 40H21.4053V24.9286C21.4053 24.122 21.4585 23.3163 21.6749 22.7397C22.2672 21.1281 23.6154 19.459 25.8788 19.459C28.8436 19.459 30.0297 21.9339 30.0297 25.5619V39.9998H38.2226V24.5252C38.2226 16.2356 34.1804 12.3785 28.7897 12.3785C24.3696 12.3785 22.4289 15.0834 21.3508 16.9256H21.4055V13.0115H13.2121C13.3196 15.5439 13.2121 39.9995 13.2121 39.9995L13.2119 40Z"></path></g><defs><clipPath id="clip1"><rect width="40" height="40" fill="white"></rect></clipPath></defs></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
