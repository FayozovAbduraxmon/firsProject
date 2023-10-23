<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>


    <form action="/foods" method="POST">
@csrf
    <label for="">Name</label>
    <input type="text" name="name">

    <label for="">ccal</label>
    <input type="text"name="ccal">

    <label for="">type</label>
    <input type="text"name="type">
   

    <button type="submit">Ok</button>
    </form>
    <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>name</th>
            <th>ccal</th>
            <th>type</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($foods as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->ccal}}</td>
            <td>{{$item->type}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>