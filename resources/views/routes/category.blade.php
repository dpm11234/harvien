@extends('welcome')
@section('css')
<link href="{{ asset('css/pages/category.css') }}" rel="stylesheet">
<link href="{{ asset('owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="harvee-category py-4 my-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 p-0">
                <div class="col-lg-12">
                    <div id="accordion-1" class="harvee-accordion">
                        <div class="card">
                            <div class="card-header mt-2" id="fashion">
                                <h5 class="mb-0 line">
                                    <button class="btn text-uppercase font-weight-bold collapsed py-4" data-toggle="collapse" data-target="#collapseFashion" aria-expanded="false" aria-controls="collapseFashion">
                                        fashion
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFashion" class="collapse line" aria-labelledby="fashion" data-parent="#accordion-1">
                                <div class="card-body">
                                    <button class="btn d-block">
                                        Man
                                    </button>
                                    <button class="btn d-block">
                                        Woman
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion-2" class="harvee-accordion">
                        <div class="card">
                            <div class="card-header mt-2" id="price">
                                <h5 class="mb-0 line">
                                    <button class="btn text-uppercase font-weight-bold collapsed py-4" data-toggle="collapse" data-target="#collapsePrice" aria-expanded="false" aria-controls="collapsePrice">
                                        price
                                    </button>
                                </h5>
                            </div>
                            <div id="collapsePrice" class="collapse line" aria-labelledby="price" data-parent="#accordion-2">
                                <div class="card-body mt-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <input name="maxprice" type="text" class="w-100 px-2" placeholder="Max Price $">
                                            </div>
                                            <div class="col-lg-12 my-2">
                                                <input name="minprice" type="text" class="w-100 px-2" placeholder="Min Price $">
                                            </div>
                                            <div class="col-lg-12 my-2">
                                                <button class="btn btn-dark text-uppercase harvee-btn-filter py-0">
                                                    filter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion-3" class="harvee-accordion">
                        <div class="card">
                            <div class="card-header mt-2" id="size">
                                <h5 class="mb-0 line">
                                    <button class="btn text-uppercase font-weight-bold collapsed py-4" data-toggle="collapse" data-target="#collapseSize" aria-expanded="false" aria-controls="collapseSize">
                                        size
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseSize" class="collapse line" aria-labelledby="size" data-parent="#accordion-3">
                                <div class="card-body mt-2">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12 my-2 text-center">
                                                <button class="btn btn-dark text-uppercase harvee-btn-filter py-0">
                                                    S
                                                </button>
                                                <button class="btn btn-dark text-uppercase harvee-btn-filter py-0">
                                                    M
                                                </button>
                                                <button class="btn btn-dark text-uppercase harvee-btn-filter py-0">
                                                    L
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion-4" class="harvee-accordion">
                        <div class="card">
                            <div class="card-header mt-2" id="brand">
                                <h5 class="mb-0 line">
                                    <button class="btn text-uppercase font-weight-bold collapsed py-4" data-toggle="collapse" data-target="#collapseBrand" aria-expanded="false" aria-controls="collapseBrand">
                                        brand
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseBrand" class="collapse line" aria-labelledby="brand" data-parent="#accordion-4">
                                <div class="card-body">
                                    <button class="btn d-block">
                                        Samsung
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="accordion-5" class="harvee-accordion">
                        <div class="card">
                            <div class="card-header mt-2" id="color">
                                <h5 class="mb-0 line">
                                    <button class="btn text-uppercase font-weight-bold collapsed py-4" data-toggle="collapse" data-target="#collapseColor" aria-expanded="false" aria-controls="collapseColor">
                                        Color
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseColor" class="collapse line" aria-labelledby="color" data-parent="#accordion-5">
                                <div class="card-body text-center">
                                    <button class="btn btn-primary text-uppercase harvee-btn-filter p-3 m-2"></button>
                                    <button class="btn btn-dark text-uppercase harvee-btn-filter p-3 m-2"></button>
                                    <button class="btn btn-success text-uppercase harvee-btn-filter p-3 m-2"></button>
                                    <button class="btn btn-warning text-uppercase harvee-btn-filter p-3 m-2"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="harvee-category-carousel my-4 ">
                    <div class="container">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                @include('components.product-card')
                            </div>
                            <div class="item">
                                @include('components.product-card')
                            </div>
                            <div class="item">
                                @include('components.product-card')
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-9">
                <div class="col-lg-12">
                    quanr cao banner
                </div>
                <div class="col-lg-12">
                    catechinh
                    <div class="col-lg-12">
                        sort
                    </div>
                    <div class="col-lg-12">
                        danh muc san pham
                    </div>
                    <div class="col-lg-12">
                        phan trang
                    </div>
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
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
</script>
@endpush