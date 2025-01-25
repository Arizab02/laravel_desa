<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanPenduduk extends Model
{
    /** @use HasFactory<\Database\Factories\KegiatanPendudukFactory> */
    use HasFactory;

    protected $fillable=[
        'nama',
        'anggota_id',
        'kegiatan_desa_id',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class);
    }

    public function kegiatan()
    {
        return $this->belongsTo(KegiatanDesa::class);
    }

}
