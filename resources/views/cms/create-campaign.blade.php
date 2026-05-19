<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Buat Kampanye Baru - CharityHub Admin</title>
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
                        "on-tertiary-fixed": "#2e1600",
                        "inverse-primary": "#94ccff",
                        "primary": "#005d90",
                        "error-container": "#ffdad6",
                        "primary-fixed": "#cde5ff",
                        "outline": "#707881",
                        "on-surface-variant": "#404850",
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#94ccff",
                        "secondary-container": "#50d9fe",
                        "inverse-surface": "#263143",
                        "on-secondary-fixed": "#001f27",
                        "surface-tint": "#006399",
                        "primary-container": "#0077b6",
                        "on-primary-fixed": "#001d32",
                        "inverse-on-surface": "#ecf1ff",
                        "on-tertiary-container": "#fff6f1",
                        "secondary-fixed": "#b3ebff",
                        "secondary": "#00677d",
                        "on-secondary-container": "#005c70",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed-variant": "#6c3a00",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#ffb877",
                        "surface-container-low": "#f0f3ff",
                        "on-primary": "#ffffff",
                        "background": "#f9f9ff",
                        "tertiary-fixed": "#ffdcc0",
                        "on-primary-container": "#f3f7ff",
                        "surface-dim": "#cfdaf2",
                        "surface-container-high": "#dee8ff",
                        "secondary-fixed-dim": "#4cd6fb",
                        "surface": "#f9f9ff",
                        "error": "#ba1a1a",
                        "tertiary-container": "#a95f00",
                        "surface-variant": "#d8e3fb",
                        "surface-container-highest": "#d8e3fb",
                        "surface-bright": "#f9f9ff",
                        "on-secondary": "#ffffff",
                        "tertiary": "#864a00",
                        "on-secondary-fixed-variant": "#004e5f",
                        "on-error-container": "#93000a",
                        "on-background": "#111c2d",
                        "outline-variant": "#bfc7d1",
                        "on-primary-fixed-variant": "#004b74",
                        "surface-container": "#e7eeff",
                        "on-surface": "#111c2d"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "margin-desktop": "48px",
                        "gutter": "24px",
                        "section-gap": "80px",
                        "container-max-width": "1280px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
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
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        input:focus, textarea:focus, select:focus {
            box-shadow: 0 0 0 1px #0077b6 !important;
            border-color: #0077b6 !important;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen flex">
<!-- Sidebar -->
<aside class="w-64 bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col hidden md:flex sticky top-0 h-screen">
<div class="p-6">
<a class="flex items-center gap-2 text-primary" href="#">
<span class="material-symbols-outlined fill text-3xl">volunteer_activism</span>
<span class="font-headline-md text-headline-md font-bold">CharityHub Admin</span>
</a>
</div>
<nav class="flex-1 px-4 py-6 space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">list_alt</span>
<span class="font-label-md text-label-md">Kampanye Saya</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary-container text-on-primary-container" href="#">
<span class="material-symbols-outlined fill">add_circle</span>
<span class="font-label-md text-label-md font-bold">Buat Kampanye Baru</span>
</a>
</nav>
<div class="p-4 border-t border-outline-variant/20">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:text-error transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-label-md text-label-md">Keluar (Logout)</span>
</a>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col h-screen overflow-y-auto">
<!-- Header -->
<header class="bg-surface-container-lowest border-b border-outline-variant/20 px-8 py-6 flex justify-between items-center sticky top-0 z-10 backdrop-blur-md bg-opacity-90">
<div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Halo, Campaigner Hebat</h1>
</div>
<div class="flex items-center gap-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-sm text-label-sm border border-secondary/20">Campaigner</span>
<div class="w-10 h-10 rounded-full bg-surface-container-high border border-outline-variant/40 flex items-center justify-center overflow-hidden">
<span class="material-symbols-outlined text-on-surface-variant">person</span>
</div>
</div>
</header>
<!-- Form Area -->
<div class="p-8 max-w-4xl mx-auto w-full">
<div class="bg-surface-container-lowest rounded-xl shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-outline-variant/30 p-8">
<div class="mb-8 border-b border-outline-variant/20 pb-6">
<h2 class="font-headline-md text-headline-md text-on-surface mb-2">Mulai Galang Dana Baru</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Lengkapi detail kampanye Anda untuk mulai mengumpulkan dukungan.</p>
</div>
<form class="space-y-6">
<!-- Judul -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-title">Judul Kampanye</label>
<input class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none transition-colors" id="campaign-title" placeholder="Masukkan judul kampanye yang menarik dan jelas" type="text"/>
</div>
<!-- Kategori & Target -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-category">Kategori</label>
<div class="relative">
<select class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface appearance-none focus:outline-none transition-colors" id="campaign-category">
<option disabled="" selected="" value="">Pilih Kategori</option>
<option value="medis">Medis</option>
<option value="pendidikan">Pendidikan</option>
<option value="bencana">Bencana Alam</option>
<option value="panti">Panti Asuhan</option>
</select>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
</div>
</div>
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-target">Target Dana</label>
<div class="relative flex items-center">
<span class="absolute left-4 font-body-md text-body-md text-on-surface-variant">Rp</span>
<input class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg pl-12 pr-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none transition-colors" id="campaign-target" placeholder="Contoh: 50000000" type="number"/>
</div>
</div>
</div>
<!-- Deskripsi -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-desc">Deskripsi Kampanye</label>
<textarea class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none transition-colors resize-y" id="campaign-desc" placeholder="Ceritakan secara detail latar belakang dan tujuan penggalangan dana ini..." rows="6"></textarea>
</div>
<!-- Upload -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2">Foto Sampul</label>
<div class="mt-1 flex justify-center px-6 pt-10 pb-10 border-2 border-outline-variant/40 border-dashed rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer group">
<div class="space-y-2 text-center flex flex-col items-center">
<span class="material-symbols-outlined text-4xl text-outline group-hover:text-primary transition-colors">add_photo_alternate</span>
<div class="flex text-sm text-on-surface-variant">
<label class="relative cursor-pointer rounded-md bg-transparent font-label-md text-primary focus-within:outline-none hover:text-primary-container" for="file-upload">
<span>Unggah Foto Sampul Kampanye</span>
<input accept="image/*" class="sr-only" id="file-upload" name="file-upload" type="file"/>
</label>
</div>
<p class="text-xs text-outline">PNG, JPG, GIF hingga 5MB</p>
</div>
</div>
</div>
<!-- Actions -->
<div class="pt-6 border-t border-outline-variant/20 flex justify-end gap-4 mt-8">
<button class="px-6 py-2.5 border border-primary text-primary rounded-lg font-label-md text-label-md hover:bg-primary/5 transition-colors" type="button">
                            Batal
                        </button>
<button class="px-6 py-2.5 bg-primary-container text-on-primary-container rounded-lg font-label-md text-label-md hover:bg-primary transition-colors shadow-sm" type="submit">
                            Rilis Kampanye
                        </button>
</div>
</form>
</div>
</div>
</main>
</body></html>


<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pencatatan Penarikan &amp; Penggunaan Dana - CharityHub Admin</title>
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
                      "tertiary": "#864a00",
                      "surface-tint": "#006399",
                      "on-secondary-container": "#005c70",
                      "on-primary-fixed-variant": "#004b74",
                      "background": "#f9f9ff",
                      "primary": "#005d90",
                      "on-surface-variant": "#404850",
                      "surface": "#f9f9ff",
                      "inverse-primary": "#94ccff",
                      "surface-container": "#e7eeff",
                      "surface-container-low": "#f0f3ff",
                      "on-tertiary": "#ffffff",
                      "secondary-fixed-dim": "#4cd6fb",
                      "on-tertiary-fixed": "#2e1600",
                      "error": "#ba1a1a",
                      "on-primary-container": "#f3f7ff",
                      "inverse-surface": "#263143",
                      "surface-bright": "#f9f9ff",
                      "on-surface": "#111c2d",
                      "tertiary-fixed": "#ffdcc0",
                      "primary-fixed-dim": "#94ccff",
                      "surface-dim": "#cfdaf2",
                      "on-secondary-fixed": "#001f27",
                      "on-error": "#ffffff",
                      "secondary-container": "#50d9fe",
                      "surface-container-highest": "#d8e3fb",
                      "on-secondary-fixed-variant": "#004e5f",
                      "on-error-container": "#93000a",
                      "tertiary-fixed-dim": "#ffb877",
                      "error-container": "#ffdad6",
                      "primary-fixed": "#cde5ff",
                      "on-tertiary-fixed-variant": "#6c3a00",
                      "on-primary-fixed": "#001d32",
                      "surface-container-lowest": "#ffffff",
                      "secondary": "#00677d",
                      "on-secondary": "#ffffff",
                      "on-primary": "#ffffff",
                      "on-tertiary-container": "#fff6f1",
                      "outline": "#707881",
                      "tertiary-container": "#a95f00",
                      "primary-container": "#0077b6",
                      "on-background": "#111c2d",
                      "surface-variant": "#d8e3fb",
                      "secondary-fixed": "#b3ebff",
                      "surface-container-high": "#dee8ff",
                      "outline-variant": "#bfc7d1",
                      "inverse-on-surface": "#ecf1ff"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "margin-mobile": "16px",
                      "margin-desktop": "48px",
                      "gutter": "24px",
                      "container-max-width": "1280px",
                      "unit": "8px",
                      "section-gap": "80px"
              },
              "fontFamily": {
                      "headline-lg": [
                              "Inter"
                      ],
                      "label-md": [
                              "Inter"
                      ],
                      "headline-md": [
                              "Inter"
                      ],
                      "body-lg": [
                              "Inter"
                      ],
                      "label-sm": [
                              "Inter"
                      ],
                      "display-lg": [
                              "Inter"
                      ],
                      "body-md": [
                              "Inter"
                      ],
                      "display-lg-mobile": [
                              "Inter"
                      ]
              },
              "fontSize": {
                      "headline-lg": [
                              "32px",
                              {
                                      "lineHeight": "40px",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "600"
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
                      "headline-md": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "28px",
                                      "fontWeight": "400"
                              }
                      ],
                      "label-sm": [
                              "12px",
                              {
                                      "lineHeight": "16px",
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
<body class="bg-background text-on-surface font-body-md min-h-screen antialiased flex">
<!-- SideNavBar -->
<nav class="bg-surface-container-lowest dark:bg-inverse-surface text-primary dark:text-primary-fixed-dim font-body-md text-body-md h-screen w-64 fixed left-0 top-0 border-r border-outline-variant dark:border-outline shadow-sm flex flex-col py-unit-double z-50 hidden md:flex">
<div class="px-gutter mb-section-gap flex items-center space-x-unit-double">
<div class="w-10 h-10 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold">
                CH
            </div>
<div>
<h1 class="font-headline-md text-headline-md font-bold text-primary dark:text-primary-fixed-dim">CharityHub Admin</h1>
<p class="font-label-sm text-label-sm text-on-surface-variant">Internal CMS</p>
</div>
</div>
<ul class="flex flex-col space-y-unit flex-grow">
<!-- Dashboard (Inactive) -->
<li>
<a class="text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors duration-200 ease-in-out flex items-center px-gutter py-unit-double space-x-unit-double" href="#">
<span class="material-symbols-outlined" data-icon="dashboard">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
</li>
<!-- Kampanye Saya (Active semantically, as this is managing a campaign) -->
<li>
<a class="text-primary dark:text-primary-fixed-dim font-bold border-r-4 border-primary dark:border-primary-fixed-dim bg-surface-container-high dark:bg-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors duration-200 ease-in-out flex items-center px-gutter py-unit-double space-x-unit-double" href="#">
<span class="material-symbols-outlined" data-icon="list_alt" style="font-variation-settings: 'FILL' 1;">list_alt</span>
<span class="font-label-md text-label-md">Kampanye Saya</span>
</a>
</li>
<!-- Buat Kampanye Baru (Inactive) -->
<li>
<a class="text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors duration-200 ease-in-out flex items-center px-gutter py-unit-double space-x-unit-double" href="#">
<span class="material-symbols-outlined" data-icon="add_circle">add_circle</span>
<span class="font-label-md text-label-md">Buat Kampanye Baru</span>
</a>
</li>
</ul>
<div class="mt-auto px-gutter">
<!-- Keluar -->
<a class="text-on-surface-variant dark:text-surface-variant hover:bg-surface-container dark:hover:bg-surface-container-high transition-colors duration-200 ease-in-out flex items-center py-unit-double space-x-unit-double w-full" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-label-md text-label-md">Keluar</span>
</a>
</div>
</nav>
<!-- TopAppBar -->
<header class="bg-surface/80 dark:bg-background/80 backdrop-blur-md text-primary dark:text-primary-fixed-dim font-label-md text-label-md fixed top-0 right-0 w-[calc(100%-16rem)] z-40 border-b border-outline-variant dark:border-outline flat no shadows flex justify-between items-center h-16 px-margin-desktop transition-all duration-300 hidden md:flex">
<div class="flex items-center space-x-unit">
<a class="text-on-surface-variant dark:text-surface-variant hover:text-primary dark:hover:text-primary-fixed-dim flex items-center transition-colors" href="#">
<span class="material-symbols-outlined mr-unit" data-icon="arrow_back">arrow_back</span>
                Kembali ke Detail Kampanye
            </a>
</div>
<div class="flex items-center space-x-unit-double">
<div class="hidden search_bar">
<!-- Search hidden as per json -->
</div>
<div class="flex items-center space-x-unit">
<span class="text-on-surface-variant">Campaigner</span>
<div class="w-8 h-8 rounded-full bg-surface-variant overflow-hidden border border-outline-variant">
<img alt="User Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of a smiling man in a business casual outfit. He has short dark hair and a neat beard. The background is a soft, blurred neutral color. The lighting is bright and even, creating a clean, modern aesthetic suitable for a corporate or professional profile picture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDBs_Dh2eh-M7u-iRIqlD4XdQToW_vcYZ5Hxa5jB6cvpW0y_F_HYzKlGICMEaRdjnuOejGBE81zOErAeqi2Kzy8ODip1YzJFM3SEKMPNNTl9oH98XsWT7R2OLr7QFFhUCkLHMYWeah-719K8FGzLhhQ7-3FK3F2trs7hj7L6XytvsxjL88wFMH9-oBQs0J_KUyKaN0sXrPrf_8VNvMAbdPrcfLfcTfkPzThppW3owE2L4qAjj91CKOTbz1KcMqIpmeHBxnAadh7tO0"/>
</div>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 md:ml-64 pt-16 bg-surface-container-low min-h-screen">
<div class="max-w-3xl mx-auto px-margin-mobile md:px-margin-desktop py-section-gap">
<!-- Breadcrumbs / Back Link (Mobile) -->
<div class="mb-gutter md:hidden">
<a class="text-on-surface-variant hover:text-primary flex items-center font-label-md text-label-md" href="#">
<span class="material-symbols-outlined mr-unit text-[20px]" data-icon="arrow_back">arrow_back</span>
                    Kembali
                </a>
</div>
<!-- Form Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-margin-mobile md:p-margin-desktop relative overflow-hidden">
<!-- Decorative top bar for visual interest -->
<div class="absolute top-0 left-0 w-full h-1 bg-primary"></div>
<!-- Form Header -->
<div class="mb-section-gap">
<h2 class="font-headline-lg text-headline-lg text-on-surface mb-unit">Catat Penggunaan Uang Keluar</h2>
<div class="flex items-start bg-secondary-container/20 p-unit-double rounded-lg border border-secondary-container">
<span class="material-symbols-outlined text-secondary mt-1 mr-unit-double" data-icon="info">info</span>
<p class="font-body-md text-body-md text-on-surface-variant">
                            Seluruh catatan pengeluaran akan langsung dipublikasikan di halaman log transparansi publik secara <strong class="font-bold text-on-surface">real-time</strong>.
                        </p>
</div>
</div>
<form action="#" class="space-y-gutter" method="POST">
<!-- Input: Nominal Penarikan -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-unit" for="nominal">Nominal Penarikan</label>
<div class="relative rounded-lg shadow-sm">
<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-unit-double">
<span class="text-on-surface-variant font-body-md text-body-md">Rp</span>
</div>
<input class="block w-full rounded-lg border-outline-variant py-3 pl-12 pr-unit-double text-on-surface bg-surface focus:border-primary focus:ring-1 focus:ring-primary font-body-lg text-body-lg" id="nominal" name="nominal" placeholder="0" type="number"/>
</div>
</div>
<!-- Input: Tanggal -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-unit" for="tanggal">Tanggal Penarikan</label>
<div class="relative">
<input class="block w-full rounded-lg border-outline-variant py-3 px-unit-double text-on-surface bg-surface focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md" id="tanggal" name="tanggal" type="date"/>
</div>
</div>
<!-- Input: Deskripsi Penggunaan -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-unit" for="deskripsi">Deskripsi Penggunaan</label>
<textarea class="block w-full rounded-lg border-outline-variant py-3 px-unit-double text-on-surface bg-surface focus:border-primary focus:ring-1 focus:ring-primary font-body-md text-body-md resize-none" id="deskripsi" name="deskripsi" placeholder="Tuliskan secara rinci untuk apa uang ini digunakan. Contoh: Pembelian obat-obatan tahap 1 dan biaya operasional ambulans." rows="5"></textarea>
</div>
<!-- Action Buttons -->
<div class="pt-section-gap flex flex-col-reverse md:flex-row md:justify-end gap-unit-double border-t border-outline-variant mt-section-gap">
<button class="w-full md:w-auto px-6 py-3 rounded-lg border-1.5 border-primary text-primary font-label-md text-label-md hover:bg-primary-container/10 transition-colors text-center focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2" type="button">
                            Kembali
                        </button>
<button class="w-full md:w-auto px-6 py-3 rounded-lg bg-[#00677d] text-white font-label-md text-label-md hover:bg-[#004e5f] transition-colors text-center flex items-center justify-center shadow-sm hover:shadow-md focus:outline-none focus:ring-2 focus:ring-[#00677d] focus:ring-offset-2" type="submit">
<span class="material-symbols-outlined mr-unit text-[18px]" data-icon="publish">publish</span>
                            Simpan &amp; Publikasikan Log
                        </button>
</div>
</form>
</div>
</div>
</main>
</body></html>