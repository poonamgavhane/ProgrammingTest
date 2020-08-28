@extends('layouts.app')
<html>
<head>

</head>
<body>
<table class="table table-striped table-bordered">
<thead>
<tr>
    <th>Id</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
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
        </tr>

        </tbody>
    @endforeach

</table>
{{ $arrObjEmployees->links() }}
</body>
</html>

