<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class dokterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_dokter' => $this->faker->name,
            'spesialisasi' => $this->faker->jobTitle(),
            'sub_spesialisasi' => $this->faker->optional()-> word(),
            'jadwal_praktek' => $this->faker->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu']),
            'nomor_telepon' => $this->faker->phoneNumber,
        ];
    }
}
