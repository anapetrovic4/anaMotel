<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iznajmljivanje extends Model
{
    use HasFactory;

    protected $fillable = [
        'gost_id',
        'soba_id',
        'datum_od',
        'datum_do',
    ];

    public function soba()
    {
        return $this->belongsTo(Soba::class);
    }
    public function gost()
    {
        return $this->belongsTo(Gost::class);
    }
    
}
