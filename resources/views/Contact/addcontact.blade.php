<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Add a contact</title>
</head>
<body>
    <h1>Add a Contact</h1>
    <form action="submitcontact" method="POST">
        @csrf
        Enter Name : <input type="text" name="name" >
        <br>
        Enter Number : <input type="text" name="contact" >
        <br>
        <button type="submit">Add Contact</button>
    </form>
</body>
</html>
