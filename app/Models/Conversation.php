<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'email', 'access_token'];

    protected static function booted(): void
    {
        // Setiap percakapan baru otomatis mendapat token acak yang panjang
        static::creating(function (Conversation $conversation) {
            $conversation->access_token ??= Str::random(40);
        });
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class)->oldest();
    }
}
