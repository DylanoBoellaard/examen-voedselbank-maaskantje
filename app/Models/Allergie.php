<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Productallergie;

class Allergie extends Model
{
    use HasFactory;
    // making sure the table isn't called 'allergieens'
    protected $table = 'allergie';
    // all tables that are fillable
    protected $fillable = [
        'naam',
    ];

    public function belongsproductallergie(): BelongsTo
    {
        return $this->belongsTo(Productallergie::class);
    }
}
