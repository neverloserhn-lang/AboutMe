<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:80'],
            'email'   => ['required', 'email', 'max:120'],
            'message' => ['required', 'string', 'min:10', 'max:2000'],
        ], [
            'name.required'    => 'Isi nama kamu dulu.',
            'email.required'   => 'Isi alamat email supaya saya bisa membalas.',
            'email.email'      => 'Format email belum benar. Contoh: nama@email.com',
            'message.required' => 'Tulis pesan kamu.',
            'message.min'      => 'Pesan terlalu singkat. Tulis minimal 10 karakter.',
        ]);

        // Pesan dicatat di storage/logs/laravel.log.
        // Untuk dikirim lewat email, ganti dengan Mail::to(...)->send(...) dan atur SMTP di .env.
        logger()->info('Pesan dari halaman kontak', $data);

        return back()->with('sent', 'Pesan terkirim. Terima kasih, saya akan membalas secepatnya.');
    }
}
