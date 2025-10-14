<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Menampilkan halaman utama dengan katalog produk.
     */
    public function index()
    {
        $daftar_produk = Produk::all();
        return view('welcome', compact('daftar_produk'));
    }
}