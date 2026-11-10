<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        // Memasukkan akun administrator bawaan Anda ke tabel fansbase
        DB::table('fansbase')->insert([
            'nama_lengkap'   => 'Administrator',
            'email'          => 'admin@admin.com',
            // Hash::make akan mengamankan password menggunakan Bcrypt standar Laravel
            'password'       => Hash::make('admin123'), 
            'role'           => 'admin',
            'status_anggota' => 'Anggota Aktif'
        ]);
    }
}