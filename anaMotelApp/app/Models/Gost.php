<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gost extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'br_lk',
    ];

    public function iznajmljivanja()
    {
        return $this->hasMany(Iznajmljivanje::class);
    }
}
