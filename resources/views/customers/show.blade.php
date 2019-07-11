@extends('layout')
@section('title')
Detail Customer - {{$customer->name}}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <p><strong>Name</strong> {{$customer->name}}</p>
        <p><strong>Email</strong> {{$customer->email}}</p>
        <p><strong>Company</strong> {{$customer->company->name}}</p>
    </div>
</div>
@endsection
