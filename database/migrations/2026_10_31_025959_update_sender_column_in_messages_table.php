<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Mengubah ENUM menjadi VARCHAR agar mendukung assistant
        DB::statement("
            ALTER TABLE messages
            MODIFY sender VARCHAR(10) NOT NULL DEFAULT 'visitor'
        ");
    }

    public function down(): void
    {
        // Mengembalikan pesan assistant menjadi admin
        DB::table('messages')
            ->where('sender', 'assistant')
            ->update(['sender' => 'admin']);

        // Mengembalikan tipe kolom ke ENUM sebelumnya
        DB::statement("
            ALTER TABLE messages
            MODIFY sender ENUM('visitor', 'admin') NOT NULL
        ");
    }
};
