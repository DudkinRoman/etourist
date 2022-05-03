<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/ettLogo.png" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }} @yield('title')</title>
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta name="description" content="@yield('meta_description')">
    <!-- Scripts -->
    {{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="{{ asset('css/googleapis.css') }}" rel="stylesheet">
    {{--    Styles --}}
    {{--    <link href="{-- asset('css/app.css') --}" rel="stylesheet">--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{--    Font Awesome CSS --}}
    {{--    Font Awesome 4.7.0 --}}
    {{--    <link rel="stylesheet" href="css/font-awesome.min.css">--}}
    {{--    Font Awesome 5.13.0 --}}
    {{--    https://use.fontawesome.com/releases/v5.5.0/fontawesome-free-5.13.0-web.zip--}}
    <link rel="stylesheet" href="/extentions/fontawesome-free-5.13.0-web/css/all.min.css">
    {{--     Bootstrap CSS --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    {{--    Sweetalert--}}
    <link rel="stylesheet" href="/css/sweetalert.css">
</head>
<body>
    <div id="app" class="app">
        <header class="header">
            @include('layouts.header')
        </header>
        <main class="content py-4">
            @yield('first-content')
            @yield('content')
        </main>
        <footer class="footer">
            @include('blog.links')
        </footer>
    </div>
    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    {{--CKEditor--}}
    {{--<script src="//cdn.ckeditor.com/4.14.0/full/ckeditor.js"></script>--}}
    <script src="/extentions/ckeditor/ckeditor.js"></script>
    {{--jQuery first, Pooper, then Bootstrap JS --}}
    <script src="/js/jquery-3.4.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    {{--    Sweetalert --}}
    <script src="/js/sweetalert.min.js"></script>

</body>
</html>
