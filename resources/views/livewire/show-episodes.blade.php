<div>
    <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white rounded-lg shadow-lg p-3">
            <div class="flex flex-wrap gap-3 justify-center items-center">
                @if(count($contents))
                    @foreach($contents as $content)
                        <a href="{{ '/' . $pageUrl . '/episodes/' . $content->url_ending }}" target="_blank">
                            <div class="w-52 border rounded-md p-3 hover:bg-gray-50">
                                <div class="h-42 w-42">
                                    <img src="{{ $pageImage ?? 'https://rachelcorbett.com.au/wp-content/uploads/2018/07/Neon-podcast-logo.jpg' }}"/>
                                </div>
                                <div class="mt-2 text-center text-wrap">
                                    <p>{{ $content->title }}</p>
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
    </div>
</div>
