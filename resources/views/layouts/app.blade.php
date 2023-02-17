<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="icon" type="image/x-icon" href="https://sobrus.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.ca5b804c.png&w=384&q=100">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{url('/style/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sobrus</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light bg-white shadow-sm">
            <div class="container">
                <img src="https://sobrus.com/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Flogo.ca5b804c.png&w=384&q=100" alt="" srcset="">
                <div id="navbar" class="d-flex w-75" >
                        <h5 class="mx-4 fw-bold mx-5"><a class="text-decoration-none  text-dark" href="/"> Home</a></h5>
                        <h5 class="mx-4 fw-bold"> <a class="text-decoration-none text-dark"  href="/About"> About</a></h5>
                        <h5 class="mx-4 fw-bold"> <a class="text-decoration-none text-dark"  href="#solutions"> Solutions</a></h5>
                        <h5 class="mx-4 fw-bold"> <a class="text-decoration-none text-dark"  href="#tools"> Tools</a></h5>
                        <h5 class="mx-4 fw-bold"> <a class="text-decoration-none text-dark"  href="#contactUs"> Contact Us</a></h5>
                </div>
            </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
