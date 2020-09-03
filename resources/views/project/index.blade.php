@extends('layouts.app')
<h1>Test Project</h1>
<a class="btn btn-info" href="/projects/create">Create New Project</a>
<hr>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Status</th>
        <th>Company_Id</th>
        <th colspan="3">Actions</th>
    </tr>
    </thead>
    @foreach($arrObjProject as $objProject)
    <tbody>
    <tr>
        <td>{{$objProject->id}}</td>
        <td>{{$objProject->name}}</td>
        <td>{{$objProject->status}}</td>
        <td>{{$objProject->company_id}}</td>
        <td><a href="/projects/{{$objProject->id}}/edit" class="btn btn-success">Edit</a></td>
        <td><a href="/projects/{{$objProject->id}}" class="btn btn-info">Show</a></td>
        <td>
            <form action="projects/{{$objProject->id}}" method="POST">

                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" name="DELETE" value="Delete">
            </form>
        </td>
    </tr>
    </tbody>
    @endforeach
</table>
