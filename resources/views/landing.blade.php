<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CharityHub - Transparansi dalam Setiap Donasi</title>
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
<div class="font-display-lg text-headline-md font-bold text-primary dark:text-primary-fixed-dim">
                CharityHub
            </div>
<div class="hidden md:flex items-center gap-gutter">
<a class="text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1 hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">Home</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">Campaigns</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">About</a>
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">Contact</a>
</div>
<div class="hidden md:block">
<button class="bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity">
                    Login / Daftar
                </button>
</div>
<button class="md:hidden text-primary">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</div>
</nav>
<!-- Main Content -->
<main class="w-full">
<!-- Hero Section -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-section-gap flex flex-col items-center text-center max-w-container-max-width mx-auto gap-8">
<div class="max-w-3xl flex flex-col gap-6">
<h1 class="font-display-lg-mobile md:font-display-lg text-display-lg-mobile md:text-display-lg text-on-background">
                    Transparansi dalam Setiap Donasi
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">
                    CharityHub memastikan setiap rupiah yang Anda donasikan dapat dilacak dan memberikan dampak nyata. Kami membangun kepercayaan melalui transparansi institusional yang ketat, menghubungkan niat baik dengan aksi yang terukur.
                </p>
<div class="flex justify-center gap-4 mt-4">
<button class="bg-primary text-on-primary font-label-md px-6 py-3 rounded-lg hover:opacity-90 transition-opacity shadow-sm">
                        Mulai Donasi
                    </button>
<button class="border-2 border-primary text-primary font-label-md px-6 py-3 rounded-lg hover:bg-surface-container-low transition-colors">
                        Pelajari Lebih Lanjut
                    </button>
</div>
</div>
<div class="w-full max-w-4xl mt-8">
<img alt="Ilustrasi orang-orang berkolaborasi mengangkat hati biru bersama, melambangkan gotong royong dan kepedulian sosial" class="w-full h-auto object-contain rounded-xl" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWzP6L3s2yl7xbGaDtSMZ7tU4NS7X79yqkVUX3auX9I_0sOm1vE7tAlES5ESftNcIIoA0YXuUVjAjwoBKV2NOMFBMr7sl8epOrAO4_8P3Xt-riQ8Au92s3kTaZ_RDZbKmGF0-dV8juMZSbC2LuA_bSBS7boKKuI3d5nYSW6Ys1B7KMyjmJczSR_5abQQ2xAu0OIsE9mimeeUrZJyR8QrS___DVXwDHub5eyhJVsNyzcU2CsrT5teAM84Qb4wCN_rDJ2IJNAyJT_sc"/>
</div>
</section>
<!-- Search & Filter Section -->
<section class="w-full bg-surface-container-low py-8 border-y border-outline-variant/20">
<div class="max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop flex flex-col md:flex-row gap-4 items-center justify-between">
<div class="relative w-full md:w-1/2">
<span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant" data-icon="search">search</span>
<input class="w-full pl-12 pr-4 py-3 rounded-lg border border-outline-variant bg-surface focus:border-primary focus:ring-1 focus:ring-primary transition-all font-body-md text-on-surface shadow-sm" placeholder="Cari campaign atau kata kunci..." type="text"/>
</div>
<div class="flex w-full md:w-auto gap-4">
<select class="w-full md:w-48 px-4 py-3 rounded-lg border border-outline-variant bg-surface font-body-md text-on-surface shadow-sm focus:border-primary focus:ring-1 focus:ring-primary">
<option disabled="" selected="" value="">Kategori</option>
<option value="pendidikan">Pendidikan</option>
<option value="bencana">Bencana</option>
<option value="medis">Medis</option>
</select>
<select class="w-full md:w-40 px-4 py-3 rounded-lg border border-outline-variant bg-surface font-body-md text-on-surface shadow-sm focus:border-primary focus:ring-1 focus:ring-primary">
<option disabled="" selected="" value="">Status</option>
<option value="aktif">Aktif</option>
<option value="selesai">Selesai</option>
</select>
</div>
</div>
</section>
<!-- Campaign Grid Section -->
<section class="w-full px-margin-mobile md:px-margin-desktop py-section-gap max-w-container-max-width mx-auto">
<div class="mb-12 text-center md:text-left">
<h2 class="font-headline-lg text-headline-lg text-on-background">Campaign Terkini</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-2">Dukung inisiatif yang paling membutuhkan bantuan saat ini.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-gutter">
<!-- Card 1 -->
<div class="bg-surface rounded-xl border border-outline-variant/30 shadow-[0_2px_12px_rgba(0,0,0,0.04)] overflow-hidden flex flex-col hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] transition-shadow duration-300">
<div class="h-48 w-full bg-surface-container-high relative">
<img class="w-full h-full object-cover" data-alt="A bright, minimalist photograph of an empty rural school classroom with wooden desks and a chalkboard. Sunlight streams through a window, creating a serene and hopeful mood in light-mode aesthetic. The colors are predominantly light wood tones and white, with subtle hints of sea blue in the details, emphasizing a calm and educational setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCZ7D2aluOYR7DozkSkS5Bybjo-6Xz-W1FQ209BJ7V1-rpf-lkkNKne2Gq2VgpokS3pFAfbK__bjIq6XOPBrYlzCwVQLdW3Jx4usKu2egXKpspEwqlSWBMO8lbxCcohONl8dWCqkcDkKv3Rt1gLYLmC7Wbbi8fAGZz-7jxCnC8k05PiFMp9Wtpx95buK8q9im-VvGFSUYBt1GFanNzRnk0s0AH-tjzHW67_7Z0dOQhhQoitklJ8dLvDQxX1iJH9z1nWT-MEf6hbaAg"/>
<span class="absolute top-4 left-4 bg-surface/90 backdrop-blur-sm text-primary font-label-sm px-3 py-1 rounded-full border border-primary/20">Pendidikan</span>
</div>
<div class="p-6 flex flex-col flex-grow gap-4">
<h3 class="font-headline-md text-headline-md text-on-background line-clamp-2">Bantuan Sekolah Pelosok</h3>
<div class="mt-auto flex flex-col gap-2">
<div class="w-full bg-surface-container-high rounded-full h-2 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 65%"></div>
</div>
<div class="flex justify-between font-label-sm text-label-sm">
<span class="text-primary font-bold">Rp 65.000.000</span>
<span class="text-on-surface-variant">dari target Rp 100.000.000</span>
</div>
</div>
<button class="w-full mt-2 border-2 border-primary text-primary font-label-md py-2 rounded-lg hover:bg-surface-container-low transition-colors text-center">
                            Lihat Detail
                        </button>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface rounded-xl border border-outline-variant/30 shadow-[0_2px_12px_rgba(0,0,0,0.04)] overflow-hidden flex flex-col hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] transition-shadow duration-300">
<div class="h-48 w-full bg-surface-container-high relative">
<img class="w-full h-full object-cover" data-alt="A clean, modern photograph showing relief supplies arranged neatly on a table in a bright, white-walled room. The lighting is soft and high-key, conveying a sense of institutional transparency and organized aid. Subtle sea blue accents are present in the packaging, aligning with a minimalist, corporate modernism aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_aFnZMX7i3YO5xzpXAMoRq4BGiTWVt5LcPR-Qg-ZZ7gySeTdEU1K8r7lfGkIjjCWxSxZSVhca7mBOpuTJo279GI6GuLY-PA72rlv8tI9OT8GfK7-v5Q6V4QNWKY85xTPmgHpeGQSmOJbCC4iwmmnqWeyVVtXMXcnm4NIJrhI8EisZNRvkSmvnJUIS3EaYevxgth33lh8RqwROFDsYafXacLxFZqJxjIUQdOmvtnABAD_7168vSxWmoFzvKpNidVmCt506-6tFDuQ"/>
<span class="absolute top-4 left-4 bg-surface/90 backdrop-blur-sm text-error font-label-sm px-3 py-1 rounded-full border border-error/20 text-error">Bencana</span>
</div>
<div class="p-6 flex flex-col flex-grow gap-4">
<h3 class="font-headline-md text-headline-md text-on-background line-clamp-2">Darurat Gempa Cianjur</h3>
<div class="mt-auto flex flex-col gap-2">
<div class="w-full bg-surface-container-high rounded-full h-2 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 80%"></div>
</div>
<div class="flex justify-between font-label-sm text-label-sm">
<span class="text-primary font-bold">Rp 400.000.000</span>
<span class="text-on-surface-variant">dari target Rp 500.000.000</span>
</div>
</div>
<button class="w-full mt-2 border-2 border-primary text-primary font-label-md py-2 rounded-lg hover:bg-surface-container-low transition-colors text-center">
                            Lihat Detail
                        </button>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface rounded-xl border border-outline-variant/30 shadow-[0_2px_12px_rgba(0,0,0,0.04)] overflow-hidden flex flex-col hover:shadow-[0_8px_24px_rgba(0,0,0,0.08)] transition-shadow duration-300">
<div class="h-48 w-full bg-surface-container-high relative">
<img class="w-full h-full object-cover" data-alt="A serene, minimalist image of a modern hospital corridor with pristine white walls and bright, natural light filtering in from the end of the hall. The atmosphere is calm, clean, and reliable, utilizing a light-mode color palette with subtle clinical blue tones. The composition emphasizes space and structural integrity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDlO8F_c15OjI0rURBk8ydoEb1RJm-NbwC-K-cRRx3mVOO_BieXasqalngWiE17_gm0WOvUgYV0FYLBZIp5cf0YmiUfO4Zz4CdKRH4iTIfMQi_Av_0H3J7BdNSFJzAF0ecVQuwM1UjBrtNEmvwXugoVpk3cNP7jwL_Xg2quLQQ96bvP2TRc_plj1ZOVOyDgsD0EGnmyvnV27gqPCDQ6nEavvthqQuALmRg6qYEc80udLNl-GR1w5-B7MuW3lJhlsZd9W7DS9imvZMA"/>
<span class="absolute top-4 left-4 bg-surface/90 backdrop-blur-sm text-tertiary-container font-label-sm px-3 py-1 rounded-full border border-tertiary-container/20">Medis</span>
</div>
<div class="p-6 flex flex-col flex-grow gap-4">
<h3 class="font-headline-md text-headline-md text-on-background line-clamp-2">Bantuan Operasi Jantung Anak</h3>
<div class="mt-auto flex flex-col gap-2">
<div class="w-full bg-surface-container-high rounded-full h-2 overflow-hidden">
<div class="bg-primary h-full rounded-full" style="width: 30%"></div>
</div>
<div class="flex justify-between font-label-sm text-label-sm">
<span class="text-primary font-bold">Rp 45.000.000</span>
<span class="text-on-surface-variant">dari target Rp 150.000.000</span>
</div>
</div>
<button class="w-full mt-2 border-2 border-primary text-primary font-label-md py-2 rounded-lg hover:bg-surface-container-low transition-colors text-center">
                            Lihat Detail
                        </button>
</div>
</div>
</div>
<div class="mt-12 flex justify-center">
<button class="bg-surface text-primary border border-outline-variant font-label-md px-8 py-3 rounded-lg hover:bg-surface-container-low transition-colors shadow-sm">
                    Lihat Semua Campaign
                </button>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-lowest border-t border-outline-variant/20 w-full py-12">
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
</footer>
</body></html>