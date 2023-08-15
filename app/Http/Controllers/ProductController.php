<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function index()
    {
        $products= Product::all();
        return view('product.index', compact('products'));
    }

    public function create()
    {
        $categories= Category::all();
        return view('product.create',compact('categories'));
    }

    public function store(request $request)
    {
        
        $category = Category::findOrFail($request->category_id);
        $category->products()->create([
            'name'=>$request->name,
            'qty'=>$request->qty,
            'price'=>$request->price,
        ]);
       return redirect('product')->with('message','product created!!');

    }

    public function edit(int $product)
    {
        $categories= Category::all();
        $product = Product::findOrFail($product);
        return view('product.edit',compact('categories','product'));

    }

    public function update(request $request, $product_id)
    {
        $category = Category::findOrFail($request->category_id);
        $category->products()->where('id',$product_id)->update([
            'name'=>$request->name,
            'qty'=>$request->qty,
            'price'=>$request->price,
        ]);
       return redirect('product')->with('message','product updated!!');

    }

    public function delete(int $product_id)
    {
        Product::findOrFail($product_id)->delete();
        return redirect('product')->with('message','product deleted!!');
    }
}

