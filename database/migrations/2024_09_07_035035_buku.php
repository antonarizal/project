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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('penerbit');
            $table->string('ISBN')->unique(); // ISBN harus unik
            $table->string('edisi');
            $table->string('penulis');
            $table->decimal('het', 8, 2); // Harga eceran tertinggi, dengan 2 angka desimal
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
