@extends('layouts.app')

@section('title', 'Identitas')

@section('content')

<section class="identity-page">

    {{-- HEADER --}}
    <section class="identity-hero container">
        <span class="identity-eyebrow">TENTANG SAYA</span>

        <h1>
            Kenali Lebih Dekat
        </h1>

        <p>
            Sedikit cerita tentang siapa saya, apa yang saya sukai,
            dan perjalanan saya ke depannya.
        </p>
    </section>

    {{-- CONTENT --}}
    <section class="identity-content container">

        {{-- PROFILE CARD --}}
        <aside class="identity-profile">

            <div class="identity-photo">
                <img src="{{ asset('images/profile.jpg') }}"
                     alt="Foto profil Raihan">
            </div>

            <h2>Raihan</h2>

            <p class="identity-role">
                Pelajar · Pembelajar
            </p>

            <span class="identity-status">
                🌱 Sedang bertumbuh
            </span>

            <div class="identity-contact">

                <div class="identity-contact-item">
                    <span class="identity-icon">🎂</span>
                    <span>Pelajar</span>
                </div>

                <div class="identity-contact-item">
                    <span class="identity-icon">📍</span>
                    <span>Indonesia</span>
                </div>

                <div class="identity-contact-item">
                    <span class="identity-icon">🎓</span>
                    <span>SMA Persis Serang</span>
                </div>

                <div class="identity-contact-item">
                    <span class="identity-icon">🌐</span>
                    <span>Indonesia</span>
                </div>

            </div>

        </aside>

        {{-- ABOUT SECTION --}}
        <div class="identity-detail">

            <span class="identity-eyebrow">
                TENTANG DIRIKU
            </span>

            <h2>
                Pelajar yang Selalu Ingin Belajar
            </h2>

            <p>
                Saya adalah seorang pelajar yang memiliki semangat
                untuk terus berkembang dan mempelajari hal-hal baru.
                Saya percaya bahwa setiap pengalaman merupakan
                kesempatan untuk menjadi pribadi yang lebih baik.
            </p>

            <p>
                Saya senang mencoba berbagai hal, mengembangkan
                keterampilan, serta mengeksplorasi ide-ide yang
                dapat memberikan manfaat bagi diri sendiri maupun
                orang lain.
            </p>

            <p>
                Bagi saya, proses belajar bukan hanya tentang
                mendapatkan nilai, tetapi juga tentang membangun
                karakter, kedisiplinan, dan tanggung jawab.
            </p>

            {{-- IDENTITY INFORMATION --}}
            <div class="identity-information">

                <div class="identity-info-card">
                    <span class="identity-info-label">
                        Nama lengkap
                    </span>

                    <h3>Raihan Nur Rachman</h3>
                </div>

                <div class="identity-info-card">
                    <span class="identity-info-label">
                        Status
                    </span>

                    <h3>Pelajar</h3>
                </div>

                <div class="identity-info-card">
                    <span class="identity-info-label">
                        Sekolah
                    </span>

                    <h3>SMA Persis Serang</h3>
                </div>

                <div class="identity-info-card">
                    <span class="identity-info-label">
                        Hal yang disukai
                    </span>

                    <h3>Belajar hal baru dan mencoba ide</h3>
                </div>

                <div class="identity-info-card">
                    <span class="identity-info-label">
                        Nilai yang dipegang
                    </span>

                    <h3>Jujur, disiplin, dan bertanggung jawab</h3>
                </div>

                <div class="identity-info-card">
                    <span class="identity-info-label">
                        Tujuan pribadi
                    </span>

                    <h3>Menjadi pribadi yang lebih baik setiap hari</h3>
                </div>

            </div>

        </div>

    </section>

</section>

@endsection