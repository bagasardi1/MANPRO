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
    Schema::create('detail_pesanan', function (Blueprint $table) {
        $table->id('id_detail_pesanan'); // PK

        $table->unsignedBigInteger('id_pesanan'); // FK
        $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan')->onDelete('cascade');
        
        $table->unsignedBigInteger('id_produk'); // FK
        $table->foreign('id_produk')->references('id_produk')->on('produk');

        $table->integer('jumlah');
        $table->decimal('subtotal', 12, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanan');
    }
};
