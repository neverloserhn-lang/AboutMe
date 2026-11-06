<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    protected $fillable = [
        'is_online',
        'status_changed_at',
    ];

    protected function casts(): array
    {
        return [
            'is_online' => 'boolean',
            'status_changed_at' => 'datetime',
        ];
    }
}
