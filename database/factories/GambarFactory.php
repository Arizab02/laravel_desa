<?php

namespace Database\Factories;

use App\Models\Anggota;
use App\Models\KegiatanDesa;
use App\Models\FasilitasDesa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gambar>
 */
class GambarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'gambarable_id' => fake()->randomElement([
                Anggota::all()->random()->id,
                KegiatanDesa::all()->random()->id,
                FasilitasDesa::all()->random()->id,
            ]),
            'gambarable_type' => fake()->randomElement([
                Anggota::class,
                KegiatanDesa::class,
                FasilitasDesa::class
            ]),
        ];
}}