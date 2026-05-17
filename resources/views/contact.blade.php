<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Hubungi Kami - CharityHub</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-error-container": "#93000a",
                        "secondary-container": "#50d9fe",
                        "on-primary": "#ffffff",
                        "tertiary-container": "#a95f00",
                        "on-surface-variant": "#404850",
                        "on-error": "#ffffff",
                        "inverse-on-surface": "#ecf1ff",
                        "inverse-surface": "#263143",
                        "outline-variant": "#bfc7d1",
                        "surface-container-high": "#dee8ff",
                        "on-secondary-container": "#005c70",
                        "on-surface": "#111c2d",
                        "tertiary-fixed": "#ffdcc0",
                        "secondary-fixed-dim": "#4cd6fb",
                        "tertiary-fixed-dim": "#ffb877",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-fixed-variant": "#004e5f",
                        "surface-container-low": "#f0f3ff",
                        "surface-bright": "#f9f9ff",
                        "surface-container": "#e7eeff",
                        "background": "#f9f9ff",
                        "on-tertiary-fixed": "#2e1600",
                        "on-background": "#111c2d",
                        "error": "#ba1a1a",
                        "on-secondary-fixed": "#001f27",
                        "on-primary-container": "#f3f7ff",
                        "on-primary-fixed": "#001d32",
                        "surface-variant": "#d8e3fb",
                        "secondary": "#00677d",
                        "surface-tint": "#006399",
                        "surface": "#f9f9ff",
                        "error-container": "#ffdad6",
                        "on-tertiary-container": "#fff6f1",
                        "primary-fixed-dim": "#94ccff",
                        "primary-container": "#0077b6",
                        "on-primary-fixed-variant": "#004b74",
                        "on-tertiary-fixed-variant": "#6c3a00",
                        "secondary-fixed": "#b3ebff",
                        "on-secondary": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "primary": "#005d90",
                        "inverse-primary": "#94ccff",
                        "surface-container-highest": "#d8e3fb",
                        "primary-fixed": "#cde5ff",
                        "tertiary": "#864a00",
                        "outline": "#707881",
                        "surface-dim": "#cfdaf2"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "margin-desktop": "48px",
                        "container-max-width": "1280px",
                        "margin-mobile": "16px",
                        "unit": "8px",
                        "section-gap": "80px"
                    },
                    "fontFamily": {
                        "display-lg-mobile": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "body-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "display-lg-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }]
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .contact-card {
            transition: all 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(0, 93, 144, 0.12);
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.6s ease-out forwards;
        }
        .animate-delay-1 { animation-delay: 0.1s; opacity: 0; }
        .animate-delay-2 { animation-delay: 0.2s; opacity: 0; }
        .animate-delay-3 { animation-delay: 0.3s; opacity: 0; }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased">

<!-- TopNavBar -->
<nav class="bg-surface/80 dark:bg-surface/80 backdrop-blur-md text-primary dark:text-primary-fixed-dim font-label-md text-label-md top-0 sticky z-50 shadow-sm">
    <div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-20 max-w-container-max-width mx-auto">
        <a href="/" class="font-display-lg text-headline-md font-bold text-primary dark:text-primary-fixed-dim hover:opacity-80 transition-opacity">
            CharityHub
        </a>
        <div class="hidden md:flex items-center gap-gutter">
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="/">Home</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="/#campaigns">Campaigns</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="/about">About</a>
            <a class="text-primary border-b-2 border-primary pb-1" href="/contact">Contact</a>
        </div>
        <div class="hidden md:block" id="auth-btn-desktop">
            <a href="/login" class="inline-block bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity">
                Login / Daftar
            </a>
        </div>
        <button class="md:hidden text-primary" onclick="document.getElementById('mobileMenu').classList.toggle('hidden')">
            <span class="material-symbols-outlined">menu</span>
        </button>
    </div>
    <!-- Mobile Menu -->
    <div id="mobileMenu" class="hidden md:hidden bg-surface border-t border-outline-variant/20 px-margin-mobile py-4 space-y-3">
        <a class="block py-2 text-on-surface-variant hover:text-primary transition-colors" href="/">Home</a>
        <a class="block py-2 text-on-surface-variant hover:text-primary transition-colors" href="/#campaigns">Campaigns</a>
        <a class="block py-2 text-on-surface-variant hover:text-primary transition-colors" href="/about">About</a>
        <a class="block py-2 text-primary font-semibold" href="/contact">Contact</a>
        <div id="auth-btn-mobile"></div>
    </div>
</nav>

<!-- Main Content -->
<main class="w-full">
    <!-- Hero Section -->
    <section class="w-full relative overflow-hidden bg-gradient-to-br from-primary/5 via-transparent to-secondary-container/5">
        <div class="px-margin-mobile md:px-margin-desktop py-16 md:py-section-gap flex flex-col items-center text-center max-w-container-max-width mx-auto gap-6 relative z-10">
            <div class="inline-block">
                <span class="px-4 py-2 bg-primary-container/30 text-primary rounded-full font-label-sm text-label-sm border border-primary/20">💬 Kami Siap Membantu</span>
            </div>
            <h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-background leading-tight max-w-3xl">
                Hubungi <span class="text-primary">Tim Kami</span>
            </h1>
            <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                Ada pertanyaan, saran, atau ingin berkolaborasi? Kami dengan senang hati mendengarkan Anda. Tim CharityHub siap merespons dalam 1x24 jam kerja.
            </p>
        </div>
    </section>

    <!-- Contact Cards -->
    <section class="w-full px-margin-mobile md:px-margin-desktop max-w-container-max-width mx-auto -mt-8 mb-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Email Card -->
            <div class="contact-card bg-surface rounded-2xl border border-outline-variant/30 p-8 text-center shadow-sm animate-fade-in-up animate-delay-1">
                <div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
                    <span class="material-symbols-outlined text-[32px] text-primary">mail</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Email</h3>
                <p class="font-body-md text-body-md text-on-surface-variant mb-3">Kirim pesan kapan saja</p>
                <a href="mailto:support@charityhub.id" class="text-primary font-label-md hover:underline">support@charityhub.id</a>
            </div>

            <!-- Phone Card -->
            <div class="contact-card bg-surface rounded-2xl border border-outline-variant/30 p-8 text-center shadow-sm animate-fade-in-up animate-delay-2">
                <div class="w-16 h-16 rounded-2xl bg-secondary-container/30 flex items-center justify-center mx-auto mb-4">
                    <span class="material-symbols-outlined text-[32px] text-secondary">call</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Telepon</h3>
                <p class="font-body-md text-body-md text-on-surface-variant mb-3">Senin - Jumat, 09:00 - 17:00</p>
                <a href="tel:+62215551234" class="text-primary font-label-md hover:underline">+62 21 555 1234</a>
            </div>

            <!-- Location Card -->
            <div class="contact-card bg-surface rounded-2xl border border-outline-variant/30 p-8 text-center shadow-sm animate-fade-in-up animate-delay-3">
                <div class="w-16 h-16 rounded-2xl bg-tertiary/10 flex items-center justify-center mx-auto mb-4">
                    <span class="material-symbols-outlined text-[32px] text-tertiary">location_on</span>
                </div>
                <h3 class="font-headline-md text-headline-md text-on-surface mb-2">Kantor</h3>
                <p class="font-body-md text-body-md text-on-surface-variant mb-3">Kunjungi kami langsung</p>
                <p class="text-primary font-label-md">Jl. Kebaikan No. 10, Jakarta Selatan</p>
            </div>
        </div>
    </section>

    <!-- Contact Form + FAQ Section -->
    <section class="w-full px-margin-mobile md:px-margin-desktop py-section-gap max-w-container-max-width mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-gutter">
            <!-- Left: Contact Form -->
            <div class="lg:col-span-3">
                <div class="bg-surface rounded-2xl border border-outline-variant/30 p-8 md:p-10 shadow-sm">
                    <h2 class="font-headline-lg text-headline-lg text-on-background mb-2">Kirim Pesan</h2>
                    <p class="font-body-md text-body-md text-on-surface-variant mb-8">Isi formulir di bawah ini dan kami akan segera menghubungi Anda kembali.</p>

                    <form id="contactForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Nama -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-md text-label-md text-on-surface" for="contact-name">Nama Lengkap <span class="text-error">*</span></label>
                                <input class="w-full px-4 py-3 rounded-xl border-2 border-outline-variant bg-surface focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all font-body-md text-on-surface placeholder:text-outline shadow-sm" id="contact-name" name="name" placeholder="Masukkan nama Anda" required type="text"/>
                            </div>
                            <!-- Email -->
                            <div class="flex flex-col gap-1.5">
                                <label class="font-label-md text-label-md text-on-surface" for="contact-email">Email <span class="text-error">*</span></label>
                                <input class="w-full px-4 py-3 rounded-xl border-2 border-outline-variant bg-surface focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all font-body-md text-on-surface placeholder:text-outline shadow-sm" id="contact-email" name="email" placeholder="email@contoh.com" required type="email"/>
                            </div>
                        </div>

                        <!-- Subjek -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-on-surface" for="contact-subject">Subjek <span class="text-error">*</span></label>
                            <select class="w-full px-4 py-3 rounded-xl border-2 border-outline-variant bg-surface font-body-md text-on-surface shadow-sm focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all" id="contact-subject" name="subject" required>
                                <option value="" disabled selected>Pilih topik pesan Anda</option>
                                <option value="donasi">Pertanyaan tentang Donasi</option>
                                <option value="kampanye">Pertanyaan tentang Kampanye</option>
                                <option value="akun">Masalah Akun</option>
                                <option value="kerjasama">Kerjasama & Partnership</option>
                                <option value="laporan">Pelaporan Masalah</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <!-- Pesan -->
                        <div class="flex flex-col gap-1.5">
                            <label class="font-label-md text-label-md text-on-surface" for="contact-message">Pesan <span class="text-error">*</span></label>
                            <textarea class="w-full px-4 py-3 rounded-xl border-2 border-outline-variant bg-surface focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all font-body-md text-on-surface placeholder:text-outline shadow-sm resize-none" id="contact-message" name="message" placeholder="Tulis pesan Anda di sini..." required rows="5"></textarea>
                            <span class="text-right font-label-sm text-label-sm text-outline"><span id="charCount">0</span>/1000</span>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" id="submitBtn" class="w-full md:w-auto bg-primary text-on-primary font-label-md px-8 py-4 rounded-xl hover:bg-primary-container hover:shadow-lg transition-all duration-300 shadow-md transform hover:scale-105 active:scale-95 flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[20px]">send</span>
                            Kirim Pesan
                        </button>
                    </form>

                    <!-- Success Message (hidden by default) -->
                    <div id="successMessage" class="hidden mt-8 p-6 bg-green-50 border border-green-200 rounded-2xl text-center">
                        <span class="material-symbols-outlined text-[48px] text-green-600 mb-3 block">check_circle</span>
                        <h3 class="font-headline-md text-headline-md text-green-800 mb-2">Pesan Terkirim!</h3>
                        <p class="font-body-md text-body-md text-green-700">Terima kasih telah menghubungi kami. Tim kami akan merespons dalam 1x24 jam kerja.</p>
                    </div>
                </div>
            </div>

            <!-- Right: FAQ -->
            <div class="lg:col-span-2">
                <div class="bg-surface rounded-2xl border border-outline-variant/30 p-8 shadow-sm sticky top-[100px]">
                    <h2 class="font-headline-md text-headline-md text-on-background mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">help</span>
                        Pertanyaan Umum
                    </h2>

                    <div class="space-y-4" id="faqList">
                        <!-- FAQ Item 1 -->
                        <div class="faq-item border border-outline-variant/20 rounded-xl overflow-hidden">
                            <button class="faq-toggle w-full text-left p-4 flex items-center justify-between hover:bg-surface-container-low transition-colors" onclick="toggleFaq(this)">
                                <span class="font-label-md text-on-surface font-semibold pr-4">Bagaimana cara berdonasi?</span>
                                <span class="material-symbols-outlined text-[20px] text-primary faq-icon transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-answer hidden px-4 pb-4">
                                <p class="font-body-md text-body-md text-on-surface-variant">Pilih kampanye yang ingin Anda dukung, klik tombol "Donasi Sekarang", tentukan nominal, dan pilih metode pembayaran. Semua transaksi tercatat transparan.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 2 -->
                        <div class="faq-item border border-outline-variant/20 rounded-xl overflow-hidden">
                            <button class="faq-toggle w-full text-left p-4 flex items-center justify-between hover:bg-surface-container-low transition-colors" onclick="toggleFaq(this)">
                                <span class="font-label-md text-on-surface font-semibold pr-4">Bagaimana saya menjadi Campaigner?</span>
                                <span class="material-symbols-outlined text-[20px] text-primary faq-icon transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-answer hidden px-4 pb-4">
                                <p class="font-body-md text-body-md text-on-surface-variant">Daftar akun baru dan pilih role "Campaigner" saat registrasi. Setelah itu Anda bisa langsung membuat kampanye penggalangan dana melalui CMS Dashboard.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 3 -->
                        <div class="faq-item border border-outline-variant/20 rounded-xl overflow-hidden">
                            <button class="faq-toggle w-full text-left p-4 flex items-center justify-between hover:bg-surface-container-low transition-colors" onclick="toggleFaq(this)">
                                <span class="font-label-md text-on-surface font-semibold pr-4">Apakah donasi saya aman?</span>
                                <span class="material-symbols-outlined text-[20px] text-primary faq-icon transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-answer hidden px-4 pb-4">
                                <p class="font-body-md text-body-md text-on-surface-variant">Ya, seluruh transaksi menggunakan enkripsi SSL dan setiap rupiah bisa dilacak melalui fitur transparansi dana kami. Anda bisa melihat riwayat pemasukan dan pencairan setiap kampanye.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 4 -->
                        <div class="faq-item border border-outline-variant/20 rounded-xl overflow-hidden">
                            <button class="faq-toggle w-full text-left p-4 flex items-center justify-between hover:bg-surface-container-low transition-colors" onclick="toggleFaq(this)">
                                <span class="font-label-md text-on-surface font-semibold pr-4">Bagaimana cara melihat penggunaan dana?</span>
                                <span class="material-symbols-outlined text-[20px] text-primary faq-icon transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-answer hidden px-4 pb-4">
                                <p class="font-body-md text-body-md text-on-surface-variant">Buka detail kampanye yang Anda dukung. Di bagian "Transparansi Dana" Anda bisa melihat seluruh riwayat donasi masuk dan pencairan dana keluar secara real-time.</p>
                            </div>
                        </div>

                        <!-- FAQ Item 5 -->
                        <div class="faq-item border border-outline-variant/20 rounded-xl overflow-hidden">
                            <button class="faq-toggle w-full text-left p-4 flex items-center justify-between hover:bg-surface-container-low transition-colors" onclick="toggleFaq(this)">
                                <span class="font-label-md text-on-surface font-semibold pr-4">Apakah saya bisa membatalkan donasi?</span>
                                <span class="material-symbols-outlined text-[20px] text-primary faq-icon transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="faq-answer hidden px-4 pb-4">
                                <p class="font-body-md text-body-md text-on-surface-variant">Donasi yang sudah dikonfirmasi bersifat final. Namun, jika terjadi kendala teknis silakan hubungi kami melalui formulir di halaman ini atau email ke support@charityhub.id.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Footer -->
<footer class="bg-surface-container-low border-t border-outline-variant/20 w-full py-12">
    <div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-mobile md:px-margin-desktop gap-gutter max-w-container-max-width mx-auto">
        <div class="font-display-lg text-headline-md font-bold text-primary">
            CharityHub
        </div>
        <div class="text-on-surface-variant font-body-md text-body-md text-center md:text-left">
            © 2024 CharityHub. Transparansi dalam Setiap Donasi.
        </div>
        <div class="flex gap-6">
            <a class="text-on-surface-variant hover:text-primary underline transition-all font-body-md text-body-md" href="#">Terms of Service</a>
            <a class="text-on-surface-variant hover:text-primary underline transition-all font-body-md text-body-md" href="#">Privacy Policy</a>
            <a class="text-on-surface-variant hover:text-primary underline transition-all font-body-md text-body-md" href="#">FAQ</a>
        </div>
    </div>
</footer>

<script>
    // FAQ Toggle
    function toggleFaq(btn) {
        const answer = btn.nextElementSibling;
        const icon = btn.querySelector('.faq-icon');
        const isOpen = !answer.classList.contains('hidden');

        // Close all
        document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
        document.querySelectorAll('.faq-icon').forEach(i => i.style.transform = 'rotate(0deg)');

        // Toggle current
        if (!isOpen) {
            answer.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        }
    }

    // Character counter
    const messageField = document.getElementById('contact-message');
    const charCount = document.getElementById('charCount');
    messageField.addEventListener('input', () => {
        const len = messageField.value.length;
        charCount.textContent = len;
        if (len > 1000) {
            charCount.classList.add('text-error');
            messageField.value = messageField.value.substring(0, 1000);
            charCount.textContent = 1000;
        } else {
            charCount.classList.remove('text-error');
        }
    });

    // Form submission
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const name = document.getElementById('contact-name').value.trim();
        const email = document.getElementById('contact-email').value.trim();
        const subject = document.getElementById('contact-subject').value;
        const message = document.getElementById('contact-message').value.trim();

        if (!name || !email || !subject || !message) {
            alert('Mohon lengkapi semua field yang wajib diisi.');
            return;
        }

        // Show loading
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined text-[20px] animate-spin">progress_activity</span> Mengirim...';

        // Simulate send (replace with actual API call when ready)
        setTimeout(() => {
            document.getElementById('contactForm').classList.add('hidden');
            document.getElementById('successMessage').classList.remove('hidden');
        }, 1500);
    });
    // Dynamic auth button
    (function() {
        const token = localStorage.getItem('jwt_token');
        const userName = localStorage.getItem('user_name') || 'User';
        const userRole = localStorage.getItem('user_role') || '';
        const desktopBtn = document.getElementById('auth-btn-desktop');
        const mobileBtn = document.getElementById('auth-btn-mobile');
        if (token) {
            const profileLink = userRole === 'Campaigner' ? '/cms/dashboard' : '/profile';
            desktopBtn.innerHTML = `<a href="${profileLink}" class="inline-flex items-center gap-2 bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity"><span class="material-symbols-outlined text-[18px]">person</span>${userName}</a>`;
            if (mobileBtn) mobileBtn.innerHTML = `<a class="block py-2 bg-primary text-on-primary text-center rounded-lg" href="${profileLink}">${userName} — Profil</a>`;
        } else {
            if (mobileBtn) mobileBtn.innerHTML = '<a class="block py-2 bg-primary text-on-primary text-center rounded-lg" href="/login">Login / Daftar</a>';
        }
    })();
</script>
</body>
</html>
