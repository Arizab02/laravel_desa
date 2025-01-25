<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FasilitasDesa extends Model
{
    /** @use HasFactory<\Database\Factories\FasilitasDesaFactory> */
    use HasFactory;

    protected $fillable=[
        'nama',
        'lokasi',
        'jenis',
    ];

    public function Gambar()
    {
        return $this->morphMany(Gambar::class, 'Gambarable');
    }
}
