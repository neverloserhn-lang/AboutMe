@extends('layouts.app')

@section('title', 'Progress')

@section('content')

<section class="progress-page">

    <!-- HERO -->
    <div class="page-hero container progress-hero">
        <span class="eyebrow">06 · PERJALANAN DIRI</span>

        <h1>
            Bertumbuh sedikit demi sedikit,
            <span class="gradient-text">menjadi lebih baik.</span>
        </h1>

        <p>
            Setiap pengalaman membawa pelajaran. Di sini, aku mencatat
            perkembangan, pencapaian, dan hal-hal yang masih ingin diperbaiki.
        </p>
    </div>

    <div class="container progress-container">

        <!-- OVERVIEW -->
        <section class="progress-overview-card">

            <div class="overview-top">
                <div>
                    <span class="section-label">MY DEVELOPMENT</span>
                    <h2>Perjalanan pengembangan diri</h2>
                    <p>Gambaran perkembangan dari proses yang sedang dijalani.</p>
                </div>

                <div class="overview-icon">✦</div>
            </div>

            <div class="overall-progress">

                <div class="overall-number">
                    <div>
                        <span class="muted-text">Perkembangan keseluruhan</span>
                        <h3>65<span>%</span></h3>
                    </div>

                    <span class="status-pill">
                        <span class="status-dot"></span>
                        Dalam proses
                    </span>
                </div>

                <div class="main-progress-track">
                    <div class="main-progress-fill"></div>
                </div>

                <div class="progress-scale">
                    <span>Mulai berkembang</span>
                    <span>Terus bertumbuh</span>
                </div>

                <p class="progress-note">
                    *Persentase ini merupakan ilustrasi dan dapat disesuaikan
                    dengan perkembangan sebenarnya.
                </p>

            </div>
        </section>

        <!-- STATISTICS -->
        <section class="progress-stats">

            <div class="stat-card">
                <div class="stat-icon blue">✧</div>
                <span>Bidang pengembangan</span>
                <h3>04</h3>
                <small>Area yang sedang dikembangkan</small>
            </div>

            <div class="stat-card">
                <div class="stat-icon purple">✓</div>
                <span>Pengalaman baru</span>
                <h3>03</h3>
                <small>Contoh pengalaman yang dicatat</small>
            </div>

            <div class="stat-card">
                <div class="stat-icon orange">↗</div>
                <span>Status perjalanan</span>
                <h3>Aktif</h3>
                <small>Masih terus belajar dan berkembang</small>
            </div>

        </section>

        <!-- DEVELOPMENT AREAS -->
        <section class="development-section">

            <div class="section-heading">
                <div>
                    <span class="section-label">GROWTH TRACKER</span>
                    <h2>Area perkembangan</h2>
                    <p>Beberapa bidang yang menjadi bagian dari proses pengembangan diri.</p>
                </div>
            </div>

            <div class="development-grid">

                <div class="development-card">
                    <div class="development-card-top">
                        <div class="development-icon blue">📚</div>
                        <span class="development-percent">75%</span>
                    </div>

                    <h3>Pengetahuan</h3>
                    <p>
                        Memperluas wawasan melalui pembelajaran, membaca,
                        dan mencari informasi baru.
                    </p>

                    <div class="small-progress-track">
                        <div style="width: 75%"></div>
                    </div>

                    <span class="development-status">Terus dikembangkan</span>
                </div>

                <div class="development-card">
                    <div class="development-card-top">
                        <div class="development-icon purple">💻</div>
                        <span class="development-percent">60%</span>
                    </div>

                    <h3>Keterampilan</h3>
                    <p>
                        Mempelajari teknologi, mencoba proyek sederhana,
                        dan meningkatkan kemampuan praktis.
                    </p>

                    <div class="small-progress-track">
                        <div style="width: 60%"></div>
                    </div>

                    <span class="development-status">Dalam perkembangan</span>
                </div>

                <div class="development-card">
                    <div class="development-card-top">
                        <div class="development-icon orange">⏳</div>
                        <span class="development-percent">50%</span>
                    </div>

                    <h3>Manajemen waktu</h3>
                    <p>
                        Belajar mengatur prioritas, menyelesaikan tugas,
                        dan menyeimbangkan aktivitas sehari-hari.
                    </p>

                    <div class="small-progress-track">
                        <div style="width: 50%"></div>
                    </div>

                    <span class="development-status">Perlu ditingkatkan</span>
                </div>

                <div class="development-card">
                    <div class="development-card-top">
                        <div class="development-icon green">🌱</div>
                        <span class="development-percent">70%</span>
                    </div>

                    <h3>Kepercayaan diri</h3>
                    <p>
                        Berani mencoba hal baru, menyampaikan pendapat,
                        dan belajar menghadapi tantangan.
                    </p>

                    <div class="small-progress-track">
                        <div style="width: 70%"></div>
                    </div>

                    <span class="development-status">Terus dilatih</span>
                </div>

            </div>
        </section>

        <!-- TIMELINE -->
        <section class="timeline-section">

            <div class="section-heading">
                <div>
                    <span class="section-label">MY JOURNEY</span>
                    <h2>Catatan perjalanan</h2>
                    <p>Contoh tahapan dan pengalaman dalam proses pengembangan diri.</p>
                </div>
            </div>

            <div class="timeline">

                <div class="timeline-item">
                    <div class="timeline-marker completed">✓</div>
                    <div class="timeline-content">
                        <span class="timeline-date">TAHAP 01</span>
                        <h3>Memulai proses belajar</h3>
                        <p>
                            Mulai mengenali kemampuan diri dan menentukan
                            hal-hal yang ingin dipelajari.
                        </p>
                        <span class="timeline-tag">Tahap awal</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-marker completed">✓</div>
                    <div class="timeline-content">
                        <span class="timeline-date">TAHAP 02</span>
                        <h3>Mencoba pengalaman baru</h3>
                        <p>
                            Mulai mengeksplorasi keterampilan, mengerjakan
                            proyek, dan mempelajari hal baru.
                        </p>
                        <span class="timeline-tag">Pengalaman</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-marker current">●</div>
                    <div class="timeline-content">
                        <span class="timeline-date">TAHAP 03</span>
                        <h3>Meningkatkan kemampuan</h3>
                        <p>
                            Berusaha memperdalam pengetahuan dan memperbaiki
                            kemampuan yang masih perlu ditingkatkan.
                        </p>
                        <span class="timeline-tag current-tag">Sedang dijalani</span>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-marker upcoming">04</div>
                    <div class="timeline-content">
                        <span class="timeline-date">TAHAP SELANJUTNYA</span>
                        <h3>Mengevaluasi dan berkembang</h3>
                        <p>
                            Meninjau hasil yang telah dicapai dan menentukan
                            langkah pengembangan berikutnya.
                        </p>
                        <span class="timeline-tag">Berikutnya</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- REFLECTION -->
        <section class="reflection-card">
            <div class="reflection-decoration">“</div>

            <span class="section-label">REFLEKSI DIRI</span>

            <h2>
                Tidak harus selalu lebih cepat,
                yang penting tidak berhenti belajar.
            </h2>

            <p>
                Aku menyadari bahwa perkembangan diri tidak selalu berjalan
                sesuai rencana. Ada kalanya berhasil, ada juga saat harus
                mengulang dan memperbaiki kesalahan. Bagiku, setiap proses
                tetap memiliki arti selama ada kemauan untuk terus bertumbuh.
            </p>

            <span class="reflection-signature">— Sebuah perjalanan yang masih berlangsung.</span>
        </section>

    </div>
</section>

@endsection
