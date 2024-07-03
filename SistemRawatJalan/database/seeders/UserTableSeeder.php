<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Buat data pengguna
        // DB::table('users')->insert([
        //     'username' => 'Admin',
        //     'email' => 'admin@gmail.com',
        //     'nama_lengkap' => 'adminnn123',
        //     'nomor_telepon' => '083212345677',
        //     'password' => Hash::make('password'), // Hash kata sandi dengan Bcrypt
        //     'role' => 'admin', // Atur peran pengguna
        // ]);

        // DB::table('users')->insert([
        //     'username' => 'Dokter',
        //     'email' => 'dokter@gamil.com',
        //     'nama_lengkap' => 'doctor',
        //     'nomor_telepon' => '083212345677',
        //     'password' => Hash::make('password'),
        //     'role' => 'dokter',
        // ]);

        // DB::table('users')->insert([
        //     'username' => 'Pasien',
        //     'email' => 'pasien@gmail.com',
        //     'nama_lengkap' => 'pasien123',
        //     'nomor_telepon' => '083212345677',
        //     'password' => Hash::make('password'),
        //     'role' => 'pasien',
        // ]);
        
        // DB::table('users')->insert([
        //     'username' => 'Apoteker',
        //     'email' => 'apoteker@gmail.com',
        //     'nama_lengkap' => 'apoteker123',
        //     'nomor_telepon' => '083212345677',
        //     'password' => Hash::make('password'),
        //     'role' => 'apoteker',
        // ]);

        // Buat lebih banyak data pengguna jika diperlukan
    }
}
