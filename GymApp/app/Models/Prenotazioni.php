<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenotazioni extends Model
{
    use HasFactory;

    public function corsi(): BelongsTo {
        return $this->BelongsTo(Corsi::class, 'corsis_id');
    }

    public function user(): BelongsTo {
        return $this->BelongsTo(User::class, 'users_id');
    }

}
