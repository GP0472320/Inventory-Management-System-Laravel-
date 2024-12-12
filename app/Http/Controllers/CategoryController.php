<?php
/**
* CategoryController.php
* Author: Gabriel Ponce
* Date: 2024-12-05
**/
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createCategory(Request $request)
    {
        $data = $request->validate(
            [
                'name' => 'required|string|unique:categories,name',
            ]
        );

        $data['name'] = strip_tags($data['name']);
        Category::create($data);
        return redirect('/categories');
    }

    public function editCategory(Category $category)
    {
        return view('categoryEdit', ['category' => $category]);
    }

    public function editedCategory(Request $request, Category $category)
    {
        $data = $request->validate(
            [
                'name' => 'required|string|unique:categories,name',
            ]
        );

        $data['name'] = strip_tags($data['name']);
        $category->update($data);
        return redirect('/categories');
    }
}
