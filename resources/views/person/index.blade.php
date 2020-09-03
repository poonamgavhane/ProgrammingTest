@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Test Project</title>
</head>
<body>
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<a href="/persons/create">Create new person</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th colspan="3">Actions</th>
    </tr>
    </thead>
    @foreach($arrObjPeople as $objPerson)
        <tbody>
        <tr>
            <td>{{$objPerson->id}}</td>
            <td>{{$objPerson->first_name}}{{' ' .$objPerson->last_name}}</td>
            <td>{{$objPerson->age}}</td>
            <td>{{$objPerson->address}}</td>
            <td>
            <a href="/persons/{{$objPerson->id}}" class="btn btn-info">Show</a>
            <a href="/persons/{{$objPerson->id}}/edit" class="btn btn-success">Edit</a>
                <form action="/persons/{{$objPerson->id}}/delete" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit"  class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
</body>
</html>
