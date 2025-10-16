<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Pesanan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalProduk = Produk::count();
        $totalPesanan = Pesanan::count();

        return view('admin.dashboard', compact('totalProduk', 'totalPesanan'));
    }
}
