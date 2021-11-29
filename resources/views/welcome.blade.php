<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insert data</h1>
    
    <form action="" method="POST" name="myform" onsubmit="return validate()">
        @csrf
    <input type="text" name="name" id="" placeholder="Enter name"><br>
    <input type="text" name="place" id="" placeholder="Enter place"><br>
    <input type="number" name="age" id="" placeholder="Enter your age"><br>
    <button type="submit">Submit</button>
    </form>


    <h1>TABLE</h1>

<table border="2" width="50%">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>place</th>
        <th>age</th>
        <th>action</th>
        <th>delete</th>
    </tr>
    @foreach ($key as $stu)
    <tr>
        <td>{{$stu->id}}</td>
        <td>{{$stu->name}}</td>
        <td>{{$stu->place}}</td>
        <td>{{$stu->age}}</td>
        <td align="center">
            <a href="{{ url('/edit',$stu->id)}}">update</a>
        </td>
        <td align="center">
            <a href="{{ url('/delete',$stu->id)}}">delete</a>
        </td>
    </tr>
    @endforeach

   
</table>

          
</body>
</html>

