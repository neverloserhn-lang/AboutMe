
@extends('layouts.app')

@section('title', 'Pesan dari ' . $conversation->nama)

@section('content')

<section class="container page-hero">
    <a href="{{ route('admin.pesan.index') }}" class="card-link">
        ← Kembali ke kotak masuk
    </a>

    <h1 style="margin-top:22px">{{ $conversation->nama }}</h1>

    <p>
        <a class="card-link" href="mailto:{{ $conversation->email }}">
            {{ $conversation->email }}
        </a>
    </p>
</section>

<section class="container narrow-content">

    @if (session('success'))
        <div class="contact-alert" role="status">
            ✓ {{ session('success') }}
        </div>
    @endif

    @if (session('ai_error'))
        <div class="contact-alert" role="alert">
            {{ session('ai_error') }}
        </div>
    @endif

    

    {{-- Percakapan pengunjung --}}
    @include('partials.chat', [
        'conversation' => $conversation,
        'messages'     => $conversation->messages,
        'action'       => route('admin.pesan.reply', $conversation->id),
        'ownerLabel'   => 'Anda · Pemilik Website',
        'placeholder'  => 'Tulis balasan untuk ' . $conversation->nama . '...',
    ])

</section>

<script>
function useGeminiSuggestion() {
    const suggestion = document.getElementById('geminiSuggestion');
    const chatInput = document.getElementById('cwInput');

    if (!suggestion || !chatInput) {
        alert('Kolom balasan tidak ditemukan.');
        return;
    }

    chatInput.value = suggestion.value;
    chatInput.dispatchEvent(new Event('input', { bubbles: true }));
    chatInput.focus();
}
</script>

@endsection
