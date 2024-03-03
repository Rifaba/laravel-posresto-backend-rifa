<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //index
    public function index()
    {
        $categories = Category::paginate(10);
        return view('pages.categories.index', compact('categories'));
    }

    //create
    public function create()
    {
        return view('pages.categories.create');
    }

    //store
    public function store(Request $request)
    {
        //validate the request
        $request->validate([
            'name' =>'required',
            'image' => 'required|image|mimes:jpeg, png, jpg, giv, svg|max:2048',
        ]);


        //store the request
        $category= new Category;
        $category->name = $request->name;
        $category->description = $request->description;

        //save image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $image->storeAs('public/categories/' .$category->id . '.' . $image->getClientOrriginalExtension());
            $product->image = 'storage/categories/' .$category->id . '.' .$image->getClientOrriginalExtension();
            $product->save();
        }
        
        return redirect()->route('categories.index')->with('success', 'Category created succesfully');

    }
}
