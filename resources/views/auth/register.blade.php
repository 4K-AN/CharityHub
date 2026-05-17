<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Daftar — CharityHub</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    "primary": "#005d90",
                    "primary-container": "#0077b6",
                    "on-primary": "#ffffff",
                    "on-primary-container": "#f3f7ff",
                    "surface": "#f9f9ff",
                    "surface-container": "#e7eeff",
                    "surface-container-low": "#f0f3ff",
                    "surface-container-lowest": "#ffffff",
                    "on-surface": "#111c2d",
                    "on-surface-variant": "#404850",
                    "outline": "#707881",
                    "outline-variant": "#bfc7d1",
                    "background": "#f9f9ff",
                    "on-background": "#111c2d",
                    "error": "#ba1a1a",
                    "error-container": "#ffdad6",
                },
                spacing: {
                    "margin-mobile": "16px",
                    "margin-desktop": "48px",
                },
                fontFamily: {
                    "body": ["Inter"],
                },
            }
        }
    }
</script>
<style>
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
</style>
</head>
<body class="bg-background font-body min-h-screen flex flex-col">

<!-- Minimal Navbar -->
<nav class="bg-surface/80 backdrop-blur-md sticky top-0 z-50 shadow-sm">
<div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-16 max-w-[1280px] mx-auto">
<div class="flex items-center gap-3">
    <a href="/" class="flex items-center gap-1 text-[14px] text-on-surface-variant hover:text-primary transition-colors font-medium bg-surface-container-low px-3 py-1.5 rounded-full border border-outline-variant/50">
        <span class="material-symbols-outlined text-[18px]">arrow_back</span>
        Kembali
    </a>
    <a href="/" class="text-[24px] font-bold text-primary no-underline ml-2 flex items-center gap-2">
<img src="/images/logo.svg" alt="CharityHub Logo" class="h-8 w-auto">
CharityHub</a>
</div>
<a href="/login" class="text-[14px] text-primary hover:underline font-medium hidden sm:inline-block">Sudah punya akun? Masuk</a>
</div>
</nav>

<!-- Register Form -->
<main class="flex-grow flex items-center justify-center px-margin-mobile md:px-margin-desktop py-12">
<div class="w-full max-w-md">
    <div class="bg-surface-container-lowest rounded-2xl shadow-lg border border-outline-variant/30 p-8 md:p-10">
        <!-- Header -->
        <div class="text-center mb-8">
            <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                <span class="material-symbols-outlined text-[32px] text-primary">person_add</span>
            </div>
            <h1 class="text-[28px] font-bold text-on-surface mb-2">Buat Akun Baru</h1>
            <p class="text-[16px] text-on-surface-variant">Bergabung dan mulai berdonasi dengan transparan</p>
        </div>

        <!-- Alert Container -->
        <div id="alert-container" class="hidden mb-6 p-4 rounded-xl text-[14px] font-medium"></div>

        <!-- Form -->
        <form id="register-form" class="space-y-5">
            <div>
                <label class="block text-[14px] font-medium text-on-surface mb-2" for="name">Nama Lengkap</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
                    <input id="name" type="text" required placeholder="Masukkan nama lengkap"
                        class="w-full pl-10 pr-4 py-3 rounded-xl border-2 border-outline-variant bg-surface text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-[16px]"/>
                </div>
            </div>
            <div>
                <label class="block text-[14px] font-medium text-on-surface mb-2" for="email">Email</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
                    <input id="email" type="email" required placeholder="nama@email.com"
                        class="w-full pl-10 pr-4 py-3 rounded-xl border-2 border-outline-variant bg-surface text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-[16px]"/>
                </div>
            </div>
            <div>
                <label class="block text-[14px] font-medium text-on-surface mb-2" for="role">Daftar Sebagai</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">badge</span>
                    <select id="role" required
                        class="w-full pl-10 pr-4 py-3 rounded-xl border-2 border-outline-variant bg-surface text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-[16px] appearance-none">
                        <option value="Donatur">Donatur — Saya ingin berdonasi</option>
                        <option value="Campaigner">Campaigner — Saya ingin membuat kampanye</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="block text-[14px] font-medium text-on-surface mb-2" for="password">Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                    <input id="password" type="password" required placeholder="Minimal 6 karakter" minlength="6"
                        class="w-full pl-10 pr-12 py-3 rounded-xl border-2 border-outline-variant bg-surface text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-[16px]"/>
                    <button type="button" id="toggle-password" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline hover:text-primary transition-colors">
                        <span class="material-symbols-outlined text-[20px]" id="eye-icon">visibility_off</span>
                    </button>
                </div>
            </div>
            <div>
                <label class="block text-[14px] font-medium text-on-surface mb-2" for="password_confirmation">Konfirmasi Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                    <input id="password_confirmation" type="password" required placeholder="Ulangi password"
                        class="w-full pl-10 pr-4 py-3 rounded-xl border-2 border-outline-variant bg-surface text-on-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-[16px]"/>
                </div>
            </div>

            <button type="submit" id="submit-btn"
                class="w-full py-3.5 rounded-xl bg-primary text-on-primary font-semibold text-[16px] hover:bg-primary-container transition-all duration-200 shadow-md hover:shadow-lg flex items-center justify-center gap-2 disabled:opacity-50 disabled:cursor-not-allowed">
                <span id="btn-text">Daftar Sekarang</span>
                <span id="btn-loading" class="hidden animate-spin material-symbols-outlined text-[20px]">progress_activity</span>
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-[14px] text-on-surface-variant">
                Sudah punya akun?
                <a href="/login" class="text-primary font-semibold hover:underline">Masuk di sini</a>
            </p>
        </div>
    </div>
</div>
</main>

<!-- Footer -->
<footer class="bg-surface-container-low border-t border-outline-variant/20 py-6">
<div class="text-center text-[14px] text-on-surface-variant">
    © 2024 CharityHub. Transparansi dalam Setiap Donasi.
</div>
</footer>

<script>
    // Toggle password visibility
    document.getElementById('toggle-password').addEventListener('click', () => {
        const pwField = document.getElementById('password');
        const eyeIcon = document.getElementById('eye-icon');
        if (pwField.type === 'password') {
            pwField.type = 'text';
            eyeIcon.textContent = 'visibility';
        } else {
            pwField.type = 'password';
            eyeIcon.textContent = 'visibility_off';
        }
    });

    // Show alert
    function showAlert(message, type = 'error') {
        const container = document.getElementById('alert-container');
        container.classList.remove('hidden', 'bg-error-container', 'text-error', 'bg-green-100', 'text-green-800');
        if (type === 'error') {
            container.classList.add('bg-error-container', 'text-error');
        } else {
            container.classList.add('bg-green-100', 'text-green-800');
        }
        container.textContent = message;
    }

    // Register Form Submit
    document.getElementById('register-form').addEventListener('submit', async (e) => {
        e.preventDefault();

        const password = document.getElementById('password').value;
        const confirmation = document.getElementById('password_confirmation').value;

        if (password !== confirmation) {
            showAlert('Password dan konfirmasi password tidak cocok!');
            return;
        }

        const btn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const btnLoading = document.getElementById('btn-loading');

        btn.disabled = true;
        btnText.textContent = 'Memproses...';
        btnLoading.classList.remove('hidden');

        try {
            const response = await axios.post('/api/register', {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                password: password,
                password_confirmation: confirmation,
                role: document.getElementById('role').value,
            });

            if (response.data.success) {
                localStorage.setItem('jwt_token', response.data.token);
                localStorage.setItem('user', JSON.stringify(response.data.user));

                showAlert(`Registrasi berhasil! Selamat datang, ${response.data.user.name}`, 'success');

                setTimeout(() => {
                    if (response.data.user.role === 'Campaigner') {
                        window.location.href = '/cms/dashboard';
                    } else {
                        window.location.href = '/';
                    }
                }, 1000);
            }
        } catch (error) {
            const msg = error.response?.data?.message || 'Terjadi kesalahan. Silakan coba lagi.';
            showAlert(msg, 'error');
            btn.disabled = false;
            btnText.textContent = 'Daftar Sekarang';
            btnLoading.classList.add('hidden');
        }
    });

    // Redirect if already logged in
    if (localStorage.getItem('jwt_token')) {
        axios.get('/api/profile', { headers: { Authorization: `Bearer ${localStorage.getItem('jwt_token')}` } })
            .then(() => { window.location.href = '/'; })
            .catch(() => {
                localStorage.removeItem('jwt_token');
                localStorage.removeItem('user');
                localStorage.removeItem('user_name');
                localStorage.removeItem('user_role');
            });
    }
</script>
</body></html>
