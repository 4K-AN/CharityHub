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