<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::select('id_produk', 'nama_produk', 'harga', 'stok', 'status')->get();
        return response()->json($produk);
    }
}
