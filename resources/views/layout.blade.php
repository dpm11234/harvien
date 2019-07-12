<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
</head>

<body>
    <div class="container">
        @include('nav')
        @if (session()->has('message'))
        <div class="alert alert-success" role="alert">
            <strong>Success</strong> {{session()->get('message')}}
        </div>
        @endif
        @yield('content')
    </div>
    <script src="{{ asset('/js/manifest.js')}}"></script>
    <script src="{{ asset('/js/vendor.js')}}"></script>
    <script src="{{ asset('/js/app.js')}}"></script>
</body>

</html>
