<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beleaf = Product::join('kategoris', 'kategoris.nama', '=', 'products.kategori')
            ->where('kategoris.menu', 'Be Leaf')
            ->select('products.*', 'kategoris.menu')
            ->get();

        $preloved = Product::join('kategoris', 'kategoris.nama', '=', 'products.kategori')
            ->where('kategoris.menu', 'Pre Loved')
            ->select('products.*', 'kategoris.menu')
            ->get();

        $general = Product::join('kategoris', 'kategoris.nama', '=', 'products.kategori')
            ->where('kategoris.menu', 'General')
            ->select('products.*', 'kategoris.menu')
            ->get();

        // Menggabungkan semua data dalam satu array asosiatif
        $data = [
            'beleafs' => $beleaf,
            'preloveds' => $preloved,
            'generals' => $general,
        ];

        return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategoris = Kategori::get();
        return view('product.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::latest()->first();
        $kodeAwal = "GB";

        if ($product == null) {
            // kode pertama
            $nomorUrut = "0001";
        } else {
            // kode berikutnya
            $nomorUrut = substr($product->kode, 2); // Ambil bagian nomor dari kode produk terakhir
            $nomorUrut = (int)$nomorUrut + 1; // Tambahkan 1
            $nomorUrut = str_pad($nomorUrut, 4, "0", STR_PAD_LEFT); // Pad dengan nol di depan hingga 4 digit
        }

        $kodeProduct = $kodeAwal . $nomorUrut;

        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'detail' => 'required',
            'harga' => 'required',
            'kondisi' => 'required',
            'stok' => 'required',
        ]);

        $requestData = $request->all();
        $requestData['kode'] = $kodeProduct;

        Product::create($requestData);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $kategoris = Kategori::get();
        return view('product.edit', compact('product', 'kategoris'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'kategori' => 'required',
            'nama' => 'required',
            'detail' => 'required',
            'harga' => 'required',
            'kondisi' => 'required',
            'stok' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('product.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('product.index')->with('success','Product deleted successfully');
    }
}
