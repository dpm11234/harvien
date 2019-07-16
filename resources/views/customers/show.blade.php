@extends('layouts.app')
@section('title', 'Detail Customer - {{$customer->name}}')

@section('content')
<h3 class="w-100">Detail for {{$customer->name}}</h3>
<p><a href="{{route('customers.edit', ['customer' => $customer])}}">Edit</a></p>
<form action="{{route('customers.destroy', ['customer' => $customer])}}" method="POST">
   @csrf
   @method('DELETE')
   <button type="submit" class="btn btn-danger">Delete</button>
</form>
<p>{{$customer->avatar}}</p>
<img src="{{asset('storage/customerpics/'.$customer->avatar)}}" alt="customer profile">
<div class="row">
   <div class="col-12">
      <p><strong>Name</strong> {{$customer->name}}</p>
      <p><strong>Email</strong> {{$customer->email}}</p>
      <p><strong>Company</strong> {{$customer->company->name}}</p>
   </div>
</div>
@endsection
