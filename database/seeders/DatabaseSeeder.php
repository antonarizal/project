<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Buku;
use App\Models\Tipe;
use App\Models\User;
use App\Models\Mapel;
use App\Models\Jenjang;
use App\Models\Penulis;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        User::create(
            [
                "name"=>"admin",
                "email"=>"admin@admin.com",
                "password"=> Hash::make('admin')
            ]
        );
        Tipe::create(
            [
                    "tipe"=>'BUKU PDF'
            ]
        );
        Jenjang::create(
            [
                    "jenjang"=>'SMA'
            ]
        );
        Mapel::create(
            [
                    "mapel"=>'IPA'
            ]
        );
        Penulis::create(
            [
                    "nama"=>'Anton'
            ]
        );
        Buku::create(
            [
               "judul"=>"IPA KELAS XI",
               "tipe_id"=>1,
               "jenjang_id"=>1,
               "mapel_id"=>1,
               "penulis_id"=>1,
               "isbn"=>12345,
               "edisi"=>'revisi',
            ]
        );
    }
}
