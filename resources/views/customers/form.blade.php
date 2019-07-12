<label for="name">Name</label>
<div class="input-group">
    <input class="form-control" type="text" name="name" value="{{old('name') ?? $customer->name}}">
    @if ($nameError = $errors->first('name'))
    <small class="alert alert-danger">{{$nameError}}</small>
    @endif
</div>
<label for="email">Email</label>
<div class="input-group">
    <input class="form-control" type="text" name="email" value="{{old('email') ?? $customer->email}}">
    @if ($emailError = $errors->first('email'))
    <small class="alert alert-danger">{{$emailError}}</small>
    @endif
</div>
<label for="active">Status</label>
<div class="input-group">
    <select class="form-control" name="active">
        <option value="1" {{$customer->active == 'Active' ? 'selected' : ''}}>Active</option>
        <option value="2" {{$customer->active == 'Inactive' ? 'selected' : ''}}>Inactive</option>
    </select>
</div>

<div class="form-group">
    <label for="company_id">Company</label>
    <select name="company_id" class="form-control">
        @foreach ($companies as $company)
        <option value="{{$company->id}}" {{$customer->company_id  == $company->id  ? 'selected' : '' }}>
            {{$company->name}}</option>
        @endforeach
    </select>
</div>
