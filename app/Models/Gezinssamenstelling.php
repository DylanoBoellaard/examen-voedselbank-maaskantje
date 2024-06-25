<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gezinssamenstelling extends Model
{
    use HasFactory;

    protected $table = 'gezinssamenstelling';

    protected $fillable = [
        'aantalvolwassenen',
        'aantalkinderen',
        'aantalbabies',
    ];
}
