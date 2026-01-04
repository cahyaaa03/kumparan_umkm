<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';


    protected $fillable = [
        'nik',
        'nama',
        'email',
        'password',
        'role',
        'status_aktif',
    ];


    protected $casts = [
        'status_aktif' => 'boolean',
    ];


    public function umkm()
    {
        return $this->hasMany(Umkm::class, 'pengguna_id');
    }


    public function notifikasi()
    {
        return $this->hasMany(Notifikasi::class, 'pengguna_id');
    }

    public function pembayaranPendaftaran()
    {
        return $this->hasMany(PembayaranPendaftaran::class, 'pengguna_id');
    }
}
