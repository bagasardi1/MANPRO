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
    Schema::create('log_aktivitas', function (Blueprint $table) {
        $table->id('id_log'); // PK

        $table->unsignedBigInteger('id_admin'); // FK
        $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade');

        $table->string('aktivitas');
        $table->dateTime('waktu');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('log_aktivitas');
    }
};
