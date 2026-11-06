
@extends('layouts.app')

@section('title', 'Kotak Masuk')

@section('content')

<section class="container page-hero">
    <span class="eyebrow">✦ ADMIN</span>
    <h1>Kotak <span class="gradient-text">masuk.</span></h1>
    <p>Pesan dari pengunjung website. Klik salah satu untuk membaca dan membalas.</p>

    <form action="{{ route('admin.logout') }}" method="POST" style="margin-top:18px">
        @csrf
        <button type="submit" class="btn btn-quiet btn-sm" style="cursor:pointer;font-family:inherit">
            Keluar
        </button>
    </form>
</section>

<section class="container narrow-content">

    @if (session('success'))
        <div class="contact-alert" role="status">
            ✓ {{ session('success') }}
        </div>
    @endif

    @if ($conversations->isNotEmpty())
        <div class="inbox-list">

            @foreach ($conversations as $conversation)
                @php
                    $last = $conversation->messages->sortByDesc('created_at')->first();
                    $waiting = $last && $last->sender !== 'admin';
                @endphp

                <div class="inbox-item">

                    <a href="{{ route('admin.pesan.show', $conversation->id) }}"
                       style="display:flex;align-items:center;gap:14px;flex:1;min-width:0;color:inherit;text-decoration:none;">

                        <span class="inbox-avatar" aria-hidden="true">
                            {{ strtoupper(mb_substr($conversation->nama, 0, 1)) }}
                        </span>

                        <span class="inbox-body" style="min-width:0;flex:1;">
                            <strong>{{ $conversation->nama }}</strong>
                            <small>{{ $conversation->email }}</small>

                            @if ($last)
                                <p class="inbox-preview">{{ $last->body }}</p>
                            @endif
                        </span>

                        <span class="inbox-meta">
                            @if ($last)
                                <time>{{ $last->created_at->diffForHumans() }}</time>
                            @endif

                            @if ($waiting)
                                <span class="pill">Menunggu balasan</span>
                            @endif
                        </span>

                    </a>

                    <form action="{{ route('admin.pesan.destroy', $conversation->id) }}"
                          method="POST"
                          onsubmit="return confirm('Apakah kamu yakin ingin menghapus percakapan ini beserta seluruh pesannya?')"
                          style="margin-left:10px;">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-quiet btn-sm"
                                style="cursor:pointer;font-family:inherit;color:#dc2626;">
                            🗑 Hapus
                        </button>
                    </form>

                </div>
            @endforeach

        </div>
    @else
        <div class="inbox-empty">
            <div class="inbox-empty-icon">📭</div>
            <h3>Belum ada pesan masuk</h3>
            <p>Pesan dari halaman Kontak akan muncul di sini.</p>
        </div>
    @endif

</section>


<style>
/* Susunan utama setiap percakapan */
.inbox-list .inbox-item {
    display: flex;
    align-items: center;
    gap: 14px;
    width: 100%;
    box-sizing: border-box;
    min-height: 100px;
    padding: 16px;
}

/* Area yang bisa diklik untuk membuka percakapan */
.inbox-list .inbox-item > a {
    display: flex;
    align-items: center;
    gap: 14px;
    flex: 1;
    min-width: 0;
    color: inherit;
    text-decoration: none;
}

/* Avatar */
.inbox-list .inbox-avatar {
    flex: 0 0 44px;
    width: 44px;
    height: 44px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Informasi pengunjung */
.inbox-list .inbox-body {
    display: flex;
    flex-direction: column;
    flex: 1;
    min-width: 0;
    gap: 4px;
}

.inbox-list .inbox-body strong,
.inbox-list .inbox-body small,
.inbox-list .inbox-preview {
    display: block;
    overflow-wrap: anywhere;
}

.inbox-list .inbox-preview {
    margin: 4px 0 0;
}

/* Waktu dan status pesan */
.inbox-list .inbox-meta {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 7px;
    flex-shrink: 0;
}

/* Tombol hapus */
.inbox-list .inbox-item > form {
    flex-shrink: 0;
    margin-left: 4px !important;
}

.inbox-list .inbox-item > form button {
    white-space: nowrap;
}

/* Tampilan HP */
@media (max-width: 600px) {
    .inbox-list .inbox-item {
        flex-wrap: wrap;
        padding: 12px;
    }

    .inbox-list .inbox-item > a {
        flex-wrap: wrap;
    }

    .inbox-list .inbox-meta {
        align-items: flex-start;
    }
}
</style>

@endsection
