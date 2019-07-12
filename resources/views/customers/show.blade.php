@extends('layout')
@section('title', 'Detail Customer - {{$customer->name}}')

@section('content')
<h3 class="w-100">Detail for {{$customer->name}}</h3>
<p><a href="/customers/{{$customer->id}}/edit">Edit</a></p>
<form action="/customers/{{$customer->id}}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
<div class="row">
    <div class="col-12">
        <p><strong>Name</strong> {{$customer->name}}</p>
        <p><strong>Email</strong> {{$customer->email}}</p>
        <p><strong>Company</strong> {{$customer->company->name}}</p>
    </div>
</div>
@endsection
