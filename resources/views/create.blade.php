<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('product')}}" method="POST">
        @csrf
        <label>Nama</label>
        <input type="text" name="name"/>
        <label>Harga</label>
        <input type="text" name="price"/>
        <button type="submit">Save</button>
    </form>
</body>
</html>