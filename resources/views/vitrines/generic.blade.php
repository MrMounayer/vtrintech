<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orbital - Dynamic Landing Page</title>
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
                    animation: {
                        'spin-slow': 'spin 12s linear infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out infinite 2s',
                        'orbit': 'orbit 20s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        orbit: {
                            '0%': { transform: 'rotate(0deg) translateX(120px) rotate(0deg)' },
                            '100%': { transform: 'rotate(360deg) translateX(120px) rotate(-360deg)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap');

        :root {
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #38bdf8;
            --color-surface: #ffffff;
            --color-background: #f8fafc;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text);
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }

        h1, h2, h3, h4, h5, h6 {
            font-family: 'Space Grotesk', sans-serif;
        }

        /* 30 Unique Themes */
        .theme-midnight-ocean {
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #38bdf8;
            --color-surface: #ffffff;
            --color-background: #f8fafc;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        .theme-sunset-boulevard {
            --color-primary: #4c1d95;
            --color-secondary: #be185d;
            --color-accent: #f59e0b;
            --color-surface: #fffbeb;
            --color-background: #fff7ed;
            --color-text: #431407;
            --color-muted: #92400e;
        }

        .theme-forest-haven {
            --color-primary: #14532d;
            --color-secondary: #166534;
            --color-accent: #4ade80;
            --color-surface: #f0fdf4;
            --color-background: #dcfce7;
            --color-text: #052e16;
            --color-muted: #15803d;
        }

        .theme-monochrome-pro {
            --color-primary: #171717;
            --color-secondary: #404040;
            --color-accent: #737373;
            --color-surface: #ffffff;
            --color-background: #f5f5f5;
            --color-text: #0a0a0a;
            --color-muted: #525252;
        }

        .theme-berry-blast {
            --color-primary: #831843;
            --color-secondary: #be185d;
            --color-accent: #f472b6;
            --color-surface: #fdf2f8;
            --color-background: #fce7f3;
            --color-text: #500724;
            --color-muted: #9d174d;
        }

        .theme-deep-space {
            --color-primary: #020617;
            --color-secondary: #1e1b4b;
            --color-accent: #818cf8;
            --color-surface: #0f172a;
            --color-background: #020617;
            --color-text: #e2e8f0;
            --color-muted: #94a3b8;
        }

        .theme-citrus-zest {
            --color-primary: #ea580c;
            --color-secondary: #ca8a04;
            --color-accent: #facc15;
            --color-surface: #fffbeb;
            --color-background: #fefce8;
            --color-text: #422006;
            --color-muted: #a16207;
        }

        .theme-arctic-chill {
            --color-primary: #0c4a6e;
            --color-secondary: #075985;
            --color-accent: #7dd3fc;
            --color-surface: #f0f9ff;
            --color-background: #e0f2fe;
            --color-text: #082f49;
            --color-muted: #0369a1;
        }

        .theme-royal-velvet {
            --color-primary: #3b0764;
            --color-secondary: #5b21b6;
            --color-accent: #d8b4fe;
            --color-surface: #faf5ff;
            --color-background: #f3e8ff;
            --color-text: #2e1065;
            --color-muted: #7e22ce;
        }

        .theme-mint-condition {
            --color-primary: #134e4a;
            --color-secondary: #0f766e;
            --color-accent: #5eead4;
            --color-surface: #f0fdfa;
            --color-background: #ccfbf1;
            --color-text: #042f2e;
            --color-muted: #0d9488;
        }

        .theme-coffee-house {
            --color-primary: #451a03;
            --color-secondary: #78350f;
            --color-accent: #d97706;
            --color-surface: #fffbeb;
            --color-background: #fef3c7;
            --color-text: #451a03;
            --color-muted: #92400e;
        }

        .theme-cyber-neon {
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #22d3ee;
            --color-surface: #1e293b;
            --color-background: #0f172a;
            --color-text: #f1f5f9;
            --color-muted: #94a3b8;
        }

        .theme-rose-garden {
            --color-primary: #881337;
            --color-secondary: #be123c;
            --color-accent: #fb7185;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #4c0519;
            --color-muted: #be123c;
        }

        .theme-slate-minimal {
            --color-primary: #334155;
            --color-secondary: #475569;
            --color-accent: #94a3b8;
            --color-surface: #f8fafc;
            --color-background: #f1f5f9;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        .theme-golden-hour {
            --color-primary: #854d0e;
            --color-secondary: #a16207;
            --color-accent: #eab308;
            --color-surface: #fefce8;
            --color-background: #fef9c3;
            --color-text: #422006;
            --color-muted: #a16207;
        }

        .theme-oceanic-depth {
            --color-primary: #0c4a6e;
            --color-secondary: #075985;
            --color-accent: #0ea5e9;
            --color-surface: #ecfeff;
            --color-background: #cffafe;
            --color-text: #083344;
            --color-muted: #0891b2;
        }

        .theme-cherry-blossom {
            --color-primary: #9f1239;
            --color-secondary: #be123c;
            --color-accent: #fda4af;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #881337;
            --color-muted: #e11d48;
        }

        .theme-emerald-city {
            --color-primary: #064e3b;
            --color-secondary: #065f46;
            --color-accent: #34d399;
            --color-surface: #ecfdf5;
            --color-background: #d1fae5;
            --color-text: #022c22;
            --color-muted: #059669;
        }

        .theme-lavender-dreams {
            --color-primary: #581c87;
            --color-secondary: #7e22ce;
            --color-accent: #c084fc;
            --color-surface: #faf5ff;
            --color-background: #f3e8ff;
            --color-text: #3b0764;
            --color-muted: #9333ea;
        }

        .theme-coral-reef {
            --color-primary: #9f1239;
            --color-secondary: #e11d48;
            --color-accent: #fb7185;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #881337;
            --color-muted: #be123c;
        }

        .theme-volcanic-ash {
            --color-primary: #1c1917;
            --color-secondary: #44403c;
            --color-accent: #f97316;
            --color-surface: #fafaf9;
            --color-background: #f5f5f4;
            --color-text: #0c0a09;
            --color-muted: #78716c;
        }

        .theme-northern-lights {
            --color-primary: #1e1b4b;
            --color-secondary: #312e81;
            --color-accent: #a78bfa;
            --color-surface: #ede9fe;
            --color-background: #ddd6fe;
            --color-text: #1e1b4b;
            --color-muted: #6d28d9;
        }

        .theme-sakura-mochi {
            --color-primary: #be185d;
            --color-secondary: #db2777;
            --color-accent: #f9a8d4;
            --color-surface: #fdf2f8;
            --color-background: #fce7f3;
            --color-text: #831843;
            --color-muted: #db2777;
        }

        .theme-midnight-gold {
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #fbbf24;
            --color-surface: #1e293b;
            --color-background: #0f172a;
            --color-text: #f8fafc;
            --color-muted: #94a3b8;
        }

        .theme-terracotta {
            --color-primary: #7c2d12;
            --color-secondary: #9a3412;
            --color-accent: #fb923c;
            --color-surface: #fff7ed;
            --color-background: #ffedd5;
            --color-text: #431407;
            --color-muted: #c2410c;
        }

        .theme-ice-castle {
            --color-primary: #1e3a8a;
            --color-secondary: #1d4ed8;
            --color-accent: #93c5fd;
            --color-surface: #eff6ff;
            --color-background: #dbeafe;
            --color-text: #1e3a8a;
            --color-muted: #3b82f6;
        }

        .theme-spiced-pumpkin {
            --color-primary: #7c2d12;
            --color-secondary: #c2410c;
            --color-accent: #fb923c;
            --color-surface: #fff7ed;
            --color-background: #ffedd5;
            --color-text: #431407;
            --color-muted: #9a3412;
        }

        .theme-mystic-mint {
            --color-primary: #115e59;
            --color-secondary: #0d9488;
            --color-accent: #5eead4;
            --color-surface: #f0fdfa;
            --color-background: #ccfbf1;
            --color-text: #042f2e;
            --color-muted: #14b8a6;
        }

        .theme-dusty-rose {
            --color-primary: #881337;
            --color-secondary: #be123c;
            --color-accent: #fda4af;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #4c0519;
            --color-muted: #e11d48;
        }

        .theme-cosmic-purple {
            --color-primary: #581c87;
            --color-secondary: #7e22ce;
            --color-accent: #e879f9;
            --color-surface: #fae8ff;
            --color-background: #f0abfc;
            --color-text: #3b0764;
            --color-muted: #a855f7;
        }

        .theme-sage-wisdom {
            --color-primary: #365314;
            --color-secondary: #4d7c0f;
            --color-accent: #a3e635;
            --color-surface: #f7fee7;
            --color-background: #ecfccb;
            --color-text: #1a2e05;
            --color-muted: #65a30d;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .orbital-ring {
            position: absolute;
            border: 2px dashed var(--color-accent);
            border-radius: 50%;
            opacity: 0.3;
        }

        .orbital-dot {
            position: absolute;
            width: 12px;
            height: 12px;
            background: var(--color-accent);
            border-radius: 50%;
            box-shadow: 0 0 20px var(--color-accent);
        }
    </style>
</head>
<body class="theme-midnight-ocean antialiased overflow-x-hidden">

    <!-- Theme Switcher -->
    <div class="fixed top-4 right-4 z-50">
        <div class="relative group">
            <button class="bg-surface text-text p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border-2 border-accent/20 hover:border-accent hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </button>
            <div class="absolute right-0 mt-2 w-56 bg-surface rounded-2xl shadow-2xl border border-accent/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-right max-h-64 overflow-y-auto">
                <div class="p-2 space-y-1" id="themeList"></div>
            </div>
        </div>
    </div>

    <!-- Hero Section with Round Logo -->
    <section class="relative min-h-screen flex items-center justify-center px-4 overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent/10 rounded-full blur-3xl animate-float"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-secondary/20 rounded-full blur-3xl animate-float-delayed"></div>
        </div>

        <div class="relative z-10 text-center max-w-5xl mx-auto">
            <!-- Round Logo with Orbital Animation -->
            <div class="relative w-48 h-48 mx-auto mb-12">
                <!-- Orbital Rings -->
                <div class="orbital-ring w-64 h-64 -top-8 -left-8 animate-spin-slow"></div>
                <div class="orbital-ring w-80 h-80 -top-16 -left-16 animate-spin-slow" style="animation-direction: reverse; animation-duration: 15s;"></div>
                
                <!-- Orbital Dots -->
                <div class="absolute inset-0 animate-orbit">
                    <div class="orbital-dot -top-1 -left-1"></div>
                </div>
                <div class="absolute inset-0 animate-orbit" style="animation-delay: -10s;">
                    <div class="orbital-dot -bottom-1 -right-1 w-8 h-8"></div>
                </div>

                <!-- Main Logo Circle -->
                <div class="relative w-full h-full rounded-full bg-gradient-to-br from-primary via-secondary to-accent p-1 shadow-2xl animate-pulse-slow">
                    <div class="w-full h-full rounded-full bg-surface flex items-center justify-center overflow-hidden">
                        <div class="text-center">
                            <span class="text-6xl font-bold gradient-text">O</span>
                            <div class="text-xs font-semibold text-muted tracking-widest mt-1">RBITAL</div>
                        </div>
                    </div>
                </div>

                <!-- Decorative Ring -->
                <div class="absolute -inset-4 rounded-full border-2 border-accent/20 animate-spin-slow" style="animation-duration: 8s;"></div>
            </div>

            <h1 class="text-5xl sm:text-7xl lg:text-8xl font-bold mb-6 tracking-tight">
                <span class="block text-text">Beyond</span>
                <span class="block gradient-text">Boundaries</span>
            </h1>
            
            <p class="mt-6 text-xl sm:text-2xl text-muted max-w-2xl mx-auto leading-relaxed font-light">
                Elevating digital experiences through innovative design and cutting-edge technology.
            </p>

            <div class="mt-12 flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="px-8 py-4 rounded-full bg-primary text-surface font-semibold text-lg hover:scale-105 hover:shadow-lg transition-all duration-300 flex items-center gap-2 group">
                    Explore Universe
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
                <button class="px-8 py-4 rounded-full border-2 border-primary/20 text-text font-semibold text-lg hover:border-accent hover:text-accent transition-all duration-300">
                    Watch Demo
                </button>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 rounded-full border-2 border-accent/30 flex justify-center pt-2">
                <div class="w-1 h-2 bg-accent rounded-full animate-pulse"></div>
            </div>
        </div>
    </section>

    <!-- Social Links Section -->
    <section class="py-20 px-4 sm:px-6 lg:px-8 bg-surface/50 border-y border-accent/10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-accent font-semibold tracking-wider uppercase text-sm">Stay Connected</span>
                <h2 class="mt-2 text-4xl font-bold text-text">Join Our Galaxy</h2>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6">
                <!-- Facebook -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>

                <!-- TikTok -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </a>

                <!-- Twitter/X -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>

                <!-- YouTube -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>

                <!-- Discord -->
                <a href="#" class="group relative w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg hover:shadow-accent/20 border border-transparent hover:border-accent/30">
                    <div class="absolute inset-0 rounded-2xl bg-gradient-to-br from-accent/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="inline-block px-4 py-1 rounded-full bg-accent/10 text-accent text-sm font-semibold tracking-wide uppercase mb-4">Services</span>
                <h2 class="text-4xl sm:text-5xl font-bold text-text mb-6">Our Expertise</h2>
                <p class="text-xl text-muted max-w-2xl mx-auto">
                    Comprehensive solutions tailored to elevate your digital presence
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service Cards with hover effects -->
                <div class="group relative p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 transition-all duration-500 hover:shadow-2xl hover:shadow-accent/10 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-8 h-8 text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-text mb-3 group-hover:text-accent transition-colors">Rapid Innovation</h3>
                        <p class="text-muted leading-relaxed">
                            Accelerate your growth with cutting-edge technologies and agile methodologies designed for the modern digital landscape.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 transition-all duration-500 hover:shadow-2xl hover:shadow-accent/10 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-8 h-8 text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-text mb-3 group-hover:text-accent transition-colors">Secure Architecture</h3>
                        <p class="text-muted leading-relaxed">
                            Enterprise-grade security solutions protecting your data with advanced encryption and compliance standards.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 transition-all duration-500 hover:shadow-2xl hover:shadow-accent/10 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-8 h-8 text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-text mb-3 group-hover:text-accent transition-colors">Global Scale</h3>
                        <p class="text-muted leading-relaxed">
                            Expand your reach worldwide with localized strategies and infrastructure designed for international markets.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 transition-all duration-500 hover:shadow-2xl hover:shadow-accent/10 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-8 h-8 text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-text mb-3 group-hover:text-accent transition-colors">Creative Design</h3>
                        <p class="text-muted leading-relaxed">
                            Stunning visual experiences crafted by world-class designers to captivate your audience and elevate your brand.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 transition-all duration-500 hover:shadow-2xl hover:shadow-accent/10 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-8 h-8 text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-text mb-3 group-hover:text-accent transition-colors">Data Analytics</h3>
                        <p class="text-muted leading-relaxed">
                            Transform raw data into actionable insights with advanced analytics and visualization tools for informed decisions.
                        </p>
                    </div>
                </div>

                <div class="group relative p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 transition-all duration-500 hover:shadow-2xl hover:shadow-accent/10 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-primary to-secondary flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-lg">
                            <svg class="w-8 h-8 text-surface" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-text mb-3 group-hover:text-accent transition-colors">Community</h3>
                        <p class="text-muted leading-relaxed">
                            Build lasting relationships with your audience through engaging community platforms and social experiences.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-secondary/5"></div>
        <div class="max-w-5xl mx-auto relative z-10">
            <div class="relative bg-surface rounded-[3rem] p-12 sm:p-20 shadow-2xl border border-accent/10 overflow-hidden text-center">
                <!-- Decorative Elements -->
                <div class="absolute top-0 right-0 w-64 h-64 bg-accent/10 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
                <div class="absolute bottom-0 left-0 w-48 h-48 bg-primary/10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
                
                <div class="relative z-10">
                    <h2 class="text-4xl sm:text-6xl font-bold text-text mb-6 leading-tight">
                        Ready to Launch<br>
                        <span class="gradient-text">Your Vision?</span>
                    </h2>
                    <p class="text-xl text-muted mb-10 max-w-2xl mx-auto">
                        Join thousands of innovators who have transformed their digital presence with our solutions.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                        <button class="px-10 py-5 rounded-full bg-gradient-to-r from-primary to-secondary text-surface font-bold text-lg hover:scale-105 hover:shadow-xl transition-all duration-300 flex items-center gap-2 group">
                            Get Started Now
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </button>
                        <button class="px-10 py-5 rounded-full border-2 border-primary/20 text-text font-bold text-lg hover:border-accent hover:text-accent transition-all duration-300">
                            View Pricing
                        </button>
                    </div>
                    
                    <div class="mt-8 flex items-center justify-center gap-6 text-sm text-muted">
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            No credit card required
                        </span>
                        <span class="flex items-center gap-2">
                            <svg class="w-5 h-5 text-accent" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            14-day free trial
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-primary text-surface py-12 px-4 sm:px-6 lg:px-8 border-t border-accent/10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-gradient-to-br from-accent to-secondary flex items-center justify-center">
                    <span class="text-surface font-bold text-lg">O</span>
                </div>
                <span class="font-bold text-2xl tracking-tight">Orbital</span>
            </div>
            
            <div class="flex gap-8 text-sm text-surface/60">
                <a href="#" class="hover:text-accent transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-accent transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-accent transition-colors">Contact</a>
                <a href="#" class="hover:text-accent transition-colors">Support</a>
            </div>
            
            <div class="text-sm text-surface/40">
                © 2024 Orbital. All rights reserved.
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
            { name: 'Volcanic Ash', class: 'theme-volcanic-ash' },
            { name: 'Northern Lights', class: 'theme-northern-lights' },
            { name: 'Sakura Mochi', class: 'theme-sakura-mochi' },
            { name: 'Midnight Gold', class: 'theme-midnight-gold' },
            { name: 'Terracotta', class: 'theme-terracotta' },
            { name: 'Ice Castle', class: 'theme-ice-castle' },
            { name: 'Spiced Pumpkin', class: 'theme-spiced-pumpkin' },
            { name: 'Mystic Mint', class: 'theme-mystic-mint' },
            { name: 'Dusty Rose', class: 'theme-dusty-rose' },
            { name: 'Cosmic Purple', class: 'theme-cosmic-purple' },
            { name: 'Sage Wisdom', class: 'theme-sage-wisdom' }
        ];

        const body = document.body;
        const themeList = document.getElementById('themeList');

        // Initialize theme list
        themes.forEach((theme, index) => {
            const button = document.createElement('button');
            button.className = `w-full text-left px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-accent/10 hover:text-accent flex items-center gap-2 ${index === 0 ? 'bg-accent/10 text-accent' : 'text-text'}`;
            
            // Color preview circle
            const preview = document.createElement('span');
            preview.className = 'w-3 h-3 rounded-full';
            preview.style.background = `var(--color-accent)`;
            
            button.innerHTML = `<span class="w-3 h-3 rounded-full bg-current opacity-50"></span>${theme.name}`;
            button.onclick = () => setTheme(theme.class, button);
            themeList.appendChild(button);
        });

        function setTheme(themeClass, activeButton) {
            themes.forEach(t => body.classList.remove(t.class));
            body.classList.add(themeClass);
            
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

        document.querySelectorAll('.group').forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = `all 0.8s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.1}s`;
            observer.observe(el);
        });
    </script>
</body>
</html>