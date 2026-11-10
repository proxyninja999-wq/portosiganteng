<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PortofolioSeeder extends Seeder
{
    public function run(): void
    {
        // Masukkan data Kategori
        DB::table('kategori')->insert([
            ['id' => 1, 'nama_kategori' => 'Instalasi Jaringan'],
            ['id' => 2, 'nama_kategori' => 'Perakitan PC'],
            ['id' => 3, 'nama_kategori' => 'Maintenance Server'],
            ['id' => 4, 'nama_kategori' => 'Konsultasi PPG'],
        ]);

        // Masukkan data Akun Administrator bawaan Anda
        DB::table('fansbase')->insert([
            'id' => 7,
            'nama_lengkap' => 'Administrator',
            'email' => 'admin@admin.com',
            'password' => '$2y$10$wTDO5Dd9CHmDi86ppTEB4uUtB.Bfzl1Vs0buKTaFwW9ALv4bR5miO', // Password bawaan asli Anda
            'role' => 'admin',
            'status_anggota' => 'Calon Anggota'
        ]);
    }
}