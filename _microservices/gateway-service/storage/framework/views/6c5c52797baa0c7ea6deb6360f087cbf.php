<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                "primary": "#0066CC",
                "primary-light": "#3399FF",
                "primary-dark": "#004C99",
                "primary-container": "#D6EAFF",
                "on-primary": "#ffffff",
                "on-primary-container": "#001D36",
                "secondary": "#00838F",
                "secondary-container": "#B2EBF2",
                "on-secondary": "#ffffff",
                "on-secondary-container": "#003640",
                "tertiary": "#E65100",
                "tertiary-container": "#FFE0B2",
                "on-tertiary": "#ffffff",
                "on-tertiary-container": "#3E1C00",
                "surface": "#FAFCFF",
                "surface-dim": "#D8DDE6",
                "surface-bright": "#FAFCFF",
                "surface-container-lowest": "#FFFFFF",
                "surface-container-low": "#F2F6FC",
                "surface-container": "#ECF1F9",
                "surface-container-high": "#E6ECF5",
                "surface-container-highest": "#DFE5EF",
                "on-surface": "#0F1724",
                "on-surface-variant": "#3F4856",
                "outline": "#6B7588",
                "outline-variant": "#C1C9D6",
                "background": "#FAFCFF",
                "on-background": "#0F1724",
                "error": "#DC2626",
                "error-container": "#FEE2E2",
                "on-error": "#ffffff",
                "on-error-container": "#7F1D1D",
                "inverse-surface": "#1E293B",
                "inverse-on-surface": "#E2E8F0",
                "inverse-primary": "#93C5FD",
                "success": "#059669",
                "success-container": "#D1FAE5",
                "warning": "#D97706",
                "warning-container": "#FEF3C7",
                "accent-purple": "#7C3AED",
                "accent-pink": "#EC4899",
                "accent-teal": "#0D9488",
            },
            borderRadius: {
                "DEFAULT": "0.5rem",
                "lg": "0.75rem",
                "xl": "1rem",
                "2xl": "1.25rem",
                "3xl": "1.5rem",
                "4xl": "2rem",
            },
            spacing: {
                "gutter": "24px",
                "margin-desktop": "64px",
                "container-max-width": "1280px",
                "margin-mobile": "20px",
                "section-gap": "96px",
            },
            fontFamily: {
                "sans": ["Inter", "system-ui", "sans-serif"],
            },
            fontSize: {
                "display-xl": ["64px", { lineHeight: "1.1", letterSpacing: "-0.03em", fontWeight: "800" }],
                "display-lg": ["48px", { lineHeight: "1.15", letterSpacing: "-0.025em", fontWeight: "700" }],
                "display-md": ["36px", { lineHeight: "1.2", letterSpacing: "-0.02em", fontWeight: "700" }],
                "headline-lg": ["32px", { lineHeight: "1.25", letterSpacing: "-0.015em", fontWeight: "700" }],
                "headline-md": ["24px", { lineHeight: "1.3", letterSpacing: "-0.01em", fontWeight: "600" }],
                "headline-sm": ["20px", { lineHeight: "1.35", letterSpacing: "-0.005em", fontWeight: "600" }],
                "title-lg": ["18px", { lineHeight: "1.4", fontWeight: "600" }],
                "title-md": ["16px", { lineHeight: "1.5", fontWeight: "600" }],
                "body-lg": ["18px", { lineHeight: "1.65", fontWeight: "400" }],
                "body-md": ["16px", { lineHeight: "1.6", fontWeight: "400" }],
                "body-sm": ["14px", { lineHeight: "1.5", fontWeight: "400" }],
                "label-lg": ["16px", { lineHeight: "1.5", fontWeight: "500" }],
                "label-md": ["14px", { lineHeight: "1.4", fontWeight: "500" }],
                "label-sm": ["12px", { lineHeight: "1.3", fontWeight: "600" }],
            },
            boxShadow: {
                "soft": "0 2px 16px -2px rgba(15,23,36,0.06), 0 1px 4px -1px rgba(15,23,36,0.04)",
                "medium": "0 4px 24px -4px rgba(15,23,36,0.08), 0 2px 8px -2px rgba(15,23,36,0.04)",
                "elevated": "0 8px 40px -8px rgba(15,23,36,0.12), 0 4px 12px -4px rgba(15,23,36,0.06)",
                "glow-primary": "0 4px 24px -4px rgba(0,102,204,0.25)",
                "glow-success": "0 4px 24px -4px rgba(5,150,105,0.25)",
            },
            animation: {
                "fade-in": "fadeIn 0.5s ease-out forwards",
                "fade-up": "fadeUp 0.6s ease-out forwards",
                "slide-in-left": "slideInLeft 0.5s ease-out forwards",
                "slide-in-right": "slideInRight 0.5s ease-out forwards",
                "pulse-soft": "pulseSoft 3s ease-in-out infinite",
                "float": "float 6s ease-in-out infinite",
                "shimmer": "shimmer 2.5s ease-in-out infinite",
                "gradient": "gradientMove 8s ease-in-out infinite",
            },
            keyframes: {
                fadeIn: { "0%": { opacity: "0" }, "100%": { opacity: "1" } },
                fadeUp: { "0%": { opacity: "0", transform: "translateY(24px)" }, "100%": { opacity: "1", transform: "translateY(0)" } },
                slideInLeft: { "0%": { opacity: "0", transform: "translateX(-24px)" }, "100%": { opacity: "1", transform: "translateX(0)" } },
                slideInRight: { "0%": { opacity: "0", transform: "translateX(24px)" }, "100%": { opacity: "1", transform: "translateX(0)" } },
                pulseSoft: { "0%,100%": { opacity: "0.5" }, "50%": { opacity: "1" } },
                float: { "0%,100%": { transform: "translateY(0)" }, "50%": { transform: "translateY(-12px)" } },
                shimmer: { "0%": { backgroundPosition: "-200% 0" }, "100%": { backgroundPosition: "200% 0" } },
                gradientMove: { "0%,100%": { backgroundPosition: "0% 50%" }, "50%": { backgroundPosition: "100% 50%" } },
            },
        }
    }
}
</script>
<style>
    * { font-family: 'Inter', system-ui, sans-serif; }
    .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
    .material-symbols-outlined.filled { font-variation-settings: 'FILL' 1; }
    
    /* Smooth scrolling */
    html { scroll-behavior: smooth; }
    
    /* Glass morphism utility */
    .glass { background: rgba(255,255,255,0.72); backdrop-filter: blur(20px) saturate(180%); -webkit-backdrop-filter: blur(20px) saturate(180%); }
    .glass-strong { background: rgba(255,255,255,0.88); backdrop-filter: blur(24px) saturate(200%); -webkit-backdrop-filter: blur(24px) saturate(200%); }
    
    /* Gradient text */
    .gradient-text { background: linear-gradient(135deg, #0066CC 0%, #00838F 50%, #0D9488 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    .gradient-text-warm { background: linear-gradient(135deg, #E65100 0%, #D97706 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    
    /* Animated gradient bg */
    .animated-gradient { background: linear-gradient(-45deg, #D6EAFF, #B2EBF2, #FFE0B2, #D1FAE5); background-size: 400% 400%; animation: gradientMove 8s ease infinite; }
    
    /* Card hover lift */
    .card-hover { transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1); }
    .card-hover:hover { transform: translateY(-6px); box-shadow: 0 12px 40px -8px rgba(15,23,36,0.15); }
    
    /* Button press effect */
    .btn-press { transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1); }
    .btn-press:hover { transform: translateY(-2px); }
    .btn-press:active { transform: translateY(0) scale(0.98); }
    
    /* Scroll reveal */
    .reveal { opacity: 0; transform: translateY(20px); transition: all 0.7s cubic-bezier(0.4, 0, 0.2, 1); }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    
    /* Shimmer loading */
    .shimmer-bg { background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%); background-size: 200% 100%; animation: shimmer 2s infinite; }
    
    /* Progress bar animation */
    .progress-fill { transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1); }
    
    /* Star filled */
    .star-filled { font-variation-settings: 'FILL' 1; color: #F59E0B; }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #F2F6FC; }
    ::-webkit-scrollbar-thumb { background: #C1C9D6; border-radius: 999px; }
    ::-webkit-scrollbar-thumb:hover { background: #6B7588; }
</style>
<?php /**PATH E:\GIT\CharityHub\_microservices\gateway-service\resources\views/partials/_head.blade.php ENDPATH**/ ?>