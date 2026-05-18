
<footer class="bg-inverse-surface text-inverse-on-surface mt-auto">
    <div class="max-w-container-max-width mx-auto px-margin-mobile md:px-margin-desktop py-16">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
            
            <div class="md:col-span-2">
                <div class="flex items-center gap-2.5 mb-4">
                    <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-primary-light to-primary flex items-center justify-center">
                        <span class="material-symbols-outlined text-white text-[20px] filled">favorite</span>
                    </div>
                    <span class="text-headline-sm font-bold text-white tracking-tight">Charity<span class="text-primary-light">Hub</span></span>
                </div>
                <p class="text-body-md text-slate-400 max-w-sm leading-relaxed">
                    Platform donasi terpercaya dengan transparansi penuh. Setiap rupiah Anda dapat dilacak secara real-time.
                </p>
                <div class="flex gap-3 mt-6">
                    <?php $__currentLoopData = ['🌐', '📱', '📧']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $icon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="w-10 h-10 rounded-xl bg-white/10 hover:bg-white/20 flex items-center justify-center cursor-pointer transition-all duration-200">
                        <span class="text-lg"><?php echo e($icon); ?></span>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div>
                <h4 class="text-title-md text-white mb-4">Quick Links</h4>
                <div class="flex flex-col gap-2.5">
                    <?php $__currentLoopData = [
                        ['/', 'Home'],
                        ['/#campaigns', 'Campaigns'],
                        ['/about', 'About Us'],
                        ['/contact', 'Contact'],
                    ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as [$href, $label]): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($href); ?>" class="text-body-sm text-slate-400 hover:text-primary-light transition-colors duration-200"><?php echo e($label); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            
            <div>
                <h4 class="text-title-md text-white mb-4">Legal</h4>
                <div class="flex flex-col gap-2.5">
                    <a href="#" class="text-body-sm text-slate-400 hover:text-primary-light transition-colors duration-200">Terms of Service</a>
                    <a href="#" class="text-body-sm text-slate-400 hover:text-primary-light transition-colors duration-200">Privacy Policy</a>
                    <a href="#" class="text-body-sm text-slate-400 hover:text-primary-light transition-colors duration-200">FAQ</a>
                </div>
            </div>
        </div>

        
        <div class="pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-body-sm text-slate-500">© <?php echo e(date('Y')); ?> CharityHub. Transparansi dalam Setiap Donasi.</p>
            <p class="text-body-sm text-slate-500">Made with <span class="text-red-400">♥</span> for Indonesia</p>
        </div>
    </div>
</footer>
<?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/partials/_footer.blade.php ENDPATH**/ ?>