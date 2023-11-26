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
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/alpine/start.js'])
    </head>
    <body class="font-sans  antialiased">
       
        <header>
            <nav x-data="{ open: false }" class="bg-black border-b border-white text-white">
                <!-- Primary --u--- Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="w-full flex justify-between text-white">

                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('index.home') }}">
                                    <x-application-logo class="block h-9 w-auto fill-current" />
                                </a>
                            </div>
            
        
                            @if (Route::has('login'))
                                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                    @auth
                                        <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                                    @else
                                        <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                                            {{__('Login')}}
                                        </x-nav-link>

                                  
                                        @if (Route::has('register'))
                                            <x-nav-link :href="route('register')" :active="request()->routeIs('register')">
                                                {{__('Cadastre-se')}}
                                            </x-nav-link>
                                            
                                        @endif 
                                    @endauth
                                </div>
                            @endif
                            
                    </div>
                </div>
            </nav>   
            
        </header>

        <main class="mt-12 mx-6">
            {{$slot}}
        </main>
        
    </body>
</html>
