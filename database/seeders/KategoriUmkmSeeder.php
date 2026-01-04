<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KategoriUmkm;

class KategoriUmkmSeeder extends Seeder
{
    public function run()
    {
        KategoriUmkm::insert([
            ['nama_kategori'=>'Kuliner','limit_pinjaman'=>5000000],
            ['nama_kategori'=>'Fashion','limit_pinjaman'=>7000000],
            ['nama_kategori'=>'Kerajinan','limit_pinjaman'=>6000000],
            ['nama_kategori'=>'Digital','limit_pinjaman'=>8000000],
        ]);
    }
}
