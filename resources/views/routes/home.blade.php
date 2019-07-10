@extends('welcome')
@section('css')
<link href="{{ asset('css/components/carousel.css') }}" rel="stylesheet">
<link href="{{ asset('css/components/product-card.css') }}" rel="stylesheet">
<link href="{{ asset('css/components/list-product.css') }}" rel="stylesheet">
<link href="{{ asset('owl/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('owl/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css') }}" rel="stylesheet">
<!-- <link href="{{ asset('bs-rating/bootstrap-rating.css')}}" rel="stylesheet"> -->
@endsection


@section('content')
@include('components.carousel')
@include('components.list-product')
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

    $("input").rating();
</script>
@endpush