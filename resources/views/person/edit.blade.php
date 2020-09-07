@extends('layouts.app')
<html>
<head>
    <title>Test Project</title>
</head>
<body>
@if($errors->any())
    <ul class="alert alert-danger">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="/persons/{{$objPerson->id}}/update" >
    @csrf
{{--    @method('PATCH')--}}
    <div class="container">
        <div class="form-group">
            <label class="col-md-3">First Name</label>
            <input type="text" class="col-md-8 form-control" name="first_name" value="{{$objPerson->first_name}}"/>
        </div>
        @error('first_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label class="col-md-3">Last Name</label>
            <input type="text" class="col-md-8 form-control" name="last_name" value="{{$objPerson->last_name}}"/>
        </div>
        <div class="form-group">
            <label class="col-md-3">Address</label>
            <textarea class="col-md-8 form-control" name="address" value="{{$objPerson->address}}">{{$objPerson->address}}</textarea>
        </div>
        <div class="form-group">
            <label class="col-md-3">Birth Date</label>
            <input type="datetime-locale" class="col-md-8 form-control" name="date_of_birth" value="{{$objPerson->date_of_birth}}"/>
        </div>

        <div class="for m-group">
            <label class="col-md-3">Marriage Date</label>
            <input type="datetime-locale" class="col-md-8 form-control" name="date_of_marriage" value="{{$objPerson->date_of_marriage}}"/>
        </div>
        <div class="form-group">
            <label class="col-md-3">Age</label>
            <input type="number" class="col-md-8 form-control" name="age" value="{{$objPerson->age}}"/>
        </div><hr>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Submit"/>
        </div>

    </div>
</form>
</body>
</html>
