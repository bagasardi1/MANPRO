<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promo';
    protected $primaryKey = 'id_promo';

    protected $fillable = ['kode_promo', 'potongan_harga', 'tanggal_mulai', 'tanggal_berakhir'];

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_promo', 'id_promo');
    }
}