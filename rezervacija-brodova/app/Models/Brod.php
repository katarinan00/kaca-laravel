<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brod extends Model
{
    use HasFactory;
    
    protected $table = 'brodovi';

    protected $fillable = [

        'naziv',
        'zemljaPorekla',
        'godiste',
    ];

    public function rezervacije()
    {
        return $this->hasMany(Rezervacija::class);
    }
}
