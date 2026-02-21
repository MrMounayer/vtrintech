<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visionary Optics | Premium Eyewear & Eye Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'optic': {
                            50: '#f8f9fa',
                            100: '#e9ecef',
                            200: '#dee2e6',
                            300: '#ced4da',
                            400: '#adb5bd',
                            500: '#6c757d',
                            600: '#495057',
                            700: '#343a40',
                            800: '#212529',
                            900: '#121214',
                        },
                        'accent': {
                            gold: '#d4af37',
                            rose: '#e8b4b8',
                            cyan: '#00d4ff',
                        }
                    },
                    fontFamily: {
                        sans: ['"Space Grotesk"', 'sans-serif'],
                        display: ['"Syne"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #121214;
        }
        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #d4af37;
        }

        /* Glassmorphism */
        .glass-panel {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #fff 0%, #adb5bd 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gradient-text-gold {
            background: linear-gradient(135deg, #d4af37 0%, #f4e5c2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Reveal Animation Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Lens Flare Effect */
        .lens-flare {
            position: absolute;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* Grid Pattern */
        .bg-grid {
            background-image: linear-gradient(rgba(255,255,255,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 50px 50px;
        }
    </style>
</head>
<body class="bg-optic-900 text-white font-sans antialiased overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-full border-2 border-accent-gold flex items-center justify-center">
                        <i class="fas fa-eye text-accent-gold"></i>
                    </div>
                    <span class="font-display text-xl font-bold tracking-wider">VISIONARY</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#collections" class="text-sm text-gray-400 hover:text-white transition-colors tracking-wide">COLLECTIONS</a>
                    <a href="#social" class="text-sm text-gray-400 hover:text-white transition-colors tracking-wide">COMMUNITY</a>
                    <a href="#contact" class="px-6 py-2.5 bg-white text-optic-900 rounded-full text-sm font-semibold hover:bg-accent-gold transition-all transform hover:scale-105">
                        BOOK EYE TEST
                    </a>
                </div>

                <button class="md:hidden text-white text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-optic-800 border-t border-gray-800 absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="#collections" class="block px-3 py-3 text-gray-300 hover:text-white">Collections</a>
                <a href="#social" class="block px-3 py-3 text-gray-300 hover:text-white">Community</a>
                <a href="#contact" class="block px-3 py-3 text-accent-gold font-semibold">Book Eye Test</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20 bg-grid">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-optic-900/50 to-optic-900 z-0"></div>
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-accent-cyan/20 rounded-full filter blur-[128px] animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-accent-gold/10 rounded-full filter blur-[128px] animate-pulse-slow" style="animation-delay: 2s;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Text Content -->
            <div class="order-2 lg:order-1 space-y-8 reveal active">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-panel border-accent-gold/30">
                    <span class="w-2 h-2 rounded-full bg-accent-gold animate-pulse"></span>
                    <span class="text-xs font-medium tracking-widest text-accent-gold">NEW COLLECTION 2024</span>
                </div>
                
                <h1 class="font-display text-5xl md:text-7xl lg:text-8xl font-bold leading-[0.9] tracking-tight">
                    SEE THE <br>
                    <span class="gradient-text-gold italic font-light">WORLD</span><br>
                    DIFFERENTLY
                </h1>
                
                <p class="text-lg text-gray-400 max-w-lg leading-relaxed border-l-2 border-accent-gold pl-6">
                    Precision-crafted eyewear combining cutting-edge lens technology with avant-garde design. Your vision deserves nothing less than perfection.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="#collections" class="group px-8 py-4 bg-white text-optic-900 rounded-none font-bold hover:bg-accent-gold transition-all flex items-center justify-center gap-3">
                        EXPLORE FRAMES
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                    </a>
                    <a href="#contact" class="px-8 py-4 glass-panel text-white hover:bg-white/10 transition-all flex items-center justify-center gap-3">
                        <i class="fab fa-whatsapp text-green-400"></i>
                        WHATSAPP US
                    </a>
                </div>
            </div>

            <!-- Hero Image -->
            <div class="order-1 lg:order-2 relative flex justify-center reveal active" style="transition-delay: 200ms;">
                <div class="relative w-full max-w-md lg:max-w-lg">
                    <!-- Decorative Rings -->
                    <div class="absolute inset-0 border border-gray-700 rounded-full scale-110 animate-[spin_20s_linear_infinite]"></div>
                    <div class="absolute inset-0 border border-dashed border-gray-600 rounded-full scale-125 animate-[spin_30s_linear_infinite_reverse]"></div>
                    
                    <!-- Main Image -->
                    <div class="relative z-10 aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl shadow-black/50">
                        <img src="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?q=80&w=1000&auto=format&fit=crop" 
                             alt="Premium Eyewear Model" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                        
                        <!-- Overlay Gradient -->
                        <div class="absolute inset-0 bg-gradient-to-t from-optic-900/80 via-transparent to-transparent"></div>
                        
                        <!-- Floating Price Tag -->
                        <div class="absolute bottom-6 left-6 glass-panel px-4 py-3 rounded-lg">
                            <p class="text-xs text-gray-400 uppercase tracking-wider">Starting from</p>
                            <p class="text-2xl font-display font-bold text-white">$299</p>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-24 h-24 bg-accent-gold rounded-full flex items-center justify-center animate-float shadow-lg shadow-accent-gold/20 z-20">
                        <div class="text-center">
                            <span class="block text-2xl font-bold text-optic-900">50%</span>
                            <span class="text-[10px] font-bold text-optic-900 uppercase">Off Lenses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SOCIAL SECTION - PROMINENTLY PLACED SECOND -->
    <section id="social" class="relative py-24 bg-optic-800 overflow-hidden">
        <!-- Section Header -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-16">
            <div class="flex flex-col md:flex-row justify-between items-end gap-6 reveal">
                <div>
                    <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">JOIN THE <span class="text-accent-cyan">VISION</span></h2>
                    <p class="text-gray-400 max-w-xl text-lg">Follow us for exclusive drops, style inspiration, and behind-the-scenes looks at our craft.</p>
                </div>
                
                <!-- Social Links Grid -->
                <div class="flex gap-4">
                    <a href="#" class="w-14 h-14 rounded-full glass-panel flex items-center justify-center text-white hover:bg-gradient-to-br hover:from-purple-600 hover:to-pink-600 hover:border-transparent transition-all transform hover:scale-110 group">
                        <i class="fab fa-instagram text-xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                    <a href="#" class="w-14 h-14 rounded-full glass-panel flex items-center justify-center text-white hover:bg-black hover:border-transparent transition-all transform hover:scale-110 group">
                        <i class="fab fa-tiktok text-xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                    <a href="#" class="w-14 h-14 rounded-full glass-panel flex items-center justify-center text-white hover:bg-blue-600 hover:border-transparent transition-all transform hover:scale-110 group">
                        <i class="fab fa-facebook-f text-xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                    <a href="#" class="w-14 h-14 rounded-full glass-panel flex items-center justify-center text-white hover:bg-red-600 hover:border-transparent transition-all transform hover:scale-110 group">
                        <i class="fab fa-youtube text-xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                    <a href="#" class="w-14 h-14 rounded-full glass-panel flex items-center justify-center text-white hover:bg-yellow-400 hover:text-black hover:border-transparent transition-all transform hover:scale-110 group">
                        <i class="fab fa-snapchat-ghost text-xl group-hover:rotate-12 transition-transform"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Social Feed Grid -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 reveal">
                <!-- Feed Item 1 -->
                <div class="group relative aspect-square overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Sunglasses">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                        <i class="fab fa-instagram text-2xl text-white"></i>
                        <span class="text-white font-bold">2.4k</span>
                    </div>
                </div>
                <!-- Feed Item 2 -->
                <div class="group relative aspect-square overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1577803645773-f96470509666?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Glasses Detail">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                        <i class="fab fa-instagram text-2xl text-white"></i>
                        <span class="text-white font-bold">1.8k</span>
                    </div>
                </div>
                <!-- Feed Item 3 -->
                <div class="group relative aspect-square overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1508296695146-257a814070b4?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Store Interior">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                        <i class="fab fa-instagram text-2xl text-white"></i>
                        <span class="text-white font-bold">3.2k</span>
                    </div>
                </div>
                <!-- Feed Item 4 -->
                <div class="group relative aspect-square overflow-hidden rounded-xl cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1473496169904-658ba7c44d8a?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Model">
                    <div class="absolute inset-0 bg-black/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-4">
                        <i class="fab fa-instagram text-2xl text-white"></i>
                        <span class="text-white font-bold">4.1k</span>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center reveal">
                <a href="#" class="inline-flex items-center gap-2 text-accent-cyan hover:text-white transition-colors border-b border-accent-cyan/30 pb-1 hover:border-white">
                    @visionary_optics <i class="fas fa-external-link-alt text-xs"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Collections Section -->
    <section id="collections" class="py-24 bg-optic-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl md:text-5xl font-bold mb-4">CURATED <span class="italic font-light text-gray-500">COLLECTIONS</span></h2>
                <p class="text-gray-400">Frames designed for every face and every style.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Collection 1 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/5] cursor-pointer reveal">
                    <img src="https://images.unsplash.com/photo-1591076482161-42ce6da69f67?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" alt="Aviator">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-display text-3xl font-bold mb-2">AVIATOR</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity delay-100">Classic teardrop shapes for the bold.</p>
                    </div>
                </div>

                <!-- Collection 2 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/5] cursor-pointer reveal" style="transition-delay: 100ms;">
                    <img src="https://images.unsplash.com/photo-1572635196237-14b3f281503f?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" alt="Vintage">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-display text-3xl font-bold mb-2">VINTAGE</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity delay-100">Retro aesthetics with modern comfort.</p>
                    </div>
                </div>

                <!-- Collection 3 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-[4/5] cursor-pointer reveal" style="transition-delay: 200ms;">
                    <img src="https://images.unsplash.com/photo-1574258495973-f010dfbb5371?auto=format&fit=crop&w=800&q=80" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110 filter grayscale group-hover:grayscale-0" alt="Sport">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                    <div class="absolute bottom-0 left-0 p-8 w-full transform translate-y-4 group-hover:translate-y-0 transition-transform">
                        <h3 class="font-display text-3xl font-bold mb-2">SPORT</h3>
                        <p class="text-gray-300 text-sm opacity-0 group-hover:opacity-100 transition-opacity delay-100">High-performance active eyewear.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features / Services -->
    <section class="py-24 bg-optic-800 border-y border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center reveal">
                <div class="space-y-4">
                    <div class="w-16 h-16 mx-auto rounded-full bg-optic-700 flex items-center justify-center text-accent-gold text-2xl">
                        <i class="fas fa-glasses"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold">Expert Fitting</h3>
                    <p class="text-gray-400 text-sm">Personalized measurements to ensure your frames fit perfectly and feel weightless.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-16 h-16 mx-auto rounded-full bg-optic-700 flex items-center justify-center text-accent-cyan text-2xl">
                        <i class="fas fa-microscope"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold">Precision Lenses</h3>
                    <p class="text-gray-400 text-sm">Digital surfacing technology for optics clearer than reality itself.</p>
                </div>
                <div class="space-y-4">
                    <div class="w-16 h-16 mx-auto rounded-full bg-optic-700 flex items-center justify-center text-accent-rose text-2xl">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="font-display text-xl font-bold">Lifetime Care</h3>
                    <p class="text-gray-400 text-sm">Free adjustments, cleaning, and maintenance for the life of your eyewear.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA / Contact Section -->
    <section id="contact" class="py-32 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-grid opacity-30"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-px bg-gradient-to-r from-transparent via-accent-gold to-transparent"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 reveal">
            <h2 class="font-display text-5xl md:text-7xl font-bold mb-6">READY TO <span class="gradient-text-gold">UPGRADE?</span></h2>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto">
                Book a complimentary styling session or eye test. Our experts are waiting to help you find your perfect look.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="https://wa.me/1234567890?text=Hi%20Visionary,%20I'd%20like%20to%20book%20an%20eye%20test." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-10 py-5 text-lg font-bold text-optic-900 transition-all duration-200 bg-[#25D366] rounded-full hover:bg-[#128C7E] hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#25D366] focus:ring-offset-optic-900 shadow-lg shadow-green-500/20">
                    <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                    CHAT ON WHATSAPP
                </a>
                
                <div class="flex items-center gap-2 text-gray-500 text-sm">
                    <i class="fas fa-clock text-accent-gold"></i>
                    <span>Response time: ~5 mins</span>
                </div>
            </div>

            <div class="mt-16 pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-center items-center gap-8 text-gray-500 text-sm">
                <div class="flex items-center gap-2">
                    <i class="fas fa-map-marker-alt text-accent-gold"></i>
                    <span>123 Optical Avenue, Design District</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-envelope text-accent-gold"></i>
                    <span>hello@visionaryoptics.com</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-black py-12 border-t border-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 rounded-full border border-gray-700 flex items-center justify-center">
                    <i class="fas fa-eye text-gray-500 text-xs"></i>
                </div>
                <span class="font-display text-lg font-bold text-gray-400">VISIONARY</span>
            </div>
            
            <p class="text-gray-600 text-sm">&copy; 2024 Visionary Optics. All rights reserved.</p>

            <div class="flex gap-6">
                <!-- Minimal social links in footer if needed, but keeping it clean as requested -->
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Navbar Scroll Effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-optic-900/95', 'backdrop-blur-md', 'shadow-lg');
                } else {
                    navbar.classList.remove('bg-optic-900/95', 'backdrop-blur-md', 'shadow-lg');
                }
            });

            // Intersection Observer for Animations
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