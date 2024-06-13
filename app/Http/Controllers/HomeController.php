<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Galery;
use App\Models\GaleryImage;
use Illuminate\Pagination\Paginator;

class HomeController extends Controller
{
    public function index()
    {
        $galerys = Galery::paginate(8);
        return view('home', compact('galerys'));
    }

    public function galery()
    {
        $galerys = Galery::paginate(8);
        return view('galery', compact('galerys'));
    }

    public function galeryDetail(Galery $galery)
    {
        $galeryImages = GaleryImage::where('galery_id', $galery->id)->get();
        return view('galery-detail', compact('galery', 'galeryImages'));
    }

    public function gabut()
    {
        $gabuts = Galery::where('kategori', 'Gabut')->get();
        return view('page.gabut', compact('gabuts'));
    }

    public function malming()
    {
        $malmings = Galery::where('kategori', 'Malming')->get();
        return view('page.malming', compact('malmings'));
    }

    public function spesial()
    {
        $spesials = Galery::where('kategori', 'Spesial')->get();
        return view('page.spesial', compact('spesials'));
    }

    public function acara()
    {
        $acaras = Galery::where('kategori', 'Acara')->get();
        return view('page.acara', compact('acaras'));
    }

    public function jalan()
    {
        $jalans = Galery::where('kategori', 'Jalan-jalan')->get();
        return view('page.jalan', compact('jalans'));
    }

    public function liburan()
    {
        $liburans = Galery::where('kategori', 'Liburan')->get();
        return view('page.liburan', compact('liburans'));
    }

    public function lainnya()
    {
        $lainnyas = Galery::where('kategori', 'Lainnya')->get();
        return view('page.lainnya', compact('lainnyas'));
    }

    public function about()
    {
        Paginator::defaultView('vendor.pagination.custom');
        $abouts = About::paginate(1);
        return view('about', compact('abouts'));
    }
}
