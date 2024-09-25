<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- <style>
        /* Custom styling for the body background image */
        body {
            background-image: url('{{ asset('images/dashimg.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Makes sure the background image stays fixed */
        }
    </style> --}}
</head>

<body class="bg-gray-100 font-sans antialiased">

    {{-- to include alert message --}}
    @include('layouts.alert')

    <div class="flex">
        <!-- Side Navigation with Half-Circle Shape -->
        <nav class="w-56 h-screen shadow-2xl bg-blue-100 rounded-r-full overflow-hidden border-2 border-gray-300">
            <!-- Centered logo with padding to avoid touching boundaries -->
            <div class="flex items-center justify-start h-40 mt-10 p-5">
                <img src="{{ asset('images/nlogo.jpg') }}" alt="logo" class="w-32 h-32 rounded-full">
            </div>

            <ul class="mt-10">
                <li>
                    <a href="{{ route('dashboard') }}" class="block hover:bg-blue-300 p-4 rounded-lg font-bold text-2xl">
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="{{route('banner.index')}}" class="block hover:bg-blue-300 p-4 rounded-lg font-bold text-2xl">Banner</a>
                </li>
                <li>
                    <a href="{{route('details.index')}}" class="block hover:bg-blue-300 p-4 rounded-lg font-bold text-2xl">Details</a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="block hover:bg-blue-300 p-4 rounded-lg font-bold text-2xl">
                        Logout
                    </a>
                </li>
            </ul>
        </nav>
        <div class="p-4 flex-1">
            @yield('content')
        </div>
    </div>
</body>
</html>
