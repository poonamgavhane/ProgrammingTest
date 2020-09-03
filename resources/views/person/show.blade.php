@extends('layouts.app')
<html>
<head>
    <title>Test Project</title>
</head>
<body>
<h1>Test Project</h1>
<div class="container">
    <div class="row">
        <label class="col-md-4">Name</label>
        <div class="col-md-6">
            {{$objPerson->first_name. ' '.$objPerson->last_name}}
        </div>
    </div>
    <div class="row">
        <label class="col-md-4">Address</label>
        <div class="col-md-6">
            {{$objPerson->address}}
        </div>
    </div>
    <div class="row">
        <label class="col-md-4">Age</label>
        <div class="col-md-6">
            {{$objPerson->age}}
        </div>
    </div>
</div>

</body>
</html>
