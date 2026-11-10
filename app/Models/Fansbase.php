<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // Wajib pakai ini agar bisa Login
use Illuminate\Notifications\Notifiable;

class Fansbase extends Authenticatable
{
    use Notifiable;

    protected $table = 'fansbase'; // Beritahu Laravel nama tabel yang benar
    
    public $timestamps = false; // Karena di tabel asli tidak ada created_at & updated_at

    protected $fillable = [
        'nama_lengkap', 'email', 'password', 'role', 'no_hp', 
        'tgl_lahir', 'gender', 'pekerjaan', 'kota_asal', 
        'minat_layanan', 'sosmed', 'alasan_join', 'status_anggota'
    ];

    protected $hidden = [
        'password', // Sembunyikan password saat data dipanggil
    ];
}