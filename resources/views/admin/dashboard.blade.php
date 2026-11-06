<!DOCTYPE html>
<html lang="id" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#111629">

    <title>Dashboard Admin - AboutMe</title>
    @vite('resources/js/language.js')

    <script>
        (() => {
            const theme = localStorage.getItem('aboutme-admin-theme') || 'dark';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            color-scheme: dark;
            --bg: #111629;
            --sidebar: #171f33;
            --card: #1d2740;
            --card2: #252f49;
            --border: #35415f;
            --text: #f5f6ff;
            --muted: #aab4d0;
            --primary: #9295ff;
            --purple: #8956e8;
            --blue: #657fff;
            --green: #27c77b;
            --red: #ef626c;
            --shadow: 0 15px 40px rgba(0,0,0,.15);
        }

        html[data-theme="light"] {
            color-scheme: light;
            --bg: #f1f3fb;
            --sidebar: #ffffff;
            --card: #ffffff;
            --card2: #f4f5fc;
            --border: #e0e4f0;
            --text: #18213b;
            --muted: #71809b;
            --primary: #626be9;
            --purple: #8956e8;
            --blue: #657fff;
            --green: #159b61;
            --red: #dc4857;
            --shadow: 0 12px 35px rgba(45,58,100,.07);
        }

        body {
            min-height: 100vh;
            background:
                radial-gradient(circle at 80% 0%, rgba(137,86,232,.10), transparent 30%),
                var(--bg);
            color: var(--text);
            font-family: Arial, Helvetica, sans-serif;
            transition: background .3s, color .3s;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font-family: inherit;
        }

        .layout {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 235px minmax(0, 1fr) 275px;
            gap: 22px;
            max-width: 1700px;
            margin: auto;
            padding: 22px;
        }

        /* SIDEBAR */

        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .side-panel {
            background: var(--sidebar);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 22px 15px;
            box-shadow: var(--shadow);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 3px 8px 25px;
            border-bottom: 1px solid var(--border);
        }

        .profile-photo {
            width: 43px;
            height: 43px;
            border-radius: 13px;
            object-fit: cover;
            border: 2px solid var(--primary);
        }

        .brand h2 {
            font-size: 18px;
            line-height: 1.2;
        }

        .brand h2 span {
            color: var(--primary);
        }

        .brand small {
            color: var(--muted);
            font-size: 10px;
        }

        .side-label {
            color: var(--muted);
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 1.5px;
            padding: 25px 10px 12px;
        }

        .side-menu {
            display: flex;
            flex-direction: column;
            gap: 7px;
        }

        .side-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            border-radius: 11px;
            color: var(--muted);
            font-size: 13px;
            transition: .25s;
        }

        .side-link .symbol {
            width: 22px;
            text-align: center;
            font-size: 17px;
        }

        .side-link:hover,
        .side-link.active {
            color: white;
            background: linear-gradient(110deg, #7053d9, #8a58e8);
            box-shadow: 0 6px 18px rgba(112,83,217,.2);
        }

        .side-link.active {
            font-weight: bold;
        }

        html[data-theme="light"] .side-link:hover,
        html[data-theme="light"] .side-link.active {
            color: white;
        }

        .sidebar-bottom {
            margin-top: auto;
        }

        .theme-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 8px;
            padding: 12px 9px;
            color: var(--muted);
            font-size: 12px;
        }

        .theme-toggle {
            width: 43px;
            height: 26px;
            padding: 3px;
            border: 0;
            border-radius: 20px;
            background: var(--card2);
            cursor: pointer;
        }

        .theme-knob {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: grid;
            place-items: center;
            color: white;
            background: linear-gradient(135deg, #7357df, #a16bfa);
            transition: transform .25s;
            font-size: 12px;
        }

        html[data-theme="light"] .theme-knob {
            transform: translateX(17px);
        }

        .logout-link {
            color: #ef7780;
        }

        .logout-link:hover {
            background: rgba(239,98,108,.1);
        }

        .side-promo {
            text-align: center;
            padding: 22px 14px;
        }

        .promo-icon {
            width: 48px;
            height: 48px;
            display: grid;
            place-items: center;
            margin: auto auto 12px;
            border-radius: 15px;
            color: white;
            background: linear-gradient(135deg, #7053d9, #b05ce7);
            font-size: 23px;
        }

        .side-promo h3 {
            font-size: 14px;
            margin-bottom: 6px;
        }

        .side-promo p {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.7;
        }

        /* MAIN CONTENT */

        .main {
            min-width: 0;
            padding: 3px 0;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 25px;
        }

        .page-title small {
            color: var(--primary);
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 1.5px;
        }

        .page-title h1 {
            font-size: 25px;
            margin-top: 4px;
        }

        .page-title h1 span {
            color: var(--primary);
        }

        .top-actions {
            display: flex;
            gap: 9px;
        }

        .top-button {
            width: 42px;
            height: 42px;
            display: grid;
            place-items: center;
            border: 1px solid var(--border);
            border-radius: 12px;
            background: var(--card);
            color: var(--text);
            font-size: 17px;
            cursor: pointer;
            transition: .2s;
        }

        .top-button:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .welcome {
            position: relative;
            overflow: hidden;
            padding: 25px;
            margin-bottom: 20px;
            border-radius: 19px;
            background: linear-gradient(115deg, #6246cb, #8650d9 65%, #a34ed2);
            color: white;
            box-shadow: 0 12px 30px rgba(105,70,200,.2);
        }

        .welcome::after {
            content: "✦";
            position: absolute;
            right: 28px;
            top: -27px;
            font-size: 120px;
            opacity: .13;
        }

        .welcome small {
            font-size: 11px;
            opacity: .8;
            letter-spacing: 1px;
        }

        .welcome h2 {
            font-size: 22px;
            margin: 8px 0;
        }

        .welcome p {
            font-size: 12px;
            opacity: .85;
        }

        /* STATISTICS */

        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 13px;
            margin-bottom: 20px;
        }

        .stat-card {
            padding: 19px 16px;
            border-radius: 16px;
            background: var(--card);
            border: 1px solid var(--border);
            min-width: 0;
            box-shadow: var(--shadow);
            transition: .25s;
        }

        .stat-card:hover {
            transform: translateY(-4px);
            border-color: var(--primary);
        }

        .stat-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 5px;
        }

        .stat-icon {
            width: 34px;
            height: 34px;
            border-radius: 10px;
            display: grid;
            place-items: center;
            background: rgba(137,86,232,.16);
            color: var(--primary);
            font-size: 17px;
        }

        .stat-card small {
            color: var(--muted);
            font-size: 10px;
        }

        .stat-card h2 {
            font-size: 27px;
            margin-top: 12px;
        }

        .stat-card p {
            color: var(--muted);
            font-size: 10px;
            margin-top: 3px;
        }

        /* CONTENT PANELS */

        .panel {
            padding: 21px;
            border-radius: 18px;
            background: var(--card);
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            margin-bottom: 18px;
        }

        .panel-heading {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            margin-bottom: 17px;
        }

        .panel-heading h3 {
            font-size: 15px;
        }

        .panel-heading a {
            color: var(--primary);
            font-size: 11px;
        }

        .panel-heading a:hover {
            text-decoration: underline;
        }

        /* STATUS */

        .status-box {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 17px;
            border-radius: 14px;
            background: var(--card2);
        }

        .status-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .status-icon {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            font-size: 20px;
            background: rgba(137,86,232,.15);
            color: var(--primary);
        }

        .status-left h4 {
            font-size: 13px;
        }

        .status-left p {
            color: var(--muted);
            font-size: 10px;
            margin-top: 3px;
        }

        .status-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 7px 11px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: bold;
            white-space: nowrap;
        }

        .status-badge.online {
            color: #26c77c;
            background: rgba(39,199,123,.12);
        }

        .status-badge.offline {
            color: #ef777e;
            background: rgba(239,98,108,.12);
        }

        .status-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: currentColor;
        }

        .status-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
            margin-top: 15px;
        }

        .status-note {
            color: var(--muted);
            font-size: 10px;
        }

        .status-button {
            padding: 10px 15px;
            border: 0;
            border-radius: 9px;
            color: white;
            cursor: pointer;
            font-size: 11px;
            font-weight: bold;
            background: linear-gradient(110deg, #6950d8, #9658e5);
            transition: .2s;
        }

        .status-button:hover {
            transform: translateY(-2px);
            filter: brightness(1.12);
        }

        /* RECENT CONVERSATIONS */

        .conversation {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 0;
            border-bottom: 1px solid var(--border);
        }

        .conversation:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .conversation-avatar {
            width: 39px;
            height: 39px;
            flex-shrink: 0;
            display: grid;
            place-items: center;
            border-radius: 12px;
            color: white;
            background: linear-gradient(135deg, #6854d5, #a05bdf);
            font-size: 14px;
            font-weight: bold;
        }

        .conversation-info {
            flex: 1;
            min-width: 0;
        }

        .conversation-info h4 {
            font-size: 12px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .conversation-info p {
            color: var(--muted);
            font-size: 10px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            margin-top: 3px;
        }

        .conversation-time {
            color: var(--muted);
            font-size: 9px;
            white-space: nowrap;
        }

        .empty {
            color: var(--muted);
            text-align: center;
            padding: 25px 10px;
            font-size: 12px;
        }

        /* RIGHT PROFILE */

        .rightbar {
            display: flex;
            flex-direction: column;
            gap: 18px;
        }

        .profile-panel {
            padding: 23px 18px;
            text-align: center;
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 19px;
            box-shadow: var(--shadow);
        }

        .large-photo {
            width: 91px;
            height: 91px;
            padding: 4px;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid var(--primary);
            margin-bottom: 11px;
        }

        .profile-panel h3 {
            font-size: 16px;
        }

        .profile-panel > p {
            color: var(--muted);
            font-size: 10px;
            margin-top: 4px;
        }

        .profile-actions {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 9px;
            margin: 20px 0;
        }

        .profile-action {
            height: 42px;
            display: grid;
            place-items: center;
            border-radius: 10px;
            background: linear-gradient(135deg, #7053d9, #8b55dc);
            color: white;
            font-size: 16px;
            transition: .2s;
        }

        .profile-action:hover {
            transform: translateY(-3px);
        }

        .profile-about {
            border-top: 1px solid var(--border);
            padding-top: 17px;
            text-align: left;
        }

        .profile-about h4 {
            font-size: 12px;
            margin-bottom: 7px;
        }

        .profile-about p {
            color: var(--muted);
            font-size: 10px;
            line-height: 1.8;
        }

        /* RIGHT INFO */

        .right-card {
            padding: 20px;
            border: 1px solid var(--border);
            border-radius: 17px;
            background: var(--card);
            box-shadow: var(--shadow);
        }

        .right-card h3 {
            font-size: 13px;
            margin-bottom: 13px;
        }

        .right-info {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            padding: 9px 0;
            border-bottom: 1px solid var(--border);
            font-size: 11px;
        }

        .right-info:last-child {
            border-bottom: 0;
        }

        .right-info span {
            color: var(--muted);
        }

        .right-info strong {
            text-align: right;
        }

        .right-note {
            color: var(--muted);
            font-size: 11px;
            line-height: 1.8;
        }

        /* FOOTER */

        .footer {
            max-width: 1700px;
            margin: auto;
            padding: 18px 25px 25px;
            display: flex;
            justify-content: space-between;
            gap: 10px;
            color: var(--muted);
            font-size: 10px;
        }

        .footer span {
            color: var(--primary);
        }

        /* RESPONSIVE */

        @media (max-width: 1150px) {
            .layout {
                grid-template-columns: 205px minmax(0, 1fr);
            }

            .rightbar {
                grid-column: 2;
                display: grid;
                grid-template-columns: 1fr 1fr;
            }
        }

        @media (max-width: 750px) {
            .layout {
                grid-template-columns: 1fr;
                padding: 13px;
                gap: 15px;
            }

            .sidebar {
                gap: 10px;
            }

            .side-panel {
                padding: 13px;
            }

            .brand {
                padding-bottom: 12px;
            }

            .side-label {
                padding-top: 14px;
            }

            .side-menu {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .sidebar-bottom {
                margin-top: 10px;
            }

            .side-promo {
                display: none;
            }

            .main {
                grid-column: 1;
            }

            .rightbar {
                grid-column: 1;
                display: grid;
                grid-template-columns: 1fr;
            }

            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .topbar {
                flex-wrap: wrap;
            }

            .footer {
                flex-direction: column;
                padding: 15px;
            }
        }

        @media (max-width: 420px) {
            .stats {
                grid-template-columns: 1fr 1fr;
            }

            .stat-card {
                padding: 14px 11px;
            }

            .stat-card h2 {
                font-size: 23px;
            }

            .status-box {
                align-items: flex-start;
                flex-direction: column;
            }

            .status-actions {
                align-items: flex-start;
                flex-direction: column;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                transition-duration: .01ms !important;
            }
        }
    </style>
</head>

<body>

<div class="layout">

    <!-- SIDEBAR -->
    <aside class="sidebar">

        <div class="side-panel">

            <a href="{{ route('admin.dashboard') }}" class="brand">
                <img
                    src="{{ asset('images/profile.jpg') }}"
                    alt="Foto profil"
                    class="profile-photo"
                >

                <div>
                    <h2>About<span style="color:var(--primary)">Me</span></h2>
                    <small>Admin Dashboard</small>
                </div>
            </a>

            <div class="side-label">MENU UTAMA</div>

            <nav class="side-menu">
                <a href="{{ route('admin.dashboard') }}" class="side-link active">
                    <span class="symbol">⌂</span> Dashboard
                </a>

                <a href="{{ route('admin.pesan.index') }}" class="side-link">
                    <span class="symbol">▤</span> Inbox Pesan
                </a>

                <a href="{{ url('/') }}" target="_blank" class="side-link">
                    <span class="symbol">↗</span> Lihat Website
                </a>
            </nav>

            <div class="side-label">PREFERENSI</div>

            <div class="theme-row">
                <span>◐ &nbsp; Tema Gelap/Terang</span>

                <button
                    type="button"
                    id="languageToggle"
                    class="language-toggle"
                    style="width:38px;height:34px;border-radius:10px;border:1px solid var(--border);background:var(--card2);color:var(--text);font-weight:700;cursor:pointer"
                    aria-label="Ganti bahasa"
                    title="Switch to English"
                >EN</button>

                <button
                    type="button"
                    class="theme-toggle"
                    id="themeToggle"
                    aria-label="Ubah tema"
                >
                    <span class="theme-knob" id="themeKnob">☀</span>
                </button>
            </div>

            <div class="side-menu">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="side-link logout-link"
                            style="width:100%;border:0;background:transparent;text-align:left;cursor:pointer">
                        <span class="symbol">⇥</span> Logout
                    </button>
                </form>
            </div>

        </div>

        <div class="side-panel side-promo">
            <div class="promo-icon">✦</div>
            <h3>AboutMe</h3>
            <p>
                Ruang tumbuh untuk belajar,
                berkembang, dan membangun masa depan.
            </p>
        </div>

    </aside>

    <!-- MAIN -->
    <main class="main">

        <header class="topbar">
            <div class="page-title">
                <small>✦ PUSAT PENGELOLAAN</small>
                <h1>Dashboard <span>Admin.</span></h1>
            </div>

            <div class="top-actions">
                <a href="{{ route('admin.pesan.index') }}"
                   class="top-button" title="Inbox Pesan">✉</a>

                <a href="{{ url('/') }}" target="_blank"
                   class="top-button" title="Lihat Website">↗</a>
            </div>
        </header>

        <section class="welcome">
            <small>SELAMAT DATANG KEMBALI</small>
            <h2>Halo, Admin! 👋</h2>
            <p>Kelola percakapan dan aktivitas website AboutMe dari satu tempat.</p>
        </section>

        @if(session('success'))
            <div class="panel" style="color:var(--green);font-size:12px">
                ✓ {{ session('success') }}
            </div>
        @endif

        <!-- STATISTICS -->
        <section class="stats">

            <div class="stat-card">
                <div class="stat-top">
                    <small>Total Percakapan</small>
                    <span class="stat-icon">▤</span>
                </div>
                <h2>{{ $totalConversations }}</h2>
                <p>Seluruh percakapan pengunjung</p>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <small>Total Pesan</small>
                    <span class="stat-icon">✉</span>
                </div>
                <h2>{{ $totalMessages }}</h2>
                <p>Pesan yang tersimpan</p>
            </div>

            <div class="stat-card">
                <div class="stat-top">
                    <small>Belum Dibaca</small>
                    <span class="stat-icon">◉</span>
                </div>
                <h2>{{ $unreadMessages }}</h2>
                <p>Pesan dari pengunjung</p>
            </div>

        </section>

        <!-- STATUS ADMIN -->
        <section class="panel">

            <div class="panel-heading">
                <h3>Status Ketersediaan Admin</h3>
                <span style="color:var(--muted);font-size:10px">PENGATURAN</span>
            </div>

            <div class="status-box">

                <div class="status-left">
                    <div class="status-icon">◉</div>

                    <div>
                        <h4>Mode Pelayanan</h4>
                        <p>
                            @if($setting->is_online)
                                Pesan ditangani langsung oleh admin.
                            @else
                                Asisten otomatis menangani pesan pengunjung.
                            @endif
                        </p>
                    </div>
                </div>

                @if($setting->is_online)
                    <span class="status-badge online">
                        <span class="status-dot"></span> Online
                    </span>
                @else
                    <span class="status-badge offline">
                        <span class="status-dot"></span> Offline
                    </span>
                @endif

            </div>

            <div class="status-actions">
                <p class="status-note">
                    Status ini menentukan siapa yang menangani pesan baru.
                </p>

                <form action="{{ route('admin.status.update') }}" method="POST">
                    @csrf

                    <button type="submit" class="status-button">
                        {{ $setting->is_online ? 'Ubah ke Offline' : 'Ubah ke Online' }}
                    </button>
                </form>
            </div>

        </section>

        <!-- RECENT CONVERSATIONS -->
        <section class="panel">

            <div class="panel-heading">
                <h3>Percakapan Terbaru</h3>
                <a href="{{ route('admin.pesan.index') }}">Lihat semua →</a>
            </div>

            @forelse($recentConversations as $conversation)

                @php
                    $lastMessage = $conversation->messages->sortBy('created_at')->last();
                @endphp

                <a href="{{ route('admin.pesan.show', $conversation->id) }}"
                   class="conversation">

                    <div class="conversation-avatar">
                        {{ strtoupper(substr($conversation->nama, 0, 1)) }}
                    </div>

                    <div class="conversation-info">
                        <h4>{{ $conversation->nama }}</h4>
                        <p>
                            {{ $lastMessage ? $lastMessage->body : 'Belum ada pesan' }}
                        </p>
                    </div>

                    <span class="conversation-time">
                        {{ $conversation->updated_at->format('d/m H:i') }}
                    </span>

                </a>

            @empty
                <div class="empty">
                    Belum ada percakapan dari pengunjung.
                </div>
            @endforelse

        </section>

    </main>

    <!-- RIGHT PANEL -->
    <aside class="rightbar">

        <section class="profile-panel">

            <img
                src="{{ asset('images/profile.jpg') }}"
                alt="Foto profil AboutMe"
                class="large-photo"
            >

            <h3>AboutMe Admin</h3>
            <p>Pengelola Website</p>

            <div class="profile-actions">
                <a href="{{ route('admin.pesan.index') }}"
                   class="profile-action" title="Inbox Pesan">✉</a>

                <a href="{{ url('/') }}" target="_blank"
                   class="profile-action" title="Website">↗</a>

                <a href="{{ route('admin.dashboard') }}"
                   class="profile-action" title="Dashboard">⌂</a>
            </div>

            <div class="profile-about">
                <h4>Tentang AboutMe</h4>
                <p>
                    AboutMe adalah ruang pribadi untuk belajar,
                    mengembangkan kemampuan, mencatat perjalanan,
                    dan membangun tujuan masa depan.
                </p>
            </div>

        </section>

        <section class="right-card">

            <h3>Informasi Admin</h3>

            <div class="right-info">
                <span>Status</span>

                <strong style="color:{{ $setting->is_online ? '#27c77b' : '#ef777e' }}">
                    {{ $setting->is_online ? 'Online' : 'Offline' }}
                </strong>
            </div>

            <div class="right-info">
                <span>Mode balasan</span>
                <strong>{{ $setting->is_online ? 'Manual' : 'Otomatis' }}</strong>
            </div>

            <div class="right-info">
                <span>Terakhir berubah</span>
                <strong>
                    {{ $setting->status_changed_at
                        ? $setting->status_changed_at->format('d/m/Y H:i')
                        : '-' }}
                </strong>
            </div>

        </section>

        <section class="right-card">
            <h3>Catatan</h3>
            <p class="right-note">
                Pastikan kamu memeriksa pesan pengunjung secara berkala.
                Ketika status Offline, asisten otomatis akan membantu
                menjawab pesan berdasarkan aturan yang tersedia.
            </p>
        </section>

    </aside>

</div>

<footer class="footer">
    <p>© 2026 AboutMe · Ruang belajar dan pengembangan diri.</p>
    <p><span>Admin Dashboard</span> · AboutMe</p>
</footer>

<script>
    (function () {
        const root = document.documentElement;
        const toggle = document.getElementById('themeToggle');
        const knob = document.getElementById('themeKnob');

        function updateTheme() {
            const theme = root.getAttribute('data-theme');

            knob.textContent = theme === 'dark' ? '☀' : '☾';
            toggle.title = theme === 'dark'
                ? 'Ganti ke tema terang'
                : 'Ganti ke tema gelap';
        }

        updateTheme();

        toggle.addEventListener('click', function () {
            const current = root.getAttribute('data-theme');
            const next = current === 'dark' ? 'light' : 'dark';

            root.setAttribute('data-theme', next);
            localStorage.setItem('aboutme-admin-theme', next);

            updateTheme();
        });
    })();
</script>

</body>
</html>
