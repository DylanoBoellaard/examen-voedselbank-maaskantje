<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Productallergie;

class Product extends Model
{
    use HasFactory;

    // making sure the table isn't called 'producten'
    protected $table = 'product';
    protected $fillable = [
        'productnaam',
        'streepjescode',
    ];

    public function belongsproductallergie(): BelongsTo
    {
        return $this->belongsTo(Productallergie::class);
    }
}
