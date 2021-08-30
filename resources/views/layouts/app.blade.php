<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Scroll Infinite - LiveWire</title>
    <link rel="stylesheet" href="https://pagecdn.io/lib/font-awesome/5.10.0-11/css/all.min.css" integrity="sha256-p9TTWD+813MlLaxMXMbTA7wN/ArzGyW/L7c5+KkjOkM=" crossorigin="anonymous">
    @livewireStyles
</head>
<body>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">

                    <img class="h-10 w-auto sm:h-50" src="{{asset('images/users.png')}}" alt="">

                </a>
            </div>

            <nav class="hidden md:flex space-x-10">

                <h1 class="mx-auto text-3xl">@yield('titleNav')</h1>


            </nav>
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                <a href="https://github.com/afermanx" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                    <img class="h-8 w-auto sm:h-10" src="{{asset('images/dev.svg')}}" alt="">

                </a>

            </div>
        </div>
    </div>


        {{ $slot }}

    @livewireScripts
</body>
</html>
