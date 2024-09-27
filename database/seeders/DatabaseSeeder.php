<?php

namespace Database\Seeders;

use App\Models\Buku;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tipe;
use App\Models\User;
use App\Models\Edisi;
use App\Models\Mapel;
use App\Models\Jenjang;
use App\Models\Penulis;
use App\Models\Penerbit;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Tipe::insert([
            ['tipe' => 'PDF'],
            ['tipe' => 'Audio'],
        ]);

        Jenjang::insert([
            ['jenjang' => 'PAUD'],
            ['jenjang' => 'SD/MI'],
            ['jenjang' => 'SMP/MTS'],
            ['jenjang' => 'SMA/MA/SMK/MAK'],
            ['jenjang' => 'SLB (SDLB/SMPLB/SMALB)'],
        ]);

        Edisi::insert([
            ['edisi' => 'Revisi'],
            ['edisi' => 'Belum ada'],
        ]);

        Penerbit::insert([
            ['penerbit' => 'Pusat Kurikulum dan Perbukuan'],
            ['penerbit' => 'Pusat Perbukuan'],
        ]);

        Penulis::insert([
            ['penulis' => 'Sofie Dewayani'],
            ['penulis' => 'Dyah M. Sulistyati'],
            ['penulis' => 'I Wayan Wijania'],
            ['penulis' => 'Sri Wahyaningsih'],
            ['penulis' => 'Arleen Amidjaja'],
            ['penulis' => 'Anna Farida Kurniasari'],
            ['penulis' => 'Ni Ekawati'],
            ['penulis' => 'Ignatia Widhiharsanto'],
            ['penulis' => 'Muhammad Akkas'],
            ['penulis' => 'C. Ninuk Helista'],
            ['penulis' => 'Yuni Dwi Anggraini'],
            ['penulis' => 'Oktaviani Puspitasari'],
            ['penulis' => 'Saskhya Aulia Prima'],
            ['penulis' => 'Wiwin Muhyi Susanti'],
            ['penulis' => 'Sisilia Maryati'],
            ['penulis' => 'Ellysa Aditya Suryawati'],
            ['penulis' => 'Eva Yulia Nukman'],
            ['penulis' => 'Cicilia Erni Setyowati'],
            ['penulis' => 'Eugenia Rakhma Subarna'],
        ]);

        Mapel::insert([
            ['mapel' => 'IPA'],
            ['mapel' => 'IPS'],
            ['mapel' => 'Bahasa Indonesia'],
            ['mapel' => 'Bahasa Inggris'],
            ['mapel' => 'Matematika'],
            ['mapel' => 'PKN'],
            ['mapel' => 'Informatika'],
            ['mapel' => 'PJOK'],
            ['mapel' => 'Agama Islam'],
            ['mapel' => 'Agama Kristen'],
            ['mapel' => 'Agama Katolik'],
            ['mapel' => 'Agama Hindu'],
            ['mapel' => 'Agama Buddha'],
            ['mapel' => 'Agama Khonghucu'],
            ['mapel' => 'Kepercayaan'],
            ['mapel' => 'Seni Tari'],
            ['mapel' => 'Seni Musik'],
            ['mapel' => 'Seni Rupa'],
            ['mapel' => 'Seni Teater'],
            ['mapel' => 'Sosiologi'],
            ['mapel' => 'Antropologi'],
            ['mapel' => 'Ekonomi'],
            ['mapel' => 'Geografi'],
            ['mapel' => 'Sejarah'],
            ['mapel' => 'Prakarya'],
            ['mapel' => 'IPAS'],
            ['mapel' => 'Teknik Konstruksi dan Perumahan'],
            ['mapel' => 'Teknik Otomotif'],
            ['mapel' => 'Teknik Elektronika'],
            ['mapel' => 'Teknik Pesawat Udara'],
            ['mapel' => 'Teknik Konstruksi Kapal'],
            ['mapel' => 'Teknik Ketenagalistrikan'],
            ['mapel' => 'Teknik Geospasial'],
            ['mapel' => 'Teknik Geologi Pertambangan'],
            ['mapel' => 'Layanan Kesehatan'],
            ['mapel' => 'Agriteknologi Pengolahan Hasil Pertanian'],
            ['mapel' => 'Manajemen Perkantoran dan Layanan Bisnis'],
            ['mapel' => 'Usaha Layanan Pariwisata'],
            ['mapel' => 'Desain Komunikasi Visual'],
            ['mapel' => 'Teknik Furniture'],
            ['mapel' => 'Kuliner'],
            ['mapel' => 'Biologi'],
            ['mapel' => 'Fisika'],
            ['mapel' => 'Kimia'],
        ]);

        Buku::insert([
            'nama' => 'coba',
            'tipe_id' => 1,
            'jenjang_id' => 1,
            'mapel_id' => 1,
            'penerbit_id' => 1,
            'isbn' => 0,
            'edisi_id' => 1,
            'penulis_id' => 1,
            'het' => 1000,
            'gambar' => 'img/Cover.png'
        ]);
    }
}
