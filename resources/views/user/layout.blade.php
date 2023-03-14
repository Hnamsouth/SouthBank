<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">

{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <title>@yield('title','Layout')</title>
    @yield('head-js')
    @yield('before-css')
    @include('user.html.css')
    @yield('after-css')
</head>

<body>
    <nav>
        @include('user.html.nav.nav')
    </nav>
@yield('custom-nav')
    <main >
        @yield('main-content')
    </main>

{{--footer--}}
@yield('footer')
{{--script--}}
@yield('before-js')
@include('user.html.js')
@yield('after-js')

</body>
</html>
