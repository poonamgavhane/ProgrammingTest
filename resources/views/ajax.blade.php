@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Test Project</title>
</head>
<body>
<form method="POST" action="/postAjaxExample">
    @csrf
    <div class="container">
        <div class="form-group">
            <div>
                <label class="col-md-4">First Name</label>
                <input type="text" name="first_name" id="first_name" class="form-control col-md-8">
            </div>
            <div>
                <label class="col-md-4">Last Name</label>
                <input type="text" name="last_name" id="last_name" class="form-control col-md-8">
            </div><hr>
            <div>
                <input type="submit" name="submit" id="submit" class="btn btn-submit">
            </div>
            <div class="alert alert-success" style="display: none">
            </div>
        </div>
    </div>
</form>
</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        $('#submit').click(function (event){
            event.preventDefault();
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
                }
            });
            $.ajax({
                'url':'postAjaxExample',
                'method':'POST',
                'data':{
                    first_name:$('#first_name').val(),
                    last_name:$('#last_name').val(),
                },
                success:function (result){
                    console.log('Result....'+JSON.stringify(result))
                    $('.alert').show();
                    $('.alert').html(JSON.stringify('welcome ' + result.first_name +' '+ result.last_name))
                }
            })
        })
    });
</script>
