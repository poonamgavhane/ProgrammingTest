@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <title>Ajax</title>
</head>
<body>
<h1>Ajax Example</h1>
<form action="/ajax" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="form-group">
            <input type="file" name="file" id="file" class="form-control col-md-8">
        </div>
        <hr>
        <div class="form-group">
            <input type="submit" value="submit" id="submit" class="btn btn-primary">
        </div>
        <div class="alert alert-success" style="display: none"></div>
        </div>
</form>

</body>
</html>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    $(document).ready(function (){
        $('#submit').click(function (e){
            e.preventDefault();
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
                }
            })
            $.ajax({
                url:'/ajax',
                method:'POST',
                data:{
                    file:$('#file').val()
                },
                success:function (result){
                    console.log('RESULT ::' +JSON.stringify(result));
                    $('.alert').show();
                    $('.alert').html(JSON.stringify(result.success));
                }
            })
        });
    });
</script>
