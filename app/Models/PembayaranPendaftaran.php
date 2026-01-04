<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembayaranPendaftaran extends Model
{
    protected $table = 'pembayaran_pendaftaran';

    protected $fillable = [
        'umkm_id',
        'jumlah',
        'status'
    ];

    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}
