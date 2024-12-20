{{--*
* categoryEdit.blade.php
* Author: Gabriel Ponce
* Date: 2024-12-05
*--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Category</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Edit Category</h1>
    <form action="/categories/{{$category->id}}/edit" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" id="name" value="{{$category->name}}">
        @error('name')
            <span style="color:red;font-size:small;">{{$message}}</span>
        @enderror
        <br>
        <button><a href="/categories">Back</a></button> <span> | </span> <button>Save</button>
    </form>
</body>
</html>