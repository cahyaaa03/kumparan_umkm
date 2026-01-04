<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class KategoriUmkm extends Model
{
    protected $table = 'kategori_umkm';

    protected $fillable = [
        'nama_kategori',
        'limit_pinjaman'
    ];
    
    public function umkms()
{
    return $this->hasMany(Umkm::class, 'kategori_umkm_id');
}

}
