<!DOCTYPE html>
<html lang="id">
<head>
    <?php echo $__env->make('partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <title>CharityHub — Transparansi dalam Setiap Donasi</title>
    <meta name="description" content="Platform donasi terpercaya dengan transparansi penuh. Setiap rupiah Anda dapat dilacak secara real-time.">
</head>
<body class="bg-background text-on-background antialiased flex flex-col min-h-screen">

<?php echo $__env->make('partials._navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main class="w-full flex-1">
    
    
    
    <section class="w-full relative overflow-hidden">
        
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -right-24 w-[500px] h-[500px] bg-gradient-to-br from-primary/8 to-secondary/8 rounded-full blur-3xl animate-pulse-soft"></div>
            <div class="absolute -bottom-32 -left-32 w-[400px] h-[400px] bg-gradient-to-tr from-tertiary/6 to-accent-pink/6 rounded-full blur-3xl animate-pulse-soft" style="animation-delay: 1.5s"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-gradient-to-b from-primary-container/10 to-transparent rounded-full blur-3xl"></div>
        </div>

        <div class="relative z-10 px-margin-mobile md:px-margin-desktop pt-16 pb-20 flex flex-col items-center text-center max-w-container-max-width mx-auto gap-8">
            <div class="max-w-3xl flex flex-col gap-6 animate-fade-up">
                
                <div class="inline-flex items-center justify-center">
                    <span class="inline-flex items-center gap-2 px-4 py-2 bg-primary/8 text-primary rounded-full text-label-md border border-primary/15 shadow-soft">
                        <span class="w-2 h-2 rounded-full bg-success animate-pulse"></span>
                        Platform Donasi Terpercaya #1
                    </span>
                </div>

                
                <h1 class="text-display-md md:text-display-lg text-on-background leading-tight">
                    Transformasi Kepedulian<br class="hidden sm:block"> Menjadi <span class="gradient-text">Dampak Nyata</span>
                </h1>

                
                <p class="text-body-lg text-on-surface-variant max-w-2xl mx-auto">
                    CharityHub menghubungkan niat baik Anda dengan aksi terukur. Setiap rupiah yang Anda donasikan dapat dilacak secara <strong class="text-on-surface">real-time</strong>, memberikan kepercayaan penuh bahwa bantuan Anda sampai.
                </p>

                
                <div class="flex flex-col sm:flex-row justify-center gap-3 mt-4">
                    <a href="/#campaigns" class="inline-flex items-center justify-center gap-2 bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-lg px-8 py-4 rounded-2xl shadow-glow-primary btn-press font-semibold">
                        <span class="material-symbols-outlined text-[20px]">favorite</span>
                        Mulai Donasi Sekarang
                    </a>
                    <a href="/about" class="inline-flex items-center justify-center gap-2 border-2 border-outline-variant text-on-surface text-label-lg px-8 py-4 rounded-2xl hover:border-primary hover:text-primary hover:bg-primary/5 btn-press transition-all duration-300 font-semibold">
                        <span class="material-symbols-outlined text-[20px]">play_circle</span>
                        Pelajari Lebih Lanjut
                    </a>
                </div>
            </div>

            
            <div class="grid grid-cols-3 gap-1 md:gap-0 mt-8 w-full max-w-xl glass rounded-2xl border border-outline-variant/20 shadow-medium overflow-hidden reveal">
                <div class="text-center p-4 md:p-6">
                    <p class="text-headline-md md:text-headline-lg text-primary font-bold">12.5K+</p>
                    <p class="text-label-sm text-on-surface-variant mt-1">Donatur Aktif</p>
                </div>
                <div class="text-center p-4 md:p-6 border-l border-r border-outline-variant/15">
                    <p class="text-headline-md md:text-headline-lg text-secondary font-bold">Rp 2.3M</p>
                    <p class="text-label-sm text-on-surface-variant mt-1">Dana Terkumpul</p>
                </div>
                <div class="text-center p-4 md:p-6">
                    <p class="text-headline-md md:text-headline-lg text-tertiary font-bold">847</p>
                    <p class="text-label-sm text-on-surface-variant mt-1">Kampanye Aktif</p>
                </div>
            </div>

            
            <div class="w-full max-w-4xl mt-4 reveal">
                <div class="relative rounded-3xl overflow-hidden shadow-elevated group">
                    <img alt="Ilustrasi gotong royong dan kepedulian sosial" class="w-full h-auto object-contain transition-transform duration-700 group-hover:scale-[1.03]" src="/images/landing-hero.webp"/>
                    <div class="absolute inset-0 bg-gradient-to-t from-primary/5 to-transparent"></div>
                </div>
            </div>
        </div>
    </section>

    
    
    
    <section class="w-full bg-surface-container-low/50 py-14 border-y border-outline-variant/10">
        <div class="max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop flex flex-col gap-6 reveal">
            <div class="text-center mb-2">
                <h2 class="text-headline-md text-on-surface font-bold">Temukan Kampanye untuk Didukung</h2>
                <p class="text-body-md text-on-surface-variant mt-2">Cari kampanye yang sesuai dengan kepedulian Anda</p>
            </div>
            <div class="flex flex-col md:flex-row gap-3 items-stretch max-w-2xl mx-auto w-full">
                <div class="relative flex-1">
                    <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-outline text-[20px]">search</span>
                    <input id="search-input" class="w-full pl-12 pr-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface-container-lowest focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md text-on-surface shadow-soft placeholder:text-outline" placeholder="Cari campaign..." type="text"/>
                </div>
                <select id="filter-status" class="px-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface-container-lowest text-body-md text-on-surface shadow-soft focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all min-w-[160px]">
                    <option selected value="all">Semua Status</option>
                    <option value="Aktif">✅ Aktif</option>
                    <option value="Selesai">✔️ Selesai</option>
                    <option value="Ditutup">🔒 Ditutup</option>
                </select>
            </div>
        </div>
    </section>

    
    
    
    <section id="campaigns" class="w-full px-margin-mobile md:px-margin-desktop py-section-gap max-w-container-max-width mx-auto">
        <div class="mb-12 reveal">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary text-[22px]">volunteer_activism</span>
                </div>
                <h2 class="text-headline-lg text-on-background font-bold">Kampanye Terkini</h2>
            </div>
            <p class="text-body-md text-on-surface-variant ml-[52px]">Dukung inisiatif yang paling membutuhkan bantuan saat ini.</p>
        </div>
        <div id="campaign-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <?php for($i = 0; $i < 3; $i++): ?>
            <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-soft overflow-hidden animate-pulse">
                <div class="h-48 bg-surface-container-high shimmer-bg"></div>
                <div class="p-6 space-y-3">
                    <div class="h-5 bg-surface-container-high rounded-lg w-3/4 shimmer-bg"></div>
                    <div class="h-4 bg-surface-container-high rounded-lg w-full shimmer-bg"></div>
                    <div class="h-3 bg-surface-container-high rounded-full w-full shimmer-bg mt-4"></div>
                    <div class="h-10 bg-surface-container-high rounded-xl w-full shimmer-bg mt-4"></div>
                </div>
            </div>
            <?php endfor; ?>
        </div>
    </section>

    
    
    
    <section class="w-full bg-surface-container-low/40 py-section-gap px-margin-mobile md:px-margin-desktop">
        <div class="max-w-container-max-width mx-auto">
            <div class="text-center mb-14 reveal">
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-accent-purple/8 text-accent-purple rounded-full text-label-sm mb-4">
                    <span class="material-symbols-outlined text-[16px]">format_quote</span> Testimoni
                </span>
                <h2 class="text-headline-lg text-on-background font-bold">Kisah Nyata dari Komunitas</h2>
                <p class="text-body-md text-on-surface-variant mt-3">Ribuan orang telah membuat perbedaan.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <?php $__currentLoopData = [
                    ['BU', 'Bu Sarah', 'Pedagang Beras', '"Saya bisa lihat bagaimana uang saya digunakan. Transparansi seperti ini membuatku percaya."', 'from-primary to-primary-dark'],
                    ['RP', 'Pak Ridho', 'Pengusaha Muda', '"CharityHub mengubah cara saya memberikan amal. Setiap donasi terasa lebih bermakna."', 'from-secondary to-accent-teal'],
                    ['DA', 'Dina Ayu', 'Ibu Rumah Tangga', '"Ada platform yang memperjelas kemana amal saya pergi. Ini membuat keluarga lebih termotivasi."', 'from-tertiary to-warning'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$initials, $name, $role, $quote, $gradient]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 p-6 shadow-soft card-hover reveal">
                    <div class="flex items-center gap-3.5 mb-5">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-br <?php echo e($gradient); ?> text-white flex items-center justify-center font-bold text-sm shadow-sm"><?php echo e($initials); ?></div>
                        <div>
                            <p class="text-title-md text-on-surface font-bold"><?php echo e($name); ?></p>
                            <p class="text-label-sm text-on-surface-variant"><?php echo e($role); ?></p>
                        </div>
                    </div>
                    <p class="text-body-md text-on-surface-variant mb-5 leading-relaxed italic"><?php echo e($quote); ?></p>
                    <div class="flex gap-0.5">
                        <?php for($s=0; $s<5; $s++): ?>
                        <span class="material-symbols-outlined text-[18px] star-filled">star</span>
                        <?php endfor; ?>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    
    
    <section class="w-full py-section-gap px-margin-mobile md:px-margin-desktop">
        <div class="max-w-container-max-width mx-auto">
            <div class="text-center mb-14 reveal">
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-success/8 text-success rounded-full text-label-sm mb-4">
                    <span class="material-symbols-outlined text-[16px]">verified</span> Keunggulan
                </span>
                <h2 class="text-headline-lg text-on-background font-bold">Mengapa Memilih CharityHub?</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                <?php $__currentLoopData = [
                    ['shield', '100% Aman', 'Transaksi terenkripsi dan laporan audit independen', 'from-primary/10 to-primary/5', 'text-primary'],
                    ['visibility', 'Real-Time Tracking', 'Ikuti setiap rupiah dalam waktu nyata', 'from-secondary/10 to-secondary/5', 'text-secondary'],
                    ['verified_user', 'Terverifikasi', 'Semua kampanye melalui verifikasi ketat', 'from-success/10 to-success/5', 'text-success'],
                    ['bolt', 'Mudah & Cepat', 'Donasi hanya dalam beberapa klik saja', 'from-tertiary/10 to-tertiary/5', 'text-tertiary'],
                ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$icon, $title, $desc, $bgGrad, $textColor]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center p-6 rounded-2xl bg-surface-container-lowest border border-outline-variant/10 shadow-soft card-hover reveal">
                    <div class="w-14 h-14 rounded-2xl bg-gradient-to-br <?php echo e($bgGrad); ?> flex items-center justify-center mx-auto mb-4">
                        <span class="material-symbols-outlined text-[28px] <?php echo e($textColor); ?>"><?php echo e($icon); ?></span>
                    </div>
                    <h3 class="text-title-lg text-on-surface mb-2 font-bold"><?php echo e($title); ?></h3>
                    <p class="text-body-sm text-on-surface-variant leading-relaxed"><?php echo e($desc); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>

    
    
    
    <section class="w-full px-margin-mobile md:px-margin-desktop pb-section-gap">
        <div class="max-w-container-max-width mx-auto reveal">
            <div class="relative rounded-3xl overflow-hidden bg-gradient-to-br from-primary via-primary-dark to-inverse-surface p-12 md:p-16 text-center shadow-elevated">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-white/20 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 left-0 w-48 h-48 bg-primary-light/30 rounded-full blur-3xl"></div>
                </div>
                <div class="relative z-10">
                    <h2 class="text-headline-lg md:text-display-md text-white font-bold mb-4">Siap Membuat Perubahan?</h2>
                    <p class="text-body-lg text-white/80 max-w-xl mx-auto mb-8">Bergabung dengan ribuan orang yang telah memilih transparansi dalam berdonasi.</p>
                    <div class="flex flex-col sm:flex-row justify-center gap-3">
                        <a href="/register" class="inline-flex items-center justify-center gap-2 bg-white text-primary text-label-lg px-8 py-4 rounded-2xl btn-press font-bold shadow-medium">
                            <span class="material-symbols-outlined text-[20px]">person_add</span>
                            Daftar Sekarang — Gratis
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php echo $__env->make('partials._footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>




<script>
document.addEventListener("DOMContentLoaded", () => {
    axios.get('/api/campaigns')
        .then(response => {
            const campaigns = response.data.data.campaigns;
            const container = document.getElementById('campaign-list');
            
            if (campaigns.length === 0) {
                container.innerHTML = '<p class="text-center text-on-surface-variant col-span-full py-12 text-body-lg">Belum ada campaign aktif saat ini.</p>';
                return;
            }

            let allCampaigns = campaigns;

            const renderCampaigns = (filteredCampaigns) => {
                container.innerHTML = '';
                if (filteredCampaigns.length === 0) {
                    container.innerHTML = '<p class="text-center text-on-surface-variant col-span-full py-12 text-body-md">Tidak ada kampanye yang cocok dengan pencarian Anda.</p>';
                    return;
                }
                
                filteredCampaigns.forEach((campaign, index) => {
                    const goal = parseFloat(campaign.goal_amount);
                    const formatRupiah = (n) => new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(n);
                    const imageSrc = campaign.image ? `/storage/${campaign.image}` : '/images/landing-hero.webp';
                    const statusColors = {
                        'Aktif': 'bg-success/10 text-success border-success/20',
                        'Selesai': 'bg-primary/10 text-primary border-primary/20',
                        'Ditutup': 'bg-outline/10 text-outline border-outline/20',
                    };
                    const statusClass = statusColors[campaign.status] || statusColors['Aktif'];

                    container.innerHTML += `
                        <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/15 shadow-soft overflow-hidden flex flex-col card-hover reveal visible" style="animation-delay: ${index * 80}ms">
                            <div class="h-48 w-full bg-surface-container-high relative overflow-hidden group">
                                <img src="${imageSrc}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="${campaign.title}" loading="lazy">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent"></div>
                                <span class="absolute top-3 left-3 px-3 py-1 rounded-lg text-label-sm font-semibold border ${statusClass} glass-strong">${campaign.status}</span>
                            </div>
                            <div class="p-5 flex flex-col flex-grow gap-3">
                                <div>
                                    <h3 class="text-title-lg text-on-surface line-clamp-2 font-bold leading-snug">${campaign.title}</h3>
                                    <p class="text-body-sm text-on-surface-variant mt-1.5 line-clamp-2 leading-relaxed">${campaign.description}</p>
                                </div>
                                <div class="mt-auto flex flex-col gap-3 pt-3 border-t border-outline-variant/10">
                                    <div class="flex justify-between items-baseline">
                                        <span class="text-label-sm text-on-surface-variant">Target</span>
                                        <span class="text-title-md text-primary font-bold">${formatRupiah(goal)}</span>
                                    </div>
                                </div>
                                <a href="/campaigns/${campaign.id}" class="w-full bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-md py-3 rounded-xl shadow-soft hover:shadow-glow-primary btn-press flex items-center justify-center gap-2 font-semibold">
                                    <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    `;
                });
            };
            
            renderCampaigns(allCampaigns);

            const searchInput = document.getElementById('search-input');
            const filterStatus = document.getElementById('filter-status');

            function applyFilters() {
                const query = searchInput.value.toLowerCase();
                const status = filterStatus.value;
                const filtered = allCampaigns.filter(c => {
                    const matchText = c.title.toLowerCase().includes(query) || c.description.toLowerCase().includes(query);
                    const matchStatus = status === 'all' || c.status === status;
                    return matchText && matchStatus;
                });
                renderCampaigns(filtered);
            }

            searchInput.addEventListener('input', applyFilters);
            filterStatus.addEventListener('change', applyFilters);
        })
        .catch(error => {
            console.error("Error fetching campaigns:", error);
            document.getElementById('campaign-list').innerHTML = '<p class="text-center text-error col-span-full py-12">Gagal memuat kampanye. Silakan refresh halaman.</p>';
        });
});
</script>

<?php echo $__env->make('partials._navbar_js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body></html><?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/landing.blade.php ENDPATH**/ ?>