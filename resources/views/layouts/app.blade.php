<!DOCTYPE html>
<html lang="id" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#f5f7ff">

    <title>@yield('title', 'AboutMe Pelajar') | AboutMe</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

<header class="site-header">
    <nav class="navbar container">

        {{-- LOGO --}}
        <a class="brand" href="{{ route('home') }}">
            <img
                src="{{ asset('images/profile.jpg') }}"
                alt="Avatar AboutMe"
                class="nav-avatar"
            >

            <span>
                About<span class="brand-accent">Me</span>
                <small data-i18n="brand_subtitle">Ruang tumbuh pelajar</small>
            </span>
        </a>

        {{-- TOMBOL MENU MOBILE --}}
        <button
            class="menu-toggle"
            id="menuToggle"
            aria-label="Buka navigasi"
            aria-expanded="false"
            type="button"
        >
            ☰
        </button>

        {{-- NAVIGASI --}}
        <div class="nav-links" id="navLinks">

            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'active' : '' }}"
               data-i18n="home">Home</a>

            <a href="{{ route('identitas') }}"
               class="{{ request()->routeIs('identitas') ? 'active' : '' }}"
               data-i18n="identitas">Identitas</a>

            <a href="{{ route('tentang') }}"
               class="{{ request()->routeIs('tentang') ? 'active' : '' }}"
               data-i18n="tentang">Tentang Saya</a>

            <a href="{{ route('visi') }}"
               class="{{ request()->routeIs('visi') ? 'active' : '' }}"
               data-i18n="visi">Visi</a>

            <a href="{{ route('misi') }}"
               class="{{ request()->routeIs('misi') ? 'active' : '' }}"
               data-i18n="misi">Misi</a>

            <a href="{{ route('target') }}"
               class="{{ request()->routeIs('target') ? 'active' : '' }}"
               data-i18n="target">Target</a>

            <a href="{{ route('pendidikan') }}"
               class="{{ request()->routeIs('pendidikan') ? 'active' : '' }}"
               data-i18n="pendidikan">
               Pendidikan
             </a>
            <a href="{{ route('progress') }}"
               class="{{ request()->routeIs('progress') ? 'active' : '' }}"
               data-i18n="progress">Progress</a>

            <a href="{{ route('kontak') }}"
               class="{{ request()->routeIs('kontak') ? 'active' : '' }}"
               data-i18n="kontak">Kontak</a>

            {{-- DROPDOWN: Diary, Pesan, Inbox Admin --}}
            
            @php
                $moreActive = request()->routeIs('diary.*')
                    || request()->routeIs('pesan.*')
                    || request()->routeIs('admin.*');
            @endphp
 
            <div class="nav-dropdown" id="navDropdown">
                <button
                    type="button"
                    class="nav-dropdown-toggle {{ $moreActive ? 'active' : '' }}"
                    id="navDropdownToggle"
                    aria-haspopup="true"
                    aria-expanded="false"
                    aria-controls="navDropdownMenu"
                >
                    <span data-i18n="more">Lainnya</span>
                    <svg class="chevron" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2.5"
                         stroke-linecap="round" stroke-linejoin="round"
                         aria-hidden="true">
                        <path d="m6 9 6 6 6-6"/>
                    </svg>
                </button>
 
                <div class="nav-dropdown-menu" id="navDropdownMenu" role="menu">
 
                    <a href="{{ route('diary.index') }}"
                       role="menuitem"
                       class="{{ request()->routeIs('diary.*') ? 'active' : '' }}"
                       data-i18n="diary">Diary</a>
 
                    <a href="{{ route('pesan.index') }}"
                       role="menuitem"
                       class="{{ request()->routeIs('pesan.*') && !request()->routeIs('admin.pesan.*') ? 'active' : '' }}"
                       data-i18n="pesan">Pesan</a>
 
                    <a href="{{ route('admin.login') }}"
                       role="menuitem"
                       class="{{ request()->routeIs('admin.*') ? 'active' : '' }}"
                       data-i18n="inbox">
                        <span>✉</span> Inbox Admin
                    </a>
 
                </div>
            </div>

            {{-- TOMBOL BAHASA --}}
            <button
                class="language-toggle"
                id="languageToggle"
                type="button"
                aria-label="Ganti bahasa"
                title="Switch to English"
            >
                EN
            </button>

            {{-- TOMBOL TEMA --}}
            <button
                class="theme-toggle"
                id="themeToggle"
                type="button"
                aria-label="Ganti tema"
                title="Ganti tema"
            >
                ☾
            </button>

        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="footer">
    <div class="container footer-inner">

        <p>
            © {{ date('Y') }} AboutMe ·
            <span data-i18n="footer">
                Dibuat sebagai ruang belajar dan pengembangan diri.
            </span>
        </p>

        <a href="{{ route('kontak') }}" data-i18n="footer_link">
            Mari terhubung ↗
        </a>

    </div>
</footer>

</body>
</html>