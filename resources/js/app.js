
import './language';
import '../css/pendidikan.css';

/* =====================================================
   1. PENGATURAN DASAR
===================================================== */

const root = document.documentElement;

function getStorage(key, fallback = null) {
    try {
        const value = localStorage.getItem(key);
        return value === null ? fallback : value;
    } catch (error) {
        return fallback;
    }
}

function setStorage(key, value) {
    try {
        localStorage.setItem(key, value);
        return true;
    } catch (error) {
        return false;
    }
}


/* =====================================================
   2. DARK MODE DAN LIGHT MODE
===================================================== */

const themeButton = document.getElementById('themeToggle');

function applyTheme(theme) {
    const selectedTheme = theme === 'dark' ? 'dark' : 'light';

    root.setAttribute('data-theme', selectedTheme);

    if (themeButton) {
        themeButton.textContent =
            selectedTheme === 'dark' ? '☀' : '☾';

        themeButton.setAttribute(
            'aria-label',
            selectedTheme === 'dark'
                ? 'Gunakan tema terang'
                : 'Gunakan tema gelap'
        );
    }
}

// Memuat tema yang sebelumnya dipilih
applyTheme(getStorage('aboutme-theme', 'light'));

// Mengganti tema ketika tombol diklik
themeButton?.addEventListener('click', () => {
    const currentTheme = root.getAttribute('data-theme');

    const newTheme =
        currentTheme === 'dark' ? 'light' : 'dark';

    applyTheme(newTheme);
    setStorage('aboutme-theme', newTheme);
});


/* =====================================================
   3. MENU NAVIGASI MOBILE
===================================================== */

const menuButton = document.getElementById('menuToggle');
const navLinks = document.getElementById('navLinks');

menuButton?.addEventListener('click', () => {
    const isOpen = navLinks?.classList.toggle('open') ?? false;

    menuButton.setAttribute('aria-expanded', String(isOpen));
    menuButton.textContent = isOpen ? '×' : '☰';
});

// Menutup menu setelah pengguna memilih halaman
navLinks?.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
        navLinks.classList.remove('open');

        menuButton?.setAttribute('aria-expanded', 'false');

        if (menuButton) {
            menuButton.textContent = '☰';
        }
    });
});


/* =====================================================
   4. FOTO PROFIL
===================================================== */

const photoInput = document.getElementById('profilePhotoInput');
const photo = document.getElementById('profilePreview');
const photoStatus = document.getElementById('photoStatus');
const resetPhoto = document.getElementById('resetProfilePhoto');

const defaultPhoto = photo?.getAttribute('src') || '';

const savedPhoto = getStorage('aboutme-profile-photo');

if (photo && savedPhoto) {
    photo.src = savedPhoto;
    photo.style.display = 'block';

    if (photo.nextElementSibling) {
        photo.nextElementSibling.style.display = 'none';
    }
}

// Memilih foto baru
photoInput?.addEventListener('change', () => {
    const file = photoInput.files?.[0];

    if (!file) return;

    // Memastikan file berupa gambar
    if (!file.type.startsWith('image/')) {
        if (photoStatus) {
            photoStatus.textContent =
                'Pilih file gambar seperti JPG atau PNG.';
        }

        photoInput.value = '';
        return;
    }

    // Batas ukuran file 5 MB
    if (file.size > 5 * 1024 * 1024) {
        if (photoStatus) {
            photoStatus.textContent =
                'Ukuran foto maksimal 5 MB.';
        }

        photoInput.value = '';
        return;
    }

    const reader = new FileReader();

    reader.onload = () => {
        if (typeof reader.result !== 'string') return;

        const saved = setStorage(
            'aboutme-profile-photo',
            reader.result
        );

        if (photo) {
            photo.src = reader.result;
            photo.style.display = 'block';

            if (photo.nextElementSibling) {
                photo.nextElementSibling.style.display = 'none';
            }
        }

        if (photoStatus) {
            photoStatus.textContent = saved
                ? 'Foto profil berhasil diperbarui di browser ini.'
                : 'Pratinjau berhasil, tetapi foto tidak dapat disimpan browser.';
        }
    };

    reader.readAsDataURL(file);
});

// Mengembalikan foto ke kondisi awal
resetPhoto?.addEventListener('click', () => {
    try {
        localStorage.removeItem('aboutme-profile-photo');
    } catch (error) {
        // Browser mungkin tidak mengizinkan akses penyimpanan
    }

    if (photo) {
        photo.onerror = () => {
            photo.style.display = 'none';

            if (photo.nextElementSibling) {
                photo.nextElementSibling.style.display = 'grid';
            }
        };

        photo.src = defaultPhoto;
        photo.style.display = 'block';
    }

    if (photoInput) {
        photoInput.value = '';
    }

    if (photoStatus) {
        photoStatus.textContent = 'Foto awal dipulihkan.';
    }
});


/* =====================================================
   5. JURNAL REFLEKSI
===================================================== */

const journalForm = document.getElementById('journalForm');
const journalEntries = document.getElementById('journalEntries');
const journalCount = document.getElementById('journalCount');
const journalStatus = document.getElementById('journalStatus');
const journalDate = document.getElementById('journalDate');

const journalKey = 'aboutme-journal-entries';

function todayString() {
    const date = new Date();

    return [
        date.getFullYear(),
        String(date.getMonth() + 1).padStart(2, '0'),
        String(date.getDate()).padStart(2, '0')
    ].join('-');
}

if (journalDate && !journalDate.value) {
    journalDate.value = todayString();
}

function readEntries() {
    try {
        const entries = JSON.parse(
            getStorage(journalKey, '[]')
        );

        return Array.isArray(entries) ? entries : [];
    } catch (error) {
        return [];
    }
}

function formatDate(value) {
    if (!value) return 'Tanpa tanggal';

    const date = new Date(`${value}T00:00:00`);

    if (Number.isNaN(date.getTime())) {
        return value;
    }

    return date.toLocaleDateString('id-ID', {
        day: 'numeric',
        month: 'long',
        year: 'numeric'
    });
}

// Menampilkan semua catatan jurnal
function renderEntries() {
    if (!journalEntries) return;

    const entries = readEntries().sort((a, b) => {
        return (
            String(b.date || '').localeCompare(String(a.date || '')) ||
            (b.createdAt || 0) - (a.createdAt || 0)
        );
    });

    if (journalCount) {
        journalCount.textContent = `${entries.length} catatan`;
    }

    journalEntries.replaceChildren();

    if (entries.length === 0) {
        const message = document.createElement('p');

        message.className = 'muted';
        message.textContent =
            'Belum ada catatan. Mulai tulis refleksi pertamamu.';

        journalEntries.append(message);
        return;
    }

    entries.forEach(entry => {
        const card = document.createElement('article');
        card.className = 'journal-entry';

        const top = document.createElement('div');
        top.className = 'journal-entry-top';

        const date = document.createElement('time');
        date.textContent = formatDate(entry.date);

        const remove = document.createElement('button');
        remove.type = 'button';
        remove.textContent = 'Hapus catatan';

        remove.addEventListener('click', () => {
            const updatedEntries = readEntries().filter(
                item => item.id !== entry.id
            );

            if (!setStorage(journalKey, JSON.stringify(updatedEntries))) {
                if (journalStatus) {
                    journalStatus.textContent =
                        'Catatan tidak dapat dihapus dari browser.';
                }

                return;
            }

            renderEntries();

            if (journalStatus) {
                journalStatus.textContent =
                    'Catatan dihapus dari browser ini.';
            }
        });

        top.append(date, remove);
        card.append(top);

        const sections = [
            ['Yang kupelajari', entry.learned],
            ['Tantangan', entry.challenge],
            ['Rencana besok', entry.next]
        ];

        sections.forEach(([label, value]) => {
            if (!value) return;

            const heading = document.createElement('h4');
            heading.textContent = label;

            const paragraph = document.createElement('p');
            paragraph.textContent = value;

            card.append(heading, paragraph);
        });

        journalEntries.append(card);
    });
}

// Menyimpan jurnal baru
journalForm?.addEventListener('submit', event => {
    event.preventDefault();

    const data = new FormData(journalForm);

    const learned = String(data.get('learned') || '').trim();

    if (!learned) {
        if (journalStatus) {
            journalStatus.textContent =
                'Tulis hal yang kamu pelajari hari ini.';
        }

        return;
    }

    const entries = readEntries();

    entries.push({
        id: `${Date.now()}-${Math.random().toString(36).slice(2, 8)}`,
        date: String(data.get('date') || ''),
        learned,
        challenge: String(data.get('challenge') || '').trim(),
        next: String(data.get('next') || '').trim(),
        createdAt: Date.now()
    });

    if (!setStorage(journalKey, JSON.stringify(entries))) {
        if (journalStatus) {
            journalStatus.textContent =
                'Browser tidak dapat menyimpan catatan.';
        }

        return;
    }

    renderEntries();

    journalForm.reset();

    if (journalDate) {
        journalDate.value = todayString();
    }

    if (journalStatus) {
        journalStatus.textContent =
            'Refleksi berhasil disimpan pada browser ini.';
    }
});

renderEntries();


/* =====================================================
   6. ANIMASI SCROLL / REVEAL
===================================================== */

const animationSelectors = `
    .hero-copy,
    .hero-visual,
    .section-heading,
    .feature-card,
    .quote-banner,
    .page-hero,
    .panel,
    .mission-item,
    .target-card,
    .progress-card,
    .value-card,
    .contact-copy,
    .contact-details,

    /* Halaman Pendidikan */
    .education-hero,
    .education-intro,
    .timeline-heading,
    .education-card,
    .education-closing
`;

document.querySelectorAll(animationSelectors).forEach((element, index) => {
    element.classList.add('reveal');

    if (
        element.matches(
            '.feature-card, .mission-item, .target-card, .progress-card, .value-card, .education-card'
        )
    ) {
        element.style.transitionDelay = `${(index % 4) * 65}ms`;
    }
});

// Menjalankan animasi ketika elemen terlihat
if (
    'IntersectionObserver' in window &&
    !window.matchMedia('(prefers-reduced-motion: reduce)').matches
) {
    root.classList.add('reveal-ready');

    const observer = new IntersectionObserver(items => {
        items.forEach(item => {
            if (item.isIntersecting) {
                item.target.classList.add('is-visible');
                observer.unobserve(item.target);
            }
        });
    }, {
        threshold: 0.12
    });

    document.querySelectorAll('.reveal').forEach(element => {
        observer.observe(element);
    });
} else {
    document.querySelectorAll('.reveal').forEach(element => {
        element.classList.add('is-visible');
    });
}


/* =====================================================
   7. ANIMASI KARTU PROFIL MENGIKUTI MOUSE
===================================================== */

(function initializeProfileCardAnimation() {
    const card = document.querySelector(
        '.hero-visual .profile-card'
    );

    if (!card) return;

    // Tidak aktif pada layar sentuh atau mode reduced motion
    if (
        window.matchMedia('(pointer: coarse)').matches ||
        window.matchMedia('(prefers-reduced-motion: reduce)').matches
    ) {
        return;
    }

    const RADIUS = 380;
    const MAX_ANGLE = 90;
    const REST_ANGLE = 3;
    const SMOOTH = 0.12;

    let target = REST_ANGLE;
    let current = REST_ANGLE;
    let running = false;

    function animate() {
        current += (target - current) * SMOOTH;

        card.style.setProperty(
            '--card-rot',
            `${current.toFixed(2)}deg`
        );

        if (Math.abs(target - current) > 0.05) {
            requestAnimationFrame(animate);
        } else {
            running = false;
        }
    }

    function startAnimation() {
        if (running) return;

        running = true;
        requestAnimationFrame(animate);
    }

    document.addEventListener('mousemove', event => {
        const rect = card.getBoundingClientRect();

        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;

        const dx = event.clientX - centerX;
        const dy = event.clientY - centerY;

        const distance = Math.hypot(dx, dy);

        if (distance <= RADIUS) {
            const ratio = Math.max(
                -1,
                Math.min(1, dx / (RADIUS * 0.6))
            );

            target = ratio * MAX_ANGLE;
        } else {
            target = REST_ANGLE;
        }

        startAnimation();
    });

    document.addEventListener('mouseleave', () => {
        target = REST_ANGLE;
        startAnimation();
    });
})();

// Dropdown navbar: klik untuk buka/tutup, klik di luar atau tekan Esc untuk menutup.
(function () {
  const dropdown = document.getElementById('navDropdown');
  const toggle = document.getElementById('navDropdownToggle');
  if (!dropdown || !toggle) return;

  const close = () => {
    dropdown.classList.remove('open');
    toggle.setAttribute('aria-expanded', 'false');
  };

  const open = () => {
    dropdown.classList.add('open');
    toggle.setAttribute('aria-expanded', 'true');
  };

  toggle.addEventListener('click', event => {
    event.stopPropagation();
    dropdown.classList.contains('open') ? close() : open();
  });

  document.addEventListener('click', event => {
    if (!dropdown.contains(event.target)) close();
  });

  document.addEventListener('keydown', event => {
    if (event.key === 'Escape' && dropdown.classList.contains('open')) {
      close();
      toggle.focus();
    }
  });

  dropdown.querySelectorAll('.nav-dropdown-menu a').forEach(link =>
    link.addEventListener('click', close)
  );
})();
