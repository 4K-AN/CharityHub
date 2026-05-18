{{-- Shared Navbar JS — Auth-aware + Mobile Menu --}}
<script>
(function() {
    // Mobile Menu Toggle
    const menuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const menuIcon = document.getElementById('menu-icon');
    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.textContent = mobileMenu.classList.contains('hidden') ? 'menu' : 'close';
        });
    }

    // Auth-aware Navbar: show profile if logged in
    const token = localStorage.getItem('jwt_token');
    if (token) {
        axios.get('/api/profile', { headers: { Authorization: `Bearer ${token}` } })
            .then(res => {
                const user = res.data.data.user;
                localStorage.setItem('user_name', user.name);
                localStorage.setItem('user_role', user.role);
                const profileLink = user.role === 'Campaigner' ? '/cms/dashboard' : '/profile';
                const initials = user.name.split(' ').map(n => n[0]).join('').substring(0, 2).toUpperCase();

                const desktopBtn = document.getElementById('auth-btn-desktop');
                const mobileBtn = document.getElementById('auth-btn-mobile');

                if (desktopBtn) {
                    desktopBtn.innerHTML = `<a href="${profileLink}" class="inline-flex items-center gap-2.5 bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-md px-4 py-2 rounded-xl shadow-soft hover:shadow-glow-primary btn-press font-semibold">
                        <div class="w-7 h-7 rounded-lg bg-white/20 flex items-center justify-center text-xs font-bold">${initials}</div>
                        ${user.name.split(' ')[0]}
                    </a>`;
                }
                if (mobileBtn) {
                    mobileBtn.innerHTML = `<a href="${profileLink}" class="flex items-center justify-center gap-2 px-4 py-3.5 rounded-xl bg-gradient-to-r from-primary to-primary-dark text-on-primary text-center font-semibold text-label-md shadow-soft">
                        <div class="w-7 h-7 rounded-lg bg-white/20 flex items-center justify-center text-xs font-bold">${initials}</div>
                        ${user.name}
                    </a>`;
                }
            })
            .catch(() => {
                localStorage.removeItem('jwt_token');
                localStorage.removeItem('user_name');
                localStorage.removeItem('user_role');
            });
    }

    // Scroll reveal animation
    const revealEls = document.querySelectorAll('.reveal');
    if (revealEls.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
        revealEls.forEach(el => observer.observe(el));
    }
})();
</script>
