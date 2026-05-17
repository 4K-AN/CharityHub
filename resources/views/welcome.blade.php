<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>About Us - CharityHub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1;
        }
    </style>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#b3ebff",
                        "tertiary-fixed": "#ffdcc0",
                        "secondary-container": "#50d9fe",
                        "outline": "#707881",
                        "inverse-primary": "#94ccff",
                        "tertiary-container": "#a95f00",
                        "surface-bright": "#f9f9ff",
                        "surface-dim": "#cfdaf2",
                        "on-secondary": "#ffffff",
                        "background": "#f9f9ff",
                        "on-error": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "surface-container-high": "#dee8ff",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed-variant": "#6c3a00",
                        "on-surface": "#111c2d",
                        "tertiary-fixed-dim": "#ffb877",
                        "on-secondary-fixed": "#001f27",
                        "error-container": "#ffdad6",
                        "on-secondary-fixed-variant": "#004e5f",
                        "surface-container": "#e7eeff",
                        "surface-container-low": "#f0f3ff",
                        "primary-fixed": "#cde5ff",
                        "primary-container": "#0077b6",
                        "secondary-fixed-dim": "#4cd6fb",
                        "primary-fixed-dim": "#94ccff",
                        "inverse-on-surface": "#ecf1ff",
                        "surface-variant": "#d8e3fb",
                        "on-primary-fixed": "#001d32",
                        "tertiary": "#864a00",
                        "on-error-container": "#93000a",
                        "on-tertiary-fixed": "#2e1600",
                        "on-primary-container": "#f3f7ff",
                        "inverse-surface": "#263143",
                        "outline-variant": "#bfc7d1",
                        "on-primary": "#ffffff",
                        "on-background": "#111c2d",
                        "on-secondary-container": "#005c70",
                        "surface-tint": "#006399",
                        "surface": "#f9f9ff",
                        "secondary": "#00677d",
                        "on-primary-fixed-variant": "#004b74",
                        "surface-container-highest": "#d8e3fb",
                        "primary": "#005d90",
                        "on-tertiary-container": "#fff6f1",
                        "on-surface-variant": "#404850"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "container-max-width": "1280px",
                        "unit": "8px",
                        "section-gap": "80px",
                        "margin-desktop": "48px",
                        "gutter": "24px",
                        "margin-mobile": "16px"
                    },
                    "fontFamily": {
                        "body-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "display-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"]
                    },
                    "fontSize": {
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }]
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="bg-surface/80 dark:bg-surface/80 backdrop-blur-md font-label-md text-label-md docked full-width top-0 sticky z-50 shadow-sm">
<div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-20 max-w-container-max-width mx-auto">
<a class="font-display-lg text-headline-md font-bold text-primary dark:text-primary-fixed-dim flex items-center gap-2" href="/">
<img src="/images/logo.svg" alt="CharityHub Logo" class="h-8 w-auto">
CharityHub</a>
<ul class="hidden md:flex gap-gutter items-center">
<li><a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/">Home</a></li>
<li><a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/#campaigns">Campaigns</a></li>
<li><a class="text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1 hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/about">About</a></li>
<li><a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/contact">Contact</a></li>
</ul>
<div class="hidden md:block" id="auth-btn-desktop">
<a class="inline-block bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity" href="/login">Login / Daftar</a>
</div>
<button class="md:hidden text-primary" onclick="document.getElementById('mobileMenuWelcome').classList.toggle('hidden')">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
<div id="mobileMenuWelcome" class="hidden md:hidden bg-surface border-t border-outline-variant/20 px-margin-mobile py-4 space-y-3">
<a class="block py-2 text-on-surface-variant hover:text-primary transition-colors" href="/">Home</a>
<a class="block py-2 text-on-surface-variant hover:text-primary transition-colors" href="/#campaigns">Campaigns</a>
<a class="block py-2 text-primary font-semibold" href="/about">About</a>
<a class="block py-2 text-on-surface-variant hover:text-primary transition-colors" href="/contact">Contact</a>
<div id="auth-btn-mobile-welcome"></div>
</div>
</nav>
<main class="flex-grow">
<!-- Hero Section -->
<section class="relative w-full h-[614px] min-h-[400px] flex items-center justify-center overflow-hidden bg-surface-variant">
<div class="absolute inset-0 z-0">
<img alt="Group of diverse people volunteering together" class="w-full h-full object-cover object-center" src="/images/about-hero.webp"/>
<div class="absolute inset-0 bg-surface-inverse/60 mix-blend-multiply"></div>
<!-- Linear gradient overlay to ensure text readability -->
<div class="absolute inset-0 bg-gradient-to-t from-on-surface/80 to-transparent"></div>
</div>
<div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-container-max-width mx-auto">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-primary mb-6">
                    Membangun Kepercayaan<br/>Melalui Transparansi
                </h1>
<p class="font-body-lg text-body-lg text-surface-container-high max-w-2xl mx-auto">
                    Di CharityHub, misi kami adalah memastikan setiap donasi dapat dilacak dan berdampak nyata. Kami percaya bahwa transparansi penuh adalah fondasi dari setiap tindakan kebaikan.
                </p>
</div>
</section>
<!-- Core Values Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface">
<div class="max-w-container-max-width mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-4">Nilai Inti Kami</h2>
<p class="font-body-md text-body-md text-on-surface-variant max-w-2xl mx-auto">Prinsip yang memandu platform kami untuk menciptakan ekosistem donasi yang lebih baik.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Value Card 1 -->
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-outline-variant/30 text-center hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] transition-shadow duration-300">
<div class="w-16 h-16 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center mx-auto mb-6">
<span class="material-symbols-outlined text-[32px]">visibility</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-3">100% Transparan</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Setiap transaksi dicatat dan dapat dilihat secara terbuka oleh publik, memastikan tidak ada biaya tersembunyi.</p>
</div>
<!-- Value Card 2 -->
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-outline-variant/30 text-center hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] transition-shadow duration-300">
<div class="w-16 h-16 bg-secondary-container text-on-secondary-container rounded-full flex items-center justify-center mx-auto mb-6">
<span class="material-symbols-outlined text-[32px]">shield_locked</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-3">Aman &amp; Terpercaya</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Infrastruktur keamanan berlapis menjaga data dan dana donatur tetap aman di setiap tahap penyaluran.</p>
</div>
<!-- Value Card 3 -->
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-outline-variant/30 text-center hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] transition-shadow duration-300">
<div class="w-16 h-16 bg-tertiary-container text-on-tertiary-container rounded-full flex items-center justify-center mx-auto mb-6">
<span class="material-symbols-outlined text-[32px]">timeline</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-3">Jejak Real-time</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Lacak aliran dana Anda secara langsung dari saat didonasikan hingga disalurkan kepada penerima manfaat.</p>
</div>
</div>
</div>
</section>
<!-- Team Section -->
<section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low">
<div class="max-w-container-max-width mx-auto">
<div class="text-center mb-16">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Di Balik CharityHub</h2>
<p class="font-body-lg text-body-lg text-primary font-medium">Tim Kelompok 9</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Team Member 1 -->
<div class="flex flex-col items-center bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20">
<div class="w-32 h-32 rounded-full overflow-hidden mb-6 border-4 border-surface bg-surface-variant">
<img alt="Profile team member 1" class="w-full h-full object-cover" src="/images/team-1.webp"/>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface text-center mb-1">Akhmad Syaiful Anam</h4>
<p class="font-label-md text-label-md text-primary bg-primary-fixed px-3 py-1 rounded-full uppercase tracking-wider">Backend &amp; Security</p>
</div>
<!-- Team Member 2 -->
<div class="flex flex-col items-center bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20">
<div class="w-32 h-32 rounded-full overflow-hidden mb-6 border-4 border-surface bg-surface-variant">
<img alt="Profile team member 2" class="w-full h-full object-cover" src="/images/team-2.webp"/>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface text-center mb-1">Angilbert Yohanes Sirait</h4>
<p class="font-label-md text-label-md text-secondary bg-secondary-fixed px-3 py-1 rounded-full uppercase tracking-wider">Data &amp; Campaign</p>
</div>
<!-- Team Member 3 -->
<div class="flex flex-col items-center bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20">
<div class="w-32 h-32 rounded-full overflow-hidden mb-6 border-4 border-surface bg-surface-variant">
<img alt="Profile team member 3" class="w-full h-full object-cover" src="/images/team-3.webp"/>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface text-center mb-1">Firdaus Dewansyah</h4>
<p class="font-label-md text-label-md text-tertiary bg-tertiary-fixed px-3 py-1 rounded-full uppercase tracking-wider">Ledger &amp; UI</p>
</div>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest border-t border-outline-variant/20 w-full py-12 mt-auto">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-mobile md:px-margin-desktop gap-gutter max-w-container-max-width mx-auto">
<div class="mb-6 md:mb-0">
<span class="font-display-lg text-headline-md font-bold text-primary dark:text-primary-fixed-dim block text-center md:text-left mb-2">CharityHub</span>
<p class="font-body-md text-body-md text-on-surface-variant">© 2024 CharityHub. Transparansi dalam Setiap Donasi.</p>
</div>
<ul class="flex flex-wrap justify-center gap-6">
<li><a class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all" href="#">Terms of Service</a></li>
<li><a class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all" href="#">Privacy Policy</a></li>
<li><a class="font-body-md text-body-md text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all" href="#">FAQ</a></li>
</ul>
</div>
</footer>
<script>
    // Dynamic auth button: show Profile if logged in, Login if not
    (function() {
        const token = localStorage.getItem('jwt_token');
        const userName = localStorage.getItem('user_name') || 'User';
        const userRole = localStorage.getItem('user_role') || '';
        const desktopBtn = document.getElementById('auth-btn-desktop');
        const mobileBtn = document.getElementById('auth-btn-mobile-welcome');
        if (token) {
            const profileLink = userRole === 'Campaigner' ? '/cms/dashboard' : '/profile';
            desktopBtn.innerHTML = `<a href="${profileLink}" class="inline-flex items-center gap-2 bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity"><span class="material-symbols-outlined text-[18px]">person</span>${userName}</a>`;
            if (mobileBtn) mobileBtn.innerHTML = `<a class="block py-2 bg-primary text-on-primary text-center rounded-lg" href="${profileLink}">${userName} — Profil</a>`;
        } else {
            if (mobileBtn) mobileBtn.innerHTML = '<a class="block py-2 bg-primary text-on-primary text-center rounded-lg" href="/login">Login / Daftar</a>';
        }
    })();
</script>
</body></html>