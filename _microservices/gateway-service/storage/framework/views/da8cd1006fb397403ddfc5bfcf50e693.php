<!DOCTYPE html>
<html lang="id">
<head>
    <?php echo $__env->make('partials._head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <title>Login — CharityHub</title>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">

<?php echo $__env->make('partials._navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

<main class="flex-1 flex items-center justify-center px-margin-mobile py-16 relative overflow-hidden">
    
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute -top-32 -right-32 w-[400px] h-[400px] bg-gradient-to-br from-primary/6 to-secondary/6 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-32 -left-32 w-[350px] h-[350px] bg-gradient-to-tr from-tertiary/5 to-accent-pink/5 rounded-full blur-3xl"></div>
    </div>

    <div class="w-full max-w-md relative z-10 animate-fade-up">
        
        <div class="bg-surface-container-lowest rounded-3xl shadow-elevated border border-outline-variant/10 p-8 md:p-10">
            
            <div class="text-center mb-8">
                <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center mx-auto mb-4 shadow-glow-primary">
                    <span class="material-symbols-outlined text-white text-[28px]">login</span>
                </div>
                <h1 class="text-headline-md text-on-surface font-bold">Selamat Datang!</h1>
                <p class="text-body-md text-on-surface-variant mt-2">Masuk ke akun CharityHub Anda</p>
            </div>

            
            <div id="alert-box" class="hidden mb-6 p-4 rounded-xl text-body-sm font-medium border transition-all duration-300"></div>

            
            <form id="loginForm" class="flex flex-col gap-5">
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
                        <input type="password" id="password" required class="w-full pl-11 pr-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md" placeholder="Masukkan password">
                    </div>
                </div>
                <button type="submit" id="loginBtn" class="w-full bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-lg py-4 rounded-xl shadow-glow-primary btn-press font-bold flex items-center justify-center gap-2 mt-2">
                    <span id="btnText">Masuk</span>
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
                Belum punya akun? 
                <a href="/register" class="text-primary font-semibold hover:underline">Daftar Gratis</a>
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

document.getElementById('loginForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = document.getElementById('loginBtn');
    const btnText = document.getElementById('btnText');
    const btnLoading = document.getElementById('btnLoading');

    btn.disabled = true;
    btnText.textContent = 'Memproses...';
    btnLoading.classList.remove('hidden');

    try {
        const response = await axios.post('/api/login', {
            email: document.getElementById('email').value,
            password: document.getElementById('password').value,
        });

        const resData = response.data.data;
        localStorage.setItem('jwt_token', resData.token);
        localStorage.setItem('user', JSON.stringify(resData.user));
        localStorage.setItem('user_name', resData.user.name);
        localStorage.setItem('user_role', resData.user.role);

        showAlert(`Login berhasil! Selamat datang, ${resData.user.name}`, 'success');

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
        btnText.textContent = 'Masuk';
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

</body></html><?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/auth/login.blade.php ENDPATH**/ ?>