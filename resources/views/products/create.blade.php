@extends('template')

@section('content')
<h1>Add Products</h1>


<div>
    {{ $errors->first('name') }}
</div>

<div>
    {{ $errors->first('email') }}
</div>



<form action="/products" method="POST">
    @include('products.form')
    <button type="submit" class="btn btn-primary">Add</button>

</form>

@endsection
