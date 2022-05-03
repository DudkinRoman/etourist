<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/images/LaravelLogo.png" />

    {{--     CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    {{--    Styles --}}
    {{--    <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{--    Font Awesome CSS --}}
    {{--    Font Awesome 4.7.0 --}}
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    {{--    Font Awesome 5.13.0 --}}
    {{--    https://use.fontawesome.com/releases/v5.5.0/fontawesome-free-5.13.0-web.zip--}}
    <link rel="stylesheet" href="/extentions/fontawesome-free-5.13.0-web/css/all.min.css">

    {{--     Bootstrap CSS --}}
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    {{--    Sweetalert--}}
    <link rel="stylesheet" href="/css/sweetalert.css">

</head>
<body>
<div id="app">
    <!-- https://html5css.ru/bootstrap4/bootstrap_navbar.php -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="/images/LaravelLogo.png" align="left" hspace="5" height="25px">
            {{ config('app.name', 'Laravel') }}
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('admin.index')}}">Панель состояния</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        Блог
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('admin.category.index') }}">Категории</a>
                        <a class="dropdown-item" href="{{ route('admin.article.index') }}">Материалы</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        Управление пользователями
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-item"><a href="{{route('admin.user_managment.user.index')}}">Пользователи</a></li>
                    </ul>
                </li>

            </ul>


            <!-- Right Side Of Navbar -->
            <div class="text-right">
            <ul class="navbar-nav text-right" style="margin-left: 15px;">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="nav-item dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
            </div>


        </div>
        </div>
    </nav>
    <br>

    @yield('content')
</div>
<br>

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

{{--   My Script  --}}
<script src="/js/script_admin.js"></script>


</body>
</html>
