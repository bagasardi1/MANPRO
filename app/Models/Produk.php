<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk', 'deskripsi', 'harga', 'stok', 'url_gambar', 'status', 'id_kategori'
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_kategori');
    }

    public function pesanan()
    {
        return $this->belongsToMany(Pesanan::class, 'detail_pesanan', 'id_produk', 'id_pesanan');
    }
}