<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Desarrolladora extends Model
{
    use HasFactory;
    protected $fillable = ["nombre", "distribuidora_id"];
    public function videojuegos(): HasMany
    {
        return $this->hasMany(Videojuego::class);
    }
    public function distribuidora(): BelongsTo
    {
        return $this->belongsTo(Distribuidora::class);
    }
}
