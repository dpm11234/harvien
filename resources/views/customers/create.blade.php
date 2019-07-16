@extends('layouts.app')
@section('title')
Add Customer
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
    <form action="{{route('customers.store', ['customer' => $customer])}}" method="POST" enctype="multipart/form-data" class="pb-5">
            @csrf
            @include('customers.form')
            <button type="submit">Add Customer</button>
        </form>
    </div>
</div>
@endsection
