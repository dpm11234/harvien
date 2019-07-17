<div class="harvee-navbar">
    <div class="nav-non-scroll d-none d-sm-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <a href="/home">
                        <img class="harvee-logo" src="{{asset('storage/images/logo.png')}}" alt=""></a>

                </div>
                <div class="col-lg-4">
                    <div class="harvee-search-bar pt-4 pb-4 m-2 text-center">
                        <input type="text" class="p-2" name="search-bar" placeholder="Search...">
                        <label for="search-bar">
                            <i class="fa fa-search"></i>
                        </label>
                    </div>
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
                                    <div class="container">
                                        <div class="row">
                                            <a href="/my-cart">
                                        
                                                <button class="btn btn-success w-100 m-2">
                                                    Check-out!
                                                </button>
                                            </a>
                                        </div>
                                    </div>
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
                    <a href="/category" id="cate-1" class="nav-link ">Category
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

    </style>
    <!-- Scroll nav -->
    <div id="nav-scroll" style="
                top: -60px;
                display: none;
                transition: top 0.25s ease-out;
                position: fixed;" class="container-fluid px-4 harvee-nav-link harvee-navbar-scroll d-none d-sm-block">
        <div class="row">
            <div class="col-auto text-center m-1">
                <a href="home">
                    <img class="harvee-logo-scroll" src="{{asset('storage/images/logo.png')}}" alt="">
                </a>

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
                    <div class="container">
                        <div class="row">
                            <button class="btn btn-success w-100">
                                Check-out!
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-sm harvee-nav-mobile d-block d-sm-none w-100">
        <a class="navbar-brand" href="/home">
            <img class="harvee-logo-scroll" src="{{asset('storage/images/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon my-1"></span>
            <span class="navbar-toggler-icon my-1"></span>
            <span class="navbar-toggler-icon my-1"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto harvee-nav-link p-2">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Payment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Shipment</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
    </nav>
</div>