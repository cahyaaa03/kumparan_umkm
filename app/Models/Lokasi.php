<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $table = 'lokasi';

    protected $fillable = [
        'provinsi',
        'kabupaten',
        'kecamatan'
    ];
    public function umkm()
{
    return $this->hasMany(Umkm::class, 'lokasi_id');
}

public function event()
{
    return $this->hasMany(Event::class, 'lokasi_id');
}
}
