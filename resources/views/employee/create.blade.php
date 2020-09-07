@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head>
    <title>Test Project</title>
</head>
<body>
<h1>Test Project</h1><hr>
@if($errors->any())
<ul class="alert alert-danger col-md-10">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<form action="{{route('employees.store')}}" method="POST">
    @csrf
    <div class="container">
        <div class="form-group">
            <label class="col-md-4">First Name</label>
            <input type="text" class="form-control col-md-8" name="first_name">
        </div>
        <div class="form-group">
            <label class="col-md-4">Last Name</label>
            <input type="text" class="form-control col-md-8" name="last_name">
        </div>
        <div class="form-group">
            <label class="col-md-4">Email</label>
            <input type="email" class="form-control col-md-8" name="email">
        </div>
        <div class="form-group">
            <label class="col-md-4">Phone</label>
            <input type="text" class="form-control col-md-8" name="phone">
        </div>
        <div class="form-group">
            <label class="col-md-4">Select Company</label>
            <select class="selectpicker col-md-8 form-control" name="company_id">
                @foreach($arrObjCompany as $objCompany)
                <option value="{{$objCompany->id}}">{{$objCompany->name}}</option>
                @endforeach
            </select>
        </div><hr>
        <div class="form-group">
            <div class="col-md-8">
                <input type="submit" class="btn btn-info" value="Submit" />
            </div>
        </div>

{{--        <input type="hidden" name="company_id" value="{{$intCompanyId}}"/>--}}
    </div>

</form>
</body>
</html>
