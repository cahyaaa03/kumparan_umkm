<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembiayaanModalSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pembiayaan_modal')->insert([
            [
                'umkm_id' => 1,
                'mitra_id' => 3,
                'jumlah_pinjaman' => 10000000,
                'tenor_bulan' => 12,
                'status' => 'aktif',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'umkm_id' => 2,
                'mitra_id' => 3,
                'jumlah_pinjaman' => 15000000,
                'tenor_bulan' => 18,
                'status' => 'lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'umkm_id' => 4,
                'mitra_id' => 3,
                'jumlah_pinjaman' => 20000000,
                'tenor_bulan' => 24,
                'status' => 'gagal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
