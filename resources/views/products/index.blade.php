@extends('template')

@section('content')
<h1>Products</h1>

<a href="products/create">Add new product</a>

{{-- <ul>
    @foreach ($products as $product)
    <li>
        <p>Name: {{ $product->name }}</p>
        <p>Email: {{ $product->email }}</p>
    </li>
    @endforeach

</ul> --}}
<div class="row">
    <div class="col-12">
        <h1>Product</h1>
    </div>
    @foreach ($products as $product)
        <div class="col-2">
            <span style="font-weight: bold">Id: </span>: {{ $product->id }}
        </div>
        <div class="col-4">
            <span style="font-weight: bold">Name: </span> <a href="/products/{{ $product->id }}">{{ $product->name }}</a>
        </div>
        <div class="col-4">
            <span style="font-weight: bold">Brand: </span> {{ $product->brand->name }}
        </div>
        <div class="col-2">
            <span style="font-weight: bold">Active: </span> {{ $product->active }}
        </div>
        <hr>
    @endforeach

    b:ex
</div>
@endsection
