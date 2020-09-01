@extends('layouts.app')
<html>
<head></head>
<body>
<a class="btn btn-success" href="{{'/companies/create'}}">Create New Company</a>
<table class="table table-striped table-bordered">
    <thead>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Logo</th>
        <th>Website</th>
        <th>Join Employee</th>
        <th>Action</th>
    </tr>
    </thead>
    @foreach($arrCompany as $objCompany)
        {{$intCompanyId = $objCompany->id}}
        <tbody>
        <tr>
            <td>{{$objCompany->id}}</td>
            <td>{{$objCompany->name}}</td>
            <td>{{$objCompany->email}}</td>
            <td><img width="150px" height="150px" src="{{URL::asset('storage/'.$objCompany->logo)}}"></td>
            <td>{{$objCompany->website}}</td>
            <td><a class="btn btn-success" href="{{'/employees/create'}}">Join Now</a></td>
            <td>
                <a class="btn btn-info" href="{{'/companies/'.$objCompany->id}}">Show</a>
                <a class="btn btn-success" href="{{'/companies/'.$objCompany->id.'/edit'}}">Edit</a>
                <form action="{{'/companies/'.$objCompany->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" class="btn btn-danger">
                </form>
{{--                <ul>--}}
{{--                    @foreach($objCompany->employee as $objEmployee)--}}
{{--                        <li>--}}
{{--                            <a href="/employee/{{$objEmployee->id}}">view</a>--}}
{{--                        </li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
            </td>
        </tr>

        </tbody>
    @endforeach
</table>

</body>
</html>
