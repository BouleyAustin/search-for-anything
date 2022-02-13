<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SearchForAnything.io</title>
        <meta name="keywords" content="podcast automation, podcast search engine, podcast seo, podcast seo automation, podcast growth, podcast seo software, podcast software">
        <meta name="description" content="Turn your podcast into your biggest marketing asset in seconds! SearchForAnything.io increases your SEO presence, downloads, and conversion rates automatically!">
        <meta name="robots" content="index, follow" />

        <link rel = "icon" href =
        "\logo.png"
              type = "image/x-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        @livewireScripts
    </body>
</html>
