@extends('welcome')
@section('css')
<link href="{{ asset('css/pages/product-detail.css') }}" rel="stylesheet">
<link href="{{ asset('owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="harvee-prod-detail">
    <div class="container mt-4 pt-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="harvee-tags-gallery mt-2">
                                <div class="container">
                                    <div class="mySlides tile" data-scale="1.8" data-image="{{asset('storage/images/m1.jpg')}}">
                                    </div>
                                    <div class="mySlides tile" data-scale="1.8" data-image="{{asset('storage/images/m2.jpg')}}">
                                    </div>
                                    <div class="mySlides tile" data-scale="1.8" data-image="{{asset('storage/images/m3.jpg')}}">
                                    </div>
                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>
                                    <div class="container mt-4" style="display: flex;">
                                        <div class="row">
                                            <div class="column m-1">
                                                <img class="demo cursor" src="{{asset('storage/images/m1.jpg')}}" style="width:100%" onclick="currentSlide(1)" alt="">
                                            </div>
                                            <div class="column m-1">
                                                <img class="demo cursor" src="{{asset('storage/images/m2.jpg')}}" style="width:100%" onclick="currentSlide(2)" alt="">
                                            </div>
                                            <div class="column m-1">
                                                <img class="demo cursor" src="{{asset('storage/images/m3.jpg')}}" style="width:100%" onclick="currentSlide(3)" alt="">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <h2 class="font-weight-bold">
                                Macbook Pro 15 Touch Bar i9 2.3GHz/16G/512GB (2019)
                            </h2>
                            <span class="old-price">
                                $2760
                            </span>
                            <span class="sale-price font-weight-bold ml-2">
                                $2600
                            </span>
                            <p>MacBook Pro elevates the notebook to a whole new level of performance and portability. Wherever your ideas take you, you’ll get there faster than ever with high‑performance processors and memory, advanced graphics, blazing‑fast storage, and more.</p>
                            <p class="sale-off">
                                <i class="fa fa-tags"></i>
                                Sale-off program!
                            </p>
                            <ul style="margin-left: 20px;">
                                <li>
                                    CPU: Intel Core i9 2.3GHz
                                </li>
                                <li>
                                    Màn hình LCD 13.3 inch
                                </li>
                                <li>
                                    VGA: Intel Graphics 1280
                                </li>
                                <li>
                                    RAM: 16GB
                                </li>
                                <li>
                                    HDD: 512SSD
                                </li>

                            </ul>

                            <p class="text-center">
                                <button class="btn w-100 mt-4 harvee-card-btn">
                                    <i class="fa fa-shopping-bag mr-2"></i>
                                    Add to cart
                                </button>
                            </p>
                        </div>
                        <div class="col-lg-12">
                            <div class="harvee-prod-infor">
                                <ul class="nav nav-tabs">
                                    <li class="mr-4"><a class="text-uppercase" data-toggle="tab" href="#menu1">description</a></li>
                                    <li class="ml-4"><a class="text-uppercase" data-toggle="tab" href="#menu3">review</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div id="menu1" class="tab-pane fade mt-4">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat.</p>
                                    </div>
                                    <div id="menu3" class="tab-pane fade mt-4">
                                        <div class="user-review my-4 line">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 p-0">
                                                        <h4 class="reviewer-name font-weight-bold">
                                                            Edward Newgate
                                                        </h4>
                                                        <p>
                                                            <i class="fa fa-star ml-1"></i>
                                                            <i class="fa fa-star ml-1"></i>
                                                            <i class="fa fa-star ml-1"></i>
                                                            <i class="fa fa-star ml-1"></i>
                                                            <i class="fa fa-star ml-1"></i>
                                                        </p>
                                                        <p class="reviewer-content">
                                                            MacBook Pro elevates the notebook to a whole new level of performance and portability.
                                                        </p>
                                                        <p class="font-weight-bold">
                                                            12:20:34 June 06, 2019
                                                        </p>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="review">
                                            <form action="">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-12 p-0">
                                                            <h4 class="text-uppercase">
                                                                WRITE YOUR OWN REVIEW
                                                            </h4>
                                                            <p class="">
                                                                How do you rate this product? *
                                                            </p>
                                                            <table class="table w-100">
                                                                <thead class="thead-dark">
                                                                    <tr class="text-center">
                                                                        <th scope="col"></th>
                                                                        <th scope="col">1 STAR</th>
                                                                        <th scope="col">2 STARS</th>
                                                                        <th scope="col">3 STARS</th>
                                                                        <th scope="col">4 STARS</th>
                                                                        <th scope="col">5 STARS</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>
                                                                        <th scope="row" class="p-2">Evaluate</th>
                                                                        <td class="text-center"> <input type="radio" name="vehicle1" value="one-star"><br></td>
                                                                        <td class="text-center"> <input type="radio" name="vehicle1" value="one-star"><br></td>
                                                                        <td class="text-center"> <input type="radio" name="vehicle1" value="one-star"><br></td>
                                                                        <td class="text-center"> <input type="radio" name="vehicle1" value="one-star"><br></td>
                                                                        <td class="text-center"> <input type="radio" name="vehicle1" value="one-star"><br></td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <div class="col-lg-12 p-0 mt-4 review-input">
                                                            <label for="nickname">Your name*</label>
                                                            <input name="nickname" type="text" class="w-100 px-2">
                                                        </div>
                                                        <div class="col-lg-12 p-0 mt-4 review-input">
                                                            <label for="title-review">Your title*</label>
                                                            <input name="title-review" type="text" class="w-100 px-2">
                                                        </div>
                                                        <div class="col-lg-12 p-0 mt-4 review-input">
                                                            <label for="content-review">Review*</label>
                                                            <textarea name="content-review" type="text" class="w-100 px-2"></textarea>
                                                        </div>
                                                        <div class="col-lg-12 p-0 mt-4">
                                                            <button type="submit" class="btn harvee-card-btn text-uppercase w-50">
                                                                submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 p-1">
                <p class="supplier-name">
                    <span class="font-weight-bold">
                        Supplier:
                    </span> Apple
                </p>
                <p class="performance-prod">
                    <span class="font-weight-bold">
                        Formality:
                    </span> New 100%
                </p>
                <p class="status-prod">
                    <span class="font-weight-bold">
                        Status:
                    </span>Available
                </p>
                <div class="policy ">
                    <a class="" href="">
                        <button class="text-left mt-2 btn btn-policy text-uppercase w-100">
                            <i class="fa fa-user"></i>
                            Member privileges
                        </button>
                    </a>
                    <a class="" href="">
                        <button class="text-left mt-2 btn btn-policy text-uppercase w-100">
                            <i class="fa fa-truck"></i>
                            Shipment policy
                        </button>
                    </a>
                    <a class="" href="">
                        <button class="text-left mt-2 btn btn-policy text-uppercase w-100">
                            <i class="fa fa-bitcoin"></i>
                            100% MONEY
                            BACK
                        </button>
                    </a>
                    <a class="" href="">
                        <button class="text-left my-2 btn btn-policy text-uppercase w-100">
                            <i class="fa fa-hourglass-start"></i>
                            24h support
                        </button>
                    </a>
                </div>
                <div class="ads-prp">
                    <img class="w-100" src="{{asset('storage/images/qc.jpg')}}" alt="Banner">
                    <img class="w-100 mt-2" src="{{asset('storage/images/qc2.png')}}" alt="Banner">
                </div>
            </div>
            <div class="col-lg-12">
                @include('components.list-product', ['title' => 'lastest product'])
            </div>
        </div>
    </div>
</div>
</div>

@endsection
@push('script')
<script src="{{ asset('owl/OwlCarousel2-2.3.4/dist/owl.carousel.min.js')}}"></script>
<!-- <script src="{{ asset('bs-rating/bootstrap-rating.js')}}"></script> -->
<script>
    $('.owl-carousel').owlCarousel({
        loop: false,
        margin: 10,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })
</script>

<script>
    $('.tile')
        // tile mouse actions
        .on('mouseover', function() {
            $(this).children('.photo').css({
                'transform': 'scale(' + $(this).attr('data-scale') + ')'
            });
        })
        .on('mouseout', function() {
            $(this).children('.photo').css({
                'transform': 'scale(1)'
            });
        })
        .on('mousemove', function(e) {
            $(this).children('.photo').css({
                'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%'
            });
        })
        // tiles set up
        .each(function() {
            $(this)
                // add a photo container
                .append('<div class="photo"></div>')
                // some text just to show zoom level on current item in this example
                .append($(this).attr('data-scale'))
                // set up a background image for each tile based on data-image attribute
                .children('.photo').css({
                    'background-image': 'url(' + $(this).attr('data-image') + ')'
                });
        })
</script>

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>

@endpush