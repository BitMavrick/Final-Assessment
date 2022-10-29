<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class productController extends Controller
{
    //

    public function index()
    {
        $products = Product::all();
        return view('backend.product', [
            'products' => $products,
        ]);
    }

    public function show()
    {
        $products = Product::all();
        return view('frontend.index', [
            'products' => $products,
        ]);
    }

    public function details($id)
    {
        $product = Product::find($id);
        return view('frontend.details', [
            'product' => $product,
        ]);
    }

    public function create()
    {
        return view('backend.create');
    }

    public function store(Request $request)
    {

        $product = new Product();
        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->Brand_name = $request->Brand_name;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->status) {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
        $product->save();

        return redirect()->route('product');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('backend.edit', [
            'product' => $product,
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_name = $request->category_name;
        $product->Brand_name = $request->Brand_name;
        $product->price = $request->price;
        $product->description = $request->description;

        if ($request->status) {
            $product->status = 1;
        } else {
            $product->status = 0;
        }
        $product->save();

        return redirect()->route('product');
    }

    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product');
    }
}