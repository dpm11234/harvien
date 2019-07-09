@extends('layout')
@section('content')

<h1>Customers</h1>
<form action="customers" method="POST" class="pb-5">
    <div class="input-group">
        <label for="name">Name</label> <input type="text" name="name">
        @if ($nameError = $errors->first('name'))
        <small class="alert alert-danger">{{$nameError}}</small>
        @endif
    </div>
    <div class="input-group">
        <label for="email">Email</label>
        <input type="text" name="email">
        @if ($emailError = $errors->first('email'))
        <small class="alert alert-danger">{{$emailError}}</small>
        @endif
    </div>
    @csrf

    <button type="submit">Add Customer</button>
</form>
<ul>
    @foreach ($data_customers as $customer)
    <li>{{ $customer->name }}</li>
    @endforeach
</ul>
@endsection
