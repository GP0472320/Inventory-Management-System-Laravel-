<?php
/**
* web.php
* Author: Gabriel Ponce
* Date: 2024-12-05
**/
use App\Models\Item;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});



//categories routes
Route::get("/categories", function (){
    $categories = Category::all();
    return view('categories', ['categories' => $categories]);
});

Route::get("/categories/create", function (){
    return view('categoryAdd');
});

Route::post("/categories/create/add", [CategoryController::class, 'createCategory']);

Route::get("/categories/{category}/edit", [CategoryController::class, 'editCategory']);

Route::put("/categories/{category}/edit", [CategoryController::class, 'editedCategory']);

//items routes
Route::get("/items", function (){
    $items = Item::all();
    return view('items', ['items' => $items]);
});

Route::get("/items/create", function (){
    return view('itemAdd', ['categories' => Category::all()]);
});

Route::post("/items/create/add", [ItemController::class, 'createItem']);

Route::get("/items/{item}/edit", [ItemController::class, 'editItem']);

Route::put("/items/{item}/edit", [ItemController::class, 'editedItem']);

Route::delete("/items/{item}/delete", [ItemController::class, 'deleteItem']);