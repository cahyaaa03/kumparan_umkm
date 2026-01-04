<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LegalitasUmkm extends Model
{
    protected $table = 'legalitas_umkm';

    protected $fillable = [
        'umkm_id',
        'jenis_dokumen',
        'file_dokumen'
    ];

    
    public function umkm()
    {
        return $this->belongsTo(Umkm::class, 'umkm_id');
    }
}
