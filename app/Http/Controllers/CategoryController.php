<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories= Category::all();
        return view('category.index',compact('categories'));
    }

    public function create()
    {
        return view('category.create');
    }

    public function store(request $request)
    {
        Category::create([
            'name'=> $request->name,
        ]);

        return redirect('category')->with('message','Category Added!!');
    }

    public function delete(int $category_id)
    {
        Category::findOrFail($category_id)->delete();
        return redirect('category')->with('message','Category Deleted!!');
    }
}
