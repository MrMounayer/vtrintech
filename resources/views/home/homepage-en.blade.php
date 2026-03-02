<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VtrinTech | Your Virtual Window to Business Growth</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        vtrin: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                            950: '#082f49',
                        },
                        void: {
                            50: '#f6f7f9',
                            100: '#edeef1',
                            200: '#d7dbe0',
                            300: '#b3bcc6',
                            400: '#8a97a5',
                            500: '#6b7b8b',
                            600: '#566373',
                            700: '#47525e',
                            800: '#3d4650',
                            900: '#363d45',
                            950: '#0f1115',
                        },
                        accent: {
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f1115;
            color: #edeef1;
            overflow-x: hidden;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0f1115; 
        }
        ::-webkit-scrollbar-thumb {
            background: #363d45; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #47525e; 
        }

        .glass-panel {
            background: rgba(29, 33, 39, 0.6);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        .gradient-text {
            background: linear-gradient(135deg, #fff 0%, #7dd3fc 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .grid-bg {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            mask-image: linear-gradient(to bottom, black 40%, transparent 100%);
        }

        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .window-frame {
            position: relative;
        }
        .window-frame::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(135deg, rgba(56, 189, 248, 0.3), rgba(14, 165, 233, 0.1));
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .window-frame:hover::before {
            opacity: 1;
        }
    </style>
</head>
<body class="antialiased selection:bg-accent-500 selection:text-white">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 cursor-pointer group">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-accent-400 to-vtrin-600 flex items-center justify-center group-hover:scale-105 transition-transform duration-300 shadow-lg shadow-accent-500/20">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="font-bold text-xl tracking-tight text-white">VTRIN<span class="text-accent-400">TECH</span></span>
                            <div class="text-[10px] text-void-400 tracking-widest uppercase -mt-1">Virtual Window</div>
                        </div>
                    </div>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#features" class="text-void-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Features</a>
                        <a href="#showcase" class="text-void-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Showcase</a>
                        <a href="#pricing" class="text-void-300 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-colors">Pricing</a>
                    </div>
                </div>

                <!-- CTA -->
                <div class="hidden md:block">
                    <button class="bg-accent-500 hover:bg-accent-400 text-white px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-105 shadow-lg shadow-accent-500/25">
                        Open Your Window
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden glass-panel border-t border-white/5 absolute w-full">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#features" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Features</a>
                <a href="#showcase" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Showcase</a>
                <a href="#pricing" class="text-gray-300 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Pricing</a>
                <button class="w-full text-left bg-accent-500 text-white px-3 py-2 rounded-md text-base font-medium mt-4">Open Your Window</button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 grid-bg z-0"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[1000px] h-[600px] bg-accent-500/10 rounded-full blur-[120px] -z-10"></div>
        <div class="absolute bottom-0 right-0 w-[600px] h-[400px] bg-vtrin-600/10 rounded-full blur-[100px] -z-10"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/5 border border-white/10 mb-8 animate-fade-in-up" style="animation-delay: 0.1s;">
                <span class="w-2 h-2 rounded-full bg-accent-400 animate-pulse"></span>
                <span class="text-xs font-medium text-void-300 tracking-wide uppercase">The new way to showcase</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight mb-8 animate-fade-in-up" style="animation-delay: 0.2s;">
                <span class="block gradient-text">Your Business.</span>
                <span class="block text-white mt-2">Through a Virtual</span>
                <span class="block text-accent-400 mt-2">Window.</span>
            </h1>
            
            <p class="mt-4 max-w-2xl mx-auto text-xl text-void-300 font-light leading-relaxed animate-fade-in-up" style="animation-delay: 0.3s;">
                VtrinTech transforms your digital presence into an elegant storefront. 
                A minimalist platform that puts your business on display for the world to see.
            </p>
            
            <div class="mt-10 flex flex-col sm:flex-row justify-center gap-4 animate-fade-in-up" style="animation-delay: 0.4s;">
                <button class="group relative px-8 py-4 bg-accent-500 text-white rounded-full font-semibold overflow-hidden transition-all hover:scale-105 hover:shadow-[0_0_40px_-10px_rgba(14,165,233,0.5)]">
                    <span class="relative z-10 flex items-center gap-2">
                        Create Your Vitrine
                        <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                    </span>
                    <div class="absolute inset-0 bg-accent-400 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300"></div>
                </button>
                <button class="px-8 py-4 bg-transparent border border-white/10 text-white rounded-full font-medium hover:bg-white/5 transition-all hover:border-accent-500/50 flex items-center justify-center gap-2 group">
                    <svg class="w-5 h-5 text-void-400 group-hover:text-accent-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    See Examples
                </button>
            </div>

            <!-- Window Preview -->
            <div class="mt-20 relative max-w-5xl mx-auto animate-fade-in-up" style="animation-delay: 0.6s;">
                <div class="absolute -inset-1 bg-gradient-to-r from-accent-500 to-vtrin-600 rounded-2xl blur opacity-20"></div>
                <div class="relative glass-panel rounded-xl overflow-hidden shadow-2xl border border-white/10 window-frame">
                    <!-- Window Header -->
                    <div class="bg-void-900/80 px-4 py-3 flex items-center gap-2 border-b border-white/5">
                        <div class="flex gap-1.5">
                            <div class="w-3 h-3 rounded-full bg-red-500/20 border border-red-500/50"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500/20 border border-yellow-500/50"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500/20 border border-green-500/50"></div>
                        </div>
                        <div class="flex-1 text-center flex items-center justify-center gap-2">
                            <svg class="w-4 h-4 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                            <div class="inline-block px-3 py-1 rounded bg-void-800 text-xs text-void-400 font-mono">vtrin.tech/your-business</div>
                        </div>
                    </div>
                    <!-- Window Content -->
                    <div class="grid grid-cols-12 h-[400px] md:h-[500px]">
                        <!-- Sidebar -->
                        <div class="hidden md:block col-span-3 bg-void-900/50 border-r border-white/5 p-4 space-y-4">
                            <div class="flex items-center gap-3 mb-6">
                                <div class="w-8 h-8 rounded bg-accent-500/20 flex items-center justify-center">
                                    <span class="text-accent-400 font-bold text-sm">V</span>
                                </div>
                                <span class="text-sm font-medium text-white">Your Vitrine</span>
                            </div>
                            <div class="space-y-2">
                                <div class="h-8 w-full bg-accent-500/20 border border-accent-500/30 rounded flex items-center px-3 text-xs text-accent-300">Dashboard</div>
                                <div class="h-8 w-full bg-white/5 rounded flex items-center px-3 text-xs text-void-400">Products</div>
                                <div class="h-8 w-full bg-white/5 rounded flex items-center px-3 text-xs text-void-400">Analytics</div>
                                <div class="h-8 w-full bg-white/5 rounded flex items-center px-3 text-xs text-void-400">Settings</div>
                            </div>
                        </div>
                        <!-- Main Display -->
                        <div class="col-span-12 md:col-span-9 bg-void-950 p-6 flex items-center justify-center relative overflow-hidden">
                            <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#38bdf8 1px, transparent 1px); background-size: 20px 20px;"></div>
                            
                            <!-- Vitrine Display -->
                            <div class="relative z-10 w-full max-w-lg">
                                <div class="bg-void-900/80 border border-white/10 rounded-lg p-6 backdrop-blur-sm">
                                    <div class="flex justify-between items-start mb-4">
                                        <div>
                                            <h3 class="text-white font-semibold">Featured Collection</h3>
                                            <p class="text-xs text-void-400 mt-1">Curated for your visitors</p>
                                        </div>
                                        <span class="px-2 py-1 bg-accent-500/20 text-accent-400 text-xs rounded">Live</span>
                                    </div>
                                    
                                    <div class="grid grid-cols-3 gap-3">
                                        <div class="aspect-square bg-void-800 rounded border border-white/5 flex items-center justify-center group cursor-pointer hover:border-accent-500/50 transition-colors">
                                            <div class="w-8 h-8 rounded-full bg-white/5 group-hover:bg-accent-500/20 transition-colors"></div>
                                        </div>
                                        <div class="aspect-square bg-void-800 rounded border border-white/5 flex items-center justify-center group cursor-pointer hover:border-accent-500/50 transition-colors">
                                            <div class="w-8 h-8 rounded-full bg-white/5 group-hover:bg-accent-500/20 transition-colors"></div>
                                        </div>
                                        <div class="aspect-square bg-void-800 rounded border border-white/5 flex items-center justify-center group cursor-pointer hover:border-accent-500/50 transition-colors">
                                            <div class="w-8 h-8 rounded-full bg-white/5 group-hover:bg-accent-500/20 transition-colors"></div>
                                        </div>
                                    </div>
                                    
                                    <div class="mt-4 flex gap-2">
                                        <button class="flex-1 py-2 bg-accent-500 hover:bg-accent-400 text-white rounded text-sm font-medium transition-colors">View All</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Stats -->
                <div class="absolute -bottom-4 -left-4 md:left-8 bg-void-800 border border-white/10 p-4 rounded-lg shadow-xl animate-float">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center text-green-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </div>
                        <div>
                            <div class="text-xs text-void-400">Views Today</div>
                            <div class="text-lg font-bold text-white">2,847</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section id="features" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Everything you need to <br/><span class="text-accent-400">showcase your business.</span></h2>
                <p class="text-void-400 max-w-2xl mx-auto">A complete digital vitrine solution. Display your products, services, and brand story through an elegant virtual window.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group p-8 rounded-2xl bg-void-900/30 border border-white/5 hover:border-accent-500/30 transition-all duration-300 hover:bg-void-800/30 reveal">
                    <div class="w-12 h-12 rounded-lg bg-accent-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">Modular Vitrine</h3>
                    <p class="text-void-400 leading-relaxed">Arrange your digital storefront with drag-and-drop simplicity. Create the perfect window display for your brand.</p>
                </div>

                <!-- Feature 2 -->
                <div class="group p-8 rounded-2xl bg-void-900/30 border border-white/5 hover:border-accent-500/30 transition-all duration-300 hover:bg-void-800/30 reveal" style="transition-delay: 100ms;">
                    <div class="w-12 h-12 rounded-lg bg-vtrin-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-vtrin-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">Always Visible</h3>
                    <p class="text-void-400 leading-relaxed">Your virtual window is open 24/7. Optimized for search engines and designed to convert visitors into customers.</p>
                </div>

                <!-- Feature 3 -->
                <div class="group p-8 rounded-2xl bg-void-900/30 border border-white/5 hover:border-accent-500/30 transition-all duration-300 hover:bg-void-800/30 reveal" style="transition-delay: 200ms;">
                    <div class="w-12 h-12 rounded-lg bg-emerald-500/10 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-semibold text-white mb-3">Visitor Insights</h3>
                    <p class="text-void-400 leading-relaxed">See who's looking through your window. Real-time analytics help you understand your audience and optimize your display.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Showcase Section -->
    <section id="showcase" class="py-24 bg-void-900/50 border-y border-white/5 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/2 h-full bg-gradient-to-l from-accent-500/5 to-transparent pointer-events-none"></div>
        
        <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2 reveal">
                    <h2 class="text-3xl md:text-5xl font-bold text-white mb-6">Your business deserves <br/><span class="text-accent-400">to be seen.</span></h2>
                    <p class="text-lg text-void-300 mb-8 leading-relaxed">
                        In the digital age, your website is your storefront. VtrinTech gives you the tools to create a stunning virtual window that captures attention and drives growth.
                    </p>
                    
                    <div class="space-y-4">
                        <div class="flex items-center gap-4 p-4 bg-white/5 rounded-lg border border-white/5">
                            <div class="w-10 h-10 rounded-full bg-accent-500/20 flex items-center justify-center text-accent-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <div class="text-white font-medium">Instant Publishing</div>
                                <div class="text-sm text-void-400">Go live in minutes, not days</div>
                            </div>
                        </div>
                        <div class="flex items-center gap-4 p-4 bg-white/5 rounded-lg border border-white/5">
                            <div class="w-10 h-10 rounded-full bg-accent-500/20 flex items-center justify-center text-accent-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <div class="text-white font-medium">Mobile Optimized</div>
                                <div class="text-sm text-void-400">Perfect on every device</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/2 w-full reveal">
                    <!-- Window Preview Card -->
                    <div class="relative mx-auto w-full max-w-md">
                        <div class="absolute -inset-1 bg-gradient-to-r from-accent-500 to-vtrin-600 rounded-2xl blur opacity-30 animate-pulse-slow"></div>
                        <div class="relative glass-panel rounded-xl p-1 border border-white/10">
                            <div class="bg-void-950 rounded-lg overflow-hidden">
                                <div class="h-48 bg-gradient-to-br from-void-800 to-void-900 flex items-center justify-center relative">
                                    <div class="absolute inset-0 flex items-center justify-center">
                                        <div class="w-32 h-32 border-2 border-accent-500/30 rounded-lg transform rotate-12"></div>
                                        <div class="w-32 h-32 border-2 border-accent-500/50 rounded-lg transform -rotate-12 absolute"></div>
                                    </div>
                                    <div class="relative z-10 text-center">
                                        <div class="w-16 h-16 mx-auto bg-accent-500/20 rounded-full flex items-center justify-center mb-2">
                                            <svg class="w-8 h-8 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                        </div>
                                        <span class="text-white font-medium">Your Brand</span>
                                    </div>
                                </div>
                                <div class="p-6 space-y-3">
                                    <div class="h-4 w-3/4 bg-white/10 rounded"></div>
                                    <div class="h-4 w-1/2 bg-white/10 rounded"></div>
                                    <div class="flex gap-2 pt-2">
                                        <div class="h-8 w-20 bg-accent-500/20 rounded border border-accent-500/30"></div>
                                        <div class="h-8 w-20 bg-white/5 rounded border border-white/10"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating Badge -->
                        <div class="absolute -bottom-6 -right-6 bg-void-800 border border-white/10 p-4 rounded-lg shadow-xl flex items-center gap-3 animate-float">
                            <div class="w-10 h-10 rounded-full bg-green-500/20 flex items-center justify-center text-green-400">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <div>
                                <div class="text-xs text-void-400">Status</div>
                                <div class="text-sm font-semibold text-white">Now Live</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-24">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="text-3xl md:text-4xl font-bold text-white">Simple Pricing</h2>
                <p class="mt-4 text-void-400">Open your virtual window today.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
                <!-- Free Plan -->
                <div class="p-8 rounded-2xl bg-void-900/20 border border-white/5 hover:border-white/10 transition-all reveal">
                    <h3 class="text-lg font-medium text-white">Window Shopper</h3>
                    <div class="mt-4 flex items-baseline">
                        <span class="text-4xl font-bold text-white tracking-tight">$0</span>
                        <span class="ml-1 text-void-400">/mo</span>
                    </div>
                    <p class="mt-4 text-sm text-void-400">Perfect for trying out your first vitrine.</p>
                    <ul class="mt-6 space-y-4">
                        <li class="flex items-center text-sm text-void-300">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            1 Vitrine
                        </li>
                        <li class="flex items-center text-sm text-void-300">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            VtrinTech Subdomain
                        </li>
                        <li class="flex items-center text-sm text-void-300">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Basic Analytics
                        </li>
                    </ul>
                    <button class="mt-8 w-full py-3 px-4 bg-white/5 border border-white/10 rounded-lg text-white font-medium hover:bg-white/10 transition-colors">Start Free</button>
                </div>

                <!-- Pro Plan -->
                <div class="p-8 rounded-2xl bg-void-800/50 border border-accent-500/30 relative transform md:-translate-y-4 shadow-2xl shadow-accent-500/10 reveal">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-accent-500 text-white px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wide">Most Popular</div>
                    <h3 class="text-lg font-medium text-white">Storefront</h3>
                    <div class="mt-4 flex items-baseline">
                        <span class="text-4xl font-bold text-white tracking-tight">$19</span>
                        <span class="ml-1 text-void-400">/mo</span>
                    </div>
                    <p class="mt-4 text-sm text-void-400">For businesses ready to grow.</p>
                    <ul class="mt-6 space-y-4">
                        <li class="flex items-center text-sm text-white">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Unlimited Vitrines
                        </li>
                        <li class="flex items-center text-sm text-white">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Custom Domain
                        </li>
                        <li class="flex items-center text-sm text-white">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Advanced Analytics
                        </li>
                        <li class="flex items-center text-sm text-white">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Priority Support
                        </li>
                    </ul>
                    <button class="mt-8 w-full py-3 px-4 bg-accent-500 hover:bg-accent-600 rounded-lg text-white font-medium transition-colors shadow-lg shadow-accent-500/25">Open Your Window</button>
                </div>

                <!-- Enterprise Plan -->
                <div class="p-8 rounded-2xl bg-void-900/20 border border-white/5 hover:border-white/10 transition-all reveal">
                    <h3 class="text-lg font-medium text-white">Enterprise</h3>
                    <div class="mt-4 flex items-baseline">
                        <span class="text-4xl font-bold text-white tracking-tight">$79</span>
                        <span class="ml-1 text-void-400">/mo</span>
                    </div>
                    <p class="mt-4 text-sm text-void-400">Multiple windows, one vision.</p>
                    <ul class="mt-6 space-y-4">
                        <li class="flex items-center text-sm text-void-300">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            Team Members (10)
                        </li>
                        <li class="flex items-center text-sm text-void-300">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            White Label Options
                        </li>
                        <li class="flex items-center text-sm text-void-300">
                            <svg class="w-4 h-4 text-accent-400 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            API Access
                        </li>
                    </ul>
                    <button class="mt-8 w-full py-3 px-4 bg-white/5 border border-white/10 rounded-lg text-white font-medium hover:bg-white/10 transition-colors">Contact Sales</button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-accent-500/5"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-accent-500/20 rounded-full blur-[100px] -z-10"></div>
        
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10 reveal">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to open your window?</h2>
            <p class="text-xl text-void-300 mb-10">Join thousands of businesses showcasing their story through VtrinTech.</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <input type="email" placeholder="Enter your email" class="px-6 py-4 rounded-full bg-white/5 border border-white/10 text-white placeholder-void-400 focus:outline-none focus:border-accent-500 w-full sm:w-80 transition-colors">
                <button class="px-8 py-4 bg-accent-500 text-white rounded-full font-bold hover:bg-accent-400 transition-colors shadow-lg shadow-accent-500/25">
                    Create Your Vitrine
                </button>
            </div>
            <p class="mt-4 text-xs text-void-500">No credit card required. 14-day free trial.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="border-t border-white/5 bg-void-950 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-2 md:col-span-1">
                    <div class="flex items-center gap-2 mb-4">
                        <div class="w-8 h-8 rounded bg-accent-500 flex items-center justify-center">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v14a1 1 0 01-1 1H5a1 1 0 01-1-1V5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 12h16"></path></svg>
                        </div>
                        <span class="font-bold text-white">VTRIN<span class="text-accent-400">TECH</span></span>
                    </div>
                    <p class="text-sm text-void-500">
                        Your virtual window to the digital world. Showcase your business with elegance.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Product</h4>
                    <ul class="space-y-2 text-sm text-void-400">
                        <li><a href="#" class="hover:text-accent-400 transition-colors">Features</a></li>
                        <li><a href="#" class="hover:text-accent-400 transition-colors">Templates</a></li>
                        <li><a href="#" class="hover:text-accent-400 transition-colors">Pricing</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Company</h4>
                    <ul class="space-y-2 text-sm text-void-400">
                        <li><a href="#" class="hover:text-accent-400 transition-colors">About</a></li>
                        <li><a href="#" class="hover:text-accent-400 transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-accent-400 transition-colors">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-medium mb-4">Legal</h4>
                    <ul class="space-y-2 text-sm text-void-400">
                        <li><a href="#" class="hover:text-accent-400 transition-colors">Privacy</a></li>
                        <li><a href="#" class="hover:text-accent-400 transition-colors">Terms</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/5 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-xs text-void-600">&copy; 2026 VtrinTech Inc. All rights reserved.</p>
                <div class="flex gap-6">
                    <a href="#" class="text-void-500 hover:text-white transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                    </a>
                    <a href="#" class="text-void-500 hover:text-white transition-colors">
                        <span class="sr-only">LinkedIn</span>
                        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');

        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

        // Scroll Reveal Animation
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => {
            observer.observe(el);
        });

        // Navbar Glass Effect on Scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('glass-panel', 'shadow-lg');
            } else {
                navbar.classList.remove('glass-panel', 'shadow-lg');
            }
        });
    </script>
</body>
</html>