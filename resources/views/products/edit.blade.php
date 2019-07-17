@extends('template')

@section('content')
<h1>Edit Products</h1>


<div>
    {{ $errors->first('name') }}
</div>

<div>
    {{ $errors->first('email') }}
</div>



<form action="/products/{{ $product->id }}" method="POST">
    @method('PATCH')
    @include('products.form')
    <button type="submit" class="btn btn-primary">Save</button>

</form>

@endsection
