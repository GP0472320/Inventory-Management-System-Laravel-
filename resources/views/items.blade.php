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
    <title>All Items</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>All Items</h1>
    @foreach ($items as $item)
        <h3>{{ $item->title }}</h3>
        <img src="{{$item->image}}" alt="" style="width: 10%; height: 10%">
        <br>
        <ul>
            <li>{{ $item->description }}</li>
            <li>{{ $item->price }}</li>
            <li>{{ $item->category->name }}</li>
        </ul>
        <br>
        <button><a href="/items/{{ $item->id }}/edit">Edit</a></button>
        <form action="/items/{{ $item->id }}/delete" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
        <p>-------------------------------------------------------</p>
    @endforeach
    <button><a href="/items/create">Create Item</a></button>
    <br>
    <br>
    <button><a href="/">Home</a></button>
</body>
</html>