<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maya Chen | Visual Artist</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'canvas': {
                            50: '#faf9f7',
                            100: '#f5f3ef',
                            200: '#e8e4dc',
                            300: '#d4cdc1',
                            400: '#b8b0a0',
                            500: '#9c9280',
                            600: '#807668',
                            700: '#6b6256',
                            800: '#5a5248',
                            900: '#4a433c',
                        },
                        'terracotta': '#c65d3b',
                        'ochre': '#c9a227',
                        'indigo': '#2e3a59',
                        'sage': '#87a878',
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['"Montserrat"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 8s ease-in-out infinite',
                        'float-delayed': 'float 8s ease-in-out infinite 4s',
                        'paint': 'paint 12s ease infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0) rotate(0deg)' },
                            '50%': { transform: 'translateY(-20px) rotate(2deg)' },
                        },
                        paint: {
                            '0%, 100%': { borderRadius: '60% 40% 30% 70% / 60% 30% 70% 40%' },
                            '50%': { borderRadius: '30% 60% 70% 40% / 50% 60% 30% 60%' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #faf9f7;
        }
        ::-webkit-scrollbar-thumb {
            background: #d4cdc1;
            border-radius: 4px;
        }

        /* Paper Texture */
        .paper-texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Gallery Item */
        .gallery-item {
            transition: all 0.5s ease;
        }
        .gallery-item:hover {
            transform: scale(1.02);
        }

        /* Brush Stroke Underline */
        .brush-underline {
            position: relative;
        }
        .brush-underline::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 100%;
            height: 8px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 10' preserveAspectRatio='none'%3E%3Cpath d='M0 5 Q 25 10, 50 5 T 100 5' stroke='%23c65d3b' stroke-width='3' fill='none'/%3E%3C/svg%3E") no-repeat center;
            background-size: 100% 100%;
        }

        /* Blob Shape */
        .blob {
            animation: paint 12s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-canvas-50 text-canvas-900 font-sans antialiased overflow-x-hidden selection:bg-terracotta selection:text-white paper-texture">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0">
                    <span class="font-serif text-3xl italic text-canvas-800">Maya Chen</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-12">
                    <a href="#portfolio" class="text-sm font-medium text-canvas-600 hover:text-terracotta transition-colors tracking-wide">Portfolio</a>
                    <a href="#social" class="text-sm font-medium text-canvas-600 hover:text-terracotta transition-colors tracking-wide">Connect</a>
                    <a href="#about" class="text-sm font-medium text-canvas-600 hover:text-terracotta transition-colors tracking-wide">About</a>
                    <a href="#contact" class="px-6 py-2.5 bg-terracotta text-white rounded-full font-medium hover:bg-orange-700 transition-all">
                        Commission
                    </a>
                </div>

                <button class="md:hidden text-canvas-800 text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md absolute w-full shadow-lg">
            <div class="px-6 py-8 space-y-4 text-center">
                <a href="#portfolio" class="block text-canvas-600 hover:text-terracotta">Portfolio</a>
                <a href="#social" class="block text-canvas-600 hover:text-terracotta">Connect</a>
                <a href="#contact" class="block text-terracotta font-medium">Commission</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-24">
        <!-- Decorative Blobs -->
        <div class="absolute top-20 right-10 w-72 h-72 bg-terracotta/10 blob filter blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-ochre/10 blob filter blur-3xl animate-float-delayed"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-sage/10 rounded-full filter blur-[100px]"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Content -->
            <div class="text-center lg:text-left space-y-8 reveal active">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-canvas-200 text-canvas-700 rounded-full text-sm">
                    <span class="w-2 h-2 rounded-full bg-terracotta animate-pulse"></span>
                    <span>Open for Commissions</span>
                </div>

                <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl leading-tight text-canvas-900">
                    Painting <br>
                    <span class="brush-underline text-terracotta italic">Emotions</span> <br>
                    on Canvas
                </h1>

                <p class="text-lg text-canvas-600 max-w-md mx-auto lg:mx-0 leading-relaxed">
                    Contemporary abstract artist exploring the intersection of color, memory, and human experience. Based in San Francisco.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#portfolio" class="px-8 py-4 bg-canvas-900 text-white rounded-full font-medium hover:bg-terracotta transition-all flex items-center justify-center gap-2">
                        View Works <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="px-8 py-4 border-2 border-canvas-300 text-canvas-700 rounded-full font-medium hover:border-terracotta hover:text-terracotta transition-all flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp"></i> Get in Touch
                    </a>
                </div>

                <!-- Medium Tags -->
                <div class="flex gap-4 justify-center lg:justify-start pt-4 flex-wrap">
                    <span class="px-4 py-2 bg-white rounded-full text-sm text-canvas-600 shadow-sm">Oil Painting</span>
                    <span class="px-4 py-2 bg-white rounded-full text-sm text-canvas-600 shadow-sm">Mixed Media</span>
                    <span class="px-4 py-2 bg-white rounded-full text-sm text-canvas-600 shadow-sm">Watercolor</span>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="relative flex justify-center reveal active" style="transition-delay: 200ms;">
                <div class="relative w-full max-w-md">
                    <!-- Artistic Frame -->
                    <div class="absolute inset-0 border-2 border-canvas-300 transform rotate-3"></div>
                    <div class="absolute inset-0 border-2 border-terracotta/30 transform -rotate-2"></div>
                    
                    <!-- Main Art Display -->
                    <div class="relative bg-white p-4 shadow-2xl transform -rotate-1 hover:rotate-0 transition-transform duration-500">
                        <div class="aspect-[4/5] bg-gradient-to-br from-terracotta/20 via-ochre/10 to-indigo/20 relative overflow-hidden">
                            <!-- Abstract Art Representation -->
                            <div class="absolute top-1/4 left-1/4 w-32 h-32 bg-terracotta/40 rounded-full filter blur-xl"></div>
                            <div class="absolute bottom-1/3 right-1/4 w-48 h-24 bg-ochre/30 transform rotate-45"></div>
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-64 bg-indigo/20 transform -rotate-12"></div>
                            <div class="absolute bottom-1/4 left-1/3 w-16 h-16 bg-sage/40 rounded-full"></div>
                            
                            <!-- Brush Strokes -->
                            <svg class="absolute inset-0 w-full h-full opacity-30" viewBox="0 0 100 100" preserveAspectRatio="none">
                                <path d="M10,50 Q30,20 50,50 T90,50" stroke="#c65d3b" stroke-width="0.5" fill="none"/>
                                <path d="M20,70 Q40,40 60,70 T80,60" stroke="#c9a227" stroke-width="0.5" fill="none"/>
                            </svg>
                        </div>
                        
                        <!-- Caption -->
                        <div class="mt-4 text-center">
                            <p class="font-serif text-lg italic text-canvas-800">"Ephemeral Moments"</p>
                            <p class="text-sm text-canvas-500">Oil on Canvas, 2024</p>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-terracotta text-white px-6 py-3 rounded-full shadow-lg animate-float">
                        <p class="text-sm font-medium">15+ Exhibitions</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. SOCIAL LINKS SECTION -->
    <section id="social" class="relative py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16 reveal">
                <p class="text-terracotta text-sm uppercase tracking-[0.3em] mb-4">Join the Journey</p>
                <h2 class="font-serif text-4xl md:text-5xl text-canvas-900 mb-4">Follow My Creative Process</h2>
                <p class="text-canvas-600 max-w-xl mx-auto">Behind-the-scenes studio moments, work-in-progress shots, and daily inspiration.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                <!-- Instagram -->
                <a href="#" class="group p-8 bg-canvas-50 rounded-2xl hover:bg-gradient-to-br hover:from-purple-50 hover:to-pink-50 transition-all duration-300 text-center border border-canvas-200 hover:border-purple-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-instagram text-2xl text-purple-600"></i>
                    </div>
                    <p class="font-serif text-xl text-canvas-800">Instagram</p>
                    <p class="text-sm text-canvas-500 mt-1">@mayachen.art</p>
                    <p class="text-xs text-canvas-400 mt-2">45K followers</p>
                </a>

                <!-- Pinterest -->
                <a href="#" class="group p-8 bg-canvas-50 rounded-2xl hover:bg-red-50 transition-all duration-300 text-center border border-canvas-200 hover:border-red-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-pinterest text-2xl text-red-600"></i>
                    </div>
                    <p class="font-serif text-xl text-canvas-800">Pinterest</p>
                    <p class="text-sm text-canvas-500 mt-1">Mood Boards</p>
                    <p class="text-xs text-canvas-400 mt-2">120K monthly</p>
                </a>

                <!-- Behance -->
                <a href="#" class="group p-8 bg-canvas-50 rounded-2xl hover:bg-blue-50 transition-all duration-300 text-center border border-canvas-200 hover:border-blue-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-behance text-2xl text-blue-600"></i>
                    </div>
                    <p class="font-serif text-xl text-canvas-800">Behance</p>
                    <p class="text-sm text-canvas-500 mt-1">Portfolio</p>
                    <p class="text-xs text-canvas-400 mt-2">Featured Artist</p>
                </a>

                <!-- YouTube -->
                <a href="#" class="group p-8 bg-canvas-50 rounded-2xl hover:bg-red-50 transition-all duration-300 text-center border border-canvas-200 hover:border-red-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-youtube text-2xl text-red-600"></i>
                    </div>
                    <p class="font-serif text-xl text-canvas-800">YouTube</p>
                    <p class="text-sm text-canvas-500 mt-1">Studio Vlogs</p>
                    <p class="text-xs text-canvas-400 mt-2">Process videos</p>
                </a>
            </div>

            <!-- Recent Work Preview -->
            <div class="mt-16 grid grid-cols-3 gap-4 reveal">
                <div class="aspect-square bg-gradient-to-br from-terracotta/20 to-ochre/20 rounded-xl"></div>
                <div class="aspect-square bg-gradient-to-br from-indigo/20 to-sage/20 rounded-xl mt-8"></div>
                <div class="aspect-square bg-gradient-to-br from-ochre/20 to-terracotta/20 rounded-xl"></div>
            </div>
        </div>
    </section>

    <!-- 3. WHAT WE DO / PORTFOLIO SECTION -->
    <section id="portfolio" class="relative py-32 bg-canvas-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div>
                    <p class="text-terracotta text-sm uppercase tracking-[0.3em] mb-2">Selected Works</p>
                    <h2 class="font-serif text-4xl md:text-5xl text-canvas-900">Portfolio</h2>
                </div>
                <div class="flex gap-3 mt-6 md:mt-0">
                    <button class="px-5 py-2 bg-canvas-900 text-white text-sm rounded-full">All</button>
                    <button class="px-5 py-2 bg-white text-canvas-600 text-sm rounded-full hover:bg-canvas-200 transition-colors">Paintings</button>
                    <button class="px-5 py-2 bg-white text-canvas-600 text-sm rounded-full hover:bg-canvas-200 transition-colors">Drawings</button>
                    <button class="px-5 py-2 bg-white text-canvas-600 text-sm rounded-full hover:bg-canvas-200 transition-colors">Commissions</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Artwork 1 -->
                <div class="gallery-item group cursor-pointer reveal">
                    <div class="relative aspect-[4/5] bg-white p-3 shadow-lg rounded-sm">
                        <div class="w-full h-full bg-gradient-to-br from-terracotta/30 via-ochre/20 to-indigo/20 relative overflow-hidden">
                            <div class="absolute top-1/3 left-1/4 w-40 h-40 bg-terracotta/40 rounded-full filter blur-2xl"></div>
                            <div class="absolute bottom-1/4 right-1/3 w-32 h-32 bg-ochre/30 rounded-full"></div>
                        </div>
                        <div class="absolute inset-0 bg-canvas-900/0 group-hover:bg-canvas-900/10 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <span class="px-6 py-3 bg-white text-canvas-900 rounded-full text-sm font-medium">View Details</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="font-serif text-xl text-canvas-800">Sunset Reverie</h3>
                        <p class="text-sm text-canvas-500">Oil on Canvas • 36" × 48"</p>
                    </div>
                </div>

                <!-- Artwork 2 -->
                <div class="gallery-item group cursor-pointer reveal" style="transition-delay: 100ms;">
                    <div class="relative aspect-[4/5] bg-white p-3 shadow-lg rounded-sm">
                        <div class="w-full h-full bg-gradient-to-br from-indigo/30 via-sage/20 to-terracotta/10 relative overflow-hidden">
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-24 bg-indigo/30 transform rotate-45"></div>
                            <div class="absolute top-1/4 right-1/4 w-20 h-20 bg-sage/40 rounded-full"></div>
                        </div>
                        <div class="absolute inset-0 bg-canvas-900/0 group-hover:bg-canvas-900/10 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <span class="px-6 py-3 bg-white text-canvas-900 rounded-full text-sm font-medium">View Details</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="font-serif text-xl text-canvas-800">Urban Solitude</h3>
                        <p class="text-sm text-canvas-500">Mixed Media • 24" × 36"</p>
                    </div>
                </div>

                <!-- Artwork 3 -->
                <div class="gallery-item group cursor-pointer reveal" style="transition-delay: 200ms;">
                    <div class="relative aspect-[4/5] bg-white p-3 shadow-lg rounded-sm">
                        <div class="w-full h-full bg-gradient-to-br from-ochre/40 via-canvas-200 to-terracotta/20 relative overflow-hidden">
                            <div class="absolute bottom-1/3 left-1/3 w-56 h-32 bg-ochre/30 rounded-full filter blur-xl"></div>
                            <div class="absolute top-1/4 right-1/4 w-16 h-64 bg-terracotta/20 transform -rotate-12"></div>
                        </div>
                        <div class="absolute inset-0 bg-canvas-900/0 group-hover:bg-canvas-900/10 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <span class="px-6 py-3 bg-white text-canvas-900 rounded-full text-sm font-medium">View Details</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="font-serif text-xl text-canvas-800">Golden Hour</h3>
                        <p class="text-sm text-canvas-500">Watercolor • 18" × 24"</p>
                    </div>
                </div>

                <!-- Artwork 4 -->
                <div class="gallery-item group cursor-pointer reveal">
                    <div class="relative aspect-[4/5] bg-white p-3 shadow-lg rounded-sm">
                        <div class="w-full h-full bg-gradient-to-br from-sage/30 via-terracotta/10 to-indigo/20 relative overflow-hidden">
                            <div class="absolute top-1/3 right-1/4 w-36 h-36 bg-sage/40 rounded-full"></div>
                            <div class="absolute bottom-1/4 left-1/4 w-28 h-28 bg-terracotta/20 rounded-full filter blur-lg"></div>
                        </div>
                        <div class="absolute inset-0 bg-canvas-900/0 group-hover:bg-canvas-900/10 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <span class="px-6 py-3 bg-white text-canvas-900 rounded-full text-sm font-medium">View Details</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="font-serif text-xl text-canvas-800">Garden Dreams</h3>
                        <p class="text-sm text-canvas-500">Acrylic • 30" × 40"</p>
                    </div>
                </div>

                <!-- Artwork 5 -->
                <div class="gallery-item group cursor-pointer reveal" style="transition-delay: 100ms;">
                    <div class="relative aspect-[4/5] bg-white p-3 shadow-lg rounded-sm">
                        <div class="w-full h-full bg-gradient-to-br from-indigo/40 via-ochre/20 to-canvas-300 relative overflow-hidden">
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-48 bg-indigo/30 transform rotate-12"></div>
                        </div>
                        <div class="absolute inset-0 bg-canvas-900/0 group-hover:bg-canvas-900/10 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <span class="px-6 py-3 bg-white text-canvas-900 rounded-full text-sm font-medium">View Details</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="font-serif text-xl text-canvas-800">Midnight Blue</h3>
                        <p class="text-sm text-canvas-500">Oil on Canvas • 48" × 60"</p>
                    </div>
                </div>

                <!-- Artwork 6 -->
                <div class="gallery-item group cursor-pointer reveal" style="transition-delay: 200ms;">
                    <div class="relative aspect-[4/5] bg-white p-3 shadow-lg rounded-sm">
                        <div class="w-full h-full bg-gradient-to-br from-terracotta/20 via-sage/30 to-ochre/20 relative overflow-hidden">
                            <div class="absolute top-1/4 left-1/3 w-44 h-44 bg-terracotta/30 rounded-full filter blur-2xl"></div>
                            <div class="absolute bottom-1/3 right-1/3 w-24 h-24 bg-sage/40 rounded-full"></div>
                        </div>
                        <div class="absolute inset-0 bg-canvas-900/0 group-hover:bg-canvas-900/10 transition-colors flex items-center justify-center opacity-0 group-hover:opacity-100">
                            <span class="px-6 py-3 bg-white text-canvas-900 rounded-full text-sm font-medium">View Details</span>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <h3 class="font-serif text-xl text-canvas-800">Autumn Whisper</h3>
                        <p class="text-sm text-canvas-500">Mixed Media • 20" × 28"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-32 overflow-hidden bg-canvas-900">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-terracotta to-transparent"></div>
        <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-terracotta/10 rounded-full filter blur-[80px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-48 h-48 bg-ochre/10 rounded-full filter blur-[60px]"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12 text-center reveal">
            <h2 class="font-serif text-5xl md:text-6xl text-white mb-6">Let's Create Together</h2>
            <p class="text-canvas-300 text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
                Interested in a custom piece for your home or office? I'd love to hear your vision and bring it to life.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                <a href="https://wa.me/1234567890?text=Hi%20Maya!%20I'm%20interested%20in%20a%20commission." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-12 py-5 text-lg font-medium text-canvas-900 transition-all duration-300 bg-terracotta rounded-full hover:bg-orange-600 hover:scale-105 shadow-xl shadow-terracotta/20">
                    <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                    Start a Conversation
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-8 border-t border-canvas-800 text-canvas-400 text-sm">
                <div>
                    <i class="fas fa-envelope text-terracotta mb-2 block text-lg"></i>
                    <p>hello@mayachen.art</p>
                </div>
                <div>
                    <i class="fas fa-map-marker-alt text-terracotta mb-2 block text-lg"></i>
                    <p>San Francisco, CA</p>
                </div>
                <div>
                    <i class="fas fa-clock text-terracotta mb-2 block text-lg"></i>
                    <p>Response within 24h</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER WITHOUT LINKS -->
    <footer class="bg-canvas-950 border-t border-canvas-800 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-serif text-2xl italic text-white">
                Maya Chen
            </div>
            
            <p class="text-canvas-500 text-sm">
                &copy; 2024 Maya Chen. All artworks copyright protected.
            </p>

            <div class="flex items-center gap-2 text-canvas-500 text-sm">
                <i class="fas fa-palette text-terracotta"></i>
                <span>Creating beauty daily</span>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Navbar Effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-white/95', 'backdrop-blur-md', 'shadow-sm');
                } else {
                    navbar.classList.remove('bg-white/95', 'backdrop-blur-md', 'shadow-sm');
                }
            });

            // Intersection Observer
            const observerOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            };

            const observer = new IntersectionObserver((entries) => {
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

            // Smooth Scroll
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if(targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if(targetElement){
                        window.scrollTo({
                            top: targetElement.offsetTop - 80,
                            behavior: 'smooth'
                        });
                        document.getElementById('mobile-menu').classList.add('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>