<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>CharityHub - Login</title>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "outline-variant": "#bfc7d1",
                    "inverse-primary": "#94ccff",
                    "surface-variant": "#d8e3fb",
                    "background": "#f9f9ff",
                    "surface-container-lowest": "#ffffff",
                    "on-tertiary-fixed": "#2e1600",
                    "on-tertiary-container": "#fff6f1",
                    "secondary-container": "#50d9fe",
                    "tertiary-fixed-dim": "#ffb877",
                    "on-secondary-fixed-variant": "#004e5f",
                    "on-secondary-fixed": "#001f27",
                    "tertiary-fixed": "#ffdcc0",
                    "surface-container": "#e7eeff",
                    "on-primary-container": "#f3f7ff",
                    "inverse-surface": "#263143",
                    "secondary-fixed-dim": "#4cd6fb",
                    "primary": "#005d90",
                    "on-error": "#ffffff",
                    "tertiary-container": "#a95f00",
                    "on-surface-variant": "#404850",
                    "primary-container": "#0077b6",
                    "on-tertiary": "#ffffff",
                    "secondary-fixed": "#b3ebff",
                    "on-secondary": "#ffffff",
                    "inverse-on-surface": "#ecf1ff",
                    "primary-fixed-dim": "#94ccff",
                    "outline": "#707881",
                    "on-error-container": "#93000a",
                    "tertiary": "#864a00",
                    "on-tertiary-fixed-variant": "#6c3a00",
                    "on-background": "#111c2d",
                    "on-primary-fixed": "#001d32",
                    "error-container": "#ffdad6",
                    "error": "#ba1a1a",
                    "on-surface": "#111c2d",
                    "on-secondary-container": "#005c70",
                    "secondary": "#00677d",
                    "surface-tint": "#006399",
                    "surface-container-high": "#dee8ff",
                    "surface": "#f9f9ff",
                    "on-primary-fixed-variant": "#004b74",
                    "surface-dim": "#cfdaf2",
                    "surface-bright": "#f9f9ff",
                    "surface-container-low": "#f0f3ff",
                    "primary-fixed": "#cde5ff",
                    "on-primary": "#ffffff",
                    "surface-container-highest": "#d8e3fb"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "spacing": {
                    "container-max-width": "1280px",
                    "margin-mobile": "16px",
                    "gutter": "24px",
                    "margin-desktop": "48px",
                    "unit": "8px",
                    "section-gap": "80px"
            },
            "fontFamily": {
                    "body-lg": [
                            "Inter"
                    ],
                    "headline-md": [
                            "Inter"
                    ],
                    "label-sm": [
                            "Inter"
                    ],
                    "headline-lg": [
                            "Inter"
                    ],
                    "display-lg": [
                            "Inter"
                    ],
                    "body-md": [
                            "Inter"
                    ],
                    "label-md": [
                            "Inter"
                    ],
                    "display-lg-mobile": [
                            "Inter"
                    ]
            },
            "fontSize": {
                    "body-lg": [
                            "18px",
                            {
                                    "lineHeight": "28px",
                                    "fontWeight": "400"
                            }
                    ],
                    "headline-md": [
                            "24px",
                            {
                                    "lineHeight": "32px",
                                    "fontWeight": "600"
                            }
                    ],
                    "label-sm": [
                            "12px",
                            {
                                    "lineHeight": "16px",
                                    "fontWeight": "600"
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
                    "display-lg": [
                            "48px",
                            {
                                    "lineHeight": "56px",
                                    "letterSpacing": "-0.02em",
                                    "fontWeight": "700"
                            }
                    ],
                    "body-md": [
                            "16px",
                            {
                                    "lineHeight": "24px",
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
                    ],
                    "display-lg-mobile": [
                            "36px",
                            {
                                    "lineHeight": "44px",
                                    "letterSpacing": "-0.02em",
                                    "fontWeight": "700"
                            }
                    ]
            }
    },
        },
      }
    </script>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased min-h-screen">
<!-- Split Screen Container -->
<main class="flex min-h-screen w-full">
<!-- Left Panel: Inspirational Image (Desktop Only) -->
<section class="hidden md:flex relative w-1/2 bg-surface-container overflow-hidden">
<!-- Background Image using Placeholder -->
<img alt="" class="absolute inset-0 w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzPhmX6Xb_c5BXiYqfwuT3wl6BzoAWSSInTNPo2o9iYo2ohERir4oSF96CM715ECo6kZo_RvtU07a2rLHEd9IHA8GsODdb8Rgn_zaDAEaTyu1IvpMJUz13YBPwk_2ef_ZPf7KbBcUzNzR0ZqY07NizVI5rbXHZRiP-aigGHjzQPSCqukSekUC5RN2_c9EHJKYGedwAZd9lT2ZvVZ8KxuD0piM0v6XBXfelztIe9uuDvw9YHTWvnu289UEu6x5mqNJTX66kGYb7pPY"/>
<!-- Subtle Blue Gradient Overlay -->
<div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent mix-blend-multiply"></div>
<div class="absolute inset-0 bg-primary/20 backdrop-blur-[2px]"></div>
<!-- Content Overlay -->
<div class="relative z-10 flex flex-col justify-end p-margin-desktop w-full h-full text-on-primary">
<div class="max-w-md">
<span class="material-symbols-outlined text-4xl mb-4 opacity-80" style="font-variation-settings: 'FILL' 1;">format_quote</span>
<h2 class="font-headline-lg text-headline-lg mb-4 text-on-primary">
                        "Kebahagiaan tidak pernah berkurang dengan dibagikan."
                    </h2>
<p class="font-body-lg text-body-lg text-primary-fixed opacity-90">
                        Bergabunglah dengan ribuan orang baik lainnya untuk menciptakan perubahan nyata.
                    </p>
</div>
</div>
</section>
<!-- Right Panel: Login Form -->
<section class="w-full md:w-1/2 flex items-center justify-center p-margin-mobile md:p-margin-desktop bg-surface-container-lowest">
<div class="w-full max-w-[420px] flex flex-col gap-8">
<!-- Header -->
<div class="flex flex-col gap-2">
<div class="font-display-lg text-headline-lg font-bold text-primary mb-2">
                        CharityHub
                    </div>
<h1 class="font-headline-md text-headline-md text-on-surface">
                        Selamat Datang Kembali
                    </h1>
<p class="font-body-md text-body-md text-on-surface-variant">
                        Masuk untuk melanjutkan perjalanan kebaikan Anda.
                    </p>
</div>
<!-- Form -->
<form action="#" class="flex flex-col gap-6" method="POST">
<div class="flex flex-col gap-4">
<!-- Email Input -->
<div class="flex flex-col gap-1.5">
<label class="font-label-md text-label-md text-on-surface" for="email">Email Address</label>
<input class="w-full px-4 py-3 rounded-DEFAULT border border-outline-variant bg-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors font-body-md text-body-md text-on-surface placeholder:text-outline shadow-sm" id="email" name="email" placeholder="nama@email.com" required="" type="email"/>
</div>
<!-- Password Input -->
<div class="flex flex-col gap-1.5">
<div class="flex justify-between items-center">
<label class="font-label-md text-label-md text-on-surface" for="password">Password</label>
<a class="font-label-md text-label-md text-primary hover:text-primary-container transition-colors" href="#">Lupa Password?</a>
</div>
<input class="w-full px-4 py-3 rounded-DEFAULT border border-outline-variant bg-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors font-body-md text-body-md text-on-surface placeholder:text-outline shadow-sm" id="password" name="password" placeholder="••••••••" required="" type="password"/>
</div>
</div>
<!-- Submit Button -->
<button class="w-full py-3.5 px-4 rounded-DEFAULT bg-primary hover:bg-primary-container text-on-primary font-label-md text-label-md transition-colors shadow-sm flex items-center justify-center gap-2" type="submit">
                        Masuk Sekarang
                        <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 0;">arrow_forward</span>
</button>
</form>
<!-- Divider -->
<div class="relative flex items-center py-2">
<div class="flex-grow border-t border-outline-variant/40"></div>
<span class="flex-shrink-0 mx-4 text-on-surface-variant font-label-sm text-label-sm">ATAU</span>
<div class="flex-grow border-t border-outline-variant/40"></div>
</div>
<!-- Registration Link / Toggle -->
<div class="text-center font-body-md text-body-md text-on-surface-variant">
                    Belum punya akun? 
                    <a class="font-label-md text-label-md text-primary hover:text-primary-container underline underline-offset-4 transition-colors" href="#">Daftar di sini</a>
</div>
</div>
</section>
</main>
</body></html>


<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Edit Profile - CharityHub</title>
<!-- Google Fonts: Inter -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                            "surface-bright": "#f9f9ff",
                            "on-error": "#ffffff",
                            "on-secondary-container": "#005c70",
                            "surface-variant": "#d8e3fb",
                            "on-background": "#111c2d",
                            "surface-dim": "#cfdaf2",
                            "secondary-fixed": "#b3ebff",
                            "on-secondary": "#ffffff",
                            "on-primary-fixed": "#001d32",
                            "on-tertiary-fixed-variant": "#6c3a00",
                            "on-tertiary": "#ffffff",
                            "surface-container-highest": "#d8e3fb",
                            "on-primary-fixed-variant": "#004b74",
                            "surface-container-low": "#f0f3ff",
                            "primary-fixed": "#cde5ff",
                            "on-tertiary-fixed": "#2e1600",
                            "tertiary": "#864a00",
                            "primary-fixed-dim": "#94ccff",
                            "inverse-surface": "#263143",
                            "secondary": "#00677d",
                            "surface-container": "#e7eeff",
                            "on-secondary-fixed-variant": "#004e5f",
                            "on-surface-variant": "#404850",
                            "error-container": "#ffdad6",
                            "primary-container": "#0077b6",
                            "on-surface": "#111c2d",
                            "surface-tint": "#006399",
                            "on-primary": "#ffffff",
                            "background": "#f9f9ff",
                            "error": "#ba1a1a",
                            "surface-container-lowest": "#ffffff",
                            "primary": "#005d90",
                            "surface-container-high": "#dee8ff",
                            "outline-variant": "#bfc7d1",
                            "on-secondary-fixed": "#001f27",
                            "on-error-container": "#93000a",
                            "tertiary-fixed-dim": "#ffb877",
                            "on-tertiary-container": "#fff6f1",
                            "tertiary-container": "#a95f00",
                            "surface": "#f9f9ff",
                            "tertiary-fixed": "#ffdcc0",
                            "outline": "#707881",
                            "on-primary-container": "#f3f7ff",
                            "secondary-container": "#50d9fe",
                            "inverse-primary": "#94ccff",
                            "secondary-fixed-dim": "#4cd6fb",
                            "inverse-on-surface": "#ecf1ff"
                    },
                    "borderRadius": {
                            "DEFAULT": "0.125rem",
                            "lg": "0.25rem",
                            "xl": "0.5rem",
                            "full": "0.75rem"
                    },
                    "spacing": {
                            "margin-desktop": "48px",
                            "gutter": "24px",
                            "container-max-width": "1280px",
                            "margin-mobile": "16px",
                            "unit": "8px",
                            "section-gap": "80px"
                    },
                    "fontFamily": {
                            "body-md": ["Inter"],
                            "headline-md": ["Inter"],
                            "display-lg-mobile": ["Inter"],
                            "body-lg": ["Inter"],
                            "label-md": ["Inter"],
                            "headline-lg": ["Inter"],
                            "label-sm": ["Inter"],
                            "display-lg": ["Inter"]
                    },
                    "fontSize": {
                            "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                            "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                            "display-lg-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                            "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                            "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                            "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                            "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
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
<body class="bg-background text-on-background font-body-md text-body-md min-h-screen flex flex-col relative overflow-hidden">
<!-- TopNavBar (Shared Component) -->
<nav class="bg-surface/80 shadow-sm backdrop-blur-md docked full-width top-0 sticky z-50">
<div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-20 max-w-container-max-width mx-auto">
<!-- Brand -->
<a class="font-display-lg text-headline-md font-bold text-primary" href="#">
                CharityHub
            </a>
<!-- Navigation Links (Desktop) -->
<div class="hidden md:flex items-center gap-gutter font-label-md text-label-md">
<a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Home</a>
<a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Campaigns</a>
<a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">About</a>
<a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="#">Contact</a>
</div>
<!-- Trailing Action -->
<div class="flex items-center gap-4">
<button class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200">
                    Login / Daftar
                </button>
<!-- Mobile Menu Icon -->
<button class="md:hidden text-on-surface flex items-center justify-center p-2">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</div>
</div>
</nav>
<!-- Main Content Canvas (Background Context - Blurred) -->
<main class="flex-grow flex flex-col items-center w-full max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop py-section-gap blur-sm opacity-60 transition-all pointer-events-none select-none">
<div class="w-full flex justify-between items-center mb-8">
<h1 class="font-headline-lg text-headline-lg text-on-surface">Riwayat Donasi</h1>
<button class="bg-primary text-on-primary px-4 py-2 rounded-lg font-label-md text-label-md hidden md:flex items-center gap-2">
<span class="material-symbols-outlined text-sm">download</span> Unduh Laporan
            </button>
</div>
<!-- Empty State Table Context -->
<div class="w-full bg-surface-container-lowest border border-outline-variant/30 rounded-xl shadow-[0_2px_12px_-4px_rgba(0,0,0,0.04)] overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant/30">
<th class="p-4 font-label-md text-label-md text-on-surface-variant font-medium">Tanggal</th>
<th class="p-4 font-label-md text-label-md text-on-surface-variant font-medium">Kampanye</th>
<th class="p-4 font-label-md text-label-md text-on-surface-variant font-medium">Nominal</th>
<th class="p-4 font-label-md text-label-md text-on-surface-variant font-medium">Status</th>
</tr>
</thead>
<tbody>
<!-- Empty State Row -->
<tr>
<td class="p-16 text-center" colspan="4">
<div class="flex flex-col items-center justify-center text-outline">
<span class="material-symbols-outlined text-6xl mb-4 text-outline-variant" style="font-variation-settings: 'wght' 200;">receipt_long</span>
<h3 class="font-headline-md text-headline-md text-on-surface mb-2">Belum Ada Donasi</h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md mx-auto">Anda belum melakukan donasi apapun. Mari mulai berdampak positif dengan mendukung kampanye yang Anda pedulikan.</p>
<button class="mt-6 px-6 py-2 border-[1.5px] border-primary text-primary rounded-lg font-label-md text-label-md hover:bg-primary-container/10 transition-colors">
                                        Jelajahi Kampanye
                                    </button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</div>
</main>
<!-- Footer (Shared Component - Blurred behind modal) -->
<footer class="w-full py-12 bg-surface-container-low border-t border-outline-variant/20 mt-auto blur-sm opacity-60 pointer-events-none select-none">
<div class="flex flex-col md:flex-row justify-between items-center w-full px-margin-mobile md:px-margin-desktop gap-gutter max-w-container-max-width mx-auto">
<!-- Brand & Copyright -->
<div class="flex flex-col items-center md:items-start gap-2">
<span class="font-display-lg text-headline-md font-bold text-primary">CharityHub</span>
<span class="font-body-md text-body-md text-on-surface-variant">© 2024 CharityHub. Transparansi dalam Setiap Donasi.</span>
</div>
<!-- Links -->
<div class="flex items-center gap-gutter font-body-md text-body-md">
<a class="text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Terms of Service</a>
<a class="text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">Privacy Policy</a>
<a class="text-on-surface-variant hover:text-primary hover:underline transition-all" href="#">FAQ</a>
</div>
</div>
</footer>
<!-- ========================================== -->
<!-- OVERLAY & MODAL INTERFACE (Active State)   -->
<!-- ========================================== -->
<div class="fixed inset-0 z-[100] flex items-center justify-center p-4 bg-inverse-surface/60 backdrop-blur-sm">
<!-- Modal Card -->
<div aria-labelledby="modal-title" aria-modal="true" class="bg-surface-container-lowest w-full max-w-[480px] rounded-xl shadow-[0_8px_24px_-8px_rgba(0,0,0,0.12)] border border-outline-variant/20 flex flex-col" role="dialog">
<!-- Modal Header -->
<div class="p-6 border-b border-outline-variant/20 flex justify-between items-center">
<h2 class="font-headline-md text-headline-md text-on-surface font-bold" id="modal-title">
                    Perbarui Profil Anda
                </h2>
<button aria-label="Close modal" class="text-on-surface-variant hover:text-on-surface transition-colors rounded-full p-1 hover:bg-surface-container-high focus:outline-none focus:ring-2 focus:ring-primary">
<span class="material-symbols-outlined" data-icon="close">close</span>
</button>
</div>
<!-- Modal Body (Form) -->
<div class="p-6 flex flex-col gap-6">
<!-- Input Group: Nama Lengkap -->
<div class="flex flex-col gap-2">
<label class="font-label-sm text-label-sm text-on-surface-variant" for="namaLengkap">
                        Nama Lengkap
                    </label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant" data-icon="person">person</span>
<input class="w-full bg-surface-bright border border-outline-variant text-on-surface font-body-md text-body-md rounded-lg py-3 pl-10 pr-4 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-shadow placeholder:text-outline/70" id="namaLengkap" placeholder="Contoh: Budi Santoso" type="text" value="Budi Santoso"/>
</div>
</div>
<!-- Input Group: Password -->
<div class="flex flex-col gap-2">
<label class="font-label-sm text-label-sm text-on-surface-variant" for="passwordUbah">
                        Ubah Password (Opsional)
                    </label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant" data-icon="lock">lock</span>
<input class="w-full bg-surface-bright border border-outline-variant text-on-surface font-body-md text-body-md rounded-lg py-3 pl-10 pr-10 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-shadow placeholder:text-outline/70" id="passwordUbah" placeholder="••••••••" type="password"/>
<button aria-label="Toggle password visibility" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline-variant hover:text-on-surface transition-colors focus:outline-none" type="button">
<span class="material-symbols-outlined" data-icon="visibility_off">visibility_off</span>
</button>
</div>
<p class="font-label-sm text-label-sm text-outline mt-1">Kosongkan jika tidak ingin mengubah password saat ini.</p>
</div>
</div>
<!-- Modal Footer (Actions) -->
<div class="p-6 bg-surface-bright border-t border-outline-variant/20 rounded-b-xl flex items-center justify-end gap-3">
<button class="font-label-md text-label-md text-on-surface-variant px-5 py-2.5 rounded-lg hover:bg-surface-container transition-colors focus:outline-none focus:ring-2 focus:ring-primary/50">
                    Batal
                </button>
<button class="font-label-md text-label-md bg-primary text-on-primary px-5 py-2.5 rounded-lg shadow-sm hover:bg-surface-tint hover:shadow-md transition-all focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 focus:ring-offset-surface-bright">
                    Simpan Perubahan
                </button>
</div>
</div>
</div>
</body></html>