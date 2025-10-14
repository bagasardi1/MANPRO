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
    Schema::create('alamat', function (Blueprint $table) {
        $table->id('id_alamat'); // PK
        
        $table->unsignedBigInteger('id_customer'); // FK
        $table->foreign('id_customer')->references('id_customer')->on('customer')->onDelete('cascade');
        
        $table->string('label');
        $table->text('detail_alamat');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alamat');
    }
};
