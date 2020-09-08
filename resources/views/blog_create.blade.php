@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form action="/blog/create" method="POST">
    @csrf
    <div class="container">
        <div class="form-group">
            <label class="col-md-8">Title</label>
            <input type="text" class="form-control col-md-8" name="title" id="title">
        </div>
        <div class="form-group">
            <label class="col-md-8">Description</label>
            <textarea class="form-control col-md-8" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label class="col-md-8">Date</label>
            <input type="datetime-local" class="form-control col-md-8" name="date" id="date">
        </div>
        <div class="form-group">
            <input type="submit" class="col-md-4" name="submit" id="submit">
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
                    'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content'),
                }
            });
            $.ajax({
                'url':'/blog/create',
                'method':'POST',
                data:{
                    title:$('#title').val(),
                    description:$('#description').val(),
                    date:$('#date').val(),
                },
                success:function (result){
                    $('.alert').show();
                    $('.alert').html(JSON.stringify(result.message))
                    console.log('RESULT ::'+JSON.stringify(result))
                }
            })
       });
    });
</script>
