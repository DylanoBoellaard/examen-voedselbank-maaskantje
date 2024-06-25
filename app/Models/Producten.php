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

    public function categories()
    {
        /* One product contains many categories. It is being handled by the productcategorieen table.
            Laravel will define the relationship via the productcategorieen table
        */
        return $this->belongsToMany(Categorieen::class, 'productcategorieen', 'product_Id', 'categorie_Id');
    }

    public function magazijn()
    {
        // One product has one magazijn (entry)
        return $this->hasOne(Magazijn::class, 'product_Id');
    }
}
