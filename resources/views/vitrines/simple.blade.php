<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Themeable Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: 'var(--color-primary)',
                        secondary: 'var(--color-secondary)',
                        accent: 'var(--color-accent)',
                        surface: 'var(--color-surface)',
                        background: 'var(--color-background)',
                        text: 'var(--color-text)',
                        muted: 'var(--color-muted)',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Cal Sans', 'Inter', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.8s ease-out forwards',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        :root {
            /* Default Theme: Midnight Ocean */
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #38bdf8;
            --color-surface: #ffffff;
            --color-background: #f8fafc;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        /* Theme Definitions - 20 Unique Palettes */
        
        /* 1. Midnight Ocean (Default) */
        .theme-midnight-ocean {
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #38bdf8;
            --color-surface: #ffffff;
            --color-background: #f8fafc;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        /* 2. Sunset Boulevard */
        .theme-sunset-boulevard {
            --color-primary: #4c1d95;
            --color-secondary: #be185d;
            --color-accent: #f59e0b;
            --color-surface: #fffbeb;
            --color-background: #fff7ed;
            --color-text: #431407;
            --color-muted: #92400e;
        }

        /* 3. Forest Haven */
        .theme-forest-haven {
            --color-primary: #14532d;
            --color-secondary: #166534;
            --color-accent: #4ade80;
            --color-surface: #f0fdf4;
            --color-background: #dcfce7;
            --color-text: #052e16;
            --color-muted: #15803d;
        }

        /* 4. Monochrome Pro */
        .theme-monochrome-pro {
            --color-primary: #171717;
            --color-secondary: #404040;
            --color-accent: #737373;
            --color-surface: #ffffff;
            --color-background: #f5f5f5;
            --color-text: #0a0a0a;
            --color-muted: #525252;
        }

        /* 5. Berry Blast */
        .theme-berry-blast {
            --color-primary: #831843;
            --color-secondary: #be185d;
            --color-accent: #f472b6;
            --color-surface: #fdf2f8;
            --color-background: #fce7f3;
            --color-text: #500724;
            --color-muted: #9d174d;
        }

        /* 6. Deep Space */
        .theme-deep-space {
            --color-primary: #020617;
            --color-secondary: #1e1b4b;
            --color-accent: #818cf8;
            --color-surface: #0f172a;
            --color-background: #020617;
            --color-text: #e2e8f0;
            --color-muted: #94a3b8;
        }

        /* 7. Citrus Zest */
        .theme-citrus-zest {
            --color-primary: #ea580c;
            --color-secondary: #ca8a04;
            --color-accent: #facc15;
            --color-surface: #fffbeb;
            --color-background: #fefce8;
            --color-text: #422006;
            --color-muted: #a16207;
        }

        /* 8. Arctic Chill */
        .theme-arctic-chill {
            --color-primary: #0c4a6e;
            --color-secondary: #075985;
            --color-accent: #7dd3fc;
            --color-surface: #f0f9ff;
            --color-background: #e0f2fe;
            --color-text: #082f49;
            --color-muted: #0369a1;
        }

        /* 9. Royal Velvet */
        .theme-royal-velvet {
            --color-primary: #3b0764;
            --color-secondary: #5b21b6;
            --color-accent: #d8b4fe;
            --color-surface: #faf5ff;
            --color-background: #f3e8ff;
            --color-text: #2e1065;
            --color-muted: #7e22ce;
        }

        /* 10. Mint Condition */
        .theme-mint-condition {
            --color-primary: #134e4a;
            --color-secondary: #0f766e;
            --color-accent: #5eead4;
            --color-surface: #f0fdfa;
            --color-background: #ccfbf1;
            --color-text: #042f2e;
            --color-muted: #0d9488;
        }

        /* 11. Coffee House */
        .theme-coffee-house {
            --color-primary: #451a03;
            --color-secondary: #78350f;
            --color-accent: #d97706;
            --color-surface: #fffbeb;
            --color-background: #fef3c7;
            --color-text: #451a03;
            --color-muted: #92400e;
        }

        /* 12. Cyber Neon */
        .theme-cyber-neon {
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #22d3ee;
            --color-surface: #1e293b;
            --color-background: #0f172a;
            --color-text: #f1f5f9;
            --color-muted: #94a3b8;
        }

        /* 13. Rose Garden */
        .theme-rose-garden {
            --color-primary: #881337;
            --color-secondary: #be123c;
            --color-accent: #fb7185;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #4c0519;
            --color-muted: #be123c;
        }

        /* 14. Slate Minimal */
        .theme-slate-minimal {
            --color-primary: #334155;
            --color-secondary: #475569;
            --color-accent: #94a3b8;
            --color-surface: #f8fafc;
            --color-background: #f1f5f9;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        /* 15. Golden Hour */
        .theme-golden-hour {
            --color-primary: #854d0e;
            --color-secondary: #a16207;
            --color-accent: #eab308;
            --color-surface: #fefce8;
            --color-background: #fef9c3;
            --color-text: #422006;
            --color-muted: #a16207;
        }

        /* 16. Oceanic Depth */
        .theme-oceanic-depth {
            --color-primary: #0c4a6e;
            --color-secondary: #075985;
            --color-accent: #0ea5e9;
            --color-surface: #ecfeff;
            --color-background: #cffafe;
            --color-text: #083344;
            --color-muted: #0891b2;
        }

        /* 17. Cherry Blossom */
        .theme-cherry-blossom {
            --color-primary: #9f1239;
            --color-secondary: #be123c;
            --color-accent: #fda4af;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #881337;
            --color-muted: #e11d48;
        }

        /* 18. Emerald City */
        .theme-emerald-city {
            --color-primary: #064e3b;
            --color-secondary: #065f46;
            --color-accent: #34d399;
            --color-surface: #ecfdf5;
            --color-background: #d1fae5;
            --color-text: #022c22;
            --color-muted: #059669;
        }

        /* 19. Lavender Dreams */
        .theme-lavender-dreams {
            --color-primary: #581c87;
            --color-secondary: #7e22ce;
            --color-accent: #c084fc;
            --color-surface: #faf5ff;
            --color-background: #f3e8ff;
            --color-text: #3b0764;
            --color-muted: #9333ea;
        }

        /* 20. Coral Reef */
        .theme-coral-reef {
            --color-primary: #9f1239;
            --color-secondary: #e11d48;
            --color-accent: #fb7185;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #881337;
            --color-muted: #be123c;
        }

        /* 21. Thunder Gray */
        .theme-thunder-gray {
            --color-primary: #1f2937;
            --color-secondary: #374151;
            --color-accent: #60a5fa;
            --color-surface: #ffffff;
            --color-background: #f3f4f6;
            --color-text: #111827;
            --color-muted: #6b7280;
        }

        /* 22. Peacock Blue */
        .theme-peacock-blue {
            --color-primary: #0c4a6e;
            --color-secondary: #0369a1;
            --color-accent: #06b6d4;
            --color-surface: #ecfdf5;
            --color-background: #cffafe;
            --color-text: #082f49;
            --color-muted: #0891b2;
        }

        /* 23. Blush Pink */
        .theme-blush-pink {
            --color-primary: #9d174d;
            --color-secondary: #be185d;
            --color-accent: #fbcfe8;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #500724;
            --color-muted: #ec4899;
        }

        /* 24. Sage Green */
        .theme-sage-green {
            --color-primary: #2d5a4e;
            --color-secondary: #4a7c7e;
            --color-accent: #6ee7b7;
            --color-surface: #f0fdf4;
            --color-background: #dcfce7;
            --color-text: #052e16;
            --color-muted: #059669;
        }

        /* 25. Midnight Purple */
        .theme-midnight-purple {
            --color-primary: #312e81;
            --color-secondary: #4c1d95;
            --color-accent: #a78bfa;
            --color-surface: #faf5ff;
            --color-background: #f3e8ff;
            --color-text: #1e1b4b;
            --color-muted: #7c3aed;
        }

        /* 26. Burnt Orange */
        .theme-burnt-orange {
            --color-primary: #7c2d12;
            --color-secondary: #92400e;
            --color-accent: #fb923c;
            --color-surface: #fff7ed;
            --color-background: #fef3c7;
            --color-text: #431407;
            --color-muted: #d97706;
        }

        /* 27. Ice White */
        .theme-ice-white {
            --color-primary: #e0e7ff;
            --color-secondary: #c7d2fe;
            --color-accent: #818cf8;
            --color-surface: #ffffff;
            --color-background: #f8fafc;
            --color-text: #1e1b4b;
            --color-muted: #6366f1;
        }

        /* 28. Deep Red */
        .theme-deep-red {
            --color-primary: #7f1d1d;
            --color-secondary: #991b1b;
            --color-accent: #f87171;
            --color-surface: #fef2f2;
            --color-background: #fee2e2;
            --color-text: #450a0a;
            --color-muted: #dc2626;
        }

        /* 29. Teal Ocean */
        .theme-teal-ocean {
            --color-primary: #134e4a;
            --color-secondary: #0f766e;
            --color-accent: #2dd4bf;
            --color-surface: #f0fdfa;
            --color-background: #ccfbf1;
            --color-text: #042f2e;
            --color-muted: #14b8a6;
        }

        /* 30. Golden Brown */
        .theme-golden-brown {
            --color-primary: #78350f;
            --color-secondary: #92400e;
            --color-accent: #fbbf24;
            --color-surface: #fffbeb;
            --color-background: #fef3c7;
            --color-text: #451a03;
            --color-muted: #d97706;
        }

        /* 31. Crimson Night */
        .theme-crimson-night {
            --color-primary: #4c0519;
            --color-secondary: #831843;
            --color-accent: #f43f5e;
            --color-surface: #1f2937;
            --color-background: #111827;
            --color-text: #f9fafb;
            --color-muted: #d1d5db;
        }

        /* 32. Lime Green */
        .theme-lime-green {
            --color-primary: #365314;
            --color-secondary: #4d7c0f;
            --color-accent: #bef264;
            --color-surface: #f7fee7;
            --color-background: #ecfccb;
            --color-text: #1b2e16;
            --color-muted: #84cc16;
        }

        /* 33. Indigo Sky */
        .theme-indigo-sky {
            --color-primary: #3730a3;
            --color-secondary: #4f46e5;
            --color-accent: #818cf8;
            --color-surface: #eef2ff;
            --color-background: #e0e7ff;
            --color-text: #1e1b4b;
            --color-muted: #6366f1;
        }

        /* 34. Warm Beige */
        .theme-warm-beige {
            --color-primary: #78521f;
            --color-secondary: #a16207;
            --color-accent: #fde047;
            --color-surface: #fdfbf7;
            --color-background: #fef9e7;
            --color-text: #3f2817;
            --color-muted: #ca8a04;
        }

        /* 35. Neon Pink */
        .theme-neon-pink {
            --color-primary: #be123c;
            --color-secondary: #ec4899;
            --color-accent: #f72585;
            --color-surface: #fdf1f5;
            --color-background: #fecdd3;
            --color-text: #500724;
            --color-muted: #db2777;
        }

        /* 36. Forest Dark */
        .theme-forest-dark {
            --color-primary: #05382f;
            --color-secondary: #0f766e;
            --color-accent: #14b8a6;
            --color-surface: #1e3a3a;
            --color-background: #0d2e2e;
            --color-text: #d0f0ed;
            --color-muted: #5eead4;
        }

        /* 37. Bronze Age */
        .theme-bronze-age {
            --color-primary: #6b4423;
            --color-secondary: #8b5a3c;
            --color-accent: #d4a574;
            --color-surface: #fffaf0;
            --color-background: #fdf3e7;
            --color-text: #3e2817;
            --color-muted: #a16207;
        }

        /* 38. Aqua Fresh */
        .theme-aqua-fresh {
            --color-primary: #006064;
            --color-secondary: #00838f;
            --color-accent: #4dd0e1;
            --color-surface: #e0f2f1;
            --color-background: #b2dfdb;
            --color-text: #004d40;
            --color-muted: #00897b;
        }

        /* 39. Plum Velvet */
        .theme-plum-velvet {
            --color-primary: #4a148c;
            --color-secondary: #6a1b9a;
            --color-accent: #ce93d8;
            --color-surface: #f3e5f5;
            --color-background: #e1bee7;
            --color-text: #2a0845;
            --color-muted: #ab47bc;
        }

        /* 40. Sunset Orange */
        .theme-sunset-orange {
            --color-primary: #c65911;
            --color-secondary: #d84315;
            --color-accent: #ffab40;
            --color-surface: #fff3e0;
            --color-background: #ffe0b2;
            --color-text: #3e2723;
            --color-muted: #ff6f00;
        }

        body {
            background-color: var(--color-background);
            color: var(--color-text);
            transition: background-color 0.5s ease, color 0.5s ease;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .theme-transition {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col theme-midnight-ocean selection:bg-accent selection:text-primary overflow-x-hidden">

    <!-- Theme Switcher -->
    <div class="fixed top-4 right-4 z-50">
        <div class="relative group">
            <button class="bg-surface text-text p-3 rounded-full shadow-lg hover:shadow-xl theme-transition border border-accent/20 hover:scale-110 active:scale-95">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </button>
            <div class="absolute right-0 mt-2 w-56 bg-surface rounded-xl shadow-2xl border border-accent/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right max-h-64 overflow-y-auto">
                <div class="p-2 space-y-1" id="themeList">
                    <!-- Themes injected via JS -->
                </div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative flex-1 flex flex-col items-center justify-center min-h-[90vh] px-4 sm:px-6 lg:px-8 overflow-hidden">
        <!-- Decorative Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-1/2 -left-1/2 w-full h-full bg-accent/5 rounded-full blur-3xl animate-float"></div>
            <div class="absolute -bottom-1/2 -right-1/2 w-full h-full bg-secondary/10 rounded-full blur-3xl animate-float" style="animation-delay: 2s;"></div>
        </div>

        <div class="relative z-10 text-center max-w-4xl mx-auto animate-fade-in">
            <!-- Logo Image -->
            <div class="mb-8 animate-slide-up" style="animation-delay: 0.05s;">
                <img src="https://via.placeholder.com/120/0f172a/38bdf8?text=LOGO" alt="Logo" class="w-24 h-24 rounded-full border-4 border-accent/20 shadow-lg shadow-accent/10 mx-auto object-cover hover:scale-110 transition-transform duration-300">
            </div>
            
            <div class="inline-block mb-4 px-4 py-1.5 rounded-full bg-accent/10 text-accent text-sm font-semibold tracking-wide uppercase border border-accent/20 animate-slide-up" style="animation-delay: 0.1s;">
                Welcome to the Future
            </div>
            <h1 class="text-5xl sm:text-7xl lg:text-8xl font-bold tracking-tight mb-6 animate-slide-up" style="animation-delay: 0.2s;">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-primary via-accent to-secondary">
                    Create Without Limits
                </span>
            </h1>
            <p class="mt-4 text-xl sm:text-2xl text-muted max-w-2xl mx-auto leading-relaxed animate-slide-up" style="animation-delay: 0.3s;">
                Experience the perfect blend of design and functionality. 
                Transform your digital presence with our innovative solutions.
            </p>
            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center animate-slide-up" style="animation-delay: 0.4s;">
                <button class="px-8 py-4 rounded-full bg-primary text-surface font-semibold text-lg hover:scale-105 hover:shadow-lg hover:shadow-primary/25 transition-all duration-300">
                    Get Started
                </button>
                <button class="px-8 py-4 rounded-full bg-surface text-text font-semibold text-lg border-2 border-primary/10 hover:border-accent hover:text-accent transition-all duration-300">
                    Learn More
                </button>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-muted" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </section>

    <!-- Social Links Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-surface/50 border-y border-accent/10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-text mb-4">Connect With Us</h2>
                <p class="text-muted">Follow our journey across all platforms</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6">
                <!-- Facebook -->
                <a href="#" class="group flex flex-col items-center p-6 rounded-2xl bg-background hover:bg-accent/10 border border-transparent hover:border-accent/20 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-3 group-hover:bg-accent group-hover:text-surface transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-surface" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-text">Facebook</span>
                </a>

                <!-- Instagram -->
                <a href="#" class="group flex flex-col items-center p-6 rounded-2xl bg-background hover:bg-accent/10 border border-transparent hover:border-accent/20 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-3 group-hover:bg-accent group-hover:text-surface transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-surface" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-text">Instagram</span>
                </a>

                <!-- TikTok -->
                <a href="#" class="group flex flex-col items-center p-6 rounded-2xl bg-background hover:bg-accent/10 border border-transparent hover:border-accent/20 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-3 group-hover:bg-accent group-hover:text-surface transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-surface" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-text">TikTok</span>
                </a>

                <!-- WhatsApp -->
                <a href="#" class="group flex flex-col items-center p-6 rounded-2xl bg-background hover:bg-accent/10 border border-transparent hover:border-accent/20 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-3 group-hover:bg-accent group-hover:text-surface transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-surface" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-text">WhatsApp</span>
                </a>

                <!-- Twitter/X -->
                <a href="#" class="group flex flex-col items-center p-6 rounded-2xl bg-background hover:bg-accent/10 border border-transparent hover:border-accent/20 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-3 group-hover:bg-accent group-hover:text-surface transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-surface" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-text">Twitter</span>
                </a>

                <!-- LinkedIn -->
                <a href="#" class="group flex flex-col items-center p-6 rounded-2xl bg-background hover:bg-accent/10 border border-transparent hover:border-accent/20 transition-all duration-300 hover:-translate-y-1">
                    <div class="w-12 h-12 rounded-full bg-primary/10 flex items-center justify-center mb-3 group-hover:bg-accent group-hover:text-surface transition-colors">
                        <svg class="w-6 h-6 text-primary group-hover:text-surface" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                        </svg>
                    </div>
                    <span class="font-medium text-text">LinkedIn</span>
                </a>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-accent font-semibold tracking-wider uppercase text-sm">Our Expertise</span>
                <h2 class="mt-2 text-4xl sm:text-5xl font-bold text-text">What We Do</h2>
                <p class="mt-4 text-xl text-muted max-w-2xl mx-auto">
                    We provide comprehensive solutions to help your business thrive in the digital landscape.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl hover:shadow-accent/5 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7 text-accent group-hover:text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text mb-3">Strategic Innovation</h3>
                    <p class="text-muted leading-relaxed">
                        Leveraging cutting-edge technologies to drive business growth and operational excellence through tailored strategies.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl hover:shadow-accent/5 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7 text-accent group-hover:text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text mb-3">Digital Architecture</h3>
                    <p class="text-muted leading-relaxed">
                        Building robust, scalable digital infrastructures that support your business needs today and anticipate tomorrow's demands.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl hover:shadow-accent/5 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7 text-accent group-hover:text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text mb-3">Rapid Deployment</h3>
                    <p class="text-muted leading-relaxed">
                        Accelerating your time-to-market with agile methodologies and efficient implementation processes that deliver results fast.
                    </p>
                </div>

                <!-- Card 4 -->
                <div class="group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl hover:shadow-accent/5 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7 text-accent group-hover:text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text mb-3">Community Building</h3>
                    <p class="text-muted leading-relaxed">
                        Creating engaging experiences that foster loyal communities around your brand and drive meaningful customer relationships.
                    </p>
                </div>

                <!-- Card 5 -->
                <div class="group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl hover:shadow-accent/5 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7 text-accent group-hover:text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text mb-3">Secure Solutions</h3>
                    <p class="text-muted leading-relaxed">
                        Implementing enterprise-grade security measures to protect your data and ensure compliance with industry standards.
                    </p>
                </div>

                <!-- Card 6 -->
                <div class="group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl hover:shadow-accent/5 transition-all duration-300 hover:-translate-y-2">
                    <div class="w-14 h-14 rounded-2xl bg-accent/10 flex items-center justify-center mb-6 group-hover:bg-accent group-hover:scale-110 transition-all duration-300">
                        <svg class="w-7 h-7 text-accent group-hover:text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-text mb-3">Global Reach</h3>
                    <p class="text-muted leading-relaxed">
                        Expanding your business horizons with localized strategies and international market expertise for worldwide growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-primary to-secondary opacity-5"></div>
        <div class="max-w-5xl mx-auto relative z-10">
            <div class="bg-surface rounded-3xl p-8 sm:p-16 shadow-2xl border border-accent/10 text-center relative overflow-hidden">
                <!-- Decorative Elements -->
                <div class="absolute top-0 left-0 w-32 h-32 bg-accent/10 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
                <div class="absolute bottom-0 right-0 w-48 h-48 bg-accent/5 rounded-full translate-x-1/3 translate-y-1/3"></div>
                
                <div class="relative z-10">
                    <h2 class="text-4xl sm:text-5xl font-bold text-text mb-6">
                        Ready to Transform Your Business?
                    </h2>
                    <p class="text-xl text-muted mb-10 max-w-2xl mx-auto">
                        Join thousands of satisfied clients who have elevated their digital presence with our innovative solutions.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <button class="px-10 py-4 rounded-full bg-accent text-primary font-bold text-lg hover:scale-105 hover:shadow-lg hover:shadow-accent/25 transition-all duration-300">
                            Start Your Journey
                        </button>
                        <button class="px-10 py-4 rounded-full bg-transparent border-2 border-primary/20 text-text font-bold text-lg hover:border-accent hover:text-accent transition-all duration-300">
                            Schedule a Demo
                        </button>
                    </div>
                    <p class="mt-6 text-sm text-muted">
                        No credit card required. 14-day free trial.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary text-surface py-12 px-4 sm:px-6 lg:px-8 border-t border-accent/10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-lg bg-accent flex items-center justify-center">
                    <span class="text-primary font-bold text-lg">L</span>
                </div>
                <span class="font-bold text-xl tracking-tight">Lumina</span>
            </div>
            
            <div class="flex gap-8 text-sm text-surface/60">
                <a href="#" class="hover:text-accent transition-colors">Privacy</a>
                <a href="#" class="hover:text-accent transition-colors">Terms</a>
                <a href="#" class="hover:text-accent transition-colors">Contact</a>
            </div>
            
            <div class="text-sm text-surface/40">
                © 2024 Lumina. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Theme Management
        const themes = [
            { name: 'Midnight Ocean', class: 'theme-midnight-ocean' },
            { name: 'Sunset Boulevard', class: 'theme-sunset-boulevard' },
            { name: 'Forest Haven', class: 'theme-forest-haven' },
            { name: 'Monochrome Pro', class: 'theme-monochrome-pro' },
            { name: 'Berry Blast', class: 'theme-berry-blast' },
            { name: 'Deep Space', class: 'theme-deep-space' },
            { name: 'Citrus Zest', class: 'theme-citrus-zest' },
            { name: 'Arctic Chill', class: 'theme-arctic-chill' },
            { name: 'Royal Velvet', class: 'theme-royal-velvet' },
            { name: 'Mint Condition', class: 'theme-mint-condition' },
            { name: 'Coffee House', class: 'theme-coffee-house' },
            { name: 'Cyber Neon', class: 'theme-cyber-neon' },
            { name: 'Rose Garden', class: 'theme-rose-garden' },
            { name: 'Slate Minimal', class: 'theme-slate-minimal' },
            { name: 'Golden Hour', class: 'theme-golden-hour' },
            { name: 'Oceanic Depth', class: 'theme-oceanic-depth' },
            { name: 'Cherry Blossom', class: 'theme-cherry-blossom' },
            { name: 'Emerald City', class: 'theme-emerald-city' },
            { name: 'Lavender Dreams', class: 'theme-lavender-dreams' },
            { name: 'Coral Reef', class: 'theme-coral-reef' },
            { name: 'Thunder Gray', class: 'theme-thunder-gray' },
            { name: 'Peacock Blue', class: 'theme-peacock-blue' },
            { name: 'Blush Pink', class: 'theme-blush-pink' },
            { name: 'Sage Green', class: 'theme-sage-green' },
            { name: 'Midnight Purple', class: 'theme-midnight-purple' },
            { name: 'Burnt Orange', class: 'theme-burnt-orange' },
            { name: 'Ice White', class: 'theme-ice-white' },
            { name: 'Deep Red', class: 'theme-deep-red' },
            { name: 'Teal Ocean', class: 'theme-teal-ocean' },
            { name: 'Golden Brown', class: 'theme-golden-brown' },
            { name: 'Crimson Night', class: 'theme-crimson-night' },
            { name: 'Lime Green', class: 'theme-lime-green' },
            { name: 'Indigo Sky', class: 'theme-indigo-sky' },
            { name: 'Warm Beige', class: 'theme-warm-beige' },
            { name: 'Neon Pink', class: 'theme-neon-pink' },
            { name: 'Forest Dark', class: 'theme-forest-dark' },
            { name: 'Bronze Age', class: 'theme-bronze-age' },
            { name: 'Aqua Fresh', class: 'theme-aqua-fresh' },
            { name: 'Plum Velvet', class: 'theme-plum-velvet' },
            { name: 'Sunset Orange', class: 'theme-sunset-orange' }
        ];

        const body = document.body;
        const themeList = document.getElementById('themeList');

        // Initialize theme list
        themes.forEach((theme, index) => {
            const button = document.createElement('button');
            button.className = `w-full text-left px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-accent/10 hover:text-accent ${index === 0 ? 'bg-accent/10 text-accent' : 'text-text'}`;
            button.textContent = theme.name;
            button.onclick = () => setTheme(theme.class, button);
            themeList.appendChild(button);
        });

        function setTheme(themeClass, activeButton) {
            // Remove all theme classes
            themes.forEach(t => body.classList.remove(t.class));
            
            // Add new theme class
            body.classList.add(themeClass);
            
            // Update active state in dropdown
            Array.from(themeList.children).forEach(btn => {
                btn.classList.remove('bg-accent/10', 'text-accent');
                btn.classList.add('text-text');
            });
            activeButton.classList.remove('text-text');
            activeButton.classList.add('bg-accent/10', 'text-accent');
        }

        // Intersection Observer for scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe all cards
        document.querySelectorAll('.group').forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = `all 0.6s ease ${index * 0.1}s`;
            observer.observe(el);
        });
    </script>
</body>
</html>