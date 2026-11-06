<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Message extends Model
{
    use HasFactory;

    // Jenis pengirim pesan
    public const VISITOR = 'visitor';
    public const ADMIN = 'admin';
    public const ASSISTANT = 'assistant';

    protected $fillable = [
        'conversation_id',
        'sender',
        'body',
    ];

    // Pesan baru ikut memperbarui updated_at percakapan
    protected $touches = ['conversation'];

    public function conversation(): BelongsTo
    {
        return $this->belongsTo(Conversation::class);
    }
}
