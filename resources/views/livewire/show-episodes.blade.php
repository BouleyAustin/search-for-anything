<div>
    <div class="w-full">
        <div class="bg-white rounded-t-md p-3">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8 sm:mt-16 flex flex-wrap gap-3 justify-center items-center">
                    @if(count($contents))
                        @foreach($contents as $content)
                            <a href="{{ '/' . $pageUrl . '/episodes/' . $content->url_ending }}" target="_blank">
                                <div class="w-52 border rounded-md p-3 hover:bg-gray-50">
                                    <div class="h-42 w-42">
                                        <img src="{{ $pageImage ?? 'https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg' }}"/>
                                    </div>
                                    <div class="mt-2 text-center text-wrap">
                                        <p>{{ substr($content->title, 0, 30) }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>There appears to be no episodes :(</p>
                    @endif
                </div>
                <div class="mt-10">
                    {{ $contents->links() }}
                </div>
            </div>
            <div>
                <div class="mt-16 text-sm text-center text-black">
                    <p>Listen on other platforms</p>
                    <div class="mt-5 flex flex-col sm:flex-row justify-center items-center gap-3">
                        @if($pageDetails['apple_link'] != null)
                            <a href="{{ $pageDetails['apple_link'] }}" target="_blank">
                                <img class="h-12 w-auto"  src="\apple-badge.svg">
                            </a>
                        @endif
                        @if($pageDetails['spotify_link'] != null)
                            <a href="{{ $pageDetails['spotify_link'] }}" target="_blank">
                                <img class="h-12 w-auto"  src="\spotify-badge.svg">
                            </a>
                        @endif
                        @if($pageDetails['google_link'] != null)
                            <a href="{{ $pageDetails['google_link'] }}" target="_blank">
                                <img class="h-12 w-auto" src="\google-badge.svg">
                            </a>
                        @endif
                        @if($pageDetails['stitcher_link'] != null)
                            <a href="{{ $pageDetails['stitcher_link'] }}" target="_blank">
                                <img class="h-12 w-auto"  src="stitcher-badge.png">
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
