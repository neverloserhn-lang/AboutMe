<?php

namespace App\Services;

class RuleBasedAssistant
{
    public function reply(string $message): string
    {
        // Mengubah pesan menjadi huruf kecil
        $message = mb_strtolower(trim($message));

        // Daftar aturan jawaban otomatis
        $rules = [
            [
                'keywords' => ['halo', 'hai', 'hello', 'selamat pagi', 'selamat siang', 'selamat sore', 'selamat malam'],
                'reply' => 'Halo! Selamat datang di AboutMe. Ada yang bisa saya bantu?'
            ],
            [
                'keywords' => ['siapa pemilik', 'siapa pembuat', 'siapa yang membuat'],
                'reply' => 'Website AboutMe merupakan website pribadi yang dibuat untuk memperkenalkan identitas, tujuan, dan perjalanan pengembangan diri pemiliknya.'
            ],
            [
                'keywords' => ['tentang aboutme', 'apa itu aboutme', 'tentang website'],
                'reply' => 'AboutMe adalah website pribadi yang berisi informasi identitas, tentang saya, visi, misi, target, dan perkembangan diri.'
            ],
            [
                'keywords' => ['visi'],
                'reply' => 'Visi merupakan gambaran tujuan jangka panjang yang ingin dicapai. Kamu dapat melihat halaman Visi pada website AboutMe untuk informasi lebih lanjut.'
            ],
            [
                'keywords' => ['misi'],
                'reply' => 'Misi merupakan langkah atau tindakan yang dilakukan untuk mewujudkan visi. Silakan kunjungi halaman Misi pada website AboutMe.'
            ],
            [
                'keywords' => ['target', 'tujuan'],
                'reply' => 'Target merupakan hal yang ingin dicapai dalam jangka waktu tertentu. Kamu dapat melihat halaman Target untuk mengetahui informasi lebih lanjut.'
            ],
            [
                'keywords' => ['progress', 'perkembangan'],
                'reply' => 'Halaman Progress berisi perkembangan dalam proses mencapai tujuan dan meningkatkan kemampuan diri.'
            ],
            [
                'keywords' => ['terima kasih', 'makasih', 'thanks'],
                'reply' => 'Sama-sama! Senang bisa membantu. Semoga informasi yang diberikan bermanfaat.'
            ],
            [
                'keywords' => ['kontak', 'hubungi'],
                'reply' => 'Kamu dapat melihat halaman Kontak pada website AboutMe untuk mengetahui informasi komunikasi yang tersedia.'
            ],
        ];

        // Memeriksa setiap aturan
        foreach ($rules as $rule) {
            foreach ($rule['keywords'] as $keyword) {
                if (str_contains($message, $keyword)) {
                    return $rule['reply'];
                }
            }
        }

        // Jawaban jika tidak ada kata kunci yang cocok
        return 'Terima kasih atas pesanmu. Maaf, saya belum dapat memahami pertanyaan tersebut. Pesanmu sudah diterima dan dapat ditinjau oleh admin.';
    }
}
