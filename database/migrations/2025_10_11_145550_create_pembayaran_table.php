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
    Schema::create('pembayaran', function (Blueprint $table) {
        $table->id('id_pembayaran'); // PK

        $table->unsignedBigInteger('id_pesanan'); // FK
        $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan')->onDelete('cascade');

        $table->string('metode');
        $table->string('status');
        $table->string('url_bukti_bayar')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
