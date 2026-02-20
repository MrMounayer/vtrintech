<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        serif: ['"Playfair Display"', 'Georgia', 'serif'],
                        sans: ['"DM Sans"', 'system-ui', 'sans-serif'],
                    },
                    colors: {
                        sage: {
                            50: '#f4f7f4',
                            100: '#e3ebe3',
                            200: '#c5d8c5',
                            300: '#9bbd9b',
                            400: '#729b72',
                            500: '#527d52',
                            600: '#3d613d',
                            700: '#314d31',
                            800: '#283d28',
                            900: '#223222',
                        },
                        clay: {
                            50: '#faf6f5',
                            100: '#f2ebe8',
                            200: '#e6d5cf',
                            300: '#d4b8ad',
                            400: '#c19987',
                            500: '#b57d66',
                            600: '#a8654f',
                            700: '#8b5341',
                            800: '#724539',
                            900: '#5d3a31',
                        },
                        sand: {
                            50: '#fdfbf7',
                            100: '#f9f5ed',
                            200: '#f2ebd8',
                            300: '#e8dcb8',
                            400: '#dcc692',
                            500: '#d0b06f',
                            600: '#c29650',
                            700: '#a27a3d',
                            800: '#856335',
                            900: '#6d522d',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 2s infinite',
                        'float-slow': 'float 8s ease-in-out 1s infinite',
                        'breathe': 'breathe 4s ease-in-out infinite',
                        'sway': 'sway 3s ease-in-out infinite',
                        'morph': 'morph 8s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        breathe: {
                            '0%, 100%': { transform: 'scale(1)', opacity: '0.8' },
                            '50%': { transform: 'scale(1.05)', opacity: '1' },
                        },
                        sway: {
                            '0%, 100%': { transform: 'rotate(-2deg)' },
                            '50%': { transform: 'rotate(2deg)' },
                        },
                        morph: {
                            '0%, 100%': { borderRadius: '60% 40% 30% 70% / 60% 30% 70% 40%' },
                            '50%': { borderRadius: '30% 60% 70% 40% / 50% 60% 30% 60%' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap');
        
        body {
            font-family: 'DM Sans', sans-serif;
            background-color: #faf8f5;
            color: #2c2420;
        }
        
        .serif {
            font-family: 'Playfair Display', serif;
        }
        
        .glass-organic {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #527d52 0%, #b57d66 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .blob {
            position: absolute;
            filter: blur(60px);
            opacity: 0.4;
            animation: morph 8s ease-in-out infinite;
        }
        
        .grain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 50;
            opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }
        
        .hover-lift {
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.4s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }
        
        .link-underline {
            position: relative;
        }
        
        .link-underline::after {
            content: '';
            position: absolute;
            width: 0;
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: currentColor;
            transition: width 0.3s ease;
        }
        
        .link-underline:hover::after {
            width: 100%;
        }
        
        /* Hide scrollbar for carousel */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }
        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .image-mask {
            mask-image: linear-gradient(to bottom, black 50%, transparent 100%);
            -webkit-mask-image: linear-gradient(to bottom, black 50%, transparent 100%);
        }
    </style>
</head>
<body class="antialiased overflow-x-hidden">

    <!-- Grain Overlay -->
    <div class="grain"></div>

    <!-- Floating Background Blobs -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
        <div class="blob bg-sage-300 w-96 h-96 rounded-full top-0 left-0 -translate-x-1/2 -translate-y-1/2 animate-float"></div>
        <div class="blob bg-clay-200 w-80 h-80 rounded-full top-1/3 right-0 translate-x-1/3 animate-float-delayed"></div>
        <div class="blob bg-sand-300 w-72 h-72 rounded-full bottom-0 left-1/3 animate-float-slow"></div>
        <div class="blob bg-sage-200 w-64 h-64 rounded-full bottom-1/4 right-1/4 animate-breathe"></div>
    </div>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center px-6 py-20 z-10">
        <div class="max-w-5xl mx-auto text-center">
            
            <!-- Small Tag -->
            <div class="mb-8 inline-block">
                <span class="text-xs tracking-[0.3em] uppercase text-sage-600 font-medium border-b border-sage-300 pb-1">
                    Creative Studio
                </span>
            </div>

            <!-- Main Heading -->
            <h1 class="serif text-5xl md:text-7xl lg:text-8xl leading-[1.1] mb-8 text-stone-800">
                Crafting digital<br/>
                <span class="italic text-sage-600">experiences</span> with<br/>
                intention & soul
            </h1>

            <!-- Subtext -->
            <p class="text-lg md:text-xl text-stone-600 max-w-2xl mx-auto mb-12 leading-relaxed font-light">
                We design and build thoughtful digital products that connect brands with their audiences through meaningful interactions.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#work" class="group relative px-8 py-4 bg-sage-600 text-white rounded-full overflow-hidden transition-all duration-300 hover:shadow-lg hover:shadow-sage-600/20">
                    <span class="relative z-10 flex items-center gap-2 font-medium tracking-wide">
                        View our work
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
                <a href="#contact" class="px-8 py-4 text-stone-600 hover:text-sage-600 transition-colors duration-300 font-medium link-underline">
                    Get in touch
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-60">
                <span class="text-xs tracking-widest uppercase">Scroll</span>
                <div class="w-px h-12 bg-stone-400 animate-pulse"></div>
            </div>
        </div>

        <!-- Decorative Leaf -->
        <div class="absolute top-20 right-10 md:right-20 opacity-20 animate-sway origin-top">
            <svg width="60" height="60" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" class="text-sage-600">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                <path d="M12 6v12M8 10s1.5-2 4-2 4 2 4 2M8 14s1.5 2 4 2 4-2 4-2"/>
            </svg>
        </div>
    </section>

    <!-- Social Links Section - Organic Style -->
    <section class="py-24 px-6 relative z-10">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Text -->
                <div>
                    <span class="text-xs tracking-[0.3em] uppercase text-clay-600 mb-4 block">Connect</span>
                    <h2 class="serif text-4xl md:text-5xl text-stone-800 mb-6 leading-tight">
                        Let's create something beautiful together
                    </h2>
                    <p class="text-stone-600 leading-relaxed mb-8">
                        Follow our journey, see behind the scenes, or simply say hello. We love hearing from fellow creators and dreamers.
                    </p>
                </div>

                <!-- Right: Social Cards -->
                <div class="space-y-4">
                    <!-- Instagram -->
                    <a href="#" class="group flex items-center justify-between p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-stone-200 hover-lift transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-gradient-to-br from-purple-100 to-pink-100 flex items-center justify-center text-stone-600 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke-width="2"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" stroke-width="2"></path>
                                    <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" stroke-width="2"></line>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-stone-800">Instagram</h3>
                                <p class="text-sm text-stone-500">@studio.name</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-stone-400 group-hover:text-sage-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <!-- Twitter -->
                    <a href="#" class="group flex items-center justify-between p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-stone-200 hover-lift transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-sky-50 flex items-center justify-center text-stone-600 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-stone-800">Twitter / X</h3>
                                <p class="text-sm text-stone-500">@studio</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-stone-400 group-hover:text-sage-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <!-- Email -->
                    <a href="#" class="group flex items-center justify-between p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-stone-200 hover-lift transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-amber-50 flex items-center justify-center text-stone-600 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-stone-800">Email</h3>
                                <p class="text-sm text-stone-500">hello@studio.com</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-stone-400 group-hover:text-sage-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>

                    <!-- Dribbble -->
                    <a href="#" class="group flex items-center justify-between p-6 bg-white/60 backdrop-blur-sm rounded-2xl border border-stone-200 hover-lift transition-all duration-300">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 rounded-full bg-rose-50 flex items-center justify-center text-stone-600 group-hover:scale-110 transition-transform duration-300">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.372 0 0 5.373 0 12s5.372 12 12 12 12-5.373 12-12S18.628 0 12 0zm9.885 11.441c-2.575-.422-4.943-.445-7.103-.073a421531.706 42.1531.706 0 00-.767-1.68c2.31-1 4.165-2.358 5.548-4.082a9.863 9.863 0 012.322 5.835zm-3.842-7.282c-1.205 1.554-2.868 2.783-4.986 3.68a46.287 46.287 0 00-3.488-5.438A9.894 9.894 0 0112 2.087c2.275 0 4.368.779 6.043 2.072zM7.527 3.166a44.59 44.59 0 013.537 5.381c-2.43.715-5.331 1.082-8.684 1.105a9.931 9.931 0 015.147-6.486zM2.087 12l.013-.256c3.849-.005 7.169-.448 9.95-1.322.233.475.456.952.67 1.432-3.38 1.057-6.165 3.222-8.337 6.48A9.865 9.865 0 012.087 12zm3.829 7.81c1.969-3.088 4.482-5.098 7.598-6.027a39.137 39.137 0 012.043 7.46c-3.349 1.291-6.953.666-9.641-1.433zm11.586.43a41.098 41.098 0 00-1.92-6.897c1.876-.265 3.94-.196 6.199.196a9.923 9.923 0 01-4.279 6.701z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-medium text-stone-800">Dribbble</h3>
                                <p class="text-sm text-stone-500">@studio</p>
                            </div>
                        </div>
                        <svg class="w-5 h-5 text-stone-400 group-hover:text-sage-600 group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section - Work Showcase -->
    <section id="work" class="py-24 relative z-10 overflow-hidden">
        <div class="px-6 mb-12 max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6">
                <div>
                    <span class="text-xs tracking-[0.3em] uppercase text-clay-600 mb-4 block">Portfolio</span>
                    <h2 class="serif text-4xl md:text-5xl text-stone-800">Selected Work</h2>
                </div>
                
                <!-- Navigation -->
                <div class="flex gap-3">
                    <button onclick="moveCarousel(-1)" class="w-12 h-12 rounded-full border border-stone-300 flex items-center justify-center text-stone-600 hover:bg-sage-600 hover:border-sage-600 hover:text-white transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button onclick="moveCarousel(1)" class="w-12 h-12 rounded-full border border-stone-300 flex items-center justify-center text-stone-600 hover:bg-sage-600 hover:border-sage-600 hover:text-white transition-all duration-300 group">
                        <svg class="w-5 h-5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Carousel -->
        <div class="relative">
            <div id="carousel" class="flex gap-6 overflow-x-auto hide-scroll snap-x snap-mandatory px-6 pb-8" style="scroll-padding-left: 1.5rem;">
                
                <!-- Project 1 -->
                <div class="flex-none w-[85vw] md:w-[600px] snap-start group">
                    <div class="relative overflow-hidden rounded-3xl bg-stone-100 aspect-[4/5] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/20"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-32 h-32 rounded-full bg-sage-200/50 backdrop-blur-xl"></div>
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-block px-3 py-1 bg-white/80 backdrop-blur-sm rounded-full text-xs font-medium text-stone-600 mb-3">Brand Identity</span>
                            <h3 class="serif text-2xl text-white drop-shadow-lg">Bloom Botanicals</h3>
                        </div>
                    </div>
                    <p class="text-stone-600 text-sm leading-relaxed">Complete visual identity for an organic skincare brand focusing on natural ingredients and sustainable packaging.</p>
                </div>

                <!-- Project 2 -->
                <div class="flex-none w-[85vw] md:w-[600px] snap-start group">
                    <div class="relative overflow-hidden rounded-3xl bg-stone-100 aspect-[4/5] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-br from-clay-100 to-sand-200"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-40 h-40 rounded-full bg-clay-300/30 backdrop-blur-xl"></div>
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-block px-3 py-1 bg-white/80 backdrop-blur-sm rounded-full text-xs font-medium text-stone-600 mb-3">Web Design</span>
                            <h3 class="serif text-2xl text-stone-800">Terra Ceramics</h3>
                        </div>
                    </div>
                    <p class="text-stone-600 text-sm leading-relaxed">E-commerce experience for handmade ceramics studio, emphasizing the tactile nature of their products.</p>
                </div>

                <!-- Project 3 -->
                <div class="flex-none w-[85vw] md:w-[600px] snap-start group">
                    <div class="relative overflow-hidden rounded-3xl bg-stone-100 aspect-[4/5] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-tr from-sage-100 to-sky-100"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-36 h-36 rounded-full bg-sage-300/40 backdrop-blur-xl"></div>
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-block px-3 py-1 bg-white/80 backdrop-blur-sm rounded-full text-xs font-medium text-stone-600 mb-3">App Design</span>
                            <h3 class="serif text-2xl text-stone-800">Mindful Moments</h3>
                        </div>
                    </div>
                    <p class="text-stone-600 text-sm leading-relaxed">Meditation and wellness app with gentle interactions and calming visual language.</p>
                </div>

                <!-- Project 4 -->
                <div class="flex-none w-[85vw] md:w-[600px] snap-start group">
                    <div class="relative overflow-hidden rounded-3xl bg-stone-100 aspect-[4/5] mb-6">
                        <div class="absolute inset-0 bg-gradient-to-bl from-amber-100 to-orange-50"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-44 h-44 rounded-full bg-amber-200/40 backdrop-blur-xl"></div>
                        </div>
                        <div class="absolute bottom-6 left-6 right-6">
                            <span class="inline-block px-3 py-1 bg-white/80 backdrop-blur-sm rounded-full text-xs font-medium text-stone-600 mb-3">Photography</span>
                            <h3 class="serif text-2xl text-stone-800">Kinfolk Journal</h3>
                        </div>
                    </div>
                    <p class="text-stone-600 text-sm leading-relaxed">Editorial photography and art direction for lifestyle magazine's autumn issue.</p>
                </div>

            </div>
            
            <!-- Fade edges -->
            <div class="absolute top-0 right-0 w-32 h-full bg-gradient-to-l from-[#faf8f5] to-transparent pointer-events-none"></div>
        </div>

        <!-- Progress -->
        <div class="px-6 max-w-6xl mx-auto mt-8">
            <div class="h-0.5 bg-stone-200 rounded-full overflow-hidden max-w-md">
                <div id="progress-bar" class="h-full bg-sage-600 w-1/4 transition-all duration-300 rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="py-24 px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            <svg class="w-12 h-12 text-sage-300 mx-auto mb-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
            </svg>
            <blockquote class="serif text-3xl md:text-4xl text-stone-700 leading-tight mb-6 italic">
                "Design is not just what it looks like and feels like. Design is how it works, how it breathes, and how it connects."
            </blockquote>
            <cite class="text-stone-500 not-italic font-medium">— Studio Philosophy</cite>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="relative z-10 py-12 px-6 border-t border-stone-200">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="serif text-xl text-stone-800">Studio.</div>
            <div class="text-sm text-stone-500">
                Crafted with care in 2024
            </div>
        </div>
    </footer>

    <script>
        // Carousel functionality
        const carousel = document.getElementById('carousel');
        const progressBar = document.getElementById('progress-bar');
        const totalSlides = 4;
        let currentSlide = 0;

        function moveCarousel(direction) {
            const slideWidth = carousel.children[0].offsetWidth + 24; // width + gap
            carousel.scrollBy({ left: direction * slideWidth, behavior: 'smooth' });
            
            currentSlide = Math.max(0, Math.min(currentSlide + direction, totalSlides - 1));
            updateProgress();
        }

        function updateProgress() {
            const progress = ((currentSlide + 1) / totalSlides) * 100;
            progressBar.style.width = `${progress}%`;
        }

        // Update progress on scroll
        carousel.addEventListener('scroll', () => {
            const scrollLeft = carousel.scrollLeft;
            const maxScroll = carousel.scrollWidth - carousel.clientWidth;
            const progress = (scrollLeft / maxScroll) * 100;
            progressBar.style.width = `${Math.max(25, progress)}%`;
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Parallax effect for blobs
        document.addEventListener('mousemove', (e) => {
            const blobs = document.querySelectorAll('.blob');
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            blobs.forEach((blob, index) => {
                const speed = (index + 1) * 20;
                const xOffset = (0.5 - x) * speed;
                const yOffset = (0.5 - y) * speed;
                blob.style.transform = `translate(${xOffset}px, ${yOffset}px)`;
            });
        });
    </script>
</body>
</html>