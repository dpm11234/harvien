<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{mix('js/manifest.js')}}"></script>
    <script src="{{mix('js/vendor.js')}}"></script>
    <script src="{{ mix('js/app.js') }}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app" class="container">
        @if (session()->has('message'))
            <div class="row">
                <div class="alert alert-success">
                   {{ session()->get('message') }}
                </div>
            </div>
        @endif
        @include('nav')
        <main class="py-4">
            @yield('content')
        </main>
    </div>


</body>

</html>