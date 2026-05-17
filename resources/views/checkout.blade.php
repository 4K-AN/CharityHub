<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Donasi - CharityHub</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
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
                        "error": "#ba1a1a",
                        background: "#f9f9ff",
                    }
                }
            }
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .payment-method {
            transition: all 0.3s ease;
        }
        .payment-method.active {
            background-color: #0077b6;
            color: white;
            border-color: #0077b6;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-[family-name:Inter] antialiased">

<!-- Top Navigation -->
<nav class="bg-surface/80 backdrop-blur-md border-b border-outline-variant/20 sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 md:px-8 h-16 flex items-center justify-between">
        <div class="text-xl font-bold text-primary">CharityHub</div>
        <button class="text-on-surface-variant hover:text-primary transition-colors">
            <span class="material-symbols-outlined">close</span>
        </button>
    </div>
</nav>

<main class="max-w-6xl mx-auto px-4 md:px-8 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Column: Form -->
        <div class="lg:col-span-2">
            <!-- Progress Steps -->
            <div class="mb-12">
                <div class="flex items-center justify-between">
                    <div class="flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-primary text-on-primary flex items-center justify-center font-bold">1</div>
                        <p class="text-sm mt-2 text-on-surface-variant">Donasi</p>
                    </div>
                    <div class="flex-1 h-1 bg-primary mx-4"></div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-bold">2</div>
                        <p class="text-sm mt-2 text-on-surface-variant">Pembayaran</p>
                    </div>
                    <div class="flex-1 h-1 bg-outline-variant mx-4"></div>
                    <div class="flex flex-col items-center">
                        <div class="w-10 h-10 rounded-full bg-outline-variant text-on-surface-variant flex items-center justify-center font-bold">3</div>
                        <p class="text-sm mt-2 text-on-surface-variant">Selesai</p>
                    </div>
                </div>
            </div>

            <!-- Donation Amount Section -->
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 md:p-8 mb-6">
                <h2 class="text-2xl font-bold text-on-surface mb-6">Pilih Jumlah Donasi</h2>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                    <button class="preset-amount p-4 rounded-xl border-2 border-outline-variant hover:border-primary hover:bg-primary-container/10 transition-all" data-amount="50000">
                        <p class="font-bold text-on-surface">Rp 50K</p>
                        <p class="text-xs text-on-surface-variant">Paket Murah Hati</p>
                    </button>
                    <button class="preset-amount p-4 rounded-xl border-2 border-outline-variant hover:border-primary hover:bg-primary-container/10 transition-all" data-amount="100000">
                        <p class="font-bold text-on-surface">Rp 100K</p>
                        <p class="text-xs text-on-surface-variant">Paket Baik Hati</p>
                    </button>
                    <button class="preset-amount p-4 rounded-xl border-2 border-outline-variant hover:border-primary hover:bg-primary-container/10 transition-all" data-amount="250000">
                        <p class="font-bold text-on-surface">Rp 250K</p>
                        <p class="text-xs text-on-surface-variant">Paket Dermawan</p>
                    </button>
                    <button class="preset-amount p-4 rounded-xl border-2 border-outline-variant hover:border-primary hover:bg-primary-container/10 transition-all" data-amount="500000">
                        <p class="font-bold text-on-surface">Rp 500K</p>
                        <p class="text-xs text-on-surface-variant">Paket Mulia</p>
                    </button>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-semibold text-on-surface mb-2">Jumlah Custom</label>
                    <div class="relative">
                        <span class="absolute left-4 top-3 text-on-surface-variant">Rp</span>
                        <input type="number" id="customAmount" placeholder="Masukkan jumlah donasi" class="w-full pl-12 pr-4 py-3 rounded-xl border-2 border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all">
                    </div>
                </div>

                <div class="bg-primary-container/20 rounded-xl p-4 border border-primary/20 mb-6">
                    <p class="text-sm text-on-surface-variant mb-1">Total Donasi Anda</p>
                    <p class="text-3xl font-bold text-primary" id="totalDisplay">Rp 0</p>
                </div>

                <label class="flex items-start gap-3 p-4 rounded-xl border-2 border-outline-variant hover:border-primary transition-colors cursor-pointer">
                    <input type="checkbox" id="anonymous" class="mt-1">
                    <div>
                        <p class="font-semibold text-on-surface">Donasi Anonim</p>
                        <p class="text-xs text-on-surface-variant">Nama Anda tidak akan ditampilkan di halaman donasi publik</p>
                    </div>
                </label>
            </div>

            <!-- Payment Method Section -->
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 md:p-8 mb-6">
                <h2 class="text-2xl font-bold text-on-surface mb-6">Metode Pembayaran</h2>
                
                <div class="space-y-3">
                    <label class="payment-method border-2 border-outline-variant rounded-xl p-4 cursor-pointer hover:border-primary transition-all">
                        <input type="radio" name="payment" value="bank_transfer" class="mr-3">
                        <span class="font-semibold text-on-surface">
                            <span class="material-symbols-outlined text-[20px] align-middle mr-2">account_balance</span>
                            Transfer Bank
                        </span>
                        <p class="text-xs text-on-surface-variant mt-2 ml-7">Transfer langsung ke rekening CharityHub yang terverifikasi</p>
                    </label>

                    <label class="payment-method border-2 border-outline-variant rounded-xl p-4 cursor-pointer hover:border-primary transition-all">
                        <input type="radio" name="payment" value="ewallet" class="mr-3">
                        <span class="font-semibold text-on-surface">
                            <span class="material-symbols-outlined text-[20px] align-middle mr-2">phone_in_talk</span>
                            E-Wallet (GCash, Dana, OVO, LinkAja)
                        </span>
                        <p class="text-xs text-on-surface-variant mt-2 ml-7">Pembayaran instan melalui aplikasi e-wallet Anda</p>
                    </label>

                    <label class="payment-method border-2 border-outline-variant rounded-xl p-4 cursor-pointer hover:border-primary transition-all">
                        <input type="radio" name="payment" value="credit_card" class="mr-3">
                        <span class="font-semibold text-on-surface">
                            <span class="material-symbols-outlined text-[20px] align-middle mr-2">credit_card</span>
                            Kartu Kredit / Debit
                        </span>
                        <p class="text-xs text-on-surface-variant mt-2 ml-7">Pembayaran aman dengan enkripsi SSL</p>
                    </label>
                </div>
            </div>

            <!-- Donor Information -->
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 md:p-8">
                <h2 class="text-2xl font-bold text-on-surface mb-6">Data Diri Penyumbang</h2>
                
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-semibold text-on-surface mb-2">Nama Lengkap</label>
                        <input type="text" id="donorName" placeholder="Masukkan nama lengkap Anda" class="w-full px-4 py-3 rounded-xl border-2 border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-on-surface mb-2">Email</label>
                        <input type="email" id="donorEmail" placeholder="email@contoh.com" class="w-full px-4 py-3 rounded-xl border-2 border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-on-surface mb-2">Nomor Telepon (Opsional)</label>
                        <input type="tel" id="donorPhone" placeholder="+62 812 3456 7890" class="w-full px-4 py-3 rounded-xl border-2 border-outline-variant focus:border-primary focus:ring-2 focus:ring-primary/30 transition-all">
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Summary -->
        <div class="lg:col-span-1">
            <div class="bg-surface rounded-2xl border border-outline-variant/30 p-6 md:p-8 sticky top-24">
                <h2 class="text-xl font-bold text-on-surface mb-6">Ringkasan</h2>

                <!-- Campaign Info (dynamic) -->
                <div class="pb-6 border-b border-outline-variant/20" id="campaignInfoContainer">
                    <div class="aspect-video rounded-xl overflow-hidden bg-surface-container-low mb-3">
                        <img id="campaignImage" alt="Campaign" class="w-full h-full object-cover" src=""/>
                    </div>
                    <h3 id="campaignTitle" class="font-semibold text-on-surface mb-2">Memuat Kampanye...</h3>
                    <p id="campaignIdDisplay" class="text-xs text-on-surface-variant">ID Kampanye: --</p>
                </div>

                <!-- Cost Breakdown -->
                <div class="space-y-3 py-6 border-b border-outline-variant/20">
                    <div class="flex justify-between text-sm">
                        <span class="text-on-surface-variant">Jumlah Donasi</span>
                        <span class="font-semibold text-on-surface" id="summaryAmount">Rp 0</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-on-surface-variant">Biaya Transaksi</span>
                        <span class="font-semibold text-on-surface" id="feesAmount">Rp 0</span>
                    </div>
                    <div class="flex justify-between text-sm">
                        <span class="text-on-surface-variant">Donasi Tambahan (Opsional)</span>
                        <span class="font-semibold text-on-surface">Rp 0</span>
                    </div>
                </div>

                <!-- Total -->
                <div class="py-4 mb-6">
                    <div class="flex justify-between items-baseline">
                        <span class="text-on-surface-variant">Total</span>
                        <span class="text-3xl font-bold text-primary" id="summaryTotal">Rp 0</span>
                    </div>
                </div>

                <!-- Trust Badges -->
                <div class="space-y-3 mb-6 p-4 bg-primary-container/10 rounded-xl border border-primary/20">
                    <div class="flex items-center gap-2 text-xs">
                        <span class="material-symbols-outlined text-primary text-[20px]">verified</span>
                        <span class="text-on-surface-variant">Terverifikasi & Aman</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs">
                        <span class="material-symbols-outlined text-primary text-[20px]">lock</span>
                        <span class="text-on-surface-variant">Enkripsi SSL 256-bit</span>
                    </div>
                    <div class="flex items-center gap-2 text-xs">
                        <span class="material-symbols-outlined text-primary text-[20px]">visibility</span>
                        <span class="text-on-surface-variant">Donasi Real-Time Tracking</span>
                    </div>
                </div>

                <!-- CTA Button -->
                <button id="submitBtn" class="w-full bg-primary text-on-primary font-semibold py-4 rounded-xl hover:bg-primary-container hover:text-on-primary-container transition-all duration-300 shadow-md hover:shadow-lg transform hover:scale-105 active:scale-95 flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">favorite</span>
                    Lanjut ke Pembayaran
                </button>

                <p class="text-center text-xs text-on-surface-variant mt-4">Dengan melanjutkan, Anda setuju dengan Syarat & Ketentuan</p>
            </div>
        </div>
    </div>
</main>

<script>
    const axios_instance = axios.create({
        baseURL: '/api'
    });

    axios_instance.interceptors.request.use(config => {
        const token = localStorage.getItem('jwt_token');
        if (token) config.headers.Authorization = `Bearer ${token}`;
        return config;
    });

    const campaignId = window.location.pathname.split('/')[2];
    let donationAmount = 0;

    // Load campaign details & user profile
    async function initCheckout() {
        try {
            const token = localStorage.getItem('jwt_token');
            if (!token) {
                alert('Anda harus login sebagai Donatur untuk berdonasi.');
                window.location.href = '/login';
                return;
            }

            // Fill donor name if logged in
            const userName = localStorage.getItem('user_name');
            if (userName) document.getElementById('donorName').value = userName;

            // Fetch campaign
            const res = await axios.get(`/api/campaigns/${campaignId}`);
            const campaign = res.data.campaign;
            
            document.getElementById('campaignTitle').textContent = campaign.title;
            document.getElementById('campaignIdDisplay').textContent = 'ID Kampanye: #CH-' + campaign.id.toString().padStart(4, '0');
            
            const imgEl = document.getElementById('campaignImage');
            if (campaign.image) {
                imgEl.src = '/storage/' + campaign.image;
            } else {
                imgEl.src = 'https://lh3.googleusercontent.com/aida-public/AB6AXuCZ7D2aluOYR7DozkSkS5Bybjo-6Xz-W1FQ209BJ7V1-rpf-lkkNKne2Gq2VgpokS3pFAfbK__bjIq6XOPBrYlzCwVQLdW3Jx4usKu2egXKpspEwqlSWBMO8lbxCcohONl8dWCqkcDkKv3Rt1gLYLmC7Wbbi8fAGZz-7jxCnC8k05PiFMp9Wtpx95buK8q9im-VvGFSUYBt1GFanNzRnk0s0AH-tjzHW67_7Z0dOQhhQoitklJ8dLvDQxX1iJH9z1nWT-MEf6hbaAg';
            }
        } catch (error) {
            alert('Gagal memuat detail kampanye.');
            window.location.href = '/';
        }
    }

    // Preset buttons
    document.querySelectorAll('.preset-amount').forEach(btn => {
        btn.addEventListener('click', () => {
            document.querySelectorAll('.preset-amount').forEach(b => b.classList.remove('border-primary', 'bg-primary-container/10'));
            btn.classList.add('border-primary', 'bg-primary-container/10');
            donationAmount = parseInt(btn.dataset.amount);
            document.getElementById('customAmount').value = '';
            updateTotal();
        });
    });

    // Custom amount
    document.getElementById('customAmount').addEventListener('input', (e) => {
        document.querySelectorAll('.preset-amount').forEach(b => b.classList.remove('border-primary', 'bg-primary-container/10'));
        donationAmount = parseInt(e.target.value) || 0;
        updateTotal();
    });

    function updateTotal() {
        const fees = Math.ceil(donationAmount * 0.029); // ~3% fee
        const total = donationAmount + fees;
        
        document.getElementById('totalDisplay').textContent = formatCurrency(donationAmount);
        document.getElementById('summaryAmount').textContent = formatCurrency(donationAmount);
        document.getElementById('feesAmount').textContent = formatCurrency(fees);
        document.getElementById('summaryTotal').textContent = formatCurrency(total);
    }

    function formatCurrency(num) {
        return 'Rp ' + num.toLocaleString('id-ID');
    }

    // Submit
    document.getElementById('submitBtn').addEventListener('click', async () => {
        const donorName = document.getElementById('donorName').value;
        const anonymous = document.getElementById('anonymous').checked;

        if (donationAmount < 10000) {
            alert('Minimal donasi adalah Rp 10.000');
            return;
        }
        if (!donorName) {
            alert('Silakan lengkapi nama diri');
            return;
        }

        const finalName = anonymous ? 'Hamba Allah' : donorName;

        // Visual loading
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[20px]">progress_activity</span> Memproses...';

        try {
            await axios_instance.post(`/campaigns/${campaignId}/donations`, {
                amount: donationAmount,
                donor_name: finalName,
                message: 'Donasi melalui form web'
            });
            alert('Donasi berhasil! Terima kasih atas kebaikan Anda.');
            window.location.href = `/campaigns/${campaignId}`;
        } catch (error) {
            const msg = error.response?.data?.message || error.message;
            alert('Error: ' + msg);
            btn.disabled = false;
            btn.innerHTML = '<span class="material-symbols-outlined text-[20px]">favorite</span> Lanjut ke Pembayaran';
        }
    });

    // Initialize
    initCheckout();
    updateTotal();
</script>

</body>
</html>
