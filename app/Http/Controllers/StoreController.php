<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);
        return view('store', compact('products'));
    }

    public function productDetail(Product $product)
    {
        $productImages = ProductImage::where('product_id', $product->id)->get();
        return view('product-detail', compact('product', 'productImages'));
    }
}
