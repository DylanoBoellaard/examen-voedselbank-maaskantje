<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productallergieen extends Model
{
    use HasFactory;
    // making sure the table isn't called 'allergieens'
    protected $table = 'Productallergieen';
    // all tables that are fillable
    protected $fillable = [
        'product_id',
        'allergie_id',
    ];
}
