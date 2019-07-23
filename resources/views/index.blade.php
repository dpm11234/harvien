<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout/navbar.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/layout/footer.css') }}">
    @yield('css')
    <title>Harvee | Technology equipment</title>
</head>

<body class="body">

    <div id="root"></div>

    <script src="js/app.js"></script>
</body>

</html>
