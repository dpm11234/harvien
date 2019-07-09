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
      <script src="{{ asset('js/app.js') }}">
      </script>
      <script>
       $(document).ready(() => {
        console.log('start');

        $("#my-cart").click(() => {
            $("#cart-detail").fadeIn();
            return false;
        });
        $("#cart-detail").click(() => {
            return false;
        });

        // --------------------------------------

        $("#my-cart-2").click(() => {
            $("#cart-detail-2").fadeIn();
            return false;
        });
        $("#cart-detail-2").click(() => {
            return false;
        });
        $("body").click(({
            target
        }) => {

            $("#cart-detail-2").fadeOut();
        });

        // --------------------------------------

        $("#cate-1").click(() => {
            $("#cate-detail-1").fadeIn();
        });
        $("#cate-detail-1").click(() => {
            return false;
        });
        $("body").click(({
            target
        }) => {
            if ($(target).is('#cate-1') || $(target).parents('#cate-1').length) return;
            $("#cate-detail-1").fadeOut();
        });

        // --------------------------------------

        $("#cate-2").click(() => {
            $("#cate-detail-2").fadeIn();
        });
        $("#cate-detail-2").click(() => {
            return false;
        });
        $("body").click(({
            target
        }) => {
            if ($(target).is('#cate-2') || $(target).parents('#cate-2').length) return;
            $("#cate-detail-2").fadeOut();
        });

        // --------------------------------------
        $("#cate-scroll-1").click(() => {
            $("#cate-detail-scroll-1").fadeIn();
        });
        $("#cate-detail-scroll-1").click(() => {
            return false;
        });
        $("body").click(({
            target
        }) => {
            if ($(target).is('#cate-scroll-1') || $(target).parents('#cate-scroll-1').length) return;
            $("#cate-detail-scroll-1").fadeOut();
        });

        // --------------------------------------

        $("#cate-scroll-2").click(() => {
            $("#cate-detail-scroll-2").fadeIn();
        });
        $("#cate-detail-scroll-2").click(() => {
            return false;
        });
        $("body").click(({
            target
        }) => {
            if ($(target).is('#cate-scroll-2') || $(target).parents('#cate-scroll-2').length) return;
            $("#cate-detail-scroll-2").fadeOut();
        });


        var nav = $("#nav-scroll");
        var nonScroll = $('#non-scroll');
        $(window).scroll(() => {
                var distance = nonScroll.offset().top;
            if ($(window).scrollTop() - distance >=0 ) {
                if(!$("#nav-scroll").hasClass('nav-show'))
                {
                    $("#nav-scroll").addClass('nav-show');
                    $('body').click();
                }
            } else {
                if($("#nav-scroll").hasClass('nav-show'))
                {
                    $("#nav-scroll").removeClass('nav-show');
                }
            }

        });
    });
      @yield('js')
    </script>
</body>

</html>
