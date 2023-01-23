<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Green') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 h-screen antialiased leading-none">
    <div id="app">
        <header class="bg-green-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-5xl font-bold text-green-100 no-underline">
                        {{ config('app.name', 'Green') }}
                    </a>
                </div>
                <nav class="space-x-4 text-green-100 text-sm sm:text-base">
                    
                    
                    
                    @guest
                        <a class="no-underline hover:underline" href="{{ url('/blog') }}">Blog</a>  <!-- blog link -->
                        
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                        
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a class="no-underline hover:underline" href="{{ url('/blog') }}">Blog</a>  <!-- blog link -->
                        <a class="no-underline hover:underline" href="{{ url('/blog/create') }}">New Post</a> <!-- New post for registerd user -->

                        <a href="{{ route('logout') }}"
                           class="no-underline hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer')
        </div>
        
    </div>
</body>
</html>
