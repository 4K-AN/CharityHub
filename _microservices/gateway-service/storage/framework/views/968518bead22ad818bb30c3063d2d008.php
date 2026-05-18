<!DOCTYPE html>
<html lang="id">
<head>
    <?php echo $__env->make('partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <title>Dashboard — CharityHub CMS</title>
    <style type="text/tailwindcss">
        body { overflow: hidden; }
        .sidebar-link { @apply flex items-center gap-3 px-4 py-3 rounded-xl text-label-md transition-all duration-200; }
        .sidebar-link.active { @apply bg-gradient-to-r from-primary to-primary-dark text-white font-semibold shadow-soft; }
        .sidebar-link:not(.active) { @apply text-on-surface-variant hover:text-primary hover:bg-primary/5; }
    </style>
</head>
<body class="bg-surface-container-low text-on-surface antialiased h-screen flex">


<aside class="w-[260px] bg-surface-container-lowest border-r border-outline-variant/10 flex flex-col hidden md:flex shrink-0 shadow-soft">
    <div class="h-[72px] flex items-center px-6 border-b border-outline-variant/10">
        <a href="/" class="flex items-center gap-2.5 group">
            <img src="/images/logo.svg" alt="CharityHub Logo" class="h-8 w-auto">
            <span class="text-title-lg font-bold text-on-surface">Charity<span class="text-primary">Hub</span></span>
        </a>
    </div>

    <nav class="flex-1 py-4 px-3 space-y-1 overflow-y-auto">
        <p class="text-label-sm text-outline uppercase tracking-wider px-4 mb-2">Menu</p>
        <a class="sidebar-link active" href="/cms/dashboard">
            <span class="material-symbols-outlined text-[20px] filled">dashboard</span>
            Dashboard
        </a>
        <a class="sidebar-link" href="/cms/campaigns/create">
            <span class="material-symbols-outlined text-[20px]">add_circle</span>
            Buat Kampanye
        </a>
        <div class="pt-4">
            <p class="text-label-sm text-outline uppercase tracking-wider px-4 mb-2">Lainnya</p>
            <a class="sidebar-link" href="/">
                <span class="material-symbols-outlined text-[20px]">home</span>
                Halaman Utama
            </a>
        </div>
    </nav>

    <div class="p-3 border-t border-outline-variant/10">
        <button onclick="logoutAction()" class="sidebar-link w-full text-error hover:bg-error/5 hover:text-error">
            <span class="material-symbols-outlined text-[20px]">logout</span>
            Logout
        </button>
    </div>
</aside>


<main class="flex-1 flex flex-col h-screen overflow-y-auto">
    
    <header class="h-[72px] glass-strong border-b border-outline-variant/10 flex items-center justify-between px-margin-mobile md:px-8 sticky top-0 z-10">
        <div>
            <h1 class="text-headline-sm text-on-surface font-bold hidden md:block">Dashboard</h1>
            <h1 class="text-title-lg text-on-surface font-bold md:hidden">Dashboard</h1>
        </div>
        <div class="flex items-center gap-3">
            <span class="px-3 py-1.5 bg-primary/8 text-primary rounded-lg text-label-sm font-semibold">Campaigner</span>
            <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-primary to-primary-dark text-white flex items-center justify-center text-label-sm font-bold">CH</div>
        </div>
    </header>

    
    <div class="p-5 md:p-8 space-y-6 max-w-[1400px] mx-auto w-full">
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4" id="dashboard-stats">
            <?php for($i = 0; $i < 4; $i++): ?>
            <div class="bg-surface-container-lowest p-5 rounded-2xl shadow-soft border border-outline-variant/10 h-28 animate-pulse shimmer-bg"></div>
            <?php endfor; ?>
        </div>

        
        <div class="bg-surface-container-lowest rounded-2xl shadow-soft border border-outline-variant/10 overflow-hidden">
            <div class="p-5 md:p-6 border-b border-outline-variant/10 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 rounded-xl bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[20px]">campaign</span>
                    </div>
                    <h2 class="text-headline-sm text-on-surface font-bold">Kampanye Saya</h2>
                </div>
                <a href="/cms/campaigns/create" class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-primary-dark text-on-primary px-5 py-2.5 rounded-xl text-label-md btn-press font-semibold shadow-soft">
                    <span class="material-symbols-outlined text-[18px]">add</span>
                    Buat Kampanye
                </a>
            </div>
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-surface-container-low/50 text-label-md text-on-surface-variant border-b border-outline-variant/10">
                            <th class="p-4 font-semibold">Judul Kampanye</th>
                            <th class="p-4 font-semibold">Target Dana</th>
                            <th class="p-4 font-semibold">Terkumpul</th>
                            <th class="p-4 font-semibold">Progress</th>
                            <th class="p-4 font-semibold">Status</th>
                            <th class="p-4 font-semibold text-right">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="campaign-list" class="text-body-md divide-y divide-outline-variant/8">
                        <tr><td colspan="6" class="p-8 text-center text-on-surface-variant">Memuat data...</td></tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<script>
    const token = localStorage.getItem('jwt_token');
    if (!token) window.location.href = '/login';

    axios.get('/api/profile', { headers: { Authorization: `Bearer ${token}` } })
        .then(res => {
            const user = res.data.data.user;
            if (user.role !== 'Campaigner') { window.location.href = '/'; return; }
            return axios.get('/api/campaigns', { headers: { Authorization: `Bearer ${token}` } })
                .then(campaignRes => {
                    const allCampaigns = campaignRes.data.data.campaigns || [];
                    const myCampaigns = allCampaigns.filter(c => c.user_id === user.id);
                    renderDashboard(myCampaigns);
                });
        })
        .catch(err => { console.error(err); localStorage.removeItem('jwt_token'); window.location.href = '/login'; });

    function renderDashboard(campaigns) {
        let activeCount = 0, totalCollected = 0, totalDisbursed = 0;
        let uniqueDonors = new Set();
        const listEl = document.getElementById('campaign-list');
        listEl.innerHTML = '';

        if (campaigns.length === 0) {
            listEl.innerHTML = '<tr><td colspan="6" class="p-12 text-center text-on-surface-variant"><div class="flex flex-col items-center gap-3"><span class="material-symbols-outlined text-[40px] text-outline">campaign</span><p>Belum ada kampanye. Buat kampanye pertama Anda!</p></div></td></tr>';
        }

        campaigns.forEach(c => {
            if (c.status === 'Aktif') activeCount++;
            let campaignCollected = 0;
            if (c.donations) { c.donations.forEach(d => { campaignCollected += parseFloat(d.amount); totalCollected += parseFloat(d.amount); uniqueDonors.add(d.user_id || d.donor_name); }); }
            if (c.disbursements) { c.disbursements.forEach(d => { totalDisbursed += parseFloat(d.amount); }); }

            const progress = c.goal_amount > 0 ? Math.min(100, Math.round((campaignCollected / c.goal_amount) * 100)) : 0;
            const progressColor = progress >= 100 ? 'from-success to-success' : 'from-primary to-primary-light';
            const statusBadges = {
                'Aktif': '<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-label-sm font-semibold bg-success/10 text-success"><span class="w-1.5 h-1.5 rounded-full bg-success"></span> Aktif</span>',
                'Selesai': '<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-lg text-label-sm font-semibold bg-primary/10 text-primary">✓ Selesai</span>',
            };
            const statusBadge = statusBadges[c.status] || `<span class="inline-flex items-center px-2.5 py-1 rounded-lg text-label-sm font-semibold bg-outline/10 text-outline">${c.status}</span>`;

            listEl.innerHTML += `
            <tr class="hover:bg-surface-container-low/50 transition-colors">
                <td class="p-4 font-semibold text-on-surface max-w-[200px] truncate">
                    <div class="flex items-center gap-2.5">
                        <span class="material-symbols-outlined text-primary text-[18px]">campaign</span>
                        ${c.title}
                    </div>
                </td>
                <td class="p-4 text-on-surface-variant">${formatCurrency(c.goal_amount)}</td>
                <td class="p-4 text-primary font-semibold">${formatCurrency(campaignCollected)}</td>
                <td class="p-4">
                    <div class="flex items-center gap-2">
                        <div class="w-20 bg-surface-container-high rounded-full h-2 overflow-hidden">
                            <div class="bg-gradient-to-r ${progressColor} h-full rounded-full progress-fill" style="width: ${progress}%"></div>
                        </div>
                        <span class="text-label-sm ${progress >= 100 ? 'text-success font-bold' : 'text-on-surface-variant'}">${progress}%</span>
                    </div>
                </td>
                <td class="p-4">${statusBadge}</td>
                <td class="p-4 text-right space-x-2 whitespace-nowrap">
                    <a href="/cms/campaigns/${c.id}/ledger" class="inline-flex items-center gap-1 px-3 py-1.5 border border-primary/30 text-primary rounded-lg text-label-sm hover:bg-primary hover:text-white transition-all btn-press">
                        <span class="material-symbols-outlined text-[16px]">receipt_long</span> Kelola
                    </a>
                    <button onclick="deleteCampaign('${c.id}')" class="inline-flex items-center gap-1 px-3 py-1.5 border border-error/20 text-error rounded-lg text-label-sm hover:bg-error hover:text-white transition-all btn-press">
                        <span class="material-symbols-outlined text-[16px]">delete</span> Hapus
                    </button>
                </td>
            </tr>`;
        });

        document.getElementById('dashboard-stats').innerHTML = `
            ${statCard('campaign', campaigns.length, 'Total Kampanye', 'Kampanye terdaftar', 'from-primary/10 to-primary/5', 'text-primary')}
            ${statCard('trending_up', formatCurrency(totalCollected), 'Total Terkumpul', 'Dari semua donasi', 'from-success/10 to-success/5', 'text-success')}
            ${statCard('payments', formatCurrency(totalDisbursed), 'Total Pencairan', 'Dana yang disalurkan', 'from-tertiary/10 to-tertiary/5', 'text-tertiary')}
            ${statCard('group', uniqueDonors.size, 'Total Donatur', 'Donatur unik', 'from-secondary/10 to-secondary/5', 'text-secondary')}
        `;
    }

    function statCard(icon, value, label, sub, bgGrad, textColor) {
        return `<div class="bg-surface-container-lowest p-5 rounded-2xl shadow-soft border border-outline-variant/10 card-hover">
            <div class="flex items-center gap-4">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-br ${bgGrad} flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-[22px] ${textColor}">${icon}</span>
                </div>
                <div>
                    <p class="text-label-sm text-on-surface-variant">${label}</p>
                    <p class="text-headline-sm ${textColor} font-bold">${value}</p>
                    <p class="text-[11px] text-outline mt-0.5">${sub}</p>
                </div>
            </div>
        </div>`;
    }

    function formatCurrency(num) {
        num = parseFloat(num) || 0;
        if (num >= 1000000000) return 'Rp ' + (num / 1000000000).toFixed(1) + 'M';
        if (num >= 1000000) return 'Rp ' + (num / 1000000).toFixed(1) + 'Jt';
        return 'Rp ' + num.toLocaleString('id-ID');
    }

    async function deleteCampaign(id) {
        if (!confirm('Anda yakin ingin menghapus kampanye ini?')) return;
        try {
            await axios.delete(`/api/campaigns/${id}`, { headers: { Authorization: `Bearer ${token}` } });
            alert('Kampanye berhasil dihapus.');
            window.location.reload();
        } catch (err) {
            alert('Gagal menghapus: ' + (err.response?.data?.error?.message || err.message));
        }
    }

    function logoutAction() {
        axios.post('/api/logout', {}, { headers: { Authorization: `Bearer ${token}` } }).finally(() => {
            localStorage.removeItem('jwt_token'); localStorage.removeItem('user'); localStorage.removeItem('user_name'); localStorage.removeItem('user_role');
            window.location.href = '/login';
        });
    }
</script>

</body></html><?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/cms/dashboard.blade.php ENDPATH**/ ?>