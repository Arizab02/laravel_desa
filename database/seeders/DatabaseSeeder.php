<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Gambar;
use App\Models\Anggota;
use App\Models\Keluarga;
use App\Models\KegiatanDesa;
use App\Models\KegiatanPenduduk;
use App\Models\FasilitasDesa;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    // User::factory(10)->create();
    {
        KegiatanDesa::factory(200)->create();

        $keluargas = Keluarga::factory(100)->create();

        foreach ($keluargas as $keluarga ){
            $Anggotas = Anggota::factory(4)->create([
                'keluarga_id' => $keluarga->id,
            ]);

            foreach ($Anggotas as $anggota){
                $anggota->gambar()->create();
                KegiatanPenduduk::factory(2)->create(['anggota_id' => $anggota->id]);
            }
        }
        FasilitasDesa::factory(100)->create();
        Gambar::factory(250)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
