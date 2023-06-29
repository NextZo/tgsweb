<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function kaos()
    {
        return view('categories/kaospolos', ['kaoses' => Product::where('kategori', 'kaos')->get()]);
    }

    public function kemeja()
    {
        return view('categories/kemeja', ['kemejas' => Product::where('kategori', 'kemeja')->get()]);
    }

    public function hoodie()
    {
        return view('categories/hoodie', ['hoodies' => Product::where('kategori', 'hoodie')->get()]);
    }

    public function jas()
    {
        return view('categories/jas', ['jases' => Product::where('kategori', 'jas')->get()]);
    }

    public function sweater()
    {
        return view('categories/sweater', ['sweaters' => Product::where('kategori', 'sweater')->get()]);
    }
}
