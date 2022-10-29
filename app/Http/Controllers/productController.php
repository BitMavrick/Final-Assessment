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
}