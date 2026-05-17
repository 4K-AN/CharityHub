<!DOCTYPE html>
<html lang="id">
<head>
    @include('partials._head')
    <title>About Us — CharityHub</title>
</head>
<body class="bg-background text-on-background antialiased min-h-screen flex flex-col">

@include('partials._navbar')

<main class="flex-1">
    {{-- Hero Section --}}
    <section class="relative w-full h-[520px] flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img alt="Volunteers working together" class="w-full h-full object-cover" src="/images/about-hero.webp"/>
            <div class="absolute inset-0 bg-gradient-to-b from-inverse-surface/70 via-inverse-surface/50 to-inverse-surface/80"></div>
        </div>
        <div class="relative z-10 text-center px-margin-mobile md:px-margin-desktop max-w-container-max-width mx-auto animate-fade-up">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-white/15 backdrop-blur-sm text-white rounded-full text-label-sm mb-6 border border-white/20">
                <span class="material-symbols-outlined text-[16px]">info</span> Tentang Kami
            </span>
            <h1 class="text-display-md md:text-display-lg text-white font-bold mb-6">
                Membangun Kepercayaan<br/>Melalui Transparansi
            </h1>
            <p class="text-body-lg text-white/80 max-w-2xl mx-auto leading-relaxed">
                Di CharityHub, misi kami adalah memastikan setiap donasi dapat dilacak dan berdampak nyata. Transparansi penuh adalah fondasi setiap tindakan kebaikan.
            </p>
        </div>
    </section>

    {{-- Core Values --}}
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop">
        <div class="max-w-container-max-width mx-auto">
            <div class="text-center mb-14 reveal">
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-primary/8 text-primary rounded-full text-label-sm mb-4">
                    <span class="material-symbols-outlined text-[16px]">diamond</span> Nilai Inti
                </span>
                <h2 class="text-headline-lg text-on-surface font-bold mb-3">Prinsip yang Memandu Kami</h2>
                <p class="text-body-md text-on-surface-variant max-w-xl mx-auto">Prinsip yang memandu platform kami untuk menciptakan ekosistem donasi yang lebih baik.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach([
                    ['visibility', '100% Transparan', 'Setiap transaksi dicatat dan dapat dilihat publik. Tidak ada biaya tersembunyi.', 'from-primary to-primary-dark', 'text-primary'],
                    ['shield', 'Aman & Terpercaya', 'Infrastruktur keamanan berlapis menjaga data dan dana donatur tetap aman.', 'from-secondary to-accent-teal', 'text-secondary'],
                    ['timeline', 'Jejak Real-time', 'Lacak aliran dana dari saat didonasikan hingga disalurkan kepada penerima.', 'from-tertiary to-warning', 'text-tertiary'],
                ] as [$icon, $title, $desc, $gradient, $textColor])
                <div class="bg-surface-container-lowest p-8 rounded-2xl shadow-soft border border-outline-variant/10 text-center card-hover reveal">
                    <div class="w-16 h-16 bg-gradient-to-br {{ $gradient }} rounded-2xl flex items-center justify-center mx-auto mb-6 shadow-sm">
                        <span class="material-symbols-outlined text-[32px] text-white filled">{{ $icon }}</span>
                    </div>
                    <h3 class="text-headline-sm text-on-surface font-bold mb-3">{{ $title }}</h3>
                    <p class="text-body-md text-on-surface-variant leading-relaxed">{{ $desc }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Team Section --}}
    <section class="py-section-gap px-margin-mobile md:px-margin-desktop bg-surface-container-low/40">
        <div class="max-w-container-max-width mx-auto">
            <div class="text-center mb-14 reveal">
                <span class="inline-flex items-center gap-2 px-3 py-1.5 bg-accent-purple/8 text-accent-purple rounded-full text-label-sm mb-4">
                    <span class="material-symbols-outlined text-[16px]">group</span> Tim
                </span>
                <h2 class="text-headline-lg text-on-surface font-bold mb-2">Di Balik CharityHub</h2>
                <p class="text-body-lg text-primary font-semibold">Tim Kelompok 9</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach([
                    ['team-1.webp', 'Akhmad Syaiful Anam', 'Backend & Security', 'from-primary to-primary-dark'],
                    ['team-2.webp', 'Angilbert Yohanes Sirait', 'Data & Campaign', 'from-secondary to-accent-teal'],
                    ['team-3.webp', 'Firdaus Dewansyah', 'Ledger & UI', 'from-tertiary to-warning'],
                ] as [$img, $name, $role, $gradient])
                <div class="flex flex-col items-center bg-surface-container-lowest p-8 rounded-2xl shadow-soft border border-outline-variant/10 card-hover reveal">
                    <div class="w-28 h-28 rounded-2xl overflow-hidden mb-6 border-4 border-surface shadow-medium">
                        <img alt="{{ $name }}" class="w-full h-full object-cover" src="/images/{{ $img }}"/>
                    </div>
                    <h4 class="text-headline-sm text-on-surface text-center font-bold mb-2">{{ $name }}</h4>
                    <span class="inline-flex items-center px-3 py-1.5 bg-gradient-to-r {{ $gradient }} text-white rounded-lg text-label-sm font-semibold shadow-sm">{{ $role }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>

@include('partials._footer')
@include('partials._navbar_js')

</body></html>