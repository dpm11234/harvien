<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <script src="{{ asset('/js/app.js')}}"></script>
</head>

<body>
    @include('nav')
    <div class="container">
        @yield('content')
    </div>
    @if (getenv('APP_ENV') === 'local')
    <script id="__bs_script__">
        //<![CDATA[
          document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
              //]]>
    </script>
    @endif
</body>

</html>
