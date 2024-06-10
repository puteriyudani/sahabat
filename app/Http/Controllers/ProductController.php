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
        $beleafs = Product::paginate(10);

        $preloveds = Product::paginate(10);

        $generals = Product::paginate(10);

        return view('product.index', compact('beleafs', 'preloveds', 'generals'));
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
