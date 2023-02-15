<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
   
    <title>Add a contact</title>
    <style>
        form{
            margin: 80px;
            max-width: 500px;
        }
        h1{
            margin:50px 0px; 
        }
    </style>
</head>
<body>
    <h1 class="position-absolute top-0 start-50 translate-middle">Update a Contact</h1>
    <form action="/updatecontact/{{$contactrow->id}}" method="post">
        @csrf
        <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name" name="name" value="{{$contactrow->name}}">
              @error('name')            
        
              <span style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
        
        <div class="row mb-3">
            <label for="contact" class="col-sm-2 col-form-label">Contact</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="contact" name="contact" value="{{$contactrow->contact}}">
              @error('contact')            
        
              <span style="color: red">{{ $message }}</span>
              @enderror
            </div>
          </div>
        <br>
        <button type="submit" class="btn btn-dark position-absolute top-70 start-50 translate-middle">Update Contact</button>
    </form>
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
   
</body>
</html>
