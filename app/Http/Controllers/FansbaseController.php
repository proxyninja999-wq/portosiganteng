<?php

namespace App\Http\Controllers;

use App\Models\Fansbase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class FansbaseController extends Controller
{
    // Halaman Daftar/List (Khusus Admin)
    public function index()
    {
        // Mengambil semua data fansbase, diurutkan dari yang terbaru
        $fansbase = Fansbase::orderBy('id', 'desc')->get();
        
        // Selesai Diperbarui: diarahkan ke file view pages/list-fansbase.blade.php
        return view('pages.list-fansbase', compact('fansbase'));
    }

    // Halaman Form Registrasi
    public function create()
    {
        return view('pages.registrasi');
    }

    // Proses Simpan Data Pendaftaran
    public function store(Request $request)
    {
        Fansbase::create([
            'nama_lengkap'   => $request->nama_lengkap,
            'email'          => $request->email,
            'password'       => Hash::make($request->password), // Enkripsi password otomatis
            'no_hp'          => $request->no_hp,
            'tgl_lahir'      => $request->tgl_lahir,
            'gender'         => $request->gender,
            'pekerjaan'      => $request->pekerjaan,
            'kota_asal'      => $request->kota_asal,
            'minat_layanan'  => $request->minat_layanan,
            'sosmed'         => $request->sosmed,
            'alasan_join'    => $request->alasan_join,
            'role'           => 'user',
            'status_anggota' => 'Calon Anggota'
        ]);

        return redirect('/login')->with('success', 'Registration completed successfully! Please sign in with your credentials.');
    }

    // Halaman Form Edit
    public function edit($id)
    {
        $data = Fansbase::findOrFail($id);
        return view('pages.edit', compact('data'));
    }

    // Proses Update Data
    public function update(Request $request, $id)
    {
        $fansbase = Fansbase::findOrFail($id);
        
        $fansbase->update([
            'nama_lengkap'   => $request->nama_lengkap,
            'email'          => $request->email,
            'no_hp'          => $request->no_hp,
            'tgl_lahir'      => $request->tgl_lahir,
            'gender'         => $request->gender,
            'pekerjaan'      => $request->pekerjaan,
            'kota_asal'      => $request->kota_asal,
            'minat_layanan'  => $request->minat_layanan,
            'sosmed'         => $request->sosmed,
            'alasan_join'    => $request->alasan_join,
            'status_anggota' => $request->status_anggota
        ]);

        // Selesai Diperbarui: dialihkan ke rute baru /list-fansbase
        return redirect('/list-fansbase')->with('success', 'Member record updated successfully!');
    }

    // Proses Hapus Data
    public function destroy($id)
    {
        $fansbase = Fansbase::findOrFail($id);
        $fansbase->delete();

        // Selesai Diperbarui: dialihkan ke rute baru /list-fansbase
        return redirect('/list-fansbase')->with('success', 'Member record removed successfully!');
    }
}