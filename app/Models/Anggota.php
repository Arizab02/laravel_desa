<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    /** @use HasFactory<\Database\Factories\AnggotaFactory> */
    use HasFactory;

    protected $fillable=[
        'nama',
        'keluarga_id',
        'role',
        'NIK',
        'tanggal_lahir',
        'jenis_kelamin',
    ];

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class);
    }

    public function kegiatan()
    {
        return $this->hasMany(KegiatanPenduduk::class);
    }

    public function gambar()
    {
        return $this->morphMany(Gambar::class, 'gambarable');
    }
}
