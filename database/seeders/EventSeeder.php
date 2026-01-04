<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('event')->insert([
            [
                'nama_event' => 'Pelatihan UMKM',
                'deskripsi'  => 'Pelatihan pengembangan usaha bagi pelaku UMKM',
                'tanggal'    => now()->addDays(7),
                'lokasi'     => 'Gedung Pusat Niaga',
                'kuota'      => 50,
                'mitra_id'   => 1,
            ],
            [
                'nama_event' => 'Workshop Digital Marketing',
                'deskripsi'  => 'Workshop strategi pemasaran digital untuk UMKM',
                'tanggal'    => now()->addDays(14),
                'lokasi'     => 'Online (Zoom Meeting)',
                'kuota'      => 30,
                'mitra_id'   => 1,
            ],
            [
                'nama_event' => 'Pendampingan Legalitas UMKM',
                'deskripsi'  => 'Pendampingan pengurusan NIB dan legalitas usaha',
                'tanggal'    => now()->addDays(21),
                'lokasi'     => 'Kantor Dinas UMKM',
                'kuota'      => 20,
                'mitra_id'   => 1,
            ],
        ]);
    }
}
