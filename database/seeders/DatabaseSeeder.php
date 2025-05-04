<?php

namespace Database\Seeders;

use App\Models\Halaman;
use App\Models\Layanan;
use App\Models\Galeri;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Halaman
    \App\Models\Halaman::create([
        'judul' => 'Profil Desa',
        'slug' => 'profil-desa',
        'konten' => 'Ini adalah konten profil desa',
        'jenis' => 'profil'
    ]);

        // Layanan
        $layanans = [
            [
                'nama_layanan' => 'Surat Keterangan Domisili',
                'deskripsi' => 'Layanan pembuatan surat keterangan domisili untuk keperluan administrasi',
                'icon' => 'bi-file-text'
            ],
            [
                'nama_layanan' => 'Surat Keterangan Tidak Mampu',
                'deskripsi' => 'Layanan pembuatan surat keterangan tidak mampu untuk berbagai keperluan',
                'icon' => 'bi-file-earmark-text'
            ],
            [
                'nama_layanan' => 'Surat Keterangan Usaha',
                'deskripsi' => 'Layanan pembuatan surat keterangan usaha untuk keperluan perizinan',
                'icon' => 'bi-shop'
            ],
        ];

        foreach ($layanans as $layanan) {
            Layanan::create($layanan);
        }

        // Galeri
        for ($i = 1; $i <= 12; $i++) {
            Galeri::create([
                'judul' => 'Kegiatan Desa ' . $i,
                'deskripsi' => 'Deskripsi kegiatan desa ' . $i,
                'gambar' => 'galeri/example.jpg' // Ganti dengan path gambar yang sesuai
            ]);
        }
    }
}