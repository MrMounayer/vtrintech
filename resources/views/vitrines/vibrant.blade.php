<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creative Studio | Bold Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Poppins', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        prime: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c2d6b',
                        },
                        vibrant: {
                            purple: '#a855f7',
                            pink: '#ec4899',
                            orange: '#f97316',
                            lime: '#84cc16',
                            cyan: '#06b6d4',
                        },
                    },
                    animation: {
                        'float': 'float 4s ease-in-out infinite',
                        'bounce-slow': 'bounce-slow 3s ease-in-out infinite',
                        'spin-slow': 'spin-slow 8s linear infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                            '50%': { transform: 'translateY(-20px) rotate(5deg)' },
                        },
                        'bounce-slow': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        'spin-slow': {
                            'from': { transform: 'rotate(0deg)' },
                            'to': { transform: 'rotate(360deg)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(168, 85, 247, 0.5)' },
                            '50%': { boxShadow: '0 0 40px rgba(168, 85, 247, 0.8)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #111827 50%, #1e293b 100%);
            color: #f1f5f9;
            overflow-x: hidden;
            position: relative;
        }

        html {
            scroll-behavior: smooth;
        }

        ::selection {
            background-color: #a855f7;
            color: #f1f5f9;
        }

        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: rgba(15, 23, 42, 0.5);
        }
        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, #a855f7 0%, #ec4899 100%);
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, #9333ea 0%, #db2777 100%);
        }

        .gradient-text {
            background: linear-gradient(90deg, #0ea5e9, #a855f7, #ec4899);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-text-v2 {
            background: linear-gradient(90deg, #ec4899, #f97316, #84cc16);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .gradient-border {
            border-image: linear-gradient(135deg, #0ea5e9, #a855f7, #ec4899) 1;
        }

        .glow-element {
            position: relative;
        }

        .glow-element::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: inherit;
            background: linear-gradient(135deg, #0ea5e9, #a855f7, #ec4899);
            z-index: -1;
            filter: blur(15px);
            opacity: 0.3;
        }

        .blob {
            position: absolute;
            filter: blur(80px);
            opacity: 0.3;
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }

        .animated-bg {
            background: linear-gradient(-45deg, #0ea5e9, #a855f7, #ec4899, #f97316);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card-gradient-1 {
            background: linear-gradient(135deg, rgba(14, 165, 233, 0.1) 0%, rgba(168, 85, 247, 0.05) 100%);
            border: 1px solid rgba(14, 165, 233, 0.2);
        }

        .card-gradient-2 {
            background: linear-gradient(135deg, rgba(168, 85, 247, 0.1) 0%, rgba(236, 72, 153, 0.05) 100%);
            border: 1px solid rgba(168, 85, 247, 0.2);
        }

        .card-gradient-3 {
            background: linear-gradient(135deg, rgba(236, 72, 153, 0.1) 0%, rgba(249, 115, 22, 0.05) 100%);
            border: 1px solid rgba(236, 72, 153, 0.2);
        }

        .card-gradient-4 {
            background: linear-gradient(135deg, rgba(249, 115, 22, 0.1) 0%, rgba(132, 204, 22, 0.05) 100%);
            border: 1px solid rgba(249, 115, 22, 0.2);
        }

        .hover-lift {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .hover-lift:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px -15px rgba(168, 85, 247, 0.3);
        }

        .cursor-dot,
        .cursor-ring {
            position: fixed;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 9999;
            pointer-events: none;
        }
        .cursor-dot {
            width: 8px;
            height: 8px;
            background: linear-gradient(45deg, #0ea5e9, #a855f7);
        }
        .cursor-ring {
            width: 40px;
            height: 40px;
            border: 2px solid;
            border-image: linear-gradient(45deg, #0ea5e9, #a855f7) 1;
            transition: width 0.3s, height 0.3s;
        }
        
        body {
            cursor: none;
        }
        a, button, input, textarea, select {
            cursor: none;
        }

        .grain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9000;
            opacity: 0.02;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        .shimmer {
            position: relative;
        }
        .shimmer::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: shimmer 3s infinite;
        }

        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }

        .accent-icon {
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .hover-lift:hover .accent-icon {
            transform: rotate(360deg) scale(1.2);
        }

        .feature-dot {
            display: inline-block;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            animation: pulse-glow 2s ease-in-out infinite;
        }

        .neon-text {
            text-shadow: 0 0 10px rgba(168, 85, 247, 0.5), 0 0 20px rgba(14, 165, 233, 0.3);
        }
    </style>
</head>
<body class="antialiased">

    <!-- Grain Overlay -->
    <div class="grain"></div>

    <!-- Custom Cursor -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-ring hidden md:block"></div>

    <!-- Animated Background Blobs -->
    <div class="blob bg-vibrant-cyan w-96 h-96 rounded-full top-20 left-10"></div>
    <div class="blob bg-vibrant-purple w-80 h-80 rounded-full top-1/2 right-20"></div>
    <div class="blob bg-vibrant-pink w-72 h-72 rounded-full bottom-1/4 left-1/3"></div>
    <div class="blob bg-vibrant-orange w-96 h-96 rounded-full -bottom-10 right-1/4"></div>

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex flex-col px-6 md:px-16 py-8 overflow-hidden">
        <!-- Animated Grid Background -->
        <div class="absolute inset-0 opacity-10 -z-10">
            <div class="absolute inset-0" style="background-image: linear-gradient(rgba(168, 85, 247, 0.3) 1px, transparent 1px), linear-gradient(90deg, rgba(168, 85, 247, 0.3) 1px, transparent 1px); background-size: 50px 50px;"></div>
        </div>

        <!-- Navigation -->
        <nav class="flex justify-between items-center relative z-20 mb-12">
            <div class="flex items-center gap-3 group">
                <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-vibrant-cyan via-vibrant-purple to-vibrant-pink flex items-center justify-center shadow-lg shadow-vibrant-purple/50 group-hover:shadow-xl group-hover:shadow-vibrant-purple/70 transition-all">
                    <span class="text-white font-display text-lg font-bold">CS</span>
                </div>
                <span class="font-display text-xl tracking-wider gradient-text font-semibold">Creative Studio</span>
            </div>
            <button onclick="scrollToSection('contact')" class="px-6 py-2 border-2 border-vibrant-cyan text-vibrant-cyan rounded-full text-sm tracking-wider font-semibold hover:bg-vibrant-cyan hover:text-slate-900 transition-all duration-300">
                Let's Build
            </button>
        </nav>

        <!-- Hero Content -->
        <div class="flex-1 flex flex-col lg:flex-row items-center gap-12 lg:gap-20 relative z-10 justify-center">
            <!-- Left Content -->
            <div class="flex-1 text-center lg:text-left">
                <div class="inline-block mb-6 lg:mb-2">
                    <p class="text-vibrant-cyan text-sm tracking-[0.3em] uppercase font-semibold px-4 py-2 rounded-full border border-vibrant-cyan/50">Innovation & Design</p>
                </div>
                
                <h1 class="font-display text-5xl md:text-7xl lg:text-8xl leading-[0.95] mb-8 font-bold">
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full">Create</span>
                    </span>
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full gradient-text-v2">Without Limits</span>
                    </span>
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full">Today</span>
                    </span>
                </h1>

                <p class="text-slate-300 text-lg max-w-md mx-auto lg:mx-0 mb-10 leading-relaxed hero-fade opacity-0">
                    Bold ideas meet beautiful execution. We push boundaries, challenge conventions, and create digital experiences that captivate and inspire.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start hero-fade opacity-0">
                    <button onclick="scrollToSection('services')" class="px-8 py-4 bg-gradient-to-r from-vibrant-purple to-vibrant-pink text-white rounded-full text-sm tracking-wider font-semibold hover:shadow-2xl hover:shadow-vibrant-purple/50 transition-all duration-300 hover:scale-105">
                        See Our Work
                    </button>
                    <button onclick="scrollToSection('socials')" class="px-8 py-4 bg-slate-900/50 text-white border-2 border-vibrant-cyan rounded-full text-sm tracking-wider font-semibold hover:bg-vibrant-cyan hover:text-slate-900 transition-all duration-300 hover:shadow-lg hover:shadow-vibrant-cyan/50">
                        Join Us Online
                    </button>
                </div>
            </div>

            <!-- Right Showcase -->
            <div class="flex-1 relative h-[450px] lg:h-[550px] w-full max-w-md">
                <!-- Floating Cards -->
                <div class="absolute top-0 right-0 w-72 h-72 card-gradient-1 rounded-2xl p-6 hero-img opacity-0 translate-y-10 border-2 border-vibrant-cyan/30 shadow-2xl shadow-vibrant-cyan/20" style="animation-delay: 0.2s;">
                    <div class="w-full h-full rounded-lg bg-gradient-to-br from-vibrant-cyan/20 to-vibrant-purple/20 flex items-center justify-center">
                        <div class="w-20 h-20 rounded-full border-3 border-vibrant-cyan animate-spin-slow"></div>
                    </div>
                </div>

                <div class="absolute bottom-8 left-0 w-64 h-64 card-gradient-2 rounded-2xl p-6 hero-img opacity-0 translate-y-10 border-2 border-vibrant-purple/30 shadow-2xl shadow-vibrant-purple/20" style="animation-delay: 0.4s;">
                    <div class="w-full h-full rounded-lg bg-gradient-to-br from-vibrant-purple/20 to-vibrant-pink/20 flex items-center justify-center">
                        <div class="flex gap-4">
                            <div class="w-3 h-12 bg-vibrant-pink rounded-full animate-bounce-slow" style="animation-delay: 0s;"></div>
                            <div class="w-3 h-12 bg-vibrant-purple rounded-full animate-bounce-slow" style="animation-delay: 0.1s;"></div>
                            <div class="w-3 h-12 bg-vibrant-cyan rounded-full animate-bounce-slow" style="animation-delay: 0.2s;"></div>
                        </div>
                    </div>
                </div>

                <div class="absolute -bottom-5 right-10 w-56 h-56 card-gradient-3 rounded-full hero-img opacity-0 scale-75 translate-y-10 border-3 border-vibrant-orange/40 shadow-2xl shadow-vibrant-orange/30" style="animation-delay: 0.6s;"></div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-3 opacity-60">
            <p class="text-xs tracking-widest uppercase text-slate-400">Scroll to explore</p>
            <div class="w-[2px] h-12 bg-gradient-to-b from-vibrant-purple to-vibrant-pink animate-pulse"></div>
        </div>
    </section>

    <!-- SOCIAL LINKS SECTION -->
    <section id="socials" class="py-32 px-6 md:px-16 bg-slate-900/50 backdrop-blur relative overflow-hidden border-t border-vibrant-purple/20">
        <!-- Gradient Overlay -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-vibrant-purple rounded-full blur-3xl opacity-10 -z-10"></div>

        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-vibrant-cyan text-sm tracking-[0.3em] uppercase block mb-4 font-semibold">Everywhere</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-6">
                    <span class="gradient-text">Follow the Journey</span>
                </h2>
                <p class="text-slate-300 max-w-lg mx-auto text-lg leading-relaxed">
                    Stay connected with our community. See what we're creating, thinking, and building every single day.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Discord -->
                <div class="hover-lift card-gradient-1 rounded-2xl p-8 flex flex-col items-center text-center group shimmer">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-600 to-blue-400 rounded-full shadow-lg shadow-blue-600/50 flex items-center justify-center mb-6 accent-icon group-hover:shadow-xl transition-all">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515a.074.074 0 0 0-.079.037c-.211.375-.444.864-.607 1.25a18.27 18.27 0 0 0-5.487 0c-.163-.386-.395-.875-.607-1.25a.077.077 0 0 0-.079-.037A19.736 19.736 0 0 0 3.677 4.37a.07.07 0 0 0-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 0 0 .031.057a19.9 19.9 0 0 0 5.993 3.03a.078.078 0 0 0 .084-.028a14.975 14.975 0 0 0 1.293-2.1a.07.07 0 0 0-.038-.098a13.11 13.11 0 0 1-1.872-.892a.072.072 0 0 1-.007-.12a10.149 10.149 0 0 0 .372-.294a.074.074 0 0 1 .076-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 0 1 .076.01a10.19 10.19 0 0 0 .372.294a.072.072 0 0 1-.006.12a13.1 13.1 0 0 1-1.873.892a.07.07 0 0 0-.037.099a14.997 14.997 0 0 0 1.293 2.1a.078.078 0 0 0 .084.028a19.963 19.963 0 0 0 6.002-3.03a.079.079 0 0 0 .033-.057c.5-4.505-.838-8.962-3.552-12.66a.06.06 0 0 0-.031-.027zM8.02 15.33c-1.183 0-2.157-.965-2.157-2.156c0-1.193.964-2.157 2.157-2.157c1.193 0 2.156.964 2.157 2.157c0 1.19-.964 2.156-2.157 2.156zm7.975 0c-1.183 0-2.157-.965-2.157-2.156c0-1.193.964-2.157 2.157-2.157c1.192 0 2.156.964 2.157 2.157c0 1.19-.965 2.156-2.157 2.156z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2 text-slate-100">Discord</h3>
                    <p class="text-sm text-slate-400 mb-4">Join our community</p>
                    <span class="text-xs tracking-widest uppercase text-vibrant-cyan font-semibold group-hover:text-blue-400 transition-colors">Enter Server</span>
                </div>

                <!-- Twitter/X -->
                <div class="hover-lift card-gradient-2 rounded-2xl p-8 flex flex-col items-center text-center group shimmer" style="animation-delay: 0.1s;">
                    <div class="w-16 h-16 bg-black rounded-full shadow-lg shadow-slate-600/50 flex items-center justify-center mb-6 accent-icon group-hover:shadow-xl transition-all">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24h-6.514l-5.106-6.694L2.896 21.75H.588l7.73-8.835L.316 2.25h6.678l4.821 6.383 5.849-6.383zM17.15 19.128h2.295l-14.796-19.533h-2.458L17.15 19.128z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2 text-slate-100">Twitter</h3>
                    <p class="text-sm text-slate-400 mb-4">Daily updates</p>
                    <span class="text-xs tracking-widest uppercase text-vibrant-cyan font-semibold group-hover:text-slate-200 transition-colors">Follow us</span>
                </div>

                <!-- Instagram -->
                <div class="hover-lift card-gradient-3 rounded-2xl p-8 flex flex-col items-center text-center group shimmer" style="animation-delay: 0.2s;">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-600 via-red-500 to-yellow-500 rounded-full shadow-lg shadow-pink-600/50 flex items-center justify-center mb-6 accent-icon group-hover:shadow-xl transition-all">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2 text-slate-100">Instagram</h3>
                    <p class="text-sm text-slate-400 mb-4">Visual stories</p>
                    <span class="text-xs tracking-widest uppercase text-vibrant-cyan font-semibold group-hover:text-pink-400 transition-colors">See posts</span>
                </div>

                <!-- YouTube -->
                <div class="hover-lift card-gradient-4 rounded-2xl p-8 flex flex-col items-center text-center group shimmer" style="animation-delay: 0.3s;">
                    <div class="w-16 h-16 bg-red-600 rounded-full shadow-lg shadow-red-600/50 flex items-center justify-center mb-6 accent-icon group-hover:shadow-xl transition-all">
                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold mb-2 text-slate-100">YouTube</h3>
                    <p class="text-sm text-slate-400 mb-4">Tutorials & demos</p>
                    <span class="text-xs tracking-widest uppercase text-vibrant-cyan font-semibold group-hover:text-red-400 transition-colors">Subscribe</span>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO SECTION -->
    <section id="services" class="py-32 px-6 md:px-16 bg-slate-800/40 relative overflow-hidden border-t border-vibrant-pink/20">
        <div class="absolute top-0 right-0 w-96 h-96 bg-vibrant-orange rounded-full blur-3xl opacity-10 -z-10"></div>
        <div class="absolute bottom-0 left-1/4 w-72 h-72 bg-vibrant-lime rounded-full blur-3xl opacity-5 -z-10"></div>

        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-vibrant-orange text-sm tracking-[0.3em] uppercase block mb-4 font-semibold">Capabilities</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-6">
                    What We <span class="gradient-text-v2">Create</span>
                </h2>
                <p class="text-slate-300 max-w-2xl mx-auto text-lg leading-relaxed">
                    From concept to launch, we handle every aspect of bringing your vision to life with excellence and creativity.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16">
                <!-- Service 1 -->
                <div class="hover-lift group card-gradient-1 rounded-2xl p-8 overflow-hidden relative shimmer">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-gradient-to-br from-vibrant-cyan to-vibrant-purple rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-gradient-to-br from-vibrant-cyan to-vibrant-purple rounded-xl flex items-center justify-center mb-6 accent-icon shadow-lg shadow-vibrant-cyan/40">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-slate-100 mb-4">Web Design</h3>
                        <p class="text-slate-300 leading-relaxed mb-6">
                            Beautiful, responsive websites that engage users and drive conversions. Modern design meets functionality.
                        </p>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-cyan to-vibrant-purple rounded-full"></span>
                                UI/UX Design
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-cyan to-vibrant-purple rounded-full"></span>
                                Responsive Layouts
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-cyan to-vibrant-purple rounded-full"></span>
                                Accessibility First
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="hover-lift group card-gradient-2 rounded-2xl p-8 overflow-hidden relative shimmer" style="animation-delay: 0.1s;">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-gradient-to-br from-vibrant-purple to-vibrant-pink rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-gradient-to-br from-vibrant-purple to-vibrant-pink rounded-xl flex items-center justify-center mb-6 accent-icon shadow-lg shadow-vibrant-purple/40">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-slate-100 mb-4">Brand Design</h3>
                        <p class="text-slate-300 leading-relaxed mb-6">
                            Complete brand identity systems that tell your story and resonate with your audience.
                        </p>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-purple to-vibrant-pink rounded-full"></span>
                                Logo Design
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-purple to-vibrant-pink rounded-full"></span>
                                Brand Guidelines
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-purple to-vibrant-pink rounded-full"></span>
                                Identity Systems
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="hover-lift group card-gradient-3 rounded-2xl p-8 overflow-hidden relative shimmer" style="animation-delay: 0.2s;">
                    <div class="absolute -top-10 -right-10 w-40 h-40 bg-gradient-to-br from-vibrant-pink to-vibrant-orange rounded-full opacity-0 group-hover:opacity-20 transition-opacity duration-500"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-gradient-to-br from-vibrant-pink to-vibrant-orange rounded-xl flex items-center justify-center mb-6 accent-icon shadow-lg shadow-vibrant-pink/40">
                            <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                            </svg>
                        </div>
                        <h3 class="font-display text-2xl font-bold text-slate-100 mb-4">Digital Strategy</h3>
                        <p class="text-slate-300 leading-relaxed mb-6">
                            Data-driven strategies that align with your business goals and maximize your ROI.
                        </p>
                        <ul class="space-y-2 text-sm text-slate-400">
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-orange to-vibrant-lime rounded-full"></span>
                                SEO Optimization
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-orange to-vibrant-lime rounded-full"></span>
                                Analytics & Insights
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-2 h-2 bg-gradient-to-r from-vibrant-orange to-vibrant-lime rounded-full"></span>
                                Growth Marketing
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Stats with Gradient Background -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mt-20 pt-20 border-t border-vibrant-purple/20">
                <div class="relative text-center p-6 bg-gradient-to-br from-vibrant-cyan/10 to-vibrant-purple/5 rounded-xl border border-vibrant-cyan/20">
                    <div class="font-display text-5xl font-bold bg-gradient-to-r from-vibrant-cyan to-vibrant-purple bg-clip-text text-transparent mb-2">250+</div>
                    <p class="text-slate-300 font-medium">Projects Built</p>
                </div>
                <div class="relative text-center p-6 bg-gradient-to-br from-vibrant-purple/10 to-vibrant-pink/5 rounded-xl border border-vibrant-purple/20">
                    <div class="font-display text-5xl font-bold bg-gradient-to-r from-vibrant-purple to-vibrant-pink bg-clip-text text-transparent mb-2">50+</div>
                    <p class="text-slate-300 font-medium">Team Members</p>
                </div>
                <div class="relative text-center p-6 bg-gradient-to-br from-vibrant-pink/10 to-vibrant-orange/5 rounded-xl border border-vibrant-pink/20">
                    <div class="font-display text-5xl font-bold bg-gradient-to-r from-vibrant-pink to-vibrant-orange bg-clip-text text-transparent mb-2">8+</div>
                    <p class="text-slate-300 font-medium">Years Experience</p>
                </div>
                <div class="relative text-center p-6 bg-gradient-to-br from-vibrant-orange/10 to-vibrant-lime/5 rounded-xl border border-vibrant-orange/20">
                    <div class="font-display text-5xl font-bold bg-gradient-to-r from-vibrant-orange to-vibrant-lime bg-clip-text text-transparent mb-2">99%</div>
                    <p class="text-slate-300 font-medium">Client Happiness</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-40 px-6 md:px-16 overflow-hidden border-t border-vibrant-cyan/20">
        <div class="absolute inset-0 animated-bg -z-10" style="opacity: 0.1;"></div>
        <div class="absolute top-1/2 left-0 w-96 h-96 bg-vibrant-purple rounded-full blur-3xl opacity-15 -z-10 transform -translate-y-1/2"></div>
        <div class="absolute top-1/2 right-0 w-96 h-96 bg-vibrant-cyan rounded-full blur-3xl opacity-15 -z-10 transform -translate-y-1/2"></div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight">
                Ready to
                <span class="block mt-4 gradient-text">Create Magic?</span>
            </h2>

            <p class="text-xl text-slate-300 mb-12 leading-relaxed max-w-2xl mx-auto">
                Whether you're launching something new or reimagining what already exists, we're here to help you build something extraordinary that resonates with your audience.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                <button class="px-12 py-5 bg-gradient-to-r from-vibrant-purple via-vibrant-pink to-vibrant-orange text-white rounded-full text-base font-semibold tracking-wider hover:shadow-3xl hover:shadow-vibrant-purple/60 transition-all duration-300 transform hover:scale-105 font-display">
                    Start Building
                </button>
                <button class="px-12 py-5 border-2 border-gradient-text text-slate-100 rounded-full text-base font-semibold tracking-wider hover:bg-slate-800/50 transition-all duration-300 group gradient-border font-display">
                    Let's Chat First
                </button>
            </div>

            <p class="text-slate-400 text-sm">
                <span class="inline-block w-2 h-2 bg-vibrant-cyan rounded-full mr-2 animate-pulse"></span>
                We typically respond within 2 hours
            </p>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer class="bg-slate-950/80 backdrop-blur text-slate-400 py-16 px-6 md:px-16 relative border-t border-vibrant-cyan/10">
        <div class="absolute inset-0 opacity-20">
            <div class="absolute top-0 right-1/3 w-96 h-96 bg-vibrant-purple rounded-full blur-3xl opacity-10"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12 pb-12 border-b border-slate-800/50">
                <!-- Brand -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-11 h-11 rounded-xl bg-gradient-to-br from-vibrant-cyan via-vibrant-purple to-vibrant-pink flex items-center justify-center shadow-lg shadow-vibrant-purple/50">
                            <span class="text-white font-display text-lg font-bold">CS</span>
                        </div>
                        <span class="font-display text-lg font-bold gradient-text">Creative Studio</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-500">
                        We craft bold, beautiful digital experiences that inspire and engage.
                    </p>
                </div>

                <!-- Services -->
                <div>
                    <h4 class="text-slate-100 font-semibold mb-4 text-sm tracking-wider uppercase">Services</h4>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="hover:text-vibrant-cyan transition-colors">Web Design</li>
                        <li class="hover:text-vibrant-purple transition-colors">Brand Design</li>
                        <li class="hover:text-vibrant-pink transition-colors">Digital Strategy</li>
                        <li class="hover:text-vibrant-orange transition-colors">Development</li>
                    </ul>
                </div>

                <!-- Company -->
                <div>
                    <h4 class="text-slate-100 font-semibold mb-4 text-sm tracking-wider uppercase">Company</h4>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="hover:text-vibrant-cyan transition-colors">About Us</li>
                        <li class="hover:text-vibrant-purple transition-colors">Portfolio</li>
                        <li class="hover:text-vibrant-pink transition-colors">Our Team</li>
                        <li class="hover:text-vibrant-orange transition-colors">Careers</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-slate-100 font-semibold mb-4 text-sm tracking-wider uppercase">Contact</h4>
                    <ul class="space-y-3 text-sm text-slate-500">
                        <li>Monday – Friday<br><span class="text-slate-400">9:00 AM – 6:00 PM</span></li>
                        <li class="mt-4 pt-4 border-t border-slate-800">
                            <span class="text-vibrant-cyan font-semibold">hello@creativestudio.io</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="flex flex-col md:flex-row justify-between items-center pt-8 gap-6">
                <p class="text-sm text-slate-600">
                    © 2026 Creative Studio. All rights reserved.
                </p>
                <div class="flex items-center gap-6 text-sm text-slate-500">
                    <span class="hover:text-vibrant-cyan transition-colors cursor-pointer">Privacy Policy</span>
                    <span class="w-1 h-1 bg-slate-700 rounded-full"></span>
                    <span class="hover:text-vibrant-purple transition-colors cursor-pointer">Terms of Service</span>
                    <span class="w-1 h-1 bg-slate-700 rounded-full"></span>
                    <span class="hover:text-vibrant-pink transition-colors cursor-pointer">Cookie Policy</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        gsap.registerPlugin(ScrollTrigger);

        // Scroll behavior
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Custom cursor with gradient
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorRing = document.querySelector('.cursor-ring');

        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            if (cursorDot) {
                cursorDot.style.left = posX + 'px';
                cursorDot.style.top = posY + 'px';
            }

            if (cursorRing) {
                cursorRing.style.left = posX + 'px';
                cursorRing.style.top = posY + 'px';
            }
        });

        // Cursor interaction
        const interactiveElements = document.querySelectorAll('a, button, input, textarea, select');
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                if (cursorRing) {
                    cursorRing.style.width = '56px';
                    cursorRing.style.height = '56px';
                    cursorRing.style.borderColor = '#a855f7';
                }
            });
            element.addEventListener('mouseleave', () => {
                if (cursorRing) {
                    cursorRing.style.width = '40px';
                    cursorRing.style.height = '40px';
                    cursorRing.style.borderColor = '#0ea5e9';
                }
            });
        });

        // Hero animations
        const timeline = gsap.timeline();

        timeline.from('.hero-reveal', {
            duration: 0.8,
            y: 100,
            opacity: 0,
            stagger: 0.15,
            ease: 'power4.out'
        });

        timeline.from('.hero-fade', {
            duration: 1,
            opacity: 0,
            y: 20,
            stagger: 0.15,
            ease: 'power3.out'
        }, '<0.3');

        timeline.from('.hero-img', {
            duration: 1,
            opacity: 0,
            y: 40,
            stagger: 0.15,
            ease: 'power3.out'
        }, '<0.3');

        // Scroll animations
        gsap.utils.toArray('.hover-lift').forEach((element) => {
            gsap.from(element, {
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    end: 'top 50%',
                    scrub: 1,
                },
                opacity: 0,
                y: 60,
                duration: 0.8
            });
        });

        // Smooth scroll links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>
