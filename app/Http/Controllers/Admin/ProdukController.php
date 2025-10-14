<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use App\Models\Kategori; // Import Kategori untuk form
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Menampilkan semua produk.
     */
    public function index()
    {
        $daftar_produk = Produk::with('kategori')->latest()->paginate(10);
        return view('admin.produk.index', compact('daftar_produk'));
    }

    /**
     * Menampilkan form untuk membuat produk baru.
     */
    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.produk.create', compact('kategori'));
    }

    /**
     * Menyimpan produk baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'status' => 'required|string',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'url_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('url_gambar')) {
            $path = $request->file('url_gambar')->store('public/produk');
            $data['url_gambar'] = $path;
        }

        Produk::create($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    /**
     * Menampilkan form untuk mengedit produk.
     */
    public function edit(Produk $produk)
    {
        $kategori = Kategori::all();
        return view('admin.produk.edit', compact('produk', 'kategori'));
    }

    /**
     * Memperbarui data produk di database.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'status' => 'required|string',
            'id_kategori' => 'required|exists:kategori,id_kategori',
            'url_gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('url_gambar')) {
            // Hapus gambar lama jika ada
            // Storage::delete($produk->url_gambar);
            $path = $request->file('url_gambar')->store('public/produk');
            $data['url_gambar'] = $path;
        }

        $produk->update($data);

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Menghapus produk dari database.
     */
    public function destroy(Produk $produk)
    {
        // Hapus gambar terkait
        // Storage::delete($produk->url_gambar);
        $produk->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus.');
    }
}