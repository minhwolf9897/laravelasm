<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Product List</h1>
<ul>
    @foreach($products_in_view as $product)
        <li>
            {{$obj -> name}}
            <img src="{{$obj -> image}}" alt="" style="width: 150px">
            <a href="/Category/edit/{{$obj -> id}}">Edit</a>
        </li>
    @endforeach
</ul>
</body>
</html>
