@extends('welcome')
@section('css')
<link href="{{ asset('css/components/carousel.css') }}" rel="stylesheet">
@endsection


@section('content')
@include('components.carousel')


@endsection