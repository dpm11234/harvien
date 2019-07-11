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
    <!-- <script src="{{ asset('js/app.js')}}"></script> -->
    <!-- <link href="source/cover.css" rel="stylesheet"> -->
    <title>Harvee | Technology equipment</title>
</head>

<body class="body">
    @include('components.navbar')

    <div class="cover-container d-flex h-100 mx-auto flex-column">


        @yield('content')
        <!-- @yield('contact') -->

        @component('components.footer')
        @endcomponent
    </div>

    <script src="{{ asset('js/app.js') }}">
    </script>
    @stack('script')

    <script>
        $(document).ready(() => {
            let addToggle = (btn, queryTarget) => {
                let $btn = $(btn);
                let $target = $(queryTarget);
                let isClicked = false;
                $btn.click(() => {
                    isClicked = !isClicked;
                    isClicked ? $target.fadeIn() : $target.fadeOut();
                });
                $target.click(() => {
                    return false;
                });
                $('body').click(({
                    target
                }) => {
                    if ($(target).is(btn) || $(target).parents(btn).length) return;
                    isClicked = false;
                    $target.fadeOut();
                });
            }
            addToggle('#my-cart', '#cart-detail');
            addToggle('#my-cart-2', '#cart-detail-2');
            addToggle('#cate-1', '#cate-detail-1');
            addToggle('#cate-2', '#cate-detail-2');
            addToggle('#cate-scroll-1', '#cate-detail-scroll-1');
            addToggle('#cate-scroll-2', '#cate-detail-scroll-2');


            var $nav = $("#nav-scroll");
            var nonScroll = $('#non-scroll');
            var animated = false;
            $(window).scroll(() => {
                var distance = nonScroll.offset().top;
                if ($(window).scrollTop() - distance >= 0) {
                    if (!animated) {
                        animated = true;
                        $nav.show();
                        $nav.css({
                            top: 0,
                        })

                    }
                } else {
                    if (animated) {
                        $nav.hide();
                        $nav.css({
                            top: -60,
                        })

                        animated = false;
                    }
                }
            });
        });
    </script>
    @yield('js')
</body>

</html>
