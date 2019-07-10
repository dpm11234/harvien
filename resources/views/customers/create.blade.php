@extends('layout')
@section('title')
Add Customer
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <h1>Customers</h1>
        <form action="/customers" method="POST" class="pb-5">
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
            <label for="active">Status</label>
            <div class="input-group">
                <select class="form-control" name="active">
                    <option value="1">Active</option>
                    <option value="2">Offline</option>
                </select>
            </div>

            <div class="form-group">
                <label for="company_id">Company</label>
                <select name="company_id" class="form-control">
                    @foreach ($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach
                </select>
            </div>
            @csrf

            <button type="submit">Add Customer</button>
        </form>
    </div>
</div>
@endsection
