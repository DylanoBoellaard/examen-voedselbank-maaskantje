<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorieen extends Model
{
    use HasFactory;

    protected $table = 'categorieen';

    protected $fillable = [
        'naam',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];
}
