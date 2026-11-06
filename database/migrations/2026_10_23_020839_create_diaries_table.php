<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void
    {
    // Membuat tabel diaries di database
    Schema::create('diaries', function (Blueprint $table) {
        $table->id();

        // Judul catatan kehidupan
        $table->string('judul');

        // Isi cerita atau catatan
        $table->text('isi');

        // Tanggal kejadian
        $table->date('tanggal');

        // Waktu data dibuat dan diperbarui
        $table->timestamps();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diaries');
    }
};
