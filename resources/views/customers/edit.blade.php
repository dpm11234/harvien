@extends('layouts.app')
@section('title', 'Edit Details for ' . $customer->name)

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Edit Detail for {{$customer->name}}</h1>
    </div>
</div>
<div class="row">
    <div class="row col-12">
        <form action="{{ route('customers.update', ['customer' => $customer]) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PATCH')
            @include('customers.form')
            <button type="submit">Save Customer</button>
        </form>
    </div>
</div>
@endsection


