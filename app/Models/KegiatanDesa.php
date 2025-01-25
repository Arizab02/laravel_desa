<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanDesa extends Model
{
    /** @use HasFactory<\Database\Factories\KegiatanDesaFactory> */
    use HasFactory;

    protected $fillable=[
        'nama',
        'tanggal_pelaksanaan',
        'detail',
    ];

    public function kegiatan()
    {
        return $this->hasMany(KegiatanPenduduk::class);
    }

    public function gambar()
        {
        return $this->morphMany(Gambar::class, 'gambarable');
        }
}
