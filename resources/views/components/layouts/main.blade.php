<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body class="antialiased bg-orange-100">
<header class="px-5 bg-blue-600 text-white py-4">
    <x-UI.container>
        <nav class="flex items-center justify-between">
            <div>
                <a href="{{ route('index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-blue-300" fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                    </svg>
                </a>
            </div>
            @if(auth()->check())
                <ul class="flex items-center space-x-10">
                    <li>
                        <a href="{{ route('user.logout') }}" class="px-5 py-4 hover:underline text-lg">Logout</a>
                    </li>
                </ul>
            @else
                <ul class="flex items-center space-x-10">
                    <li>
                        <a href="{{ route('login') }}" class="px-5 py-4 hover:underline text-lg">Login</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}" class="px-5 py-4 hover:underline text-lg">Register</a>
                    </li>
                </ul>
            @endif
        </nav>
    </x-UI.container>
</header>

{{ $slot }}

@if(session()->has('success'))
    <div
        class="absolute bottom-20 left-20 bg-green-400 px-10 py-2 rounded animate-bounce text-white font-bold text-lg">
        <span>{{ session('success') }}</span>
    </div>
@endif

</body>
</html>
