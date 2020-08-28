@extends('layouts.app')
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="{{'/companies/'.$objCompany->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="form-group">
            <label class="col-md-4">Name</label>
            <input type="text" class="form-control col-md-8" name="name" value="{{$objCompany->name}}">
        </div>
        <div class="form-group">
            <label class="col-md-4">Email</label>
            <input type="email" class="form-control col-md-8" name="email" value="{{$objCompany->email}}">
        </div>

        <div class="form-group">
            <label class="col-md-4">Website</label>
            <input type="text" class="form-control col-md-8" name="website" value="{{$objCompany->website}}">
        </div>
        <div class="form-group">
            <label class="col-md-4">Logo</label>
            <div class="col-md-8">
                <input type="file" name="image" />
                <img src="{{ \Illuminate\Support\Facades\URL::to('/') }}/images/{{ $objCompany->logo }}" >
                <input type="hidden" name="hidden_image" value="{{$objCompany->logo}}" />
            </div>
        </div> <br /><br /><br />
        <div class="form-group">
            <div class="col-md-8">
                <input type="submit" class="btn btn-default" value="Submit" />
            </div>
        </div>

    </div>

</form>
</body>
</html>
