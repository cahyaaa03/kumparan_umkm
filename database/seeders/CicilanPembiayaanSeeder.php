<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CicilanPembiayaanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cicilan_pembiayaan')->insert([
            [
                'pembiayaan_modal_id' => 1,
                'jumlah_bayar' => 1000000,
                'tanggal_bayar' => now()->subDays(10),
                'status' => 'belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pembiayaan_modal_id' => 1,
                'jumlah_bayar' => 1000000,
                'tanggal_bayar' => now()->subDays(5),
                'status' => 'belum',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'pembiayaan_modal_id' => 2,
                'jumlah_bayar' => 5000000,
                'tanggal_bayar' => now()->subDays(15),
                'status' => 'lunas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
