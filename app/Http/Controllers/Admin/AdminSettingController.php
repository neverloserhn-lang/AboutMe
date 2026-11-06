<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminSetting;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminSettingController extends Controller
{
    public function index(): View
    {
        $setting = AdminSetting::firstOrCreate(
            ['id' => 1],
            [
                'is_online' => false,
                'status_changed_at' => now(),
            ]
        );

        // Statistik website
        $totalConversations = Conversation::count();
        $totalMessages = Message::count();

        $unreadMessages = Message::where('sender', Message::VISITOR)
            ->where('is_read', false)
            ->count();

        // Lima percakapan terbaru
        $recentConversations = Conversation::with('messages')
            ->latest('updated_at')
            ->limit(5)
            ->get();

        return view('admin.dashboard', compact(
            'setting',
            'totalConversations',
            'totalMessages',
            'unreadMessages',
            'recentConversations'
        ));
    }

    public function updateStatus(): RedirectResponse
    {
        $setting = AdminSetting::firstOrCreate(
            ['id' => 1],
            ['is_online' => false]
        );

        $setting->is_online = !$setting->is_online;
        $setting->status_changed_at = now();
        $setting->save();

        $status = $setting->is_online ? 'Online' : 'Offline';

        return back()->with(
            'success',
            'Status admin berhasil diubah menjadi ' . $status . '.'
        );
    }
}
