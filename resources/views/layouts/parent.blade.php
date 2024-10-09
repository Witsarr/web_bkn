<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layouts.includes')
    @stack('css')
    <title>@yield('title') Bintang Karya Nusantara</title>
    @include('layouts.nav')
</head>
<body>
    <div class="container d-flex align-items-center justify-content-center mt-4">
        <div class="row rounded rounded-xl">
            @yield('content')
        </div>
    </div>

    @stack('js')
    @include('layouts.script')
</body>
</html>
