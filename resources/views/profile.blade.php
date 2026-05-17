<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Profil Saya - CharityHub</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        primary: "#005d90",
                        "on-primary": "#ffffff",
                        "primary-container": "#0077b6",
                        "on-primary-container": "#f3f7ff",
                        "secondary": "#00677d",
                        "on-secondary": "#ffffff",
                        "secondary-container": "#50d9fe",
                        surface: "#f9f9ff",
                        "surface-container-lowest": "#ffffff",
                        "on-surface": "#111c2d",
                        "on-surface-variant": "#404850",
                        "surface-variant": "#d8e3fb",
                        "outline-variant": "#bfc7d1",
                        background: "#f9f9ff",
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-background text-on-surface font-[family-name:Inter] antialiased">

<!-- Navigation -->
<nav class="bg-surface/80 backdrop-blur-md border-b border-outline-variant/20 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
        <div class="text-xl font-bold text-primary">CharityHub</div>
        <div class="flex items-center gap-4">
            <button class="text-on-surface-variant hover:text-primary transition-colors hidden md:block">
                <span class="material-symbols-outlined">notifications</span>
            </button>
            <button class="text-on-surface-variant hover:text-primary transition-colors">
                <span class="material-symbols-outlined">logout</span>
            </button>
        </div>
    </div>
</nav>

<main class="max-w-6xl mx-auto px-4 md:px-8 py-8">
    <!-- Profile Header -->
    <div class="bg-gradient-to-r from-primary/10 via-secondary-container/5 to-primary/10 rounded-3xl border border-outline-variant/30 p-8 md:p-12 mb-8">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-6 md:gap-8">
            <!-- Avatar -->
            <div class="relative">
                <div class="w-24 h-24 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center text-4xl font-bold border-4 border-primary shadow-lg">
                    BS
                </div>
                <button class="absolute bottom-0 right-0 bg-primary text-on-primary p-2 rounded-full shadow-md hover:bg-primary-container transition-colors">
                    <span class="material-symbols-outlined text-[20px]">camera_alt</span>
                </button>
            </div>

            <!-- User Info -->
            <div class="flex-1">
                <h1 class="text-3xl font-bold text-on-surface mb-2">Budi Santoso</h1>
                <p class="text-on-surface-variant mb-4">budi.santoso@email.com • Bergabung Januari 2024</p>
                <div class="flex flex-wrap gap-3">
                    <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary-container text-on-primary-container rounded-full text-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">verified</span>
                        Email Terverifikasi
                    </span>
                    <span class="inline-flex items-center gap-2 px-4 py-2 bg-secondary-container text-on-surface rounded-full text-sm font-semibold">
                        <span class="material-symbols-outlined text-[16px]">favorite</span>
                        Donatur Aktif
                    </span>
                </div>
            </div>

            <!-- Edit Profile Button -->
            <button class="w-full md:w-auto px-6 py-3 bg-primary text-on-primary rounded-xl hover:bg-primary-container hover:text-on-primary-container transition-all font-semibold shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                <span class="material-symbols-outlined">edit</span>
                Edit Profil
            </button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
            <p class="text-on-surface-variant text-sm mb-2">Total Donasi</p>
            <p class="text-3xl font-bold text-primary">Rp 5.25 M</p>
            <p class="text-xs text-on-surface-variant mt-2 flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px] text-green-600">trending_up</span>
                +12% bulan ini
            </p>
        </div>

        <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
            <p class="text-on-surface-variant text-sm mb-2">Kampanye Didukung</p>
            <p class="text-3xl font-bold text-secondary">24</p>
            <p class="text-xs text-on-surface-variant mt-2">Di berbagai kategori</p>
        </div>

        <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
            <p class="text-on-surface-variant text-sm mb-2">Dampak Terukur</p>
            <p class="text-3xl font-bold text-tertiary">98</p>
            <p class="text-xs text-on-surface-variant mt-2">Anak terbantu dengan pendidikan</p>
        </div>

        <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
            <p class="text-on-surface-variant text-sm mb-2">Ranking Donatur</p>
            <p class="text-3xl font-bold text-orange-500">#47</p>
            <p class="text-xs text-on-surface-variant mt-2">Top 1% Donatur Terbaik</p>
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
                    <button class="text-primary hover:text-primary-container transition-colors flex items-center gap-1 text-sm font-semibold">
                        <span class="material-symbols-outlined text-[18px]">download</span>
                        Export
                    </button>
                </div>

                <div class="space-y-4">
                    <!-- Donation Item 1 -->
                    <div class="border border-outline-variant/20 rounded-xl p-4 hover:border-primary/50 hover:shadow-md transition-all">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4 flex-1">
                                <div class="w-12 h-12 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined">school</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-on-surface">Renovasi Sekolah Pelosok</h3>
                                    <p class="text-sm text-on-surface-variant">5 Agustus 2024</p>
                                    <div class="mt-2 flex gap-2">
                                        <span class="inline-block px-2 py-1 bg-primary-container/30 text-primary text-xs rounded-full font-semibold">Pendidikan</span>
                                        <span class="inline-block px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full font-semibold">✓ Selesai</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-primary">Rp 500 K</p>
                                <p class="text-xs text-on-surface-variant">Efektif 5 Agustus</p>
                            </div>
                        </div>
                    </div>

                    <!-- Donation Item 2 -->
                    <div class="border border-outline-variant/20 rounded-xl p-4 hover:border-primary/50 hover:shadow-md transition-all">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4 flex-1">
                                <div class="w-12 h-12 rounded-full bg-red-100 text-red-600 flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined">crisis_alert</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-on-surface">Darurat Gempa Cianjur</h3>
                                    <p class="text-sm text-on-surface-variant">2 Agustus 2024</p>
                                    <div class="mt-2 flex gap-2">
                                        <span class="inline-block px-2 py-1 bg-red-100 text-red-700 text-xs rounded-full font-semibold">Bencana</span>
                                        <span class="inline-block px-2 py-1 bg-yellow-100 text-yellow-700 text-xs rounded-full font-semibold">⏳ Sedang Digunakan</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-primary">Rp 2 M</p>
                                <p class="text-xs text-on-surface-variant">Efektif 2 Agustus</p>
                            </div>
                        </div>
                    </div>

                    <!-- Donation Item 3 -->
                    <div class="border border-outline-variant/20 rounded-xl p-4 hover:border-primary/50 hover:shadow-md transition-all">
                        <div class="flex items-start justify-between">
                            <div class="flex gap-4 flex-1">
                                <div class="w-12 h-12 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center flex-shrink-0">
                                    <span class="material-symbols-outlined">favorite</span>
                                </div>
                                <div class="flex-1">
                                    <h3 class="font-semibold text-on-surface">Operasi Jantung Anak</h3>
                                    <p class="text-sm text-on-surface-variant">15 Juli 2024</p>
                                    <div class="mt-2 flex gap-2">
                                        <span class="inline-block px-2 py-1 bg-blue-100 text-blue-700 text-xs rounded-full font-semibold">Medis</span>
                                        <span class="inline-block px-2 py-1 bg-green-100 text-green-700 text-xs rounded-full font-semibold">✓ Selesai</span>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-lg font-bold text-primary">Rp 2.75 M</p>
                                <p class="text-xs text-on-surface-variant">Efektif 15 Juli</p>
                            </div>
                        </div>
                    </div>
                </div>

                <button class="w-full mt-6 py-3 border-2 border-primary text-primary rounded-xl hover:bg-primary/5 transition-colors font-semibold">
                    Lihat Semua Riwayat (24 donasi)
                </button>
            </div>
        </div>

        <!-- Right Column: Quick Actions & Settings -->
        <div class="space-y-6">
            <!-- Preferences Card -->
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
                <h3 class="text-lg font-bold text-on-surface mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">settings</span>
                    Pengaturan
                </h3>

                <div class="space-y-4">
                    <label class="flex items-center gap-3 cursor-pointer p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                        <input type="checkbox" checked class="w-5 h-5 rounded">
                        <span class="text-sm text-on-surface-variant">Notifikasi Email</span>
                    </label>

                    <label class="flex items-center gap-3 cursor-pointer p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                        <input type="checkbox" checked class="w-5 h-5 rounded">
                        <span class="text-sm text-on-surface-variant">Update Kampanye</span>
                    </label>

                    <label class="flex items-center gap-3 cursor-pointer p-3 hover:bg-surface-container-low rounded-lg transition-colors">
                        <input type="checkbox" class="w-5 h-5 rounded">
                        <span class="text-sm text-on-surface-variant">Marketing Email</span>
                    </label>
                </div>

                <button class="w-full mt-4 py-2 text-primary hover:bg-primary/5 rounded-lg transition-colors font-semibold text-sm">
                    Kelola Notifikasi
                </button>
            </div>

            <!-- Security Card -->
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 shadow-sm">
                <h3 class="text-lg font-bold text-on-surface mb-4 flex items-center gap-2">
                    <span class="material-symbols-outlined">security</span>
                    Keamanan
                </h3>

                <div class="space-y-3 mb-4">
                    <div class="flex items-center justify-between p-3 bg-green-50 border border-green-200 rounded-lg">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-green-600">verified</span>
                            <span class="text-sm text-on-surface-variant">Password Kuat</span>
                        </div>
                    </div>

                    <div class="flex items-center justify-between p-3 bg-green-50 border border-green-200 rounded-lg">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-green-600">verified</span>
                            <span class="text-sm text-on-surface-variant">2FA Aktif</span>
                        </div>
                    </div>
                </div>

                <button class="w-full py-2 text-primary hover:bg-primary/5 rounded-lg transition-colors font-semibold text-sm">
                    Ubah Password
                </button>
            </div>

            <!-- Help Card -->
            <div class="bg-primary/10 rounded-2xl border border-primary/20 p-6">
                <h3 class="text-lg font-bold text-on-surface mb-2 flex items-center gap-2">
                    <span class="material-symbols-outlined text-primary">help</span>
                    Butuh Bantuan?
                </h3>
                <p class="text-sm text-on-surface-variant mb-4">Hubungi tim support kami untuk pertanyaan atau keluhan.</p>
                <button class="w-full py-2 bg-primary text-on-primary rounded-lg hover:bg-primary-container hover:text-on-primary-container transition-colors font-semibold text-sm">
                    Hubungi Support
                </button>
            </div>
        </div>
    </div>
</main>

</body>
</html>