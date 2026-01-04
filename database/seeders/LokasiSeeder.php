<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LokasiSeeder extends Seeder
{
    public function run()
    {
        Lokasi::insert([
            ['provinsi'=>'Yogyakarta','kabupaten'=>'Sleman','kecamatan'=>'Depok'],
            ['provinsi'=>'Jawa Tengah','kabupaten'=>'Semarang','kecamatan'=>'Tembalang'],
            ['provinsi'=>'Jawa Timur','kabupaten'=>'Surabaya','kecamatan'=>'Wonokromo'],
            ['provinsi'=>'Banten','kabupaten'=>'Serang','kecamatan'=>'Curug'],
        ]);
    }
}
