<?php

/*
|--------------------------------------------------------------------------
| Data profil "About Me"
|--------------------------------------------------------------------------
| Ubah isi file ini untuk mempersonalisasi seluruh website.
| Setelah mengubah, jalankan: php artisan config:clear
*/

return [
    'name'     => 'Nama Kamu',
    'initials' => 'NK',
    'role'     => 'Web developer dan pembelajar seumur hidup',
    'tagline'  => 'Saya membangun website yang rapi, cepat, dan nyaman dipakai, sambil terus belajar hal baru setiap minggu.',
    'location' => 'Jakarta, Indonesia',
    'email'    => 'halo@contoh.com',
    'status'   => 'Terbuka untuk proyek baru',

    'socials' => [
        ['label' => 'GitHub',    'url' => 'https://github.com/'],
        ['label' => 'LinkedIn',  'url' => 'https://linkedin.com/'],
        ['label' => 'Instagram', 'url' => 'https://instagram.com/'],
    ],

    'facts' => [
        ['value' => '3 tahun',     'label' => 'membangun aplikasi web'],
        ['value' => '12 proyek',   'label' => 'sudah dirilis'],
        ['value' => 'Kopi hitam',  'label' => 'bahan bakar utama'],
    ],

    'about' => [
        'Halo, saya Nama Kamu. Saya mulai tertarik pada dunia web saat pertama kali berhasil mengubah warna tombol di sebuah halaman HTML sederhana. Dari situ rasa penasaran saya tidak pernah berhenti.',
        'Sekarang saya bekerja dengan Laravel dan JavaScript untuk membuat aplikasi yang bermanfaat bagi orang banyak. Saya suka merapikan hal yang berantakan, baik kode, tampilan, maupun alur kerja.',
        'Di luar layar, saya senang membaca buku sejarah, bersepeda di akhir pekan, dan mencoba kedai kopi baru.',
    ],

    'visi' => 'Menjadi pengembang web yang karyanya membuat hidup orang lain lebih mudah, rapi, dan menyenangkan.',

    'misi' => [
        'Membangun aplikasi yang cepat, aman, dan mudah dipakai oleh siapa saja, termasuk pengguna dengan perangkat sederhana.',
        'Menulis kode yang bersih dan terdokumentasi, supaya mudah dilanjutkan oleh orang lain.',
        'Terus belajar dan berbagi ilmu lewat tulisan, diskusi, dan mentoring.',
        'Mengerjakan setiap proyek dengan jujur soal waktu, biaya, dan batas kemampuan.',
    ],

    'values' => [
        ['title' => 'Jujur',     'text' => 'Saya menyampaikan kondisi proyek apa adanya, termasuk kabar yang kurang enak.'],
        ['title' => 'Rapi',      'text' => 'Detail kecil seperti nama variabel dan jarak antar elemen menentukan kenyamanan jangka panjang.'],
        ['title' => 'Bermanfaat', 'text' => 'Fitur dinilai dari seberapa nyata ia membantu pengguna, bukan dari seberapa canggih.'],
    ],

    'timeline' => [
        ['year' => '2025', 'title' => 'Full-stack developer',    'place' => 'Studio Contoh',          'text' => 'Memimpin pengembangan sistem manajemen konten dan dasbor internal.'],
        ['year' => '2023', 'title' => 'Junior web developer',    'place' => 'Agensi Digital Contoh',  'text' => 'Mengerjakan website perusahaan dan toko online dengan Laravel.'],
        ['year' => '2022', 'title' => 'Magang pengembang web',   'place' => 'Startup Contoh',         'text' => 'Belajar alur kerja tim, code review, dan deployment.'],
        ['year' => '2019', 'title' => 'S1 Teknik Informatika',   'place' => 'Universitas Contoh',     'text' => 'Fokus pada rekayasa perangkat lunak dan basis data.'],
    ],

    'skills' => [
        ['group' => 'Backend',     'items' => ['PHP', 'Laravel', 'MySQL', 'REST API', 'Pest dan PHPUnit']],
        ['group' => 'Frontend',    'items' => ['HTML dan CSS', 'JavaScript', 'Blade', 'Tailwind CSS', 'Alpine.js']],
        ['group' => 'Alat kerja',  'items' => ['Git dan GitHub', 'Docker', 'Linux', 'Figma', 'VS Code']],
        ['group' => 'Cara kerja',  'items' => ['Komunikasi jelas', 'Menulis dokumentasi', 'Estimasi waktu', 'Mentoring']],
    ],

    'learning' => ['Livewire', 'TypeScript', 'Desain sistem'],

    'projects' => [
        [
            'title' => 'Toko Kopi Nusantara',
            'year'  => '2025',
            'text'  => 'Toko online dengan keranjang, pembayaran, dan dasbor pesanan untuk pemilik usaha kecil.',
            'tags'  => ['Laravel', 'MySQL', 'Midtrans'],
            'url'   => '#',
        ],
        [
            'title' => 'Catatan Harian',
            'year'  => '2024',
            'text'  => 'Aplikasi jurnal pribadi dengan pencarian cepat, label, dan mode gelap.',
            'tags'  => ['Laravel', 'Alpine.js'],
            'url'   => '#',
        ],
        [
            'title' => 'Jadwal Kelas',
            'year'  => '2024',
            'text'  => 'Sistem penjadwalan untuk sekolah yang mencegah bentrok ruang dan guru secara otomatis.',
            'tags'  => ['PHP', 'MySQL', 'Bootstrap'],
            'url'   => '#',
        ],
        [
            'title' => 'Peta Warung',
            'year'  => '2023',
            'text'  => 'Peta interaktif warung makan lokal lengkap dengan ulasan dari warga sekitar.',
            'tags'  => ['JavaScript', 'Leaflet', 'API'],
            'url'   => '#',
        ],
    ],
];
