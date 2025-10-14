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
    Schema::create('promo', function (Blueprint $table) {
        $table->id('id_promo'); // PK
        $table->string('kode_promo')->unique();
        $table->decimal('potongan_harga', 10, 2);
        $table->date('tanggal_mulai');
        $table->date('tanggal_berakhir');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promo');
    }
};
