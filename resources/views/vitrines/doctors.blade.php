<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MediCare Plus - Professional Healthcare</title>
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
                        display: ['Playfair Display', 'serif'],
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --color-primary: #0f766e;
            --color-secondary: #134e4a;
            --color-accent: #14b8a6;
            --color-surface: #ffffff;
            --color-background: #f0fdfa;
            --color-text: #134e4a;
            --color-muted: #5eead4;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--color-background);
            color: var(--color-text);
            transition: all 0.5s ease;
        }

        .font-display {
            font-family: 'Playfair Display', serif;
        }

        /* 25 Medical Professional Themes */
        .theme-teal-medical {
            --color-primary: #0f766e;
            --color-secondary: #134e4a;
            --color-accent: #14b8a6;
            --color-surface: #ffffff;
            --color-background: #f0fdfa;
            --color-text: #134e4a;
            --color-muted: #0d9488;
        }

        .theme-blue-clinical {
            --color-primary: #1e40af;
            --color-secondary: #1e3a8a;
            --color-accent: #3b82f6;
            --color-surface: #ffffff;
            --color-background: #eff6ff;
            --color-text: #1e3a8a;
            --color-muted: #60a5fa;
        }

        .theme-green-wellness {
            --color-primary: #15803d;
            --color-secondary: #166534;
            --color-accent: #22c55e;
            --color-surface: #ffffff;
            --color-background: #f0fdf4;
            --color-text: #14532d;
            --color-muted: #4ade80;
        }

        .theme-navy-professional {
            --color-primary: #1e293b;
            --color-secondary: #0f172a;
            --color-accent: #64748b;
            --color-surface: #ffffff;
            --color-background: #f8fafc;
            --color-text: #0f172a;
            --color-muted: #94a3b8;
        }

        .theme-purple-care {
            --color-primary: #7c3aed;
            --color-secondary: #6d28d9;
            --color-accent: #a78bfa;
            --color-surface: #ffffff;
            --color-background: #f5f3ff;
            --color-text: #5b21b6;
            --color-muted: #8b5cf6;
        }

        .theme-rose-health {
            --color-primary: #be123c;
            --color-secondary: #9f1239;
            --color-accent: #fb7185;
            --color-surface: #ffffff;
            --color-background: #fff1f2;
            --color-text: #881337;
            --color-muted: #f43f5e;
        }

        .theme-coral-warm {
            --color-primary: #c2410c;
            --color-secondary: #9a3412;
            --color-accent: #fb923c;
            --color-surface: #ffffff;
            --color-background: #fff7ed;
            --color-text: #7c2d12;
            --color-muted: #f97316;
        }

        .theme-slate-modern {
            --color-primary: #475569;
            --color-secondary: #334155;
            --color-accent: #94a3b8;
            --color-surface: #ffffff;
            --color-background: #f1f5f9;
            --color-text: #0f172a;
            --color-muted: #64748b;
        }

        .theme-emerald-fresh {
            --color-primary: #059669;
            --color-secondary: #047857;
            --color-accent: #34d399;
            --color-surface: #ffffff;
            --color-background: #ecfdf5;
            --color-text: #064e3b;
            --color-muted: #10b981;
        }

        .theme-sky-clean {
            --color-primary: #0284c7;
            --color-secondary: #0369a1;
            --color-accent: #7dd3fc;
            --color-surface: #ffffff;
            --color-background: #f0f9ff;
            --color-text: #0c4a6e;
            --color-muted: #38bdf8;
        }

        .theme-indigo-trust {
            --color-primary: #4338ca;
            --color-secondary: #3730a3;
            --color-accent: #818cf8;
            --color-surface: #ffffff;
            --color-background: #eef2ff;
            --color-text: #312e81;
            --color-muted: #6366f1;
        }

        .theme-amber-warm {
            --color-primary: #b45309;
            --color-secondary: #92400e;
            --color-accent: #fbbf24;
            --color-surface: #ffffff;
            --color-background: #fffbeb;
            --color-text: #78350f;
            --color-muted: #f59e0b;
        }

        .theme-cyan-digital {
            --color-primary: #0891b2;
            --color-secondary: #0e7490;
            --color-accent: #22d3ee;
            --color-surface: #ffffff;
            --color-background: #ecfeff;
            --color-text: #164e63;
            --color-muted: #06b6d4;
        }

        .theme-lime-vitality {
            --color-primary: #65a30d;
            --color-secondary: #4d7c0f;
            --color-accent: #a3e635;
            --color-surface: #ffffff;
            --color-background: #f7fee7;
            --color-text: #365314;
            --color-muted: #84cc16;
        }

        .theme-pink-gentle {
            --color-primary: #db2777;
            --color-secondary: #be185d;
            --color-accent: #f9a8d4;
            --color-surface: #ffffff;
            --color-background: #fdf2f8;
            --color-text: #831843;
            --color-muted: #ec4899;
        }

        .theme-violet-royal {
            --color-primary: #6b21a8;
            --color-secondary: #581c87;
            --color-accent: #c084fc;
            --color-surface: #ffffff;
            --color-background: #faf5ff;
            --color-text: #3b0764;
            --color-muted: #a855f7;
        }

        .theme-stone-natural {
            --color-primary: #57534e;
            --color-secondary: #44403c;
            --color-accent: #a8a29e;
            --color-surface: #ffffff;
            --color-background: #fafaf9;
            --color-text: #1c1917;
            --color-muted: #78716c;
        }

        .theme-red-urgent {
            --color-primary: #dc2626;
            --color-secondary: #b91c1c;
            --color-accent: #fca5a5;
            --color-surface: #ffffff;
            --color-background: #fef2f2;
            --color-text: #7f1d1d;
            --color-muted: #ef4444;
        }

        .theme-zinc-minimal {
            --color-primary: #3f3f46;
            --color-secondary: #27272a;
            --color-accent: #a1a1aa;
            --color-surface: #ffffff;
            --color-background: #fafafa;
            --color-text: #18181b;
            --color-muted: #71717a;
        }

        .theme-fuchsia-bold {
            --color-primary: #c026d3;
            --color-secondary: #a21caf;
            --color-accent: #e879f9;
            --color-surface: #ffffff;
            --color-background: #fdf4ff;
            --color-text: #701a75;
            --color-muted: #d946ef;
        }

        .theme-dark-premium {
            --color-primary: #0f172a;
            --color-secondary: #1e293b;
            --color-accent: #38bdf8;
            --color-surface: #1e293b;
            --color-background: #0f172a;
            --color-text: #f8fafc;
            --color-muted: #64748b;
        }

        .theme-ocean-deep {
            --color-primary: #0c4a6e;
            --color-secondary: #075985;
            --color-accent: #38bdf8;
            --color-surface: #ffffff;
            --color-background: #f0f9ff;
            --color-text: #082f49;
            --color-muted: #0284c7;
        }

        .theme-mint-fresh {
            --color-primary: #047857;
            --color-secondary: #065f46;
            --color-accent: #6ee7b7;
            --color-surface: #ffffff;
            --color-background: #ecfdf5;
            --color-text: #064e3b;
            --color-muted: #10b981;
        }

        .theme-gold-premium {
            --color-primary: #854d0e;
            --color-secondary: #a16207;
            --color-accent: #facc15;
            --color-surface: #ffffff;
            --color-background: #fefce8;
            --color-text: #422006;
            --color-muted: #eab308;
        }

        .theme-silver-tech {
            --color-primary: #475569;
            --color-secondary: #334155;
            --color-accent: #cbd5e1;
            --color-surface: #ffffff;
            --color-background: #f8fafc;
            --color-text: #0f172a;
            --color-muted: #94a3b8;
        }

        .gradient-text {
            background: linear-gradient(135deg, var(--color-primary), var(--color-accent));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .service-icon {
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            transform: scale(1.1) rotate(5deg);
        }
    </style>
</head>
<body class="theme-teal-medical antialiased">

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
    <section class="relative min-h-screen flex items-center justify-center px-4 sm:px-6 lg:px-8 overflow-hidden">
        <!-- Background Pattern -->
        <div class="absolute inset-0 opacity-5">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="grid" width="10" height="10" patternUnits="userSpaceOnUse">
                    <path d="M 10 0 L 0 0 0 10" fill="none" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
                <rect width="100" height="100" fill="url(#grid)"/>
            </svg>
        </div>

        <div class="relative z-10 max-w-6xl mx-auto grid lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 text-accent text-sm font-semibold mb-6 border border-accent/20">
                    <span class="w-2 h-2 rounded-full bg-accent animate-pulse"></span>
                    Now Accepting New Patients
                </div>
                
                <h1 class="text-5xl sm:text-6xl lg:text-7xl font-display font-bold text-text leading-tight mb-6">
                    Your Health,<br>
                    <span class="gradient-text">Our Priority</span>
                </h1>
                
                <p class="text-xl text-muted mb-8 max-w-lg mx-auto lg:mx-0 leading-relaxed">
                    Experience compassionate, comprehensive healthcare delivered by board-certified physicians dedicated to your wellbeing.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <button class="px-8 py-4 rounded-full bg-primary text-surface font-semibold text-lg hover:bg-secondary transition-all duration-300 shadow-lg hover:shadow-xl flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Book Appointment
                    </button>
                    <button class="px-8 py-4 rounded-full border-2 border-primary text-primary font-semibold text-lg hover:bg-primary hover:text-surface transition-all duration-300 flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Emergency Line
                    </button>
                </div>

                <!-- Trust Indicators -->
                <div class="mt-12 flex flex-wrap justify-center lg:justify-start gap-8">
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-text">Board Certified</div>
                            <div class="text-sm text-muted">Expert Physicians</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 rounded-full bg-accent/10 flex items-center justify-center">
                            <svg class="w-6 h-6 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div class="text-left">
                            <div class="font-bold text-text">24/7 Care</div>
                            <div class="text-sm text-muted">Always Available</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Content - Round Logo/Medical Cross -->
            <div class="relative flex justify-center lg:justify-end">
                <div class="relative w-80 h-80">
                    <!-- Decorative Rings -->
                    <div class="absolute inset-0 rounded-full border-2 border-accent/20 animate-pulse"></div>
                    <div class="absolute -inset-4 rounded-full border border-accent/10"></div>
                    <div class="absolute -inset-8 rounded-full border border-dashed border-accent/20 animate-spin" style="animation-duration: 20s;"></div>
                    
                    <!-- Main Logo Circle -->
                    <div class="relative w-full h-full rounded-full bg-gradient-to-br from-primary to-secondary p-1 shadow-2xl">
                        <div class="w-full h-full rounded-full bg-surface flex items-center justify-center overflow-hidden">
                            <div class="text-center">
                                <svg class="w-32 h-32 text-accent mx-auto mb-2" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                                </svg>
                                <div class="text-2xl font-display font-bold text-text">MediCare</div>
                                <div class="text-sm text-muted tracking-widest">PLUS</div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-4 -right-4 bg-surface rounded-2xl shadow-xl p-4 border border-accent/10">
                        <div class="flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center text-surface text-xs font-bold">JD</div>
                                <div class="w-8 h-8 rounded-full bg-secondary flex items-center justify-center text-surface text-xs font-bold">SM</div>
                                <div class="w-8 h-8 rounded-full bg-accent flex items-center justify-center text-surface text-xs font-bold">+5</div>
                            </div>
                            <div class="text-left">
                                <div class="text-sm font-bold text-text">15+ Doctors</div>
                                <div class="text-xs text-muted">Available Now</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Links Section -->
    <section class="py-16 px-4 sm:px-6 lg:px-8 bg-surface border-y border-accent/10">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-display font-bold text-text mb-3">Connect With Us</h2>
                <p class="text-muted">Stay updated with health tips and clinic news</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6">
                <!-- Facebook -->
                <a href="#" class="group w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg border border-transparent hover:border-accent/30">
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>

                <!-- Instagram -->
                <a href="#" class="group w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg border border-transparent hover:border-accent/30">
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </a>

                <!-- LinkedIn -->
                <a href="#" class="group w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg border border-transparent hover:border-accent/30">
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                </a>

                <!-- Twitter -->
                <a href="#" class="group w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg border border-transparent hover:border-accent/30">
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                    </svg>
                </a>

                <!-- YouTube -->
                <a href="#" class="group w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg border border-transparent hover:border-accent/30">
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                    </svg>
                </a>

                <!-- WhatsApp -->
                <a href="#" class="group w-20 h-20 rounded-2xl bg-background flex items-center justify-center hover:scale-110 transition-all duration-300 hover:shadow-lg border border-transparent hover:border-accent/30">
                    <svg class="w-8 h-8 text-primary group-hover:text-accent transition-colors" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- What We Do Section -->
    <section class="py-24 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 rounded-full bg-accent/10 text-accent text-sm font-semibold tracking-wide uppercase mb-4">Our Services</span>
                <h2 class="text-4xl sm:text-5xl font-display font-bold text-text mb-6">Comprehensive Care</h2>
                <p class="text-xl text-muted max-w-3xl mx-auto">
                    From preventive care to specialized treatments, we offer a full spectrum of medical services tailored to your needs.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl transition-all duration-300">
                    <div class="service-icon w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-text mb-3">Primary Care</h3>
                    <p class="text-muted leading-relaxed">
                        Comprehensive health assessments, chronic disease management, and preventive care for patients of all ages.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="service-card group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl transition-all duration-300">
                    <div class="service-icon w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-text mb-3">Diagnostics</h3>
                    <p class="text-muted leading-relaxed">
                        State-of-the-art laboratory services, imaging, and diagnostic testing with rapid, accurate results.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="service-card group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl transition-all duration-300">
                    <div class="service-icon w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-text mb-3">Pediatrics</h3>
                    <p class="text-muted leading-relaxed">
                        Specialized care for infants, children, and adolescents in a warm, family-friendly environment.
                    </p>
                </div>

                <!-- Service 4 -->
                <div class="service-card group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl transition-all duration-300">
                    <div class="service-icon w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-text mb-3">Preventive Medicine</h3>
                    <p class="text-muted leading-relaxed">
                        Vaccinations, health screenings, and wellness programs designed to keep you healthy and prevent illness.
                    </p>
                </div>

                <!-- Service 5 -->
                <div class="service-card group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl transition-all duration-300">
                    <div class="service-icon w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-text mb-3">Laboratory Services</h3>
                    <p class="text-muted leading-relaxed">
                        On-site lab testing including blood work, urinalysis, and specialized diagnostic procedures.
                    </p>
                </div>

                <!-- Service 6 -->
                <div class="service-card group p-8 rounded-3xl bg-surface border border-accent/10 hover:border-accent/30 hover:shadow-xl transition-all duration-300">
                    <div class="service-icon w-16 h-16 rounded-2xl bg-accent/10 flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-display font-bold text-text mb-3">Telemedicine</h3>
                    <p class="text-muted leading-relaxed">
                        Virtual consultations and remote care options for convenient access to healthcare from anywhere.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-24 px-4 sm:px-6 lg:px-8 bg-primary text-surface relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <svg class="w-full h-full" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="medical-pattern" width="20" height="20" patternUnits="userSpaceOnUse">
                    <path d="M10 0v20M0 10h20" stroke="currentColor" stroke-width="0.5"/>
                </pattern>
                <rect width="100" height="100" fill="url(#medical-pattern)"/>
            </svg>
        </div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-4xl sm:text-5xl font-display font-bold mb-6">
                Your Health Journey Starts Here
            </h2>
            <p class="text-xl text-surface/80 mb-10 max-w-2xl mx-auto">
                Schedule your appointment today and experience healthcare that puts you first. Our team is ready to provide the personalized care you deserve.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-10 py-4 rounded-full bg-surface text-primary font-bold text-lg hover:scale-105 hover:shadow-xl transition-all duration-300 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Schedule Now
                </button>
                <button class="px-10 py-4 rounded-full border-2 border-surface text-surface font-bold text-lg hover:bg-surface hover:text-primary transition-all duration-300 flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Call Us
                </button>
            </div>

            <div class="mt-12 flex flex-wrap justify-center gap-8 text-sm text-surface/60">
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Same-day appointments available
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Most insurance accepted
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    Online patient portal
                </span>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-secondary text-surface py-12 px-4 sm:px-6 lg:px-8 border-t border-surface/10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-full bg-accent flex items-center justify-center">
                    <svg class="w-6 h-6 text-surface" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.95-.49-7-3.85-7-7.93 0-.62.08-1.21.21-1.79L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3c0-.55-.45-1-1-1H8v-2h2c.55 0 1-.45 1-1V7h2c1.1 0 2-.9 2-2v-.41c2.93 1.19 5 4.06 5 7.41 0 2.08-.8 3.97-2.1 5.39z"/>
                    </svg>
                </div>
                <div>
                    <span class="font-display font-bold text-xl">MediCare Plus</span>
                    <div class="text-xs text-surface/60">Professional Healthcare</div>
                </div>
            </div>
            
            <div class="flex gap-8 text-sm text-surface/60">
                <a href="#" class="hover:text-accent transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-accent transition-colors">Terms of Service</a>
                <a href="#" class="hover:text-accent transition-colors">Patient Portal</a>
                <a href="#" class="hover:text-accent transition-colors">Contact</a>
            </div>
            
            <div class="text-sm text-surface/40">
                © 2024 MediCare Plus. All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        const themes = [
            { name: 'Teal Medical', class: 'theme-teal-medical' },
            { name: 'Blue Clinical', class: 'theme-blue-clinical' },
            { name: 'Green Wellness', class: 'theme-green-wellness' },
            { name: 'Navy Professional', class: 'theme-navy-professional' },
            { name: 'Purple Care', class: 'theme-purple-care' },
            { name: 'Rose Health', class: 'theme-rose-health' },
            { name: 'Coral Warm', class: 'theme-coral-warm' },
            { name: 'Slate Modern', class: 'theme-slate-modern' },
            { name: 'Emerald Fresh', class: 'theme-emerald-fresh' },
            { name: 'Sky Clean', class: 'theme-sky-clean' },
            { name: 'Indigo Trust', class: 'theme-indigo-trust' },
            { name: 'Amber Warm', class: 'theme-amber-warm' },
            { name: 'Cyan Digital', class: 'theme-cyan-digital' },
            { name: 'Lime Vitality', class: 'theme-lime-vitality' },
            { name: 'Pink Gentle', class: 'theme-pink-gentle' },
            { name: 'Violet Royal', class: 'theme-violet-royal' },
            { name: 'Stone Natural', class: 'theme-stone-natural' },
            { name: 'Red Urgent', class: 'theme-red-urgent' },
            { name: 'Zinc Minimal', class: 'theme-zinc-minimal' },
            { name: 'Fuchsia Bold', class: 'theme-fuchsia-bold' },
            { name: 'Dark Premium', class: 'theme-dark-premium' },
            { name: 'Ocean Deep', class: 'theme-ocean-deep' },
            { name: 'Mint Fresh', class: 'theme-mint-fresh' },
            { name: 'Gold Premium', class: 'theme-gold-premium' },
            { name: 'Silver Tech', class: 'theme-silver-tech' }
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