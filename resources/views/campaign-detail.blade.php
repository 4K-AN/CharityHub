<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Campaign Detail - CharityHub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "inverse-primary": "#94ccff",
                        "outline-variant": "#bfc7d1",
                        "tertiary-fixed": "#ffdcc0",
                        "on-secondary": "#ffffff",
                        "primary-fixed-dim": "#94ccff",
                        "secondary-container": "#50d9fe",
                        "surface-dim": "#cfdaf2",
                        "secondary": "#00677d",
                        "on-primary": "#ffffff",
                        "error-container": "#ffdad6",
                        "on-tertiary-container": "#fff6f1",
                        "surface-variant": "#d8e3fb",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "on-surface-variant": "#404850",
                        "on-tertiary-fixed": "#2e1600",
                        "on-error-container": "#93000a",
                        "secondary-fixed": "#b3ebff",
                        "on-surface": "#111c2d",
                        "secondary-fixed-dim": "#4cd6fb",
                        "on-primary-container": "#f3f7ff",
                        "surface-tint": "#006399",
                        "outline": "#707881",
                        "tertiary-container": "#a95f00",
                        "inverse-on-surface": "#ecf1ff",
                        "background": "#f9f9ff",
                        "tertiary-fixed-dim": "#ffb877",
                        "surface": "#f9f9ff",
                        "on-secondary-fixed-variant": "#004e5f",
                        "on-tertiary-fixed-variant": "#6c3a00",
                        "inverse-surface": "#263143",
                        "primary-fixed": "#cde5ff",
                        "error": "#ba1a1a",
                        "surface-bright": "#f9f9ff",
                        "primary-container": "#0077b6",
                        "on-secondary-container": "#005c70",
                        "surface-container-high": "#dee8ff",
                        "on-error": "#ffffff",
                        "on-background": "#111c2d",
                        "surface-container-low": "#f0f3ff",
                        "surface-container-highest": "#d8e3fb",
                        "primary": "#005d90",
                        "on-secondary-fixed": "#001f27",
                        "on-primary-fixed": "#001d32",
                        "tertiary": "#864a00",
                        "surface-container": "#e7eeff",
                        "on-primary-fixed-variant": "#004b74"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "gutter": "24px",
                        "unit": "8px",
                        "container-max-width": "1280px",
                        "margin-desktop": "48px",
                        "section-gap": "80px"
                    },
                    "fontFamily": {
                        "headline-lg": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-md": ["Inter"],
                        "display-lg": ["Inter"],
                        "body-md": ["Inter"]
                    },
                    "fontSize": {
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
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
        .material-symbols-outlined[data-weight="fill"] {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex flex-col">
<!-- TopNavBar -->
<nav class="bg-surface/80 shadow-sm docked full-width top-0 sticky z-50 backdrop-blur-md">
<div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-20 max-w-container-max-width mx-auto">
<div class="font-display-lg text-headline-md font-bold text-primary">
                CharityHub
            </div>
<div class="hidden md:flex gap-gutter items-center">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Home</a>
<a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1" href="#">Campaigns</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">About</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Contact</a>
</div>
<div>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Login / Daftar</a>
</div>
</div>
</nav>
<main class="flex-grow w-full max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop py-section-gap">
<!-- Campaign Header Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mb-section-gap">
<!-- Left Column: Content -->
<div class="lg:col-span-8 space-y-6">
<!-- Hero Image -->
<div class="w-full aspect-video rounded-xl overflow-hidden bg-surface-container shadow-sm border border-outline-variant/30">
<img alt="Kampanye Sekolah Dasar" class="w-full h-full object-cover" data-alt="A high-quality, inspiring photograph of an old, dilapidated elementary school in a rural village setting, highlighting the urgent need for renovation. The image features peeling paint, a damaged roof, and worn-out wooden desks, but captures a sense of hope with bright, natural sunlight filtering through broken windows. The lighting is bright and modern, creating a trustworthy, minimalist aesthetic that aligns with a clean, corporate light-mode UI. The color palette emphasizes warm earthy tones contrasted with soft, hopeful blues, evoking empathy and institutional transparency." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCf1alRhaQW-5XaqC5SA1RoOxlRD01oC3BiSD9ArJYomKv4CqtPly9Tod8L-k6iIKDTz8rvC4btFfX6W9c6a_XiU12KfI_JzMHiE12AV1_I4c8I0TnIV2eWo9fyXUOWYi8MtFwezwnZWyt1tdL3YCUHPbxAYvq-d-dvtaqGBI3D3ytvFIuoRg-zORPRvIHida0vAhyzVfOK8kGrlt6x4FC8sAu8CybcaIIBby6_1kqqikzMoK8ZkQOR0M3zTJQUuI_4WzUaBfYpO-I"/>
</div>
<!-- Title & Description -->
<div>
<h1 class="font-headline-lg text-headline-lg text-primary-container mb-4">Renovasi Sekolah Dasar di Pelosok Negeri</h1>
<div class="font-body-lg text-body-lg text-on-surface-variant space-y-4">
<p>Kondisi Sekolah Dasar Negeri 03 di desa terpencil ini sangat memprihatinkan. Atap bocor, dinding retak, dan fasilitas belajar mengajar yang jauh dari kata layak. Setiap hari, puluhan anak harus belajar dengan rasa was-was jika hujan turun atau angin kencang melanda.</p>
<p>Melalui kampanye ini, kami bertujuan untuk merenovasi total 3 ruang kelas utama, membangun 2 toilet yang layak, serta menyediakan meja dan kursi baru bagi para siswa. Pendidikan adalah kunci masa depan, dan anak-anak ini berhak mendapatkan tempat belajar yang aman dan nyaman.</p>
<p>Setiap donasi yang Anda berikan akan langsung dialokasikan untuk pembelian material bangunan dan upah pekerja lokal yang turut membangun kembali harapan generasi penerus bangsa.</p>
</div>
</div>
</div>
<!-- Right Column: Sticky Funding Card -->
<div class="lg:col-span-4 relative">
<div class="sticky top-[100px] bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant/30">
<div class="mb-6">
<div class="flex justify-between items-end mb-2">
<span class="font-label-md text-label-md text-outline">Dana Terkumpul</span>
<span class="font-headline-md text-headline-md text-primary">Rp 85.000.000</span>
</div>
<div class="w-full h-3 bg-surface-container-high rounded-full overflow-hidden">
<div class="h-full bg-primary-container" style="width: 70%;"></div>
</div>
<div class="flex justify-between items-center mt-2">
<span class="font-label-sm text-label-sm text-outline">Target: Rp 120.000.000</span>
<span class="font-label-sm text-label-sm text-primary-container font-semibold">70%</span>
</div>
</div>
<div class="space-y-4 mb-6">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline" data-icon="group">group</span>
<span class="font-body-md text-body-md text-on-surface-variant">1,245 Donatur</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline" data-icon="schedule">schedule</span>
<span class="font-body-md text-body-md text-on-surface-variant">Sisa 14 Hari</span>
</div>
</div>
<button class="w-full py-4 rounded-xl font-label-md text-label-md font-bold text-white transition-all duration-200 flex items-center justify-center gap-2 hover:shadow-md" style="background-color: #2d6a4f;">
<span>Donasi Sekarang</span>
<span class="material-symbols-outlined" data-icon="favorite">favorite</span>
</button>
<p class="font-label-sm text-label-sm text-outline text-center mt-4">Transaksi dijamin aman dan transparan.</p>
</div>
</div>
</div>
<!-- Transparency Ledger Section -->
<div class="mt-section-gap">
<h2 class="font-headline-md text-headline-md text-primary-container mb-8 border-b border-outline-variant/20 pb-4">Transparansi Dana</h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-gutter">
<!-- Incoming Donations -->
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant/30">
<h3 class="font-body-lg text-body-lg font-semibold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-green-600" data-icon="arrow_downward">arrow_downward</span>
                        Riwayat Donasi Masuk
                    </h3>
<div class="space-y-4">
<!-- Item 1 -->
<div class="flex justify-between items-center p-3 hover:bg-surface-container-low rounded-lg transition-colors">
<div>
<p class="font-label-md text-label-md font-semibold text-on-surface">Anonim</p>
<p class="font-label-sm text-label-sm text-outline">12 Okt 2024</p>
</div>
<span class="font-label-md text-label-md font-bold text-green-700">Rp 500.000</span>
</div>
<!-- Item 2 -->
<div class="flex justify-between items-center p-3 hover:bg-surface-container-low rounded-lg transition-colors">
<div>
<p class="font-label-md text-label-md font-semibold text-on-surface">Budi Santoso</p>
<p class="font-label-sm text-label-sm text-outline">11 Okt 2024</p>
</div>
<span class="font-label-md text-label-md font-bold text-green-700">Rp 1.000.000</span>
</div>
<!-- Item 3 -->
<div class="flex justify-between items-center p-3 hover:bg-surface-container-low rounded-lg transition-colors">
<div>
<p class="font-label-md text-label-md font-semibold text-on-surface">Hamba Allah</p>
<p class="font-label-sm text-label-sm text-outline">10 Okt 2024</p>
</div>
<span class="font-label-md text-label-md font-bold text-green-700">Rp 250.000</span>
</div>
<!-- Item 4 -->
<div class="flex justify-between items-center p-3 hover:bg-surface-container-low rounded-lg transition-colors">
<div>
<p class="font-label-md text-label-md font-semibold text-on-surface">Siti Aminah</p>
<p class="font-label-sm text-label-sm text-outline">09 Okt 2024</p>
</div>
<span class="font-label-md text-label-md font-bold text-green-700">Rp 150.000</span>
</div>
</div>
<button class="mt-4 w-full text-center font-label-sm text-label-sm text-primary hover:underline py-2">Lihat Semua Donasi</button>
</div>
<!-- Outgoing Expenses -->
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant/30">
<h3 class="font-body-lg text-body-lg font-semibold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-red-600" data-icon="arrow_upward">arrow_upward</span>
                        Riwayat Pencairan Dana
                    </h3>
<div class="space-y-4">
<!-- Item 1 -->
<div class="flex justify-between items-start p-3 hover:bg-surface-container-low rounded-lg transition-colors">
<div>
<p class="font-label-md text-label-md font-semibold text-on-surface">Pembelian semen dan pasir</p>
<p class="font-label-sm text-label-sm text-outline">05 Okt 2024</p>
</div>
<span class="font-label-md text-label-md font-bold text-red-700 shrink-0 ml-4">Rp 15.000.000</span>
</div>
<!-- Item 2 -->
<div class="flex justify-between items-start p-3 hover:bg-surface-container-low rounded-lg transition-colors">
<div>
<p class="font-label-md text-label-md font-semibold text-on-surface">Upah tukang tahap 1</p>
<p class="font-label-sm text-label-sm text-outline">01 Okt 2024</p>
</div>
<span class="font-label-md text-label-md font-bold text-red-700 shrink-0 ml-4">Rp 8.500.000</span>
</div>
<!-- Item 3 -->
<div class="flex justify-between items-start p-3 hover:bg-surface-container-low rounded-lg transition-colors">
<div>
<p class="font-label-md text-label-md font-semibold text-on-surface">Pembelian kayu rangka atap</p>
<p class="font-label-sm text-label-sm text-outline">28 Sep 2024</p>
</div>
<span class="font-label-md text-label-md font-bold text-red-700 shrink-0 ml-4">Rp 12.000.000</span>
</div>
</div>
<button class="mt-4 w-full text-center font-label-sm text-label-sm text-primary hover:underline py-2">Laporan Selengkapnya</button>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low border-t border-outline-variant/20 w-full py-12">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-mobile md:px-margin-desktop gap-gutter max-w-container-max-width mx-auto">
<div class="font-body-md text-body-md text-on-surface-variant">
                © 2024 CharityHub. Transparansi dalam Setiap Donasi.
            </div>
<div class="flex gap-gutter">
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline transition-all" href="#">Terms of Service</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline transition-all" href="#">Privacy Policy</a>
<a class="font-body-md text-body-md text-on-surface-variant hover:text-primary underline transition-all" href="#">FAQ</a>
</div>
</div>
</footer>
</body></html>