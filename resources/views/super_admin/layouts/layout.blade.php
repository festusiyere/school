<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Juhla's School of Art and Magic</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is a test application developed by Juhla">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="{{asset('dashboard/styles/main.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/styles/style.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header" id="app">
        @include('super_admin.layouts.topnav')
        @include('super_admin.layouts.uitheme')
        <div class="app-main">
            @include('super_admin.layouts.sidenav')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('dashboard/scripts/main.js')}}"></script>
    @yield('scripts')
</body>

</html>
