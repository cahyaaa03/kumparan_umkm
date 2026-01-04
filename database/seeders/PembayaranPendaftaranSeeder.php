<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembayaranPendaftaranSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('pembayaran_pendaftaran')->insert([
            [
                'umkm_id' => 1,
                'jumlah' => 500000,
                'status' => 'lunas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'umkm_id' => 2,
                'jumlah' => 500000,
                'status' => 'belum',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'umkm_id' => 3,
                'jumlah' => 500000,
                'status' => 'lunas',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        
    }
}
