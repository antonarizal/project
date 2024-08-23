<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function insert(){

        $array = [
            'nama_siswa' => 'Siswa '. rand(100,9999),
            'id_kelas' => 1,
            'id_jurusan' => 1,
            'no_hp' => rand(1000000000,99999999999),
        ];

        $insert = DB::table('siswa')->insert($array);
        if($insert){
            echo 'sukses';
        }else{
            echo 'gagal';
        }

    }
    public function table(){

        $siswa = DB::table('siswa')->get();
        //print_r($siswa);
        echo '<table>';
        foreach($siswa as $row){
            echo '<tr>';
            echo '<td>'.$row->nama_siswa. '<td>';
            echo '</tr>';

        }
        echo '</table>';


    }
}
