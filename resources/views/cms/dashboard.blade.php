<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CharityHub Admin Dashboard</title>
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
                      "error": "#ba1a1a",
                      "outline": "#707881",
                      "tertiary-fixed": "#ffdcc0",
                      "tertiary": "#864a00",
                      "on-primary-fixed": "#001d32",
                      "on-error-container": "#93000a",
                      "surface-container-high": "#dee8ff",
                      "surface-container-highest": "#d8e3fb",
                      "secondary-fixed-dim": "#4cd6fb",
                      "on-surface-variant": "#404850",
                      "on-tertiary-fixed-variant": "#6c3a00",
                      "on-tertiary-container": "#fff6f1",
                      "inverse-surface": "#263143",
                      "surface-container": "#e7eeff",
                      "secondary-fixed": "#b3ebff",
                      "error-container": "#ffdad6",
                      "on-tertiary": "#ffffff",
                      "background": "#f9f9ff",
                      "secondary": "#00677d",
                      "surface-dim": "#cfdaf2",
                      "inverse-on-surface": "#ecf1ff",
                      "primary-container": "#0077b6",
                      "surface-container-low": "#f0f3ff",
                      "on-secondary": "#ffffff",
                      "on-secondary-fixed-variant": "#004e5f",
                      "on-primary-fixed-variant": "#004b74",
                      "surface": "#f9f9ff",
                      "on-primary": "#ffffff",
                      "inverse-primary": "#94ccff",
                      "outline-variant": "#bfc7d1",
                      "primary-fixed": "#cde5ff",
                      "tertiary-container": "#a95f00",
                      "surface-tint": "#006399",
                      "surface-container-lowest": "#ffffff",
                      "tertiary-fixed-dim": "#ffb877",
                      "on-surface": "#111c2d",
                      "secondary-container": "#50d9fe",
                      "on-error": "#ffffff",
                      "on-primary-container": "#f3f7ff",
                      "on-secondary-container": "#005c70",
                      "surface-variant": "#d8e3fb",
                      "surface-bright": "#f9f9ff",
                      "on-tertiary-fixed": "#2e1600",
                      "primary-fixed-dim": "#94ccff",
                      "primary": "#005d90",
                      "on-secondary-fixed": "#001f27",
                      "on-background": "#111c2d"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "unit": "8px",
                      "section-gap": "80px",
                      "margin-desktop": "48px",
                      "gutter": "24px",
                      "margin-mobile": "16px",
                      "container-max-width": "1280px"
              },
              "fontFamily": {
                      "headline-md": [
                              "Inter"
                      ],
                      "display-lg": [
                              "Inter"
                      ],
                      "headline-lg": [
                              "Inter"
                      ],
                      "display-lg-mobile": [
                              "Inter"
                      ],
                      "label-sm": [
                              "Inter"
                      ],
                      "body-md": [
                              "Inter"
                      ],
                      "body-lg": [
                              "Inter"
                      ],
                      "label-md": [
                              "Inter"
                      ]
              },
              "fontSize": {
                      "headline-md": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "fontWeight": "600"
                              }
                      ],
                      "display-lg": [
                              "48px",
                              {
                                      "lineHeight": "56px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "headline-lg": [
                              "32px",
                              {
                                      "lineHeight": "40px",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "600"
                              }
                      ],
                      "display-lg-mobile": [
                              "36px",
                              {
                                      "lineHeight": "44px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-sm": [
                              "12px",
                              {
                                      "lineHeight": "16px",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-md": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "400"
                              }
                      ],
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "28px",
                                      "fontWeight": "400"
                              }
                      ],
                      "label-md": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "letterSpacing": "0.01em",
                                      "fontWeight": "500"
                              }
                      ]
              }
      },
          },
        }
      </script>
<style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        .fill-icon {
          font-variation-settings: 'FILL' 1;
        }
      </style>
</head>
<body class="bg-[#f4f7f6] text-on-surface font-body-md h-screen flex overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col hidden md:flex flex-shrink-0">
<div class="h-20 flex items-center px-gutter border-b border-outline-variant/20">
<span class="font-headline-md text-headline-md text-primary">CharityHub Admin</span>
</div>
<nav class="flex-1 py-unit px-unit space-y-2 overflow-y-auto">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary-container text-on-primary-container font-label-md text-label-md" href="#">
<span class="material-symbols-outlined fill-icon text-[20px]">dashboard</span>
                Dashboard
            </a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined text-[20px]">campaign</span>
                Kampanye Saya
            </a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined text-[20px]">add_circle</span>
                Buat Kampanye Baru
            </a>
</nav>
<div class="p-unit border-t border-outline-variant/20">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-error hover:bg-error-container transition-colors font-label-md text-label-md" href="#">
<span class="material-symbols-outlined text-[20px]">logout</span>
                Logout
            </a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col h-screen overflow-y-auto">
<!-- Top Header -->
<header class="h-20 bg-surface-container-lowest border-b border-outline-variant/20 flex items-center justify-between px-margin-mobile md:px-margin-desktop sticky top-0 z-10">
<div class="flex items-center gap-4">
<!-- Mobile Menu Button -->
<button class="md:hidden text-on-surface-variant">
<span class="material-symbols-outlined text-[24px]">menu</span>
</button>
<div class="flex flex-col">
<h1 class="font-headline-lg text-headline-lg text-on-surface hidden md:block">Halo, Campaigner Hebat</h1>
<h1 class="font-headline-lg-mobile text-headline-lg-mobile text-on-surface md:hidden">Dashboard</h1>
</div>
</div>
<div class="flex items-center gap-4">
<span class="px-3 py-1 bg-secondary-container text-on-secondary-container rounded-full font-label-sm text-label-sm">
                    Campaigner
                </span>
<div class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-label-md text-label-md">
                    CH
                </div>
</div>
</header>
<!-- Dashboard Content -->
<div class="p-margin-mobile md:p-margin-desktop space-y-gutter max-w-container-max-width mx-auto w-full">
<!-- Summary Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Card 1 -->
<div class="bg-surface-container-lowest p-gutter rounded-xl shadow-sm border border-outline-variant/20 flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-primary-container/20 text-primary flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[24px]">campaign</span>
</div>
<div>
<p class="text-on-surface-variant font-body-md text-body-md">Total Kampanye Aktif</p>
<p class="text-on-surface font-headline-md text-headline-md">5</p>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-lowest p-gutter rounded-xl shadow-sm border border-outline-variant/20 flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-secondary-container/20 text-secondary flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[24px]">payments</span>
</div>
<div>
<p class="text-on-surface-variant font-body-md text-body-md">Total Dana Terkumpul</p>
<p class="text-on-surface font-headline-md text-headline-md">Rp 45.000.000</p>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-lowest p-gutter rounded-xl shadow-sm border border-outline-variant/20 flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-tint/20 text-surface-tint flex items-center justify-center flex-shrink-0">
<span class="material-symbols-outlined text-[24px]">account_balance_wallet</span>
</div>
<div>
<p class="text-on-surface-variant font-body-md text-body-md">Total Dana Dicairkan</p>
<p class="text-on-surface font-headline-md text-headline-md">Rp 30.000.000</p>
</div>
</div>
</div>
<!-- Campaign Table Section -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/20 overflow-hidden">
<div class="p-gutter border-b border-outline-variant/20 flex justify-between items-center">
<h2 class="font-headline-md text-headline-md text-on-surface">Kampanye Saya</h2>
<button class="bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md text-label-md hover:bg-surface-tint transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">add</span>
                        Buat Kampanye
                    </button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-md text-label-md border-b border-outline-variant/20">
<th class="p-4 font-semibold whitespace-nowrap">Judul Kampanye</th>
<th class="p-4 font-semibold whitespace-nowrap">Target Dana</th>
<th class="p-4 font-semibold whitespace-nowrap">Dana Terkumpul</th>
<th class="p-4 font-semibold whitespace-nowrap">Status</th>
<th class="p-4 font-semibold whitespace-nowrap text-right">Aksi</th>
</tr>
</thead>
<tbody class="font-body-md text-body-md">
<tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
<td class="p-4 text-on-surface">Bantu Pendidikan Anak Yatim di Desa Makmur</td>
<td class="p-4 text-on-surface-variant">Rp 50.000.000</td>
<td class="p-4 text-on-surface font-medium">Rp 25.000.000</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#def7ec] text-[#03543f]">
                                        Aktif
                                    </span>
</td>
<td class="p-4 text-right space-x-2 whitespace-nowrap">
<button class="px-3 py-1 border border-primary text-primary rounded-lg font-label-sm text-label-sm hover:bg-primary-container hover:text-on-primary-container transition-colors">
                                        Kelola Log
                                    </button>
<button class="px-3 py-1 border border-outline text-on-surface-variant rounded-lg font-label-sm text-label-sm hover:bg-surface-container transition-colors">
                                        Edit
                                    </button>
</td>
</tr>
<tr class="border-b border-outline-variant/10 hover:bg-surface-container-low/50 transition-colors">
<td class="p-4 text-on-surface">Pembangunan Sumur Air Bersih</td>
<td class="p-4 text-on-surface-variant">Rp 20.000.000</td>
<td class="p-4 text-on-surface font-medium">Rp 20.000.000</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-error-container text-on-error-container">
                                        Selesai
                                    </span>
</td>
<td class="p-4 text-right space-x-2 whitespace-nowrap">
<button class="px-3 py-1 border border-primary text-primary rounded-lg font-label-sm text-label-sm hover:bg-primary-container hover:text-on-primary-container transition-colors">
                                        Kelola Log
                                    </button>
<button class="px-3 py-1 border border-outline text-on-surface-variant rounded-lg font-label-sm text-label-sm hover:bg-surface-container transition-colors" disabled="">
                                        Edit
                                    </button>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="p-4 text-on-surface">Renovasi Panti Asuhan Harapan</td>
<td class="p-4 text-on-surface-variant">Rp 100.000.000</td>
<td class="p-4 text-on-surface font-medium">Rp 0</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-[#def7ec] text-[#03543f]">
                                        Aktif
                                    </span>
</td>
<td class="p-4 text-right space-x-2 whitespace-nowrap">
<button class="px-3 py-1 border border-primary text-primary rounded-lg font-label-sm text-label-sm hover:bg-primary-container hover:text-on-primary-container transition-colors">
                                        Kelola Log
                                    </button>
<button class="px-3 py-1 border border-outline text-on-surface-variant rounded-lg font-label-sm text-label-sm hover:bg-surface-container transition-colors">
                                        Edit
                                    </button>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
</body></html>