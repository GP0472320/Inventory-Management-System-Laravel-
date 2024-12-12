{{--*
* itemEdit.blade.php
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
    <style>
        div {
            display: inline-block;
            text-align: left
        }
    </style>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/items/{{$item->id}}/edit" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{$item->title}}">
            @error('title')
                <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="{{$item->description}}">
            @error('description')
                <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="price">Price:</label>
            <input type="text" name="price" id="price" value="{{$item->price}}">
            @error('price')
                <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity" value="{{$item->quantity}}">
            @error('quantity')
                <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="category_id">Category:</label>
            <select name="category_id" id="category_id" value="{{$item->category_id}}">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            @error('category_id')
                <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="sku">SKU:</label>
            <input type="text" name="sku" id="sku" value="{{$item->sku}}">
            @error('sku')
                <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
            <br>
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" value="{{$item->image}}">
            @error('image')
                <span style="color:red;font-size:small;">{{$message}}</span>
            @enderror
        </div>
        <br>
        <button><a href="/items">Back</a></button> <span> | </span> <button>Save</button>
    </form>
</body>
</html>