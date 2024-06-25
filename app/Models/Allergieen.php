<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Allergieen extends Model
{
    use HasFactory;
    // making sure the table isn't called 'allergieens'
    protected $table = 'allergieen';
    // all tables that are fillable
    protected $fillable = [
        'naam',
    ];
}
