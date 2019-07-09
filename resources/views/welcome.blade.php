<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link href="{{ asset('css/layout/navbar.css') }}" rel="stylesheet">
  @yield('css')
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <!-- <script src="{{ asset('js/app.js')}}"></script> -->
  <!-- <link href="source/cover.css" rel="stylesheet"> -->
  <title>Harvee | Technology equitment</title>
</head>

<body class="body">
  @include('components.navbar')

  <div class="cover-container d-flex h-100 mx-auto flex-column">



    @yield('content')
    <!-- @yield('contact') -->

    <!-- @component('components.footer')
        @endcomponent -->
  </div>



  <script src="{{ asset('js/app.js') }}">
  </script>
  @if (getenv('APP_ENV') === 'local')
  <script id="_bs_script_">
    //<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.18.6'><\/script>".replace("HOST", location.hostname));
    //]]>
  </script>
  @endif
</body>

</html>