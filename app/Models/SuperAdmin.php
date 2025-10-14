<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class SuperAdmin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'super_admin';
    protected $primaryKey = 'id_super_admin';

    protected $fillable = ['nama', 'email', 'password', 'full_access'];
    protected $hidden = ['password'];

    /**
     * Relasi: Satu Super Admin bisa memiliki banyak Admin.
     */
    public function admin()
    {
        return $this->hasMany(Admin::class, 'id_super_admin', 'id_super_admin');
    }
}