<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klant extends Model
{
    use HasFactory;

    protected $table = 'klanten';

    protected $fillable = [
        'naam',
        'aantalvolwassenen',
        'aantalkinderen',
        'aantalbabies',
        'huisnummer',
        'postcode',
        'plaats',
        'straat',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'email',
        'telefoon',
    ];
}
