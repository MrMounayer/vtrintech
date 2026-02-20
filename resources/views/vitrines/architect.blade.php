<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elias Vance | Architecture & Spatial Design</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Montserrat', 'sans-serif'],
                        serif: ['Cormorant Garamond', 'serif'],
                    },
                    colors: {
                        stone: {
                            50: '#fafaf9',
                            100: '#f5f5f4',
                            200: '#e7e5e4',
                            300: '#d6d3d1',
                            400: '#a8a29e',
                            500: '#78716c',
                            600: '#57534e',
                            700: '#44403c',
                            800: '#292524',
                            900: '#1c1917',
                            950: '#0c0a09',
                        },
                        concrete: '#8c8c8c',
                        blueprint: '#1e3a8a',
                    },
                    animation: {
                        'drift': 'drift 20s ease-in-out infinite',
                        'reveal': 'reveal 1.5s cubic-bezier(0.77, 0, 0.175, 1) forwards',
                    },
                    keyframes: {
                        drift: {
                            '0%, 100%': { transform: 'translate(0, 0) rotate(0deg)' },
                            '33%': { transform: 'translate(30px, -30px) rotate(1deg)' },
                            '66%': { transform: 'translate(-20px, 20px) rotate(-1deg)' },
                        },
                        reveal: {
                            '0%': { transform: 'translateY(100%)' },
                            '100%': { transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #fafaf9;
            color: #1c1917;
            overflow-x: hidden;
        }

        /* Selection */
        ::selection {
            background-color: #1c1917;
            color: #fafaf9;
        }

        /* Smooth Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #f5f5f4;
        }
        ::-webkit-scrollbar-thumb {
            background: #a8a29e;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #57534e;
        }

        /* Image Reveal Mask */
        .reveal-mask {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: #fafaf9;
            transform-origin: top;
            z-index: 10;
        }

        /* Line Draw Animation */
        .line-draw {
            width: 0;
            transition: width 1.5s cubic-bezier(0.19, 1, 0.22, 1);
        }
        .line-draw.active {
            width: 100%;
        }

        /* Blueprint Grid Background */
        .blueprint-grid {
            background-image: 
                linear-gradient(rgba(30, 58, 138, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(30, 58, 138, 0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        /* Noise Texture */
        .noise {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9999;
            opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        /* Custom Cursor */
        .cursor-dot,
        .cursor-circle {
            position: fixed;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 10000;
            pointer-events: none;
            mix-blend-mode: difference;
        }
        .cursor-dot {
            width: 8px;
            height: 8px;
            background-color: white;
        }
        .cursor-circle {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: width 0.3s, height 0.3s, background-color 0.3s;
        }
        
        /* Hide default cursor */
        body {
            cursor: none;
        }
        a, button {
            cursor: none;
        }

        /* Project Card Hover */
        .project-card:hover .project-overlay {
            opacity: 1;
        }
        .project-card:hover img {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="antialiased blueprint-grid">

    <!-- Noise Overlay -->
    <div class="noise"></div>

    <!-- Custom Cursor -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-circle hidden md:block"></div>

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex flex-col justify-between px-6 md:px-12 py-8 overflow-hidden">
        <!-- Navigation (Visual Only) -->
        <nav class="flex justify-between items-center relative z-20">
            <div class="font-serif text-2xl font-semibold tracking-tighter">EV.</div>
            <div class="hidden md:flex gap-8 text-xs font-medium tracking-widest uppercase text-stone-500">
                <span>Architecture</span>
                <span>Interior</span>
                <span>Urban</span>
            </div>
            <button onclick="scrollToSection('contact')" class="text-xs font-medium tracking-widest uppercase border-b border-stone-900 pb-1 hover:text-stone-500 hover:border-stone-500 transition-colors">
                Contact
            </button>
        </nav>

        <!-- Main Hero Content -->
        <div class="flex-1 flex flex-col justify-center items-start relative z-10 mt-12 md:mt-0">
            <div class="max-w-5xl">
                <p class="text-stone-500 text-sm md:text-base font-medium tracking-[0.2em] uppercase mb-6 overflow-hidden">
                    <span class="inline-block hero-reveal">Est. 2018 — Stockholm / Remote</span>
                </p>
                
                <h1 class="font-serif text-5xl md:text-7xl lg:text-9xl font-light leading-[0.9] tracking-tight mb-8">
                    <span class="block overflow-hidden"><span class="block hero-reveal translate-y-full">Form Follows</span></span>
                    <span class="block overflow-hidden"><span class="block hero-reveal translate-y-full italic text-stone-400">Function &</span></span>
                    <span class="block overflow-hidden"><span class="block hero-reveal translate-y-full">Emotion</span></span>
                </h1>

                <div class="flex flex-col md:flex-row gap-8 md:items-end mt-12">
                    <div class="w-full md:w-64 h-[1px] bg-stone-300 line-draw"></div>
                    <p class="text-stone-600 max-w-md text-sm md:text-base leading-relaxed hero-fade opacity-0">
                        Creating spaces that breathe. We specialize in minimalist residential architecture and sustainable commercial environments that stand the test of time.
                    </p>
                </div>
            </div>
        </div>

        <!-- Hero Image (Absolute) -->
        <div class="absolute right-0 top-0 w-full md:w-1/2 h-full -z-10 opacity-20 md:opacity-100">
            <div class="relative w-full h-full overflow-hidden">
                <div class="reveal-mask hero-mask"></div>
                <img src="https://images.unsplash.com/photo-1486718448742-163732cd1544?q=80&w=2560&auto=format&fit=crop" 
                     alt="Modern Architecture" 
                     class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-1000 ease-out scale-110">
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-6 md:left-12 flex items-center gap-4">
            <div class="w-[1px] h-12 bg-stone-900 origin-top animate-[pulse_2s_infinite]"></div>
            <span class="text-[10px] uppercase tracking-widest text-stone-500 vertical-text" style="writing-mode: vertical-rl;">Scroll</span>
        </div>
    </section>

    <!-- SOCIAL LINKS SECTION -->
    <section id="socials" class="py-24 px-6 md:px-12 bg-stone-100 border-t border-stone-200">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16">
                <div>
                    <h2 class="font-serif text-4xl md:text-5xl italic mb-2">Connect</h2>
                    <p class="text-stone-500 text-sm tracking-widest uppercase">Follow the process</p>
                </div>
                <div class="hidden md:block w-32 h-[1px] bg-stone-300 mt-4 md:mt-0"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-px bg-stone-300 border border-stone-300">
                <!-- Social Item 1 -->
                <a href="#" class="group relative bg-stone-100 p-8 hover:bg-stone-900 transition-colors duration-500 h-64 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold tracking-widest text-stone-400 group-hover:text-stone-500">01</span>
                        <svg class="w-6 h-6 text-stone-900 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-serif text-2xl text-stone-900 group-hover:text-white mb-1 transition-colors">Instagram</h3>
                        <p class="text-xs text-stone-500 group-hover:text-stone-400 uppercase tracking-wider">@eliasvance.arch</p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-stone-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </a>

                <!-- Social Item 2 -->
                <a href="#" class="group relative bg-stone-100 p-8 hover:bg-stone-900 transition-colors duration-500 h-64 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold tracking-widest text-stone-400 group-hover:text-stone-500">02</span>
                        <svg class="w-6 h-6 text-stone-900 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-serif text-2xl text-stone-900 group-hover:text-white mb-1 transition-colors">LinkedIn</h3>
                        <p class="text-xs text-stone-500 group-hover:text-stone-400 uppercase tracking-wider">Elias Vance</p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-stone-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </a>

                <!-- Social Item 3 -->
                <a href="#" class="group relative bg-stone-100 p-8 hover:bg-stone-900 transition-colors duration-500 h-64 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold tracking-widest text-stone-400 group-hover:text-stone-500">03</span>
                        <svg class="w-6 h-6 text-stone-900 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-serif text-2xl text-stone-900 group-hover:text-white mb-1 transition-colors">Twitter</h3>
                        <p class="text-xs text-stone-500 group-hover:text-stone-400 uppercase tracking-wider">@eliasvance</p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-stone-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </a>

                <!-- Social Item 4 -->
                <a href="#" class="group relative bg-stone-100 p-8 hover:bg-stone-900 transition-colors duration-500 h-64 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold tracking-widest text-stone-400 group-hover:text-stone-500">04</span>
                        <svg class="w-6 h-6 text-stone-900 group-hover:text-white transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </div>
                    <div>
                        <h3 class="font-serif text-2xl text-stone-900 group-hover:text-white mb-1 transition-colors">Behance</h3>
                        <p class="text-xs text-stone-500 group-hover:text-stone-400 uppercase tracking-wider">Portfolio</p>
                    </div>
                    <div class="absolute bottom-0 left-0 w-full h-1 bg-stone-900 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-500 origin-left"></div>
                </a>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO SECTION -->
    <section id="services" class="py-32 px-6 md:px-12 relative">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                <!-- Left Column: Sticky Title -->
                <div class="lg:col-span-4">
                    <div class="lg:sticky lg:top-32">
                        <span class="text-xs font-bold tracking-[0.3em] text-stone-400 uppercase block mb-4">Services</span>
                        <h2 class="font-serif text-5xl md:text-6xl leading-[0.9] mb-8">
                            Design<br>
                            <span class="italic text-stone-400">&</span><br>
                            Direction
                        </h2>
                        <p class="text-stone-600 leading-relaxed text-sm max-w-xs">
                            From conceptual sketches to construction administration, we provide comprehensive architectural services tailored to visionary clients.
                        </p>
                    </div>
                </div>

                <!-- Right Column: Service List -->
                <div class="lg:col-span-8 space-y-24">
                    <!-- Service 1 -->
                    <div class="service-block group">
                        <div class="flex items-baseline gap-4 mb-6 border-b border-stone-200 pb-4">
                            <span class="text-xs font-bold text-stone-300">01</span>
                            <h3 class="font-serif text-3xl md:text-4xl group-hover:translate-x-4 transition-transform duration-500">Architectural Design</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="aspect-[4/3] overflow-hidden bg-stone-200">
                                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" alt="Architecture">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="text-stone-600 mb-6 leading-relaxed">
                                    Residential and commercial structures that prioritize natural light, material honesty, and spatial flow. We create buildings that age gracefully.
                                </p>
                                <ul class="space-y-2 text-sm text-stone-500">
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>Schematic Design</li>
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>3D Visualization</li>
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>Construction Docs</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-block group">
                        <div class="flex items-baseline gap-4 mb-6 border-b border-stone-200 pb-4">
                            <span class="text-xs font-bold text-stone-300">02</span>
                            <h3 class="font-serif text-3xl md:text-4xl group-hover:translate-x-4 transition-transform duration-500">Interior Curation</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="aspect-[4/3] overflow-hidden bg-stone-200">
                                <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2000&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" alt="Interior">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="text-stone-600 mb-6 leading-relaxed">
                                    Holistic interior environments that complement the architecture. We select materials, furniture, and lighting to create cohesive atmospheres.
                                </p>
                                <ul class="space-y-2 text-sm text-stone-500">
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>Space Planning</li>
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>Material Selection</li>
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>FF&E Procurement</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-block group">
                        <div class="flex items-baseline gap-4 mb-6 border-b border-stone-200 pb-4">
                            <span class="text-xs font-bold text-stone-300">03</span>
                            <h3 class="font-serif text-3xl md:text-4xl group-hover:translate-x-4 transition-transform duration-500">Urban Consultation</h3>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="aspect-[4/3] overflow-hidden bg-stone-200">
                                <img src="https://images.unsplash.com/photo-1486325212027-8081e485255e?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700" alt="Urban">
                            </div>
                            <div class="flex flex-col justify-center">
                                <p class="text-stone-600 mb-6 leading-relaxed">
                                    Master planning and feasibility studies for urban developments. We analyze context, zoning, and community needs to propose sensitive interventions.
                                </p>
                                <ul class="space-y-2 text-sm text-stone-500">
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>Site Analysis</li>
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>Zoning Strategy</li>
                                    <li class="flex items-center gap-2"><span class="w-1 h-1 bg-stone-900 rounded-full"></span>Sustainability Consulting</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CALL TO ACTION SECTION -->
    <section id="contact" class="py-32 px-6 md:px-12 bg-stone-900 text-stone-50 relative overflow-hidden">
        <!-- Background Text -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 whitespace-nowrap pointer-events-none opacity-5">
            <span class="font-serif text-[20vw] font-light">Let's Build</span>
        </div>

        <div class="max-w-4xl mx-auto relative z-10 text-center">
            <h2 class="font-serif text-5xl md:text-7xl mb-8">Start a Project</h2>
            <p class="text-stone-400 text-lg mb-12 max-w-xl mx-auto">
                Have a vision for your next space? We'd love to hear about it. Send us a message and we'll respond within 48 hours.
            </p>

            <form class="max-w-lg mx-auto space-y-6 text-left" onsubmit="event.preventDefault(); alert('Thank you for your inquiry. We will be in touch shortly.');">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-2">
                        <label class="text-xs uppercase tracking-widest text-stone-500">Name</label>
                        <input type="text" class="w-full bg-transparent border-b border-stone-700 py-3 text-stone-100 focus:outline-none focus:border-stone-400 transition-colors placeholder-stone-700" placeholder="John Doe">
                    </div>
                    <div class="space-y-2">
                        <label class="text-xs uppercase tracking-widest text-stone-500">Email</label>
                        <input type="email" class="w-full bg-transparent border-b border-stone-700 py-3 text-stone-100 focus:outline-none focus:border-stone-400 transition-colors placeholder-stone-700" placeholder="john@example.com">
                    </div>
                </div>
                
                <div class="space-y-2">
                    <label class="text-xs uppercase tracking-widest text-stone-500">Project Type</label>
                    <select class="w-full bg-transparent border-b border-stone-700 py-3 text-stone-100 focus:outline-none focus:border-stone-400 transition-colors [&>option]:bg-stone-900">
                        <option>Residential</option>
                        <option>Commercial</option>
                        <option>Renovation</option>
                        <option>Consultation</option>
                    </select>
                </div>

                <div class="space-y-2">
                    <label class="text-xs uppercase tracking-widest text-stone-500">Message</label>
                    <textarea rows="4" class="w-full bg-transparent border-b border-stone-700 py-3 text-stone-100 focus:outline-none focus:border-stone-400 transition-colors placeholder-stone-700 resize-none" placeholder="Tell us about your vision..."></textarea>
                </div>

                <div class="pt-6 text-center">
                    <button type="submit" class="group relative inline-flex items-center justify-center px-12 py-4 overflow-hidden font-medium transition-all bg-stone-100 rounded-none hover:bg-white text-stone-900">
                        <span class="relative text-sm font-bold tracking-widest uppercase">Send Inquiry</span>
                        <div class="absolute inset-0 -z-10 w-full h-full transition-all duration-300 ease-out transform translate-x-full bg-stone-300 group-hover:translate-x-0"></div>
                    </button>
                </div>
            </form>
        </div>
    </section>

    <!-- MINIMAL FOOTER -->
    <footer class="py-12 bg-stone-950 text-center border-t border-stone-900">
        <p class="text-stone-700 font-serif italic text-sm">
            Elias Vance Architecture &copy; 2023
        </p>
    </footer>

    <script>
        // Register GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Custom Cursor Logic
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorCircle = document.querySelector('.cursor-circle');

        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            gsap.to(cursorCircle, {
                x: posX,
                y: posY,
                duration: 0.2,
                ease: "power2.out"
            });
        });

        // Add hover states to interactive elements
        const interactiveElements = document.querySelectorAll('a, button, input, select, textarea');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                gsap.to(cursorCircle, { scale: 1.5, borderColor: "rgba(255,255,255,0.8)" });
            });
            el.addEventListener('mouseleave', () => {
                gsap.to(cursorCircle, { scale: 1, borderColor: "rgba(255,255,255,0.5)" });
            });
        });

        // Hero Animations
        const heroTl = gsap.timeline();

        heroTl.to('.hero-reveal', {
            y: 0,
            duration: 1.2,
            stagger: 0.15,
            ease: "power4.out",
            delay: 0.2
        })
        .to('.hero-mask', {
            scaleY: 0,
            transformOrigin: "top",
            duration: 1.5,
            ease: "power4.inOut"
        }, "-=1.0")
        .to('.line-draw', {
            width: "100%",
            duration: 1.5,
            ease: "power2.inOut"
        }, "-=1.0")
        .to('.hero-fade', {
            opacity: 1,
            duration: 1,
            ease: "power2.out"
        }, "-=0.5");

        // Service Blocks Parallax
        gsap.utils.toArray('.service-block').forEach((block, i) => {
            gsap.from(block, {
                scrollTrigger: {
                    trigger: block,
                    start: "top 85%",
                },
                y: 50,
                opacity: 0,
                duration: 1,
                ease: "power3.out"
            });
        });

        // Smooth Scroll
        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
</body>
</html>