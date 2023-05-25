<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soba extends Model
{
    use HasFactory;

    protected $fillable = [
        'broj_ljudi',
        'broj_sobe',
    ];

    public function iznajmljivanja()
    {
        return $this->hasMany(Iznajmljivanje::class);
    }
}
