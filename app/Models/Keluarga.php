<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    /** @use HasFactory<\Database\Factories\KeluargaFactory> */
    use HasFactory;

    protected $fillable=[
        'nama',
    ];

    public function anggota()
    {
        return $this->hasMany(Anggota::class);
    }


}
