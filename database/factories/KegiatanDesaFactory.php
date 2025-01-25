<?php

namespace Database\Factories;

use App\Models\Anggota;
use App\Models\KegiatanDesa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\KegiatanDesa>
 */
class KegiatanDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'=> fake()->words(3,true),
            'tanggal_pelaksanaan' => fake()->date(),
            'detail'=> fake()->sentences(6,true),
        ];
    }
}
