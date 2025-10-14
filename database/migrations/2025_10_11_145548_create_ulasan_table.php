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
    Schema::create('ulasan', function (Blueprint $table) {
        $table->id('id_ulasan'); // PK

        $table->unsignedBigInteger('id_pesanan'); // FK
        $table->foreign('id_pesanan')->references('id_pesanan')->on('pesanan');
        
        $table->unsignedBigInteger('id_customer'); // FK
        $table->foreign('id_customer')->references('id_customer')->on('customer');

        $table->tinyInteger('rating'); // 1-5
        $table->text('komentar')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ulasan');
    }
};
