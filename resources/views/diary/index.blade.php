@extends('layouts.app')
 
@section('title', 'Diary')
 
@section('content')
 
{{-- HERO: gaya sama seperti Home --}}
<section class="hero diary-hero container">
    <div class="hero-copy">
        <span class="eyebrow">✦ RUANG CERITA PRIBADI</span>
 
        <h1>
            Setiap hari punya cerita untuk
            <span class="gradient-text">dikenang.</span>
        </h1>
 
        <p class="lead">
            Tempat menyimpan cerita, pengalaman, dan kenangan hidupku.
            Setiap pengalaman punya pelajaran.
        </p>
 
        <div class="button-row">
            <a href="#tulis-catatan" class="btn btn-primary">Tulis cerita ↗</a>
            <a href="#daftar-catatan" class="btn btn-quiet">Baca catatanku</a>
        </div>
 
        <p class="hero-note">🌙 Tidak harus sempurna, yang penting jujur.</p>
    </div>
 
    <div class="hero-visual" aria-hidden="true">
        <div class="orbit orbit-one"></div>
 
        <div class="profile-card">
            <div class="profile-photo">
                <span class="diary-book">📖</span>
            </div>
 
            <div class="profile-caption">
                <span class="status-dot"></span>
                <div>
                    <strong>My Diary</strong>
                    <small>{{ $diaries->count() }} cerita tersimpan</small>
                </div>
            </div>
        </div>
 
        <span class="floating-tag tag-top">✍️ Tulis</span>
        <span class="floating-tag tag-bottom">🌱 Refleksi</span>
    </div>
</section>
 
{{-- PESAN --}}
@if (session('success') || $errors->any())
    <div class="container">
        @if (session('success'))
            <div class="diary-alert" role="status">✓ {{ session('success') }}</div>
        @endif
 
        @if ($errors->any())
            <div class="diary-alert diary-alert-error" role="alert">
                <div>
                    <strong>Periksa kembali isianmu:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </div>
@endif
 
{{-- FORM TULIS CATATAN --}}
<section class="container section diary-write" id="tulis-catatan">
    <div class="section-heading">
        <div>
            <span class="eyebrow">TULIS CERITA BARU</span>
            <h2>Luangkan waktu untuk hari ini.</h2>
        </div>
        <p>Catat apa yang kamu alami, rasakan, dan pelajari.</p>
    </div>
 
    <div class="panel diary-panel">
        <form action="{{ route('diary.store') }}" method="POST" class="diary-form">
            @csrf
 
            <div class="diary-form-grid">
                <div class="diary-field">
                    <label for="judul">Judul catatan</label>
                    <input type="text" id="judul" name="judul"
                           value="{{ old('judul') }}"
                           placeholder="Contoh: Hari yang menyenangkan"
                           maxlength="255" required>
                </div>
 
                <div class="diary-field">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" id="tanggal" name="tanggal"
                           value="{{ old('tanggal', date('Y-m-d')) }}" required>
                </div>
            </div>
 
            <div class="diary-field">
                <label for="isi">Cerita hari ini</label>
                <textarea id="isi" name="isi" required
                          placeholder="Ceritakan pengalamanmu hari ini...">{{ old('isi') }}</textarea>
            </div>
 
            <div class="diary-form-footer">
                <p class="diary-hint">✨ Tidak harus sempurna, yang penting jujur.</p>
                <button type="submit" class="btn btn-primary">＋ Simpan catatan</button>
            </div>
        </form>
    </div>
</section>
 
{{-- DAFTAR CATATAN --}}
<section class="container section" id="daftar-catatan">
    <div class="section-heading">
        <div>
            <span class="eyebrow">ARSIP</span>
            <h2>Catatan kehidupanku.</h2>
        </div>
        <span class="pill">{{ $diaries->count() }} catatan</span>
    </div>
 
    @if ($diaries->isNotEmpty())
        <div class="diary-list">
            @foreach ($diaries as $diary)
                <article class="diary-entry">
                    <div class="diary-entry-top">
                        <div>
                            <span class="diary-date">
                                ◷ {{ \Carbon\Carbon::parse($diary->tanggal)->translatedFormat('d F Y') }}
                            </span>
                            <h3>{{ $diary->judul }}</h3>
                        </div>
                    </div>
 
                    <div class="diary-entry-content">{{ $diary->isi }}</div>
 
                    <div class="diary-entry-actions">
                        <a href="{{ route('diary.edit', $diary) }}" class="btn btn-quiet btn-sm">
                            ✎ Edit
                        </a>
 
                        <form action="{{ route('diary.destroy', $diary) }}" method="POST"
                              onsubmit="return confirm('Yakin ingin menghapus catatan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">🗑 Hapus</button>
                        </form>
                    </div>
                </article>
            @endforeach
        </div>
    @else
        <div class="diary-empty">
            <div class="diary-empty-icon">📔</div>
            <h3>Belum ada cerita di sini</h3>
            <p>
                Setiap perjalanan dimulai dari satu langkah.
                Tulis catatan pertamamu dan simpan kenangan hari ini.
            </p>
        </div>
    @endif
</section>
 
@endsection