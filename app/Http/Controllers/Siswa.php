<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Siswa extends Controller
{
    //
    public function insert(){

        DB::table('siswa')->insert([
            'nama_siswa' => 'Anton arizal',
            'id_kelas' => 1,
            'id_jurusan' => 1,
            'no_hp' => '087888999',
        ]);

    }
}
