@extends('layouts.app')
    <!DOCTYPE html>
<html>
<head></head>
<body>
<form action="/employee/create" method="POST">
    <div class="container">
        <div class="form-group">
        <label class="col-md-4">Name</label>
        <input type="text" class="form-control col-md-8" name="name">
    </div>
    </div>

</form>
</body>
</html>
