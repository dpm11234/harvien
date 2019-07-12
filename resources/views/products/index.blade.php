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
        <div class="col-12">
            <span style="font-weight: bold">id</span>: {{ $product->id }}
        </div>
        <div class="col-12">
            <span style="font-weight: bold">name</span> {{ $product->name }}
        </div>
        <div class="col-12">
            <span style="font-weight: bold">brand</span> {{ $product->brand->name }}
        </div>
        <hr>
    @endforeach
</div>
@endsection
