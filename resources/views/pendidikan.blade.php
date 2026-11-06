@extends('layouts.app')

@section('content')
<div class="education-page">

    {{-- HERO --}}
    <section class="education-hero">
        <div class="hero-content">
            <span class="education-eyebrow">
                <span class="eyebrow-line"></span>
                {{ __('08 · PERJALANAN BELAJAR') }}
            </span>

            <h1>
                Perjalanan<br>
                <span>Pendidikan.</span>
            </h1>

            <p>
                Setiap jenjang pendidikan memberikan pengalaman,
                pengetahuan, dan pelajaran baru yang membentuk diriku.
            </p>

            <div class="hero-meta">
                <span class="meta-dot"></span>
                Education • Growth • Future
            </div>
        </div>

        <div class="hero-visual">
            <div class="visual-ring ring-one"></div>
            <div class="visual-ring ring-two"></div>

            <div class="visual-center">
                <span class="visual-icon">🎓</span>
                <span class="visual-caption">
                    LEARNING<br>JOURNEY
                </span>
            </div>

            <div class="floating-symbol symbol-one">✦</div>
            <div class="floating-symbol symbol-two">+</div>
            <div class="floating-symbol symbol-three">✧</div>
        </div>

        <div class="hero-bottom-line"></div>
    </section>

    {{-- INTRO --}}
    <section class="education-intro">
        <div class="intro-number">01 / INTRODUCTION</div>

        <div class="intro-content">
            <h2>
                Belajar bukan hanya<br>
                tentang <span>sekolah.</span>
            </h2>

            <p>
                Pendidikan memberiku kesempatan untuk mengenal
                banyak hal, mengembangkan kemampuan, dan
                mempersiapkan masa depan.
            </p>
        </div>
    </section>

    {{-- EDUCATION TIMELINE --}}
    <section class="education-timeline" id="education-timeline">

        <div class="timeline-heading">
            <div>
                <span class="education-eyebrow">
                    EDUCATION HISTORY
                </span>

                <h2>Riwayat Pendidikan</h2>

                <p>
                    Perjalanan pendidikan saya dari waktu ke waktu.
                </p>
            </div>

            <span class="timeline-count">03 STAGES</span>
        </div>

        <div class="timeline">

            {{-- PRIMARY SCHOOL --}}
            <article class="education-card">
                <div class="timeline-marker">
                    <span>01</span>
                </div>

                <div class="education-card-content">
                    <div class="card-top">
                        <span class="education-level">
                            SEKOLAH DASAR
                        </span>

                        <span class="education-status completed">
                            Completed
                        </span>
                    </div>

                    <h3>SD Negeri 01 Cendekia</h3>

                    <span class="education-year">
                        2014 <span>—</span> 2020
                    </span>

                    <p>
                        Memulai perjalanan pendidikan dengan mengenal
                        berbagai pengetahuan dasar, membangun kebiasaan
                        baik, serta belajar berinteraksi dengan lingkungan.
                    </p>

                    <div class="card-footer">
                        <span class="school-icon">🏫</span>
                        <span>Foundation & Discovery</span>
                    </div>
                </div>
            </article>

            {{-- JUNIOR SECONDARY SCHOOL --}}
            <article class="education-card">
                <div class="timeline-marker">
                    <span>02</span>
                </div>

                <div class="education-card-content">
                    <div class="card-top">
                        <span class="education-level">
                            SEKOLAH MENENGAH PERTAMA
                        </span>

                        <span class="education-status completed">
                            Completed
                        </span>
                    </div>

                    <h3>SMP Negeri 02 Cendekia</h3>

                    <span class="education-year">
                        2020 <span>—</span> 2023
                    </span>

                    <p>
                        Mengembangkan kemampuan akademik, mengenali
                        minat dan potensi diri, serta belajar bekerja
                        sama dan menghadapi pengalaman baru.
                    </p>

                    <div class="card-footer">
                        <span class="school-icon">📖</span>
                        <span>Development & Exploration</span>
                    </div>
                </div>
            </article>

            {{-- SENIOR SECONDARY SCHOOL --}}
            <article class="education-card current">
                <div class="timeline-marker">
                    <span>03</span>
                </div>

                <div class="education-card-content">
                    <div class="card-top">
                        <span class="education-level">
                            SEKOLAH MENENGAH ATAS
                        </span>

                        <span class="education-status ongoing">
                            In Progress
                        </span>
                    </div>

                    <h3>SMA Negeri 01 Cendekia</h3>

                    <span class="education-year">
                        2023 <span>—</span> Sekarang
                    </span>

                    <p>
                        Memperluas wawasan, mengembangkan potensi,
                        meningkatkan keterampilan, dan mempersiapkan
                        diri untuk meraih tujuan di masa depan.
                    </p>

                    <div class="card-footer">
                        <span class="school-icon">🎓</span>
                        <span>Growth & Future Preparation</span>
                    </div>
                </div>
            </article>

        </div>
    </section>

    {{-- CLOSING --}}
    <section class="education-closing">
        <div class="closing-decoration">✦</div>

        <span class="education-eyebrow">
            KEEP MOVING FORWARD
        </span>

        <h2>
            Perjalanan masih<br>
            <span>berlanjut.</span>
        </h2>

        <p>
            Pendidikan adalah proses yang terus berjalan.
            Aku ingin terus belajar, mengembangkan kemampuan,
            dan memanfaatkan setiap kesempatan untuk menjadi lebih baik.
        </p>

        <div class="closing-footer">
            <span>ALWAYS LEARNING</span>
            <span>•</span>
            <span>ALWAYS GROWING</span>
        </div>
    </section>

</div>

{{-- SCROLL REVEAL --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
    const elements = document.querySelectorAll(
        '.education-hero, ' +
        '.education-intro, ' +
        '.timeline-heading, ' +
        '.education-card, ' +
        '.education-closing'
    );

    if (!('IntersectionObserver' in window)) {
        elements.forEach(element => {
            element.classList.add('is-visible');
        });

        return;
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15
    });

    elements.forEach(element => {
        observer.observe(element);
    });
});
</script>
@endsection
