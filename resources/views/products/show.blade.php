@extends('template')

@section('content')

  <div class="row">
    <div class="col-12">
      <h2>Details for {{ $product->name }}</h2>
      <a href="/products/{{ $product->id }}/edit">Edit</a>
    </div>

  </div>

  <div class="row">
    <div class="col-12">
      <p><b>Name: </b> {{ $product->name }}</p>
      <p><b>Email: </b> {{ $product->email }}</p>
      <p><b>Brand: </b> {{ $product->brand->name }}</p>
    </div>

  </div>

@endsection
