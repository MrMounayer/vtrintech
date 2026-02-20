<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sage & Stone Interiors | Curated Living Spaces</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Lato', 'sans-serif'],
                        serif: ['Playfair Display', 'serif'],
                    },
                    colors: {
                        sage: {
                            50: '#f6f7f4',
                            100: '#e8ebe4',
                            200: '#d5dbd0',
                            300: '#b8c4af',
                            400: '#95a688',
                            500: '#7a8a6b',
                            600: '#5f6e52',
                            700: '#4b5741',
                            800: '#3e4636',
                            900: '#343b2e',
                        },
                        clay: '#c4a484',
                        cream: '#faf8f5',
                        charcoal: '#2c2c2c',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'breathe': 'breathe 8s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        breathe: {
                            '0%, 100%': { transform: 'scale(1)' },
                            '50%': { transform: 'scale(1.02)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #faf8f5;
            color: #2c2c2c;
            overflow-x: hidden;
        }

        /* Smooth Scrolling */
        html {
            scroll-behavior: smooth;
        }

        /* Custom Selection */
        ::selection {
            background-color: #7a8a6b;
            color: #faf8f5;
        }

        /* Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f6f7f4;
        }
        ::-webkit-scrollbar-thumb {
            background: #b8c4af;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #7a8a6b;
        }

        /* Organic Shapes */
        .blob {
            position: absolute;
            filter: blur(60px);
            opacity: 0.4;
            z-index: 0;
            animation: breathe 10s ease-in-out infinite;
        }

        /* Image Hover Effects */
        .img-hover-zoom {
            overflow: hidden;
        }
        .img-hover-zoom img {
            transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .img-hover-zoom:hover img {
            transform: scale(1.08);
        }

        /* Text Reveal */
        .reveal-text {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
        }

        /* Custom Cursor */
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
            width: 6px;
            height: 6px;
            background-color: #7a8a6b;
        }
        .cursor-ring {
            width: 32px;
            height: 32px;
            border: 1px solid #7a8a6b;
            transition: width 0.3s, height 0.3s, background-color 0.3s;
        }
        
        body {
            cursor: none;
        }
        a, button, input, textarea, select {
            cursor: none;
        }

        /* Handwritten accent */
        .handwritten {
            font-family: 'Playfair Display', serif;
            font-style: italic;
        }

        /* Grain texture overlay */
        .grain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9000;
            opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        /* Social Card Hover */
        .social-card {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .social-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(122, 138, 107, 0.3);
        }
        .social-card:hover .social-icon {
            transform: rotate(360deg);
        }
        .social-icon {
            transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
    </style>
</head>
<body class="antialiased">

    <!-- Grain Overlay -->
    <div class="grain"></div>

    <!-- Custom Cursor -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-ring hidden md:block"></div>

    <!-- Background Blobs -->
    <div class="blob bg-sage-200 w-96 h-96 rounded-full top-0 left-0 -translate-x-1/2 -translate-y-1/2"></div>
    <div class="blob bg-clay/20 w-80 h-80 rounded-full bottom-0 right-0 translate-x-1/3 translate-y-1/3 animation-delay-2000"></div>

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex flex-col px-6 md:px-16 py-8 overflow-hidden">
        <!-- Navigation -->
        <nav class="flex justify-between items-center relative z-20 mb-12">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-sage-600 rounded-full flex items-center justify-center">
                    <span class="text-white font-serif text-lg">S</span>
                </div>
                <span class="font-serif text-xl tracking-wide">Sage & Stone</span>
            </div>
            <button onclick="scrollToSection('contact')" class="px-6 py-2 border border-sage-600 text-sage-700 rounded-full text-sm tracking-wider hover:bg-sage-600 hover:text-white transition-all duration-300">
                Book Consultation
            </button>
        </nav>

        <!-- Hero Content -->
        <div class="flex-1 flex flex-col lg:flex-row items-center gap-12 lg:gap-20 relative z-10">
            <!-- Left Content -->
            <div class="flex-1 text-center lg:text-left pt-12 lg:pt-0">
                <p class="text-sage-600 text-sm tracking-[0.3em] uppercase mb-6 hero-fade opacity-0">Interior Design Studio</p>
                
                <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl leading-[0.95] mb-8">
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full">Spaces that</span>
                    </span>
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full handwritten text-sage-600">breathe</span>
                    </span>
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full">& tell stories</span>
                    </span>
                </h1>

                <p class="text-charcoal/70 text-lg max-w-md mx-auto lg:mx-0 mb-10 leading-relaxed hero-fade opacity-0">
                    We craft intimate, layered interiors that balance modern elegance with organic warmth. Every texture, every shadow, every corner curated with intention.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start hero-fade opacity-0">
                    <button onclick="scrollToSection('services')" class="px-8 py-4 bg-sage-700 text-white rounded-full text-sm tracking-wider hover:bg-sage-800 transition-all duration-300 shadow-lg shadow-sage-700/20">
                        Explore Services
                    </button>
                    <button onclick="scrollToSection('socials')" class="px-8 py-4 bg-white text-sage-700 border border-sage-200 rounded-full text-sm tracking-wider hover:border-sage-400 transition-all duration-300">
                        Follow Our Journey
                    </button>
                </div>
            </div>

            <!-- Right Images Grid -->
            <div class="flex-1 relative h-[500px] lg:h-[600px] w-full max-w-2xl">
                <div class="absolute top-0 right-0 w-3/4 h-4/5 overflow-hidden rounded-[2rem] shadow-2xl hero-img opacity-0 translate-y-10">
                    <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2000&auto=format&fit=crop" 
                         alt="Living Room" 
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute bottom-0 left-0 w-1/2 h-3/5 overflow-hidden rounded-[2rem] shadow-2xl border-4 border-cream hero-img opacity-0 translate-y-10 z-10">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?q=80&w=2158&auto=format&fit=crop" 
                         alt="Detail Shot" 
                         class="w-full h-full object-cover">
                </div>
                <div class="absolute top-1/2 left-1/4 w-32 h-32 bg-clay/30 rounded-full blur-2xl -z-10 animate-float"></div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-2 opacity-60">
            <div class="w-[1px] h-12 bg-sage-400 animate-pulse"></div>
        </div>
    </section>

    <!-- SOCIAL LINKS SECTION -->
    <section id="socials" class="py-24 px-6 md:px-16 bg-white relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-sage-600 text-sm tracking-[0.3em] uppercase block mb-4">Stay Connected</span>
                <h2 class="font-serif text-4xl md:text-5xl text-charcoal mb-4">Find Your Inspiration</h2>
                <p class="text-charcoal/60 max-w-lg mx-auto">Follow along for behind-the-scenes looks, design tips, and our latest transformations.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Pinterest -->
                <a href="#" class="social-card group bg-sage-50 rounded-3xl p-8 flex flex-col items-center text-center hover:bg-red-50">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 social-icon group-hover:bg-red-500 group-hover:text-white text-red-500 transition-colors">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987 0-6.627-5.373-12-12-12z"/></svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2">Pinterest</h3>
                    <p class="text-sm text-charcoal/60 mb-4">Mood boards & sources</p>
                    <span class="text-xs tracking-widest uppercase text-sage-600 group-hover:text-red-500 transition-colors">Follow @sageandstone</span>
                </a>

                <!-- Instagram -->
                <a href="#" class="social-card group bg-sage-50 rounded-3xl p-8 flex flex-col items-center text-center hover:bg-pink-50">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 social-icon group-hover:bg-gradient-to-tr group-hover:from-yellow-400 group-hover:via-red-500 group-hover:to-purple-500 group-hover:text-white text-pink-600 transition-all">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2">Instagram</h3>
                    <p class="text-sm text-charcoal/60 mb-4">Daily stories & reveals</p>
                    <span class="text-xs tracking-widest uppercase text-sage-600 group-hover:text-pink-600 transition-colors">@sageandstone</span>
                </a>

                <!-- TikTok -->
                <a href="#" class="social-card group bg-sage-50 rounded-3xl p-8 flex flex-col items-center text-center hover:bg-black">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 social-icon group-hover:bg-white group-hover:text-black text-black transition-colors">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2 group-hover:text-white transition-colors">TikTok</h3>
                    <p class="text-sm text-charcoal/60 group-hover:text-white/70 mb-4 transition-colors">Before & after magic</p>
                    <span class="text-xs tracking-widest uppercase text-sage-600 group-hover:text-white transition-colors">Watch @sageandstone</span>
                </a>

                <!-- YouTube -->
                <a href="#" class="social-card group bg-sage-50 rounded-3xl p-8 flex flex-col items-center text-center hover:bg-red-600">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 social-icon group-hover:bg-white group-hover:text-red-600 text-red-600 transition-colors">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2 group-hover:text-white transition-colors">YouTube</h3>
                    <p class="text-sm text-charcoal/60 group-hover:text-white/70 mb-4 transition-colors">Full room tours</p>
                    <span class="text-xs tracking-widest uppercase text-sage-600 group-hover:text-white transition-colors">Subscribe</span>
                </a>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO SECTION -->
    <section id="services" class="py-32 px-6 md:px-16 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-24">
                <div class="order-2 lg:order-1">
                    <span class="text-sage-600 text-sm tracking-[0.3em] uppercase block mb-4">Our Approach</span>
                    <h2 class="font-serif text-4xl md:text-6xl leading-tight mb-8">
                        Designing <span class="handwritten text-sage-600">sanctuaries</span> for modern living
                    </h2>
                    <p class="text-charcoal/70 text-lg leading-relaxed mb-8">
                        We believe your home should be a reflection of your journey—a carefully curated collection of moments, memories, and meaningful objects. Our process is collaborative, intuitive, and deeply personal.
                    </p>
                    <div class="flex gap-8">
                        <div>
                            <span class="block font-serif text-4xl text-sage-600 mb-2">150+</span>
                            <span class="text-sm text-charcoal/60 uppercase tracking-wider">Projects Completed</span>
                        </div>
                        <div>
                            <span class="block font-serif text-4xl text-sage-600 mb-2">8</span>
                            <span class="text-sm text-charcoal/60 uppercase tracking-wider">Years Experience</span>
                        </div>
                    </div>
                </div>
                <div class="order-1 lg:order-2 relative">
                    <div class="aspect-[4/5] rounded-[3rem] overflow-hidden shadow-2xl img-hover-zoom">
                        <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?q=80&w=2070&auto=format&fit=crop" 
                             alt="Interior Design" 
                             class="w-full h-full object-cover">
                    </div>
                    <div class="absolute -bottom-6 -left-6 w-48 h-48 bg-sage-100 rounded-full -z-10"></div>
                </div>
            </div>

            <!-- Service Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card group p-8 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-500 border border-sage-100">
                    <div class="w-14 h-14 bg-sage-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-sage-600 transition-colors duration-300">
                        <svg class="w-7 h-7 text-sage-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h3 class="font-serif text-2xl mb-4">Full Service Design</h3>
                    <p class="text-charcoal/60 leading-relaxed mb-6">From concept to installation, we handle every detail including space planning, custom furniture, and styling.</p>
                    <ul class="space-y-2 text-sm text-charcoal/70">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Space Planning</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Custom Millwork</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Art Curation</li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="service-card group p-8 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-500 border border-sage-100 mt-0 md:mt-12">
                    <div class="w-14 h-14 bg-sage-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-sage-600 transition-colors duration-300">
                        <svg class="w-7 h-7 text-sage-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="font-serif text-2xl mb-4">E-Design</h3>
                    <p class="text-charcoal/60 leading-relaxed mb-6">Virtual design services for clients anywhere. Receive a comprehensive design package with shoppable links.</p>
                    <ul class="space-y-2 text-sm text-charcoal/70">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>3D Renderings</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Shopping Lists</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Video Consultations</li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="service-card group p-8 bg-white rounded-3xl shadow-sm hover:shadow-xl transition-all duration-500 border border-sage-100 mt-0 md:mt-24">
                    <div class="w-14 h-14 bg-sage-100 rounded-2xl flex items-center justify-center mb-6 group-hover:bg-sage-600 transition-colors duration-300">
                        <svg class="w-7 h-7 text-sage-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h3 class="font-serif text-2xl mb-4">Styling Sessions</h3>
                    <p class="text-charcoal/60 leading-relaxed mb-6">Half-day or full-day sessions to refresh your space using existing pieces and strategic new additions.</p>
                    <ul class="space-y-2 text-sm text-charcoal/70">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Room Refresh</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Seasonal Updates</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-sage-400 rounded-full"></span>Staging</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section id="contact" class="py-32 px-6 md:px-16 bg-sage-800 text-white relative overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 right-0 w-96 h-96 bg-sage-700 rounded-full blur-3xl opacity-50 translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 left-0 w-64 h-64 bg-clay/20 rounded-full blur-3xl opacity-30 -translate-x-1/2 translate-y-1/2"></div>

        <div class="max-w-4xl mx-auto relative z-10 text-center">
            <span class="text-sage-300 text-sm tracking-[0.3em] uppercase block mb-6">Begin Your Transformation</span>
            <h2 class="font-serif text-4xl md:text-6xl lg:text-7xl mb-8 leading-tight">
                Ready to create your <span class="handwritten text-clay">dream space</span>?
            </h2>
            <p class="text-sage-200 text-lg max-w-2xl mx-auto mb-12 leading-relaxed">
                Let's discuss your vision. We begin every project with a complimentary consultation to understand your lifestyle, preferences, and the story you want your home to tell.
            </p>

            <form class="max-w-lg mx-auto space-y-6 text-left bg-white/10 backdrop-blur-sm p-8 md:p-12 rounded-3xl border border-white/10" onsubmit="event.preventDefault(); alert('Thank you! We will be in touch within 24 hours to schedule your consultation.');">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-xs uppercase tracking-widest text-sage-300">First Name</label>
                        <input type="text" class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-sage-400 focus:outline-none focus:border-clay transition-colors" placeholder="Jane">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs uppercase tracking-widest text-sage-300">Last Name</label>
                        <input type="text" class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-sage-400 focus:outline-none focus:border-clay transition-colors" placeholder="Doe">
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label class="text-xs uppercase tracking-widest text-sage-300">Email Address</label>
                    <input type="email" class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-sage-400 focus:outline-none focus:border-clay transition-colors" placeholder="jane@example.com">
                </div>

                <div class="space-y-2">
                    <label class="text-xs uppercase tracking-widest text-sage-300">Project Type</label>
                    <select class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-clay transition-colors [&>option]:bg-sage-800">
                        <option class="text-sage-300">Single Room Refresh</option>
                        <option class="text-sage-300">Full Home Design</option>
                        <option class="text-sage-300">New Construction</option>
                        <option class="text-sage-300">Commercial Space</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="text-xs uppercase tracking-widest text-sage-300">Tell us about your space</label>
                    <textarea rows="3" class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 text-white placeholder-sage-400 focus:outline-none focus:border-clay transition-colors resize-none" placeholder="Square footage, style preferences, timeline..."></textarea>
                </div>

                <button type="submit" class="w-full py-4 bg-clay text-white font-medium rounded-xl hover:bg-clay/90 transition-all duration-300 transform hover:scale-[1.02] shadow-lg shadow-black/20">
                    Request Consultation
                </button>
            </form>
        </div>
    </section>

    <!-- MINIMAL FOOTER -->
    <footer class="py-12 bg-sage-900 text-center border-t border-sage-800">
        <div class="flex items-center justify-center gap-3 mb-4">
            <div class="w-8 h-8 bg-sage-700 rounded-full flex items-center justify-center">
                <span class="text-white font-serif text-sm">S</span>
            </div>
            <span class="font-serif text-lg text-sage-200">Sage & Stone</span>
        </div>
        <p class="text-sage-400 text-sm">
            Curated interiors for intentional living
        </p>
        <p class="text-sage-600 text-xs mt-4">
            &copy; 2023 Sage & Stone Interiors. All rights reserved.
        </p>
    </footer>

    <script>
        // Register GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Custom Cursor
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorRing = document.querySelector('.cursor-ring');

        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            gsap.to(cursorRing, {
                x: posX,
                y: posY,
                duration: 0.18,
                ease: "power2.out"
            });
        });

        // Cursor hover effects
        const interactiveElements = document.querySelectorAll('a, button, input, select, textarea, .service-card');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                gsap.to(cursorRing, { scale: 1.5, borderColor: "#c4a484", backgroundColor: "rgba(196, 164, 132, 0.1)" });
            });
            el.addEventListener('mouseleave', () => {
                gsap.to(cursorRing, { scale: 1, borderColor: "#7a8a6b", backgroundColor: "transparent" });
            });
        });

        // Hero Animations
        const heroTl = gsap.timeline();

        heroTl.to('.hero-reveal', {
            y: 0,
            duration: 1.2,
            stagger: 0.2,
            ease: "power4.out",
            delay: 0.3
        })
        .to('.hero-fade', {
            opacity: 1,
            y: 0,
            duration: 1,
            stagger: 0.1,
            ease: "power2.out"
        }, "-=0.8")
        .to('.hero-img', {
            opacity: 1,
            y: 0,
            duration: 1.2,
            stagger: 0.2,
            ease: "power3.out"
        }, "-=1");

        // Service Cards Animation
        gsap.from(".service-card", {
            scrollTrigger: {
                trigger: "#services",
                start: "top 70%",
            },
            y: 60,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power3.out"
        });

        // Social Cards Animation
        gsap.from(".social-card", {
            scrollTrigger: {
                trigger: "#socials",
                start: "top 80%",
            },
            y: 40,
            opacity: 0,
            duration: 0.6,
            stagger: 0.1,
            ease: "power2.out"
        });

        // Smooth Scroll Function
        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
</body>
</html>