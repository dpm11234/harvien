@extends('template')

@section('content')
<h1>Products</h1>


<div>
    {{ $errors->first('name') }}
</div>

<div>
    {{ $errors->first('email') }}
</div>



<form action="/products" method="POST">
    <p>Name: </p>
    <div class="form-group">
        <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder=""
            value="{{ old('name') }}">
    </div>
    <p>Email: </p>
    <div class="form-group">
        <input type="text" class="form-control" name="email" id="" aria-describedby="helpId" placeholder=""
            value="{{ old('email') }}">
    </div>
    <div class="form-group">
        <select name="active" id="active" class="form-control">
            <option value="1">Active</option>
            <option value="0">Inactive</option>
        </select>
    </div>
    <div class="form-group">
        <select name="brand_id" id="brand_id" class="form-control">
            @foreach ($brands as $brand)
            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>

    @csrf
</form>

@endsection
