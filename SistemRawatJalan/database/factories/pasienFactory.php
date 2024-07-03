<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class pasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_lengkap' => $this->faker->name,
            'jenis_kelamin' => $this->faker->randomElement(['Laki-Laki', 'Perempuan']),
            'tempat_lahir' => $this->faker->city,
            'tanggal_lahir' => $this->faker->date(),
            'nama_ibu_kandung' => $this->faker->name('female'),
            'agama' => $this->faker->randomElement(['Islam', 'Kristen', 'Katolik','Hindu','Buddha', 'Konghucu']),
            'status' => $this->faker->randomElement(['Belum Menikah', 'Menikah', 'Cerai']),
            'pendidikan' => $this->faker->randomElement(['SD', 'SMP', 'SMA', 'D1', 'D2', 'D3']),
            'pekerjaan' => $this->faker->jobTitle,
            'nomor_ktp' => $this->faker->numerify('#########################'),
            'nomor_kk' => $this->faker->numerify('#########################'),
            'nomor_bpjs' => $this->faker->numerify('#########################'),
            'nomor_telepon' => $this->faker->phoneNumber,
            'provinsi' => $this->faker->state,
            'kabupaten_kota' => $this->faker->city,
            'alamat' => $this->faker->address,
            'golongan_darah' => $this->faker->randomElement(['A', 'B','AB','O']),
            'email' => $this->faker->unique()->safeEmail,
            



        ];
    }
}
