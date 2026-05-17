<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Campaign Detail - CharityHub</title>
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
<a href="/" class="font-display-lg text-headline-md font-bold text-primary no-underline">
                CharityHub
</a>
<div class="hidden md:flex gap-gutter items-center">
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="/">Home</a>
<a class="font-label-md text-label-md text-primary border-b-2 border-primary pb-1" href="/#campaigns">Campaigns</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="/about">About</a>
<a class="font-label-md text-label-md text-on-surface-variant hover:text-primary transition-colors duration-200" href="/contact">Contact</a>
</div>
<div class="hidden md:block" id="auth-btn-desktop">
<a class="inline-block bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity" href="/login">Login / Daftar</a>
</div>
<button id="mobile-menu-btn" class="md:hidden text-primary p-2 rounded-lg hover:bg-primary/10 transition-colors" aria-label="Toggle Menu">
<span class="material-symbols-outlined text-[28px]" id="menu-icon">menu</span>
</button>
</div>
<!-- Mobile Menu Drawer -->
<div id="mobile-menu" class="hidden md:hidden border-t border-outline-variant/20 bg-surface/95 backdrop-blur-md">
<div class="flex flex-col px-margin-mobile py-4 gap-1 max-w-container-max-width mx-auto">
<a class="px-4 py-3 rounded-xl text-on-surface-variant hover:text-primary hover:bg-primary/5 transition-colors" href="/">Home</a>
<a class="px-4 py-3 rounded-xl text-primary font-semibold bg-primary/5 transition-colors" href="/#campaigns">Campaigns</a>
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
<main class="flex-grow w-full max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop py-section-gap">
<!-- Campaign Header Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter mb-section-gap">
<!-- Left Column: Content -->
<div class="lg:col-span-8 space-y-6">
<!-- Hero Image -->
<div class="w-full aspect-video rounded-xl overflow-hidden bg-surface-container shadow-sm border border-outline-variant/30">
<img id="campaign-image" alt="Kampanye Cover" class="w-full h-full object-cover" src="https://placehold.co/1280x720?text=Loading..."/>
</div>
<!-- Title & Description -->
<div>
<h1 id="campaign-title" class="font-headline-lg text-headline-lg text-primary-container mb-4">Memuat Judul Kampanye...</h1>
<div id="campaign-desc" class="font-body-lg text-body-lg text-on-surface-variant space-y-4">
<p>Memuat deskripsi kampanye...</p>
</div>
</div>
</div>
<!-- Right Column: Sticky Funding Card -->
<div class="lg:col-span-4 relative">
<div class="sticky top-[100px] bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant/30">
<div class="mb-6">
<div class="flex justify-between items-end mb-2">
<span class="font-label-md text-label-md text-outline">Dana Terkumpul</span>
<span id="campaign-collected" class="font-headline-md text-headline-md text-primary">Rp 0</span>
</div>
<div class="w-full h-3 bg-surface-container-high rounded-full overflow-hidden">
<div id="campaign-progress-bar" class="h-full bg-primary-container" style="width: 0%;"></div>
</div>
<div class="flex justify-between items-center mt-2">
<span id="campaign-target" class="font-label-sm text-label-sm text-outline">Target: Rp 0</span>
<span id="campaign-progress-text" class="font-label-sm text-label-sm text-primary-container font-semibold">0%</span>
</div>
</div>
<div class="space-y-4 mb-6">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline" data-icon="group">group</span>
<span id="campaign-donors" class="font-body-md text-body-md text-on-surface-variant">0 Donatur</span>
</div>
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-outline" data-icon="schedule">schedule</span>
<span id="campaign-deadline" class="font-body-md text-body-md text-on-surface-variant">Menghitung Waktu...</span>
</div>
</div>
<a id="donate-btn" href="#" class="w-full py-4 rounded-xl font-label-md text-label-md font-bold text-white transition-all duration-200 flex items-center justify-center gap-2 hover:shadow-md" style="background-color: #2d6a4f;">
<span>Donasi Sekarang</span>
<span class="material-symbols-outlined" data-icon="favorite">favorite</span>
</a>
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
<div id="donations-list" class="space-y-4">
<!-- Dinamis dari API -->
<p class="text-on-surface-variant font-label-md">Memuat data donasi...</p>
</div>
<button class="mt-4 w-full text-center font-label-sm text-label-sm text-primary hover:underline py-2">Lihat Semua Donasi</button>
</div>
<!-- Outgoing Expenses -->
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant/30">
<h3 class="font-body-lg text-body-lg font-semibold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-red-600" data-icon="arrow_upward">arrow_upward</span>
                        Riwayat Pencairan Dana
                    </h3>
<div id="disbursements-list" class="space-y-4">
<!-- Dinamis dari API -->
<p class="text-on-surface-variant font-label-md">Memuat data pencairan...</p>
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
</div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const campaignId = window.location.pathname.split('/')[2];
        
        const formatRupiah = (number) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(number);
        const formatDate = (dateString) => {
            const options = { day: 'numeric', month: 'short', year: 'numeric' };
            return new Date(dateString).toLocaleDateString('id-ID', options);
        };

        // Set donate button link
        document.getElementById('donate-btn').href = `/campaigns/${campaignId}/donate`;

        // Fetch Campaign Detail & Logs
        Promise.all([
            axios.get(`/api/campaigns/${campaignId}`),
            axios.get(`/api/campaigns/${campaignId}/logs`)
        ])
        .then(([campaignResponse, logsResponse]) => {
            const campaign = campaignResponse.data.campaign;
            const logs = logsResponse.data;
            
            if (!campaign) {
                alert("Campaign tidak ditemukan!");
                window.location.href = "/";
                return;
            }

            // Calculations
            const donations = logs.donations || [];
            const disbursements = logs.disbursements || [];
            
            const totalDonations = donations.reduce((sum, d) => sum + parseFloat(d.amount), 0);
            const goal = parseFloat(campaign.goal_amount);
            const progress = Math.min((totalDonations / goal) * 100, 100).toFixed(1);
            const donorsCount = donations.length;

            // Date calculations
            const today = new Date();
            const deadlineDate = new Date(campaign.deadline);
            const diffTime = deadlineDate - today;
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            const sisaHari = diffDays > 0 ? `Sisa ${diffDays} Hari` : 'Telah Berakhir';

            // DOM Updates (Header & Stats)
            document.getElementById('campaign-title').textContent = campaign.title;
            document.getElementById('campaign-desc').innerHTML = `<p>${campaign.description.replace(/\n/g, '<br>')}</p>`;
            document.getElementById('campaign-image').src = campaign.image ? `/storage/${campaign.image}` : 'https://placehold.co/1280x720?text=No+Image';
            
            document.getElementById('campaign-collected').textContent = formatRupiah(totalDonations);
            document.getElementById('campaign-target').textContent = `Target: ${formatRupiah(goal)}`;
            document.getElementById('campaign-progress-bar').style.width = `${progress}%`;
            document.getElementById('campaign-progress-text').textContent = `${progress}%`;
            
            document.getElementById('campaign-donors').textContent = `${donorsCount} Donatur`;
            document.getElementById('campaign-deadline').textContent = sisaHari;

            // Render Donations Ledger
            const donationsContainer = document.getElementById('donations-list');
            if (donations.length === 0) {
                donationsContainer.innerHTML = '<p class="text-on-surface-variant font-label-md">Belum ada donasi.</p>';
            } else {
                donationsContainer.innerHTML = '';
                donations.slice().reverse().forEach(d => {
                    donationsContainer.innerHTML += `
                        <div class="flex justify-between items-center p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                            <div>
                                <p class="font-label-md text-label-md font-semibold text-on-surface">${d.donor_name || 'Anonim'}</p>
                                <p class="font-label-sm text-label-sm text-outline">${formatDate(d.created_at)}</p>
                            </div>
                            <span class="font-label-md text-label-md font-bold text-green-700">+ ${formatRupiah(parseFloat(d.amount))}</span>
                        </div>
                    `;
                });
            }

            // Render Disbursements Ledger
            const disbursementsContainer = document.getElementById('disbursements-list');
            if (disbursements.length === 0) {
                disbursementsContainer.innerHTML = '<p class="text-on-surface-variant font-label-md">Belum ada pencairan dana.</p>';
            } else {
                disbursementsContainer.innerHTML = '';
                disbursements.slice().reverse().forEach(d => {
                    disbursementsContainer.innerHTML += `
                        <div class="flex justify-between items-start p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                            <div>
                                <p class="font-label-md text-label-md font-semibold text-on-surface">${d.description}</p>
                                <p class="font-label-sm text-label-sm text-outline">${formatDate(d.created_at)}</p>
                            </div>
                            <span class="font-label-md text-label-md font-bold text-red-700 shrink-0 ml-4">- ${formatRupiah(parseFloat(d.amount))}</span>
                        </div>
                    `;
                });
            }
        })
        .catch(err => {
            console.error("Error loading campaign data:", err);
            alert("Gagal memuat data kampanye.");
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

        // Auth-aware Navbar
        const token = localStorage.getItem('jwt_token');
        if (token) {
            axios.get('/api/profile', { headers: { Authorization: `Bearer ${token}` } })
                .then(res => {
                    const user = res.data.user;
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