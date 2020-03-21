<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title> @yield('title', 'Juhla\'s School') </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @yield('styles')

</head>
<body>
<div id="app">
    <header>
        {{-- <div class="top">
            <i data-feather="circle"></i>
            <div class="topnav">
            <a href="{{url('/')}}">
                <div class="logo"><img src="{{asset('assets/img/logo.png')}}" alt=""></div>
            </a>
            </div>
        </div> --}}
        <nav class="navbar">
            <div class="list1">
                <div class="navlinks">
                    <ul class="navlinks">
                        <li class="navlink">
                            @auth
                            <a href="{{url('/home')}}" class="navlink">
                                Dashboard
                            </a>
                        </li>
                        @endauth
                            @guest
                            <a href="{{url('/')}}" class="navlink">
                                    Home
                                </a>
                            </li>
                        @endguest
                        <li class="navlink">
                            <a href="{{route('blog.index')}}" class="navlink">
                                Blog
                            </a>
                        </li>
                        <li class="navlink">
                            @guest
                            <a href="{{url('/login')}}" class="navlink">
                                Login
                            </a>
                            @endguest
                        </li>
                        <li class="navlink">
                            <a href="{{url('/about')}}" class="navlink">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="media">
                <div class="media-icon">
                    <a href="">
                        <i data-feather="facebook"></i>
                    </a>
                </div>
                <div class="media-icon">
                    <a href="">
                        <i data-feather="twitter"></i>
                    </a>
                </div>
                <div class="media-icon">
                    <a href="">
                        <i data-feather="instagram"></i>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    @yield('body')
</div>

<script src="{{ asset('js/feather.min.js') }}" defer></script>
<script src="{{ asset('js/main.js') }}" defer></script>

@yield('script')
</body>
</html>
