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
    Schema::create('admin', function (Blueprint $table) {
        $table->id('id_admin'); // PK
        $table->string('nama');
        $table->string('email')->unique();
        $table->string('password');
        
        $table->unsignedBigInteger('id_super_admin'); // FK
        $table->foreign('id_super_admin')->references('id_super_admin')->on('super_admin');

        $table->boolean('bisa_kelola_produk')->default(false);
        $table->boolean('bisa_kelola_pesanan')->default(false);
        $table->boolean('bisa_kelola_promo')->default(false);
        $table->boolean('bisa_lihat_laporan')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
