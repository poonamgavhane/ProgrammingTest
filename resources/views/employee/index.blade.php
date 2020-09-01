@extends('layouts.app')
<html>
<head>
    <title>Test Project</title>
</head>
<body>
<h1>Test Project</h1><hr>
<a class="btn btn-success" href="/employees/create">Create New Employee</a><hr>
<table class="table table-striped table-bordered">
<thead>
<tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Actions</th>
</tr>
</thead>

    @foreach($arrObjEmployees as $objEmployee)
        <tbody>
        <tr>
            <td>{{$objEmployee->id}}</td>
            <td>{{$objEmployee->first_name}}</td>
            <td>{{$objEmployee->last_name}}</td>
            <td>{{$objEmployee->email}}</td>
            <td>{{$objEmployee->phone}}</td>
            <td>
                <a class="btn btn-info" href="{{'/employees/'.$objEmployee->id}}">Show</a>
                <a class="btn btn-success" href="{{'/employees/'.$objEmployee->id.'/edit'}}">Edit</a>
                <form action="{{'/employees/'.$objEmployee->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
            </td>
        </tr>

        </tbody>
    @endforeach

</table>
{{ $arrObjEmployees->links() }}
</body>
</html>

