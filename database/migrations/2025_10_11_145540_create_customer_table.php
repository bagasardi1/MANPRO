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
        Schema::create('customer', function (Blueprint $table) {
            // Membuat kolom 'id_customer' sebagai Primary Key (PK)
            $table->id('id_customer');

            // Membuat kolom 'nama' dengan tipe string
            $table->string('nama');

            // Membuat kolom 'email' yang unik
            $table->string('email')->unique();

            // Membuat kolom 'password'
            $table->string('password');

            // Membuat kolom 'no_whatsapp'
            $table->string('no_whatsapp');

            // Menambahkan kolom 'created_at' dan 'updated_at' secara otomatis
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer');
    }
};
