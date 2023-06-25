<?php

namespace App\Http\Controllers;

use App\Models\Pdf;
use App\Models\Youtube;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $youtubes = Youtube::get();
        $pdfs = Pdf::get();
        return view('home', compact('youtubes', 'pdfs'));
    }

    public function youtube()
    {
        $youtubes = Youtube::get();
        return view('montessory.youtube', compact('youtubes'));
    }

    public function pdf()
    {
        $pdfs = Pdf::get();
        return view('montessory.pdf', compact('pdfs'));
    }
}
