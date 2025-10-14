<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PesananSayaController extends Controller
{
    /**
     * Menampilkan riwayat pesanan milik customer yang sedang login.
     */
    public function index()
    {
        $customer_id = Auth::id();
        $daftar_pesanan = Pesanan::where('id_customer', $customer_id)
                                ->latest()
                                ->paginate(10);

        return view('customer.pesanan.index', compact('daftar_pesanan'));
    }

    /**
     * Menampilkan detail satu pesanan milik customer.
     */
    public function show($id_pesanan)
    {
        $customer_id = Auth::id();
        $pesanan = Pesanan::where('id_pesanan', $id_pesanan)
                         ->where('id_customer', $customer_id)
                         ->firstOrFail(); // firstOrFail akan error jika pesanan tidak ditemukan atau bukan miliknya

        return view('customer.pesanan.show', compact('pesanan'));
    }
}