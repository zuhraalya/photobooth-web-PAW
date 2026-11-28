@props(['title' => null])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ? $title.' · ' : '' }}Postal Club</title>
        <link rel="icon" type="image/png" href="{{ asset('images/postal/stamp.png') }}">

        <!-- Fonts design system: Cormorant Garamond, Dawning of a New Day, Tangerine, Inter -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=cormorant-garamond:400|dawning-of-a-new-day:400|tangerine:400|inter:400,500&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="pc-app">
        <header class="pc-header">
            <a href="{{ url('/') }}" class="pc-intro">
                <span>A little moment, forever.</span>
                <span>Your friendly, online photo booth.</span>
            </a>

            <nav class="pc-menu" aria-label="Primary navigation">
                <a href="{{ url('/') }}">The booth</a>
                @if (request()->routeIs('register'))
                    <a href="{{ route('register') }}" class="is-active" aria-current="page">Join the club</a>
                    <a href="{{ route('login') }}">Log in</a>
                @else
                    <a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'is-active' : '' }}">Log in</a>
                    <a href="{{ route('register') }}">Join the club</a>
                @endif
            </nav>

            <a href="{{ url('/') }}" class="pc-stamp" aria-label="Postal Club, kembali ke beranda">
                <img src="{{ asset('images/postal/stamp.png') }}" alt="">
            </a>
        </header>

        <main class="pc-main">
            {{ $slot }}
        </main>

        <footer class="pc-footer">
            <p>© {{ date('Y') }} Postal Club</p>
            <p>A little piece of today, kept with love.</p>
            <p>NO POSTAGE NEEDED.</p>
        </footer>
    </body>
</html>
