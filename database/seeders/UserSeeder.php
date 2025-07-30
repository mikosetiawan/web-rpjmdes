<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Desa',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'), // ganti dengan password aman
                'role' => 'admin',
                'signature' => null,
                'photo' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tim Penyusun',
                'email' => 'tim@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'tim_penyusun',
                'signature' => null,
                'photo' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kepala Desa',
                'email' => 'kades@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password123'),
                'role' => 'kepala_desa',
                'signature' => null,
                'photo' => null,
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
