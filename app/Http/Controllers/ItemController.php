<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function createItem(Request $request)
    {
        $data = $request->validate(
            [
                'title' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'category_id' => 'required|numeric',
                'sku' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $request->image->move(public_path('images'), $request->image->getClientOriginalName());
        $data['title'] = strip_tags($data['title']);
        $data['description'] = strip_tags($data['description']);
        $data['sku'] = strip_tags($data['sku']);
        $data['image'] = "images/" . $request->image->getClientOriginalName();
        Item::create($data);
        return redirect('/items');
    }

    public function editItem(Item $item)
    {
        return view('itemEdit', ['item' => $item], ['categories' => Category::all()]);
    }

    public function editedItem(Request $request, Item $item)
    {
        $data = $request->validate(
            [
                'title' => 'required|string',
                'description' => 'required|string',
                'price' => 'required|numeric',
                'quantity' => 'required|numeric',
                'category_id' => 'required|numeric',
                'sku' => 'required|string',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]
        );
        $request->image->move(public_path('images'), $request->image->getClientOriginalName());
        $data['title'] = strip_tags($data['title']);
        $data['description'] = strip_tags($data['description']);
        $data['sku'] = strip_tags($data['sku']);
        $data['image'] = "images/" . $request->image->getClientOriginalName();
        $item->update($data);
        return redirect('/items');
    }

    public function deleteItem(Item $item)
    {
        $item->delete();
        return redirect('/items');
    }
}
