<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klijent extends Model
{
    use HasFactory;

    protected $table = 'klijenti';

    protected $fillable = [
        'imePrezime',
        'brojTelefona',
        'grad',
    ];

    public function rezervacije()
    {
        return $this->hasMany(Rezervacija::class);
    }
}
