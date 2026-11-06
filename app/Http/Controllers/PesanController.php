<?php

namespace App\Http\Controllers;

use App\Models\AdminSetting;
use App\Models\Conversation;
use App\Models\Message;
use App\Services\RuleBasedAssistant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PesanController extends Controller
{
    public function index(): View
    {
        return view('pesan.index');
    }

    public function store(
        Request $request,
        RuleBasedAssistant $assistant
    ): RedirectResponse {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'body' => ['required', 'string', 'min:2', 'max:2000'],
        ]);

        $conversation = Conversation::create([
            'nama' => $data['nama'],
            'email' => $data['email'],
        ]);

        // Simpan pesan pertama dari pengunjung
        $conversation->messages()->create([
            'sender' => Message::VISITOR,
            'body' => $data['body'],
        ]);

        // Periksa status admin
        $this->replyIfAdminOffline($conversation, $data['body'], $assistant);

        return redirect()
            ->route('pesan.show', $conversation->access_token)
            ->with('success', 'Pesan berhasil dikirim.');
    }

    public function show(string $token): View
    {
        $conversation = Conversation::where(
            'access_token',
            $token
        )->firstOrFail();

        return view('pesan.show', [
            'conversation' => $conversation,
            'messages' => $conversation->messages,
        ]);
    }

    public function send(
        Request $request,
        string $token,
        RuleBasedAssistant $assistant
    ): RedirectResponse {
        $conversation = Conversation::where(
            'access_token',
            $token
        )->firstOrFail();

        $data = $request->validate([
            'body' => ['required', 'string', 'min:2', 'max:2000'],
        ]);

        // Simpan pesan lanjutan dari pengunjung
        $conversation->messages()->create([
            'sender' => Message::VISITOR,
            'body' => $data['body'],
        ]);

        // Periksa status admin
        $this->replyIfAdminOffline($conversation, $data['body'], $assistant);

        return redirect()
            ->route('pesan.show', $conversation->access_token)
            ->with('success', 'Pesan berhasil dikirim.');
    }

    /**
     * Asisten hanya membalas ketika admin sedang Offline.
     */
    private function replyIfAdminOffline(
        Conversation $conversation,
        string $visitorMessage,
        RuleBasedAssistant $assistant
    ): void {
        $setting = AdminSetting::find(1);

        // Jika admin Online, jangan kirim balasan otomatis.
        if ($setting && $setting->is_online) {
            return;
        }

        // Buat balasan otomatis.
        $conversation->messages()->create([
            'sender' => Message::ASSISTANT,
            'body' => $assistant->reply($visitorMessage),
        ]);
    }
}
