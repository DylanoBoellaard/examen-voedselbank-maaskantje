<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producten extends Model
{
    use HasFactory;

    protected $table = 'producten';

    protected $fillable = [
        'productnaam',
        'streepjescode',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];

    // protected $casts = [
    //     'isActief' => 'boolean',
    // ];
}
