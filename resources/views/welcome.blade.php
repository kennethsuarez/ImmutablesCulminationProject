<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Laravel</title>


    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="text-center text-8xl font-thin mb-4">
                    <img src="/svg/Tweetylogo.svg">
                </div>
                <div class="flex justify-around">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">HOME</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">LOGIN</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">REGISTER</a>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </body>
</html>
