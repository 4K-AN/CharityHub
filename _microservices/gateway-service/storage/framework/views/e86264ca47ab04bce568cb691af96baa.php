<!DOCTYPE html>
<html lang="id">
<head>
    <?php echo $__env->make('partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <title>Profil Saya — CharityHub</title>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">

<?php echo $__env->make('partials._navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>


<div id="loading-state" class="flex-1 flex items-center justify-center py-32">
    <div class="text-center animate-fade-up">
        <span class="material-symbols-outlined text-[48px] text-primary animate-spin block mb-4">progress_activity</span>
        <p class="text-body-md text-on-surface-variant">Memuat profil...</p>
    </div>
</div>


<div id="not-logged-in" class="hidden flex-1 flex items-center justify-center py-32">
    <div class="text-center max-w-md px-4 animate-fade-up">
        <div class="w-20 h-20 rounded-3xl bg-outline-variant/10 flex items-center justify-center mx-auto mb-6">
            <span class="material-symbols-outlined text-[40px] text-outline">lock</span>
        </div>
        <h2 class="text-headline-md text-on-surface font-bold mb-2">Belum Login</h2>
        <p class="text-body-md text-on-surface-variant mb-8">Silakan login terlebih dahulu untuk melihat profil Anda.</p>
        <a href="/login" class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-lg px-8 py-3.5 rounded-xl btn-press font-semibold shadow-glow-primary">
            <span class="material-symbols-outlined text-[20px]">login</span>
            Login Sekarang
        </a>
    </div>
</div>


<main id="profile-content" class="hidden flex-1 max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop py-10 w-full">
    
    <div class="relative rounded-3xl overflow-hidden mb-8 reveal">
        <div class="absolute inset-0 bg-gradient-to-br from-primary via-primary-dark to-inverse-surface"></div>
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/20 rounded-full blur-3xl"></div>
        </div>
        <div class="relative z-10 p-8 md:p-12">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-6">
                <div id="user-avatar" class="w-20 h-20 rounded-2xl bg-white/20 backdrop-blur-sm text-white flex items-center justify-center text-3xl font-bold border-2 border-white/30 shadow-lg">--</div>
                <div class="flex-1">
                    <h1 id="user-name" class="text-headline-lg text-white font-bold mb-1">Memuat...</h1>
                    <p id="user-email" class="text-body-md text-white/70 mb-3">...</p>
                    <div class="flex flex-wrap gap-2">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/15 backdrop-blur-sm text-white rounded-lg text-label-sm border border-white/20">
                            <span class="material-symbols-outlined text-[14px]">badge</span>
                            <span id="user-role-text">Donatur</span>
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-3 py-1.5 bg-white/15 backdrop-blur-sm text-white rounded-lg text-label-sm border border-white/20">
                            <span class="material-symbols-outlined text-[14px]">calendar_today</span>
                            <span id="user-joined-text">...</span>
                        </span>
                    </div>
                </div>
                <button id="logoutBtn" class="hidden inline-flex items-center gap-2 px-4 py-2.5 bg-white/15 hover:bg-white/25 text-white rounded-xl text-label-md border border-white/20 transition-all btn-press">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Keluar
                </button>
            </div>
        </div>
    </div>

    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
        <?php $__currentLoopData = [
            ['stat-total', 'Rp 0', 'Total Donasi', 'volunteer_activism', 'from-primary/10 to-primary/5', 'text-primary'],
            ['stat-campaigns', '0', 'Kampanye Didukung', 'campaign', 'from-secondary/10 to-secondary/5', 'text-secondary'],
            ['stat-count', '0', 'Jumlah Donasi', 'receipt_long', 'from-tertiary/10 to-tertiary/5', 'text-tertiary'],
        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$id, $default, $label, $icon, $bgGrad, $textColor]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/10 p-6 shadow-soft card-hover reveal">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-xl bg-gradient-to-br <?php echo e($bgGrad); ?> flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[24px] <?php echo e($textColor); ?>"><?php echo e($icon); ?></span>
                </div>
                <div>
                    <p class="text-label-sm text-on-surface-variant"><?php echo e($label); ?></p>
                    <p id="<?php echo e($id); ?>" class="text-headline-md <?php echo e($textColor); ?> font-bold"><?php echo e($default); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <div class="lg:col-span-2">
            <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/10 p-6 md:p-8 shadow-soft reveal">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[22px]">history</span>
                    </div>
                    <h2 class="text-headline-sm text-on-surface font-bold">Riwayat Donasi</h2>
                </div>

                <div id="donation-list" class="space-y-3"></div>

                <div id="no-donations" class="hidden text-center py-16">
                    <div class="w-16 h-16 rounded-2xl bg-outline-variant/10 flex items-center justify-center mx-auto mb-4">
                        <span class="material-symbols-outlined text-[32px] text-outline">volunteer_activism</span>
                    </div>
                    <p class="text-body-lg text-on-surface-variant font-medium mb-1">Belum ada riwayat donasi</p>
                    <p class="text-body-sm text-outline mb-6">Mulai berdonasi untuk melihat riwayat di sini</p>
                    <a href="/" class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-md px-6 py-3 rounded-xl btn-press font-semibold shadow-soft">
                        <span class="material-symbols-outlined text-[18px]">favorite</span>
                        Mulai Berdonasi
                    </a>
                </div>
            </div>
        </div>

        
        <div class="space-y-4">
            <div class="bg-gradient-to-br from-primary/8 to-secondary/5 rounded-2xl border border-primary/10 p-6 reveal">
                <div class="flex items-center gap-2.5 mb-3">
                    <span class="material-symbols-outlined text-primary text-[22px]">help</span>
                    <h3 class="text-title-md text-on-surface font-bold">Butuh Bantuan?</h3>
                </div>
                <p class="text-body-sm text-on-surface-variant mb-4 leading-relaxed">Hubungi tim support kami untuk pertanyaan atau keluhan.</p>
                <a href="/contact" class="block w-full py-2.5 bg-gradient-to-r from-primary to-primary-dark text-on-primary rounded-xl btn-press font-semibold text-label-md text-center shadow-soft">
                    Hubungi Support
                </a>
            </div>

            <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/10 p-6 shadow-soft reveal">
                <div class="flex items-center gap-2.5 mb-4">
                    <span class="material-symbols-outlined text-on-surface-variant text-[22px]">settings</span>
                    <h3 class="text-title-md text-on-surface font-bold">Akun</h3>
                </div>
                <button id="logoutBtnMain" class="w-full py-3 border-2 border-error/30 text-error rounded-xl hover:bg-error/5 transition-all btn-press font-semibold flex items-center justify-center gap-2 text-label-md">
                    <span class="material-symbols-outlined text-[18px]">logout</span>
                    Keluar dari Akun
                </button>
            </div>
        </div>
    </div>
</main>

<?php echo $__env->make('partials._footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const token = localStorage.getItem('jwt_token');

        if (!token) {
            document.getElementById('loading-state').classList.add('hidden');
            document.getElementById('not-logged-in').classList.remove('hidden');
            return;
        }

        const headers = { Authorization: `Bearer ${token}` };

        axios.get('/api/profile', { headers })
            .then(res => {
                const user = res.data.data.user;

                const initials = user.name.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();
                document.getElementById('user-avatar').textContent = initials;
                document.getElementById('user-name').textContent = user.name;
                document.getElementById('user-email').textContent = user.email;
                document.getElementById('user-role-text').textContent = user.role;

                const joinDate = new Date(user.created_at);
                const months = ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember'];
                document.getElementById('user-joined-text').textContent = `Bergabung ${months[joinDate.getMonth()]} ${joinDate.getFullYear()}`;

                document.title = `${user.name} - Profil | CharityHub`;
                document.getElementById('logoutBtn').classList.remove('hidden');

                return axios.get('/api/campaigns', { headers });
            })
            .then(res => {
                const campaigns = res.data.data.campaigns || [];
                const userId = JSON.parse(localStorage.getItem('user') || '{}').id;
                let allDonations = [];
                let uniqueCampaigns = new Set();
                let totalAmount = 0;

                campaigns.forEach(campaign => {
                    if (campaign.donations) {
                        campaign.donations.forEach(d => {
                            if (d.user_id == userId) {
                                allDonations.push({ ...d, campaign_title: campaign.title, campaign_id: campaign.id, campaign_status: campaign.status });
                                uniqueCampaigns.add(campaign.id);
                                totalAmount += parseFloat(d.amount);
                            }
                        });
                    }
                });

                allDonations.sort((a, b) => new Date(b.created_at) - new Date(a.created_at));

                document.getElementById('stat-total').textContent = formatCurrency(totalAmount);
                document.getElementById('stat-campaigns').textContent = uniqueCampaigns.size;
                document.getElementById('stat-count').textContent = allDonations.length;

                const donationList = document.getElementById('donation-list');
                if (allDonations.length === 0) {
                    document.getElementById('no-donations').classList.remove('hidden');
                } else {
                    allDonations.forEach(d => {
                        const date = new Date(d.created_at);
                        const dateStr = `${date.getDate()} ${['Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agu','Sep','Okt','Nov','Des'][date.getMonth()]} ${date.getFullYear()}`;
                        const statusColors = { 'Aktif': 'bg-success/10 text-success', 'Selesai': 'bg-primary/10 text-primary' };
                        const statusClass = statusColors[d.campaign_status] || 'bg-outline/10 text-outline';

                        donationList.innerHTML += `
                        <a href="/campaigns/${d.campaign_id}" class="block border border-outline-variant/10 rounded-xl p-4 hover:border-primary/30 hover:shadow-soft transition-all group">
                            <div class="flex items-start justify-between">
                                <div class="flex gap-3.5 flex-1">
                                    <div class="w-10 h-10 rounded-xl bg-gradient-to-br from-primary/10 to-primary/5 flex items-center justify-center shrink-0 group-hover:from-primary/20 transition-all">
                                        <span class="material-symbols-outlined text-primary text-[20px]">volunteer_activism</span>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <h3 class="text-title-md text-on-surface font-semibold truncate">${d.campaign_title}</h3>
                                        <p class="text-label-sm text-outline mt-0.5">${dateStr}</p>
                                        <div class="mt-2">
                                            <span class="inline-block px-2 py-0.5 ${statusClass} text-label-sm rounded-lg font-semibold">${d.campaign_status}</span>
                                        </div>
                                    </div>
                                </div>
                                <p class="text-title-md font-bold text-primary shrink-0 ml-4">${formatCurrency(d.amount)}</p>
                            </div>
                        </a>`;
                    });
                }

                document.getElementById('loading-state').classList.add('hidden');
                document.getElementById('profile-content').classList.remove('hidden');
            })
            .catch(err => {
                console.error('Profile error:', err);
                localStorage.removeItem('jwt_token');
                document.getElementById('loading-state').classList.add('hidden');
                document.getElementById('not-logged-in').classList.remove('hidden');
            });

        function doLogout() {
            axios.post('/api/logout', {}, { headers }).finally(() => {
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
        return `Rp ${num.toLocaleString('id-ID')}`;
    }
</script>

<?php echo $__env->make('partials._navbar_js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body></html><?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/profile.blade.php ENDPATH**/ ?>