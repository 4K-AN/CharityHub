
<nav class="glass-strong sticky top-0 z-50 border-b border-outline-variant/15">
    <div class="flex justify-between items-center w-full px-margin-mobile md:px-margin-desktop h-[72px] max-w-container-max-width mx-auto">
        
        <a href="/" class="flex items-center gap-2.5 group no-underline">
            <img src="/images/logo.svg" alt="CharityHub Logo" class="h-8 w-auto">
            <span class="text-headline-sm font-bold text-on-surface tracking-tight">Charity<span class="text-primary">Hub</span></span>
        </a>

        
        <div class="hidden md:flex items-center gap-1">
            <?php $currentPath = request()->path(); ?>
            <?php $__currentLoopData = [
                ['/', 'Home', 'home'],
                ['/#campaigns', 'Campaigns', 'volunteer_activism'],
                ['/about', 'About', 'info'],
                ['/contact', 'Contact', 'mail'],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$href, $label, $icon]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e($href); ?>" class="flex items-center gap-1.5 px-4 py-2 rounded-xl text-label-md transition-all duration-200 <?php echo e(($currentPath === trim($href, '/') || ($href === '/' && $currentPath === '')) ? 'text-primary bg-primary/8 font-semibold' : 'text-on-surface-variant hover:text-primary hover:bg-primary/5'); ?>">
                    <span class="material-symbols-outlined text-[18px]"><?php echo e($icon); ?></span>
                    <?php echo e($label); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        
        <div class="hidden md:block" id="auth-btn-desktop">
            <a href="/login" class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-md px-5 py-2.5 rounded-xl shadow-soft hover:shadow-glow-primary btn-press font-semibold">
                <span class="material-symbols-outlined text-[18px]">login</span>
                Login / Daftar
            </a>
        </div>

        
        <button id="mobile-menu-btn" class="md:hidden p-2.5 rounded-xl hover:bg-primary/5 text-on-surface-variant hover:text-primary transition-all" aria-label="Toggle Menu">
            <span class="material-symbols-outlined text-[26px]" id="menu-icon">menu</span>
        </button>
    </div>

    
    <div id="mobile-menu" class="hidden md:hidden border-t border-outline-variant/15 glass-strong">
        <div class="flex flex-col px-margin-mobile py-4 gap-1 max-w-container-max-width mx-auto">
            <?php $__currentLoopData = [
                ['/', 'Home', 'home'],
                ['/#campaigns', 'Campaigns', 'volunteer_activism'],
                ['/about', 'About', 'info'],
                ['/contact', 'Contact', 'mail'],
            ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$href, $label, $icon]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="flex items-center gap-3 px-4 py-3.5 rounded-xl text-label-md transition-all <?php echo e(($currentPath === trim($href, '/') || ($href === '/' && $currentPath === '')) ? 'text-primary bg-primary/8 font-semibold' : 'text-on-surface-variant hover:text-primary hover:bg-primary/5'); ?>" href="<?php echo e($href); ?>">
                    <span class="material-symbols-outlined text-[20px]"><?php echo e($icon); ?></span>
                    <?php echo e($label); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <hr class="border-outline-variant/15 my-2">
            <div id="auth-btn-mobile">
                <a href="/login" class="flex items-center justify-center gap-2 px-4 py-3.5 rounded-xl bg-gradient-to-r from-primary to-primary-dark text-on-primary text-center font-semibold text-label-md shadow-soft">
                    <span class="material-symbols-outlined text-[18px]">login</span>
                    Login / Daftar
                </a>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/partials/_navbar.blade.php ENDPATH**/ ?>