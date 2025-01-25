<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FasilitasDesa>
 */
class FasilitasDesaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->sentence(3,true),
            'jenis' => fake()->randomElement([
                'Pendidikan',
                'Pos Yandu',
                'PUSKESMAS',
                'Masjid/Mushalla',
                'Irigasi',
            ]),
            'lokasi' => fake()->address(),
            ];
    }
}
