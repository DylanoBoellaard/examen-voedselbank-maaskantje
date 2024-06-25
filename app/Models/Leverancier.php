<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leverancier extends Model
{
    use HasFactory;

    // this is the table name in the database
    protected $table = 'leveranciers';

    // these are the columns that are fillable
    protected $fillable = [
        'bedrijfsnaam',
        'huisnummer',
        'postcode',
        'plaats',
        'telefoonnummer',
        'voornaam',
        'tussenvoegsel',
        'achternaam',
        'email',
        'straat',
    ];
}
