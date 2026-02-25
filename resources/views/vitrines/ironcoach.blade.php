<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iron Pulse Fitness - Transform Your Body</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
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
                        display: ['Bebas Neue', 'sans-serif'],
                        body: ['Inter', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-primary: #dc2626;
            --color-secondary: #991b1b;
            --color-accent: #fbbf24;
            --color-surface: #0f172a;
            --color-background: #020617;
            --color-text: #f8fafc;
            --color-muted: #94a3b8;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text);
            transition: all 0.5s ease;
        }

        .font-display {
            font-family: 'Bebas Neue', sans-serif;
            letter-spacing: 0.02em;
        }

        /* 30 Fitness Energy Themes */
        .theme-red-energy {
            --color-primary: #dc2626;
            --color-secondary: #991b1b;
            --color-accent: #fbbf24;
            --color-surface: #0f172a;
            --color-background: #020617;
            --color-text: #f8fafc;
            --color-muted: #94a3b8;
        }

        .theme-orange-fire {
            --color-primary: #ea580c;
            --color-secondary: #c2410c;
            --color-accent: #f97316;
            --color-surface: #1c1917;
            --color-background: #0c0a09;
            --color-text: #fafaf9;
            --color-muted: #a8a29e;
        }

        .theme-yellow-power {
            --color-primary: #eab308;
            --color-secondary: #ca8a04;
            --color-accent: #facc15;
            --color-surface: #1c1917;
            --color-background: #0c0a09;
            --color-text: #fafaf9;
            --color-muted: #a8a29e;
        }

        .theme-green-strength {
            --color-primary: #16a34a;
            --color-secondary: #15803d;
            --color-accent: #4ade80;
            --color-surface: #052e16;
            --color-background: #022c22;
            --color-text: #f0fdf4;
            --color-muted: #86efac;
        }

        .theme-blue-ice {
            --color-primary: #0ea5e9;
            --color-secondary: #0284c7;
            --color-accent: #38bdf8;
            --color-surface: #082f49;
            --color-background: #0c4a6e;
            --color-text: #f0f9ff;
            --color-muted: #7dd3fc;
        }

        .theme-purple-storm {
            --color-primary: #7c3aed;
            --color-secondary: #6d28d9;
            --color-accent: #a78bfa;
            --color-surface: #2e1065;
            --color-background: #1e1b4b;
            --color-text: #f5f3ff;
            --color-muted: #c4b5fd;
        }

        .theme-pink-fury {
            --color-primary: #db2777;
            --color-secondary: #be185d;
            --color-accent: #f472b6;
            --color-surface: #831843;
            --color-background: #500724;
            --color-text: #fdf2f8;
            --color-muted: #f9a8d4;
        }

        .theme-cyan-electric {
            --color-primary: #06b6d4;
            --color-secondary: #0891b2;
            --color-accent: #22d3ee;
            --color-surface: #164e63;
            --color-background: #083344;
            --color-text: #ecfeff;
            --color-muted: #67e8f9;
        }

        .theme-lime-toxic {
            --color-primary: #65a30d;
            --color-secondary: #4d7c0f;
            --color-accent: #a3e635;
            --color-surface: #1a2e05;
            --color-background: #0f1a03;
            --color-text: #f7fee7;
            --color-muted: #bef264;
        }

        .theme-amber-heat {
            --color-primary: #d97706;
            --color-secondary: #b45309;
            --color-accent: #fbbf24;
            --color-surface: #451a03;
            --color-background: #281003;
            --color-text: #fffbeb;
            --color-muted: #fcd34d;
        }

        .theme-rose-combat {
            --color-primary: #e11d48;
            --color-secondary: #be123c;
            --color-accent: #fb7185;
            --color-surface: #881337;
            --color-background: #4c0519;
            --color-text: #fff1f2;
            --color-muted: #fda4af;
        }

        .theme-indigo-night {
            --color-primary: #4338ca;
            --color-secondary: #3730a3;
            --color-accent: #818cf8;
            --color-surface: #1e1b4b;
            --color-background: #0f172a;
            --color-text: #eef2ff;
            --color-muted: #a5b4fc;
        }

        .theme-teal-ocean {
            --color-primary: #0d9488;
            --color-secondary: #0f766e;
            --color-accent: #2dd4bf;
            --color-surface: #042f2e;
            --color-background: #011c1b;
            --color-text: #f0fdfa;
            --color-muted: #5eead4;
        }

        .theme-fuchsia-neon {
            --color-primary: #c026d3;
            --color-secondary: #a21caf;
            --color-accent: #e879f9;
            --color-surface: #4a044e;
            --color-background: #2a0a31;
            --color-text: #fdf4ff;
            --color-muted: #f0abfc;
        }

        .theme-slate-steel {
            --color-primary: #475569;
            --color-secondary: #334155;
            --color-accent: #94a3b8;
            --color-surface: #0f172a;
            --color-background: #020617;
            --color-text: #f8fafc;
            --color-muted: #cbd5e1;
        }

        .theme-emerald-beast {
            --color-primary: #059669;
            --color-secondary: #047857;
            --color-accent: #34d399;
            --color-surface: #022c22;
            --color-background: #011a15;
            --color-text: #ecfdf5;
            --color-muted: #6ee7b7;
        }

        .theme-sky-limit {
            --color-primary: #0284c7;
            --color-secondary: #0369a1;
            --color-accent: #7dd3fc;
            --color-surface: #0c4a6e;
            --color-background: #082f49;
            --color-text: #f0f9ff;
            --color-muted: #bae6fd;
        }

        .theme-violet-lightning {
            --color-primary: #7c3aed;
            --color-secondary: #6d28d9;
            --color-accent: #c4b5fd;
            --color-surface: #3b0764;
            --color-background: #1e0350;
            --color-text: #f5f3ff;
            --color-muted: #ddd6fe;
        }

        .theme-orange-sunset {
            --color-primary: #f97316;
            --color-secondary: #ea580c;
            --color-accent: #fdba74;
            --color-surface: #7c2d12;
            --color-background: #431407;
            --color-text: #fff7ed;
            --color-muted: #fed7aa;
        }

        .theme-red-blood {
            --color-primary: #b91c1c;
            --color-secondary: #991b1b;
            --color-accent: #fca5a5;
            --color-surface: #450a0a;
            --color-background: #280505;
            --color-text: #fef2f2;
            --color-muted: #fecaca;
        }

        .theme-gold-champion {
            --color-primary: #ca8a04;
            --color-secondary: #a16207;
            --color-accent: #facc15;
            --color-surface: #422006;
            --color-background: #281303;
            --color-text: #fefce8;
            --color-muted: #fde047;
        }

        .theme-silver-titanium {
            --color-primary: #64748b;
            --color-secondary: #475569;
            --color-accent: #cbd5e1;
            --color-surface: #0f172a;
            --color-background: #020617;
            --color-text: #f8fafc;
            --color-muted: #e2e8f0;
        }

        .theme-bronze-iron {
            --color-primary: #92400e;
            --color-secondary: #78350f;
            --color-accent: #d97706;
            --color-surface: #451a03;
            --color-background: #281003;
            --color-text: #fffbeb;
            --color-muted: #fbbf24;
        }

        .theme-magenta-rage {
            --color-primary: #c026d3;
            --color-secondary: #a21caf;
            --color-accent: #f0abfc;
            --color-surface: #4a044e;
            --color-background: #2e0532;
            --color-text: #fdf4ff;
            --color-muted: #e879f9;
        }

        .theme-chartreuse-venom {
            --color-primary: #84cc16;
            --color-secondary: #65a30d;
            --color-accent: #d9f99d;
            --color-surface: #1a2e05;
            --color-background: #0f1a03;
            --color-text: #f7fee7;
            --color-muted: #bef264;
        }

        .theme-crimson-warrior {
            --color-primary: #9f1239;
            --color-secondary: #881337;
            --color-accent: #fda4af;
            --color-surface: #4c0519;
            --color-background: #2d0210;
            --color-text: #fff1f2;
            --color-muted: #fecdd3;
        }

        .theme-navy-seal {
            --color-primary: #1e3a8a;
            --color-secondary: #1e40af;
            --color-accent: #60a5fa;
            --color-surface: #172554;
            --color-background: #0a1a4d;
            --color-text: #eff6ff;
            --color-muted: #93c5fd;
        }

        .theme-forest-camo {
            --color-primary: #3f6212;
            --color-secondary: #365314;
            --color-accent: #a3e635;
            --color-surface: #1a2e05;
            --color-background: #0f1a03;
            --color-text: #f7fee7;
            --color-muted: #bef264;
        }

        .theme-white-lightning {
            --color-primary: #f8fafc;
            --color-secondary: #e2e8f0;
            --color-accent: #3b82f6;
            --color-surface: #1e293b;
            --color-background: #0f172a;
            --color-text: #f1f5f9;
            --color-muted: #94a3b8;
        }

        .theme-black-panther {
            --color-primary: #171717;
            --color-secondary: #262626;
            --color-accent: #525252;
            --color-surface: #0a0a0a;
            --color-background: #000000;
            --color-text: #fafafa;
            --color-muted: #737373;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--color-accent), var(--color-primary));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glow-effect {
            box-shadow: 0 0 20px var(--color-accent);
        }

        .muscle-path {
            stroke-dasharray: 1000;
            stroke-dashoffset: 1000;
            animation: draw 3s ease-in-out forwards;
        }

        @keyframes draw {
            to {
                stroke-dashoffset: 0;
            }
        }

        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 0.8;
            }
            100% {
                transform: scale(1.3);
                opacity: 0;
            }
        }
    </style>
</head>
<body class="theme-red-energy antialiased">

    <!-- Theme Switcher -->
    <div class="fixed top-4 right-4 z-50">
        <div class="relative group">
            <button class="bg-surface text-text p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-accent/20 hover:border-accent hover:scale-110">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                </svg>
            </button>
            <div class="absolute right-0 mt-2 w-56 bg-surface rounded-xl shadow-2xl border border-accent/10 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 origin-top-right max-h-64 overflow-y-auto">
                <div class="p-2 space-y-1" id="themeList"></div>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center px-4 overflow-hidden">
        <!-- Dynamic Background -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-br from-primary/20 via-background to-secondary/20"></div>
            <div class="absolute top-0 left-0 w-full h-full opacity-30">
                <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <pattern id="hexagons" width="10" height="10" patternUnits="userSpaceOnUse" patternTransform="scale(2)">
                        <path d="M5 0L10 2.5V7.5L5 10L0 7.5V2.5L5 0Z" fill="none" stroke="var(--color-accent)" stroke-width="0.5" opacity="0.3"/>
                    </pattern>
                    <rect width="100" height="100" fill="url(#hexagons)"/>
                </svg>
            </div>
        </div>

        <div class="relative z-10 max-w-7xl mx-auto grid lg:grid-cols-2 gap-12 items-center py-20">
            <!-- Left Content -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 text-accent text-sm font-bold uppercase tracking-wider mb-6 border border-accent/20">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Unleash Your Potential
                </div>
                
                <h1 class="text-6xl sm:text-7xl lg:text-8xl font-display font-bold text-text leading-none mb-6">
                    FORGE YOUR<br>
                    <span class="gradient-text">LEGACY</span>
                </h1>
                
                <p class="text-xl text-muted mb-8 max-w-lg mx-auto lg:mx-0 font-medium">
                    Elite personal training and nutrition coaching for athletes who refuse to accept mediocrity.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                    <button class="px-10 py-4 rounded-none bg-accent text-primary font-black text-lg uppercase tracking-wider hover:scale-105 hover:shadow-lg hover:shadow-accent/50 transition-all duration-300 clip-path-slant">
                        Start Training
                    </button>
                    <button class="px-10 py-4 rounded-none border-2 border-accent text-accent font-black text-lg uppercase tracking-wider hover:bg-accent hover:text-primary transition-all duration-300">
                        View Programs
                    </button>
                </div>

                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 max-w-md mx-auto lg:mx-0">
                    <div class="text-center">
                        <div class="text-3xl font-display font-bold text-accent">500+</div>
                        <div class="text-sm text-muted uppercase tracking-wider">Athletes</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-display font-bold text-accent">10K+</div>
                        <div class="text-sm text-muted uppercase tracking-wider">Pounds Lifted</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-display font-bold text-accent">98%</div>
                        <div class="text-sm text-muted uppercase tracking-wider">Success Rate</div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Dynamic Logo -->
            <div class="relative flex justify-center lg:justify-end">
                <div class="relative w-96 h-96">
                    <!-- Pulse Rings -->
                    <div class="absolute inset-0 rounded-full border-2 border-accent/30 pulse-ring"></div>
                    <div class="absolute inset-4 rounded-full border-2 border-accent/20 pulse-ring" style="animation-delay: 0.5s;"></div>
                    <div class="absolute inset-8 rounded-full border-2 border-accent/10 pulse-ring" style="animation-delay: 1s;"></div>
                    
                    <!-- Main Logo Container -->
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="relative w-80 h-80">
                            <!-- Hexagon Background -->
                            <svg class="absolute inset-0 w-full h-full animate-spin" style="animation-duration: 30s;" viewBox="0 0 100 100">
                                <polygon points="50,5 95,27.5 95,72.5 50,95 5,72.5 5,27.5" fill="none" stroke="var(--color-primary)" stroke-width="0.5" opacity="0.5"/>
                                <polygon points="50,15 85,32.5 85,67.5 50,85 15,67.5 15,32.5" fill="none" stroke="var(--color-accent)" stroke-width="0.5" opacity="0.3"/>
                            </svg>
                            
                            <!-- Center Circle -->
                            <div class="absolute inset-8 rounded-full bg-gradient-to-br from-primary to-secondary flex items-center justify-center shadow-2xl border-4 border-accent/20">
                                <div class="text-center">
                                    <svg class="w-32 h-32 text-accent mx-auto mb-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                                        <path class="muscle-path" d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <circle cx="12" cy="12" r="3" fill="var(--color-accent)" opacity="0.8"/>
                                    </svg>
                                    <div class="text-4xl font-display font-bold text-text tracking-widest">IRON</div>
                                    <div class="text-xl font-black text-accent tracking-[0.3em]">PULSE</div>
                                </div>
                            </div>

                            <!-- Orbiting Elements -->
                            <div class="absolute inset-0 animate-spin" style="animation-duration: 15s;">
                                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-2 w-4 h-4 bg-accent rounded-full shadow-lg shadow-accent/50"></div>
                            </div>
                            <div class="absolute inset-0 animate-spin" style="animation-duration: 20s; animation-direction: reverse;">
                                <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-2 w-3 h-3 bg-primary rounded-full border-2 border-accent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-2">
            <span class="text-xs text-muted uppercase tracking-widest">Scroll</span>
            <div class="w-6 h-10 rounded-full border-2 border-accent/30 flex justify-center pt-2">
                <div class="w-1 h-2 bg-accent rounded-full animate-bounce"></div>
            </div>
        </div>
    </section>

    <!-- Social Links Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-surface/50 border-y border-accent/10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-display font-bold text-text mb-3 tracking-wide">JOIN THE MOVEMENT</h2>
                <p class="text-muted uppercase tracking-widest text-sm">Follow the journey. Share the grind.</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-4">
                <!-- Instagram -->
                <a href="#" class="group relative w-24 h-24 bg-background rounded-none border border-accent/20 hover:border-accent transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-accent/20 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-accent/10 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-8 h-8 text-muted group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>

                <!-- YouTube -->
                <a href="#" class="group relative w-24 h-24 bg-background rounded-none border border-accent/20 hover:border-accent transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-accent/20 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-accent/10 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-8 h-8 text-muted group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>

                <!-- TikTok -->
                <a href="#" class="group relative w-24 h-24 bg-background rounded-none border border-accent/20 hover:border-accent transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-accent/20 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-accent/10 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-8 h-8 text-muted group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                    </svg>
                </a>

                <!-- Twitter/X -->
                <a href="#" class="group relative w-24 h-24 bg-background rounded-none border border-accent/20 hover:border-accent transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-accent/20 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-accent/10 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-8 h-8 text-muted group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>

                <!-- Facebook -->
                <a href="#" class="group relative w-24 h-24 bg-background rounded-none border border-accent/20 hover:border-accent transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-accent/20 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-accent/10 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-8 h-8 text-muted group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>

                <!-- Spotify -->
                <a href="#" class="group relative w-24 h-24 bg-background rounded-none border border-accent/20 hover:border-accent transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-accent/20 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-accent/10 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-8 h-8 text-muted group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0C5.4 0 0 5.4 0 12s5.4 12 12 12 12-5.4 12-12S18.66 0 12 0zm5.521 17.34c-.24.359-.66.48-1.021.24-2.82-1.74-6.36-2.101-10.561-1.141-.418.122-.779-.179-.899-.539-.12-.421.18-.78.54-.9 4.56-1.021 8.52-.6 11.64 1.32.42.18.479.659.301 1.02zm1.44-3.3c-.301.42-.841.6-1.262.3-3.239-1.98-8.159-2.58-11.939-1.38-.479.12-1.02-.12-1.14-.6-.12-.48.12-1.021.6-1.141C9.6 9.9 15 10.561 18.72 12.84c.361.181.54.78.241 1.2zm.12-3.36C15.24 8.4 8.82 8.16 5.16 9.301c-.6.179-1.2-.181-1.38-.721-.18-.601.18-1.2.72-1.381 4.26-1.26 11.28-1.02 15.721 1.621.539.3.719 1.02.419 1.56-.299.421-1.02.599-1.559.3z"/>
                    </svg>
                </a>

                <!-- Discord -->
                <a href="#" class="group relative w-24 h-24 bg-background rounded-none border border-accent/20 hover:border-accent transition-all duration-300 hover:scale-110 hover:shadow-lg hover:shadow-accent/20 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 bg-accent/10 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                    <svg class="w-8 h-8 text-muted group-hover:text-accent transition-colors relative z-10" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 0 0-5.487 0 12.64 12.64 0 0 0-.617-1.25.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057 19.9 19.9 0 0 0 5.993 3.03.078.078 0 0 0 .084-.028 14.09 14.09 0 0 0 1.226-1.994.076.076 0 0 0-.041-.106 13.107 13.107 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.2 10.2 0 0 0 .372-.292.074.074 0 0 1 .077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .078.01c.12.098.246.198.373.292a.077.077 0 0 1-.006.127 12.299 12.299 0 0 1-1.873.892.077.077 0 0 0-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 0 0 .084.028 19.839 19.839 0 0 0 6.002-3.03.077.077 0 0 0 .032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 0 0-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 bg-accent/10 text-accent text-sm font-black uppercase tracking-widest mb-4 border border-accent/20">Training Programs</span>
                <h2 class="text-5xl sm:text-6xl font-display font-bold text-text mb-6">FORGE YOUR PATH</h2>
                <p class="text-xl text-muted max-w-3xl mx-auto uppercase tracking-wide">
                    Specialized programs designed to break limits and build legends
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Program 1 -->
                <div class="group relative bg-surface border border-accent/10 hover:border-accent transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="p-8 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-accent/10 flex items-center justify-center group-hover:bg-accent transition-colors duration-300">
                                <svg class="w-8 h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-display font-bold text-accent/20 group-hover:text-accent/40 transition-colors">01</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text mb-3 uppercase tracking-wide">Power Building</h3>
                        <p class="text-muted mb-6">
                            Maximize strength and muscle mass with our elite powerbuilding protocol. Compound movements, progressive overload, zero excuses.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-accent font-bold uppercase tracking-wider">
                            <span>12 Weeks</span>
                            <span class="w-1 h-1 bg-accent rounded-full"></span>
                            <span>Advanced</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>

                <!-- Program 2 -->
                <div class="group relative bg-surface border border-accent/10 hover:border-accent transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="p-8 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-accent/10 flex items-center justify-center group-hover:bg-accent transition-colors duration-300">
                                <svg class="w-8 h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-display font-bold text-accent/20 group-hover:text-accent/40 transition-colors">02</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text mb-3 uppercase tracking-wide">Shred Protocol</h3>
                        <p class="text-muted mb-6">
                            High-intensity metabolic conditioning combined with precision nutrition to obliterate body fat while preserving hard-earned muscle.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-accent font-bold uppercase tracking-wider">
                            <span>8 Weeks</span>
                            <span class="w-1 h-1 bg-accent rounded-full"></span>
                            <span>Intermediate</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>

                <!-- Program 3 -->
                <div class="group relative bg-surface border border-accent/10 hover:border-accent transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="p-8 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-accent/10 flex items-center justify-center group-hover:bg-accent transition-colors duration-300">
                                <svg class="w-8 h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-display font-bold text-accent/20 group-hover:text-accent/40 transition-colors">03</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text mb-3 uppercase tracking-wide">Athlete Elite</h3>
                        <p class="text-muted mb-6">
                            Sport-specific training for competitive athletes. Speed, agility, power, and endurance optimization for peak performance.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-accent font-bold uppercase tracking-wider">
                            <span>16 Weeks</span>
                            <span class="w-1 h-1 bg-accent rounded-full"></span>
                            <span>Elite</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>

                <!-- Program 4 -->
                <div class="group relative bg-surface border border-accent/10 hover:border-accent transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="p-8 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-accent/10 flex items-center justify-center group-hover:bg-accent transition-colors duration-300">
                                <svg class="w-8 h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-display font-bold text-accent/20 group-hover:text-accent/40 transition-colors">04</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text mb-3 uppercase tracking-wide">Iron Endurance</h3>
                        <p class="text-muted mb-6">
                            Build unstoppable stamina with our hybrid training approach. Marathon strength meets explosive power.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-accent font-bold uppercase tracking-wider">
                            <span>10 Weeks</span>
                            <span class="w-1 h-1 bg-accent rounded-full"></span>
                            <span>Advanced</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>

                <!-- Program 5 -->
                <div class="group relative bg-surface border border-accent/10 hover:border-accent transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="p-8 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-accent/10 flex items-center justify-center group-hover:bg-accent transition-colors duration-300">
                                <svg class="w-8 h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-display font-bold text-accent/20 group-hover:text-accent/40 transition-colors">05</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text mb-3 uppercase tracking-wide">Foundation</h3>
                        <p class="text-muted mb-6">
                        Perfect form, mobility, and baseline strength. The essential starting point for every serious lifter's journey.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-accent font-bold uppercase tracking-wider">
                            <span>6 Weeks</span>
                            <span class="w-1 h-1 bg-accent rounded-full"></span>
                            <span>Beginner</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>

                <!-- Program 6 -->
                <div class="group relative bg-surface border border-accent/10 hover:border-accent transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-accent/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="p-8 relative z-10">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-accent/10 flex items-center justify-center group-hover:bg-accent transition-colors duration-300">
                                <svg class="w-8 h-8 text-accent group-hover:text-primary transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                            </div>
                            <span class="text-5xl font-display font-bold text-accent/20 group-hover:text-accent/40 transition-colors">06</span>
                        </div>
                        <h3 class="text-2xl font-display font-bold text-text mb-3 uppercase tracking-wide">1-on-1 Coaching</h3>
                        <p class="text-muted mb-6">
                            Personalized programming, nutrition guidance, and accountability. Your goals, my expertise, unstoppable results.
                        </p>
                        <div class="flex items-center gap-4 text-sm text-accent font-bold uppercase tracking-wider">
                            <span>Ongoing</span>
                            <span class="w-1 h-1 bg-accent rounded-full"></span>
                            <span>All Levels</span>
                        </div>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-accent transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 relative overflow-hidden bg-primary">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="cta-pattern" width="5" height="5" patternUnits="userSpaceOnUse">
                    <circle cx="2.5" cy="2.5" r="1" fill="var(--color-accent)"/>
                </pattern>
                <rect width="100" height="100" fill="url(#cta-pattern)"/>
            </svg>
        </div>

        <div class="max-w-5xl mx-auto text-center relative z-10">
            <h2 class="text-5xl sm:text-7xl font-display font-bold text-text mb-6 uppercase">
                No Excuses.<br>
                <span class="text-accent">Only Results.</span>
            </h2>
            <p class="text-xl text-muted mb-12 max-w-2xl mx-auto uppercase tracking-wide">
                Join the elite. Your transformation starts with a single decision.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <button class="px-12 py-5 bg-accent text-primary font-black text-xl uppercase tracking-widest hover:scale-105 hover:shadow-lg hover:shadow-accent/50 transition-all duration-300 clip-path-slant">
                    Start Today
                </button>
                <button class="px-12 py-5 border-2 border-accent text-accent font-black text-xl uppercase tracking-widest hover:bg-accent hover:text-primary transition-all duration-300">
                    Free Consultation
                </button>
            </div>

            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-4xl font-display font-bold text-accent mb-1">24/7</div>
                    <div class="text-sm text-muted uppercase tracking-wider">Support</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-display font-bold text-accent mb-1">100%</div>
                    <div class="text-sm text-muted uppercase tracking-wider">Custom</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-display font-bold text-accent mb-1">Global</div>
                    <div class="text-sm text-muted uppercase tracking-wider">Access</div>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-display font-bold text-accent mb-1">Real</div>
                    <div class="text-sm text-muted uppercase tracking-wider">Results</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-surface border-t border-accent/10 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-12 h-12 bg-accent flex items-center justify-center">
                    <svg class="w-8 h-8 text-primary" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <span class="font-display font-bold text-2xl text-text tracking-widest">IRON PULSE</span>
                    <div class="text-xs text-muted uppercase tracking-widest">Elite Fitness Coaching</div>
                </div>
            </div>
            
            <div class="flex gap-8 text-sm text-muted font-bold uppercase tracking-wider">
                <a href="#" class="hover:text-accent transition-colors">Programs</a>
                <a href="#" class="hover:text-accent transition-colors">Results</a>
                <a href="#" class="hover:text-accent transition-colors">About</a>
                <a href="#" class="hover:text-accent transition-colors">Contact</a>
            </div>
            
            <div class="text-sm text-muted font-bold uppercase tracking-wider">
                © 2024 Iron Pulse
            </div>
        </div>
    </footer>

    <script>
        const themes = [
            { name: 'Red Energy', class: 'theme-red-energy' },
            { name: 'Orange Fire', class: 'theme-orange-fire' },
            { name: 'Yellow Power', class: 'theme-yellow-power' },
            { name: 'Green Strength', class: 'theme-green-strength' },
            { name: 'Blue Ice', class: 'theme-blue-ice' },
            { name: 'Purple Storm', class: 'theme-purple-storm' },
            { name: 'Pink Fury', class: 'theme-pink-fury' },
            { name: 'Cyan Electric', class: 'theme-cyan-electric' },
            { name: 'Lime Toxic', class: 'theme-lime-toxic' },
            { name: 'Amber Heat', class: 'theme-amber-heat' },
            { name: 'Rose Combat', class: 'theme-rose-combat' },
            { name: 'Indigo Night', class: 'theme-indigo-night' },
            { name: 'Teal Ocean', class: 'theme-teal-ocean' },
            { name: 'Fuchsia Neon', class: 'theme-fuchsia-neon' },
            { name: 'Slate Steel', class: 'theme-slate-steel' },
            { name: 'Emerald Beast', class: 'theme-emerald-beast' },
            { name: 'Sky Limit', class: 'theme-sky-limit' },
            { name: 'Violet Lightning', class: 'theme-violet-lightning' },
            { name: 'Orange Sunset', class: 'theme-orange-sunset' },
            { name: 'Red Blood', class: 'theme-red-blood' },
            { name: 'Gold Champion', class: 'theme-gold-champion' },
            { name: 'Silver Titanium', class: 'theme-silver-titanium' },
            { name: 'Bronze Iron', class: 'theme-bronze-iron' },
            { name: 'Magenta Rage', class: 'theme-magenta-rage' },
            { name: 'Chartreuse Venom', class: 'theme-chartreuse-venom' },
            { name: 'Crimson Warrior', class: 'theme-crimson-warrior' },
            { name: 'Navy Seal', class: 'theme-navy-seal' },
            { name: 'Forest Camo', class: 'theme-forest-camo' },
            { name: 'White Lightning', class: 'theme-white-lightning' },
            { name: 'Black Panther', class: 'theme-black-panther' }
        ];

        const body = document.body;
        const themeList = document.getElementById('themeList');

        themes.forEach((theme, index) => {
            const button = document.createElement('button');
            button.className = `w-full text-left px-4 py-2 rounded-lg text-sm font-medium transition-all duration-200 hover:bg-accent/10 hover:text-accent flex items-center gap-2 ${index === 0 ? 'bg-accent/10 text-accent' : 'text-text'}`;
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
    </script>
</body>
</html>