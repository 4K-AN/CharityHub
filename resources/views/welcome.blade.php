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
<a class="font-display-lg text-headline-md font-bold text-primary dark:text-primary-fixed-dim" href="#">CharityHub</a>
<ul class="hidden md:flex gap-gutter items-center">
<li><a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">Home</a></li>
<li><a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">Campaigns</a></li>
<li><a class="text-primary dark:text-primary-fixed-dim border-b-2 border-primary dark:border-primary-fixed-dim pb-1 hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">About</a></li>
<li><a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200" href="#">Contact</a></li>
</ul>
<div class="hidden md:block">
<a class="text-on-surface-variant dark:text-outline-variant hover:text-primary dark:hover:text-primary-fixed-dim transition-colors duration-200 font-label-md text-label-md" href="#">Login / Daftar</a>
</div>
<!-- Mobile Menu Button Placeholder -->
<button class="md:hidden text-primary">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</nav>
<main class="flex-grow">
<!-- Hero Section -->
<section class="relative w-full h-[614px] min-h-[400px] flex items-center justify-center overflow-hidden bg-surface-variant">
<div class="absolute inset-0 z-0">
<img alt="Group of diverse people volunteering together at a beach cleanup during sunset, symbolizing solidarity and community support. The warm golden hour lighting highlights their collaborative effort." class="w-full h-full object-cover object-center" data-alt="A highly detailed and wide shot of a diverse group of volunteers gathering on a sandy beach during a vibrant, warm sunset. They are holding cardboard boxes labeled 'HELPING HANDS', coordinating a community relief effort or beach cleanup. The lighting is golden hour, casting long soft shadows and emphasizing unity and human solidarity. The overall aesthetic should align with corporate modernism: clean, uplifting, and professional, utilizing a warm color palette that contrasts slightly with the brand's primary sea blue tones to create an inspiring hero image." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDM6G6iZHNizDxA6EkPM_nV3xaFHtpA37ktSb-m-mJgEmhXY-GUruya0mKfT_xMpviNzmJXxGHp2sdi_bbW_0pVbk3m4UmRnZ7d5bFNl_izrRm6VugvJFD7ILXe3jZnClOV9AaBkuRe5NTR6zGsvNH-_V_btqPBgZwA_ub5P6T6X3y3KOh4hMoIT-itBavOSihBMkOjQ7X_w442UnSQ-Ik-m13JNXRVN5LJ-dwXO2RwQnxdX5T0VJOm0LIky76U4jeYhGzrFfVJ_CM"/>
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
<img alt="Profile placeholder for team member" class="w-full h-full object-cover" data-alt="A professional headshot of a young male software developer. He is smiling warmly at the camera, wearing a neat casual shirt. The background is a minimalist, softly blurred modern office environment with a light, airy aesthetic, fitting the corporate modernism style of the overall brand. The lighting is bright and even, casting no harsh shadows." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOJCaiPbOC852ySnXop1_Do_BDiW5yRltCscgAO8umC1aPb_UQbLeDGBFSMBWW0Q-lXfq6iVEM2iuxep0Xce5FNoqKYXlWbDKaIuNeJpqzEUUlhDqbaV3KQqNPTa9rP9pmAsNXV7p32eaSPga0VyW2KQfzDacQaL5_ja10bWI5_BCBr-1JuoBcrTSH_13x9WRq4SqKtpJ6xbWN3cD4HnBDcWAivuFiSFAF-4bkv_VMUI_e4BM7aZIS2Jx4Y-D6vfVRPPXok0yoyZA"/>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface text-center mb-1">Nama Anggota 1</h4>
<p class="font-label-md text-label-md text-primary bg-primary-fixed px-3 py-1 rounded-full uppercase tracking-wider">Backend &amp; Security</p>
</div>
<!-- Team Member 2 -->
<div class="flex flex-col items-center bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20">
<div class="w-32 h-32 rounded-full overflow-hidden mb-6 border-4 border-surface bg-surface-variant">
<img alt="Profile placeholder for team member" class="w-full h-full object-cover" data-alt="A professional headshot of a young female data analyst. She looks confident and approachable, wearing smart casual attire. The background is a clean, softly out-of-focus modern workspace with subtle light blue and white tones, reflecting the brand's primary color palette. The portrait uses soft, flattering natural light." src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7og-KbARL2oXV79p_rPe7SKwSyiW0ioTABGqPoTfGUrL_LLedALw4jXfyB_srzAgdnk1UlHONqHq7WHtaDvoaIQyGobXfNfQnKvdk8ovivLDOWknkIQ2HMLn33Yhc_wMJNr2aT4_zSRgUul79nG3nj0pA026B8vD9uc4f-LEBUnenCYmaFYf2w9pzSGr8mphIX9Kw3Iqbz0XgyUNYYu6T1d6oIWJ-JN9-7iF7NRwOo7XNPa7bfG7ELspK8ArN_utVEekgeKPepeE"/>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface text-center mb-1">Nama Anggota 2</h4>
<p class="font-label-md text-label-md text-secondary bg-secondary-fixed px-3 py-1 rounded-full uppercase tracking-wider">Data &amp; Campaign</p>
</div>
<!-- Team Member 3 -->
<div class="flex flex-col items-center bg-surface-container-lowest p-8 rounded-xl shadow-sm border border-outline-variant/20">
<div class="w-32 h-32 rounded-full overflow-hidden mb-6 border-4 border-surface bg-surface-variant">
<img alt="Profile placeholder for team member" class="w-full h-full object-cover" data-alt="A professional headshot of a young male UI/UX designer. He has a friendly expression and is dressed in a minimalist, modern dark t-shirt. The background is a bright, indistinct studio or modern office setting with excellent, high-key lighting that emphasizes a clean and trustworthy corporate identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD0960m0K5s23xayBlWzWzq9bRETnAXWauba1F3L12CytdyN_rTKF0rZ8S7-QiyJ7-I95-tzcMcVrhTFU69SZ0U6j7-HhOGcOAN9SLTiO88INX31DjThN3cuT8NQ0Zf_0siilzakIAbi9CmDeHFEHZ2qG08sqZOQpweEE0WSEBSxsSOs9JFl2HTp2HIMzaFWIrkX-XLbpXN1-VAddPO_2QMrt9Fe-26O1PJimtfgZgjnrTI5GjdhWuzW5em1YL2ziyNICkYqaNf9k0"/>
</div>
<h4 class="font-headline-md text-headline-md text-on-surface text-center mb-1">Nama Anggota 3</h4>
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
</body></html>