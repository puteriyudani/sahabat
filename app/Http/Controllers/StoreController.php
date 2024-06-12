<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $beleafs = Kategori::where('menu', 'Be Leaf')->get();
        $preloveds = Kategori::where('menu', 'Pre Loved')->get();
        $generals = Kategori::where('menu', 'General')->get();
        $products = Product::paginate(9);
        return view('store', compact('products', 'beleafs', 'preloveds', 'generals'));
    }

    public function productDetail(Product $product)
    {
        $productImages = ProductImage::where('product_id', $product->id)->get();
        return view('product-detail', compact('product', 'productImages'));
    }
}
