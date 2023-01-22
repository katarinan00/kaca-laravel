<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rezervacija extends Model
{
    use HasFactory;

    public function klijent()
    {
        return $this->belongsTo(Klijent::class);
    }

    public function brod()
    {
        return $this->belongsTo(Brod::class);
    }
}
