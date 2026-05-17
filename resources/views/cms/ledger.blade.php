<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Detail Manajemen Arus Kas - CharityHub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-background": "#111c2d",
                        "on-secondary-fixed-variant": "#004e5f",
                        "outline-variant": "#bfc7d1",
                        "on-tertiary-container": "#fff6f1",
                        "error": "#ba1a1a",
                        "surface-bright": "#f9f9ff",
                        "on-error-container": "#93000a",
                        "surface-container-highest": "#d8e3fb",
                        "on-secondary": "#ffffff",
                        "inverse-surface": "#263143",
                        "secondary-fixed": "#b3ebff",
                        "on-tertiary": "#ffffff",
                        "inverse-on-surface": "#ecf1ff",
                        "primary-fixed": "#cde5ff",
                        "surface-dim": "#cfdaf2",
                        "tertiary": "#864a00",
                        "on-primary-fixed-variant": "#004b74",
                        "surface-container-high": "#dee8ff",
                        "on-surface-variant": "#404850",
                        "on-primary-container": "#f3f7ff",
                        "on-secondary-fixed": "#001f27",
                        "secondary": "#00677d",
                        "primary-fixed-dim": "#94ccff",
                        "on-tertiary-fixed": "#2e1600",
                        "on-secondary-container": "#005c70",
                        "error-container": "#ffdad6",
                        "background": "#f9f9ff",
                        "on-primary": "#ffffff",
                        "surface": "#f9f9ff",
                        "surface-container": "#e7eeff",
                        "secondary-fixed-dim": "#4cd6fb",
                        "tertiary-container": "#a95f00",
                        "on-primary-fixed": "#001d32",
                        "inverse-primary": "#94ccff",
                        "on-tertiary-fixed-variant": "#6c3a00",
                        "tertiary-fixed": "#ffdcc0",
                        "surface-container-lowest": "#ffffff",
                        "on-error": "#ffffff",
                        "surface-variant": "#d8e3fb",
                        "secondary-container": "#50d9fe",
                        "surface-container-low": "#f0f3ff",
                        "primary-container": "#0077b6",
                        "surface-tint": "#006399",
                        "on-surface": "#111c2d",
                        "outline": "#707881",
                        "tertiary-fixed-dim": "#ffb877",
                        "primary": "#005d90"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "unit": "8px",
                        "margin-desktop": "48px",
                        "gutter": "24px",
                        "section-gap": "80px",
                        "margin-mobile": "16px",
                        "container-max-width": "1280px"
                    },
                    "fontFamily": {
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "display-lg": ["Inter"]
                    },
                    "fontSize": {
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "display-lg-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }]
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
<body class="bg-background text-on-background font-body-md antialiased min-h-screen">
<!-- SideNavBar -->
<nav class="hidden md:flex flex-col h-screen w-64 fixed left-0 top-0 bg-surface-container-lowest dark:bg-inverse-surface border-r border-outline-variant dark:border-outline shadow-sm py-unit-double z-50">
<div class="px-gutter mb-section-gap flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
<span class="material-symbols-outlined" data-icon="volunteer_activism" data-weight="fill" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
</div>
<div>
<h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed-dim">CharityHub Admin</h1>
<p class="font-label-sm text-label-sm text-on-surface-variant">Internal CMS</p>
</div>
</div>
<ul class="flex flex-col gap-2 px-unit">
<li>
<a class="flex items-center gap-3 px-gutter py-3 rounded-xl text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors duration-200 ease-in-out font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
                    Dashboard
                </a>
</li>
<li>
<a class="flex items-center gap-3 px-gutter py-3 rounded-xl text-primary dark:text-primary-fixed-dim font-bold border-r-4 border-primary dark:border-primary-fixed-dim bg-surface-container-high dark:bg-surface-variant font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="list_alt">list_alt</span>
                    Kampanye Saya
                </a>
</li>
<li>
<a class="flex items-center gap-3 px-gutter py-3 rounded-xl text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors duration-200 ease-in-out font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
                    Buat Kampanye Baru
                </a>
</li>
</ul>
<div class="mt-auto px-unit">
<a class="flex items-center gap-3 px-gutter py-3 rounded-xl text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors duration-200 ease-in-out font-label-md text-label-md" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
                Keluar
            </a>
</div>
</nav>
<!-- TopAppBar -->
<header class="fixed top-0 right-0 w-full md:w-[calc(100%-16rem)] z-40 bg-surface/80 dark:bg-background/80 backdrop-blur-md border-b border-outline-variant dark:border-outline flex justify-between items-center h-16 px-margin-mobile md:px-margin-desktop transition-all duration-300">
<div class="md:hidden flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-container flex items-center justify-center text-on-primary-container">
<span class="material-symbols-outlined text-sm" data-icon="volunteer_activism" data-weight="fill" style="font-variation-settings: 'FILL' 1;">volunteer_activism</span>
</div>
<span class="font-headline-md text-headline-md text-on-surface dark:text-on-background font-bold">CharityHub</span>
</div>
<div class="hidden md:block"></div> <!-- Spacer for web -->
<div class="flex items-center gap-4">
<span class="font-label-md text-label-md text-on-surface-variant">Halo, Campaigner Hebat</span>
<div class="flex items-center gap-2 px-3 py-1 bg-surface-container-high rounded-full border border-outline-variant/50">
<span class="material-symbols-outlined text-[16px] text-primary" data-icon="verified">verified</span>
<span class="font-label-sm text-label-sm text-on-surface">Campaigner</span>
</div>
<img alt="User Avatar" class="w-8 h-8 rounded-full object-cover border border-outline-variant" data-alt="A professional headshot of a young man with a neutral expression, wearing a casual shirt, set against a blurred outdoor background, optimized for a modern corporate web interface profile picture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCyqHldl2SOU05vmLzHvYH91hvq6LgTdfUgczaaiF0mx0oUUOO2KKPYCrVk4Q4BnbLtgwtWlrPn39jQRkZ6i58yk6Im37F_ZSEw4u2uHhKoBJ4xnW6Ysf_ar_g6wVL3W1mjXZypS-74GQvRXzcaAx8y5X7ABgFxLdN3O8-FX8cq8rFy3270LD4ey3_RE4f-8pE1Ztwxak1Z-R6N-3mLYEAIHTacUcG-vK5Ci9-nT1eqdcbGa6yEgBPTauOtGuDmWooGxBKyR7bw0g4"/>
</div>
</header>
<!-- Main Content -->
<main class="pt-[88px] pb-section-gap px-margin-mobile md:px-margin-desktop md:ml-64 max-w-container-max-width mx-auto">
<!-- Status Bar -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-section-gap bg-surface-container-lowest p-gutter rounded-xl border border-outline-variant shadow-[0_2px_12px_rgba(0,0,0,0.04)]">
<div>
<div class="flex items-center gap-3 mb-2">
<h2 class="font-headline-lg text-headline-lg text-on-surface">Bantu Pendidikan Anak Yatim di Desa Makmur</h2>
<span class="px-3 py-1 bg-[#dcfce7] text-[#166534] text-label-sm font-label-sm rounded-full border border-[#bbf7d0] flex items-center gap-1">
<span class="w-2 h-2 rounded-full bg-[#16a34a]"></span> Aktif
                    </span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant">Detail Manajemen Arus Kas</p>
</div>
<button class="px-6 py-3 rounded-lg border-2 border-error text-error font-label-md text-label-md hover:bg-error-container transition-colors flex items-center gap-2 self-start md:self-auto">
<span class="material-symbols-outlined" data-icon="cancel">cancel</span>
                Tutup Kampanye
            </button>
</div>
<!-- Kartu Neraca Kas (Bento Grid Style) -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter mb-section-gap">
<!-- Card 1: Total Donasi -->
<div class="bg-surface-container-lowest p-gutter rounded-xl border border-outline-variant shadow-[0_2px_12px_rgba(0,0,0,0.04)] flex flex-col justify-between h-40">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="account_balance_wallet">account_balance_wallet</span>
<h3 class="font-label-md text-label-md">Total Donasi Masuk</h3>
</div>
<div class="text-3xl font-bold font-headline-md text-on-surface">Rp 25.000.000</div>
</div>
<!-- Card 2: Total Pencairan -->
<div class="bg-surface-container-lowest p-gutter rounded-xl border border-outline-variant shadow-[0_2px_12px_rgba(0,0,0,0.04)] flex flex-col justify-between h-40">
<div class="flex items-center gap-2 text-on-surface-variant">
<span class="material-symbols-outlined" data-icon="payments">payments</span>
<h3 class="font-label-md text-label-md">Total Pencairan</h3>
</div>
<div class="text-3xl font-bold font-headline-md text-on-surface">Rp 15.000.000</div>
</div>
<!-- Card 3: Sisa Saldo -->
<div class="bg-surface-container-high p-gutter rounded-xl border border-primary-fixed-dim shadow-[0_4px_24px_rgba(0,0,0,0.08)] flex flex-col justify-between h-40 relative overflow-hidden">
<div class="absolute -right-6 -top-6 text-primary-fixed-dim opacity-20">
<span class="material-symbols-outlined text-[120px]" data-icon="savings">savings</span>
</div>
<div class="flex items-center gap-2 text-primary z-10">
<span class="material-symbols-outlined" data-icon="savings">savings</span>
<h3 class="font-label-md text-label-md">Sisa Saldo Kampanye</h3>
</div>
<div class="text-4xl font-extrabold font-headline-lg text-primary z-10">Rp 10.000.000</div>
</div>
</div>
<!-- Area Aksi & Tabel Riwayat -->
<div class="bg-surface-container-lowest rounded-xl border border-outline-variant shadow-[0_2px_12px_rgba(0,0,0,0.04)] overflow-hidden">
<div class="p-gutter border-b border-outline-variant flex flex-col md:flex-row justify-between items-start md:items-center gap-4 bg-surface-bright">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface mb-1">Riwayat Pengeluaran</h3>
<p class="font-label-md text-label-md text-on-surface-variant">Daftar transaksi pencairan dana untuk kampanye ini.</p>
</div>
<button class="bg-primary hover:bg-surface-tint text-on-primary px-6 py-3 rounded-lg font-label-md text-label-md transition-colors flex items-center gap-2 shadow-sm">
<span class="material-symbols-outlined" data-icon="add">add</span>
                    Catat Pencairan Uang Keluar Baru
                </button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant border-b border-outline-variant font-label-md text-label-md">
<th class="p-4 font-medium">Tanggal Pencairan</th>
<th class="p-4 font-medium">ID Referensi</th>
<th class="p-4 font-medium">Deskripsi Keperluan</th>
<th class="p-4 font-medium text-right">Nominal</th>
<th class="p-4 font-medium text-center">Status</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md text-on-surface divide-y divide-outline-variant">
<tr class="hover:bg-surface-container-low transition-colors">
<td class="p-4">12 Okt 2023</td>
<td class="p-4 font-mono text-sm text-outline">TRX-001-SGM</td>
<td class="p-4">Pembelian Seragam Sekolah 50 Set</td>
<td class="p-4 text-right font-medium text-error">- Rp 5.000.000</td>
<td class="p-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#dcfce7] text-[#166534]">
<span class="material-symbols-outlined text-[14px]" data-icon="check_circle">check_circle</span> Berhasil
                                </span>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors">
<td class="p-4">15 Okt 2023</td>
<td class="p-4 font-mono text-sm text-outline">TRX-002-ATK</td>
<td class="p-4">Pembelian Alat Tulis dan Buku Lengkap</td>
<td class="p-4 text-right font-medium text-error">- Rp 3.000.000</td>
<td class="p-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#dcfce7] text-[#166534]">
<span class="material-symbols-outlined text-[14px]" data-icon="check_circle">check_circle</span> Berhasil
                                </span>
</td>
</tr>
<tr class="hover:bg-surface-container-low transition-colors">
<td class="p-4">20 Okt 2023</td>
<td class="p-4 font-mono text-sm text-outline">TRX-003-SPP</td>
<td class="p-4">Pembayaran Biaya SPP Semester 1</td>
<td class="p-4 text-right font-medium text-error">- Rp 7.000.000</td>
<td class="p-4 text-center">
<span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#dcfce7] text-[#166534]">
<span class="material-symbols-outlined text-[14px]" data-icon="check_circle">check_circle</span> Berhasil
                                </span>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</main>
</body></html>