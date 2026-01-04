<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UmkmSeeder extends Seeder
{
    public function run(): void
    {
        // Ambil semua ID pengguna
        $penggunaIds = DB::table('pengguna')->pluck('id')->toArray();

        DB::table('umkm')->insert([
            [
                'nama_usaha'  => 'Maju Kuliner',
                'deskripsi'   => 'UMKM makanan ringan',
                'kategori'    => 'mikro',
                'pengguna_id' => $penggunaIds[1] ?? $penggunaIds[0],
                'status'      => 'aktif',
            ],
            [
                'nama_usaha'  => 'Kreatif Fashion',
                'deskripsi'   => 'UMKM pakaian dan aksesoris',
                'kategori'    => 'kecil',
                'pengguna_id' => $penggunaIds[2] ?? $penggunaIds[0],
                'status'      => 'aktif',
            ],
            [
                'nama_usaha'  => 'Kerajinan Tangan',
                'deskripsi'   => 'UMKM kerajinan lokal',
                'kategori'    => 'mikro',
                'pengguna_id' => $penggunaIds[3] ?? $penggunaIds[0],
                'status'      => 'aktif',
            ],
            [
                'nama_usaha'  => 'Digital Kreatif',
                'deskripsi'   => 'UMKM pengembangan aplikasi',
                'kategori'    => 'menengah',
                'pengguna_id' => $penggunaIds[4] ?? $penggunaIds[0],
                'status'      => 'aktif',
            ],
            [
                'nama_usaha'  => 'Sejahtera Tani',
                'deskripsi'   => 'UMKM hasil pertanian lokal',
                'kategori'    => 'mikro',
                'pengguna_id' => $penggunaIds[1] ?? $penggunaIds[0],
                'status'      => 'aktif',
            ],
        ]);
    }
}
