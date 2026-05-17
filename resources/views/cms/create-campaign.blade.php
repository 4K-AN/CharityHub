<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Buat Kampanye Baru - CharityHub Admin</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-tertiary-fixed": "#2e1600",
                        "inverse-primary": "#94ccff",
                        "primary": "#005d90",
                        "error-container": "#ffdad6",
                        "primary-fixed": "#cde5ff",
                        "outline": "#707881",
                        "on-surface-variant": "#404850",
                        "on-error": "#ffffff",
                        "primary-fixed-dim": "#94ccff",
                        "secondary-container": "#50d9fe",
                        "inverse-surface": "#263143",
                        "on-secondary-fixed": "#001f27",
                        "surface-tint": "#006399",
                        "primary-container": "#0077b6",
                        "on-primary-fixed": "#001d32",
                        "inverse-on-surface": "#ecf1ff",
                        "on-tertiary-container": "#fff6f1",
                        "secondary-fixed": "#b3ebff",
                        "secondary": "#00677d",
                        "on-secondary-container": "#005c70",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed-variant": "#6c3a00",
                        "on-tertiary": "#ffffff",
                        "tertiary-fixed-dim": "#ffb877",
                        "surface-container-low": "#f0f3ff",
                        "on-primary": "#ffffff",
                        "background": "#f9f9ff",
                        "tertiary-fixed": "#ffdcc0",
                        "on-primary-container": "#f3f7ff",
                        "surface-dim": "#cfdaf2",
                        "surface-container-high": "#dee8ff",
                        "secondary-fixed-dim": "#4cd6fb",
                        "surface": "#f9f9ff",
                        "error": "#ba1a1a",
                        "tertiary-container": "#a95f00",
                        "surface-variant": "#d8e3fb",
                        "surface-container-highest": "#d8e3fb",
                        "surface-bright": "#f9f9ff",
                        "on-secondary": "#ffffff",
                        "tertiary": "#864a00",
                        "on-secondary-fixed-variant": "#004e5f",
                        "on-error-container": "#93000a",
                        "on-background": "#111c2d",
                        "outline-variant": "#bfc7d1",
                        "on-primary-fixed-variant": "#004b74",
                        "surface-container": "#e7eeff",
                        "on-surface": "#111c2d"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "margin-mobile": "16px",
                        "margin-desktop": "48px",
                        "gutter": "24px",
                        "section-gap": "80px",
                        "container-max-width": "1280px",
                        "unit": "8px"
                    },
                    "fontFamily": {
                        "label-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "display-lg-mobile": ["Inter"],
                        "display-lg": ["Inter"]
                    },
                    "fontSize": {
                        "label-md": ["14px", { "lineHeight": "20px", "letterSpacing": "0.01em", "fontWeight": "500" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-sm": ["12px", { "lineHeight": "16px", "fontWeight": "600" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "display-lg-mobile": ["36px", { "lineHeight": "44px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "display-lg": ["48px", { "lineHeight": "56px", "letterSpacing": "-0.02em", "fontWeight": "700" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        input:focus, textarea:focus, select:focus {
            box-shadow: 0 0 0 1px #0077b6 !important;
            border-color: #0077b6 !important;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen flex">
<!-- Sidebar -->
<aside class="w-64 bg-surface-container-lowest border-r border-outline-variant/20 flex flex-col hidden md:flex sticky top-0 h-screen">
<div class="p-6">
<a class="flex items-center gap-2 text-primary" href="/cms/dashboard">
<span class="material-symbols-outlined fill text-3xl">volunteer_activism</span>
<span class="font-headline-md text-headline-md font-bold flex items-center gap-2">
<img src="/images/logo.svg" alt="CharityHub Logo" class="h-8 w-auto">
CharityHub Admin</span>
</a>
</div>
<nav class="flex-1 px-4 py-6 space-y-2">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary transition-colors" href="/cms/dashboard">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-label-md text-label-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:bg-surface-container hover:text-primary transition-colors" href="/cms/dashboard">
<span class="material-symbols-outlined">list_alt</span>
<span class="font-label-md text-label-md">Kampanye Saya</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-primary-container text-on-primary-container" href="/cms/campaigns/create">
<span class="material-symbols-outlined fill">add_circle</span>
<span class="font-label-md text-label-md font-bold">Buat Kampanye Baru</span>
</a>
</nav>
<div class="p-4 border-t border-outline-variant/20">
<button onclick="logoutAction()" class="w-full flex items-center gap-3 px-4 py-3 rounded-lg text-on-surface-variant hover:text-error transition-colors">
<span class="material-symbols-outlined">logout</span>
<span class="font-label-md text-label-md">Keluar (Logout)</span>
</button>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col h-screen overflow-y-auto">
<!-- Header -->
<header class="bg-surface-container-lowest border-b border-outline-variant/20 px-8 py-6 flex justify-between items-center sticky top-0 z-10 backdrop-blur-md bg-opacity-90">
<div>
<h1 class="font-headline-lg text-headline-lg text-on-surface">Halo, Campaigner Hebat</h1>
</div>
<div class="flex items-center gap-4">
<span class="bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-sm text-label-sm border border-secondary/20">Campaigner</span>
<div class="w-10 h-10 rounded-full bg-surface-container-high border border-outline-variant/40 flex items-center justify-center overflow-hidden">
<span class="material-symbols-outlined text-on-surface-variant">person</span>
</div>
</div>
</header>
<!-- Form Area -->
<div class="p-8 max-w-4xl mx-auto w-full">
<div class="bg-surface-container-lowest rounded-xl shadow-[0_2px_12px_rgba(0,0,0,0.04)] border border-outline-variant/30 p-8">
<div class="mb-8 border-b border-outline-variant/20 pb-6">
<h2 class="font-headline-md text-headline-md text-on-surface mb-2">Mulai Galang Dana Baru</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Lengkapi detail kampanye Anda untuk mulai mengumpulkan dukungan.</p>
</div>
<form class="space-y-6">
<!-- Judul -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-title">Judul Kampanye</label>
<input class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none transition-colors" id="campaign-title" placeholder="Masukkan judul kampanye yang menarik dan jelas" type="text"/>
</div>
<!-- Kategori & Target -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-category">Kategori</label>
<div class="relative">
<select class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface appearance-none focus:outline-none transition-colors" id="campaign-category">
<option disabled="" selected="" value="">Pilih Kategori</option>
<option value="medis">Medis</option>
<option value="pendidikan">Pendidikan</option>
<option value="bencana">Bencana Alam</option>
<option value="panti">Panti Asuhan</option>
</select>
<span class="material-symbols-outlined absolute right-4 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
</div>
</div>
<!-- Tenggat Waktu (Deadline) -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-deadline">Batas Waktu</label>
<input class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none transition-colors" id="campaign-deadline" type="date" required/>
</div>
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-target">Target Dana</label>
<div class="relative flex items-center">
<span class="absolute left-4 font-body-md text-body-md text-on-surface-variant">Rp</span>
<input class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg pl-12 pr-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none transition-colors" id="campaign-target" placeholder="Contoh: 50000000" type="number"/>
</div>
</div>
</div>
<!-- Deskripsi -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2" for="campaign-desc">Deskripsi Kampanye</label>
<textarea class="w-full bg-surface-bright border border-outline-variant/50 rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none transition-colors resize-y" id="campaign-desc" placeholder="Ceritakan secara detail latar belakang dan tujuan penggalangan dana ini..." rows="6"></textarea>
</div>
<!-- Upload -->
<div>
<label class="block font-label-md text-label-md text-on-surface mb-2">Foto Sampul</label>
<label class="mt-1 flex justify-center px-6 pt-10 pb-10 border-2 border-outline-variant/40 border-dashed rounded-xl bg-surface-container-low hover:bg-surface-container transition-colors cursor-pointer group relative overflow-hidden h-64" for="file-upload">
<div id="upload-placeholder" class="space-y-2 text-center flex flex-col items-center justify-center h-full z-10">
<span class="material-symbols-outlined text-4xl text-outline group-hover:text-primary transition-colors">add_photo_alternate</span>
<div class="flex text-sm text-on-surface-variant mt-2">
<span class="font-label-md text-primary group-hover:text-primary-container">Unggah Foto Sampul Kampanye</span>
</div>
<p class="text-xs text-outline mt-1">PNG, JPG, GIF hingga 2MB</p>
</div>
<img id="image-preview" src="" alt="Preview Foto" class="absolute inset-0 w-full h-full object-cover hidden z-20" />
<input accept="image/*" class="sr-only" id="file-upload" name="file-upload" type="file"/>
</label>
</div>
<!-- Actions -->
<div class="pt-6 border-t border-outline-variant/20 flex justify-end gap-4 mt-8">
<button id="cancel-btn" class="px-6 py-2.5 border border-primary text-primary rounded-lg font-label-md text-label-md hover:bg-primary/5 transition-colors" type="button">
                            Batal
                        </button>
<button id="submit-btn" class="px-6 py-2.5 bg-primary-container text-on-primary-container rounded-lg font-label-md text-label-md hover:bg-primary transition-colors shadow-sm" type="submit">
                            Rilis Kampanye
                        </button>
</div>
</form>
</div>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    const token = localStorage.getItem('jwt_token');
    if (!token) {
        window.location.href = '/login';
    }

    // Cek auth & role
    axios.get('/api/profile', { headers: { Authorization: `Bearer ${token}` } })
        .then(res => {
            if (res.data.data.user.role !== 'Campaigner') {
                window.location.href = '/';
            }
        })
        .catch(() => {
            window.location.href = '/login';
        });

    // Image Preview Logic
    const fileInput = document.getElementById('file-upload');
    const imagePreview = document.getElementById('image-preview');
    const uploadPlaceholder = document.getElementById('upload-placeholder');

    fileInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                imagePreview.src = e.target.result;
                imagePreview.classList.remove('hidden');
                uploadPlaceholder.classList.add('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = "";
            imagePreview.classList.add('hidden');
            uploadPlaceholder.classList.remove('hidden');
        }
    });

    const form = document.querySelector('form');
    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        const title = document.getElementById('campaign-title').value;
        const target = document.getElementById('campaign-target').value;
        const desc = document.getElementById('campaign-desc').value;
        const deadline = document.getElementById('campaign-deadline').value;
        const imageFile = document.getElementById('file-upload').files[0];

        if (!title || !target || !desc || !deadline) {
            alert('Harap lengkapi semua field wajib');
            return;
        }

        const formData = new FormData();
        formData.append('title', title);
        formData.append('goal_amount', target);
        formData.append('description', desc);
        formData.append('deadline', deadline);
        if (imageFile) {
            formData.append('image', imageFile);
        }

        const btn = document.getElementById('submit-btn');
        btn.disabled = true;
        btn.textContent = 'Memproses...';

        try {
            const res = await axios.post('/api/campaigns', formData, {
                headers: {
                    Authorization: `Bearer ${token}`,
                    'Content-Type': 'multipart/form-data'
                }
            });
            alert('Kampanye berhasil dibuat!');
            window.location.href = '/cms/dashboard';
        } catch (error) {
            alert('Gagal membuat kampanye: ' + (error.response?.data?.message || 'Error'));
            btn.disabled = false;
            btn.textContent = 'Rilis Kampanye';
        }
    });
    
    document.getElementById('cancel-btn').addEventListener('click', () => {
        window.location.href = '/cms/dashboard';
    });

    function logoutAction() {
        axios.post('/api/logout', {}, { headers: { Authorization: `Bearer ${token}` } }).finally(() => {
            localStorage.removeItem('jwt_token');
            localStorage.removeItem('user');
            localStorage.removeItem('user_name');
            localStorage.removeItem('user_role');
            window.location.href = '/login';
        });
    }
</script>

</body></html>