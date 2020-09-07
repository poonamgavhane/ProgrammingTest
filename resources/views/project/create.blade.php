@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Test Project</title>
</head>
<body>
<h1>Test Project</h1><hr>
@if($errors->any())
<ul  class="alert alert-danger col-md-10">
    @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
    @endforeach
</ul>
@endif


<form action="{{route('projects.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
	<div  class="container">
	<div clas="form-group">
		<label class="col-md-4">Name</label>
		<input type="text" name="name" class="form-control col-md-8">
	</div>
	<div clas="form-group">
		<label class="col-md-4">Client</label>
		<input type="text" name="client" class="form-control col-md-8">
	</div>
	<div clas="form-group">
		<label class="col-md-4">Status</label>
        <select class="selectpicker col-md-8 form-control" name="status">
            <option value="in_progress">In Progress</option>
            <option value="started">Started</option>
            <option value="completed">Completed</option>
        </select>
	</div>
	<div clas="form-group">
		<label class="col-md-4">Select File</label>
		<input type="file" name="file" class="form-control col-md-8">
	</div>
	<div clas="form-group">
        <label class="col-md-4">Company Id</label>
        <select class="selectpicker col-md-8 form-control" name="company_id">
            @foreach($arrObjCompany as $objCompany)
                <option value="{{$objCompany->id}}">{{$objCompany->name}}</option>
            @endforeach
        </select>
	</div>
        <hr>
	<div clas="form-group">
        <div class="col-md-4">
            <input type="submit" name="create_project" value="submit" class="btn btn-primary">
        </div>
	</div>
	</div>
</form>


</body>
</html>
