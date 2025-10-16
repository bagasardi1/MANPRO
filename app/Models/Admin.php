<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nama tabel dan primary key
    protected $table = 'admin';
    protected $primaryKey = 'id_admin';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama',
        'email',
        'password',
    ];

    // Kolom yang disembunyikan dari array/json
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
