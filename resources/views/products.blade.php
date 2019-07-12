@extends('template')

@section('content')
<h1>Products</h1>

<form action="products" method="POST">
    <p>Name: </p>
    <div class="form-group">
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="" value="{{ old('name') }}">
    </div>
    <p>Email: </p>
    <div class="form-group">
        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="" value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <select name="active" id="active" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>

    @csrf
</form>

<div>
{{ $errors->first('name') }}
</div>

<div>
    {{ $errors->first('email') }}
    </div>

{{-- <ul>
    @foreach ($products as $product)
    <li>
        <p>Name: {{ $product->name }}</p>
        <p>Email: {{ $product->email }}</p>
    </li>
    @endforeach

</ul> --}}
<div class="row">
    <div class="col-6">
        Active
        @foreach ($activeProducts as $product)
        <li>
            <p>Name: {{ $product->name }}</p>
            <p>Email: {{ $product->email }}</p>
        </li>
        @endforeach
    </div>
    <div class="col-6">
        Inactive
        @foreach ($inactiveProducts as $product)
        <li>
            <p>Name: {{ $product->name }}</p>
            <p>Email: {{ $product->email }}</p>
        </li>
        @endforeach
    </div>
</div>
@endsection
