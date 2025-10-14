<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotBooking extends Model
{
    use HasFactory;

    protected $table = 'slot_booking';
    protected $primaryKey = 'id_slot_booking';

    protected $fillable = ['tanggal', 'sisa_slot'];
}