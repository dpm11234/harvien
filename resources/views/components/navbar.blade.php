<div class="harvee-navbar">
    <div class="nav-non-scroll">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="harvee-search-bar pt-4 pb-4 m-2 text-center">
                        <input type="text" class="p-2" name="search-bar" placeholder="Search...">
                        <label for="search-bar">
                            <i class="fa fa-search"></i>
                        </label>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <img class="harvee-logo" src="images/logo.png" alt="">
                </div>
                <div class="col-lg-4">
                    <div class="container  pt-4 pb-4">
                        <div class="row">
                            <div class="col-lg-8 harvee-hotline text-right">
                                <p class="m-0">CALL US NOW</p>
                                <h4 class="font-weight-bold">+8465 469 403</h4>
                            </div>
                            <div class="col-lg-4 text-right">
                                <button id="my-cart" class="btn btn-harvee">
                                    <i class="fa fa-cart-plus harvee-cart"></i>
                                </button>
                                <div id="cart-detail" class="harvee-cart-detail">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="non-scroll" class="container-fluid px-4 harvee-nav-link">
            <div class="row">
                <div class="col-lg-2 text-uppercase text-center">
                    <a href="/home" class="nav-link ">Home</a>
                </div>
                <div class="col-lg-2 text-uppercase text-center">
                    <a id="cate-1" class="nav-link ">Category
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div id="cate-detail-1" class="harvee-category-detail">
                    </div>
                </div>
                <div class="col-lg-2 text-uppercase text-center">
                    <a id="cate-2" class="nav-link ">Product
                        <i class="fa fa-angle-down"></i>

                    </a>
                    <div id="cate-detail-2" class="harvee-category-detail">
                    </div>
                </div>
                <div class="col-lg-2 text-uppercase text-center">
                    <a href="" class="nav-link ">Payment

                    </a>
                </div>
                <div class="col-lg-2 text-uppercase text-center">
                    <a href="" class="nav-link ">Shipment
                    </a>
                </div>
                <div class="col-lg-2 text-uppercase text-center">
                    <a href="contact" class="nav-link ">Contact
                    </a>
                </div>
            </div>
        </div>
    </div>


    <style> 
    #nav-scroll {
        display: none;
        position: fixed;
        top: -60px;
        transition: top 0.2s ease-out;
    }
    .nav-show {
        display: block!important;
        top: 0!important;
    }
    </style>
    <!-- Scroll nav -->
    <div id="nav-scroll" class="container-fluid px-4 harvee-nav-link harvee-navbar-scroll">
        <div class="row">
            <div class="col-auto text-center m-1">
                <img class="harvee-logo-scroll" src="images/logo.png" alt="">
            </div>
            <div class="col-auto  text-uppercase text-center">
                <a href="/home" class="nav-link mt-2 ">Home</a>
            </div>
            <div class="col-auto  text-uppercase text-center">
                <a id="cate-scroll-1" class="nav-link mt-2 ">Category
                    <i class="fa fa-angle-down"></i>
                </a>
                <div id="cate-detail-scroll-1" class="harvee-category-detail">
                </div>
            </div>
            <div class="col-auto  text-uppercase text-center">
                <a id="cate-scroll-2" class="nav-link mt-2 ">Product
                    <i class="fa fa-angle-down"></i>

                </a>
                <div id="cate-detail-scroll-2" class="harvee-category-detail">
                </div>
            </div>
            <div class="col-auto  text-uppercase text-center">
                <a href="" class="nav-link mt-2 ">Payment

                </a>
            </div>
            <div class="col-auto  text-uppercase text-center">
                <a href="" class="nav-link mt-2 ">Shipment
                </a>
            </div>
            <div class="col-auto  text-uppercase text-center">
                <a href="contact" class="nav-link mt-2 ">Contact
                </a>
            </div>
            <div class="col-3 text-right">
                <button id="my-cart-2" class="btn btn-harvee">
                    <i class="fa fa-cart-plus harvee-cart"></i>
                </button>
                <div id="cart-detail-2" class="harvee-cart-detail">
                </div>
            </div>
        </div>
    </div>

</div>

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
        $("body").click(({
            target
        }) => {

            $("#cart-detail").fadeOut();
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
                // console.log($(window).scrollTop() - distance  );
                
            if ($(window).scrollTop() - distance >=0 ) {
                if(!$("#nav-scroll").hasClass('nav-show')) 
                {
                    $("#nav-scroll").addClass('nav-show');
                    $('body').click();
                }
            } else {
                $("#nav-scroll").removeClass('nav-show');
            }
            
        });
    });
</script>