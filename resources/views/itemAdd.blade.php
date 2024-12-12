{{--*
* itemAdd.blade.php
* Author: Gabriel Ponce
* Date: 2024-12-05
*--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add a new Item</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <style>
        div {
            display: inline-block;
            text-align: left
        }
    </style>
</head>
<body>
    <h1>Add Item</h1>
    <form action="/items/create/add" method="POST" enctype="multipart/form-data">
        @csrf
        <div>

            <label for="title">Title:</label>
            <input type="text" name="title" id="title">
            @error('title')
            <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="description">Description:</label>
            <input type="text" name="description" id="description">
            @error('description')
            <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price">
            @error('price')
            <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity">
            @error('quantity')
            <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
            <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="sku">SKU:</label>
            <input type="text" name="sku" id="sku">
            @error('sku')
            <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image">
            @error('image')
            <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
        </div>
        <br>
        <button>Add Item</button>
    </form>
</body>
</html>