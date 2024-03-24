<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Corsi extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this->BelongsTo(User::class, 'users_id');
    }

    public function prenotazioni(): HasMany {
        return $this->HasMany(Prenotazioni::class, 'prenotazionis_id');
    }
}
