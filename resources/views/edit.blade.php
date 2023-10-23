<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
 
    <form action="/Animals{{ $user->id}}" method="POST">
        @csrf
    <label for="">Name</label>
    <input type="text" name="name"value="{{ $user->id}}">

    <label for="">type</label>
    <input type="text"name="type"value="{{ $user->id}}">

    <label for="">color</label>
    <input type="text"name="color">
   

    <button type="submit">Ok</button>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>type</th>
            <th>color</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($animals as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->type}}</td>
            <td>{{$item->color}}</td>
            <td><a href="/edit_animals/{{ $item->id}}">Edit</a></td>
            </tr>
            @endforeach
        </tbody>
      </table>
    



</body>
</html>