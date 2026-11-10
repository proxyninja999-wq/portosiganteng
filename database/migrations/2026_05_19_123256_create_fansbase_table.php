<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Sengaja kita namakan 'fansbase' agar sesuai dengan query lama
        Schema::create('fansbase', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 100)->nullable();
            $table->string('email', 100)->unique();
            $table->string('password', 255);
            $table->string('role', 20)->default('user'); 
            $table->string('no_hp', 20)->nullable();
            $table->date('tgl_lahir')->nullable();
            $table->string('gender', 20)->nullable();
            $table->string('pekerjaan', 50)->nullable();
            $table->string('kota_asal', 50)->nullable();
            $table->string('minat_layanan', 50)->nullable();
            $table->string('sosmed', 50)->nullable();
            $table->text('alasan_join')->nullable();
            $table->string('status_anggota', 50)->default('Calon Anggota');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fansbase');
    }
};