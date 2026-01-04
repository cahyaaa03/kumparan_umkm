<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Berita;
use Illuminate\Support\Facades\DB;


class BeritaSeeder extends Seeder
{
    public function run()
    {
        DB::table('berita')->insert([
            [
                'judul' => 'Pelatihan UMKM',
                'konten' => 'Pelatihan UMKM akan dimulai bulan depan',
                'status_publish' => true,
                'tanggal_publish' => '2026-01-01',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Workshop Kreatif',
                'konten' => 'Workshop Kreatif untuk UMKM industri kreatif',
                'status_publish' => true,
                'tanggal_publish' => '2026-01-05',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Seminar Digital',
                'konten' => 'Seminar Digital untuk UMKM',
                'status_publish' => true,
                'tanggal_publish' => '2026-01-10',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Bantuan Modal',
                'konten' => 'Program bantuan modal siap disalurkan',
                'status_publish' => true,
                'tanggal_publish' => '2026-01-15',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
        
    }
}
