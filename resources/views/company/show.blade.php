@extends('layouts.app')
<html>
<head></head>
<body>
    <div class="container">
    <div class="form-group">
        <label class="col-md-4">Name</label>
        {{$objCompany->name}}
    </div>
    <div class="form-group">
        <label class="col-md-4">Email</label>
        {{$objCompany->email}}
    </div>

    <div class="form-group">
        <label class="col-md-4">Website</label>
        {{$objCompany->website}}
    </div>
    <div class="form-group">
        <label class="col-md-4">Logo</label>
        <img src="{{asset('/storage/public/images/'.$objCompany->logo)}}">
{{--        <img src="{{\Illuminate\Support\Facades\URL::to('/')}}/images/{{$objCompany->logo}}">--}}
    </div>

</div>
</body>
</html>
