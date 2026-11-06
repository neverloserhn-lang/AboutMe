<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConversationController extends Controller
{
    // Membuat percakapan baru dari pengunjung
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'body' => 'required|string|max:5000',
        ]);

        $conversation = DB::transaction(function () use ($validated) {
            $token = bin2hex(random_bytes(32));

            $conversation = Conversation::create([
                'nama' => $validated['nama'],
                'email' => $validated['email'],
                'access_token' => $token,
            ]);

            $conversation->messages()->create([
                'sender' => 'visitor',
                'body' => $validated['body'],
                'is_read' => false,
            ]);

            return $conversation;
        });

        return redirect()->route('pesan.show', $conversation->access_token);
    }

    // Menampilkan percakapan milik pengunjung
    public function show($token)
    {
        $conversation = Conversation::where('access_token', $token)->firstOrFail();

        $messages = $conversation->messages()
            ->orderBy('created_at')
            ->get();

        return view('pesan.show', compact('conversation', 'messages'));
    }

    // Menampilkan seluruh percakapan untuk admin
    public function inbox()
    {
        $conversations = Conversation::with('messages')
            ->latest()
            ->get();

        return view('admin.pesan.index', compact('conversations'));
    }

    // Menampilkan detail percakapan untuk admin
    public function adminShow($id)
    {
        $conversation = Conversation::with('messages')
            ->findOrFail($id);

        return view('admin.pesan.show', compact('conversation'));
    }

    // Menampilkan daftar percakapan untuk pengunjung
    public function index()
    {
        // Sesuaikan query di bawah ini sesuai kebutuhan (misal: berdasarkan session atau data publik)
        $conversations = Conversation::latest()->get();

        return view('pesan.index', compact('conversations'));
    }
}

