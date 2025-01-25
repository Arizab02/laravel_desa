<?php

namespace Database\Factories;

use App\Models\Keluarga;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Anggota>
 */
class AnggotaFactory extends Factory
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
            'keluarga_id'=> Keluarga::all()->random()->id,
            'role' => fake()->randomElement(['Kepala Keluarga', 'Anggota','Istri','Anak','Anak2','Anak3','Cucu','Kakek','Nenek']),
            'NIK' => fake()->unique()->numerify('##################'),
            'tanggal_lahir' => fake()->date(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
        ];
    }
}
