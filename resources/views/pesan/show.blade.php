@extends('layouts.app')

@section('title', 'Percakapan')

@section('content')

<section class="container page-hero">
    <span class="eyebrow">✦ PERCAKAPAN</span>
    <h1>Halo, <span class="gradient-text">{{ $conversation->nama }}.</span></h1>
    <p>Simpan alamat halaman ini supaya kamu bisa kembali membaca balasan.</p>
</section>

<section class="container narrow-content">

    @if (session('success'))
        <div class="contact-alert" role="status">✓ {{ session('success') }}</div>
    @endif

    @include('partials.chat', [
        'conversation' => $conversation,
        'messages'     => $messages,
        'action'       => route('pesan.send', $conversation->access_token),
        'placeholder'  => 'Tulis balasan...',
    ])

</section>

@endsection