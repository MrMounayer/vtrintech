<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumière Studios - Cinematic Storytelling</title>
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
                        display: ['Cormorant Garamond', 'serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Inter:wght@300;400;500;600&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-primary: #1a1a1a;
            --color-secondary: #0f0f0f;
            --color-accent: #d4af37;
            --color-surface: #ffffff;
            --color-background: #fafafa;
            --color-text: #1a1a1a;
            --color-muted: #666666;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text);
            transition: all 0.6s ease;
        }

        .font-display {
            font-family: 'Cormorant Garamond', serif;
        }

        .font-mono {
            font-family: 'JetBrains Mono', monospace;
        }

        /* 30 Cinematic Themes */
        .theme-gold-classic {
            --color-primary: #1a1a1a;
            --color-secondary: #0f0f0f;
            --color-accent: #d4af37;
            --color-surface: #ffffff;
            --color-background: #fafafa;
            --color-text: #1a1a1a;
            --color-muted: #666666;
        }

        .theme-noir-cinema {
            --color-primary: #000000;
            --color-secondary: #1a1a1a;
            --color-accent: #e5e5e5;
            --color-surface: #0a0a0a;
            --color-background: #000000;
            --color-text: #f5f5f5;
            --color-muted: #737373;
        }

        .theme-teal-mint {
            --color-primary: #0d3b3b;
            --color-secondary: #0a2e2e;
            --color-accent: #98d8c8;
            --color-surface: #f0f9f7;
            --color-background: #e6f4f1;
            --color-text: #0d3b3b;
            --color-muted: #5a8a82;
        }

        .theme-burgundy-velvet {
            --color-primary: #4a0e0e;
            --color-secondary: #3d0b0b;
            --color-accent: #c9a227;
            --color-surface: #faf5f0;
            --color-background: #f5ebe0;
            --color-text: #2c0505;
            --color-muted: #8b4513;
        }

        .theme-navy-horizon {
            --color-primary: #1e3a5f;
            --color-secondary: #152a45;
            --color-accent: #f4a261;
            --color-surface: #f8f9fa;
            --color-background: #eef1f5;
            --color-text: #1a1a2e;
            --color-muted: #457b9d;
        }

        .theme-forest-arthouse {
            --color-primary: #1b4332;
            --color-secondary: #143828;
            --color-accent: #d8f3dc;
            --color-surface: #f1f8f4;
            --color-background: #e8f5e9;
            --color-text: #081c15;
            --color-muted: #52b788;
        }

        .theme-sepia-vintage {
            --color-primary: #5c4033;
            --color-secondary: #4a332a;
            --color-accent: #d4a574;
            --color-surface: #f5ebe0;
            --color-background: #ede0d4;
            --color-text: #3e2723;
            --color-muted: #8d6e63;
        }

        .theme-purple-dream {
            --color-primary: #2d1b4e;
            --color-secondary: #1a0f2e;
            --color-accent: #e0b0ff;
            --color-surface: #faf5ff;
            --color-background: #f3e8ff;
            --color-text: #1a0f2e;
            --color-muted: #7c3aed;
        }

        .theme-terracotta-sun {
            --color-primary: #9c6644;
            --color-secondary: #7f5539;
            --color-accent: #e6b8a2;
            --color-surface: #fdf2e9;
            --color-background: #fae1dd;
            --color-text: #432818;
            --color-muted: #b08968;
        }

        .theme-slate-industrial {
            --color-primary: #334155;
            --color-secondary: #1e293b;
            --color-accent: #f97316;
            --color-surface: #f1f5f9;
            --color-background: #e2e8f0;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        .theme-crimson-drama {
            --color-primary: #7f1d1d;
            --color-secondary: #991b1b;
            --color-accent: #fca5a5;
            --color-surface: #fef2f2;
            --color-background: #fee2e2;
            --color-text: #450a0a;
            --color-muted: #dc2626;
        }

        .theme-amber-glow {
            --color-primary: #92400e;
            --color-secondary: #78350f;
            --color-accent: #fbbf24;
            --color-surface: #fffbeb;
            --color-background: #fef3c7;
            --color-text: #451a03;
            --color-muted: #d97706;
        }

        .theme-rose-romance {
            --color-primary: #881337;
            --color-secondary: #9f1239;
            --color-accent: #fda4af;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #4c0519;
            --color-muted: #e11d48;
        }

        .theme-cyan-future {
            --color-primary: #0891b2;
            --color-secondary: #0e7490;
            --color-accent: #22d3ee;
            --color-surface: #ecfeff;
            --color-background: #cffafe;
            --color-text: #164e63;
            --color-muted: #06b6d4;
        }

        .theme-olive-documentary {
            --color-primary: #3f6212;
            --color-secondary: #365314;
            --color-accent: #a3e635;
            --color-surface: #f7fee7;
            --color-background: #ecfccb;
            --color-text: #1a2e05;
            --color-muted: #65a30d;
        }

        .theme-indigo-midnight {
            --color-primary: #312e81;
            --color-secondary: #1e1b4b;
            --color-accent: #818cf8;
            --color-surface: #eef2ff;
            --color-background: #e0e7ff;
            --color-text: #1e1b4b;
            --color-muted: #6366f1;
        }

        .theme-copper-analog {
            --color-primary: #7c2d12;
            --color-secondary: #9a3412;
            --color-accent: #fb923c;
            --color-surface: #fff7ed;
            --color-background: #ffedd5;
            --color-text: #431407;
            --color-muted: #c2410c;
        }

        .theme-silver-reel {
            --color-primary: #475569;
            --color-secondary: #334155;
            --color-accent: #94a3b8;
            --color-surface: #f8fafc;
            --color-background: #f1f5f9;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        .theme-emerald-thriller {
            --color-primary: #064e3b;
            --color-secondary: #065f46;
            --color-accent: #34d399;
            --color-surface: #ecfdf5;
            --color-background: #d1fae5;
            --color-text: #022c22;
            --color-muted: #059669;
        }

        .theme-magenta-experimental {
            --color-primary: #86198f;
            --color-secondary: #701a75;
            --color-accent: #e879f9;
            --color-surface: #fdf4ff;
            --color-background: #fae8ff;
            --color-text: #4a044e;
            --color-muted: #c026d3;
        }

        .theme-monochrome-35mm {
            --color-primary: #171717;
            --color-secondary: #262626;
            --color-accent: #525252;
            --color-surface: #fafafa;
            --color-background: #f5f5f5;
            --color-text: #0a0a0a;
            --color-muted: #737373;
        }

        .theme-coral-sunset {
            --color-primary: #9f1239;
            --color-secondary: #be123c;
            --color-accent: #fda4af;
            --color-surface: #fff1f2;
            --color-background: #ffe4e6;
            --color-text: #881337;
            --color-muted: #fb7185;
        }

        .theme-azure-ocean {
            --color-primary: #1e40af;
            --color-secondary: #1e3a8a;
            --color-accent: #60a5fa;
            --color-surface: #eff6ff;
            --color-background: #dbeafe;
            --color-text: #172554;
            --color-muted: #3b82f6;
        }

        .theme-gold-hollywood {
            --color-primary: #854d0e;
            --color-secondary: #a16207;
            --color-accent: #facc15;
            --color-surface: #fefce8;
            --color-background: #fef9c3;
            --color-text: #422006;
            --color-muted: #eab308;
        }

        .theme-platinum-art {
            --color-primary: #3f3f46;
            --color-secondary: #27272a;
            --color-accent: #d4d4d8;
            --color-surface: #fafafa;
            --color-background: #f4f4f5;
            --color-text: #18181b;
            --color-muted: #71717a;
        }

        .theme-ruby-action {
            --color-primary: #b91c1c;
            --color-secondary: #991b1b;
            --color-accent: #fca5a5;
            --color-surface: #fef2f2;
            --color-background: #fee2e2;
            --color-text: #450a0a;
            --color-muted: #ef4444;
        }

        .theme-sage-indie {
            --color-primary: #3f6212;
            --color-secondary: #365314;
            --color-accent: #a3e635;
            --color-surface: #f7fee7;
            --color-background: #ecfccb;
            --color-text: #1a2e05;
            --color-muted: #84cc16;
        }

        .theme-obsidian-dark {
            --color-primary: #0c0a09;
            --color-secondary: #1c1917;
            --color-accent: #78716c;
            --color-surface: #1c1917;
            --color-background: #0c0a09;
            --color-text: #fafaf9;
            --color-muted: #a8a29e;
        }

        .theme-gradient-text {
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .film-grain {
            position: relative;
        }

        .film-grain::after {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.03;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        .aperture-blade {
            transition: transform 0.5s ease;
        }

        .group:hover .aperture-blade {
            transform: rotate(45deg);
        }
    </style>
</head>
<body class="theme-gold-classic antialiased film-grain">

    <!-- Theme Switcher -->
    <div class="fixed top-4 right-4 z-50">
        <div class="relative group">
            <button class="bg-surface text-text p-3 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 border border-accent/20 hover:border-accent">
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
        <!-- Cinematic Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-background/50 to-background"></div>
            <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent/5 rounded-full blur-3xl"></div>
            <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
        </div>

        <!-- Film Strip Decoration -->
        <div class="absolute top-0 left-0 w-full h-8 bg-primary flex items-center justify-center gap-2 opacity-20">
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
        </div>
        <div class="absolute bottom-0 left-0 w-full h-8 bg-primary flex items-center justify-center gap-2 opacity-20">
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
            <div class="w-4 h-4 bg-surface rounded-sm"></div>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto text-center py-20">
            <!-- Logo -->
            <div class="relative w-48 h-48 mx-auto mb-12">
                <!-- Aperture Blades -->
                <svg class="absolute inset-0 w-full h-full animate-spin" style="animation-duration: 60s;" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="45" fill="none" stroke="var(--color-accent)" stroke-width="0.5" opacity="0.3"/>
                    <circle cx="50" cy="50" r="35" fill="none" stroke="var(--color-accent)" stroke-width="0.5" opacity="0.5"/>
                    <circle cx="50" cy="50" r="25" fill="none" stroke="var(--color-accent)" stroke-width="0.5" opacity="0.7"/>
                </svg>
                
                <!-- Central Logo -->
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="w-32 h-32 rounded-full bg-primary flex items-center justify-center border-4 border-accent/30">
                        <div class="text-center">
                            <svg class="w-16 h-16 text-accent mx-auto" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                                <circle cx="12" cy="12" r="10"/>
                                <circle cx="12" cy="12" r="3" fill="var(--color-accent)"/>
                                <path d="M12 2v20M2 12h20" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Orbiting Elements -->
                <div class="absolute inset-0 animate-spin" style="animation-duration: 20s;">
                    <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-2">
                        <div class="w-3 h-3 bg-accent rounded-full"></div>
                    </div>
                </div>
                <div class="absolute inset-0 animate-spin" style="animation-duration: 15s; animation-direction: reverse;">
                    <div class="absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-2">
                        <div class="w-2 h-2 bg-primary rounded-full border border-accent"></div>
                    </div>
                </div>
            </div>

            <p class="font-mono text-sm text-muted uppercase tracking-[0.3em] mb-4">Est. 2015 • Los Angeles</p>
            
            <h1 class="text-5xl sm:text-7xl lg:text-8xl font-display font-semibold text-text leading-none mb-6 italic">
                Lumière<br>
                <span class="text-accent not-italic">Studios</span>
            </h1>
            
            <p class="text-xl text-muted max-w-2xl mx-auto mb-12 font-light leading-relaxed">
                Crafting visual narratives that move audiences. From concept to final cut, we bring stories to life through the lens of cinematic excellence.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="px-8 py-4 bg-primary text-surface font-mono text-sm uppercase tracking-widest hover:bg-secondary transition-all duration-300 flex items-center gap-3">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd"/>
                    </svg>
                    View Reel
                </button>
                <button class="px-8 py-4 border border-primary text-primary font-mono text-sm uppercase tracking-widest hover:bg-primary hover:text-surface transition-all duration-300">
                    Get in Touch
                </button>
            </div>

            <!-- Technical Specs -->
            <div class="mt-16 flex flex-wrap justify-center gap-8 text-xs font-mono text-muted uppercase tracking-wider">
                <span>4K / 8K</span>
                <span>•</span>
                <span>RED Komodo</span>
                <span>•</span>
                <span>Arri Alexa</span>
                <span>•</span>
                <span>DaVinci Resolve</span>
            </div>
        </div>
    </section>

    <!-- Social Links Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-surface border-y border-accent/10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <p class="font-mono text-xs text-muted uppercase tracking-[0.3em] mb-2">Connect</p>
                <h2 class="text-3xl font-display font-semibold text-text italic">Follow the Craft</h2>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6">
                <!-- Vimeo -->
                <a href="#" class="group w-20 h-20 border border-accent/20 flex items-center justify-center hover:border-accent hover:bg-accent/5 transition-all duration-300">
                    <svg class="w-6 h-6 text-muted group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.977 6.416c-.105 2.338-1.739 5.543-4.894 9.609-3.268 4.247-6.026 6.37-8.29 6.37-1.409 0-2.578-1.294-3.553-3.881L5.322 11.4C4.603 8.816 3.834 7.522 3.01 7.522c-.179 0-.806.378-1.881 1.132L0 7.197c1.185-1.044 2.351-2.084 3.501-3.128C5.08 2.701 6.266 1.984 7.055 1.91c1.867-.18 3.016 1.1 3.447 3.838.465 2.953.789 4.789.971 5.507.539 2.45 1.131 3.674 1.776 3.674.502 0 1.256-.796 2.265-2.385 1.004-1.589 1.54-2.797 1.612-3.628.144-1.371-.395-2.061-1.614-2.061-.574 0-1.167.121-1.777.391 1.186-3.868 3.434-5.757 6.762-5.637 2.473.075 3.654 1.664 3.57 4.797l-.013.001z"/>
                    </svg>
                </a>

                <!-- YouTube -->
                <a href="#" class="group w-20 h-20 border border-accent/20 flex items-center justify-center hover:border-accent hover:bg-accent/5 transition-all duration-300">
                    <svg class="w-6 h-6 text-muted group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="#" class="group w-20 h-20 border border-accent/20 flex items-center justify-center hover:border-accent hover:bg-accent/5 transition-all duration-300">
                    <svg class="w-6 h-6 text-muted group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>

                <!-- Behance -->
                <a href="#" class="group w-20 h-20 border border-accent/20 flex items-center justify-center hover:border-accent hover:bg-accent/5 transition-all duration-300">
                    <svg class="w-6 h-6 text-muted group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M22 7h-7V5h7v2zm1.726 10c-.442 1.297-2.029 3-5.101 3-3.074 0-5.564-1.729-5.564-5.675 0-3.91 2.325-5.92 5.466-5.92 3.082 0 4.964 1.782 5.375 4.426.078.506.109 1.188.095 2.14H15.97c.13 3.211 3.483 3.312 4.588 2.029h3.168zm-7.686-4h4.965c-.105-1.547-1.136-2.219-2.477-2.219-1.466 0-2.277.768-2.488 2.219zm-9.574 6.988H0V5.021h6.953c5.476.081 5.58 5.444 2.72 6.906 3.461 1.26 3.577 8.061-3.207 8.061zM3 11h3.584c2.508 0 2.906-3-.312-3H3v3zm3.391 3H3v3.016h3.341c3.055 0 2.868-3.016.05-3.016z"/>
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="#" class="group w-20 h-20 border border-accent/20 flex items-center justify-center hover:border-accent hover:bg-accent/5 transition-all duration-300">
                    <svg class="w-6 h-6 text-muted group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>

                <!-- Twitter/X -->
                <a href="#" class="group w-20 h-20 border border-accent/20 flex items-center justify-center hover:border-accent hover:bg-accent/5 transition-all duration-300">
                    <svg class="w-6 h-6 text-muted group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>

                <!-- FilmFreeway -->
                <a href="#" class="group w-20 h-20 border border-accent/20 flex items-center justify-center hover:border-accent hover:bg-accent/5 transition-all duration-300">
                    <svg class="w-6 h-6 text-muted group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <p class="font-mono text-xs text-muted uppercase tracking-[0.3em] mb-4">Services</p>
                <h2 class="text-4xl sm:text-5xl font-display font-semibold text-text italic mb-6">Visual Storytelling</h2>
                <div class="w-24 h-px bg-accent mx-auto"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-px bg-accent/20">
                <!-- Service 1 -->
                <div class="group bg-background p-10 hover:bg-surface transition-all duration-500 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4">
                        <span class="font-mono text-6xl text-accent/10 font-bold">01</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 mb-6 text-accent">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-text mb-4 italic">Commercial Production</h3>
                        <p class="text-muted leading-relaxed mb-6">
                            High-end brand films and commercials that capture essence and drive engagement. From concept to delivery.
                        </p>
                        <ul class="space-y-2 text-sm text-muted font-mono">
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Brand Documentaries
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Product Cinematography
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Aerial & Drone Work
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="group bg-background p-10 hover:bg-surface transition-all duration-500 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4">
                        <span class="font-mono text-6xl text-accent/10 font-bold">02</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 mb-6 text-accent">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-text mb-4 italic">Narrative Film</h3>
                        <p class="text-muted leading-relaxed mb-6">
                            Short films, features, and series development. Story-driven content with cinematic production value.
                        </p>
                        <ul class="space-y-2 text-sm text-muted font-mono">
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Short Films
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Feature Development
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Web Series
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="group bg-background p-10 hover:bg-surface transition-all duration-500 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4">
                        <span class="font-mono text-6xl text-accent/10 font-bold">03</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 mb-6 text-accent">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-text mb-4 italic">Music Videos</h3>
                        <p class="text-muted leading-relaxed mb-6">
                            Visual poetry that amplifies sound. Creative direction and execution for artists and labels.
                        </p>
                        <ul class="space-y-2 text-sm text-muted font-mono">
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Performance Pieces
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Narrative Videos
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Lyric Visualizers
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="group bg-background p-10 hover:bg-surface transition-all duration-500 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4">
                        <span class="font-mono text-6xl text-accent/10 font-bold">04</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 mb-6 text-accent">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-text mb-4 italic">Documentary</h3>
                        <p class="text-muted leading-relaxed mb-6">
                            Real stories, beautifully told. Long-form documentary production with journalistic integrity.
                        </p>
                        <ul class="space-y-2 text-sm text-muted font-mono">
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Social Documentaries
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Biographical Films
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Event Coverage
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="group bg-background p-10 hover:bg-surface transition-all duration-500 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4">
                        <span class="font-mono text-6xl text-accent/10 font-bold">05</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 mb-6 text-accent">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-text mb-4 italic">Post Production</h3>
                        <p class="text-muted leading-relaxed mb-6">
                            Color grading, editing, and visual effects. The final polish that makes footage cinematic.
                        </p>
                        <ul class="space-y-2 text-sm text-muted font-mono">
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Color Grading
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                VFX & Motion Graphics
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Sound Design
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="group bg-background p-10 hover:bg-surface transition-all duration-500 relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-4">
                        <span class="font-mono text-6xl text-accent/10 font-bold">06</span>
                    </div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 mb-6 text-accent">
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-display font-semibold text-text mb-4 italic">Photography</h3>
                        <p class="text-muted leading-relaxed mb-6">
                            Stills that tell stories. Editorial, commercial, and portrait photography with cinematic lighting.
                        </p>
                        <ul class="space-y-2 text-sm text-muted font-mono">
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Editorial Portraits
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Product Photography
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1 h-1 bg-accent rounded-full"></span>
                                Behind the Scenes
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-primary text-surface relative overflow-hidden">
        <!-- Film Perforations -->
        <div class="absolute left-0 top-0 h-full w-8 flex flex-col justify-around py-4">
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
        </div>
        <div class="absolute right-0 top-0 h-full w-8 flex flex-col justify-around py-4">
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
            <div class="w-4 h-6 bg-surface rounded-sm"></div>
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <p class="font-mono text-xs text-surface/60 uppercase tracking-[0.3em] mb-4">Now Booking</p>
            <h2 class="text-4xl sm:text-6xl font-display font-semibold mb-6 italic">
                Let's Create Something<br>
                <span class="text-accent">Unforgettable</span>
            </h2>
            <p class="text-lg text-surface/70 mb-12 max-w-2xl mx-auto leading-relaxed">
                Every great film starts with a conversation. Share your vision with us, and together we'll bring it to life on screen.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-10 py-4 bg-accent text-primary font-mono text-sm uppercase tracking-widest hover:bg-surface transition-all duration-300">
                    Start Your Project
                </button>
                <button class="px-10 py-4 border border-surface text-surface font-mono text-sm uppercase tracking-widest hover:bg-surface hover:text-primary transition-all duration-300">
                    Download Deck
                </button>
            </div>

            <div class="mt-16 pt-8 border-t border-surface/20 flex flex-wrap justify-center gap-8 text-xs font-mono text-surface/40 uppercase tracking-wider">
                <span>Los Angeles</span>
                <span>•</span>
                <span>New York</span>
                <span>•</span>
                <span>London</span>
                <span>•</span>
                <span>Tokyo</span>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-surface border-t border-accent/10 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center">
                    <svg class="w-6 h-6 text-accent" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <circle cx="12" cy="12" r="3" fill="currentColor"/>
                    </svg>
                </div>
                <div>
                    <span class="font-display font-semibold text-xl text-text italic">Lumière Studios</span>
                    <div class="text-xs text-muted font-mono">Motion Picture Company</div>
                </div>
            </div>
            
            <div class="flex gap-8 text-sm text-muted font-mono uppercase tracking-wider">
                <a href="#" class="hover:text-accent transition-colors">Work</a>
                <a href="#" class="hover:text-accent transition-colors">About</a>
                <a href="#" class="hover:text-accent transition-colors">Press</a>
                <a href="#" class="hover:text-accent transition-colors">Contact</a>
            </div>
            
            <div class="text-xs text-muted font-mono">
                © 2024 Lumière Studios
            </div>
        </div>
    </footer>

    <script>
        const themes = [
            { name: 'Gold Classic', class: 'theme-gold-classic' },
            { name: 'Noir Cinema', class: 'theme-noir-cinema' },
            { name: 'Teal Mint', class: 'theme-teal-mint' },
            { name: 'Burgundy Velvet', class: 'theme-burgundy-velvet' },
            { name: 'Navy Horizon', class: 'theme-navy-horizon' },
            { name: 'Forest Arthouse', class: 'theme-forest-arthouse' },
            { name: 'Sepia Vintage', class: 'theme-sepia-vintage' },
            { name: 'Purple Dream', class: 'theme-purple-dream' },
            { name: 'Terracotta Sun', class: 'theme-terracotta-sun' },
            { name: 'Slate Industrial', class: 'theme-slate-industrial' },
            { name: 'Crimson Drama', class: 'theme-crimson-drama' },
            { name: 'Amber Glow', class: 'theme-amber-glow' },
            { name: 'Rose Romance', class: 'theme-rose-romance' },
            { name: 'Cyan Future', class: 'theme-cyan-future' },
            { name: 'Olive Documentary', class: 'theme-olive-documentary' },
            { name: 'Indigo Midnight', class: 'theme-indigo-midnight' },
            { name: 'Copper Analog', class: 'theme-copper-analog' },
            { name: 'Silver Reel', class: 'theme-silver-reel' },
            { name: 'Emerald Thriller', class: 'theme-emerald-thriller' },
            { name: 'Magenta Experimental', class: 'theme-magenta-experimental' },
            { name: 'Monochrome 35mm', class: 'theme-monochrome-35mm' },
            { name: 'Coral Sunset', class: 'theme-coral-sunset' },
            { name: 'Azure Ocean', class: 'theme-azure-ocean' },
            { name: 'Gold Hollywood', class: 'theme-gold-hollywood' },
            { name: 'Platinum Art', class: 'theme-platinum-art' },
            { name: 'Ruby Action', class: 'theme-ruby-action' },
            { name: 'Sage Indie', class: 'theme-sage-indie' },
            { name: 'Obsidian Dark', class: 'theme-obsidian-dark' }
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