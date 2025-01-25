<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    /** @use HasFactory<\Database\Factories\GambarFactory> */
    use HasFactory;

    protected $fillable=[
        'gambarable_id',
        'gambarable_type',
    ];

    public function gambar()
    {
        return $this->morphTo();
    }
}
