{{--*
* categories.blade.php
* Author: Gabriel Ponce
* Date: 2024-12-05
*--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Categories</title>
</head>
<body>
    <h1>All Categories</h1>
    @foreach ($categories as $category)
        <p>{{ $category->name }}</p>
        <p><a href="/categories/{{ $category->id }}/edit">Edit</a></p>
    @endforeach
    <button><a href="/categories/create">Create Item</a></button>
</body>
</html>