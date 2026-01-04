<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalitasUmkmSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('legalitas_umkm')->insert([
            [
                'umkm_id' => 1,
                'jenis_dokumen' => 'NIB',
                'file_dokumen' => 'nib_umkm1.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'umkm_id' => 2,
                'jenis_dokumen' => 'SIUP',
                'file_dokumen' => 'siup_umkm2.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'umkm_id' => 3,
                'jenis_dokumen' => 'NIB',
                'file_dokumen' => 'nib_umkm3.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'umkm_id' => 4,
                'jenis_dokumen' => 'SIUP',
                'file_dokumen' => 'siup_umkm4.pdf',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
