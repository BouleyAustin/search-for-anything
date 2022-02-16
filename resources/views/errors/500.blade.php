<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="h-screen w-screen flex flex-wrap justify-center content-end md:content-center items-end md:items-center relative z-10">
            <div class="p-6 text-center ">
                <h2 class="uppercase text-xl lg:text-5xl font-black">We're sorry, but something went wrong.</h2>
                <p class="mt-6 uppercase text-sm lg:text-base text-gray-900">Don't worry! If you are seeing this page then the team has been alerted and is working on fixing this!
                This is usually caused by Amazon Webservices or our Data Provider, but we hope to have this restored as soon as possible!</p>
                <p class="mt-6 uppercase text-base lg:text-xl text-gray-900 font-bold">In the meantime, wait 1 minute and refresh the page :)</p>
            </div>
            <a href="{{ route('login') }}" class="border border-gray-300 rounded p-4 hover:text-gray-600 hover:border-gray-600">Go Home</a>

        </div>
    </body>
</html>

