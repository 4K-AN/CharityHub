<!DOCTYPE html>
<html lang="id">
<head>
    <?php echo $__env->make('partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <title>Buat Kampanye — CharityHub CMS</title>
    <style type="text/tailwindcss">
        .sidebar-link { @apply flex items-center gap-3 px-4 py-3 rounded-xl text-label-md transition-all duration-200; }
        .sidebar-link.active { @apply bg-gradient-to-r from-primary to-primary-dark text-white font-semibold shadow-soft; }
        .sidebar-link:not(.active) { @apply text-on-surface-variant hover:text-primary hover:bg-primary/5; }
    </style>
</head>
<body class="bg-surface-container-low text-on-surface antialiased h-screen flex">


<aside class="w-[260px] bg-surface-container-lowest border-r border-outline-variant/10 flex flex-col hidden md:flex shrink-0 shadow-soft">
    <div class="h-[72px] flex items-center px-6 border-b border-outline-variant/10">
        <a href="/cms/dashboard" class="flex items-center gap-2.5">
            <img src="/images/logo.svg" alt="CharityHub Logo" class="h-8 w-auto">
            <span class="text-title-lg font-bold text-on-surface">Charity<span class="text-primary">Hub</span></span>
        </a>
    </div>
    <nav class="flex-1 py-4 px-3 space-y-1 overflow-y-auto">
        <p class="text-label-sm text-outline uppercase tracking-wider px-4 mb-2">Menu</p>
        <a class="sidebar-link" href="/cms/dashboard">
            <span class="material-symbols-outlined text-[20px]">dashboard</span>
            Dashboard
        </a>
        <a class="sidebar-link active" href="/cms/campaigns/create">
            <span class="material-symbols-outlined text-[20px] filled">add_circle</span>
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
    <header class="h-[72px] glass-strong border-b border-outline-variant/10 flex items-center justify-between px-8 sticky top-0 z-10">
        <h1 class="text-headline-sm text-on-surface font-bold">Buat Kampanye Baru</h1>
        <div class="flex items-center gap-3">
            <span class="px-3 py-1.5 bg-primary/8 text-primary rounded-lg text-label-sm font-semibold">Campaigner</span>
        </div>
    </header>

    <div class="p-5 md:p-8 max-w-4xl mx-auto w-full">
        <div class="bg-surface-container-lowest rounded-2xl shadow-soft border border-outline-variant/10 p-6 md:p-8 animate-fade-up">
            <div class="mb-8 border-b border-outline-variant/10 pb-6">
                <div class="flex items-center gap-3 mb-2">
                    <div class="w-10 h-10 rounded-xl bg-primary/10 flex items-center justify-center">
                        <span class="material-symbols-outlined text-primary text-[22px]">campaign</span>
                    </div>
                    <h2 class="text-headline-md text-on-surface font-bold">Mulai Galang Dana</h2>
                </div>
                <p class="text-body-md text-on-surface-variant ml-[52px]">Lengkapi detail kampanye untuk mulai mengumpulkan dukungan.</p>
            </div>

            <form class="space-y-6">
                <div>
                    <label class="block text-label-md text-on-surface font-semibold mb-2" for="campaign-title">Judul Kampanye</label>
                    <input class="w-full border border-outline-variant/40 bg-surface rounded-xl px-4 py-3.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="campaign-title" placeholder="Masukkan judul kampanye yang menarik" type="text"/>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-label-md text-on-surface font-semibold mb-2" for="campaign-category">Kategori</label>
                        <select class="w-full border border-outline-variant/40 bg-surface rounded-xl px-4 py-3.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="campaign-category">
                            <option disabled selected value="">Pilih Kategori</option>
                            <option value="medis">🏥 Medis</option>
                            <option value="pendidikan">📚 Pendidikan</option>
                            <option value="bencana">🌊 Bencana Alam</option>
                            <option value="panti">🏠 Panti Asuhan</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-label-md text-on-surface font-semibold mb-2" for="campaign-deadline">Batas Waktu</label>
                        <input class="w-full border border-outline-variant/40 bg-surface rounded-xl px-4 py-3.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="campaign-deadline" type="date" required/>
                    </div>
                    <div>
                        <label class="block text-label-md text-on-surface font-semibold mb-2" for="campaign-target">Target Dana</label>
                        <div class="relative">
                            <span class="absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-body-md">Rp</span>
                            <input class="w-full border border-outline-variant/40 bg-surface rounded-xl pl-12 pr-4 py-3.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="campaign-target" placeholder="50000000" type="number"/>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="block text-label-md text-on-surface font-semibold mb-2" for="campaign-desc">Deskripsi Kampanye</label>
                    <textarea class="w-full border border-outline-variant/40 bg-surface rounded-xl px-4 py-3.5 text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all resize-y" id="campaign-desc" placeholder="Ceritakan latar belakang dan tujuan penggalangan dana..." rows="5"></textarea>
                </div>

                <div>
                    <label class="block text-label-md text-on-surface font-semibold mb-2">Foto Sampul</label>
                    <label class="flex justify-center px-6 py-8 border-2 border-outline-variant/30 border-dashed rounded-2xl bg-surface-container-low/50 hover:bg-surface-container hover:border-primary/30 transition-all cursor-pointer group relative overflow-hidden h-56" for="file-upload">
                        <div id="upload-placeholder" class="flex flex-col items-center justify-center gap-2 text-center z-10">
                            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center group-hover:bg-primary/15 transition-colors">
                                <span class="material-symbols-outlined text-[28px] text-primary">add_photo_alternate</span>
                            </div>
                            <span class="text-label-md text-primary font-semibold">Unggah Foto Sampul</span>
                            <p class="text-label-sm text-outline">PNG, JPG, GIF hingga 2MB</p>
                        </div>
                        <img id="image-preview" src="" alt="Preview" class="absolute inset-0 w-full h-full object-cover hidden z-20 rounded-2xl"/>
                        <input accept="image/*" class="sr-only" id="file-upload" name="file-upload" type="file"/>
                    </label>
                </div>

                <div class="pt-6 border-t border-outline-variant/10 flex justify-end gap-3">
                    <button id="cancel-btn" class="px-6 py-3 border border-outline-variant/30 text-on-surface-variant rounded-xl text-label-md hover:bg-surface-container transition-all btn-press font-semibold" type="button">Batal</button>
                    <button id="submit-btn" class="px-8 py-3 bg-gradient-to-r from-primary to-primary-dark text-on-primary rounded-xl text-label-md btn-press font-bold shadow-soft flex items-center gap-2" type="submit">
                        <span class="material-symbols-outlined text-[18px]">rocket_launch</span>
                        Rilis Kampanye
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

<script>
    const token = localStorage.getItem('jwt_token');
    if (!token) window.location.href = '/login';

    axios.get('/api/profile', { headers: { Authorization: `Bearer ${token}` } })
        .then(res => { if (res.data.data.user.role !== 'Campaigner') window.location.href = '/'; })
        .catch(() => { window.location.href = '/login'; });

    const fileInput = document.getElementById('file-upload');
    const imagePreview = document.getElementById('image-preview');
    const uploadPlaceholder = document.getElementById('upload-placeholder');

    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = (e) => { imagePreview.src = e.target.result; imagePreview.classList.remove('hidden'); uploadPlaceholder.classList.add('hidden'); };
            reader.readAsDataURL(file);
        }
    });

    document.querySelector('form').addEventListener('submit', async (e) => {
        e.preventDefault();
        const title = document.getElementById('campaign-title').value;
        const target = document.getElementById('campaign-target').value;
        const desc = document.getElementById('campaign-desc').value;
        const deadline = document.getElementById('campaign-deadline').value;
        const imageFile = document.getElementById('file-upload').files[0];

        if (!title || !target || !desc || !deadline) { alert('Harap lengkapi semua field wajib'); return; }

        const formData = new FormData();
        formData.append('title', title);
        formData.append('goal_amount', target);
        formData.append('description', desc);
        formData.append('deadline', deadline);
        if (imageFile) formData.append('image', imageFile);

        const btn = document.getElementById('submit-btn');
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined animate-spin text-[18px]">progress_activity</span> Memproses...';

        try {
            await axios.post('/api/campaigns', formData, { headers: { Authorization: `Bearer ${token}`, 'Content-Type': 'multipart/form-data' } });
            alert('Kampanye berhasil dibuat!');
            window.location.href = '/cms/dashboard';
        } catch (error) {
            alert('Gagal: ' + (error.response?.data?.error?.message || error.message));
            btn.disabled = false;
            btn.innerHTML = '<span class="material-symbols-outlined text-[18px]">rocket_launch</span> Rilis Kampanye';
        }
    });

    document.getElementById('cancel-btn').addEventListener('click', () => { window.location.href = '/cms/dashboard'; });

    function logoutAction() {
        axios.post('/api/logout', {}, { headers: { Authorization: `Bearer ${token}` } }).finally(() => {
            localStorage.removeItem('jwt_token'); localStorage.removeItem('user'); localStorage.removeItem('user_name'); localStorage.removeItem('user_role');
            window.location.href = '/login';
        });
    }
</script>
</body></html><?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/cms/create-campaign.blade.php ENDPATH**/ ?>