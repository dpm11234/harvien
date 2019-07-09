<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout/navbar.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js')}}"></script>
    <!-- <link href="source/cover.css" rel="stylesheet"> -->
    <title>Cover Template for Bootstrap</title>
</head>

<body class="body">
    @component('components.navbar')
    @endcomponent

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">



        @yield('content')
        <!-- @yield('contact') -->

        <!-- @component('components.footer')
        @endcomponent -->
    </div>

  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
      <script src="{{ asset('js/app.js') }}">
    </script>
</body>

</html>