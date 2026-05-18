<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials._head')
    <title>Detail Kampanye — CharityHub</title>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">

@include('partials._navbar')

<main class="flex-1 w-full max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop py-10">
    {{-- Campaign Header Layout --}}
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-12">
        {{-- Left Column --}}
        <div class="lg:col-span-8 space-y-6">
            <div class="w-full aspect-video rounded-2xl overflow-hidden bg-surface-container-high shadow-medium border border-outline-variant/10">
                <img id="campaign-image" alt="Kampanye Cover" class="w-full h-full object-cover" src="https://placehold.co/1280x720?text=Loading..."/>
            </div>
            <div class="animate-fade-up">
                <h1 id="campaign-title" class="text-headline-lg text-on-surface font-bold mb-4">Memuat Judul Kampanye...</h1>
                <div id="campaign-desc" class="text-body-lg text-on-surface-variant leading-relaxed space-y-4">
                    <p>Memuat deskripsi...</p>
                </div>
            </div>
        </div>

        {{-- Right Column: Sticky Card --}}
        <div class="lg:col-span-4 relative">
            <div class="sticky top-[88px] bg-surface-container-lowest rounded-2xl p-6 shadow-medium border border-outline-variant/10">
                <div class="mb-6">
                    <div class="flex justify-between items-end mb-2">
                        <span class="text-label-md text-outline">Dana Terkumpul</span>
                        <span id="campaign-collected" class="text-headline-md text-primary font-bold">Rp 0</span>
                    </div>
                    <div class="w-full h-3 bg-surface-container-high rounded-full overflow-hidden">
                        <div id="campaign-progress-bar" class="h-full bg-gradient-to-r from-primary to-primary-light rounded-full progress-fill" style="width: 0%;"></div>
                    </div>
                    <div class="flex justify-between items-center mt-2">
                        <span id="campaign-target" class="text-label-sm text-outline">Target: Rp 0</span>
                        <span id="campaign-progress-text" class="text-label-sm text-primary font-bold">0%</span>
                    </div>
                </div>
                <div class="space-y-3 mb-6">
                    <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-surface-container-low/50">
                        <span class="material-symbols-outlined text-outline text-[20px]">group</span>
                        <span id="campaign-donors" class="text-body-md text-on-surface-variant">0 Donatur</span>
                    </div>
                    <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-surface-container-low/50">
                        <span class="material-symbols-outlined text-outline text-[20px]">schedule</span>
                        <span id="campaign-deadline" class="text-body-md text-on-surface-variant">Menghitung...</span>
                    </div>
                </div>
                <a id="donate-btn" href="#" class="w-full py-4 rounded-xl text-label-lg font-bold text-white bg-gradient-to-r from-success to-accent-teal shadow-glow-success btn-press flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">favorite</span>
                    Donasi Sekarang
                </a>
                <p class="text-label-sm text-outline text-center mt-4">Transaksi dijamin aman & transparan.</p>
            </div>
        </div>
    </div>

    {{-- Transparency Ledger --}}
    <div class="reveal">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                <span class="material-symbols-outlined text-primary text-[22px]">receipt_long</span>
            </div>
            <h2 class="text-headline-md text-on-surface font-bold">Transparansi Dana</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            {{-- Donations --}}
            <div class="bg-surface-container-lowest rounded-2xl p-6 shadow-soft border border-outline-variant/10">
                <h3 class="text-title-lg text-on-surface font-bold mb-5 flex items-center gap-2">
                    <span class="material-symbols-outlined text-success">arrow_downward</span>
                    Donasi Masuk
                </h3>
                <div id="donations-list" class="space-y-3 max-h-[400px] overflow-y-auto">
                    <p class="text-on-surface-variant text-body-sm">Memuat data donasi...</p>
                </div>
            </div>
            {{-- Disbursements --}}
            <div class="bg-surface-container-lowest rounded-2xl p-6 shadow-soft border border-outline-variant/10">
                <h3 class="text-title-lg text-on-surface font-bold mb-5 flex items-center gap-2">
                    <span class="material-symbols-outlined text-error">arrow_upward</span>
                    Pencairan Dana
                </h3>
                <div id="disbursements-list" class="space-y-3 max-h-[400px] overflow-y-auto">
                    <p class="text-on-surface-variant text-body-sm">Memuat data pencairan...</p>
                </div>
            </div>
        </div>
    </div>
</main>

@include('partials._footer')

<script>
document.addEventListener("DOMContentLoaded", () => {
    const campaignId = window.location.pathname.split('/')[2];
    const formatRupiah = (n) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(n);
    const formatDate = (s) => new Date(s).toLocaleDateString('id-ID', { day: 'numeric', month: 'short', year: 'numeric' });

    document.getElementById('donate-btn').href = `/campaigns/${campaignId}/donate`;

    Promise.all([
        axios.get(`/api/campaigns/${campaignId}`),
        axios.get(`/api/campaigns/${campaignId}/logs`)
    ])
    .then(([campaignResponse, logsResponse]) => {
        const campaign = campaignResponse.data.data.campaign;
        const logsData = logsResponse.data.data;
        
        if (!campaign) { alert("Campaign tidak ditemukan!"); window.location.href = "/"; return; }

        const donations = logsData.donations || [];
        const disbursements = logsData.disbursements || [];
        const totalDonations = donations.reduce((sum, d) => sum + parseFloat(d.amount), 0);
        const goal = parseFloat(campaign.goal_amount);
        const progress = Math.min((totalDonations / goal) * 100, 100).toFixed(1);
        const donorsCount = donations.length;
        const today = new Date();
        const deadlineDate = new Date(campaign.deadline);
        const diffDays = Math.ceil((deadlineDate - today) / (1000 * 60 * 60 * 24));
        const sisaHari = diffDays > 0 ? `Sisa ${diffDays} Hari` : 'Telah Berakhir';

        document.getElementById('campaign-title').textContent = campaign.title;
        document.getElementById('campaign-desc').innerHTML = `<p>${campaign.description.replace(/\n/g, '<br>')}</p>`;
        document.getElementById('campaign-image').src = campaign.image ? `/storage/${campaign.image}` : '/images/landing-hero.webp';
        document.getElementById('campaign-collected').textContent = formatRupiah(totalDonations);
        document.getElementById('campaign-target').textContent = `Target: ${formatRupiah(goal)}`;
        document.getElementById('campaign-progress-bar').style.width = `${progress}%`;
        document.getElementById('campaign-progress-text').textContent = `${progress}%`;
        document.getElementById('campaign-donors').textContent = `${donorsCount} Donatur`;
        document.getElementById('campaign-deadline').textContent = sisaHari;

        const donationsContainer = document.getElementById('donations-list');
        if (donations.length === 0) {
            donationsContainer.innerHTML = '<p class="text-on-surface-variant text-body-sm py-4 text-center">Belum ada donasi.</p>';
        } else {
            donationsContainer.innerHTML = '';
            donations.slice().reverse().forEach(d => {
                donationsContainer.innerHTML += `
                    <div class="flex justify-between items-center p-3 rounded-xl hover:bg-surface-container-low transition-colors">
                        <div>
                            <p class="text-title-md text-on-surface font-semibold">${d.donor_name || 'Anonim'}</p>
                            <p class="text-label-sm text-outline">${formatDate(d.created_at)}</p>
                        </div>
                        <span class="text-title-md font-bold text-success">+ ${formatRupiah(parseFloat(d.amount))}</span>
                    </div>`;
            });
        }

        const disbursementsContainer = document.getElementById('disbursements-list');
        if (disbursements.length === 0) {
            disbursementsContainer.innerHTML = '<p class="text-on-surface-variant text-body-sm py-4 text-center">Belum ada pencairan.</p>';
        } else {
            disbursementsContainer.innerHTML = '';
            disbursements.slice().reverse().forEach(d => {
                disbursementsContainer.innerHTML += `
                    <div class="flex justify-between items-start p-3 rounded-xl hover:bg-surface-container-low transition-colors">
                        <div>
                            <p class="text-title-md text-on-surface font-semibold">${d.description}</p>
                            <p class="text-label-sm text-outline">${formatDate(d.created_at)}</p>
                        </div>
                        <span class="text-title-md font-bold text-error shrink-0 ml-4">- ${formatRupiah(parseFloat(d.amount))}</span>
                    </div>`;
            });
        }
    })
    .catch(err => { console.error(err); alert("Gagal memuat data kampanye."); });
});
</script>

@include('partials._navbar_js')

</body></html>