@extends('template')

@section('content')
    <h1>Products</h1>

    <form action="products" method="POST">
        <div class="form-group">
          <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>

        @csrf
    </form>

    {{ $errors->first('name') }}

    <ul>
        @foreach ($products as $product)
            <li>
                <p>Name: {{ $product->name }}</p>
            </li>
        @endforeach

    </ul>
@endsection
