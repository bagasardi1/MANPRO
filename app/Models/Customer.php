<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Customer extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'customer';
    protected $primaryKey = 'id_customer';

    protected $fillable = ['nama', 'email', 'password', 'no_whatsapp'];
    protected $hidden = ['password'];

    public function alamat()
    {
        return $this->hasMany(Alamat::class, 'id_customer', 'id_customer');
    }

    public function pesanan()
    {
        return $this->hasMany(Pesanan::class, 'id_customer', 'id_customer');
    }

    public function ulasan()
    {
        return $this->hasMany(Ulasan::class, 'id_customer', 'id_customer');
    }
}