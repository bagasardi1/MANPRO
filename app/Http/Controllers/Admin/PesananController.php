<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pesanan;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    /**
     * Menampilkan semua pesanan.
     */
    public function index()
    {
        $daftar_pesanan = Pesanan::with('customer')->latest()->paginate(10);
        return view('admin.pesanan.index', compact('daftar_pesanan'));
    }

    /**
     * Menampilkan detail satu pesanan.
     */
    public function show(Pesanan $pesanan)
    {
        // Mengambil data pesanan beserta relasi customer dan detail produknya
        $pesanan->load('customer', 'detailPesanan.produk');
        return view('admin.pesanan.show', compact('pesanan'));
    }

    /**
     * Menampilkan form untuk mengedit status pesanan.
     */
    public function edit(Pesanan $pesanan)
    {
        return view('admin.pesanan.edit', compact('pesanan'));
    }

    /**
     * Memperbarui status pesanan.
     */
    public function update(Request $request, Pesanan $pesanan)
    {
        $request->validate([
            'status_pesanan' => 'required|string|in:pending,diproses,dikirim,selesai,dibatalkan'
        ]);

        $pesanan->update([
            'status_pesanan' => $request->status_pesanan
        ]);

        return redirect()->route('pesanan.show', $pesanan)->with('success', 'Status pesanan berhasil diperbarui.');
    }
    
    /**
     * Menghapus pesanan.
     */
    public function destroy(Pesanan $pesanan)
    {
        // Logika untuk memastikan pesanan bisa dihapus (misal, hanya jika statusnya dibatalkan)
        $pesanan->delete();
        return redirect()->route('pesanan.index')->with('success', 'Pesanan berhasil dihapus.');
    }
}