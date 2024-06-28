<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klanten extends Model
{
    use HasFactory;
    // 'klanten' is the name of the table in the database
    protected $table = 'klanten';
    protected $fillable = [
        'naam',
        'gezinssamenstelling_id', // 'gezinssamenstelling_id' is a foreign key
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
