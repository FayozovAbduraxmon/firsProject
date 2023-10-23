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


    <form action="/save_laptop" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Name</label>
        <input type="text" name="name">

        <label for="">manufacturer</label>
        <input type="text"name="manufakturer">

        <label for="">os</label>
        <input type="text"name="os">

        <label for="">ram</label>
        <input type="text"name="ram">

        <label for="">date</label>
        <input type="date"name="date">

        <label for="">img</label>
        <input type="file" name='image'>

        <button type="submit">Ok</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>manufacturer</th>
                <th>os</th>
                <th>RAM</th>
                <th>img</th>
                <th>type</th>
                <th>date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($laptops as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->manufacturer }}</td>
                    <td>{{ $item->os }}</td>
                    <td>{{ $item->ram }}</td>
                    <td><img src="{{ $item->img }}" alt=""></td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->date }}</td>
                    <td><a href="/save_laptop/{{ $item->id }}">Edit</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
