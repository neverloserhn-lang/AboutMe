# About Me (Laravel 12 + Vite)

Website multi halaman dengan tema gelap-terang.

| Halaman      | URL         | File Blade                          |
|--------------|-------------|-------------------------------------|
| Beranda      | `/`         | `resources/views/home.blade.php`    |
| Tentang      | `/tentang`  | `resources/views/tentang.blade.php` |
| Visi & Misi  | `/visi-misi`| `resources/views/visi.blade.php`    |
| Keahlian     | `/keahlian` | `resources/views/keahlian.blade.php`|
| Proyek       | `/proyek`   | `resources/views/proyek.blade.php`  |
| Kontak       | `/kontak`   | `resources/views/kontak.blade.php`  |

Kerangka bersama ada di `resources/views/layouts/app.blade.php`, `partials/header`, dan `partials/footer`.

## Kebutuhan
PHP 8.2 atau lebih baru, Composer, dan Node.js 18 atau lebih baru (Laragon sudah menyediakan ketiganya).

## Cara menjalankan

Cara cepat di Windows/Laragon: klik dua kali **`setup.bat`**.

Atau manual, di Terminal Laragon:

```bash
composer install
copy .env.example .env
php artisan key:generate
npm install
```

Lalu buka **dua terminal**:

```bash
php artisan serve     # terminal 1
npm run dev           # terminal 2
```

Buka http://127.0.0.1:8000. Biarkan kedua terminal tetap terbuka.
Alternatif satu terminal: `composer run dev`.

Untuk produksi, jalankan `npm run build` sekali. Tanpa `npm run dev` atau `npm run build`,
halaman akan error "Vite manifest not found".

## Mengganti isi
Semua teks (nama, tentang, visi, misi, keahlian, proyek, kontak) ada di **`config/profile.php`**.
Jalankan `php artisan config:clear` bila perubahan belum muncul.

## Menambah halaman baru
1. Buat `resources/views/galeri.blade.php` (salin salah satu halaman sebagai contoh).
2. Tambah di `routes/web.php`: `Route::view('/galeri', 'galeri')->name('galeri');`
3. Tambah satu baris di array `$links` pada `resources/views/partials/header.blade.php`.

## Tema
Warna ada di bagian atas `resources/css/app.css`. Pilihan tema pengunjung disimpan di `localStorage`.
