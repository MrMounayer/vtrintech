<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Studio | Modern Design</title>
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
                        slate: {
                            50: '#f8f9fa',
                            100: '#eef0f5',
                            200: '#e2e8f0',
                            300: '#cbd5e1',
                            400: '#94a3b8',
                            500: '#64748b',
                            600: '#475569',
                            700: '#334155',
                            800: '#1e293b',
                            900: '#0f172a',
                        },
                        accent: '#d4a574',
                        cream: '#faf8f5',
                        dark: '#1a1a1a',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse-slow 3s ease-in-out infinite',
                        'glow': 'glow 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        'pulse-slow': {
                            '0%, 100%': { opacity: '0.5' },
                            '50%': { opacity: '1' },
                        },
                        glow: {
                            '0%, 100%': { boxShadow: '0 0 20px rgba(212, 165, 116, 0.3)' },
                            '50%': { boxShadow: '0 0 40px rgba(212, 165, 116, 0.5)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #faf8f5;
            color: #1a1a1a;
            overflow-x: hidden;
        }

        html {
            scroll-behavior: smooth;
        }

        ::selection {
            background-color: #475569;
            color: #faf8f5;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f8f9fa;
        }
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #f8f9fa 0%, #eef0f5 100%);
        }

        .dark-gradient {
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        }

        .accent-gradient {
            background: linear-gradient(135deg, #d4a574 0%, #c99a5f 100%);
        }

        .blob {
            position: absolute;
            filter: blur(80px);
            opacity: 0.15;
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }

        .reveal-text {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0% 100%);
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
            width: 6px;
            height: 6px;
            background-color: #475569;
        }
        .cursor-ring {
            width: 32px;
            height: 32px;
            border: 1.5px solid #475569;
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

        .card-hover {
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .card-hover:hover {
            transform: translateY(-12px);
            box-shadow: 0 30px 60px -15px rgba(71, 85, 105, 0.2);
        }

        .feature-icon {
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .card-hover:hover .feature-icon {
            transform: rotate(360deg) scale(1.2);
        }

        .line {
            background: linear-gradient(90deg, transparent, #d4a574, transparent);
            height: 1px;
        }

        .accent-underline {
            position: relative;
            display: inline-block;
        }
        .accent-underline::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 3px;
            background: #d4a574;
            transition: width 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .accent-underline:hover::after {
            width: 100%;
        }

        .stat-counter {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }

        .testimonial-card {
            position: relative;
            border-left: 4px solid #d4a574;
            transition: all 0.5s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }
        .testimonial-card:hover {
            border-left-color: #c99a5f;
            transform: translateX(8px);
            box-shadow: 0 10px 30px rgba(212, 165, 116, 0.15);
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
    <div class="blob bg-accent w-96 h-96 rounded-full top-0 right-1/4 translate-y-1/4"></div>
    <div class="blob bg-slate-300 w-80 h-80 rounded-full bottom-1/3 left-0 -translate-x-1/3"></div>

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex flex-col px-6 md:px-16 py-8 overflow-hidden">
        <!-- Navigation -->
        <nav class="flex justify-between items-center relative z-20 mb-12">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 accent-gradient rounded-lg flex items-center justify-center">
                    <span class="text-white font-serif text-lg font-bold">P</span>
                </div>
                <span class="font-serif text-xl tracking-tight text-dark font-semibold">Premium Studio</span>
            </div>
            <button onclick="scrollToSection('contact')" class="px-6 py-2 border-2 border-slate-700 text-slate-700 rounded-full text-sm tracking-wider hover:bg-slate-700 hover:text-white transition-all duration-300">
                Get Started
            </button>
        </nav>

        <!-- Hero Content -->
        <div class="flex-1 flex flex-col lg:flex-row items-center gap-12 lg:gap-20 relative z-10 justify-center">
            <!-- Left Content -->
            <div class="flex-1 text-center lg:text-left">
                <p class="text-slate-600 text-sm tracking-[0.3em] uppercase mb-6 hero-fade opacity-0">Excellence in Design</p>
                
                <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl leading-[0.95] mb-8 text-dark">
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full">Elevate Your</span>
                    </span>
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full text-accent">Vision</span>
                    </span>
                    <span class="block overflow-hidden">
                        <span class="block hero-reveal translate-y-full">Today</span>
                    </span>
                </h1>

                <p class="text-slate-700 text-lg max-w-md mx-auto lg:mx-0 mb-10 leading-relaxed hero-fade opacity-0">
                    Crafting exceptional experiences through thoughtful design, innovative solutions, and profound attention to every detail that matters.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start hero-fade opacity-0">
                    <button onclick="scrollToSection('services')" class="px-8 py-4 accent-gradient text-white rounded-full text-sm tracking-wider font-semibold hover:shadow-xl hover:shadow-accent/30 transition-all duration-300">
                        Explore Now
                    </button>
                    <button onclick="scrollToSection('socials')" class="px-8 py-4 bg-white text-dark border-2 border-slate-200 rounded-full text-sm tracking-wider font-semibold hover:border-accent hover:text-accent transition-all duration-300">
                        Connect With Us
                    </button>
                </div>
            </div>

            <!-- Right Showcase -->
            <div class="flex-1 relative h-[400px] lg:h-[500px] w-full max-w-md">
                <!-- Geometric Shape 1 -->
                <div class="absolute top-0 right-0 w-64 h-64 dark-gradient rounded-[3rem] shadow-2xl hero-img opacity-0 translate-y-10 flex items-center justify-center overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-32 h-32 border-2 border-accent/40 rounded-full flex items-center justify-center">
                            <div class="w-20 h-20 border-2 border-accent/60 rounded-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Geometric Shape 2 -->
                <div class="absolute bottom-0 left-0 w-56 h-56 bg-accent/20 rounded-[2.5rem] hero-img opacity-0 translate-y-10 border-2 border-accent/40 flex items-center justify-center">
                    <div class="w-40 h-40 bg-gradient-to-br from-accent to-accent/40 rounded-[1.5rem]"></div>
                </div>

                <!-- Animated Accent -->
                <div class="absolute top-1/2 right-1/4 w-40 h-40 accent-gradient rounded-full blur-3xl opacity-20 animate-float"></div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-3 opacity-60">
            <p class="text-xs tracking-widest uppercase text-slate-600">Scroll to explore</p>
            <div class="w-[1px] h-12 bg-slate-400 animate-pulse"></div>
        </div>
    </section>

    <!-- SOCIAL LINKS SECTION -->
    <section id="socials" class="py-24 px-6 md:px-16 bg-white relative overflow-hidden">
        <!-- Background Element -->
        <div class="absolute top-0 right-0 w-96 h-96 accent-gradient rounded-full blur-3xl opacity-5 -z-10"></div>

        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-16">
                <span class="text-accent text-sm tracking-[0.3em] uppercase block mb-4 font-semibold">Connect With Us</span>
                <h2 class="font-serif text-4xl md:text-5xl text-dark mb-6">Join Our Community</h2>
                <div class="relative inline-block">
                    <p class="text-slate-600 max-w-lg">Follow our journey and stay updated with the latest insights, trends, and exclusive content.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Email Newsletter -->
                <div class="card-hover group bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl p-8 flex flex-col items-center text-center border border-slate-200">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 feature-icon group-hover:bg-accent group-hover:text-white transition-all">
                        <svg class="w-8 h-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2 text-dark">Newsletter</h3>
                    <p class="text-sm text-slate-600 mb-4">Weekly ideas & insights</p>
                    <span class="text-xs tracking-widest uppercase text-accent group-hover:text-slate-700 transition-colors font-semibold">Subscribe</span>
                </div>

                <!-- LinkedIn -->
                <div class="card-hover group bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl p-8 flex flex-col items-center text-center border border-slate-200">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 feature-icon group-hover:bg-blue-600 group-hover:text-white transition-all">
                        <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.225 0z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2 text-dark">LinkedIn</h3>
                    <p class="text-sm text-slate-600 mb-4">Professional insights</p>
                    <span class="text-xs tracking-widest uppercase text-accent group-hover:text-blue-600 transition-colors font-semibold">Connect</span>
                </div>

                <!-- YouTube -->
                <div class="card-hover group bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl p-8 flex flex-col items-center text-center border border-slate-200">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 feature-icon group-hover:bg-red-600 group-hover:text-white transition-all">
                        <svg class="w-8 h-8 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2 text-dark">YouTube</h3>
                    <p class="text-sm text-slate-600 mb-4">Video tutorials & case studies</p>
                    <span class="text-xs tracking-widest uppercase text-accent group-hover:text-red-600 transition-colors font-semibold">Watch</span>
                </div>

                <!-- Twitter -->
                <div class="card-hover group bg-gradient-to-br from-slate-50 to-slate-100 rounded-2xl p-8 flex flex-col items-center text-center border border-slate-200">
                    <div class="w-16 h-16 bg-white rounded-full shadow-md flex items-center justify-center mb-6 feature-icon group-hover:bg-black group-hover:text-white transition-all">
                        <svg class="w-8 h-8 text-black" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-xl mb-2 text-dark">Twitter</h3>
                    <p class="text-sm text-slate-600 mb-4">Daily tips & announcements</p>
                    <span class="text-xs tracking-widest uppercase text-accent group-hover:text-black transition-colors font-semibold">Follow</span>
                </div>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO SECTION -->
    <section id="services" class="py-24 px-6 md:px-16 bg-slate-50 relative overflow-hidden">
        <div class="absolute bottom-0 left-0 w-96 h-96 bg-accent rounded-full blur-3xl opacity-5 -z-10"></div>

        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <span class="text-accent text-sm tracking-[0.3em] uppercase block mb-4 font-semibold">Our Expertise</span>
                <h2 class="font-serif text-4xl md:text-5xl text-dark mb-6">What We Deliver</h2>
                <p class="text-slate-600 max-w-2xl mx-auto text-lg leading-relaxed">
                    We combine strategic thinking with creative excellence to transform your visions into remarkable realities.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="card-hover group bg-white rounded-2xl p-8 border border-slate-200 hover:border-accent/50">
                    <div class="w-12 h-12 accent-gradient rounded-lg flex items-center justify-center mb-6 feature-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl text-dark mb-4">Strategic Design</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        We develop comprehensive design strategies that align with your goals and resonate with your audience.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Research & Analysis
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Concept Development
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Implementation
                        </li>
                    </ul>
                </div>

                <!-- Service 2 -->
                <div class="card-hover group bg-white rounded-2xl p-8 border border-slate-200 hover:border-accent/50">
                    <div class="w-12 h-12 accent-gradient rounded-lg flex items-center justify-center mb-6 feature-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl text-dark mb-4">Creative Solutions</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        From concept to execution, we craft innovative solutions that set you apart from the competition.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Visual Identity
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Content Creation
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Brand Experience
                        </li>
                    </ul>
                </div>

                <!-- Service 3 -->
                <div class="card-hover group bg-white rounded-2xl p-8 border border-slate-200 hover:border-accent/50">
                    <div class="w-12 h-12 accent-gradient rounded-lg flex items-center justify-center mb-6 feature-icon">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                        </svg>
                    </div>
                    <h3 class="font-serif text-2xl text-dark mb-4">Performance & Growth</h3>
                    <p class="text-slate-600 leading-relaxed mb-6">
                        We focus on measurable results and continuous optimization to drive sustainable growth.
                    </p>
                    <ul class="space-y-2 text-sm text-slate-600">
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Analytics & Tracking
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Optimization
                        </li>
                        <li class="flex items-center gap-2">
                            <span class="w-1.5 h-1.5 bg-accent rounded-full"></span>
                            Scaling Solutions
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-20 pt-20 border-t border-slate-200">
                <div class="text-center">
                    <div class="stat-counter text-5xl md:text-6xl text-accent mb-2">500+</div>
                    <p class="text-slate-600 font-medium">Projects Completed</p>
                </div>
                <div class="text-center">
                    <div class="stat-counter text-5xl md:text-6xl text-accent mb-2">98%</div>
                    <p class="text-slate-600 font-medium">Client Satisfaction</p>
                </div>
                <div class="text-center">
                    <div class="stat-counter text-5xl md:text-6xl text-accent mb-2">10+</div>
                    <p class="text-slate-600 font-medium">Years of Excellence</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-32 px-6 md:px-16 overflow-hidden">
        <div class="absolute inset-0 dark-gradient -z-10"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-accent rounded-full blur-3xl opacity-10 -z-10"></div>
        <div class="absolute bottom-0 left-1/4 w-72 h-72 bg-accent rounded-full blur-3xl opacity-5 -z-10"></div>

        <div class="max-w-4xl mx-auto text-center">
            <h2 class="font-serif text-5xl md:text-6xl text-white mb-8 leading-tight">
                Ready to Transform <span class="text-accent">Your Vision</span>?
            </h2>

            <p class="text-xl text-slate-200 mb-12 leading-relaxed max-w-2xl mx-auto">
                Let's collaborate and create something extraordinary together. Our team is excited to hear about your project and explore how we can help you achieve your goals.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                <button class="px-10 py-4 bg-accent text-dark rounded-full text-base font-semibold tracking-wider hover:shadow-2xl hover:shadow-accent/40 transition-all duration-300 transform hover:scale-105">
                    Start Your Project
                </button>
                <button class="px-10 py-4 border-2 border-accent text-accent rounded-full text-base font-semibold tracking-wider hover:bg-accent hover:text-dark transition-all duration-300">
                    Schedule Consultation
                </button>
            </div>

            <p class="text-slate-400 text-sm">
                Have questions? <span class="text-accent font-semibold">Contact our team</span> anytime. We're here to help.
            </p>
        </div>
    </section>

    <!-- FOOTER SECTION (without links) -->
    <footer class="bg-dark text-slate-400 py-16 px-6 md:px-16 relative">
        <div class="absolute inset-0 opacity-40">
            <div class="absolute top-0 right-1/3 w-64 h-64 bg-accent rounded-full blur-3xl opacity-5"></div>
        </div>

        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-12 pb-12 border-b border-slate-700">
                <!-- Brand Info -->
                <div>
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-10 h-10 accent-gradient rounded-lg flex items-center justify-center">
                            <span class="text-white font-serif text-lg font-bold">P</span>
                        </div>
                        <span class="font-serif text-lg text-white font-semibold">Premium Studio</span>
                    </div>
                    <p class="text-sm leading-relaxed text-slate-500">
                        Dedicated to crafting exceptional experiences through design, strategy, and innovation.
                    </p>
                </div>

                <!-- Services Overview -->
                <div>
                    <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">Services</h4>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li>Strategic Design</li>
                        <li>Creative Solutions</li>
                        <li>Performance Growth</li>
                        <li>Brand Strategy</li>
                    </ul>
                </div>

                <!-- About -->
                <div>
                    <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">About</h4>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li>Our Studio</li>
                        <li>Our Team</li>
                        <li>Our Process</li>
                        <li>Our Values</li>
                    </ul>
                </div>

                <!-- Hours & Info -->
                <div>
                    <h4 class="text-white font-semibold mb-4 text-sm tracking-wider uppercase">Info</h4>
                    <ul class="space-y-3 text-sm text-slate-500">
                        <li>Monday – Friday<br><span class="text-slate-400">9:00 AM – 6:00 PM</span></li>
                        <li>Saturday – Sunday<br><span class="text-slate-400">Closed</span></li>
                        <li class="mt-4 pt-4 border-t border-slate-700">
                            Response typically<br><span class="text-slate-400">within 24 hours</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="flex flex-col md:flex-row justify-between items-center pt-8 gap-4">
                <p class="text-sm text-slate-500">
                    © 2026 Premium Studio. All rights reserved.
                </p>
                <div class="flex items-center gap-6 text-sm text-slate-500">
                    <span class="hover:text-accent transition-colors cursor-pointer accent-underline">Privacy Policy</span>
                    <span class="w-1 h-1 bg-slate-700 rounded-full"></span>
                    <span class="hover:text-accent transition-colors cursor-pointer accent-underline">Terms of Service</span>
                    <span class="w-1 h-1 bg-slate-700 rounded-full"></span>
                    <span class="hover:text-accent transition-colors cursor-pointer accent-underline">Sitemap</span>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Scroll Behavior Functions
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            if (section) {
                section.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Custom Cursor
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

        // Cursor Grow on Hover
        const interactiveElements = document.querySelectorAll('a, button, input, textarea, select');
        interactiveElements.forEach(element => {
            element.addEventListener('mouseenter', () => {
                if (cursorRing) {
                    cursorRing.style.width = '48px';
                    cursorRing.style.height = '48px';
                    cursorRing.style.borderColor = '#d4a574';
                }
            });
            element.addEventListener('mouseleave', () => {
                if (cursorRing) {
                    cursorRing.style.width = '32px';
                    cursorRing.style.height = '32px';
                    cursorRing.style.borderColor = '#475569';
                }
            });
        });

        // Hero Animations with GSAP
        gsap.registerPlugin(ScrollTrigger);

        const timeline = gsap.timeline();

        // Hero reveal animations
        timeline.from('.hero-reveal', {
            duration: 0.8,
            y: 100,
            opacity: 0,
            stagger: 0.2,
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
            stagger: 0.2,
            ease: 'power3.out'
        }, '<0.3');

        // Scroll Trigger Animations
        gsap.utils.toArray('.card-hover').forEach((element) => {
            gsap.from(element, {
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    end: 'top 50%',
                    scrub: 1,
                },
                opacity: 0,
                y: 50,
                duration: 0.8
            });
        });

        // Smooth scroll
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
