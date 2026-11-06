
<?php

use App\Http\Controllers\PesanController;
use App\Http\Controllers\Admin\PesanController as AdminPesanController;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\DiaryController;
use Illuminate\Support\Facades\Route;

// Halaman Statis Publik
Route::view('/', 'home')->name('home');
Route::view('/identitas', 'identitas')->name('identitas');
Route::view('/tentang-saya', 'tentang-saya')->name('tentang');
Route::view('/visi', 'visi')->name('visi');
Route::view('/misi', 'misi')->name('misi');
Route::view('/target', 'target')->name('target');
Route::view('/pendidikan', 'pendidikan')->name('pendidikan');
Route::view('/progress', 'progress')->name('progress');
Route::view('/kontak', 'kontak')->name('kontak');

// Fitur Diary / Catatan
Route::get('/diary', [DiaryController::class, 'index'])->name('diary.index');
Route::post('/diary', [DiaryController::class, 'store'])->name('diary.store');
Route::get('/diary/{diary}/edit', [DiaryController::class, 'edit'])->name('diary.edit');
Route::put('/diary/{diary}', [DiaryController::class, 'update'])->name('diary.update');
Route::delete('/diary/{diary}', [DiaryController::class, 'destroy'])->name('diary.destroy');

// Pengunjung
Route::get('/pesan', [PesanController::class, 'index'])->name('pesan.index');

Route::post('/pesan/kirim', [PesanController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('pesan.store');

Route::get('/pesan/{token}', [PesanController::class, 'show'])->name('pesan.show');

Route::post('/pesan/{token}/balas', [PesanController::class, 'send'])
    ->middleware('throttle:10,1')
    ->name('pesan.send');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [AdminAuthController::class, 'showLogin'])->name('login');

    Route::post('/login', [AdminAuthController::class, 'login'])
        ->middleware('throttle:5,1')
        ->name('login.submit');

    Route::middleware('admin')->group(function () {

        Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

        // Dashboard Admin
        Route::get('/dashboard', [AdminSettingController::class, 'index'])
        ->name('dashboard');
        
        // Mengubah status admin Online / Offline
        Route::post('/status', [AdminSettingController::class, 'updateStatus'])
        ->name('status.update');

        Route::get('/pesan', [AdminPesanController::class, 'index'])->name('pesan.index');

        Route::get('/pesan/{id}', [AdminPesanController::class, 'show'])->name('pesan.show');

        Route::post('/pesan/{id}/balas', [AdminPesanController::class, 'reply'])->name('pesan.reply');
        Route::post('/pesan/{id}/ai-saran', [AdminPesanController::class, 'aiSuggest'])
        ->name('pesan.ai-suggest');

        // Hapus percakapan
        Route::delete('/pesan/{id}', [AdminPesanController::class, 'destroy'])->name('pesan.destroy');
    });
});
