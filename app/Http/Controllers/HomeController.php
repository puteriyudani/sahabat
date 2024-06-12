<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
