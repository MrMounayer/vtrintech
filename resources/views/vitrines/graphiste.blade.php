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
                        mono: ['"Courier New"', 'Courier', 'monospace'],
                        sans: ['system-ui', '-apple-system', 'BlinkMacSystemFont', 'Segoe UI', 'Roboto', 'sans-serif'],
                    },
                    animation: {
                        'marquee': 'marquee 25s linear infinite',
                        'marquee-reverse': 'marquee-reverse 25s linear infinite',
                        'spin-slow': 'spin 12s linear infinite',
                        'blink': 'blink 1s step-end infinite',
                    },
                    keyframes: {
                        marquee: {
                            '0%': { transform: 'translateX(0%)' },
                            '100%': { transform: 'translateX(-100%)' },
                        },
                        'marquee-reverse': {
                            '0%': { transform: 'translateX(-100%)' },
                            '100%': { transform: 'translateX(0%)' },
                        },
                        blink: {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap');
        
        body {
            font-family: 'Space Grotesk', system-ui, sans-serif;
        }
        
        . brutalist-border {
            box-shadow: 4px 4px 0px 0px #000;
        }
        
        .brutalist-border:hover {
            box-shadow: 6px 6px 0px 0px #000;
            transform: translate(-2px, -2px);
        }
        
        .scanlines {
            background: linear-gradient(
                to bottom,
                rgba(255,255,255,0),
                rgba(255,255,255,0) 50%,
                rgba(0,0,0,0.02) 50%,
                rgba(0,0,0,0.02)
            );
            background-size: 100% 4px;
        }
        
        .noise {
            position: relative;
        }
        
        .noise::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.03;
            z-index: 1;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }
        
        .glitch-text:hover {
            animation: glitch 0.3s cubic-bezier(.25, .46, .45, .94) both infinite;
        }
        
        @keyframes glitch {
            0% { transform: translate(0) }
            20% { transform: translate(-2px, 2px) }
            40% { transform: translate(-2px, -2px) }
            60% { transform: translate(2px, 2px) }
            80% { transform: translate(2px, -2px) }
            100% { transform: translate(0) }
        }
        
        .custom-cursor {
            cursor: crosshair;
        }
    </style>
<base target="_blank">
</head>
<body class="bg-[#f0f0f0] text-black custom-cursor selection:bg-black selection:text-white">

    <!-- Top Marquee -->
    <div class="w-full bg-black text-white py-2 overflow-hidden border-b-2 border-black">
        <div class="flex whitespace-nowrap animate-marquee">
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">EST. 2024</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">Digital Craftsmanship</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">Minimal & Functional</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">Laravel + Tailwind</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">EST. 2024</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">Digital Craftsmanship</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">Minimal & Functional</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">Laravel + Tailwind</span>
            <span class="mx-4 text-sm font-mono uppercase tracking-widest">•</span>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="min-h-screen flex flex-col justify-center items-center relative noise px-4 py-20">
        <div class="scanlines absolute inset-0 pointer-events-none"></div>
        
        <!-- Large Typography -->
        <div class="text-center z-10 max-w-6xl mx-auto">
            <div class="mb-8">
                <span class="inline-block border-2 border-black px-4 py-1 text-xs font-mono uppercase tracking-[0.3em] bg-white brutalist-border">
                    Studio
                </span>
            </div>
            
            <h1 class="text-[12vw] md:text-[10vw] font-bold leading-[0.85] tracking-tighter mb-8 glitch-text select-none">
                WE BUILD<br/>
                <span class="text-transparent" style="-webkit-text-stroke: 2px #000;">DIGITAL</span><br/>
                REALITY
            </h1>
            
            <p class="max-w-md mx-auto text-lg md:text-xl font-mono leading-relaxed mb-12 text-gray-700">
                Creating web experiences that matter. No clutter. No noise. Just pure functionality.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <button class="bg-black text-white px-8 py-4 text-sm font-bold uppercase tracking-widest border-2 border-black brutalist-border transition-all duration-200 hover:bg-white hover:text-black">
                    Start Project
                </button>
                <button class="bg-white text-black px-8 py-4 text-sm font-bold uppercase tracking-widest border-2 border-black brutalist-border transition-all duration-200 hover:bg-black hover:text-white">
                    View Work
                </button>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="absolute bottom-10 left-10 hidden md:block">
            <div class="w-24 h-24 border-2 border-black bg-white brutalist-border flex items-center justify-center animate-spin-slow">
                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path>
                </svg>
            </div>
        </div>

        <div class="absolute top-20 right-10 hidden md:block">
            <div class="text-xs font-mono space-y-1 text-right">
                <div class="border border-black px-2 py-1 bg-white">LAT: 40.7128° N</div>
                <div class="border border-black px-2 py-1 bg-white">LONG: 74.0060° W</div>
                <div class="border border-black px-2 py-1 bg-white animate-blink">LIVE</div>
            </div>
        </div>
    </section>

    <!-- Social Links Section - Grid Layout -->
    <section class="py-20 px-4 border-t-2 border-black bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border-2 border-black">
                
                <!-- Twitter/X -->
                <a href="#" class="group p-8 border-b-2 md:border-b-0 md:border-r-2 border-black hover:bg-black hover:text-white transition-colors duration-300 relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="text-xs font-mono uppercase tracking-widest mb-4 opacity-50">01</div>
                        <h3 class="text-3xl font-bold mb-2">TWITTER</h3>
                        <p class="font-mono text-sm opacity-70">@handle</p>
                    </div>
                    <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </div>
                </a>

                <!-- GitHub -->
                <a href="#" class="group p-8 border-b-2 md:border-b-0 md:border-r-2 border-black hover:bg-black hover:text-white transition-colors duration-300 relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="text-xs font-mono uppercase tracking-widest mb-4 opacity-50">02</div>
                        <h3 class="text-3xl font-bold mb-2">GITHUB</h3>
                        <p class="font-mono text-sm opacity-70">@username</p>
                    </div>
                    <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </div>
                </a>

                <!-- Email -->
                <a href="#" class="group p-8 hover:bg-black hover:text-white transition-colors duration-300 relative overflow-hidden">
                    <div class="relative z-10">
                        <div class="text-xs font-mono uppercase tracking-widest mb-4 opacity-50">03</div>
                        <h3 class="text-3xl font-bold mb-2">EMAIL</h3>
                        <p class="font-mono text-sm opacity-70">hello@studio.com</p>
                    </div>
                    <div class="absolute bottom-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </a>
            </div>

            <!-- Bottom info -->
            <div class="mt-8 flex justify-between items-center font-mono text-xs uppercase tracking-widest text-gray-500">
                <span>Connect with us</span>
                <span class="hidden md:inline">Scroll for more →</span>
            </div>
        </div>
    </section>

    <!-- Carousel Section - Horizontal Scroll -->
    <section class="py-20 bg-[#ff6b6b] border-t-2 border-black overflow-hidden">
        <div class="px-4 mb-12 max-w-6xl mx-auto">
            <div class="flex justify-between items-end">
                <div>
                    <div class="text-xs font-mono uppercase tracking-widest mb-2 opacity-70">Selected Work</div>
                    <h2 class="text-5xl md:text-7xl font-bold tracking-tighter">PROJECTS</h2>
                </div>
                <div class="hidden md:flex gap-2">
                    <button onclick="document.getElementById('project-scroll').scrollBy({left: -300, behavior: 'smooth'})" class="w-12 h-12 border-2 border-black bg-white flex items-center justify-center hover:bg-black hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button onclick="document.getElementById('project-scroll').scrollBy({left: 300, behavior: 'smooth'})" class="w-12 h-12 border-2 border-black bg-white flex items-center justify-center hover:bg-black hover:text-white transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Carousel Container -->
        <div id="project-scroll" class="flex overflow-x-auto hide-scrollbar gap-6 px-4 pb-8 snap-x snap-mandatory" style="scrollbar-width: none; -ms-overflow-style: none;">
            
            <!-- Project 1 -->
            <div class="flex-none w-[85vw] md:w-[600px] snap-start">
                <div class="bg-white border-2 border-black brutalist-border p-6 h-full">
                    <div class="aspect-[4/3] bg-black mb-6 overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-purple-600 opacity-80"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white font-mono text-sm">
                            PROJECT_01.jpg
                        </div>
                        <div class="absolute top-4 left-4 bg-white text-black px-2 py-1 text-xs font-mono border border-black">2024</div>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">E-COMMERCE REDESIGN</h3>
                        <span class="text-xs font-mono border border-black px-2 py-1">WEB</span>
                    </div>
                    <p class="font-mono text-sm text-gray-600 mb-4">Complete overhaul of online shopping experience. 40% increase in conversion.</p>
                    <div class="flex gap-2 font-mono text-xs">
                        <span class="bg-gray-100 px-2 py-1 border border-black">Laravel</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">Vue</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">Stripe</span>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="flex-none w-[85vw] md:w-[600px] snap-start">
                <div class="bg-white border-2 border-black brutalist-border p-6 h-full">
                    <div class="aspect-[4/3] bg-black mb-6 overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-orange-600 opacity-80"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white font-mono text-sm">
                            PROJECT_02.jpg
                        </div>
                        <div class="absolute top-4 left-4 bg-white text-black px-2 py-1 text-xs font-mono border border-black">2024</div>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">DASHBOARD UI</h3>
                        <span class="text-xs font-mono border border-black px-2 py-1">SAAS</span>
                    </div>
                    <p class="font-mono text-sm text-gray-600 mb-4">Analytics platform for fintech startup. Real-time data visualization.</p>
                    <div class="flex gap-2 font-mono text-xs">
                        <span class="bg-gray-100 px-2 py-1 border border-black">React</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">D3.js</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">API</span>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="flex-none w-[85vw] md:w-[600px] snap-start">
                <div class="bg-white border-2 border-black brutalist-border p-6 h-full">
                    <div class="aspect-[4/3] bg-black mb-6 overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-teal-600 opacity-80"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white font-mono text-sm">
                            PROJECT_03.jpg
                        </div>
                        <div class="absolute top-4 left-4 bg-white text-black px-2 py-1 text-xs font-mono border border-black">2023</div>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">MOBILE BANKING</h3>
                        <span class="text-xs font-mono border border-black px-2 py-1">APP</span>
                    </div>
                    <p class="font-mono text-sm text-gray-600 mb-4">Secure banking application with biometric authentication.</p>
                    <div class="flex gap-2 font-mono text-xs">
                        <span class="bg-gray-100 px-2 py-1 border border-black">Flutter</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">Node.js</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">AWS</span>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="flex-none w-[85vw] md:w-[600px] snap-start">
                <div class="bg-white border-2 border-black brutalist-border p-6 h-full">
                    <div class="aspect-[4/3] bg-black mb-6 overflow-hidden relative group">
                        <div class="absolute inset-0 bg-gradient-to-br from-pink-400 to-rose-600 opacity-80"></div>
                        <div class="absolute inset-0 flex items-center justify-center text-white font-mono text-sm">
                            PROJECT_04.jpg
                        </div>
                        <div class="absolute top-4 left-4 bg-white text-black px-2 py-1 text-xs font-mono border border-black">2023</div>
                    </div>
                    <div class="flex justify-between items-start mb-4">
                        <h3 class="text-2xl font-bold">BRAND IDENTITY</h3>
                        <span class="text-xs font-mono border border-black px-2 py-1">DESIGN</span>
                    </div>
                    <p class="font-mono text-sm text-gray-600 mb-4">Complete visual identity system for tech startup.</p>
                    <div class="flex gap-2 font-mono text-xs">
                        <span class="bg-gray-100 px-2 py-1 border border-black">Figma</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">Illustrator</span>
                        <span class="bg-gray-100 px-2 py-1 border border-black">Motion</span>
                    </div>
                </div>
            </div>

            <!-- View All Card -->
            <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                <div class="bg-black text-white border-2 border-black brutalist-border p-6 h-full flex flex-col justify-center items-center min-h-[400px]">
                    <div class="text-6xl mb-4">→</div>
                    <h3 class="text-2xl font-bold mb-2">VIEW ALL</h3>
                    <p class="font-mono text-sm opacity-70 text-center">12 projects in portfolio</p>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="px-4 mt-8 max-w-6xl mx-auto">
            <div class="h-1 bg-black/20 rounded-full overflow-hidden">
                <div class="h-full bg-black w-1/4 rounded-full"></div>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-black text-white py-8 px-4">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="font-mono text-xs uppercase tracking-widest opacity-50">
                © 2024 Studio. All rights reserved.
            </div>
            <div class="font-mono text-xs uppercase tracking-widest opacity-50">
                Built with Laravel & Tailwind
            </div>
        </div>
    </footer>

    <script>
        // Glitch effect on mouse move for hero text
        const heroText = document.querySelector('.glitch-text');
        document.addEventListener('mousemove', (e) => {
            const x = e.clientX / window.innerWidth;
            const y = e.clientY / window.innerHeight;
            
            if (heroText) {
                heroText.style.transform = `translate(${x * 10}px, ${y * 10}px)`;
            }
        });

        // Carousel drag functionality
        const slider = document.getElementById('project-scroll');
        let isDown = false;
        let startX;
        let scrollLeft;

        slider.addEventListener('mousedown', (e) => {
            isDown = true;
            slider.classList.add('cursor-grabbing');
            startX = e.pageX - slider.offsetLeft;
            scrollLeft = slider.scrollLeft;
        });

        slider.addEventListener('mouseleave', () => {
            isDown = false;
            slider.classList.remove('cursor-grabbing');
        });

        slider.addEventListener('mouseup', () => {
            isDown = false;
            slider.classList.remove('cursor-grabbing');
        });

        slider.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - slider.offsetLeft;
            const walk = (x - startX) * 2;
            slider.scrollLeft = scrollLeft - walk;
        });
    </script>
</body>
</html>