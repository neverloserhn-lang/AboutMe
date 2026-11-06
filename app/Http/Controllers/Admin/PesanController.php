<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use App\Services\GeminiService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PesanController extends Controller
{
    /** Kotak masuk: percakapan terbaru di atas */
    public function index(): View
    {
        $conversations = Conversation::with('messages')
            ->latest('updated_at')
            ->limit(100)
            ->get();

        return view('admin.pesan.index', compact('conversations'));
    }

    /** Detail satu percakapan */
    public function show(int $id): View
    {
        $conversation = Conversation::with('messages')->findOrFail($id);

        return view('admin.pesan.show', compact('conversation'));
    }

    /** Pemilik website membalas */
    public function reply(Request $request, int $id): RedirectResponse
    {
        $conversation = Conversation::findOrFail($id);

        $data = $request->validate([
            'body' => ['required', 'string', 'min:2', 'max:2000'],
        ], [
            'body.required' => 'Tulis balasan terlebih dahulu.',
        ]);

        $conversation->messages()->create([
            'sender' => Message::ADMIN,
            'body'   => $data['body'],
        ]);

        return redirect()
            ->route('admin.pesan.show', $conversation->id)
            ->with('success', 'Balasan terkirim.');
    }

        /** Menghapus percakapan beserta seluruh pesannya */
    public function destroy(int $id): RedirectResponse
    {
        $conversation = Conversation::findOrFail($id);

        // Hapus percakapan.
        // Pesan terkait ikut terhapus melalui foreign key cascade.
        $conversation->delete();

        return redirect()
            ->route('admin.pesan.index')
            ->with('success', 'Percakapan berhasil dihapus.');
    }

    
    /** Meminta Gemini membuat saran balasan */
    public function aiSuggest(int $id, GeminiService $gemini): RedirectResponse
    {
        $conversation = Conversation::with('messages')->findOrFail($id);

        // Ambil maksimal 20 pesan terakhir dari percakapan.
        $messages = $conversation->messages()
            ->latest()
            ->limit(20)
            ->get()
            ->reverse();

        // Susun percakapan menjadi teks untuk dikirim ke Gemini.
        $conversationText = '';

        foreach ($messages as $message) {
            $sender = $message->sender === Message::ADMIN
                ? 'Pemilik Website'
                : 'Pengunjung';

            $conversationText .= $sender . ': ' . $message->body . "\n";
        }

        try {
            $suggestion = $gemini->suggestReply($conversationText);

            return redirect()
                ->route('admin.pesan.show', $conversation->id)
                ->with('ai_suggestion', $suggestion);

        } catch (\Throwable $e) {
            report($e);

            return redirect()
                ->route('admin.pesan.show', $conversation->id)
                ->with('ai_error', 'Gemini gagal membuat saran. Periksa konfigurasi API dan coba lagi.');
        }
    }

}
