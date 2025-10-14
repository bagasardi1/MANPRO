<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promo;
use Illuminate\Http\Request;

class PromoController extends Controller
{
    /**
     * Menampilkan semua data promo.
     */
    public function index()
    {
        $daftar_promo = Promo::latest()->paginate(10);
        return view('admin.promo.index', compact('daftar_promo'));
    }

    /**
     * Menampilkan form untuk membuat promo baru.
     */
    public function create()
    {
        return view('admin.promo.create');
    }

    /**
     * Menyimpan promo baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_promo' => 'required|string|unique:promo|max:50',
            'potongan_harga' => 'required|numeric',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        Promo::create($request->all());

        return redirect()->route('promo.index')->with('success', 'Promo berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit promo.
     */
    public function edit(Promo $promo)
    {
        return view('admin.promo.edit', compact('promo'));
    }

    /**
     * Memperbarui data promo di database.
     */
    public function update(Request $request, Promo $promo)
    {
        $request->validate([
            'kode_promo' => 'required|string|max:50|unique:promo,kode_promo,' . $promo->id_promo . ',id_promo',
            'potongan_harga' => 'required|numeric',
            'tanggal_mulai' => 'required|date',
            'tanggal_berakhir' => 'required|date|after_or_equal:tanggal_mulai',
        ]);

        $promo->update($request->all());

        return redirect()->route('promo.index')->with('success', 'Promo berhasil diperbarui.');
    }

    /**
     * Menghapus promo dari database.
     */
    public function destroy(Promo $promo)
    {
        $promo->delete();
        return redirect()->route('promo.index')->with('success', 'Promo berhasil dihapus.');
    }
}