<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
        <body>
        <div class="gradient text-black min-h-screen flex items-center">
            <div class="container mx-auto p-4 flex flex-wrap items-center">
                <div class="w-full md:w-5/12 text-center p-4">
                    <img src="/logo.png" alt="Not Found" />
                </div>
                <div class="w-full md:w-7/12 text-center md:text-left p-4">
                    <div class="text-6xl font-medium">404</div>
                    <div class="text-xl md:text-3xl font-medium mb-4 mt-2">
                        Oops. This page has gone missing.
                    </div>
                    <div class="text-lg mb-8">
                        You may have mistyped the address or the page may have moved.
                    </div>
                    <a href="{{ route('login') }}" class="border border-gray-300 rounded p-4 hover:text-gray-600 hover:border-gray-600">Go Home</a>
                </div>
            </div>
        </div>
    </body>
</html>
