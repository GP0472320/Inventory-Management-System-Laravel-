{{--*
* items.blade.php
* Author: Gabriel Ponce
* Date: 2024-12-05
*--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>All Items</h1>
    @foreach ($items as $item)
        <h3>{{ $item->title }}</h3>
        <img src="{{$item->image}}" alt="">
        <ul>
            <li>{{ $item->description }}</li>
            <li>{{ $item->price }}</li>
            <li>{{ $item->category->name }}</li>
        </ul>
        <p><a href="/items/{{ $item->id }}/edit">Edit</a></p>
        <form action="/items/{{ $item->id }}/delete" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    @endforeach
    <button><a href="/items/create">Create Item</a></button>
</body>
</html>