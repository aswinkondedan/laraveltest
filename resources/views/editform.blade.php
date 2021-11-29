<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        @method('PUT')
    <input type="text" name="name" id="" placeholder="update name" value="{{$key->name}}"><br>
    <input type="text" name="place" id="" placeholder="update place" value="{{$key->place}}"><br>
    <input type="number" name="age" id="" placeholder="update your age"value="{{$key->age}}"><br>
    <button type="submit">update</button>
    </form>
  

    
</body>
</html>