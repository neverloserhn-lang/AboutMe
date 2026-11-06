<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    // Menentukan nama tabel di database
    protected $table = 'diaries';

    // Field yang boleh diisi melalui aplikasi
    protected $fillable = [
        'judul',
        'isi',
        'tanggal',
    ];
}
