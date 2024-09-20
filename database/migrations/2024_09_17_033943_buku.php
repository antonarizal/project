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
        Schema::create('bukus', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->unsignedBigInteger('tipe_id');
            $table->unsignedBigInteger('jenjang_id');
            $table->unsignedBigInteger('mapel_id');
            $table->unsignedBigInteger('penerbit_id');
            $table->string('isbn')->unique();
            $table->unsignedBigInteger('edisi_id')->nullable();
            $table->unsignedBigInteger('penulis_id');
            $table->integer('het');
            $table->string('gambar')->nullable();
            $table->timestamps();

            // Definisi foreign key
            $table->foreign('tipe_id')->references('id')->on('tipes');
            $table->foreign('jenjang_id')->references('id')->on('jenjangs');
            $table->foreign('mapel_id')->references('id')->on('mapels');
            $table->foreign('penerbit_id')->references('id')->on('penerbits');
            $table->foreign('edisi_id')->references('id')->on('edisis');
            $table->foreign('penulis_id')->references('id')->on('penuliss');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bukus');
    }
};
