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

    public function products()
    {
        /* One category contains many products. It is being handled by the productcategorieen table.
            Laravel will define the relationship via the productcategorieen table
        */
        return $this->belongsToMany(Producten::class, 'productcategorieen', 'categorie_Id', 'product_Id');
    }
}
