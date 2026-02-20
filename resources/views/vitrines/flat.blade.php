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
                    colors: {
                        flat: {
                            red: '#e74c3c',
                            darkred: '#c0392b',
                            blue: '#3498db',
                            darkblue: '#2980b9',
                            green: '#2ecc71',
                            darkgreen: '#27ae60',
                            yellow: '#f1c40f',
                            darkyellow: '#f39c12',
                            orange: '#e67e22',
                            darkorange: '#d35400',
                            purple: '#9b59b6',
                            darkpurple: '#8e44ad',
                            teal: '#1abc9c',
                            darkteal: '#16a085',
                            navy: '#34495e',
                            darknavy: '#2c3e50',
                            gray: '#95a5a6',
                            darkgray: '#7f8c8d',
                            cloud: '#ecf0f1',
                            silver: '#bdc3c7',
                        }
                    },
                    fontFamily: {
                        sans: ['"Inter"', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #ecf0f1;
        }
        
        .flat-shadow {
            box-shadow: 0 4px 0 0 rgba(0,0,0,0.2);
        }
        
        .flat-shadow-lg {
            box-shadow: 0 6px 0 0 rgba(0,0,0,0.2);
        }
        
        .flat-shadow-xl {
            box-shadow: 0 8px 0 0 rgba(0,0,0,0.2);
        }
        
        .flat-btn {
            transition: all 0.1s;
        }
        
        .flat-btn:active {
            transform: translateY(4px);
            box-shadow: 0 0 0 0 rgba(0,0,0,0.2);
        }
        
        .flat-card {
            transition: all 0.2s;
        }
        
        .flat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 0 0 rgba(0,0,0,0.2);
        }
        
        .pattern-grid {
            background-image: 
                linear-gradient(rgba(0,0,0,0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0,0,0,0.03) 1px, transparent 1px);
            background-size: 40px 40px;
        }
        
        .pattern-dots {
            background-image: radial-gradient(rgba(0,0,0,0.1) 1px, transparent 1px);
            background-size: 20px 20px;
        }
        
        .pattern-stripes {
            background: repeating-linear-gradient(
                45deg,
                transparent,
                transparent 10px,
                rgba(0,0,0,0.03) 10px,
                rgba(0,0,0,0.03) 20px
            );
        }
        
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }
        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        .geometric-shape {
            clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%);
        }
        
        .triangle-up {
            clip-path: polygon(50% 0%, 0% 100%, 100% 100%);
        }
        
        .triangle-down {
            clip-path: polygon(0% 0%, 100% 0%, 50% 100%);
        }
    </style>
</head>
<body class="antialiased">

    <!-- Hero Section -->
    <section class="relative min-h-screen bg-flat-navy pattern-grid overflow-hidden">
        <!-- Geometric Decorations -->
        <div class="absolute top-20 left-10 w-16 h-16 bg-flat-red flat-shadow opacity-80 rotate-12 hidden md:block"></div>
        <div class="absolute top-40 right-20 w-24 h-24 bg-flat-yellow flat-shadow opacity-80 -rotate-12 hidden md:block"></div>
        <div class="absolute bottom-32 left-1/4 w-20 h-20 bg-flat-teal flat-shadow opacity-80 rotate-45 hidden md:block"></div>
        <div class="absolute top-1/3 right-1/3 w-12 h-12 bg-flat-purple flat-shadow opacity-80 hidden md:block"></div>
        
        <div class="relative z-10 max-w-6xl mx-auto px-6 py-20 min-h-screen flex flex-col justify-center items-center text-center">
            
            <!-- Badge -->
            <div class="mb-8 inline-block">
                <span class="bg-flat-yellow text-flat-darknavy px-4 py-2 text-sm font-bold uppercase tracking-wider flat-shadow">
                    v2.0 Now Available
                </span>
            </div>

            <!-- Main Title -->
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black text-white mb-6 leading-none tracking-tight">
                BUILD<br/>
                <span class="text-flat-teal">BOLD</span><br/>
                PRODUCTS
            </h1>

            <!-- Subtitle -->
            <p class="text-xl md:text-2xl text-flat-cloud mb-12 max-w-2xl font-medium">
                Flat design. Sharp edges. Vibrant colors. No gradients, no shadows, just pure digital clarity.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 w-full max-w-md">
                <button class="flat-btn bg-flat-red text-white px-8 py-4 text-lg font-bold uppercase tracking-wide flat-shadow-lg w-full sm:w-auto">
                    Get Started
                </button>
                <button class="flat-btn bg-flat-cloud text-flat-navy px-8 py-4 text-lg font-bold uppercase tracking-wide flat-shadow w-full sm:w-auto">
                    Learn More
                </button>
            </div>

            <!-- Stats Row -->
            <div class="mt-16 grid grid-cols-3 gap-8 max-w-2xl w-full">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-black text-flat-yellow mb-1">50+</div>
                    <div class="text-flat-cloud text-sm uppercase tracking-wide font-medium">Components</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-black text-flat-teal mb-1">10k</div>
                    <div class="text-flat-cloud text-sm uppercase tracking-wide font-medium">Downloads</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-black text-flat-purple mb-1">0</div>
                    <div class="text-flat-cloud text-sm uppercase tracking-wide font-medium">Gradients</div>
                </div>
            </div>
        </div>

        <!-- Bottom Wave -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 120L60 110C120 100 240 80 360 70C480 60 600 60 720 65C840 70 960 80 1080 85C1200 90 1320 90 1380 90L1440 90V120H1380C1320 120 1200 120 1080 120C960 120 840 120 720 120C600 120 480 120 360 120C240 120 120 120 60 120H0Z" fill="#ecf0f1"/>
            </svg>
        </div>
    </section>

    <!-- Social Links Section - Flat Grid -->
    <section class="py-20 px-6 bg-flat-cloud pattern-dots">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-flat-navy mb-4 uppercase tracking-tight">
                    Connect With Us
                </h2>
                <div class="w-24 h-2 bg-flat-red mx-auto flat-shadow"></div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Twitter -->
                <a href="#" class="group bg-flat-blue p-6 flat-card flat-shadow text-white text-center">
                    <div class="w-12 h-12 bg-white/20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold uppercase tracking-wide">Twitter</h3>
                    <p class="text-sm opacity-80 mt-1">@flatstudio</p>
                </a>

                <!-- GitHub -->
                <a href="#" class="group bg-flat-navy p-6 flat-card flat-shadow text-white text-center">
                    <div class="w-12 h-12 bg-white/20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold uppercase tracking-wide">GitHub</h3>
                    <p class="text-sm opacity-80 mt-1">@flatstudio</p>
                </a>

                <!-- Discord -->
                <a href="#" class="group bg-flat-purple p-6 flat-card flat-shadow text-white text-center">
                    <div class="w-12 h-12 bg-white/20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028 14.09 14.09 0 001.226-1.994.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/>
                        </svg>
                    </div>
                    <h3 class="font-bold uppercase tracking-wide">Discord</h3>
                    <p class="text-sm opacity-80 mt-1">Join Server</p>
                </a>

                <!-- Email -->
                <a href="#" class="group bg-flat-teal p-6 flat-card flat-shadow text-white text-center">
                    <div class="w-12 h-12 bg-white/20 mx-auto mb-4 flex items-center justify-center">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-bold uppercase tracking-wide">Email</h3>
                    <p class="text-sm opacity-80 mt-1">hello@flat.com</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Carousel Section - Flat Cards -->
    <section class="py-20 px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-8 gap-4">
                <div>
                    <span class="bg-flat-orange text-white px-3 py-1 text-xs font-bold uppercase tracking-wide flat-shadow mb-4 inline-block">
                        Portfolio
                    </span>
                    <h2 class="text-3xl md:text-5xl font-black text-flat-navy uppercase tracking-tight">
                        Featured Work
                    </h2>
                </div>
                
                <!-- Controls -->
                <div class="flex gap-2">
                    <button onclick="scrollCarousel(-1)" class="flat-btn w-12 h-12 bg-flat-navy text-white flex items-center justify-center flat-shadow hover:bg-flat-darknavy">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button onclick="scrollCarousel(1)" class="flat-btn w-12 h-12 bg-flat-navy text-white flex items-center justify-center flat-shadow hover:bg-flat-darknavy">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Carousel -->
            <div id="carousel" class="flex gap-6 overflow-x-auto hide-scroll snap-x snap-mandatory pb-4">
                
                <!-- Card 1 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-flat-red flat-shadow-xl h-full">
                        <div class="aspect-square bg-flat-darkred flex items-center justify-center relative overflow-hidden">
                            <div class="w-32 h-32 bg-flat-red rotate-45"></div>
                            <div class="absolute top-4 right-4 bg-white text-flat-navy px-3 py-1 text-xs font-bold uppercase">
                                2024
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-white/60 text-xs font-bold uppercase tracking-wide">Web App</span>
                            <h3 class="text-white text-xl font-bold uppercase mt-1 mb-2">Task Manager</h3>
                            <p class="text-white/80 text-sm">Productivity application with real-time collaboration features.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-flat-blue flat-shadow-xl h-full">
                        <div class="aspect-square bg-flat-darkblue flex items-center justify-center relative overflow-hidden">
                            <div class="w-0 h-0 border-l-[60px] border-l-transparent border-r-[60px] border-r-transparent border-b-[100px] border-b-flat-blue"></div>
                            <div class="absolute top-4 right-4 bg-white text-flat-navy px-3 py-1 text-xs font-bold uppercase">
                                2024
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-white/60 text-xs font-bold uppercase tracking-wide">Mobile</span>
                            <h3 class="text-white text-xl font-bold uppercase mt-1 mb-2">Weather App</h3>
                            <p class="text-white/80 text-sm">Beautiful weather forecasting with location-based alerts.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-flat-green flat-shadow-xl h-full">
                        <div class="aspect-square bg-flat-darkgreen flex items-center justify-center relative overflow-hidden">
                            <div class="w-24 h-24 bg-flat-green rounded-full"></div>
                            <div class="absolute top-4 right-4 bg-white text-flat-navy px-3 py-1 text-xs font-bold uppercase">
                                2023
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-white/60 text-xs font-bold uppercase tracking-wide">E-Commerce</span>
                            <h3 class="text-white text-xl font-bold uppercase mt-1 mb-2">Plant Shop</h3>
                            <p class="text-white/80 text-sm">Online store for indoor plants with care guides.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-flat-purple flat-shadow-xl h-full">
                        <div class="aspect-square bg-flat-darkpurple flex items-center justify-center relative overflow-hidden">
                            <div class="w-20 h-20 bg-flat-purple geometric-shape"></div>
                            <div class="absolute top-4 right-4 bg-white text-flat-navy px-3 py-1 text-xs font-bold uppercase">
                                2023
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-white/60 text-xs font-bold uppercase tracking-wide">Dashboard</span>
                            <h3 class="text-white text-xl font-bold uppercase mt-1 mb-2">Analytics Pro</h3>
                            <p class="text-white/80 text-sm">Data visualization platform for marketing teams.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-flat-orange flat-shadow-xl h-full">
                        <div class="aspect-square bg-flat-darkorange flex items-center justify-center relative overflow-hidden">
                            <div class="w-0 h-0 border-l-[50px] border-l-transparent border-r-[50px] border-r-transparent border-t-[80px] border-t-flat-orange triangle-up"></div>
                            <div class="absolute top-4 right-4 bg-white text-flat-navy px-3 py-1 text-xs font-bold uppercase">
                                2023
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-white/60 text-xs font-bold uppercase tracking-wide">Social</span>
                            <h3 class="text-white text-xl font-bold uppercase mt-1 mb-2">Community</h3>
                            <p class="text-white/80 text-sm">Platform for connecting local food enthusiasts.</p>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-flat-teal flat-shadow-xl h-full">
                        <div class="aspect-square bg-flat-darkteal flex items-center justify-center relative overflow-hidden">
                            <div class="w-16 h-24 bg-flat-teal"></div>
                            <div class="absolute top-4 right-4 bg-white text-flat-navy px-3 py-1 text-xs font-bold uppercase">
                                2022
                            </div>
                        </div>
                        <div class="p-6">
                            <span class="text-white/60 text-xs font-bold uppercase tracking-wide">Landing Page</span>
                            <h3 class="text-white text-xl font-bold uppercase mt-1 mb-2">Agency Site</h3>
                            <p class="text-white/80 text-sm">Creative agency portfolio with bold animations.</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Progress Dots -->
            <div class="flex justify-center gap-2 mt-8">
                <button onclick="goToSlide(0)" class="w-3 h-3 bg-flat-navy flat-shadow-sm transition-all hover:bg-flat-red"></button>
                <button onclick="goToSlide(1)" class="w-3 h-3 bg-flat-gray flat-shadow-sm transition-all hover:bg-flat-red"></button>
                <button onclick="goToSlide(2)" class="w-3 h-3 bg-flat-gray flat-shadow-sm transition-all hover:bg-flat-red"></button>
                <button onclick="goToSlide(3)" class="w-3 h-3 bg-flat-gray flat-shadow-sm transition-all hover:bg-flat-red"></button>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section class="py-20 px-6 bg-flat-cloud pattern-stripes">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-flat-navy mb-4 uppercase tracking-tight">
                    Why Choose Flat?
                </h2>
                <div class="w-24 h-2 bg-flat-teal mx-auto flat-shadow"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-8 flat-shadow">
                    <div class="w-16 h-16 bg-flat-yellow flat-shadow-sm mb-6 flex items-center justify-center text-2xl">
                        ⚡
                    </div>
                    <h3 class="text-xl font-black uppercase text-flat-navy mb-2">Fast Performance</h3>
                    <p class="text-flat-gray">Lightweight designs that load instantly and run smoothly on all devices.</p>
                </div>

                <div class="bg-white p-8 flat-shadow">
                    <div class="w-16 h-16 bg-flat-green flat-shadow-sm mb-6 flex items-center justify-center text-2xl">
                        🎨
                    </div>
                    <h3 class="text-xl font-black uppercase text-flat-navy mb-2">Bold Colors</h3>
                    <p class="text-flat-gray">Vibrant, carefully selected color palettes that make your brand pop.</p>
                </div>

                <div class="bg-white p-8 flat-shadow">
                    <div class="w-16 h-16 bg-flat-blue flat-shadow-sm mb-6 flex items-center justify-center text-2xl">
                        📱
                    </div>
                    <h3 class="text-xl font-black uppercase text-flat-navy mb-2">Fully Responsive</h3>
                    <p class="text-flat-gray">Pixel-perfect designs that adapt beautifully to any screen size.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 px-6 bg-flat-navy">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-5xl font-black text-white mb-6 uppercase tracking-tight">
                Ready to Go Flat?
            </h2>
            <p class="text-flat-cloud text-lg mb-8 max-w-2xl mx-auto">
                Join thousands of designers and developers building the future with flat design principles.
            </p>
            <button class="flat-btn bg-flat-red text-white px-10 py-5 text-lg font-bold uppercase tracking-wide flat-shadow-xl">
                Download Now — It's Free
            </button>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-flat-darknavy py-8 px-6">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-white font-black text-xl uppercase tracking-tight">
                Flat Studio
            </div>
            <div class="text-flat-gray text-sm font-medium">
                © 2024 — Built with Laravel & Tailwind
            </div>
        </div>
    </footer>

    <script>
        const carousel = document.getElementById('carousel');
        const dots = document.querySelectorAll('.flex.justify-center.gap-2.mt-8 button');
        let currentIndex = 0;

        function scrollCarousel(direction) {
            const cardWidth = 400 + 24; // card width + gap
            carousel.scrollBy({ left: direction * cardWidth, behavior: 'smooth' });
            
            currentIndex = Math.max(0, Math.min(currentIndex + direction, 5));
            updateDots();
        }

        function goToSlide(index) {
            const cardWidth = 400 + 24;
            carousel.scrollTo({ left: cardWidth * index, behavior: 'smooth' });
            currentIndex = index;
            updateDots();
        }

        function updateDots() {
            dots.forEach((dot, index) => {
                if (index === currentIndex) {
                    dot.classList.remove('bg-flat-gray');
                    dot.classList.add('bg-flat-navy');
                } else {
                    dot.classList.remove('bg-flat-navy');
                    dot.classList.add('bg-flat-gray');
                }
            });
        }

        // Update dots on scroll
        carousel.addEventListener('scroll', () => {
            const cardWidth = 424;
            const newIndex = Math.round(carousel.scrollLeft / cardWidth);
            if (newIndex !== currentIndex && newIndex >= 0 && newIndex < 6) {
                currentIndex = newIndex;
                updateDots();
            }
        });

        // Button press effects
        document.querySelectorAll('.flat-btn').forEach(btn => {
            btn.addEventListener('mousedown', () => {
                btn.style.transform = 'translateY(4px)';
                btn.style.boxShadow = '0 0 0 0 rgba(0,0,0,0.2)';
            });
            btn.addEventListener('mouseup', () => {
                btn.style.transform = 'translateY(0)';
                btn.style.boxShadow = '';
            });
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'translateY(0)';
                btn.style.boxShadow = '';
            });
        });
    </script>
</body>
</html>