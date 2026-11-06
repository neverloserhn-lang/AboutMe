// =========================================================
// ABOUTME - BILINGUAL LANGUAGE SYSTEM
// Indonesian <-> English
// Complete version
// =========================================================


// =========================================================
// 1. KAMUS TERJEMAHAN
// =========================================================

const phraseTranslations = {

    // ADMIN DASHBOARD
    "MENU UTAMA": "MAIN MENU",
    "Dashboard": "Dashboard",
    "Inbox Pesan": "Message Inbox",
    "Lihat Website": "View Website",
    "PREFERENSI": "PREFERENCES",
    "◐   Tema Gelap/Terang": "◐   Dark/Light Theme",
    "Logout": "Log out",
    "Ruang tumbuh untuk belajar, berkembang, dan membangun masa depan.": "A space to learn, grow, and build the future.",
    "✦ PUSAT PENGELOLAAN": "✦ MANAGEMENT CENTER",
    "Dashboard Admin.": "Admin Dashboard.",
    "SELAMAT DATANG KEMBALI": "WELCOME BACK",
    "Halo, Admin! 👋": "Hello, Admin! 👋",
    "Kelola percakapan dan aktivitas website AboutMe dari satu tempat.": "Manage conversations and AboutMe website activity in one place.",
    "Total Percakapan": "Total Conversations",
    "Seluruh percakapan pengunjung": "All visitor conversations",
    "Total Pesan": "Total Messages",
    "Pesan yang tersimpan": "Stored messages",
    "Belum Dibaca": "Unread",
    "Pesan dari pengunjung": "Messages from visitors",
    "Status Ketersediaan Admin": "Admin Availability Status",
    "PENGATURAN": "SETTINGS",
    "Mode Pelayanan": "Service Mode",
    "Pesan ditangani langsung oleh admin.": "Messages are handled directly by the admin.",
    "Asisten otomatis menangani pesan pengunjung.": "The automated assistant handles visitor messages.",
    "Ubah ke Offline": "Switch to Offline",
    "Ubah ke Online": "Switch to Online",
    "Status ini menentukan siapa yang menangani pesan baru.": "This status determines who handles new messages.",
    "Percakapan Terbaru": "Recent Conversations",
    "Lihat semua →": "View all →",
    "Belum ada pesan": "No messages yet",
    "Belum ada percakapan dari pengunjung.": "There are no visitor conversations yet.",
    "Pengelola Website": "Website Manager",
    "Tentang AboutMe": "About AboutMe",
    "AboutMe adalah ruang pribadi untuk belajar, mengembangkan kemampuan, mencatat perjalanan, dan membangun tujuan masa depan.": "AboutMe is a personal space to learn, develop skills, document experiences, and build future goals.",
    "Informasi Admin": "Admin Information",
    "Mode balasan": "Reply mode",
    "Manual": "Manual",
    "Otomatis": "Automatic",
    "Terakhir berubah": "Last changed",
    "Catatan": "Note",
    "Pastikan kamu memeriksa pesan pengunjung secara berkala. Ketika status Offline, asisten otomatis akan membantu menjawab pesan berdasarkan aturan yang tersedia.": "Remember to check visitor messages regularly. When your status is Offline, the automated assistant will help answer messages based on the available rules.",
    "© 2026 AboutMe · Ruang belajar dan pengembangan diri.": "© 2026 AboutMe · A space for learning and self-development.",
    "Admin Dashboard": "Admin Dashboard",

    // NAVBAR DAN FOOTER
    "Ruang tumbuh pelajar": "A space for students to grow",
    "Identitas": "Identity",
    "Tentang Saya": "About Me",
    "Visi": "Vision",
    "Misi": "Mission",
    "Target": "Goals",
    "Progress": "Progress",
    "Kontak": "Contact",
    "Diary": "Diary",
    "Pesan": "Messages",
    "Inbox Admin": "Admin Inbox",
    "Dibuat sebagai ruang belajar dan pengembangan diri.": "Created as a space for learning and self-development.",
    "Mari terhubung ↗": "Let's connect ↗",
    "lainnya": "More",

    // HOME
    "✦ HALO, SELAMAT DATANG": "✦ HELLO, WELCOME",
    "Setiap hari adalah kesempatan untuk": "Every day is an opportunity to",
    "bertumbuh.": "grow.",
    "Aku adalah pelajar yang sedang belajar mengenal diri,": "I am a student learning to understand myself,",
    "membangun kebiasaan baik, dan mempersiapkan masa depan": "build good habits, and prepare for the future",
    "selangkah demi selangkah.": "one step at a time.",
    "Kenali saya ↗": "Get to know me ↗",
    "Lihat target": "View goals",
    "🌱 Tidak harus sempurna, yang penting terus mencoba.": "🌱 You don't have to be perfect; what matters is to keep trying.",
    "PERJALANAN DIRI": "PERSONAL JOURNEY",
    "Mulai dari langkah kecil.": "Start with small steps.",
    "Kenali dirimu, tentukan arah, lalu lakukan perubahan": "Get to know yourself, set a direction, and make changes",
    "sedikit demi sedikit.": "little by little.",
    "Kenali diriku dan nilai yang kupegang.": "Get to know me and the values I stand for.",
    "Buka halaman ↗": "Open page ↗",
    "Visi & Misi": "Vision & Mission",
    "Tentukan arah masa depan dan langkahnya.": "Set a direction for the future and the steps to get there.",
    "Susun tujuan yang realistis dan terukur.": "Set realistic and measurable goals.",
    "Lihat perkembangan dan evaluasi diri.": "Track progress and reflect on yourself.",

    // IDENTITAS
    "01 · MENGENAL DIRI": "01 · GETTING TO KNOW MYSELF",
    "Identitas diriku.": "My identity.",
    "Halaman untuk mengenal siapa diriku dan apa yang ingin kukembangkan.": "A page to learn who I am and what I want to develop.",
    "Pelajar · Pembelajar": "Student · Learner",
    "🌱 Sedang bertumbuh": "🌱 Growing",
    "TENTANG DIRIKU": "ABOUT ME",
    "Informasi diri": "Personal information",
    "Nama lengkap": "Full name",
    "Status": "Status",
    "Sekolah": "School",
    "Hal yang disukai": "Interests",
    "Belajar hal baru dan mencoba ide": "Learning new things and exploring ideas",
    "Nilai yang dipegang": "Core values",
    "Jujur, disiplin, dan bertanggung jawab": "Honesty, discipline, and responsibility",
    "Tujuan": "Goal",
    "Menjadi pribadi yang lebih baik setiap hari": "Becoming a better person every day",

    // TENTANG SAYA
    "02 · CERITA DIRI": "02 · MY STORY",
    "Sedikit cerita": "A little story",
    "tentang saya.": "about me.",
    "Perjalanan untuk mengenal diri sendiri tidak harus selesai dalam sehari.": "Getting to know yourself is a journey that does not have to be completed in one day.",
    "Siapa saya?": "Who am I?",
    "Halo, saya Raihan. Saya adalah seorang pelajar yang sedang menjalani proses belajar dan mengembangkan kemampuan diri. Saya percaya bahwa setiap pengalaman dapat menjadi pelajaran untuk memperbaiki diri dan mempersiapkan masa depan.": "Hello, my name is Raihan. I am a student who is learning and developing my abilities. I believe every experience can teach me how to improve myself and prepare for the future.",
    "Saya ingin terus menambah pengetahuan, mencoba hal-hal baru, dan membangun kebiasaan positif. Bagi saya, proses menjadi lebih baik membutuhkan usaha, kesabaran, dan kemauan untuk terus belajar.": "I want to keep gaining knowledge, trying new things, and building positive habits. I believe becoming a better person takes effort, patience, and a willingness to keep learning.",
    "Saya juga memahami bahwa setiap orang punya proses dan kecepatannya masing-masing. Karena itu, saya ingin belajar menghargai kemajuan kecil, berani memperbaiki kesalahan, dan tidak mudah menyerah saat menemui kesulitan.": "I also understand that everyone has their own process and pace. That is why I want to appreciate small improvements, have the courage to correct my mistakes, and not give up easily when facing difficulties.",
    "Rasa ingin tahu": "Curiosity",
    "Berani bertanya dan mencoba memahami sesuatu.": "Being willing to ask questions and understand new things.",
    "Konsistensi": "Consistency",
    "Melakukan sedikit demi sedikit secara rutin.": "Making small, consistent efforts.",
    "Tanggung jawab": "Responsibility",
    "Menyelesaikan tugas dan belajar dari hasilnya.": "Completing tasks and learning from the results.",

    // VISI
    "03 · ARAH MASA DEPAN": "03 · FUTURE DIRECTION",
    "Visi hidupku.": "My life vision.",
    "Gambaran tentang pribadi yang ingin aku bangun di masa depan.": "A picture of the person I want to become in the future.",
    "VISI SAYA": "MY VISION",
    "Menjadi pribadi yang berilmu, mandiri, bertanggung jawab, dan mampu memberi manfaat bagi orang lain.": "To become knowledgeable, independent, responsible, and able to make a positive difference in other people's lives.",
    "Visi ini akan menjadi pengingat saat aku menentukan pilihan dan menghadapi tantangan.": "This vision will guide me when making decisions and facing challenges.",
    "Apa arti visi ini bagiku?": "What does this vision mean to me?",
    "Berilmu: terus belajar di sekolah maupun dari pengalaman.": "Knowledgeable: keep learning at school and through experience.",
    "Mandiri: berusaha menyelesaikan tanggung jawab sendiri.": "Independent: strive to fulfill my responsibilities on my own.",
    "Bertanggung jawab: berani mengakui kesalahan dan memperbaikinya.": "Responsible: have the courage to admit mistakes and correct them.",
    "Bermanfaat: menggunakan kemampuan untuk membantu sekitar.": "Helpful: use my abilities to help others.",

    // MISI
    "04 · LANGKAH NYATA": "04 · ACTION STEPS",
    "Misi kecil": "Small missions",
    "setiap hari.": "every day.",
    "Visi akan lebih berarti ketika diterjemahkan menjadi kebiasaan yang bisa dilakukan.": "A vision becomes more meaningful when it is turned into habits you can practice.",
    "Belajar dengan konsisten": "Learn consistently",
    "Menyisihkan waktu belajar setiap hari dan mengulang materi yang belum dipahami.": "Set aside time to study every day and review topics that are not yet clear.",
    "Menjaga kebiasaan positif": "Maintain positive habits",
    "Mengatur waktu, beristirahat cukup, dan menyelesaikan tugas sesuai prioritas.": "Manage time, get enough rest, and complete tasks according to priority.",
    "Berani mencoba": "Be willing to try",
    "Mengikuti kegiatan, mengerjakan proyek kecil, dan tidak takut membuat kesalahan.": "Take part in activities, work on small projects, and do not be afraid of making mistakes.",
    "Mengevaluasi diri": "Evaluate myself",
    "Melihat apa yang sudah berjalan baik dan memperbaiki hal yang masih kurang.": "Recognize what is going well and improve what still needs work.",
    "Menjaga sikap": "Maintain good character",
    "Bersikap jujur, menghargai orang lain, dan bertanggung jawab atas pilihan sendiri.": "Be honest, respect others, and take responsibility for my choices.",

    // TARGET
    "05 · RENCANA PENGEMBANGAN": "05 · DEVELOPMENT PLAN",
    "Target yang": "Goals that are",
    "realistis.": "realistic.",
    "Contoh target pelajar. Sesuaikan dengan kebutuhan dan jadwalmu sendiri.": "Examples of student goals. Adjust them to your own needs and schedule.",
    "Akademik": "Academics",
    "Meningkatkan hasil belajar": "Improve learning outcomes",
    "Belajar ulang materi yang sulit dan mengerjakan latihan secara rutin.": "Review difficult topics and practice regularly.",
    "Waktu": "Timeline",
    "Setiap minggu": "Every week",
    "Keterampilan": "Skills",
    "Menyelesaikan proyek kecil": "Complete a small project",
    "Membuat satu proyek sederhana untuk melatih kemampuan baru.": "Create a simple project to practice a new skill.",
    "1 proyek per bulan": "1 project per month",
    "Kebiasaan": "Habits",
    "Mengelola waktu": "Manage time",
    "Membuat daftar prioritas dan mengurangi kebiasaan menunda tugas.": "Make a priority list and reduce procrastination.",
    "Evaluasi tiap pekan": "Review every week",
    "Pengembangan diri": "Personal development",
    "Memperluas wawasan": "Broaden my knowledge",
    "Membaca atau mempelajari satu topik baru secara bertahap.": "Read about or study one new topic gradually.",
    "15 menit per hari": "15 minutes a day",
    "Catatan: target di halaman ini masih berupa contoh dan belum tersimpan sebagai data aplikasi.": "Note: the goals on this page are examples and are not saved as application data.",

    // PENDIDIKAN
    "08 · PERJALANAN BELAJAR": "08 · LEARNING JOURNEY",
    "Perjalanan": "Journey",
    "Pendidikan.": "Education.",
    "Setiap jenjang pendidikan memberikan pengalaman, pengetahuan, dan pelajaran baru yang membentuk diriku.": "Every stage of education provides new experiences, knowledge, and lessons that shape who I am.",
    "LEARNING": "LEARNING",
    "JOURNEY": "JOURNEY",
    "01 / INTRODUCTION": "01 / INTRODUCTION",
    "Belajar bukan hanya": "Learning is not just",
    "tentang": "about",
    "sekolah.": "school.",
    "Pendidikan memberiku kesempatan untuk mengenal banyak hal, mengembangkan kemampuan, dan mempersiapkan masa depan.": "Education gives me the opportunity to explore new things, develop my abilities, and prepare for the future.",
    "EDUCATION HISTORY": "EDUCATION HISTORY",
    "Riwayat Pendidikan": "Educational Background",
    "Perjalanan pendidikan saya dari waktu ke waktu.": "My educational journey over the years.",
    "03 STAGES": "03 STAGES",
    "SEKOLAH DASAR": "ELEMENTARY SCHOOL",
    "SEKOLAH MENENGAH PERTAMA": "JUNIOR HIGH SCHOOL",
    "SEKOLAH MENENGAH ATAS": "SENIOR HIGH SCHOOL",
    "Completed": "Completed",
    "In Progress": "In Progress",
    "Sekarang": "Present",
    "Memulai perjalanan pendidikan dengan mengenal berbagai pengetahuan dasar, membangun kebiasaan baik, serta belajar berinteraksi dengan lingkungan.": "Beginning my educational journey by learning basic knowledge, building good habits, and learning to interact with my surroundings.",
    "Foundation & Discovery": "Foundation & Discovery",
    "Mengembangkan kemampuan akademik, mengenali minat dan potensi diri, serta belajar bekerja sama dan menghadapi pengalaman baru.": "Developing academic abilities, discovering my interests and potential, and learning to cooperate and face new experiences.",
    "Development & Exploration": "Development & Exploration",
    "Memperluas wawasan, mengembangkan potensi, meningkatkan keterampilan, dan mempersiapkan diri untuk meraih tujuan di masa depan.": "Expanding my knowledge, developing my potential, improving my skills, and preparing myself to achieve future goals.",
    "Growth & Future Preparation": "Growth & Future Preparation",
    "KEEP MOVING FORWARD": "KEEP MOVING FORWARD",
"Perjalanan masih": "The journey",
"berlanjut.": "continues.",
"Pendidikan adalah proses yang terus berjalan. Aku ingin terus belajar, mengembangkan kemampuan, dan memanfaatkan setiap kesempatan untuk menjadi lebih baik.": "Education is an ongoing process. I want to keep learning, developing my abilities, and making the most of every opportunity to become a better person.",
"ALWAYS LEARNING": "ALWAYS LEARNING",
"ALWAYS GROWING": "ALWAYS GROWING",

// PROGRESS
"06 · PERJALANAN DIRI": "06 · PERSONAL JOURNEY",
"Bertumbuh sedikit demi sedikit,": "Growing little by little,",
"menjadi lebih baik.": "becoming better.",
"Setiap pengalaman membawa pelajaran. Di sini, aku mencatat perkembangan, pencapaian, dan hal-hal yang masih ingin diperbaiki.": "Every experience brings a lesson. Here, I record my progress, achievements, and the things I still want to improve.",
"MY DEVELOPMENT": "MY DEVELOPMENT",
"Perjalanan pengembangan diri": "Self-development journey",
"Gambaran perkembangan dari proses yang sedang dijalani.": "An overview of the progress being made.",
"Perkembangan keseluruhan": "Overall progress",
"Mulai berkembang": "Getting started",
"Terus bertumbuh": "Keep growing",
"*Persentase ini merupakan ilustrasi dan dapat disesuaikan dengan perkembangan sebenarnya.": "*This percentage is illustrative and can be adjusted to reflect actual progress.",
    "Bidang pengembangan": "Development areas",
    "Area yang sedang dikembangkan": "Areas being developed",
    "Pengalaman baru": "New experiences",
    "Contoh pengalaman yang dicatat": "Examples of recorded experiences",
    "Status perjalanan": "Journey status",
    "Masih terus belajar dan berkembang": "Continuing to learn and grow",
    "GROWTH TRACKER": "GROWTH TRACKER",
    "Area perkembangan": "Development areas",
    "Beberapa bidang yang menjadi bagian dari proses pengembangan diri.": "Several areas that are part of the self-development process.",
    "Pengetahuan": "Knowledge",
    "Memperluas wawasan melalui pembelajaran, membaca, dan mencari informasi baru.": "Expanding knowledge through learning, reading, and exploring new information.",
    "Terus dikembangkan": "Continuously developing",
    "Mempelajari teknologi, mencoba proyek sederhana, dan meningkatkan kemampuan praktis.": "Learning technology, trying simple projects, and improving practical skills.",
    "Manajemen waktu": "Time management",
    "Belajar mengatur prioritas, menyelesaikan tugas, dan menyeimbangkan aktivitas sehari-hari.": "Learning to set priorities, complete tasks, and balance daily activities.",
    "Perlu ditingkatkan": "Needs improvement",
    "Kepercayaan diri": "Self-confidence",
    "Berani mencoba hal baru, menyampaikan pendapat, dan belajar menghadapi tantangan.": "Being brave enough to try new things, express opinions, and face challenges.",
    "Terus dilatih": "Continuously practicing",
    "MY JOURNEY": "MY JOURNEY",
    "Catatan perjalanan": "Journey timeline",
    "Contoh tahapan dan pengalaman dalam proses pengembangan diri.": "Examples of stages and experiences in the self-development process.",
    "TAHAP 01": "STAGE 01",
    "Memulai proses belajar": "Starting the learning process",
    "Mulai mengenali kemampuan diri dan menentukan hal-hal yang ingin dipelajari.": "Beginning to recognize personal abilities and decide what to learn.",
    "Tahap awal": "Starting stage",
    "TAHAP 02": "STAGE 02",
    "Mencoba pengalaman baru": "Trying new experiences",
    "Mulai mengeksplorasi keterampilan, mengerjakan proyek, dan mempelajari hal baru.": "Exploring skills, working on projects, and learning new things.",
    "Pengalaman": "Experience",
    "TAHAP 03": "STAGE 03",
    "Meningkatkan kemampuan": "Improving abilities",
    "Berusaha memperdalam pengetahuan dan memperbaiki kemampuan yang masih perlu ditingkatkan.": "Working to deepen knowledge and improve skills that still need development.",
    "Sedang dijalani": "Currently ongoing",
    "TAHAP SELANJUTNYA": "NEXT STAGE",
    "Mengevaluasi dan berkembang": "Evaluating and growing",
    "Meninjau hasil yang telah dicapai dan menentukan langkah pengembangan berikutnya.": "Reviewing achievements and determining the next steps for development.",
    "Berikutnya": "Up next",
    "REFLEKSI DIRI": "SELF-REFLECTION",
    "Tidak harus selalu lebih cepat, yang penting tidak berhenti belajar.": "You don't always have to be faster; what matters is never stopping learning.",
    "Aku menyadari bahwa perkembangan diri tidak selalu berjalan sesuai rencana. Ada kalanya berhasil, ada juga saat harus mengulang dan memperbaiki kesalahan. Bagiku, setiap proses tetap memiliki arti selama ada kemauan untuk terus bertumbuh.": "I realize that personal growth does not always go according to plan. Sometimes I succeed, and sometimes I have to start over and correct my mistakes. To me, every process has meaning as long as there is a willingness to keep growing.",
    "— Sebuah perjalanan yang masih berlangsung.": "— A journey that is still unfolding.",

    // KONTAK
    "07 · TERHUBUNG": "07 · GET IN TOUCH",
    "Kontak saya": "Contact me",
    "Halaman sederhana untuk menampilkan cara orang lain menghubungimu.": "A simple page showing how others can contact you.",
    "Punya ide atau ingin berdiskusi?": "Have an idea or want to discuss something?",
    "Silakan hubungi saya melalui informasi kontak yang sudah saya sediakan. Jangan lupa mengganti contoh di bawah dengan informasi milikmu sendiri.": "Please contact me using the details provided. Remember to replace the examples below with your own information.",
    "Kota": "City",
    "Media sosial": "Social media",

    // DIARY
    "✦ RUANG CERITA PRIBADI": "✦ MY PERSONAL JOURNAL",
    "Setiap hari punya cerita untuk": "Every day has a story to be",
    "dikenang.": "remembered.",
    "Tempat menyimpan cerita, pengalaman, dan kenangan hidupku. Setiap pengalaman punya pelajaran.": "A place to keep my stories, experiences, and memories. Every experience has a lesson.",
    "Tulis cerita ↗": "Write a story ↗",
    "Baca catatanku": "Read my entries",
    "🌙 Tidak harus sempurna, yang penting jujur.": "🌙 It does not have to be perfect; what matters is being honest.",
    "✍️ Tulis": "✍️ Write",
    "🌱 Refleksi": "🌱 Reflection",
    "TULIS CERITA BARU": "WRITE A NEW STORY",
    "Luangkan waktu untuk hari ini.": "Take a moment for today.",
    "Catat apa yang kamu alami, rasakan, dan pelajari.": "Write down what you experienced, felt, and learned.",
    "Judul catatan": "Entry title",
    "Contoh: Hari yang menyenangkan": "Example: A wonderful day",
    "Tanggal": "Date",
    "Cerita hari ini": "Today's story",
    "Ceritakan pengalamanmu hari ini...": "Tell me about your day...",
    "✨ Tidak harus sempurna, yang penting jujur.": "✨ It does not have to be perfect; what matters is being honest.",
    "＋ Simpan catatan": "＋ Save entry",
    "ARSIP": "ARCHIVE",
    "Catatan kehidupanku.": "My journal entries.",
    "catatan": "entries",
    "✎ Edit": "✎ Edit",
    "🗑 Hapus": "🗑 Delete",
    "Yakin ingin menghapus catatan ini?": "Are you sure you want to delete this entry?",
    "Belum ada cerita di sini": "No stories here yet",
    "Setiap perjalanan dimulai dari satu langkah. Tulis catatan pertamamu dan simpan kenangan hari ini.": "Every journey begins with one step. Write your first entry and save today's memory.",
    "← Kembali ke Diary": "← Back to Diary",
    "✦ EDIT CATATAN": "✦ EDIT ENTRY",
    "Rapikan": "Polish",
    "ceritamu.": "your story.",
    "Isi catatan": "Entry content",
    "Batal": "Cancel",
    "Simpan perubahan": "Save changes",

    // PESAN DAN INBOX
    "Kirim Pesan": "Send a Message",
    "Punya pertanyaan atau ingin memberikan semangat? Tinggalkan pesan di sini!": "Have a question or want to send some encouragement? Leave a message here!",
    "Periksa kembali isianmu:": "Please check your entries:",
    "Nama Pengirim": "Your Name",
    "Masukkan nama kamu": "Enter your name",
    "Isi Pesan": "Message",
    "Tulis pesan kamu di sini...": "Write your message here...",
    "Percakapan": "Conversation",
    "✦ PERCAKAPAN": "✦ CONVERSATION",
    "Simpan alamat halaman ini supaya kamu bisa kembali membaca balasan.": "Save this page address so you can return to read the replies.",
    "Tulis balasan...": "Write a reply...",
    "Kirim pesan": "Send message",
    "Pemilik Website": "Website Owner",
    "Asisten AboutMe": "AboutMe Assistant",
    "· Otomatis": "· Automated",
    "· Pengunjung": "· Visitor",
    "Login Admin": "Admin Login",
    "Masuk untuk membaca dan membalas pesan pengunjung.": "Sign in to read and reply to visitor messages.",
    "Email Admin": "Admin Email",
    "Masukkan email admin": "Enter admin email",
    "Masukkan password": "Enter password",
    "Masuk ke Inbox": "Open Inbox",
    "Kotak masuk.": "Inbox.",
    "Pesan dari pengunjung website. Klik salah satu untuk membaca dan membalas.": "Messages from website visitors. Select one to read and reply.",
    "Keluar": "Log out",
    "Menunggu balasan": "Waiting for a reply",
    "Belum ada pesan masuk": "No messages yet",
    "Pesan dari halaman Kontak akan muncul di sini.": "Messages from the Contact page will appear here.",
    "Hapus": "Delete",
    "← Kembali ke kotak masuk": "← Back to inbox",
    "Anda · Pemilik Website": "You · Website Owner",
    "Tulis balasan untuk ": "Write a reply to ",
    "Avatar AboutMe": "AboutMe avatar",

    // UMUM
    "Buka navigasi": "Open navigation",
    "Ganti bahasa": "Change language",
    "Ganti tema": "Change theme",
    "Switch to English": "Switch to English",
    "Ganti ke Bahasa Indonesia": "Switch to Indonesian",
    "Asisten otomatis nantinya akan menangani pesan pengunjung.": "The automated assistant will handle visitor messages.",
    "Pesan berhasil dikirim.": "Message sent successfully.",
    "Balasan terkirim.": "Reply sent.",
    "Status admin berhasil diubah menjadi Online.": "Admin status successfully changed to Online.",
    "Status admin berhasil diubah menjadi Offline.": "Admin status successfully changed to Offline."
};


// =========================================================
// 2. TERJEMAHAN ATRIBUT HTML
// =========================================================

const attributeTranslations = {
    "Tulis balasan...": "Write a reply...",
    "Tulis pesan": "Write a message",
    "Tulis pesan kamu di sini...": "Write your message here...",
    "Masukkan nama kamu": "Enter your name",
    "Contoh: Hari yang menyenangkan": "Example: A wonderful day",
    "Ceritakan pengalamanmu hari ini...": "Tell me about your day...",
    "Masukkan email admin": "Enter admin email",
    "Masukkan password": "Enter password",
    "Ganti tema": "Change theme",
    "Ganti bahasa": "Change language",
    "Buka navigasi": "Open navigation"
};


// =========================================================
// 3. TERJEMAHAN NAVBAR DAN DATA-I18N
// =========================================================

const i18nTranslations = {
    brand_subtitle: "A space for students to grow",
    home: "Home",
    identitas: "Identity",
    tentang: "About Me",
    visi: "Vision",
    misi: "Mission",
    target: "Goals",
    pendidikan: "Education",
    progress: "Progress",
    kontak: "Contact",
    lainnya: "المزيد",
    diary: "Diary",
    pesan: "Messages",
    inbox: "Admin Inbox",
    footer: "Created as a space for learning and self-development.",
    footer_link: "Let's connect ↗"
};


// =========================================================
// 4. KAMUS TAMBAHAN (teks yang sebelumnya belum terdaftar)
// =========================================================

Object.assign(phraseTranslations, {
    // Progress
    "Dalam proses": "In progress",
    "Terus dikembangkan": "Continuously improving",
    "Dalam perkembangan": "Developing",
    "Perlu ditingkatkan": "Needs improvement",
    "Terus dilatih": "Still practicing",
    "Perkembangan keseluruhan": "Overall progress",
    "Pengetahuan": "Knowledge",
    "Manajemen waktu": "Time management",
    "Kepercayaan diri": "Self-confidence",
    "Gambaran perkembangan dari proses yang sedang dijalani.": "An overview of the progress of the process I am going through.",
    "Beberapa bidang yang menjadi bagian dari proses pengembangan diri.": "Several areas that are part of my self-development process.",
    "Memperluas wawasan melalui pembelajaran, membaca, dan mencari informasi baru.": "Broadening my perspective through learning, reading, and seeking new information.",
    "Mempelajari teknologi, mencoba proyek sederhana, dan meningkatkan kemampuan praktis.": "Learning technology, trying simple projects, and improving practical skills.",
    "Belajar mengatur prioritas, menyelesaikan tugas, dan menyeimbangkan aktivitas sehari-hari.": "Learning to set priorities, finish tasks, and balance daily activities.",
    "Berani mencoba hal baru, menyampaikan pendapat, dan belajar menghadapi tantangan.": "Daring to try new things, share opinions, and learn to face challenges.",
    "Setiap pengalaman membawa pelajaran. Di sini, aku mencatat perkembangan, pencapaian, dan hal-hal yang masih ingin diperbaiki.": "Every experience brings a lesson. Here, I record my progress, achievements, and the things I still want to improve.",

    // Hasil audit seluruh halaman Blade
    "Aku adalah pelajar yang sedang belajar mengenal diri, membangun kebiasaan baik, dan mempersiapkan masa depan selangkah demi selangkah.": "I am a student learning to understand myself, build good habits, and prepare for the future one step at a time.",
    "Kenali dirimu, tentukan arah, lalu lakukan perubahan sedikit demi sedikit.": "Get to know yourself, set a direction, and make changes little by little.",
    "Pelajar yang terus belajar": "A student who keeps learning",
    "Kenali, rencanakan, lakukan.": "Know, plan, act.",
    "Pelajar": "Student",
    "Aktif": "Active",
    "Halo,": "Hello,",
    "Balasan otomatis": "Automated reply",
    "Tulis pesan": "Write a message",
    "Tulis balasan...": "Write a reply...",
    "Anda · Pemilik Website": "You · Website Owner",
    "Foto profil": "Profile photo",
    "Foto profil AboutMe": "AboutMe profile photo",
    "Ilustrasi profil pelajar": "Student profile illustration",
    "Ubah tema": "Change theme",

    // Kontak
    "Halaman sederhana untuk menampilkan cara orang lain menghubungimu.": "A simple page showing how others can contact you.",

    // Inbox admin
    "Pesan dari pengunjung website. Klik salah satu untuk membaca dan membalas.": "Messages from website visitors. Select one to read and reply.",
    "Keluar": "Log out",

    // Diary
    "Tempat menyimpan cerita, pengalaman, dan kenangan hidupku. Setiap pengalaman punya pelajaran.": "A place to keep my stories, experiences, and memories. Every experience has a lesson.",
    "Belum ada cerita di sini": "No stories here yet",
    "Setiap perjalanan dimulai dari satu langkah. Tulis catatan pertamamu dan simpan kenangan hari ini.": "Every journey begins with a single step. Write your first note and save today's memories."
});


// =========================================================
// 4b. JUDUL YANG TERPECAH TAG <span> (mis. "Kontak <span>saya.</span>")
// Key  = teks lengkap judul (spasi dinormalisasi)
// Value = terjemahan per potongan teks, urut sesuai node di HTML
// =========================================================

const splitTranslations = {
    "Identitas diriku.": ["My ", "identity."],
    "Visi hidupku.": ["My life ", "vision."],
    "Misi kecil setiap hari.": ["Small missions ", "every day."],
    "Rapikan ceritamu.": ["Organize ", "your stories."],
    "Kontak saya.": ["Contact ", "me."],
    "Kotak masuk.": ["", "Inbox."],
    "Sedikit cerita tentang saya.": ["A little story ", "about me."],
    "Target yang realistis.": ["Goals that are ", "realistic."],
    "Bertumbuh sedikit demi sedikit, menjadi lebih baik.": ["Growing little by little, ", "becoming better."]
    // Tambah pola lain di sini bila ada judul bergradasi baru.
};


// =========================================================
// 4c. TERJEMAHAN BAHASA ARAB
// Key = teks Indonesia asli (sama dengan phraseTranslations)
// =========================================================

const arabicTranslations = {
    "MENU UTAMA": "القائمة الرئيسية",
    "Dashboard": "لوحة التحكم",
    "Inbox Pesan": "صندوق الرسائل",
    "Lihat Website": "عرض الموقع",
    "PREFERENSI": "التفضيلات",
    "◐   Tema Gelap/Terang": "◐   السمة الداكنة/الفاتحة",
    "Logout": "تسجيل الخروج",
    "Ruang tumbuh untuk belajar, berkembang, dan membangun masa depan.": "مساحة للتعلّم والنمو وبناء المستقبل.",
    "✦ PUSAT PENGELOLAAN": "✦ مركز الإدارة",
    "Dashboard Admin.": "لوحة تحكم المشرف.",
    "SELAMAT DATANG KEMBALI": "مرحباً بعودتك",
    "Halo, Admin! 👋": "مرحباً أيها المشرف! 👋",
    "Kelola percakapan dan aktivitas website AboutMe dari satu tempat.": "أدر محادثات موقع AboutMe ونشاطه من مكان واحد.",
    "Total Percakapan": "إجمالي المحادثات",
    "Seluruh percakapan pengunjung": "جميع محادثات الزوار",
    "Total Pesan": "إجمالي الرسائل",
    "Pesan yang tersimpan": "الرسائل المحفوظة",
    "Belum Dibaca": "غير مقروءة",
    "Pesan dari pengunjung": "رسائل من الزوار",
    "Status Ketersediaan Admin": "حالة تواجد المشرف",
    "PENGATURAN": "الإعدادات",
    "Mode Pelayanan": "وضع الخدمة",
    "Pesan ditangani langsung oleh admin.": "تُعالَج الرسائل مباشرةً من قِبل المشرف.",
    "Asisten otomatis menangani pesan pengunjung.": "يتولى المساعد الآلي معالجة رسائل الزوار.",
    "Ubah ke Offline": "التحويل إلى غير متصل",
    "Ubah ke Online": "التحويل إلى متصل",
    "Status ini menentukan siapa yang menangani pesan baru.": "تحدد هذه الحالة من يتولى الرسائل الجديدة.",
    "Percakapan Terbaru": "أحدث المحادثات",
    "Lihat semua →": "عرض الكل ←",
    "Belum ada pesan": "لا توجد رسائل بعد",
    "Belum ada percakapan dari pengunjung.": "لا توجد محادثات من الزوار بعد.",
    "Pengelola Website": "مدير الموقع",
    "Tentang AboutMe": "حول AboutMe",
    "AboutMe adalah ruang pribadi untuk belajar, mengembangkan kemampuan, mencatat perjalanan, dan membangun tujuan masa depan.": "AboutMe مساحة شخصية للتعلّم وتطوير المهارات وتوثيق الرحلة وبناء أهداف المستقبل.",
    "Informasi Admin": "معلومات المشرف",
    "Mode balasan": "وضع الرد",
    "Manual": "يدوي",
    "Otomatis": "تلقائي",
    "Terakhir berubah": "آخر تغيير",
    "Catatan": "ملاحظة",
    "Pastikan kamu memeriksa pesan pengunjung secara berkala. Ketika status Offline, asisten otomatis akan membantu menjawab pesan berdasarkan aturan yang tersedia.": "احرص على مراجعة رسائل الزوار بانتظام. عندما تكون حالتك غير متصل، سيساعد المساعد الآلي في الرد على الرسائل وفق القواعد المتاحة.",
    "© 2026 AboutMe · Ruang belajar dan pengembangan diri.": "© 2026 AboutMe · مساحة للتعلّم وتطوير الذات.",
    "Admin Dashboard": "لوحة تحكم المشرف",
    "Ruang tumbuh pelajar": "مساحة نمو للطلاب",
    "Identitas": "الهوية",
    "Tentang Saya": "عنّي",
    "Visi": "الرؤية",
    "Misi": "الرسالة",
    "Target": "الأهداف",
    "pendidikan": "التعليم",
    "Progress": "التقدّم",
    "lainnya": "المزيد",
    "Kontak": "التواصل",
    "Diary": "المذكرات",
    "Pesan": "الرسائل",
    "Inbox Admin": "صندوق المشرف",
    "Dibuat sebagai ruang belajar dan pengembangan diri.": "أُنشئ كمساحة للتعلّم وتطوير الذات.",
    "Mari terhubung ↗": "لنتواصل ↗",
    "✦ HALO, SELAMAT DATANG": "✦ مرحباً، أهلاً بك",
    "Setiap hari adalah kesempatan untuk": "كل يوم هو فرصة لـ",
    "bertumbuh.": "النمو.",
    "Aku adalah pelajar yang sedang belajar mengenal diri,": "أنا طالب أتعلّم أن أعرف نفسي،",
    "membangun kebiasaan baik, dan mempersiapkan masa depan": "وأبني عادات جيدة، وأستعد للمستقبل",
    "selangkah demi selangkah.": "خطوةً بخطوة.",
    "Kenali saya ↗": "تعرّف عليّ ↗",
    "Lihat target": "عرض الأهداف",
    "🌱 Tidak harus sempurna, yang penting terus mencoba.": "🌱 لا يلزم أن تكون مثالياً، المهم أن تواصل المحاولة.",
    "PERJALANAN DIRI": "الرحلة الشخصية",
    "Mulai dari langkah kecil.": "ابدأ بخطوات صغيرة.",
    "Kenali dirimu, tentukan arah, lalu lakukan perubahan": "تعرّف على نفسك، وحدّد اتجاهك، ثم أحدث التغيير",
    "sedikit demi sedikit.": "شيئاً فشيئاً.",
    "Kenali diriku dan nilai yang kupegang.": "تعرّف عليّ وعلى القيم التي أتمسك بها.",
    "Buka halaman ↗": "افتح الصفحة ↗",
    "Visi & Misi": "الرؤية والرسالة",
    "Tentukan arah masa depan dan langkahnya.": "حدّد اتجاه المستقبل وخطواته.",
    "Susun tujuan yang realistis dan terukur.": "ضع أهدافاً واقعية وقابلة للقياس.",
    "Lihat perkembangan dan evaluasi diri.": "تابع تقدّمك وقيّم نفسك.",
    "01 · MENGENAL DIRI": "01 · التعرّف على الذات",
    "Identitas diriku.": "هويتي.",
    "Halaman untuk mengenal siapa diriku dan apa yang ingin kukembangkan.": "صفحة للتعرّف على من أنا وما الذي أريد تطويره.",
    "Pelajar · Pembelajar": "طالب · متعلّم",
    "🌱 Sedang bertumbuh": "🌱 في طور النمو",
    "TENTANG DIRIKU": "عنّي",
    "Informasi diri": "معلومات شخصية",
    "Nama lengkap": "الاسم الكامل",
    "Status": "الحالة",
    "Sekolah": "المدرسة",
    "Hal yang disukai": "الاهتمامات",
    "Belajar hal baru dan mencoba ide": "تعلّم أشياء جديدة وتجربة الأفكار",
    "Nilai yang dipegang": "القيم الأساسية",
    "Jujur, disiplin, dan bertanggung jawab": "الصدق والانضباط وتحمّل المسؤولية",
    "Tujuan": "الهدف",
    "Menjadi pribadi yang lebih baik setiap hari": "أن أصبح شخصاً أفضل كل يوم",
    "02 · CERITA DIRI": "02 · قصتي",
    "Sedikit cerita": "قليل من القصة",
    "tentang saya.": "عنّي.",
    "Perjalanan untuk mengenal diri sendiri tidak harus selesai dalam sehari.": "رحلة التعرّف على الذات لا يلزم أن تنتهي في يوم واحد.",
    "Siapa saya?": "من أنا؟",
    "Halo, saya Raihan. Saya adalah seorang pelajar yang sedang menjalani proses belajar dan mengembangkan kemampuan diri. Saya percaya bahwa setiap pengalaman dapat menjadi pelajaran untuk memperbaiki diri dan mempersiapkan masa depan.": "مرحباً، أنا Raihan. أنا طالب أمرّ بعملية تعلّم وتطوير لقدراتي. أؤمن بأن كل تجربة يمكن أن تكون درساً لتحسين نفسي والاستعداد للمستقبل.",
    "Saya ingin terus menambah pengetahuan, mencoba hal-hal baru, dan membangun kebiasaan positif. Bagi saya, proses menjadi lebih baik membutuhkan usaha, kesabaran, dan kemauan untuk terus belajar.": "أريد أن أواصل زيادة معرفتي وتجربة أشياء جديدة وبناء عادات إيجابية. بالنسبة لي، يتطلب أن أصبح أفضل جهداً وصبراً واستعداداً لمواصلة التعلّم.",
    "Saya juga memahami bahwa setiap orang punya proses dan kecepatannya masing-masing. Karena itu, saya ingin belajar menghargai kemajuan kecil, berani memperbaiki kesalahan, dan tidak mudah menyerah saat menemui kesulitan.": "وأدرك أيضاً أن لكل شخص مساره وإيقاعه الخاص. لذلك أريد أن أتعلّم تقدير التحسّن الصغير، وأن أتحلّى بالشجاعة لتصحيح أخطائي، وألّا أستسلم بسهولة عند مواجهة الصعوبات.",
    "Rasa ingin tahu": "الفضول",
    "Berani bertanya dan mencoba memahami sesuatu.": "الجرأة على السؤال ومحاولة فهم الأشياء.",
    "Konsistensi": "الاستمرارية",
    "Melakukan sedikit demi sedikit secara rutin.": "بذل جهود صغيرة ومنتظمة.",
    "Tanggung jawab": "المسؤولية",
    "Menyelesaikan tugas dan belajar dari hasilnya.": "إنجاز المهام والتعلّم من نتائجها.",
    "03 · ARAH MASA DEPAN": "03 · اتجاه المستقبل",
    "Visi hidupku.": "رؤية حياتي.",
    "Gambaran tentang pribadi yang ingin aku bangun di masa depan.": "صورة عن الشخص الذي أريد أن أصبحه في المستقبل.",
    "VISI SAYA": "رؤيتي",
    "Menjadi pribadi yang berilmu, mandiri, bertanggung jawab, dan mampu memberi manfaat bagi orang lain.": "أن أصبح شخصاً عالماً ومستقلاً ومسؤولاً وقادراً على إحداث أثر إيجابي في حياة الآخرين.",
    "Visi ini akan menjadi pengingat saat aku menentukan pilihan dan menghadapi tantangan.": "ستكون هذه الرؤية دليلي عند اتخاذ القرارات ومواجهة التحديات.",
    "Apa arti visi ini bagiku?": "ماذا تعني هذه الرؤية بالنسبة لي؟",
    "Berilmu: terus belajar di sekolah maupun dari pengalaman.": "العلم: مواصلة التعلّم في المدرسة ومن التجارب.",
    "Mandiri: berusaha menyelesaikan tanggung jawab sendiri.": "الاستقلالية: السعي إلى أداء مسؤولياتي بنفسي.",
    "Bertanggung jawab: berani mengakui kesalahan dan memperbaikinya.": "المسؤولية: الشجاعة في الاعتراف بالأخطاء وتصحيحها.",
    "Bermanfaat: menggunakan kemampuan untuk membantu sekitar.": "النفع: استخدام قدراتي لمساعدة من حولي.",
    "04 · LANGKAH NYATA": "04 · خطوات عملية",
    "Misi kecil": "مهام صغيرة",
    "setiap hari.": "كل يوم.",
    "Visi akan lebih berarti ketika diterjemahkan menjadi kebiasaan yang bisa dilakukan.": "تصبح الرؤية أكثر معنى عندما تتحوّل إلى عادات يمكن تطبيقها.",
    "Belajar dengan konsisten": "التعلّم بانتظام",
    "Menyisihkan waktu belajar setiap hari dan mengulang materi yang belum dipahami.": "تخصيص وقت للدراسة كل يوم ومراجعة المواد التي لم أفهمها بعد.",
    "Menjaga kebiasaan positif": "الحفاظ على العادات الإيجابية",
    "Mengatur waktu, beristirahat cukup, dan menyelesaikan tugas sesuai prioritas.": "تنظيم الوقت والحصول على قسط كافٍ من الراحة وإنجاز المهام حسب الأولوية.",
    "Berani mencoba": "الجرأة على التجربة",
    "Mengikuti kegiatan, mengerjakan proyek kecil, dan tidak takut membuat kesalahan.": "المشاركة في الأنشطة والعمل على مشاريع صغيرة وعدم الخوف من الوقوع في الأخطاء.",
    "Mengevaluasi diri": "تقييم الذات",
    "Melihat apa yang sudah berjalan baik dan memperbaiki hal yang masih kurang.": "ملاحظة ما سار على نحو جيد وتحسين ما لا يزال ناقصاً.",
    "Menjaga sikap": "حسن السلوك",
    "Bersikap jujur, menghargai orang lain, dan bertanggung jawab atas pilihan sendiri.": "التحلّي بالصدق واحترام الآخرين وتحمّل مسؤولية خياراتي.",
    "05 · RENCANA PENGEMBANGAN": "05 · خطة التطوير",
    "Target yang": "أهداف",
    "realistis.": "واقعية.",
    "Contoh target pelajar. Sesuaikan dengan kebutuhan dan jadwalmu sendiri.": "أمثلة على أهداف الطلاب. عدّلها بحسب احتياجاتك وجدولك.",
    "Akademik": "أكاديمي",
    "Meningkatkan hasil belajar": "تحسين النتائج الدراسية",
    "Belajar ulang materi yang sulit dan mengerjakan latihan secara rutin.": "إعادة دراسة المواد الصعبة وحلّ التمارين بانتظام.",
    "Waktu": "الوقت",
    "Setiap minggu": "كل أسبوع",
    "Keterampilan": "المهارات",
    "Menyelesaikan proyek kecil": "إنجاز مشروع صغير",
    "Membuat satu proyek sederhana untuk melatih kemampuan baru.": "إنشاء مشروع بسيط لتدريب مهارة جديدة.",
    "1 proyek per bulan": "مشروع واحد كل شهر",
    "Kebiasaan": "العادات",
    "Mengelola waktu": "إدارة الوقت",
    "Membuat daftar prioritas dan mengurangi kebiasaan menunda tugas.": "إعداد قائمة بالأولويات والحدّ من عادة تأجيل المهام.",
    "Evaluasi tiap pekan": "تقييم أسبوعي",
    "Pengembangan diri": "تطوير الذات",
    "Memperluas wawasan": "توسيع الآفاق",
    "Membaca atau mempelajari satu topik baru secara bertahap.": "قراءة أو دراسة موضوع جديد تدريجياً.",
    "15 menit per hari": "15 دقيقة يومياً",
    "Catatan: target di halaman ini masih berupa contoh dan belum tersimpan sebagai data aplikasi.": "ملاحظة: الأهداف في هذه الصفحة مجرد أمثلة ولم تُحفظ كبيانات في التطبيق بعد.",
    "06 · PERJALANAN DIRI": "06 · الرحلة الشخصية",
    "Bertumbuh sedikit demi sedikit,": "النمو شيئاً فشيئاً،",
    "menjadi lebih baik.": "لأصبح أفضل.",
    "Setiap pengalaman membawa pelajaran. Di sini, aku mencatat perkembangan, pencapaian, dan hal-hal yang masih ingin diperbaiki.": "كل تجربة تحمل درساً. هنا أسجّل تقدّمي وإنجازاتي والأمور التي ما زلت أريد تحسينها.",
    "MY DEVELOPMENT": "تطوّري",
    "Perjalanan pengembangan diri": "رحلة تطوير الذات",
    "Gambaran perkembangan dari proses yang sedang dijalani.": "نظرة عامة على تقدّم العملية التي أمرّ بها.",
    "Perkembangan keseluruhan": "التقدّم الإجمالي",
    "Mulai berkembang": "بداية النمو",
    "Terus bertumbuh": "مواصلة النمو",
    "*Persentase ini merupakan ilustrasi dan dapat disesuaikan dengan perkembangan sebenarnya.": "*هذه النسبة توضيحية ويمكن تعديلها لتعكس التقدّم الفعلي.",
    "Bidang pengembangan": "مجالات التطوير",
    "Area yang sedang dikembangkan": "المجالات التي يجري تطويرها",
    "Pengalaman baru": "تجارب جديدة",
    "Contoh pengalaman yang dicatat": "أمثلة على التجارب المسجّلة",
    "Status perjalanan": "حالة الرحلة",
    "Masih terus belajar dan berkembang": "ما زلت أتعلّم وأنمو باستمرار",
    "GROWTH TRACKER": "متتبّع النمو",
    "Area perkembangan": "مجالات التقدّم",
    "Beberapa bidang yang menjadi bagian dari proses pengembangan diri.": "عدة مجالات تشكّل جزءاً من عملية تطوير ذاتي.",
    "Pengetahuan": "المعرفة",
    "Memperluas wawasan melalui pembelajaran, membaca, dan mencari informasi baru.": "توسيع الآفاق عبر التعلّم والقراءة والبحث عن معلومات جديدة.",
    "Terus dikembangkan": "قيد التطوير المستمر",
    "Mempelajari teknologi, mencoba proyek sederhana, dan meningkatkan kemampuan praktis.": "تعلّم التقنية وتجربة مشاريع بسيطة وتحسين المهارات العملية.",
    "Manajemen waktu": "إدارة الوقت",
    "Belajar mengatur prioritas, menyelesaikan tugas, dan menyeimbangkan aktivitas sehari-hari.": "تعلّم ترتيب الأولويات وإنجاز المهام والموازنة بين الأنشطة اليومية.",
    "Perlu ditingkatkan": "بحاجة إلى تحسين",
    "Kepercayaan diri": "الثقة بالنفس",
    "Berani mencoba hal baru, menyampaikan pendapat, dan belajar menghadapi tantangan.": "الجرأة على تجربة أشياء جديدة والتعبير عن الرأي وتعلّم مواجهة التحديات.",
    "Terus dilatih": "ما زلت أتدرّب",
    "MY JOURNEY": "رحلتي",
    "Catatan perjalanan": "سجلّ الرحلة",
    "Contoh tahapan dan pengalaman dalam proses pengembangan diri.": "أمثلة على مراحل وتجارب في عملية تطوير الذات.",
    "TAHAP 01": "المرحلة 01",
    "Memulai proses belajar": "بدء رحلة التعلّم",
    "Mulai mengenali kemampuan diri dan menentukan hal-hal yang ingin dipelajari.": "البدء في معرفة قدراتي وتحديد ما أريد تعلّمه.",
    "Tahap awal": "المرحلة الأولى",
    "TAHAP 02": "المرحلة 02",
    "Mencoba pengalaman baru": "تجربة أشياء جديدة",
    "Mulai mengeksplorasi keterampilan, mengerjakan proyek, dan mempelajari hal baru.": "البدء في استكشاف المهارات والعمل على المشاريع وتعلّم أشياء جديدة.",
    "Pengalaman": "الخبرة",
    "TAHAP 03": "المرحلة 03",
    "Meningkatkan kemampuan": "تحسين القدرات",
    "Berusaha memperdalam pengetahuan dan memperbaiki kemampuan yang masih perlu ditingkatkan.": "السعي إلى تعميق معرفتي وتحسين المهارات التي ما زالت بحاجة إلى تطوير.",
    "Sedang dijalani": "جارٍ حالياً",
    "TAHAP SELANJUTNYA": "المرحلة التالية",
    "Mengevaluasi dan berkembang": "التقييم والنمو",
    "Meninjau hasil yang telah dicapai dan menentukan langkah pengembangan berikutnya.": "مراجعة ما تحقق وتحديد خطوة التطوير التالية.",
    "Berikutnya": "التالي",
    "REFLEKSI DIRI": "التأمل الذاتي",
    "Tidak harus selalu lebih cepat, yang penting tidak berhenti belajar.": "لا يلزم أن أكون الأسرع دائماً، المهم ألّا أتوقف عن التعلّم.",
    "Aku menyadari bahwa perkembangan diri tidak selalu berjalan sesuai rencana. Ada kalanya berhasil, ada juga saat harus mengulang dan memperbaiki kesalahan. Bagiku, setiap proses tetap memiliki arti selama ada kemauan untuk terus bertumbuh.": "أدرك أن تطوّر الذات لا يسير دائماً وفق الخطة. أحياناً ننجح، وأحياناً نحتاج إلى الإعادة وتصحيح الأخطاء. بالنسبة لي، تبقى كل عملية ذات معنى ما دامت هناك رغبة في مواصلة النمو.",
    "— Sebuah perjalanan yang masih berlangsung.": "— رحلة لا تزال مستمرة.",
    "07 · TERHUBUNG": "07 · لنتواصل",
    "Kontak saya": "تواصل معي",
    "Halaman sederhana untuk menampilkan cara orang lain menghubungimu.": "صفحة بسيطة تعرض كيف يمكن للآخرين التواصل معك.",
    "Punya ide atau ingin berdiskusi?": "هل لديك فكرة أو ترغب في النقاش؟",
    "Silakan hubungi saya melalui informasi kontak yang sudah saya sediakan. Jangan lupa mengganti contoh di bawah dengan informasi milikmu sendiri.": "تفضّل بالتواصل معي عبر معلومات الاتصال التي وفّرتها. ولا تنسَ استبدال المثال أدناه بمعلوماتك الخاصة.",
    "Kota": "المدينة",
    "Media sosial": "وسائل التواصل الاجتماعي",
    "✦ RUANG CERITA PRIBADI": "✦ مساحة القصص الشخصية",
    "Setiap hari punya cerita untuk": "لكل يوم قصة",
    "dikenang.": "تستحق أن تُذكر.",
    "Tempat menyimpan cerita, pengalaman, dan kenangan hidupku. Setiap pengalaman punya pelajaran.": "مكان لحفظ قصصي وتجاربي وذكرياتي. لكل تجربة درس.",
    "Tulis cerita ↗": "اكتب قصة ↗",
    "Baca catatanku": "اقرأ ملاحظاتي",
    "🌙 Tidak harus sempurna, yang penting jujur.": "🌙 لا يلزم أن تكون مثالياً، المهم أن تكون صادقاً.",
    "✍️ Tulis": "✍️ اكتب",
    "🌱 Refleksi": "🌱 تأمّل",
    "TULIS CERITA BARU": "اكتب قصة جديدة",
    "Luangkan waktu untuk hari ini.": "خصّص وقتاً لهذا اليوم.",
    "Catat apa yang kamu alami, rasakan, dan pelajari.": "دوّن ما عشته وشعرت به وتعلّمته.",
    "Judul catatan": "عنوان الملاحظة",
    "Contoh: Hari yang menyenangkan": "مثال: يوم رائع",
    "Tanggal": "التاريخ",
    "Cerita hari ini": "قصة اليوم",
    "Ceritakan pengalamanmu hari ini...": "احكِ عن تجربتك اليوم...",
    "✨ Tidak harus sempurna, yang penting jujur.": "✨ لا يلزم أن تكون مثالياً، المهم أن تكون صادقاً.",
    "＋ Simpan catatan": "＋ حفظ الملاحظة",
    "ARSIP": "الأرشيف",
    "Catatan kehidupanku.": "سجلّ حياتي.",
    "catatan": "ملاحظات",
    "✎ Edit": "✎ تعديل",
    "🗑 Hapus": "🗑 حذف",
    "Yakin ingin menghapus catatan ini?": "هل أنت متأكد من حذف هذه الملاحظة؟",
    "Belum ada cerita di sini": "لا توجد قصص هنا بعد",
    "Setiap perjalanan dimulai dari satu langkah. Tulis catatan pertamamu dan simpan kenangan hari ini.": "كل رحلة تبدأ بخطوة. اكتب ملاحظتك الأولى واحفظ ذكريات اليوم.",
    "← Kembali ke Diary": "→ العودة إلى المذكرات",
    "✦ EDIT CATATAN": "✦ تعديل الملاحظة",
    "Rapikan": "رتّب",
    "ceritamu.": "قصتك.",
    "Isi catatan": "نص الملاحظة",
    "Batal": "إلغاء",
    "Simpan perubahan": "حفظ التغييرات",
    "Kirim Pesan": "إرسال رسالة",
    "Punya pertanyaan atau ingin memberikan semangat? Tinggalkan pesan di sini!": "هل لديك سؤال أو تريد إرسال كلمة تشجيع؟ اترك رسالة هنا!",
    "Periksa kembali isianmu:": "يُرجى مراجعة المدخلات:",
    "Nama Pengirim": "اسم المرسل",
    "Masukkan nama kamu": "أدخل اسمك",
    "Isi Pesan": "نص الرسالة",
    "Tulis pesan kamu di sini...": "اكتب رسالتك هنا...",
    "Percakapan": "المحادثة",
    "✦ PERCAKAPAN": "✦ المحادثة",
    "Simpan alamat halaman ini supaya kamu bisa kembali membaca balasan.": "احفظ رابط هذه الصفحة لتتمكن من العودة وقراءة الردود.",
    "Tulis balasan...": "اكتب رداً...",
    "Kirim pesan": "إرسال الرسالة",
    "Pemilik Website": "مالك الموقع",
    "Asisten AboutMe": "مساعد AboutMe",
    "· Otomatis": "· تلقائي",
    "· Pengunjung": "· زائر",
    "Login Admin": "دخول المشرف",
    "Masuk untuk membaca dan membalas pesan pengunjung.": "سجّل الدخول لقراءة رسائل الزوار والرد عليها.",
    "Email Admin": "بريد المشرف الإلكتروني",
    "Masukkan email admin": "أدخل بريد المشرف الإلكتروني",
    "Masukkan password": "أدخل كلمة المرور",
    "Masuk ke Inbox": "الدخول إلى صندوق الوارد",
    "Kotak masuk.": "صندوق الوارد.",
    "Pesan dari pengunjung website. Klik salah satu untuk membaca dan membalas.": "رسائل من زوار الموقع. اختر واحدة لقراءتها والرد عليها.",
    "Keluar": "تسجيل الخروج",
    "Menunggu balasan": "بانتظار الرد",
    "Belum ada pesan masuk": "لا توجد رسائل واردة بعد",
    "Pesan dari halaman Kontak akan muncul di sini.": "ستظهر هنا الرسائل الواردة من صفحة التواصل.",
    "Hapus": "حذف",
    "← Kembali ke kotak masuk": "→ العودة إلى صندوق الوارد",
    "Anda · Pemilik Website": "أنت · مالك الموقع",
    "Tulis balasan untuk ": "اكتب رداً إلى ",
    "Avatar AboutMe": "صورة AboutMe الرمزية",
    "Buka navigasi": "فتح القائمة",
    "Ganti bahasa": "تغيير اللغة",
    "Ganti tema": "تغيير السمة",
    "Switch to English": "التبديل إلى الإنجليزية",
    "Ganti ke Bahasa Indonesia": "التبديل إلى الإندونيسية",
    "Asisten otomatis nantinya akan menangani pesan pengunjung.": "سيتولى المساعد الآلي لاحقاً معالجة رسائل الزوار.",
    "Pesan berhasil dikirim.": "تم إرسال الرسالة بنجاح.",
    "Balasan terkirim.": "تم إرسال الرد.",
    "Status admin berhasil diubah menjadi Online.": "تم تغيير حالة المشرف إلى متصل.",
    "Status admin berhasil diubah menjadi Offline.": "تم تغيير حالة المشرف إلى غير متصل.",
    "Dalam proses": "قيد التنفيذ",
    "Dalam perkembangan": "في طور التطوّر",
    "Aku adalah pelajar yang sedang belajar mengenal diri, membangun kebiasaan baik, dan mempersiapkan masa depan selangkah demi selangkah.": "أنا طالب أتعلّم أن أعرف نفسي وأبني عادات جيدة وأستعد للمستقبل خطوةً بخطوة.",
    "Kenali dirimu, tentukan arah, lalu lakukan perubahan sedikit demi sedikit.": "تعرّف على نفسك، وحدّد اتجاهك، وأحدث التغيير شيئاً فشيئاً.",
    "Pelajar yang terus belajar": "طالب يواصل التعلّم",
    "Kenali, rencanakan, lakukan.": "اعرف، خطّط، نفّذ.",
    "Pelajar": "طالب",
    "Aktif": "نشط",
    "Halo,": "مرحباً،",
    "Balasan otomatis": "رد تلقائي",
    "Tulis pesan": "اكتب رسالة",
    "Foto profil": "صورة الملف الشخصي",
    "Foto profil AboutMe": "صورة AboutMe الشخصية",
    "Ilustrasi profil pelajar": "رسم توضيحي لملف طالب",
    "Ubah tema": "تغيير السمة",

    // PENDIDIKAN
    "08 · PERJALANAN BELAJAR": "08 · رحلة التعلّم",
    "Perjalanan": "رحلة",
    "Pendidikan.": "التعليم.",
    "Setiap jenjang pendidikan memberikan pengalaman, pengetahuan, dan pelajaran baru yang membentuk diriku.": "تمنحني كل مرحلة تعليمية تجارب ومعارف ودروسًا جديدة تساهم في بناء شخصيتي.",
    "LEARNING": "التعلّم",
    "JOURNEY": "رحلة",
    "01 / INTRODUCTION": "01 / المقدمة",
    "Belajar bukan hanya": "التعلّم ليس مجرد",
    "tentang": "أمر يتعلق بـ",
    "sekolah.": "المدرسة.",
    "Pendidikan memberiku kesempatan untuk mengenal banyak hal, mengembangkan kemampuan, dan mempersiapkan masa depan.": "يمنحني التعليم فرصة لاكتشاف أشياء كثيرة، وتطوير قدراتي، والاستعداد للمستقبل.",
    "EDUCATION HISTORY": "السجل التعليمي",
    "Riwayat Pendidikan": "المسيرة التعليمية",
    "Perjalanan pendidikan saya dari waktu ke waktu.": "رحلتي التعليمية عبر السنوات.",
    "03 STAGES": "٣ مراحل",
    "SEKOLAH DASAR": "المدرسة الابتدائية",
    "SEKOLAH MENENGAH PERTAMA": "المدرسة الإعدادية",
    "SEKOLAH MENENGAH ATAS": "المدرسة الثانوية",
    "Completed": "مكتمل",
    "In Progress": "قيد الدراسة",
    "Sekarang": "حتى الآن",
    "Memulai perjalanan pendidikan dengan mengenal berbagai pengetahuan dasar, membangun kebiasaan baik, serta belajar berinteraksi dengan lingkungan.": "بدأت رحلتي التعليمية بالتعرّف على المعارف الأساسية، وبناء العادات الجيدة، وتعلّم التفاعل مع البيئة المحيطة.",
    "Foundation & Discovery": "التأسيس والاكتشاف",
    "Mengembangkan kemampuan akademik, mengenali minat dan potensi diri, serta belajar bekerja sama dan menghadapi pengalaman baru.": "طوّرت قدراتي الأكاديمية، واكتشفت اهتماماتي وإمكاناتي، وتعلّمت التعاون والتعامل مع التجارب الجديدة.",
    "Development & Exploration": "التطوير والاستكشاف",
    "Memperluas wawasan, mengembangkan potensi, meningkatkan keterampilan, dan mempersiapkan diri untuk meraih tujuan di masa depan.": "أعمل على توسيع معرفتي، وتنمية قدراتي، وتحسين مهاراتي، والاستعداد لتحقيق أهدافي المستقبلية.",
    "Growth & Future Preparation": "النمو والاستعداد للمستقبل",
    "KEEP MOVING FORWARD": "واصل التقدّم",
    "Perjalanan masih": "الرحلة",
    "berlanjut.": "مستمرة.",
    "Pendidikan adalah proses yang terus berjalan. Aku ingin terus belajar, mengembangkan kemampuan, dan memanfaatkan setiap kesempatan untuk menjadi lebih baik.": "التعليم عملية مستمرة. أريد مواصلة التعلّم وتطوير قدراتي والاستفادة من كل فرصة لأصبح شخصًا أفضل.",
    "ALWAYS LEARNING": "التعلّم دائمًا",
    "ALWAYS GROWING": "التطوّر دائمًا"
};


// Judul yang terpecah <span>: satu terjemahan per potongan teks (urut sesuai HTML)
const arabicSplitTranslations = {
    "Identitas diriku.": ["", "هويتي."],
    "Visi hidupku.": ["رؤية ", "حياتي."],
    "Misi kecil setiap hari.": ["مهام صغيرة ", "كل يوم."],
    "Rapikan ceritamu.": ["رتّب ", "قصتك."],
    "Kontak saya.": ["تواصل ", "معي."],
    "Kotak masuk.": ["", "صندوق الوارد."],
    "Sedikit cerita tentang saya.": ["قليل من القصة ", "عنّي."],
    "Target yang realistis.": ["أهداف ", "واقعية."],
    "Bertumbuh sedikit demi sedikit, menjadi lebih baik.": ["النمو شيئاً فشيئاً، ", "لأصبح أفضل."]
};

// Navbar / footer (atribut data-i18n)
const arabicI18n = {
    brand_subtitle: "مساحة نمو للطلاب",
    home: "الرئيسية",
    identitas: "الهوية",
    tentang: "عنّي",
    visi: "الرؤية",
    misi: "الرسالة",
    target: "الأهداف",
    progress: "التقدّم",
    lainnya: "المزيد",
    kontak: "التواصل",
    diary: "المذكرات",
    pesan: "الرسائل",
    inbox: "صندوق المشرف",
    footer: "أُنشئ كمساحة للتعلّم وتطوير الذات.",
    footer_link: "لنتواصل ↗"
};


// =========================================================
// 5. PENGATURAN BAHASA (ID / EN / AR)
// Urutan tombol: ID -> EN -> AR -> ID
// =========================================================

const LANGUAGES = ["id", "en", "ar"];

const languageMeta = {
    id: { label: "ID", dir: "ltr", switchTitle: "Ganti ke Bahasa Indonesia" },
    en: { label: "EN", dir: "ltr", switchTitle: "Switch to English" },
    ar: { label: "AR", dir: "rtl", switchTitle: "Switch to Arabic · التبديل إلى العربية" }
};

function readSavedLanguage() {
    try {
        return localStorage.getItem("language") || "id";
    } catch (e) {
        return "id";
    }
}

function saveLanguage(lang) {
    try {
        localStorage.setItem("language", lang);
    } catch (e) {
        // abaikan jika penyimpanan diblokir
    }
}

let currentLanguage = readSavedLanguage();

if (!LANGUAGES.includes(currentLanguage)) {
    currentLanguage = "id";
}

function nextLanguage(lang) {
    return LANGUAGES[(LANGUAGES.indexOf(lang) + 1) % LANGUAGES.length];
}


// =========================================================
// 6. UTILITAS
// =========================================================

// Samakan spasi/baris baru supaya teks multi-baris di Blade tetap cocok.
const normalize = (text) => (text || "").replace(/\s+/g, " ").trim();

const buildMap = (obj) =>
    new Map(Object.entries(obj).map(([k, v]) => [normalize(k), v]));

const phraseMaps = {
    en: buildMap(phraseTranslations),
    ar: buildMap(arabicTranslations)
};

const splitMaps = {
    en: buildMap(splitTranslations),
    ar: buildMap(arabicSplitTranslations)
};

// Jika terjemahan Arab belum ada, pakai Inggris (bukan Indonesia).
function lookupPhrase(key) {
    if (currentLanguage === "ar") {
        return phraseMaps.ar.get(key) ?? phraseMaps.en.get(key);
    }

    if (currentLanguage === "en") {
        return phraseMaps.en.get(key);
    }

    return undefined;
}

function lookupSplit(key) {
    if (currentLanguage === "ar") {
        return splitMaps.ar.get(key) ?? splitMaps.en.get(key);
    }

    if (currentLanguage === "en") {
        return splitMaps.en.get(key);
    }

    return undefined;
}

const SKIP_SELECTOR =
    "script, style, textarea, [data-i18n], [data-no-translate], #languageToggle";

function saveOriginalText(node) {
    if (node.__aboutMeOriginal === undefined) {
        node.__aboutMeOriginal = node.nodeValue;
    }
}

function getOriginalDataKey(attribute) {
    return "original" + attribute.replace(
        /-([a-z])/g,
        (_, letter) => letter.toUpperCase()
    );
}

// Ambil text node yang layak diterjemahkan. Memakai teks ASLI
// agar node yang dikosongkan tetap bisa dipulihkan.
function getTextNodes(root) {
    const walker = document.createTreeWalker(root, NodeFilter.SHOW_TEXT, {
        acceptNode(node) {
            const text = node.__aboutMeOriginal ?? node.nodeValue;

            if (!text || !text.trim()) return NodeFilter.FILTER_REJECT;

            const parent = node.parentElement;

            if (!parent || parent.closest(SKIP_SELECTOR)) {
                return NodeFilter.FILTER_REJECT;
            }

            return NodeFilter.FILTER_ACCEPT;
        }
    });

    const nodes = [];

    while (walker.nextNode()) {
        nodes.push(walker.currentNode);
    }

    return nodes;
}


// =========================================================
// 7. GAYA KHUSUS BAHASA ARAB
// letter-spacing & uppercase memutus huruf Arab yang bersambung,
// jadi dimatikan saat bahasa Arab aktif.
// =========================================================

function injectArabicStyles() {
    if (document.getElementById("aboutme-arabic-style")) return;

    const style = document.createElement("style");
    style.id = "aboutme-arabic-style";
    style.textContent = `
html[lang="ar"] body,
html[lang="ar"] button,
html[lang="ar"] input,
html[lang="ar"] textarea,
html[lang="ar"] select {
    font-family: "Noto Sans Arabic", "Segoe UI", Tahoma, Arial, sans-serif;
}
html[lang="ar"] * {
    letter-spacing: 0 !important;
    text-transform: none !important;
}
html[lang="ar"] h1,
html[lang="ar"] h2,
html[lang="ar"] h3 {
    line-height: 1.4;
}
`;

    document.head.appendChild(style);
}


// =========================================================
// 8. MENERJEMAHKAN TEKS
// =========================================================

function markSplitHeadings() {
    if (currentLanguage === "id") return;

    document
        .querySelectorAll("h1, h2, h3, h4, p, li, label")
        .forEach(el => {
            if (el.closest(SKIP_SELECTOR)) return;

            const nodes = getTextNodes(el);

            if (nodes.length < 2) return;

            nodes.forEach(saveOriginalText);

            const full = normalize(
                nodes.map(n => n.__aboutMeOriginal).join("")
            );

            const parts = lookupSplit(full);

            if (parts && parts.length === nodes.length) {
                nodes.forEach((node, i) => {
                    node.__aboutMeSplit = parts[i];
                });
            }
        });
}

function translateTextNodes() {
    const nodes = getTextNodes(document.body);

    nodes.forEach(node => {
        saveOriginalText(node);
        node.__aboutMeSplit = undefined;
    });

    markSplitHeadings();

    nodes.forEach(node => {
        const original = node.__aboutMeOriginal;

        const translated =
            node.__aboutMeSplit !== undefined
                ? node.__aboutMeSplit
                : lookupPhrase(normalize(original));

        if (currentLanguage !== "id" && translated !== undefined) {
            const leading = original.match(/^\s*/)?.[0] || "";
            const trailing = original.match(/\s*$/)?.[0] || "";

            node.nodeValue = leading + translated.trim() + trailing;
        } else {
            node.nodeValue = original;
        }
    });
}


// =========================================================
// 9. MENERJEMAHKAN ATRIBUT HTML
// =========================================================

function translateAttributes() {
    const elements = document.querySelectorAll(
        "[placeholder], [aria-label], [title], [alt]"
    );

    elements.forEach(el => {
        // Tombol bahasa diatur langsung oleh applyLanguage().
        if (el.id === "languageToggle") return;

        ["placeholder", "aria-label", "title", "alt"].forEach(attr => {
            if (!el.hasAttribute(attr)) return;

            const dataKey = getOriginalDataKey(attr);

            if (el.dataset[dataKey] === undefined) {
                el.dataset[dataKey] = el.getAttribute(attr);
            }

            const original = el.dataset[dataKey];
            const key = normalize(original);

            const translated =
                lookupPhrase(key) ||
                attributeTranslations[original] ||
                attributeTranslations[key] ||
                original;

            el.setAttribute(
                attr,
                currentLanguage === "id" ? original : translated
            );
        });
    });
}


// =========================================================
// 10. NAVBAR DAN DATA-I18N
// =========================================================

function translateI18nElements() {
    document.querySelectorAll("[data-i18n]").forEach(el => {
        const key = el.dataset.i18n;
 
        const translated =
            (currentLanguage === "ar" ? arabicI18n[key] : null) ||
            i18nTranslations[key];
 
        if (!translated) return;
 
        // Hanya node teks LANGSUNG milik elemen ini. Teks asli disimpan
        // per node, sehingga node spasi (mis. sebelum <span>ikon</span>)
        // tidak pernah tertimpa.
        const textNodes = Array.from(el.childNodes).filter(
            node =>
                node.nodeType === Node.TEXT_NODE &&
                (node.__aboutMeI18nOriginal !== undefined ||
                    node.nodeValue.trim())
        );
 
        textNodes.forEach(node => {
            if (node.__aboutMeI18nOriginal === undefined) {
                node.__aboutMeI18nOriginal = node.nodeValue;
            }
        });
 
        if (currentLanguage !== "id") {
            if (textNodes.length > 0) {
                const original = textNodes[0].__aboutMeI18nOriginal;
                const leading = original.match(/^\s*/)?.[0] || "";
                const trailing = original.match(/\s*$/)?.[0] || "";
 
                textNodes[0].nodeValue = leading + translated + trailing;
 
                textNodes.slice(1).forEach(node => {
                    node.nodeValue = "";
                });
            } else {
                const node = document.createTextNode(translated);
                node.__aboutMeI18nOriginal = "";
                el.appendChild(node);
            }
        } else {
            textNodes.forEach(node => {
                node.nodeValue = node.__aboutMeI18nOriginal;
            });
        }
    });
}

// =========================================================
// 11. OBSERVER: TERJEMAHKAN KONTEN YANG MUNCUL BELAKANGAN
// =========================================================

let languageObserver = null;
let observerScheduled = false;

function startObserver() {
    if (!document.body) return;

    if (!languageObserver) {
        languageObserver = new MutationObserver(() => {
            if (observerScheduled || currentLanguage === "id") return;

            observerScheduled = true;

            requestAnimationFrame(() => {
                observerScheduled = false;
                translateAll();
            });
        });
    }

    languageObserver.observe(document.body, {
        childList: true,
        subtree: true
    });
}

function translateAll() {
    // Putuskan observer sementara agar perubahan dari kode ini
    // tidak memicu loop tak berujung.
    languageObserver?.disconnect();

    translateTextNodes();
    translateAttributes();
    translateI18nElements();

    startObserver();
}


// =========================================================
// 12. FUNGSI UTAMA PERGANTIAN BAHASA
// =========================================================

function applyLanguage() {
    const meta = languageMeta[currentLanguage];

    document.documentElement.lang = currentLanguage;
    document.documentElement.dir = meta.dir;

    injectArabicStyles();

    const button = document.getElementById("languageToggle");

    if (button) {
        const next = languageMeta[nextLanguage(currentLanguage)];

        button.textContent = next.label;
        button.title = next.switchTitle;
        button.setAttribute("aria-label", next.switchTitle);
    }

    translateAll();
}

function translateDynamicContent() {
    translateAll();
}


// =========================================================
// 13. FUNGSI GLOBAL
// =========================================================

window.applyAboutMeLanguage = applyLanguage;
window.translateAboutMeDynamicContent = translateDynamicContent;


// =========================================================
// 14. TOMBOL PERGANTIAN BAHASA
// =========================================================

function initializeLanguageSystem() {
    applyLanguage();

    const button = document.getElementById("languageToggle");

    if (button && !button.dataset.languageListenerAttached) {
        button.dataset.languageListenerAttached = "true";

        button.addEventListener("click", () => {
            currentLanguage = nextLanguage(currentLanguage);

            saveLanguage(currentLanguage);

            applyLanguage();
        });
    }
}

if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initializeLanguageSystem);
} else {
    initializeLanguageSystem();
}