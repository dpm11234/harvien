@extends('layout')
@section('title')
Contact Us
@endsection
@section('content')
<h1>Contact Us</h1>
<p>Company Name</p>
<form action="/contact" method="post">
    <label for="name">Name</label>
    <div class="input-group">
        <input class="form-control" type="text" name="name" value="">
        @if ($nameError = $errors->first('name'))
        <small class="alert alert-danger">{{$nameError}}</small>
        @endif
    </div>
    <label for="email">Email</label>
    <div class="input-group">
        <input class="form-control" type="text" name="email" value="">
        @if ($emailError = $errors->first('email'))
        <small class="alert alert-danger">{{$emailError}}</small>
        @endif
    </div>
</form>

@endsection
