<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Profil Saya - CharityHub</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
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

<!-- Navigation -->
<nav class="bg-surface/80 backdrop-blur-md text-primary font-label-md text-label-md top-0 sticky z-50 shadow-sm">
    <div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-20 max-w-container-max-width mx-auto">
        <a href="/" class="font-display-lg text-headline-md font-bold text-primary hover:opacity-80 transition-opacity">
            CharityHub
        </a>
        <div class="hidden md:flex items-center gap-gutter">
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="/">Home</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="/#campaigns">Campaigns</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="/about">About</a>
            <a class="text-on-surface-variant hover:text-primary transition-colors duration-200" href="/contact">Contact</a>
        </div>
        <div class="flex items-center gap-3">
            <button id="logoutBtn" class="hidden text-on-surface-variant hover:text-error transition-colors p-2 rounded-lg hover:bg-error/10" title="Logout">
                <span class="material-symbols-outlined">logout</span>
            </button>
            <a href="/" class="inline-flex items-center gap-2 bg-primary text-on-primary font-label-md px-4 py-2 rounded-lg hover:opacity-90 transition-opacity">
                <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Kembali
            </a>
        </div>
    </div>
</nav>

<!-- Loading State -->
<div id="loading-state" class="flex items-center justify-center py-32">
    <div class="text-center">
        <span class="material-symbols-outlined text-[48px] text-primary animate-spin block mb-4">progress_activity</span>
        <p class="font-body-md text-on-surface-variant">Memuat profil...</p>
    </div>
</div>

<!-- Not Logged In State -->
<div id="not-logged-in" class="hidden flex items-center justify-center py-32">
    <div class="text-center max-w-md px-4">
        <span class="material-symbols-outlined text-[64px] text-outline mb-4 block">lock</span>
        <h2 class="font-headline-lg text-headline-lg text-on-surface mb-2">Belum Login</h2>
        <p class="font-body-md text-on-surface-variant mb-6">Silakan login terlebih dahulu untuk melihat profil Anda.</p>
        <a href="/login" class="inline-block bg-primary text-on-primary font-label-md px-8 py-3 rounded-xl hover:opacity-90 transition-opacity">Login Sekarang</a>
    </div>
</div>

<!-- Main Content (hidden until data loads) -->
<main id="profile-content" class="hidden max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop py-8">
    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-primary/10 via-secondary-container/5 to-primary/10 rounded-3xl border border-outline-variant/30 p-8 md:p-12 mb-8">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-8">
            <!-- Avatar -->
            <div class="relative">
                <div id="user-avatar" class="w-24 h-24 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center text-4xl font-bold border-4 border-primary shadow-lg">
                    --
                </div>
            </div>

            <!-- User Info -->
            <div class="flex-1">
                <h1 id="user-name" class="text-3xl font-bold text-on-surface mb-2">Memuat...</h1>
                <p id="user-email" class="text-on-surface-variant mb-4">...</p>
                <div class="flex flex-wrap gap-3">
                    <span id="user-role-badge" class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-container text-on-surface rounded-full text-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">favorite</span>
                        <span id="user-role-text">Donatur</span>
                    </span>
                    <span id="user-joined" class="inline-flex items-center gap-2 px-4 py-2 bg-surface border border-outline-variant/30 text-on-surface-variant rounded-full text-sm">
                        <span class="material-symbols-outlined text-[16px]">calendar_today</span>
                        <span id="user-joined-text">...</span>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
            <p class="text-on-surface-variant text-sm mb-2">Total Donasi</p>
            <p id="stat-total" class="text-3xl font-bold text-primary">Rp 0</p>
            <p class="text-xs text-on-surface-variant mt-2 flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px] text-primary">volunteer_activism</span>
                Kontribusi Anda
            </p>
        </div>

        <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
            <p class="text-on-surface-variant text-sm mb-2">Kampanye Didukung</p>
            <p id="stat-campaigns" class="text-3xl font-bold text-secondary">0</p>
            <p class="text-xs text-on-surface-variant mt-2">Di berbagai kampanye</p>
        </div>

        <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
            <p class="text-on-surface-variant text-sm mb-2">Jumlah Donasi</p>
            <p id="stat-count" class="text-3xl font-bold text-tertiary">0</p>
            <p class="text-xs text-on-surface-variant mt-2">Total transaksi donasi</p>
        </div>
    </div>

    <!-- Two Column Layout -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column: Donation History -->
        <div class="lg:col-span-2">
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 md:p-8 shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-2xl font-bold text-on-surface flex items-center gap-2">
                        <span class="material-symbols-outlined">history</span>
                        Riwayat Donasi
                    </h2>
                </div>

                <div id="donation-list" class="space-y-4">
                    <!-- Filled dynamically -->
                </div>

                <div id="no-donations" class="hidden text-center py-12">
                    <span class="material-symbols-outlined text-[48px] text-outline block mb-3">volunteer_activism</span>
                    <p class="font-body-lg text-on-surface-variant">Belum ada riwayat donasi</p>
                    <a href="/" class="inline-block mt-4 bg-primary text-on-primary font-label-md px-6 py-3 rounded-xl hover:opacity-90 transition-opacity">Mulai Berdonasi</a>
                </div>
            </div>
        </div>

        <!-- Right Column: Quick Actions -->
        <div class="space-y-6">
            <!-- Help Card -->
            <div class="bg-primary/10 rounded-2xl border border-primary/20 p-6">
                <h3 class="text-lg font-bold text-on-surface mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">help</span>
                    Butuh Bantuan?
                </h3>
                <p class="text-sm text-on-surface-variant mb-4">Hubungi tim support kami untuk pertanyaan atau keluhan.</p>
                <a href="/contact" class="block w-full py-2 bg-primary text-on-primary rounded-lg hover:bg-primary-container hover:text-on-primary-container transition-colors font-semibold text-sm text-center">
                    Hubungi Support
                </a>
            </div>

            <!-- Logout Card -->
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
                <h3 class="text-lg font-bold text-on-surface mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">settings</span>
                    Akun
                </h3>
                <button id="logoutBtnMain" class="w-full py-3 border-2 border-error text-error rounded-xl hover:bg-error/10 transition-colors font-semibold flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                    Keluar dari Akun
                </button>
            </div>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const token = localStorage.getItem('jwt_token');

        if (!token) {
            document.getElementById('loading-state').classList.add('hidden');
            document.getElementById('not-logged-in').classList.remove('hidden');
            return;
        }

        const headers = { Authorization: `Bearer ${token}` };

        // Fetch user profile
        axios.get('/api/profile', { headers })
            .then(res => {
                const user = res.data.user;

                // Fill profile data
                const initials = user.name.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();
                document.getElementById('user-avatar').textContent = initials;
                document.getElementById('user-name').textContent = user.name;
                document.getElementById('user-email').textContent = user.email;
                document.getElementById('user-role-text').textContent = user.role;

                // Joined date
                const joinDate = new Date(user.created_at);
                const months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                document.getElementById('user-joined-text').textContent = `Bergabung ${months[joinDate.getMonth()]} ${joinDate.getFullYear()}`;

                document.title = `${user.name} - Profil | CharityHub`;

                // Show logout button
                document.getElementById('logoutBtn').classList.remove('hidden');

                // Now fetch donation history from all campaigns
                return axios.get('/api/campaigns', { headers });
            })
            .then(res => {
                const campaigns = res.data.campaigns || [];
                const userId = JSON.parse(localStorage.getItem('user') || '{}').id;
                let allDonations = [];
                let uniqueCampaigns = new Set();
                let totalAmount = 0;

                // Collect donations belonging to this user
                campaigns.forEach(campaign => {
                    if (campaign.donations) {
                        campaign.donations.forEach(d => {
                            if (d.user_id == userId) {
                                allDonations.push({
                                    ...d,
                                    campaign_title: campaign.title,
                                    campaign_id: campaign.id,
                                    campaign_status: campaign.status
                                });
                                uniqueCampaigns.add(campaign.id);
                                totalAmount += parseFloat(d.amount);
                            }
                        });
                    }
                });

                // Sort by newest
                allDonations.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));

                // Fill stats
                document.getElementById('stat-total').textContent = formatCurrency(totalAmount);
                document.getElementById('stat-campaigns').textContent = uniqueCampaigns.size;
                document.getElementById('stat-count').textContent = allDonations.length;

                // Fill donation list
                const donationList = document.getElementById('donation-list');
                if (allDonations.length === 0) {
                    document.getElementById('no-donations').classList.remove('hidden');
                } else {
                    allDonations.forEach(d => {
                        const date = new Date(d.created_at);
                        const dateStr = `${date.getDate()} ${['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'][date.getMonth()]} ${date.getFullYear()}`;
                        const statusColor = d.campaign_status === 'Aktif' ? 'bg-green-100 text-green-700' : d.campaign_status === 'Selesai' ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-700';

                        donationList.innerHTML += `
                        <a href="/campaigns/${d.campaign_id}" class="block border border-outline-variant/20 rounded-xl p-4 hover:border-primary/50 hover:shadow-md transition-all">
                            <div class="flex items-start justify-between">
                                <div class="flex gap-4 flex-1">
                                    <div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center flex-shrink-0">
                                        <span class="material-symbols-outlined">volunteer_activism</span>
                                    </div>
                                    <div class="flex-1">
                                        <h3 class="font-semibold text-on-surface">${d.campaign_title}</h3>
                                        <p class="text-sm text-on-surface-variant">${dateStr}</p>
                                        ${d.message ? `<p class="text-sm text-on-surface-variant mt-1 italic">"${d.message}"</p>` : ''}
                                        <div class="mt-2">
                                            <span class="inline-block px-2 py-1 ${statusColor} text-xs rounded-full font-semibold">${d.campaign_status}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="text-lg font-bold text-primary">${formatCurrency(d.amount)}</p>
                                </div>
                            </div>
                        </a>`;
                    });
                }

                // Show content, hide loading
                document.getElementById('loading-state').classList.add('hidden');
                document.getElementById('profile-content').classList.remove('hidden');
            })
            .catch(err => {
                console.error('Profile error:', err);
                localStorage.removeItem('jwt_token');
                localStorage.removeItem('user_name');
                localStorage.removeItem('user_role');
                document.getElementById('loading-state').classList.add('hidden');
                document.getElementById('not-logged-in').classList.remove('hidden');
            });

        // Logout handlers
        function doLogout() {
            axios.post('/api/logout', {}, { headers })
                .finally(() => {
                    localStorage.removeItem('jwt_token');
                    localStorage.removeItem('user');
                    localStorage.removeItem('user_name');
                    localStorage.removeItem('user_role');
                    window.location.href = '/';
                });
        }

        document.getElementById('logoutBtn').addEventListener('click', doLogout);
        document.getElementById('logoutBtnMain').addEventListener('click', doLogout);
    });

    function formatCurrency(amount) {
        const num = parseFloat(amount);
        if (num >= 1000000000) return `Rp ${(num / 1000000000).toFixed(1)} M`;
        if (num >= 1000000) return `Rp ${(num / 1000000).toFixed(1)} Jt`;
        if (num >= 1000) return `Rp ${(num / 1000).toFixed(0)} K`;
        return `Rp ${num.toLocaleString('id-ID')}`;
    }
</script>
</body>
</html>