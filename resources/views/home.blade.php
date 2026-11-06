@extends('layouts.app')

@section('title', 'Home')

@section('content')

<section class="home-hero container">
    <div class="home-copy">
        <span class="home-eyebrow">
            <span class="eyebrow-spark">✦</span>
            HALO, SELAMAT DATANG
        </span>

        <h1>
            Setiap hari adalah kesempatan untuk
            <span class="home-gradient">bertumbuh.</span>
        </h1>

        <p class="home-lead">
            Aku adalah pelajar yang sedang belajar mengenal diri,
            membangun kebiasaan baik, dan mempersiapkan masa depan
            selangkah demi selangkah.
        </p>

        <div class="home-actions">
            <a href="{{ route('tentang') }}" class="home-btn home-btn-primary">
                Kenali saya <span>↗</span>
            </a>

            <a href="{{ route('target') }}" class="home-btn home-btn-secondary">
                Lihat target
            </a>
        </div>

        <div class="home-note">
            <span>🌱</span>
            Tidak harus sempurna, yang penting terus mencoba.
        </div>
    </div>

    <div class="home-art">
        <div class="art-glow"></div>
        <div class="art-grid"></div>

        <div class="art-orbit orbit-a"></div>
        <div class="art-orbit orbit-b"></div>

        <div class="art-profile">
            <div class="art-profile-inner">
                <img
                    src="{{ asset('images/profile.jpg') }}"
                    alt="Foto profil"
                    onerror="this.style.display='none'; this.parentElement.classList.add('image-fallback');"
                >
                <span class="fallback-icon">✦</span>
            </div>
        </div>

        <div class="float-info info-study">
            <div class="info-icon icon-code">〈/〉</div>
            <div class="info-text">
                <small>Sedang Belajar</small>
                <strong>Web Development</strong>
            </div>
        </div>

        <div class="float-info info-status">
            <div class="info-icon icon-school">🎓</div>
            <div class="info-text">
                <small>Status</small>
                <strong>Pelajar Aktif</strong>
            </div>
        </div>

        <div class="float-info info-achievement">
            <div class="info-icon icon-trophy">🏆</div>
            <div class="info-text">
                <small>Perjalanan</small>
                <strong>Terus Bertumbuh</strong>
            </div>
        </div>

        <div class="art-decoration decoration-one">✦</div>
        <div class="art-decoration decoration-two">＋</div>
        <div class="art-decoration decoration-three">✧</div>
    </div>
</section>

<section class="home-journey container">
    <div class="journey-heading">
        <div>
            <span class="home-eyebrow">PERJALANAN DIRI</span>
            <h2>Mulai dari langkah kecil.</h2>
        </div>

        <p>
            Kenali dirimu, tentukan arah, lalu lakukan perubahan
            sedikit demi sedikit.
        </p>
    </div>

    <div class="journey-grid">

        <a href="{{ route('identitas') }}" class="journey-card journey-one">
            <div class="journey-card-top">
                <span class="journey-icon icon-lilac">✦</span>
                <span class="journey-number">01</span>
            </div>
            <span class="journey-label">GET TO KNOW</span>
            <h3>Identitas</h3>
            <p>Kenali diriku dan nilai yang kupegang.</p>
            <span class="journey-link">Buka halaman <b>↗</b></span>
        </a>

        <a href="{{ route('visi') }}" class="journey-card journey-two">
            <div class="journey-card-top">
                <span class="journey-icon icon-blue">◎</span>
                <span class="journey-number">02</span>
            </div>
            <span class="journey-label">FUTURE DIRECTION</span>
            <h3>Visi &amp; Misi</h3>
            <p>Tentukan arah masa depan dan langkahnya.</p>
            <span class="journey-link">Buka halaman <b>↗</b></span>
        </a>

        <a href="{{ route('target') }}" class="journey-card journey-three">
            <div class="journey-card-top">
                <span class="journey-icon icon-peach">↗</span>
                <span class="journey-number">03</span>
            </div>
            <span class="journey-label">MAKE A PLAN</span>
            <h3>Target</h3>
            <p>Susun tujuan yang realistis dan terukur.</p>
            <span class="journey-link">Buka halaman <b>↗</b></span>
        </a>

        <a href="{{ route('progress') }}" class="journey-card journey-four">
            <div class="journey-card-top">
                <span class="journey-icon icon-mint">✓</span>
                <span class="journey-number">04</span>
            </div>
            <span class="journey-label">KEEP IMPROVING</span>
            <h3>Progress</h3>
            <p>Lihat perkembangan dan evaluasi diri.</p>
            <span class="journey-link">Buka halaman <b>↗</b></span>
        </a>

    </div>
</section>

<section class="home-quote container">
    <div class="quote-symbol">“</div>
    <div>
        <span class="home-eyebrow">A LITTLE REMINDER</span>
        <h2>Proses kecil hari ini adalah bagian dari masa depan yang ingin dibangun.</h2>
        <p>Keep learning. Keep growing. Keep moving forward.</p>
    </div>
    <div class="quote-spark">✦</div>
</section>

@endsection
