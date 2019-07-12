@extends('layout')
@section('title', 'Contact Us')
@section('content')
<h1>Contact Us</h1>
<p>Company Name</p>
<form action="/contact" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <div class="input-group">
            <input class="form-control" type="text" name="name" value="">
            @if ($nameError = $errors->first('name'))
            <small class="alert alert-danger">{{$nameError}}</small>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <div class="input-group">
            <input class="form-control" type="text" name="email" value="">
            @if ($emailError = $errors->first('email'))
            <small class="alert alert-danger">{{$emailError}}</small>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" cols="30" rows="10" class="form-control"> {{old('message')}}</textarea>
    </div>
    @csrf
    <button class="btn btn-info" type="submit">Submit</button>
</form>

@endsection
