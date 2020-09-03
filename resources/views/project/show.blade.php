@extends('layouts.app')
<html>
<head>

</head>
<body>
<h1>Test Project</h1>
<div class="container">
    <label class="col-md-4">Name</label>
    {{$objProject->name}}
</div>
<div class="container">
    <label class="col-md-4">Client</label>
    {{$objProject->client}}
</div>
<div class="container">
    <label class="col-md-4">Status</label>
    {{$objProject->status}}
</div>
<div class="container">
    <label class="col-md-4">Company Id</label>
    {{$objProject->name}}
</div>
<div class="container">
    <label class="col-md-4">Image</label>
    <img src="{{\Illuminate\Support\Facades\URL::asset('storage/'.$objProject->image)}}" height="250px" width="250px">
</div>
</body>
</html>
