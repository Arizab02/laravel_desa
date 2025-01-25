<?php

namespace Database\Factories;

use App\Models\Anggota;
use App\Models\KegiatanDesa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KegiatanPenduduk>
 */
class KegiatanPendudukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'anggota_id' => Anggota::all()->random()->id,
            'kegiatan_desa_id' => KegiatanDesa::all()->random()->id,
        ];
    }
}
