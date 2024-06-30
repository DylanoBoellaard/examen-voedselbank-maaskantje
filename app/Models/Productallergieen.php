<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Product;
use App\Models\Allergie;

class Productallergie extends Model
{
    use HasFactory;
    // making sure the table isn't called 'allergieens'
    protected $table = 'Productallergie';

    // all tables that are fillable
    protected $fillable = [
        'product_Id',
        'allergie_Id',
    ];


    public function hasproduct(): HasOne
    {
        return $this->hasOne(Product::class);
    }
    public function hasallergie(): HasOne
    {
        return $this->hasOne(Allergie::class);
    }
}
