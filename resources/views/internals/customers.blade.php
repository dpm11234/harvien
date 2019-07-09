@extends('layout')
@section('title')
    Customer List
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
        <form action="customers" method="POST" class="pb-5">
            <label for="name">Name</label>
            <div class="input-group">
                <input class="form-control" type="text" name="name">
                @if ($nameError = $errors->first('name'))
                <small class="alert alert-danger">{{$nameError}}</small>
                @endif
            </div>
            <label for="email">Email</label>
            <div class="input-group">
                <input class="form-control" type="text" name="email">
                @if ($emailError = $errors->first('email'))
                <small class="alert alert-danger">{{$emailError}}</small>
                @endif
            </div>
            @csrf

            <button type="submit">Add Customer</button>
        </form>
        <ul>
            @foreach ($data_customers as $customer)
            <li>{{ $customer->name }} <span class="text-muted">({{$customer->email}})</span></li>
            @endforeach
        </ul>

    </div>
</div>

@endsection
