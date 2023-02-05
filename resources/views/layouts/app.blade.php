<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('/style/style.css')}}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="https://sobrus.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.ca5b804c.png&w=384&q=100" alt="" srcset="">
                {{-- <img src="https://media.licdn.com/dms/image/C4E03AQGAnwN4S6w…eta&t=yv6QUgsKBzx_HPP45bqWtzy06qjKVK6rMkugfo4ucRM" alt="" srcset=""> --}}
                <div class="d-flex w-50" >
                        <h4 class="mx-4 fw-bold"> <a class="text-decoration-none  text-info" href="/"> Welcome</a></h4>
                        <h4 class="mx-4 fw-bold"> <a class="text-decoration-none text-info"  href="/About"> About</a></h4>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
