@extends('layouts.app')
<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="{{route('companies.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="form-group">
            <label class="col-md-4">Name</label>
            <input type="text" class="form-control col-md-8" name="name">
        </div>
        <div class="form-group">
            <label class="col-md-4">Email</label>
            <input type="email" class="form-control col-md-8" name="email">
        </div>

        <div class="form-group">
            <label class="col-md-4">Website</label>
            <input type="text" class="form-control col-md-8" name="website">
        </div>
        <div class="form-group">
            <label class="col-md-4">Logo</label>
            <div class="col-md-8">
                <input type="file" name="image" />
            </div>
        </div> <hr>
        <div class="form-group">
            <div class="col-md-8">
                <input type="submit" class="btn btn-default" value="Submit" />
            </div>
        </div>

    </div>

</form>
</body>
</html>
