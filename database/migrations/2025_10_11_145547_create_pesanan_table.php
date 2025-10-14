<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pesanan', function (Blueprint $table) {
        $table->id('id_pesanan'); // PK

        $table->unsignedBigInteger('id_customer'); // FK
        $table->foreign('id_customer')->references('id_customer')->on('customer');
        
        $table->unsignedBigInteger('id_admin')->nullable(); // FK, bisa null
        $table->foreign('id_admin')->references('id_admin')->on('admin');

        $table->dateTime('waktu_pemesanan');
        $table->dateTime('waktu_pembayaran')->nullable();
        $table->dateTime('waktu_selesai')->nullable();
        $table->date('tanggal_booking');
        $table->string('status_pesanan');
        $table->decimal('total_harga', 12, 2);

        $table->unsignedBigInteger('id_promo')->nullable(); // FK, bisa null
        $table->foreign('id_promo')->references('id_promo')->on('promo');
        
        $table->unsignedBigInteger('id_slot_booking')->nullable(); // FK, bisa null
        $table->foreign('id_slot_booking')->references('id_slot_booking')->on('slot_booking');
        
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
