<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productcategorieen extends Model
{
    use HasFactory;

    protected $table = 'productcategorieen';

    protected $fillable = [
        'product_Id',
        'categorie_Id',
        'isActief',
        'opmerkingen',
        'created_at',
        'updated_at',
    ];
}
