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
        Schema::table('buku', function (Blueprint $table) {
            $table->string('tipe')->after('nama');  // Menambahkan kolom 'tipe' setelah kolom 'nama'
            $table->string('jenjang')->after('tipe'); // Menambahkan kolom 'jenjang' setelah kolom 'tipe'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('buku', function (Blueprint $table) {
            $table->dropColumn('tipe');
            $table->dropColumn('jenjang');
        });
    }
};
