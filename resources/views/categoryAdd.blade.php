{{--*
* categoryAdd.blade.php
* Author: Gabriel Ponce
* Date: 2024-12-05
*--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Category</title>
</head>
<body>
    <form action="/categories/create/add" method="POST">
        @csrf
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name">
        @error('name')
            <span style="color:red;font-size:small;">{{$message}}</span>
        @enderror
        <button>Add Category</button>
    </form>
</body>
</html>