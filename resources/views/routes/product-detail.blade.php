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
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                dich vu
            </div>
            <div class="col-lg-12" style="height: 300px;">

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
                items: 1
            },
            1000: {
                items: 1
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