<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Add a contact</title>
</head>
<body>
    <h1>Update a Contact</h1>
    <form action="/updatecontact/{{$contactrow->id}}" method="post">
        @csrf
        Enter Name : <input type="text" name="name" value="{{$contactrow->name}}">
        <br>
        Enter Number : <input type="text" name="contact" value="{{$contactrow->contact}}">
        <br>
        <button type="submit">Update Contact</button>
    </form>
</body>
</html>
