<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return view('store');
    }

    public function showProduct(Product $product)
    {
        return view('product-detail', compact('product'));
    }
}
