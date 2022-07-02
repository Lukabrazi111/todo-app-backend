<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Alpine js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>[x-cloak] {
            display: none !important
        }</style>

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
                    <li
                        x-cloak
                        x-data="{ open: false }"
                        class="flex items-center space-x-4 relative">
                        <span>{{ auth()->user()->username }}</span>
                        <div>
                            <img src="{{ asset('avatars/default-avatar.png') }}" alt="default-avatar"
                                 class="w-10 h-10 rounded-full">
                        </div>
                        <button
                            @click="open = !open"
                            class="py-3 px-2">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" :class="open ? 'rotate-180' : ''"
                                     class="h-6 w-6 transition-all" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
                                </svg>
                            </span>
                        </button>
                        <div
                            x-show="open"
                            x-transition.origin.top.duration.200ms
                            class="bg-white text-black w-40 absolute top-16 z-20 border border-gray-400 flex flex-col rounded">
                            <a href="#"
                               class="px-2 py-2 bg-gray-100 text-gray-900 border-b border-gray-400 hover:bg-gray-300">Account</a>
                            <a href="#"
                               class="px-2 py-2 bg-gray-100 text-gray-900 border-b border-gray-400 hover:bg-gray-300">Profile</a>
                            <a href="{{ route('user.logout') }}"
                               class="px-2 py-2 bg-gray-100 text-gray-900 border-b hover:bg-gray-300">Logout</a>
                        </div>
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
