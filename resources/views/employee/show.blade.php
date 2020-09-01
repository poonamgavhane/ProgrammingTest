@extends('layouts.app')
<html>
<head></head>
<body>
<div class="container">
    <div class="form-group">
        <label class="col-md-4">First Name</label>
        {{$objEmployee->first_name}}
    </div>
    <div class="form-group">
        <label class="col-md-4">First Name</label>
        {{$objEmployee->last_name}}
    </div>
    <div class="form-group">
        <label class="col-md-4">Email</label>
        {{$objEmployee->email}}
    </div>
    <div class="form-group">
        <label class="col-md-4">Company</label>
        {{$strCompanyName}}
    </div>

    <div class="form-group">
        <label class="col-md-4">Phone</label>
        {{$objEmployee->phone}}
    </div>

</div>
</body>
</html>
