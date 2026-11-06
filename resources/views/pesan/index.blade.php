@extends('layouts.app')

@section('title', 'Kirim Pesan')

@section('content')

<section class="container narrow-content msg-wrap">
    <div class="panel msg-card">

        <div class="msg-card-head">
            <span class="msg-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 11.5a8.4 8.4 0 0 1-9 8.4 8.9 8.9 0 0 1-3.6-.8L3 21l1.9-5.1A8.4 8.4 0 1 1 21 11.5z"/>
                </svg>
            </span>
            <h1>Kirim Pesan</h1>
        </div>

        <p class="msg-card-sub">
            Punya pertanyaan atau ingin memberikan semangat? Tinggalkan pesan di sini!
        </p>

        @if ($errors->any())
            <div class="contact-alert contact-alert-error" role="alert">
                <strong>Periksa kembali isianmu:</strong>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('pesan.store') }}" method="POST" class="contact-form">
            @csrf

            <div class="contact-field">
                <label for="nama">Nama Pengirim</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                       placeholder="Masukkan nama kamu" maxlength="80" autocomplete="name" required>
            </div>

            <div class="contact-field">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                       placeholder="nama@email.com" maxlength="120" autocomplete="email" required>
            </div>

            <div class="contact-field">
                <label for="body">Isi Pesan</label>
                <textarea id="body" name="body" rows="5" maxlength="2000"
                          placeholder="Tulis pesan kamu di sini..." required>{{ old('body') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary msg-submit">
                <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path d="M22 2 11 13"/><path d="M22 2 15 22l-4-9-9-4 20-7z"/>
                </svg>
                Kirim Pesan
            </button>
        </form>
    </div>
</section>

@endsection
