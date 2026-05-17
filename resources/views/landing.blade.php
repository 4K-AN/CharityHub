<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CharityHub - Transparansi dalam Setiap Donasi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased">
<!-- TopNavBar -->
<nav class="bg-surface/80 dark:bg-surface/80 backdrop-blur-md text-primary dark:text-primary-fixed-dim font-label-md text-label-md docked full-width top-0 sticky z-50 shadow-sm">
<div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-20 max-w-container-max-width mx-auto">
<a href="/" class="font-display-lg text-headline-md font-bold text-primary dark:text-primary-fixed-dim no-underline flex items-center gap-2">
<img src="/images/logo.svg" alt="CharityHub Logo" class="h-8 w-auto">
                CharityHub
</a>
<div class="hidden md:flex items-center gap-gutter">
<a class="text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1 hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/">Home</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/#campaigns">Campaigns</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/about">About</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="/contact">Contact</a>
</div>
<div class="hidden md:block" id="auth-btn-desktop">
<a href="/login" class="inline-block bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity">
    Login / Daftar
</a>
</div>
<button id="mobile-menu-btn" class="md:hidden text-primary p-2 rounded-lg hover:bg-primary/10 transition-colors" aria-label="Toggle Menu">
<span class="material-symbols-outlined text-[28px]" id="menu-icon">menu</span>
</button>
</div>
<!-- Mobile Menu Drawer -->
<div id="mobile-menu" class="hidden md:hidden border-t border-outline-variant/20 bg-surface/95 backdrop-blur-md">
<div class="flex flex-col px-margin-mobile py-4 gap-1 max-w-container-max-width mx-auto">
<a class="px-4 py-3 rounded-xl text-primary font-semibold bg-primary/5 transition-colors" href="/">Home</a>
<a class="px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors" href="/#campaigns">Campaigns</a>
<a class="px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors" href="/about">About</a>
<a class="px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors" href="/contact">Contact</a>
<hr class="border-outline-variant/20 my-2">
<div id="auth-btn-mobile">
<a href="/login" class="block px-4 py-3 rounded-xl bg-primary text-on-primary text-center font-semibold hover:opacity-90 transition-opacity">
    Login / Daftar
</a>
</div>
</div>
</div>
</nav>
<!-- Main Content -->
<main class="w-full">
<!-- Hero Section with Animation -->
<section class="w-full relative overflow-hidden">
<!-- Animated Background Gradient -->
<div class="absolute inset-0 bg-gradient-to-br from-primary/10 via-transparent to-secondary-container/10"></div>

<div class="px-margin-mobile md:px-margin-desktop py-section-gap flex flex-col items-center text-center max-w-container-max-width mx-auto gap-8 relative z-10">
<div class="max-w-3xl flex flex-col gap-6">
<div class="inline-block mb-4">
<span class="px-4 py-2 bg-primary-container/30 text-primary rounded-full font-label-sm text-label-sm border border-primary/20">✨ Transparansi Nyata dalam Amal</span>
</div>
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-background leading-tight">
                    Transformasi Kepedulian Menjadi <span class="text-primary">Dampak Nyata</span>
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                    CharityHub menghubungkan niat baik Anda dengan aksi terukur. Setiap rupiah yang Anda donasikan dapat dilacak secara real-time, memberikan kepercayaan penuh bahwa bantuan Anda benar-benar sampai dan memberikan perubahan.
                </p>
<div class="flex flex-col sm:flex-row justify-center gap-4 mt-6">
<button class="bg-primary text-on-primary font-label-md px-8 py-4 rounded-xl hover:bg-primary-container hover:shadow-lg transition-all duration-300 shadow-md transform hover:scale-105 active:scale-95 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">favorite</span>
                        Mulai Donasi Sekarang
                    </button>
<button class="border-2 border-primary text-primary font-label-md px-8 py-4 rounded-xl hover:bg-primary/5 transition-all duration-300 flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">info</span>
                        Pelajari Lebih Lanjut
                    </button>
</div>

<!-- Quick Stats -->
<div class="grid grid-cols-3 gap-4 mt-12 p-6 bg-surface rounded-xl border border-outline-variant/30">
<div class="text-center">
<p class="font-headline-md text-headline-md text-primary">12.5K+</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Donatur Aktif</p>
</div>
<div class="text-center border-l border-r border-outline-variant/20">
<p class="font-headline-md text-headline-md text-secondary">Rp 2.3M</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Dana Terkumpul</p>
</div>
<div class="text-center">
<p class="font-headline-md text-headline-md text-tertiary">847</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Kampanye Terlayani</p>
</div>
</div>
</div>

<!-- Hero Image with Shadow -->
<div class="w-full max-w-4xl mt-12 group">
<div class="relative rounded-2xl overflow-hidden shadow-2xl transform group-hover:scale-105 transition-transform duration-500">
<img alt="Ilustrasi orang-orang berkolaborasi mengangkat hati biru bersama, melambangkan gotong royong dan kepedulian sosial" class="w-full h-auto object-contain" src="/images/landing-hero.webp"/>
<div class="absolute inset-0 bg-gradient-to-t from-primary/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
</div>
</div>
</section>
<!-- Search & Filter Section -->
<section class="w-full bg-gradient-to-r from-primary/5 via-secondary-container/5 to-tertiary/5 py-12 border-y border-outline-variant/20">
<div class="max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop flex flex-col gap-6">
<div class="text-center mb-4">
<h2 class="font-headline-md text-headline-md text-on-surface">Temukan Kampanye untuk Didukung</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">Cari kampanye yang sesuai dengan kepedulian Anda</p>
</div>

<div class="flex flex-col md:flex-row gap-4 items-stretch">
<div class="relative flex-1">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search">search</span>
<input id="search-input" class="w-full pl-12 pr-4 py-3 rounded-xl border-2 border-outline-variant bg-surface focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all font-body-md text-on-surface shadow-sm" placeholder="Cari campaign atau kata kunci..." type="text"/>
</div>
<div class="flex flex-col sm:flex-row gap-4 md:w-auto">
<select id="filter-status" class="px-4 py-3 rounded-xl border-2 border-outline-variant bg-surface font-body-md text-on-surface shadow-sm focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all">
<option selected="" value="all">💚 Semua Status</option>
<option value="Aktif">Aktif</option>
<option value="Selesai">Selesai</option>
<option value="Ditutup">Ditutup</option>
</select>
</div>
</div>
</div>
</section>
<!-- Campaign Grid Section -->
<section id="campaigns" class="w-full px-margin-mobile md:px-margin-desktop py-section-gap max-w-container-max-width mx-auto">
<div class="mb-12">
<h2 class="font-headline-lg text-headline-lg text-on-background">Kampanye Terkini Membutuhkan Anda</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-3">Dukung inisiatif yang paling membutuhkan bantuan saat ini. Bersama kita bisa membuat perbedaan.</p>
</div>

<div id="campaign-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
<!-- Dynamic content will be loaded here -->
</div>
</section>
</main>
<!-- Testimonials Section -->
<section class="w-full bg-gradient-to-b from-primary/5 to-transparent py-section-gap px-margin-mobile md:px-margin-desktop">
<div class="max-w-container-max-width mx-auto">
<div class="text-center mb-12">
<h2 class="font-headline-lg text-headline-lg text-on-background">Kisah Nyata dari Komunitas Kami</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-3">Ribuan orang telah membuat perbedaan. Bergabunglah dengan mereka.</p>
</div>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Testimonial 1 -->
<div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm hover:shadow-lg transition-shadow">
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-lg">BU</div>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Bu Sarah</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Pedagang Beras</p>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">"Saya bisa lihat bagaimana uang saya digunakan. Transparansi seperti ini membuatku percaya dan semakin sering berdonasi."</p>
<div class="flex gap-1">
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
</div>
</div>

<!-- Testimonial 2 -->
<div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm hover:shadow-lg transition-shadow">
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-lg">RP</div>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Pak Ridho</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Pengusaha Muda</p>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">"CharityHub mengubah cara saya memberikan amal. Setiap donasi terasa lebih bermakna karena saya bisa ikuti progresnya."</p>
<div class="flex gap-1">
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
</div>
</div>

<!-- Testimonial 3 -->
<div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm hover:shadow-lg transition-shadow">
<div class="flex items-center gap-4 mb-4">
<div class="w-12 h-12 rounded-full bg-tertiary-container text-on-tertiary-container flex items-center justify-center font-bold text-lg">DA</div>
<div>
<p class="font-label-md text-label-md text-on-surface font-bold">Dina Ayu</p>
<p class="font-label-sm text-label-sm text-on-surface-variant">Ibu Rumah Tangga</p>
</div>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mb-4">"Saya senang ada platform yang memperjelas kemana amal saya pergi. Ini membuat saya dan keluarga lebih termotivasi membantu."</p>
<div class="flex gap-1">
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
<span class="material-symbols-outlined text-[20px] text-yellow-500 fill">star</span>
</div>
</div>
</div>
</div>
</section>

<!-- Why CharityHub Section -->
<section class="w-full py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low">
<div class="max-w-container-max-width mx-auto">
<div class="text-center mb-12">
<h2 class="font-headline-lg text-headline-lg text-on-background">Mengapa Memilih CharityHub?</h2>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Feature 1 -->
<div class="text-center p-6">
<div class="w-16 h-16 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-[32px] text-primary">security</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-2">100% Aman</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Transaksi terenkripsi dan laporan audit independen</p>
</div>

<!-- Feature 2 -->
<div class="text-center p-6">
<div class="w-16 h-16 rounded-2xl bg-secondary-container/30 flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-[32px] text-secondary">visibility</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-2">Real-Time Tracking</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Ikuti setiap rupiah dalam waktu nyata</p>
</div>

<!-- Feature 3 -->
<div class="text-center p-6">
<div class="w-16 h-16 rounded-2xl bg-tertiary/10 flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-[32px] text-tertiary">verified_user</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-2">Terverifikasi</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Semua kampanye melalui verifikasi ketat</p>
</div>

<!-- Feature 4 -->
<div class="text-center p-6">
<div class="w-16 h-16 rounded-2xl bg-primary-container/20 flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-[32px] text-primary-container">handshake</span>
</div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-2">Mudah & Cepat</h3>
<p class="font-body-md text-body-md text-on-surface-variant">Donasi hanya dalam beberapa klik</p>
</div>
</div>
</div>
</section>
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-mobile md:px-margin-desktop gap-gutter max-w-container-max-width mx-auto">
<div class="font-display-lg text-headline-md font-bold text-primary dark:text-primary-fixed-dim">
                CharityHub
            </div>
<div class="text-on-surface-variant dark:text-outline-variant font-body-md text-body-md text-center md:text-left">
                © 2024 CharityHub. Transparansi dalam Setiap Donasi.
            </div>
<div class="flex gap-6">
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all font-body-md text-body-md" href="#">Terms of Service</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all font-body-md text-body-md" href="#">Privacy Policy</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim underline transition-all font-body-md text-body-md" href="#">FAQ</a>
</div>
</div>
</div>
</footer>

<script>
    // Fetch and render campaigns
    document.addEventListener("DOMContentLoaded", () => {
        axios.get('/api/campaigns')
            .then(response => {
                const campaigns = response.data.campaigns;
                const container = document.getElementById('campaign-list');
                
                if (campaigns.length === 0) {
                    container.innerHTML = '<p class="text-center text-on-surface-variant col-span-full">Belum ada campaign aktif.</p>';
                    return;
                }

                let allCampaigns = campaigns;
                const renderCampaigns = (filteredCampaigns) => {
                    container.innerHTML = '';
                    if (filteredCampaigns.length === 0) {
                        container.innerHTML = '<p class="text-center text-on-surface-variant col-span-full">Tidak ada kampanye yang cocok dengan pencarian Anda.</p>';
                        return;
                    }
                    
                    filteredCampaigns.forEach(campaign => {
                        // Calculate total donation manually (frontend side calculation rule)
                        const totalDonations = campaign.donations.reduce((sum, d) => sum + parseFloat(d.amount), 0);
                        const goal = parseFloat(campaign.goal_amount);
                        const progress = Math.min((totalDonations / goal) * 100, 100).toFixed(1);

                        // Formatter
                        const formatRupiah = (number) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(number);
                        
                        const imageSrc = campaign.image ? `/storage/${campaign.image}` : 'https://placehold.co/600x400?text=No+Image';

                        container.innerHTML += `
                            <div class="bg-surface rounded-2xl border border-outline-variant/30 shadow-sm overflow-hidden flex flex-col hover:shadow-xl hover:border-primary/50 transition-all duration-300 transform hover:-translate-y-2">
                                <div class="h-48 w-full bg-surface-container-high relative overflow-hidden group">
                                    <img src="${imageSrc}" class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-500" alt="Campaign Image">
                                    <span class="absolute top-4 left-4 bg-surface/95 backdrop-blur-sm text-primary font-label-sm px-3 py-1.5 rounded-full border border-primary/20 font-bold">${campaign.status}</span>
                                </div>
                                <div class="p-6 flex flex-col flex-grow gap-4">
                                    <div>
                                        <h3 class="font-headline-md text-headline-md text-on-background line-clamp-2 hover:text-primary transition-colors">${campaign.title}</h3>
                                        <p class="font-body-sm text-body-sm text-on-surface-variant mt-2 line-clamp-2">${campaign.description}</p>
                                    </div>
                                    <div class="mt-auto flex flex-col gap-3">
                                        <div>
                                            <div class="flex justify-between items-center mb-2">
                                                <span class="font-label-sm text-label-sm text-on-surface-variant">Progress Dana</span>
                                                <span class="font-label-sm text-label-sm font-bold text-primary">${progress}%</span>
                                            </div>
                                            <div class="w-full bg-surface-container-high rounded-full h-2.5 overflow-hidden">
                                                <div class="bg-gradient-to-r from-primary to-primary-container h-full rounded-full" style="width: ${progress}%"></div>
                                            </div>
                                        </div>
                                        <div class="flex justify-between items-center">
                                            <div>
                                                <p class="font-label-sm text-label-sm text-on-surface-variant">Terkumpul</p>
                                                <p class="font-headline-sm text-headline-sm text-primary font-bold">${formatRupiah(totalDonations)}</p>
                                            </div>
                                            <div class="text-right">
                                                <p class="font-label-sm text-label-sm text-on-surface-variant">Target</p>
                                                <p class="font-headline-sm text-headline-sm text-on-surface font-bold">${formatRupiah(goal)}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="/campaigns/${campaign.id}" class="w-full mt-4 bg-primary text-on-primary font-label-md py-3 rounded-xl hover:bg-primary-container hover:text-on-primary-container transition-all duration-300 shadow-sm hover:shadow-md flex items-center justify-center gap-2 font-semibold">
                                        <span class="material-symbols-outlined text-[20px]">favorite</span>
                                        Lihat & Donasi
                                    </a>
                                </div>
                            </div>
                        `;
                    });
                };
                
                // Initial render
                renderCampaigns(allCampaigns);

                // Setup Filters
                const searchInput = document.getElementById('search-input');
                const filterStatus = document.getElementById('filter-status');

                function applyFilters() {
                    const query = searchInput.value.toLowerCase();
                    const status = filterStatus.value;
                    
                    const filtered = allCampaigns.filter(c => {
                        const matchText = c.title.toLowerCase().includes(query) || c.description.toLowerCase().includes(query);
                        const matchStatus = status === 'all' || c.status === status;
                        return matchText && matchStatus;
                    });
                    
                    renderCampaigns(filtered);
                }

                searchInput.addEventListener('input', applyFilters);
                filterStatus.addEventListener('change', applyFilters);
            })
            .catch(error => {
                console.error("Error fetching campaigns:", error);
            });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                menuIcon.textContent = mobileMenu.classList.contains('hidden') ? 'menu' : 'close';
            });
        }

        // Auth-aware Navbar: show profile if logged in
        const token = localStorage.getItem('jwt_token');
        if (token) {
            axios.get('/api/profile', { headers: { Authorization: `Bearer ${token}` } })
                .then(res => {
                    const user = res.data.user;
                    // Update localStorage
                    localStorage.setItem('user_name', user.name);
                    localStorage.setItem('user_role', user.role);
                    const profileLink = user.role === 'Campaigner' ? '/cms/dashboard' : '/profile';
                    const desktopBtn = document.getElementById('auth-btn-desktop');
                    const mobileBtn = document.getElementById('auth-btn-mobile');
                    if (desktopBtn) {
                        desktopBtn.innerHTML = `<a href="${profileLink}" class="inline-flex items-center gap-2 bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity"><span class=\"material-symbols-outlined text-[18px]\">person</span>${user.name}</a>`;
                    }
                    if (mobileBtn) {
                        mobileBtn.innerHTML = `<a href="${profileLink}" class="block px-4 py-3 rounded-xl bg-primary text-on-primary text-center font-semibold hover:opacity-90 transition-opacity">👤 ${user.name}</a>`;
                    }
                })
                .catch(() => {
                    localStorage.removeItem('jwt_token');
                    localStorage.removeItem('user_name');
                    localStorage.removeItem('user_role');
                });
        }
    });
</script>
</body></html>