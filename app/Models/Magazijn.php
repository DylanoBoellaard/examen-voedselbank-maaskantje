<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazijn extends Model
{
    use HasFactory;

    protected $table = 'magazijn';

    protected $fillable = [
        'product_Id',
        'aantalaanwezig',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];
}
