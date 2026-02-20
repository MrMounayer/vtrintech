<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Marcus Steele | Elite Fitness Coach</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Inter"', 'system-ui', 'sans-serif'],
                        display: ['"Oswald"', 'sans-serif'],
                        mono: ['"Roboto Mono"', 'monospace'],
                    },
                    colors: {
                        neon: {
                            lime: '#ccff00',
                            green: '#39ff14',
                            orange: '#ff6b35',
                            red: '#ff3131',
                            blue: '#00f0ff',
                            yellow: '#fff01f',
                        },
                        dark: {
                            900: '#0a0a0a',
                            800: '#141414',
                            700: '#1a1a1a',
                            600: '#222222',
                            500: '#2a2a2a',
                        }
                    },
                    animation: {
                        'pulse-fast': 'pulse 1s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                        'glitch': 'glitch 1s linear infinite',
                        'scan': 'scan 4s linear infinite',
                        'count-up': 'count-up 2s ease-out forwards',
                        'slide-in': 'slide-in 0.6s ease-out',
                        'bounce-slow': 'bounce 2s infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                    },
                    keyframes: {
                        shimmer: {
                            '0%': { backgroundPosition: '-1000px 0' },
                            '100%': { backgroundPosition: '1000px 0' },
                        },
                        glitch: {
                            '0%, 100%': { transform: 'translate(0)' },
                            '20%': { transform: 'translate(-2px, 2px)' },
                            '40%': { transform: 'translate(-2px, -2px)' },
                            '60%': { transform: 'translate(2px, 2px)' },
                            '80%': { transform: 'translate(2px, -2px)' },
                        },
                        scan: {
                            '0%': { transform: 'translateY(-100%)' },
                            '100%': { transform: 'translateY(100%)' },
                        },
                        'count-up': {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        'slide-in': {
                            '0%': { transform: 'translateX(-100%)', opacity: '0' },
                            '100%': { transform: 'translateX(0)', opacity: '1' },
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Oswald:wght@400;500;600;700&family=Roboto+Mono:wght@400;500&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0a0a0a;
            color: #ffffff;
        }
        
        .font-display {
            font-family: 'Oswald', sans-serif;
        }
        
        .font-mono {
            font-family: 'Roboto Mono', monospace;
        }
        
        /* Gritty texture overlay */
        .grit-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.08'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 9999;
        }
        
        /* Scan line effect */
        .scan-line {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(to bottom, transparent, rgba(204, 255, 0, 0.5), transparent);
            animation: scan 4s linear infinite;
            pointer-events: none;
        }
        
        /* Neon glow effects */
        .glow-lime {
            box-shadow: 0 0 20px rgba(204, 255, 0, 0.3), 0 0 40px rgba(204, 255, 0, 0.1);
        }
        
        .glow-orange {
            box-shadow: 0 0 20px rgba(255, 107, 53, 0.3), 0 0 40px rgba(255, 107, 53, 0.1);
        }
        
        .text-glow {
            text-shadow: 0 0 10px currentColor, 0 0 20px currentColor;
        }
        
        /* Progress bar animation */
        .progress-fill {
            background: linear-gradient(90deg, #ccff00 0%, #39ff14 100%);
            background-size: 200% 100%;
            animation: shimmer 2s linear infinite;
        }
        
        /* Hexagon shape */
        .hexagon {
            clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
        }
        
        /* Angled clip */
        .angle-clip {
            clip-path: polygon(0 0, 100% 0, 95% 100%, 0% 100%);
        }
        
        .angle-clip-reverse {
            clip-path: polygon(5% 0, 100% 0, 100% 100%, 0% 100%);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #ccff00;
        }
        
        /* Hide scrollbar for carousels */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }
        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Heart rate animation */
        .heartbeat {
            animation: heartbeat 1.5s ease-in-out infinite;
        }
        
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        /* Barbell loading animation */
        @keyframes load-bar {
            0% { width: 0%; }
            100% { width: 100%; }
        }
        
        .load-bar {
            animation: load-bar 1.5s ease-out forwards;
        }
    </style>
<base target="_blank">
</head>
<body class="antialiased bg-dark-900 text-white overflow-x-hidden">

    <!-- Grit Texture -->
    <div class="grit-overlay"></div>

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-dark-900/90 backdrop-blur-md border-b border-dark-600">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="font-display text-2xl font-bold tracking-tighter">
                MARCUS<span class="text-neon-lime">.</span>STEELE
            </div>
            <div class="hidden md:flex items-center gap-8 font-mono text-xs uppercase tracking-widest">
                <a href="#programs" class="hover:text-neon-lime transition-colors">Programs</a>
                <a href="#results" class="hover:text-neon-lime transition-colors">Results</a>
                <a href="#about" class="hover:text-neon-lime transition-colors">About</a>
                <a href="#contact" class="px-6 py-2 bg-neon-lime text-dark-900 font-bold hover:bg-neon-green transition-colors">
                    Start Training
                </a>
            </div>
            <button class="md:hidden text-neon-lime">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center pt-20 overflow-hidden">
        <!-- Dynamic background elements -->
        <div class="absolute inset-0 bg-gradient-to-br from-dark-900 via-dark-800 to-dark-900"></div>
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-neon-lime/5 to-transparent"></div>
        
        <!-- Grid pattern -->
        <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.03)_1px,transparent_1px),linear-gradient(90deg,rgba(255,255,255,0.03)_1px,transparent_1px)] bg-[size:50px_50px]"></div>
        
        <div class="scan-line"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 py-20 grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content -->
            <div class="space-y-8">
                <!-- Live indicator -->
                <div class="inline-flex items-center gap-3 px-4 py-2 bg-dark-800 border border-dark-600 rounded-full">
                    <span class="w-2 h-2 bg-neon-lime rounded-full animate-pulse-fast"></span>
                    <span class="font-mono text-xs uppercase tracking-widest text-neon-lime">Accepting New Clients</span>
                </div>

                <div class="space-y-4">
                    <h1 class="font-display text-6xl md:text-7xl lg:text-8xl font-bold leading-[0.9] tracking-tight">
                        UNLEASH<br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-lime to-neon-green">YOUR</span><br>
                        POTENTIAL
                    </h1>
                    <p class="text-xl text-gray-400 max-w-lg font-light">
                        Elite personal training for those who refuse to settle for average. Transform your body, dominate your goals.
                    </p>
                </div>

                <!-- Stats -->
                <div class="flex gap-8 py-6 border-y border-dark-600">
                    <div>
                        <div class="font-display text-4xl font-bold text-neon-lime">10+</div>
                        <div class="font-mono text-xs uppercase tracking-widest text-gray-500 mt-1">Years Exp</div>
                    </div>
                    <div>
                        <div class="font-display text-4xl font-bold text-neon-lime">500+</div>
                        <div class="font-mono text-xs uppercase tracking-widest text-gray-500 mt-1">Transformations</div>
                    </div>
                    <div>
                        <div class="font-display text-4xl font-bold text-neon-lime">98%</div>
                        <div class="font-mono text-xs uppercase tracking-widest text-gray-500 mt-1">Success Rate</div>
                    </div>
                </div>

                <!-- CTAs -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#contact" class="group relative px-8 py-4 bg-neon-lime text-dark-900 font-bold uppercase tracking-wider overflow-hidden transition-all hover:glow-lime">
                        <span class="relative z-10 flex items-center justify-center gap-2">
                            Start Your Journey
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </span>
                    </a>
                    <a href="#programs" class="px-8 py-4 border-2 border-dark-600 text-white font-bold uppercase tracking-wider hover:border-neon-lime hover:text-neon-lime transition-all">
                        View Programs
                    </a>
                </div>
            </div>

            <!-- Right - Visual -->
            <div class="relative">
                <!-- Main image container -->
                <div class="relative aspect-[4/5] bg-dark-800 angle-clip overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-t from-dark-900 via-transparent to-transparent z-10"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-neon-lime/20 to-neon-orange/20"></div>
                    
                    <!-- Placeholder for coach image -->
                    <div class="w-full h-full flex items-center justify-center bg-dark-700">
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto mb-4 rounded-full bg-gradient-to-br from-neon-lime to-neon-green flex items-center justify-center">
                                <svg class="w-16 h-16 text-dark-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <p class="font-mono text-xs uppercase tracking-widest text-gray-500">Coach Marcus</p>
                        </div>
                    </div>

                    <!-- Floating badges -->
                    <div class="absolute top-8 left-8 z-20 bg-dark-900/90 backdrop-blur border border-neon-lime/30 px-4 py-2 rounded">
                        <div class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-neon-lime heartbeat" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                            </svg>
                            <span class="font-mono text-xs text-neon-lime">72 BPM</span>
                        </div>
                    </div>

                    <div class="absolute bottom-8 right-8 z-20 bg-dark-900/90 backdrop-blur border border-neon-orange/30 px-4 py-2 rounded">
                        <div class="font-mono text-xs text-neon-orange">BURN MODE: ON</div>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div class="absolute -bottom-6 -left-6 w-24 h-24 border-2 border-neon-lime/30 angle-clip"></div>
                <div class="absolute -top-6 -right-6 w-32 h-32 border-2 border-neon-orange/30 angle-clip-reverse"></div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2">
            <span class="font-mono text-xs uppercase tracking-widest text-gray-500">Scroll</span>
            <div class="w-px h-12 bg-gradient-to-b from-neon-lime to-transparent"></div>
        </div>
    </section>

    <!-- Programs Section -->
    <section id="programs" class="py-24 px-6 bg-dark-800 relative">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <span class="font-mono text-xs uppercase tracking-widest text-neon-lime mb-2 block">Training Programs</span>
                    <h2 class="font-display text-5xl md:text-6xl font-bold">CHOOSE YOUR<br>PATH</h2>
                </div>
                <div class="font-mono text-xs uppercase tracking-widest text-gray-500">
                    All levels welcome • Results guaranteed
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                
                <!-- Program 1: Shred -->
                <div class="group relative bg-dark-900 border border-dark-600 hover:border-neon-lime transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-neon-lime transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
                    
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-dark-800 flex items-center justify-center hexagon">
                                <span class="font-display text-2xl text-neon-lime">01</span>
                            </div>
                            <span class="font-mono text-xs uppercase tracking-widest text-neon-lime border border-neon-lime/30 px-2 py-1">Popular</span>
                        </div>
                        
                        <h3 class="font-display text-3xl font-bold mb-2 group-hover:text-neon-lime transition-colors">SHRED</h3>
                        <p class="text-gray-400 text-sm mb-6">High-intensity fat burning program. 6-week transformation focused on lean muscle and definition.</p>
                        
                        <ul class="space-y-3 mb-8 font-mono text-xs uppercase tracking-wider">
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-lime"></span>
                                6 Weeks Duration
                            </li>
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-lime"></span>
                                5 Days/Week
                            </li>
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-lime"></span>
                                Nutrition Plan Included
                            </li>
                        </ul>
                        
                        <div class="flex justify-between items-center pt-6 border-t border-dark-600">
                            <div>
                                <span class="font-display text-3xl font-bold text-neon-lime">$299</span>
                                <span class="text-gray-500 text-sm ml-2">/month</span>
                            </div>
                            <button class="w-12 h-12 bg-dark-800 flex items-center justify-center group-hover:bg-neon-lime group-hover:text-dark-900 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Program 2: Build -->
                <div class="group relative bg-dark-900 border border-dark-600 hover:border-neon-orange transition-all duration-300 overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-1 bg-neon-orange transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></div>
                    
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-dark-800 flex items-center justify-center hexagon">
                                <span class="font-display text-2xl text-neon-orange">02</span>
                            </div>
                            <span class="font-mono text-xs uppercase tracking-widest text-neon-orange border border-neon-orange/30 px-2 py-1">Advanced</span>
                        </div>
                        
                        <h3 class="font-display text-3xl font-bold mb-2 group-hover:text-neon-orange transition-colors">BUILD</h3>
                        <p class="text-gray-400 text-sm mb-6">Hypertrophy-focused muscle building. Progressive overload system for serious mass gains.</p>
                        
                        <ul class="space-y-3 mb-8 font-mono text-xs uppercase tracking-wider">
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-orange"></span>
                                12 Weeks Duration
                            </li>
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-orange"></span>
                                6 Days/Week
                            </li>
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-orange"></span>
                                Supp Guidance Included
                            </li>
                        </ul>
                        
                        <div class="flex justify-between items-center pt-6 border-t border-dark-600">
                            <div>
                                <span class="font-display text-3xl font-bold text-neon-orange">$399</span>
                                <span class="text-gray-500 text-sm ml-2">/month</span>
                            </div>
                            <button class="w-12 h-12 bg-dark-800 flex items-center justify-center group-hover:bg-neon-orange group-hover:text-dark-900 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Program 3: Elite -->
                <div class="group relative bg-dark-900 border-2 border-neon-lime glow-lime overflow-hidden">
                    <div class="absolute top-0 right-0 bg-neon-lime text-dark-900 font-mono text-xs uppercase tracking-widest px-3 py-1 font-bold">
                        Best Value
                    </div>
                    
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-6">
                            <div class="w-16 h-16 bg-neon-lime/10 flex items-center justify-center hexagon">
                                <span class="font-display text-2xl text-neon-lime">03</span>
                            </div>
                        </div>
                        
                        <h3 class="font-display text-3xl font-bold mb-2 text-neon-lime">ELITE 1:1</h3>
                        <p class="text-gray-400 text-sm mb-6">Fully personalized coaching with direct access. Weekly video calls and custom programming.</p>
                        
                        <ul class="space-y-3 mb-8 font-mono text-xs uppercase tracking-wider">
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-lime"></span>
                                Unlimited Duration
                            </li>
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-lime"></span>
                                Daily Check-ins
                            </li>
                            <li class="flex items-center gap-2 text-gray-300">
                                <span class="w-1.5 h-1.5 bg-neon-lime"></span>
                                24/7 WhatsApp Support
                            </li>
                        </ul>
                        
                        <div class="flex justify-between items-center pt-6 border-t border-dark-600">
                            <div>
                                <span class="font-display text-3xl font-bold text-neon-lime">$799</span>
                                <span class="text-gray-500 text-sm ml-2">/month</span>
                            </div>
                            <button class="w-12 h-12 bg-neon-lime text-dark-900 flex items-center justify-center hover:bg-neon-green transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Results/Transformations -->
    <section id="results" class="py-24 px-6 bg-dark-900 relative overflow-hidden">
        <!-- Background text -->
        <div class="absolute top-1/2 left-0 -translate-y-1/2 font-display text-[20vw] font-bold text-dark-800 whitespace-nowrap pointer-events-none select-none">
            RESULTS RESULTS RESULTS
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="text-center mb-16">
                <span class="font-mono text-xs uppercase tracking-widest text-neon-lime mb-2 block">Client Transformations</span>
                <h2 class="font-display text-5xl md:text-6xl font-bold mb-4">PROOF IS IN THE<br>PROGRESS</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Real clients. Real results. No shortcuts, no excuses, no BS.</p>
            </div>

            <!-- Before/After Carousel -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Transformation 1 -->
                <div class="bg-dark-800 border border-dark-600 overflow-hidden group">
                    <div class="relative aspect-[4/5] bg-dark-700">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-neon-lime/20 to-neon-orange/20 flex items-center justify-center border-2 border-neon-lime/30">
                                    <span class="font-display text-3xl text-neon-lime">-45</span>
                                </div>
                                <p class="font-mono text-xs uppercase tracking-widest text-gray-400">LBS LOST</p>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 bg-neon-lime text-dark-900 font-mono text-xs uppercase px-2 py-1 font-bold">
                            16 Weeks
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold mb-1">James K.</h3>
                        <p class="text-gray-500 text-sm mb-4">Shred Program</p>
                        <div class="flex items-center gap-2 text-neon-lime font-mono text-xs">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            "Completely changed my life"
                        </div>
                    </div>
                </div>

                <!-- Transformation 2 -->
                <div class="bg-dark-800 border border-dark-600 overflow-hidden group">
                    <div class="relative aspect-[4/5] bg-dark-700">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-neon-orange/20 to-neon-red/20 flex items-center justify-center border-2 border-neon-orange/30">
                                    <span class="font-display text-3xl text-neon-orange">+28</span>
                                </div>
                                <p class="font-mono text-xs uppercase tracking-widest text-gray-400">LBS MUSCLE</p>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 bg-neon-orange text-dark-900 font-mono text-xs uppercase px-2 py-1 font-bold">
                            24 Weeks
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold mb-1">Marcus T.</h3>
                        <p class="text-gray-500 text-sm mb-4">Build Program</p>
                        <div class="flex items-center gap-2 text-neon-orange font-mono text-xs">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            "Finally broke my plateau"
                        </div>
                    </div>
                </div>

                <!-- Transformation 3 -->
                <div class="bg-dark-800 border border-dark-600 overflow-hidden group">
                    <div class="relative aspect-[4/5] bg-dark-700">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-24 h-24 mx-auto mb-4 rounded-full bg-gradient-to-br from-neon-blue/20 to-neon-lime/20 flex items-center justify-center border-2 border-neon-blue/30">
                                    <span class="font-display text-3xl text-neon-blue">-32</span>
                                </div>
                                <p class="font-mono text-xs uppercase tracking-widest text-gray-400">LBS LOST</p>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 bg-neon-blue text-dark-900 font-mono text-xs uppercase px-2 py-1 font-bold">
                            20 Weeks
                        </div>
                    </div>
                    <div class="p-6">
                        <h3 class="font-display text-xl font-bold mb-1">Sarah M.</h3>
                        <p class="text-gray-500 text-sm mb-4">Elite 1:1 Coaching</p>
                        <div class="flex items-center gap-2 text-neon-blue font-mono text-xs">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                            "Best investment I've made"
                        </div>
                    </div>
                </div>

            </div>

            <!-- Stats Bar -->
            <div class="mt-16 grid grid-cols-2 md:grid-cols-4 gap-px bg-dark-600">
                <div class="bg-dark-800 p-8 text-center">
                    <div class="font-display text-4xl font-bold text-neon-lime mb-2">2,500+</div>
                    <div class="font-mono text-xs uppercase tracking-widest text-gray-500">LBS Lost Total</div>
                </div>
                <div class="bg-dark-800 p-8 text-center">
                    <div class="font-display text-4xl font-bold text-neon-orange mb-2">1,200+</div>
                    <div class="font-mono text-xs uppercase tracking-widest text-gray-500">LBS Muscle Gained</div>
                </div>
                <div class="bg-dark-800 p-8 text-center">
                    <div class="font-display text-4xl font-bold text-neon-blue mb-2">15,000+</div>
                    <div class="font-mono text-xs uppercase tracking-widest text-gray-500">Workouts Completed</div>
                </div>
                <div class="bg-dark-800 p-8 text-center">
                    <div class="font-display text-4xl font-bold text-neon-lime mb-2">500+</div>
                    <div class="font-mono text-xs uppercase tracking-widest text-gray-500">Success Stories</div>
                </div>
            </div>
        </div>
    </section>

    <!-- About / Why Train With Me -->
    <section id="about" class="py-24 px-6 bg-dark-800">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                
                <div class="relative">
                    <div class="aspect-square bg-dark-700 angle-clip relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-neon-lime/10 to-transparent"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-48 h-48 rounded-full bg-gradient-to-br from-neon-lime to-neon-green flex items-center justify-center">
                                <span class="font-display text-6xl text-dark-900">MS</span>
                            </div>
                        </div>
                        
                        <!-- Floating elements -->
                        <div class="absolute top-8 right-8 bg-dark-900/90 border border-neon-lime/30 px-4 py-2 rounded">
                            <div class="font-mono text-xs text-neon-lime">NASM CERTIFIED</div>
                        </div>
                        <div class="absolute bottom-8 left-8 bg-dark-900/90 border border-neon-orange/30 px-4 py-2 rounded">
                            <div class="font-mono text-xs text-neon-orange">10+ YEARS</div>
                        </div>
                    </div>
                    
                    <!-- Decorative -->
                    <div class="absolute -bottom-4 -right-4 w-full h-full border-2 border-neon-lime/20 angle-clip -z-10"></div>
                </div>

                <div class="space-y-8">
                    <div>
                        <span class="font-mono text-xs uppercase tracking-widest text-neon-lime mb-2 block">Your Coach</span>
                        <h2 class="font-display text-5xl font-bold mb-6">MARCUS STEELE</h2>
                        <p class="text-gray-400 leading-relaxed mb-6">
                            Former competitive athlete turned elite performance coach. I don't do cookie-cutter programs or motivational quotes. I deliver science-backed training, brutal honesty, and results that speak for themselves.
                        </p>
                        <p class="text-gray-400 leading-relaxed">
                            My approach combines strength training fundamentals with modern periodization, metabolic conditioning, and precision nutrition. Every rep, every set, every meal is calculated for maximum impact.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-dark-900 border border-dark-600">
                            <div class="w-12 h-12 bg-neon-lime/10 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neon-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">No BS Approach</h4>
                                <p class="text-sm text-gray-500">Hard work, real science, zero gimmicks</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4 p-4 bg-dark-900 border border-dark-600">
                            <div class="w-12 h-12 bg-neon-orange/10 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neon-orange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">Custom Programming</h4>
                                <p class="text-sm text-gray-500">Built for your body, your goals, your life</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center gap-4 p-4 bg-dark-900 border border-dark-600">
                            <div class="w-12 h-12 bg-neon-blue/10 flex items-center justify-center">
                                <svg class="w-6 h-6 text-neon-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white">24/7 Accountability</h4>
                                <p class="text-sm text-gray-500">Direct access, daily check-ins, no excuses</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Social Proof / Instagram Feed -->
    <section class="py-24 px-6 bg-dark-900 border-y border-dark-600">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <span class="font-mono text-xs uppercase tracking-widest text-neon-lime mb-2 block">Community</span>
                    <h2 class="font-display text-4xl md:text-5xl font-bold">JOIN THE SQUAD</h2>
                </div>
                <a href="#" class="flex items-center gap-2 text-neon-lime hover:text-neon-green transition-colors font-mono text-xs uppercase tracking-widest">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    @marcussteele
                </a>
            </div>

            <!-- Social Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square bg-dark-800 border border-dark-600 hover:border-neon-lime transition-colors cursor-pointer group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-neon-lime/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-8 h-8 text-gray-600 group-hover:text-neon-lime transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="aspect-square bg-dark-800 border border-dark-600 hover:border-neon-lime transition-colors cursor-pointer group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-neon-orange/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-8 h-8 text-gray-600 group-hover:text-neon-orange transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="aspect-square bg-dark-800 border border-dark-600 hover:border-neon-lime transition-colors cursor-pointer group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-neon-blue/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-8 h-8 text-gray-600 group-hover:text-neon-blue transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="aspect-square bg-dark-800 border border-dark-600 hover:border-neon-lime transition-colors cursor-pointer group relative overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-neon-lime/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-8 h-8 text-gray-600 group-hover:text-neon-lime transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <p class="text-gray-500 font-mono text-sm">Join <span class="text-neon-lime">50,000+</span> followers tracking their fitness journey</p>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="py-32 px-6 bg-dark-900 relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,_var(--tw-gradient-stops))] from-neon-lime/5 via-transparent to-transparent"></div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-dark-800 border border-neon-lime/30 rounded-full mb-8">
                <span class="w-2 h-2 bg-neon-lime rounded-full animate-pulse"></span>
                <span class="font-mono text-xs uppercase tracking-widest text-neon-lime">Limited Spots Available</span>
            </div>
            
            <h2 class="font-display text-5xl md:text-7xl font-bold mb-6">
                READY TO <span class="text-transparent bg-clip-text bg-gradient-to-r from-neon-lime to-neon-green">TRANSFORM?</span>
            </h2>
            
            <p class="text-gray-400 text-lg mb-12 max-w-2xl mx-auto">
                Stop waiting for Monday. Stop waiting for the perfect time. The only perfect time is now. Let's build something legendary.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:train@marcussteele.com" class="group relative px-10 py-5 bg-neon-lime text-dark-900 font-bold uppercase tracking-wider overflow-hidden transition-all hover:glow-lime">
                    <span class="relative z-10 flex items-center justify-center gap-3">
                        Apply Now
                        <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </span>
                </a>
                <a href="https://calendly.com" target="_blank" class="px-10 py-5 border-2 border-dark-600 text-white font-bold uppercase tracking-wider hover:border-neon-lime hover:text-neon-lime transition-all">
                    Book Consultation
                </a>
            </div>

            <div class="mt-16 flex flex-wrap justify-center gap-8 text-gray-500 font-mono text-xs uppercase tracking-widest">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-neon-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    train@marcussteele.com
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-neon-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    +1 (555) 123-4567
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4 text-neon-lime" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Los Angeles, CA
                </span>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-dark-800 border-t border-dark-600 py-8 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="font-display text-xl font-bold">
                MARCUS<span class="text-neon-lime">.</span>STEELE
            </div>
            <div class="font-mono text-xs uppercase tracking-widest text-gray-500">
                © 2024 — No Excuses, Just Results
            </div>
        </div>
    </footer>

    <script>
        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Counter animation on scroll
        const observerOptions = {
            threshold: 0.5
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-count-up');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.font-display.text-4xl').forEach(el => {
            observer.observe(el);
        });

        // Parallax effect for hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.absolute.top-0.right-0');
            if (parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>
</body>
</html>