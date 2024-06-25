<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergieen extends Model
{
    use HasFactory;

    protected $fillable = [
        'naam',
    ];
}
