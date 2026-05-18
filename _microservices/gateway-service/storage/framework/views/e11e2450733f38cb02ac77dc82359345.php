<!DOCTYPE html>
<html lang="id">
<head>
    <?php echo $__env->make('partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <title>Daftar — CharityHub</title>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">

<?php echo $__env->make('partials._navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main class="flex-1 flex items-center justify-center px-margin-mobile py-16 relative overflow-hidden">
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 -left-32 w-[400px] h-[400px] bg-gradient-to-br from-secondary/6 to-primary/6 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -right-32 w-[350px] h-[350px] bg-gradient-to-tr from-accent-purple/5 to-tertiary/5 rounded-full blur-3xl"></div>
    </div>

    <div class="w-full max-w-md relative z-10 animate-fade-up">
        <div class="bg-surface-container-lowest rounded-3xl shadow-elevated border border-outline-variant/10 p-8 md:p-10">
            <div class="text-center mb-8">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-secondary to-accent-teal flex items-center justify-center mx-auto mb-4 shadow-sm">
                    <span class="material-symbols-outlined text-white text-[28px]">person_add</span>
                </div>
                <h1 class="text-headline-md text-on-surface font-bold">Buat Akun Baru</h1>
                <p class="text-body-md text-on-surface-variant mt-2">Mulai perjalanan kebaikan Anda</p>
            </div>

            <div id="alert-box" class="hidden mb-6 p-4 rounded-xl text-body-sm font-medium border transition-all duration-300"></div>

            <form id="registerForm" class="flex flex-col gap-4">
                <div>
                    <label for="name" class="block text-label-md text-on-surface font-semibold mb-2">Nama Lengkap</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">person</span>
                        <input type="text" id="name" required class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md" placeholder="Nama lengkap Anda">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-label-md text-on-surface font-semibold mb-2">Email</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">mail</span>
                        <input type="email" id="email" required class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md" placeholder="nama@email.com">
                    </div>
                </div>
                <div>
                    <label for="password" class="block text-label-md text-on-surface font-semibold mb-2">Password</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                        <input type="password" id="password" required class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md" placeholder="Min. 6 karakter">
                    </div>
                </div>
                <div>
                    <label for="password_confirmation" class="block text-label-md text-on-surface font-semibold mb-2">Konfirmasi Password</label>
                    <div class="relative">
                        <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-outline text-[20px]">lock</span>
                        <input type="password" id="password_confirmation" required class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md" placeholder="Ulangi password">
                    </div>
                </div>
                <div>
                    <label for="role" class="block text-label-md text-on-surface font-semibold mb-2">Saya ingin bergabung sebagai</label>
                    <div class="grid grid-cols-2 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="Donatur" checked class="hidden peer">
                            <div class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-outline-variant/30 peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
                                <span class="material-symbols-outlined text-[24px] text-on-surface-variant peer-checked:text-primary">volunteer_activism</span>
                                <span class="text-label-md font-semibold">Donatur</span>
                            </div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="role" value="Campaigner" class="hidden peer">
                            <div class="flex flex-col items-center gap-2 p-4 rounded-xl border-2 border-outline-variant/30 peer-checked:border-primary peer-checked:bg-primary/5 transition-all">
                                <span class="material-symbols-outlined text-[24px] text-on-surface-variant peer-checked:text-primary">campaign</span>
                                <span class="text-label-md font-semibold">Campaigner</span>
                            </div>
                        </label>
                    </div>
                    
                    <select id="role" class="hidden"><option value="Donatur" selected>Donatur</option><option value="Campaigner">Campaigner</option></select>
                </div>

                <button type="submit" id="registerBtn" class="w-full bg-gradient-to-r from-secondary to-accent-teal text-on-secondary text-label-lg py-4 rounded-xl shadow-sm btn-press font-bold flex items-center justify-center gap-2 mt-2">
                    <span id="btnText">Daftar Sekarang</span>
                    <span id="btnLoading" class="hidden">
                        <span class="material-symbols-outlined animate-spin text-[20px]">progress_activity</span>
                    </span>
                </button>
            </form>

            <div class="flex items-center gap-4 my-6">
                <div class="flex-1 h-px bg-outline-variant/20"></div>
                <span class="text-label-sm text-outline">atau</span>
                <div class="flex-1 h-px bg-outline-variant/20"></div>
            </div>

            <p class="text-center text-body-md text-on-surface-variant">
                Sudah punya akun? 
                <a href="/login" class="text-primary font-semibold hover:underline">Masuk</a>
            </p>
        </div>
    </div>
</main>

<script>
function showAlert(msg, type) {
    const box = document.getElementById('alert-box');
    box.className = `mb-6 p-4 rounded-xl text-body-sm font-medium border transition-all duration-300 ${type === 'success' ? 'bg-success-container text-success border-success/20' : 'bg-error-container text-error border-error/20'}`;
    box.textContent = msg;
    box.classList.remove('hidden');
}

// Sync radio buttons with hidden select
document.querySelectorAll('input[name="role"]').forEach(radio => {
    radio.addEventListener('change', (e) => {
        document.getElementById('role').value = e.target.value;
    });
});

document.getElementById('registerForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const password = document.getElementById('password').value;
    const confirmation = document.getElementById('password_confirmation').value;

    if (password !== confirmation) {
        showAlert('Password dan konfirmasi tidak cocok!', 'error');
        return;
    }
    if (password.length < 6) {
        showAlert('Password minimal 6 karakter!', 'error');
        return;
    }

    const btn = document.getElementById('registerBtn');
    const btnText = document.getElementById('btnText');
    const btnLoading = document.getElementById('btnLoading');

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

        const resData = response.data.data;
        localStorage.setItem('jwt_token', resData.token);
        localStorage.setItem('user', JSON.stringify(resData.user));

        showAlert(`Registrasi berhasil! Selamat datang, ${resData.user.name}`, 'success');

        setTimeout(() => {
            if (resData.user.role === 'Campaigner') {
                window.location.href = '/cms/dashboard';
            } else {
                window.location.href = '/';
            }
        }, 1000);
    } catch (error) {
        const msg = error.response?.data?.error?.message || 'Terjadi kesalahan. Silakan coba lagi.';
        showAlert(msg, 'error');
        btn.disabled = false;
        btnText.textContent = 'Daftar Sekarang';
        btnLoading.classList.add('hidden');
    }
});

if (localStorage.getItem('jwt_token')) {
    axios.get('/api/profile', { headers: { Authorization: `Bearer ${localStorage.getItem('jwt_token')}` } })
        .then(() => { window.location.href = '/'; })
        .catch(() => { localStorage.removeItem('jwt_token'); });
}
</script>

<?php echo $__env->make('partials._navbar_js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

</body></html>
<?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/auth/register.blade.php ENDPATH**/ ?>