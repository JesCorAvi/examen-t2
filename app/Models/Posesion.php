<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Posesion extends Model
{
    use HasFactory;
    protected $fillable = ["videojuego_id", "user_id"];

    public function videojuego(): BelongsTo
    {
        return $this->belongsTo(Videojuego::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
