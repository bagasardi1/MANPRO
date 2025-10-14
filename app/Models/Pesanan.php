<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';
    protected $primaryKey = 'id_pesanan';

    protected $fillable = [
        'id_customer', 'id_admin', 'waktu_pemesanan', 'waktu_pembayaran', 
        'waktu_selesai', 'tanggal_booking', 'status_pesanan', 'total_harga',
        'id_promo', 'id_slot_booking'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer', 'id_customer');
    }

    public function admin()
    {
        return $this->belongsTo(Admin::class, 'id_admin', 'id_admin');
    }

    public function promo()
    {
        return $this->belongsTo(Promo::class, 'id_promo', 'id_promo');
    }

    public function slotBooking()
    {
        return $this->belongsTo(SlotBooking::class, 'id_slot_booking', 'id_slot_booking');
    }
    
    public function detailPesanan()
{
    return $this->hasMany(DetailPesanan::class, 'id_pesanan', 'id_pesanan');
}
    

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'id_pesanan', 'id_pesanan');
    }
}