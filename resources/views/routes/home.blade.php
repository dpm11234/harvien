@extends('welcome')
@section('css')
<link href="{{ asset('css/components/carousel.css') }}" rel="stylesheet">
<link href="{{ asset('css/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('css/css/owl.theme.default.min.css') }}" rel="stylesheet">
@endsection


@section('content')
@include('components.carousel')
@endsection

@push('script')
<script src="{{ asset('js/owl/owl.carousel.js')}}"></script>
@endpush