<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white">
    <div id="app">
        <nav class="w-full mx-auto py-4.5 bg-emerald-300">
            <div class="w-[80%] container mx-auto px-4">
                <div class="flex justify-between items-center">
                    <a class="text-lg font-black text-white" href="{{ url('/') }}">
                        CATALOG
                    </a>
                    <button class="text-gray-500 focus:outline-none md:hidden" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                        </svg>
                    </button>

                    <div class="hidden md:flex md:items-center md:space-x-4" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="flex space-x-4">
                            <!-- Add your left side links here -->
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="flex space-x-4">
                            <!-- Authentication Links -->
                            @guest
                            
                                @if (Route::has('login'))
                                    <li>
                                        <a class="text-white font-semibold" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                @if (Route::has('register'))
                                    <li>
                                        <a class="text-white font-semibold" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="relative">
                                    <a id="" class="text-white font-bold" href="{{ route('home') }}">
                                        {{ Auth::user()->name }}
                                    </a>
                                </li>
                                <li class="relative">
                                    <a id="" class="text-white font-bold" href="{{ route('home') }}">
                                        Favorites
                                    </a>
                                </li>
                                <li class="relative">
                                    <a class="text-white font-bold" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                        @csrf
                                    </form>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
</body>
</html>