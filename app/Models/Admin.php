<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    protected $fillable = [
        'nama', 'email', 'password', 'id_super_admin', 'bisa_kelola_produk',
        'bisa_kelola_pesanan', 'bisa_kelola_promo', 'bisa_lihat_laporan',
    ];

    protected $hidden = ['password'];

    /**
     * Relasi: Satu Admin dimiliki oleh satu Super Admin.
     */
    public function superAdmin()
    {
        return $this->belongsTo(SuperAdmin::class, 'id_super_admin', 'id_super_admin');
    }
}