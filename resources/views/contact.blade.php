<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials._head')
    <title>Hubungi Kami — CharityHub</title>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">

@include('partials._navbar')

<main class="flex-1 w-full">
    {{-- Hero Section --}}
    <section class="w-full relative overflow-hidden bg-gradient-to-br from-primary/5 via-transparent to-secondary-container/5 py-16 md:py-20">
        <div class="px-margin-mobile md:px-margin-desktop flex flex-col items-center text-center max-w-container-max-width mx-auto gap-5 relative z-10 animate-fade-up">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-primary/10 text-primary rounded-full text-label-sm font-semibold border border-primary/20">
                <span class="material-symbols-outlined text-[16px]">forum</span> Kami Siap Membantu
            </span>
            <h1 class="text-display-sm md:text-display-md text-on-surface font-bold leading-tight max-w-3xl">
                Hubungi <span class="text-primary">Tim Kami</span>
            </h1>
            <p class="text-body-lg text-on-surface-variant max-w-2xl leading-relaxed">
                Ada pertanyaan, saran, atau ingin berkolaborasi? Kami dengan senang hati mendengarkan Anda. Tim CharityHub siap merespons dalam 1x24 jam kerja.
            </p>
        </div>
    </section>

    {{-- Contact Cards --}}
    <section class="w-full px-margin-mobile md:px-margin-desktop max-w-container-max-width mx-auto -mt-8 mb-16 relative z-20">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            {{-- Email Card --}}
            <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/10 p-8 text-center shadow-soft card-hover reveal">
                <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center mx-auto mb-5">
                    <span class="material-symbols-outlined text-[28px] text-primary">mail</span>
                </div>
                <h3 class="text-title-lg text-on-surface font-bold mb-2">Email</h3>
                <p class="text-body-md text-on-surface-variant mb-4">Kirim pesan kapan saja</p>
                <a href="mailto:support@charityhub.id" class="text-label-md text-primary hover:underline font-semibold">support@charityhub.id</a>
            </div>

            {{-- Phone Card --}}
            <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/10 p-8 text-center shadow-soft card-hover reveal" style="animation-delay: 100ms;">
                <div class="w-14 h-14 rounded-2xl bg-secondary/10 flex items-center justify-center mx-auto mb-5">
                    <span class="material-symbols-outlined text-[28px] text-secondary">call</span>
                </div>
                <h3 class="text-title-lg text-on-surface font-bold mb-2">Telepon</h3>
                <p class="text-body-md text-on-surface-variant mb-4">Senin - Jumat, 09:00 - 17:00</p>
                <a href="tel:+62215551234" class="text-label-md text-primary hover:underline font-semibold">+62 21 555 1234</a>
            </div>

            {{-- Location Card --}}
            <div class="bg-surface-container-lowest rounded-2xl border border-outline-variant/10 p-8 text-center shadow-soft card-hover reveal" style="animation-delay: 200ms;">
                <div class="w-14 h-14 rounded-2xl bg-tertiary/10 flex items-center justify-center mx-auto mb-5">
                    <span class="material-symbols-outlined text-[28px] text-tertiary">location_on</span>
                </div>
                <h3 class="text-title-lg text-on-surface font-bold mb-2">Kantor</h3>
                <p class="text-body-md text-on-surface-variant mb-4">Kunjungi kami langsung</p>
                <p class="text-label-md text-primary font-semibold">Jl. Kebaikan No. 10, Jakarta</p>
            </div>
        </div>
    </section>

    {{-- Contact Form + FAQ Section --}}
    <section class="w-full px-margin-mobile md:px-margin-desktop py-10 max-w-container-max-width mx-auto mb-20">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10">
            {{-- Left: Contact Form --}}
            <div class="lg:col-span-3 reveal">
                <div class="bg-surface-container-lowest rounded-3xl border border-outline-variant/10 p-8 md:p-10 shadow-medium">
                    <h2 class="text-headline-md text-on-surface font-bold mb-3">Kirim Pesan</h2>
                    <p class="text-body-md text-on-surface-variant mb-8">Isi formulir di bawah ini dan kami akan segera menghubungi Anda kembali.</p>

                    <form id="contactForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="flex flex-col gap-2">
                                <label class="text-label-md text-on-surface font-semibold" for="contact-name">Nama Lengkap <span class="text-error">*</span></label>
                                <input class="w-full px-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md" id="contact-name" name="name" placeholder="Nama Anda" required type="text"/>
                            </div>
                            <div class="flex flex-col gap-2">
                                <label class="text-label-md text-on-surface font-semibold" for="contact-email">Email <span class="text-error">*</span></label>
                                <input class="w-full px-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md" id="contact-email" name="email" placeholder="email@contoh.com" required type="email"/>
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-label-md text-on-surface font-semibold" for="contact-subject">Subjek <span class="text-error">*</span></label>
                            <select class="w-full px-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface text-body-md focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all" id="contact-subject" name="subject" required>
                                <option value="" disabled selected>Pilih topik pesan Anda</option>
                                <option value="donasi">Pertanyaan Donasi</option>
                                <option value="kampanye">Pertanyaan Kampanye</option>
                                <option value="akun">Masalah Akun</option>
                                <option value="kerjasama">Kerjasama / Partnership</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>

                        <div class="flex flex-col gap-2">
                            <label class="text-label-md text-on-surface font-semibold" for="contact-message">Pesan <span class="text-error">*</span></label>
                            <textarea class="w-full px-4 py-3.5 rounded-xl border border-outline-variant/40 bg-surface focus:border-primary focus:ring-2 focus:ring-primary/20 transition-all text-body-md resize-none" id="contact-message" name="message" placeholder="Tulis pesan Anda..." required rows="5"></textarea>
                            <span class="text-right text-label-sm text-outline"><span id="charCount">0</span>/1000</span>
                        </div>

                        <button type="submit" id="submitBtn" class="w-full md:w-auto bg-gradient-to-r from-primary to-primary-dark text-on-primary text-label-md px-8 py-3.5 rounded-xl btn-press font-bold shadow-soft flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[18px]">send</span> Kirim Pesan
                        </button>
                    </form>

                    {{-- Success Message --}}
                    <div id="successMessage" class="hidden mt-8 p-6 bg-success/10 border border-success/20 rounded-2xl text-center">
                        <span class="material-symbols-outlined text-[48px] text-success mb-3 block">check_circle</span>
                        <h3 class="text-title-lg text-success font-bold mb-2">Pesan Terkirim!</h3>
                        <p class="text-body-md text-success-dark">Terima kasih. Tim kami akan merespons dalam 1x24 jam kerja.</p>
                    </div>
                </div>
            </div>

            {{-- Right: FAQ --}}
            <div class="lg:col-span-2 reveal" style="animation-delay: 200ms;">
                <div class="bg-surface-container-lowest rounded-3xl border border-outline-variant/10 p-8 shadow-soft sticky top-[100px]">
                    <h2 class="text-headline-sm text-on-surface font-bold mb-6 flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[28px]">help</span>
                        FAQ
                    </h2>

                    <div class="space-y-4" id="faqList">
                        @foreach([
                            ['Bagaimana cara berdonasi?', 'Pilih kampanye, klik "Donasi Sekarang", tentukan nominal, dan pilih metode pembayaran. Semua transaksi tercatat transparan.'],
                            ['Bagaimana saya menjadi Campaigner?', 'Daftar akun baru dan pilih role "Campaigner". Anda bisa langsung membuat kampanye melalui Dashboard CMS.'],
                            ['Apakah donasi saya aman?', 'Ya, seluruh transaksi menggunakan enkripsi dan setiap rupiah bisa dilacak melalui fitur transparansi dana kami.'],
                            ['Cara melihat penggunaan dana?', 'Buka detail kampanye. Di bagian "Transparansi Dana" Anda bisa melihat riwayat donasi masuk dan pencairan.'],
                        ] as [$q, $a])
                        <div class="border border-outline-variant/10 rounded-xl overflow-hidden bg-surface">
                            <button class="w-full text-left p-4 flex items-center justify-between hover:bg-surface-container-low transition-colors" onclick="toggleFaq(this)">
                                <span class="text-label-md text-on-surface font-semibold pr-4">{{ $q }}</span>
                                <span class="material-symbols-outlined text-[20px] text-primary transition-transform duration-300">expand_more</span>
                            </button>
                            <div class="hidden px-4 pb-4">
                                <p class="text-body-sm text-on-surface-variant leading-relaxed">{{ $a }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@include('partials._footer')

<script>
    function toggleFaq(btn) {
        const answer = btn.nextElementSibling;
        const icon = btn.querySelector('.material-symbols-outlined');
        const isOpen = !answer.classList.contains('hidden');

        // Close all
        document.querySelectorAll('#faqList > div > div').forEach(a => a.classList.add('hidden'));
        document.querySelectorAll('#faqList button .material-symbols-outlined').forEach(i => i.style.transform = 'rotate(0deg)');

        // Toggle current
        if (!isOpen) {
            answer.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        }
    }

    const messageField = document.getElementById('contact-message');
    const charCount = document.getElementById('charCount');
    messageField.addEventListener('input', () => {
        const len = messageField.value.length;
        charCount.textContent = len;
        if (len > 1000) {
            charCount.classList.add('text-error');
            messageField.value = messageField.value.substring(0, 1000);
            charCount.textContent = 1000;
        } else {
            charCount.classList.remove('text-error');
        }
    });

    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault();
        const btn = document.getElementById('submitBtn');
        btn.disabled = true;
        btn.innerHTML = '<span class="material-symbols-outlined text-[18px] animate-spin">progress_activity</span> Mengirim...';

        setTimeout(() => {
            document.getElementById('contactForm').classList.add('hidden');
            document.getElementById('successMessage').classList.remove('hidden');
        }, 1500);
    });
</script>

@include('partials._navbar_js')

</body></html>
