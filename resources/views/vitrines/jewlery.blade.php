<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURELIA | Handcrafted Jewelry</title>
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
                        'gold': {
                            50: '#fdf9f0',
                            100: '#f9f0db',
                            200: '#f3e0b8',
                            300: '#eac88a',
                            400: '#e0a854',
                            500: '#d48c2a',
                            600: '#c77920',
                            700: '#a55d1a',
                            800: '#874a18',
                            900: '#6f3d16',
                        },
                        'rose': {
                            50: '#fff1f2',
                            100: '#ffe4e6',
                            200: '#fecdd3',
                            300: '#fda4af',
                            400: '#fb7185',
                            500: '#f43f5e',
                            600: '#e11d48',
                            700: '#be123c',
                            800: '#9f1239',
                            900: '#881337',
                        },
                        'velvet': '#1a0b2e',
                        'cream': '#faf7f2',
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['"Montserrat"', 'sans-serif'],
                    },
                    animation: {
                        'sparkle': 'sparkle 3s ease-in-out infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'shimmer': 'shimmer 2s linear infinite',
                    },
                    keyframes: {
                        sparkle: {
                            '0%, 100%': { opacity: '1', transform: 'scale(1)' },
                            '50%': { opacity: '0.5', transform: 'scale(0.8)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        shimmer: {
                            '0%': { backgroundPosition: '-200% 0' },
                            '100%': { backgroundPosition: '200% 0' },
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
            background: #faf7f2;
        }
        ::-webkit-scrollbar-thumb {
            background: #e0a854;
            border-radius: 3px;
        }

        /* Subtle Texture */
        .texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Jewelry Card Hover */
        .jewelry-card {
            transition: all 0.5s ease;
        }
        .jewelry-card:hover {
            transform: translateY(-10px) rotate(1deg);
        }
        .jewelry-card:hover .jewelry-image {
            transform: scale(1.05);
        }

        /* Gold Gradient Text */
        .gold-text {
            background: linear-gradient(135deg, #e0a854 0%, #f3e0b8 50%, #d48c2a 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Shimmer Effect */
        .shimmer {
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            background-size: 200% 100%;
            animation: shimmer 2s infinite;
        }

        /* Decorative Frame */
        .ornate-frame {
            border: 2px solid #e0a854;
            position: relative;
        }
        .ornate-frame::before,
        .ornate-frame::after {
            content: '◆';
            position: absolute;
            color: #e0a854;
            font-size: 12px;
        }
        .ornate-frame::before {
            top: -8px;
            left: 50%;
            transform: translateX(-50%);
            background: #faf7f2;
            padding: 0 10px;
        }
        .ornate-frame::after {
            bottom: -8px;
            left: 50%;
            transform: translateX(-50%);
            background: #faf7f2;
            padding: 0 10px;
        }
    </style>
</head>
<body class="bg-cream text-velvet font-sans antialiased overflow-x-hidden selection:bg-gold-500 selection:text-white texture">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0">
                    <span class="font-serif text-3xl italic tracking-wider gold-text">Aurelia</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-12">
                    <a href="#collection" class="text-sm font-medium text-velvet/70 hover:text-gold-600 transition-colors tracking-wide">Collection</a>
                    <a href="#social" class="text-sm font-medium text-velvet/70 hover:text-gold-600 transition-colors tracking-wide">Follow Us</a>
                    <a href="#about" class="text-sm font-medium text-velvet/70 hover:text-gold-600 transition-colors tracking-wide">Our Story</a>
                    <a href="#contact" class="px-8 py-3 bg-gold-500 text-white rounded-full font-medium hover:bg-gold-600 transition-all shadow-lg shadow-gold-500/20">
                        Custom Order
                    </a>
                </div>

                <div class="flex items-center gap-6">
                    <button class="text-velvet/70 hover:text-gold-600 transition-colors">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="text-velvet/70 hover:text-gold-600 transition-colors relative">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="absolute -top-2 -right-2 w-4 h-4 bg-rose-500 text-white text-[10px] flex items-center justify-center rounded-full">2</span>
                    </button>
                    <button class="md:hidden text-velvet text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-cream/95 backdrop-blur-md absolute w-full shadow-lg">
            <div class="px-6 py-8 space-y-4 text-center">
                <a href="#collection" class="block text-velvet/70 hover:text-gold-600">Collection</a>
                <a href="#social" class="block text-velvet/70 hover:text-gold-600">Follow Us</a>
                <a href="#contact" class="block text-gold-600 font-medium">Custom Order</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-24">
        <!-- Decorative Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-cream via-rose-50/30 to-cream"></div>
        <div class="absolute top-20 right-20 w-72 h-72 bg-gold-200/30 rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-20 w-96 h-96 bg-rose-200/20 rounded-full filter blur-3xl animate-float" style="animation-delay: 3s;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Content -->
            <div class="text-center lg:text-left space-y-8 reveal active">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white shadow-sm rounded-full text-sm text-velvet/70">
                    <span class="w-2 h-2 rounded-full bg-gold-500 animate-sparkle"></span>
                    <span>Handcrafted in Small Batches</span>
                </div>

                <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl leading-tight text-velvet">
                    Jewelry That <br>
                    <span class="italic gold-text">Tells Your</span> <br>
                    Story
                </h1>

                <p class="text-lg text-velvet/60 max-w-md mx-auto lg:mx-0 leading-relaxed">
                    Each piece is meticulously handcrafted using ethically sourced gemstones and precious metals. Wearable art for life's precious moments.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#collection" class="px-8 py-4 bg-gold-500 text-white rounded-full font-medium hover:bg-gold-600 transition-all flex items-center justify-center gap-2 shadow-lg shadow-gold-500/20">
                        Explore Collection <i class="fas fa-gem text-sm"></i>
                    </a>
                    <a href="#contact" class="px-8 py-4 border-2 border-gold-300 text-gold-700 rounded-full font-medium hover:border-gold-500 hover:text-gold-600 transition-all flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp"></i> Custom Design
                    </a>
                </div>

                <!-- Craft Badges -->
                <div class="flex gap-6 mt-12 justify-center lg:justify-start pt-8 border-t border-gold-200/50">
                    <div class="text-center">
                        <i class="fas fa-hand-sparkles text-gold-500 text-xl mb-2"></i>
                        <p class="text-xs text-velvet/50 uppercase tracking-wider">Handmade</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-leaf text-gold-500 text-xl mb-2"></i>
                        <p class="text-xs text-velvet/50 uppercase tracking-wider">Ethical</p>
                    </div>
                    <div class="text-center">
                        <i class="fas fa-certificate text-gold-500 text-xl mb-2"></i>
                        <p class="text-xs text-velvet/50 uppercase tracking-wider">Certified</p>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="relative flex justify-center reveal active" style="transition-delay: 200ms;">
                <div class="relative w-full max-w-md">
                    <!-- Decorative Rings -->
                    <div class="absolute inset-0 border border-gold-300/30 rounded-full transform rotate-12 scale-110"></div>
                    <div class="absolute inset-0 border border-rose-300/20 rounded-full transform -rotate-6 scale-105"></div>
                    
                    <!-- Main Display -->
                    <div class="relative bg-white p-6 shadow-2xl rounded-2xl ornate-frame">
                        <div class="aspect-square bg-gradient-to-br from-gold-100 via-cream to-rose-50 relative overflow-hidden rounded-lg">
                            <!-- Abstract Jewelry Representation -->
                            <div class="absolute inset-0 flex items-center justify-center">
                                <!-- Necklace Chain -->
                                <svg class="absolute w-full h-full opacity-30" viewBox="0 0 200 200">
                                    <path d="M100,40 Q130,80 100,120 Q70,80 100,40" stroke="#d48c2a" stroke-width="1" fill="none"/>
                                    <path d="M100,120 L100,160" stroke="#d48c2a" stroke-width="2"/>
                                </svg>
                                
                                <!-- Central Gem -->
                                <div class="w-24 h-32 bg-gradient-to-b from-rose-300 via-rose-400 to-rose-600 rounded-full shadow-2xl relative">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-white/40 to-transparent rounded-full"></div>
                                    <div class="absolute top-4 left-1/2 -translate-x-1/2 w-8 h-4 bg-white/60 rounded-full blur-sm"></div>
                                </div>
                                
                                <!-- Side Gems -->
                                <div class="absolute top-1/3 left-1/4 w-8 h-10 bg-gold-400 rounded-sm transform -rotate-12 shadow-lg"></div>
                                <div class="absolute top-1/3 right-1/4 w-8 h-10 bg-gold-400 rounded-sm transform rotate-12 shadow-lg"></div>
                            </div>

                            <!-- Sparkles -->
                            <div class="absolute top-10 right-10 text-gold-400 text-xs animate-sparkle">✦</div>
                            <div class="absolute bottom-20 left-10 text-gold-400 text-sm animate-sparkle" style="animation-delay: 1s;">✦</div>
                            <div class="absolute top-1/2 right-8 text-rose-400 text-xs animate-sparkle" style="animation-delay: 2s;">✦</div>
                        </div>
                        
                        <!-- Caption -->
                        <div class="mt-4 text-center">
                            <p class="font-serif text-xl italic text-velvet">Rose Garden Pendant</p>
                            <p class="text-gold-600 font-medium">$485.00</p>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-4 -left-4 bg-velvet text-white px-6 py-3 rounded-full shadow-xl animate-float">
                        <p class="text-sm font-medium">Free Engraving</p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. SOCIAL LINKS SECTION -->
    <section id="social" class="relative py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16 reveal">
                <p class="text-gold-600 text-sm uppercase tracking-[0.3em] mb-4">Join Our Circle</p>
                <h2 class="font-serif text-4xl md:text-5xl text-velvet mb-4">Follow the Craft</h2>
                <p class="text-velvet/60 max-w-xl mx-auto">Behind-the-scenes of our studio, styling inspiration, and exclusive previews of new collections.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                <!-- Instagram -->
                <a href="#" class="group p-8 bg-gradient-to-br from-rose-50 to-pink-50 rounded-2xl hover:from-rose-100 hover:to-pink-100 transition-all duration-300 text-center border border-rose-100">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-instagram text-2xl text-rose-500"></i>
                    </div>
                    <p class="font-serif text-xl text-velvet">Instagram</p>
                    <p class="text-sm text-velvet/50 mt-1">@aurelia.jewelry</p>
                    <p class="text-xs text-gold-600 mt-2">28K followers</p>
                </a>

                <!-- Pinterest -->
                <a href="#" class="group p-8 bg-gradient-to-br from-red-50 to-orange-50 rounded-2xl hover:from-red-100 hover:to-orange-100 transition-all duration-300 text-center border border-red-100">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-pinterest text-2xl text-red-500"></i>
                    </div>
                    <p class="font-serif text-xl text-velvet">Pinterest</p>
                    <p class="text-sm text-velvet/50 mt-1">Style Boards</p>
                    <p class="text-xs text-gold-600 mt-2">150K monthly</p>
                </a>

                <!-- TikTok -->
                <a href="#" class="group p-8 bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl hover:from-gray-100 hover:to-gray-200 transition-all duration-300 text-center border border-gray-200">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-tiktok text-2xl text-velvet"></i>
                    </div>
                    <p class="font-serif text-xl text-velvet">TikTok</p>
                    <p class="text-sm text-velvet/50 mt-1">Making Of</p>
                    <p class="text-xs text-gold-600 mt-2">Process videos</p>
                </a>

                <!-- Facebook -->
                <a href="#" class="group p-8 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl hover:from-blue-100 hover:to-indigo-100 transition-all duration-300 text-center border border-blue-100">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white shadow-sm flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-facebook-f text-2xl text-blue-600"></i>
                    </div>
                    <p class="font-serif text-xl text-velvet">Facebook</p>
                    <p class="text-sm text-velvet/50 mt-1">Community</p>
                    <p class="text-xs text-gold-600 mt-2">Events & Sales</p>
                </a>
            </div>

            <!-- Social Proof -->
            <div class="mt-16 flex flex-wrap justify-center gap-8 text-velvet/50 text-sm reveal">
                <div class="flex items-center gap-2">
                    <i class="fas fa-star text-gold-400"></i>
                    <span>4.9 Rating (2,400+ reviews)</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-gift text-gold-400"></i>
                    <span>Gift Wrapping Available</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-shipping-fast text-gold-400"></i>
                    <span>Worldwide Shipping</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHAT WE DO / COLLECTION SECTION -->
    <section id="collection" class="relative py-32 bg-cream">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div>
                    <p class="text-gold-600 text-sm uppercase tracking-[0.3em] mb-2">The Collection</p>
                    <h2 class="font-serif text-4xl md:text-5xl text-velvet">Curated Pieces</h2>
                </div>
                <div class="flex gap-3 mt-6 md:mt-0">
                    <button class="px-5 py-2 bg-velvet text-white text-sm rounded-full">All</button>
                    <button class="px-5 py-2 bg-white text-velvet/70 text-sm rounded-full hover:bg-gold-50 transition-colors">Necklaces</button>
                    <button class="px-5 py-2 bg-white text-velvet/70 text-sm rounded-full hover:bg-gold-50 transition-colors">Rings</button>
                    <button class="px-5 py-2 bg-white text-velvet/70 text-sm rounded-full hover:bg-gold-50 transition-colors">Earrings</button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Product 1 -->
                <div class="jewelry-card group reveal">
                    <div class="relative aspect-square bg-white rounded-2xl shadow-lg overflow-hidden mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-gold-100 to-gold-50 flex items-center justify-center">
                            <!-- Ring Representation -->
                            <div class="w-24 h-24 rounded-full border-4 border-gold-400 shadow-2xl relative">
                                <div class="absolute inset-2 rounded-full bg-gradient-to-br from-rose-300 to-rose-500"></div>
                                <div class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-8 h-12 bg-gold-400 rounded-sm"></div>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="w-10 h-10 bg-white/80 backdrop-blur-sm rounded-full flex items-center justify-center text-velvet/50 hover:text-rose-500 transition-colors">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                        <div class="absolute top-4 left-4 bg-gold-500 text-white text-xs px-2 py-1 rounded-full">Bestseller</div>
                    </div>
                    <h3 class="font-serif text-xl text-velvet mb-1">Sunset Ring</h3>
                    <p class="text-sm text-velvet/50 mb-2">Rose Quartz & Gold</p>
                    <div class="flex items-center justify-between">
                        <span class="text-gold-600 font-bold text-lg">$320.00</span>
                        <button class="text-sm text-velvet/70 hover:text-gold-600 transition-colors">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="jewelry-card group reveal" style="transition-delay: 100ms;">
                    <div class="relative aspect-square bg-white rounded-2xl shadow-lg overflow-hidden mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-rose-50 to-cream flex items-center justify-center">
                            <!-- Earrings Representation -->
                            <div class="flex gap-4">
                                <div class="w-3 h-16 bg-gold-400 rounded-full relative">
                                    <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-rose-400 rounded-full"></div>
                                </div>
                                <div class="w-3 h-16 bg-gold-400 rounded-full relative">
                                    <div class="absolute -top-2 left-1/2 -translate-x-1/2 w-4 h-4 bg-rose-400 rounded-full"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="font-serif text-xl text-velvet mb-1">Dewdrop Earrings</h3>
                    <p class="text-sm text-velvet/50 mb-2">Pearls & Gold Vermeil</p>
                    <div class="flex items-center justify-between">
                        <span class="text-gold-600 font-bold text-lg">$185.00</span>
                        <button class="text-sm text-velvet/70 hover:text-gold-600 transition-colors">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="jewelry-card group reveal" style="transition-delay: 200ms;">
                    <div class="relative aspect-square bg-white rounded-2xl shadow-lg overflow-hidden mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-velvet/5 to-gold-100/30 flex items-center justify-center">
                            <!-- Bracelet Representation -->
                            <div class="w-32 h-32 rounded-full border-8 border-gold-300 relative">
                                <div class="absolute inset-4 rounded-full border-4 border-gold-400"></div>
                                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-rose-400 rounded-full shadow-lg"></div>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 bg-rose-500 text-white text-xs px-2 py-1 rounded-full">New</div>
                    </div>
                    <h3 class="font-serif text-xl text-velvet mb-1">Infinity Bracelet</h3>
                    <p class="text-sm text-velvet/50 mb-2">Chain Link Gold</p>
                    <div class="flex items-center justify-between">
                        <span class="text-gold-600 font-bold text-lg">$275.00</span>
                        <button class="text-sm text-velvet/70 hover:text-gold-600 transition-colors">Add to Cart</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="jewelry-card group reveal" style="transition-delay: 300ms;">
                    <div class="relative aspect-square bg-white rounded-2xl shadow-lg overflow-hidden mb-4">
                        <div class="absolute inset-0 bg-gradient-to-br from-gold-200/50 to-rose-100/50 flex items-center justify-center">
                            <!-- Pendant Representation -->
                            <div class="relative">
                                <div class="w-1 h-20 bg-gold-400 mx-auto"></div>
                                <div class="w-20 h-24 bg-gradient-to-b from-gold-300 to-gold-500 rounded-lg shadow-xl relative overflow-hidden">
                                    <div class="absolute inset-0 bg-gradient-to-tr from-white/30 to-transparent"></div>
                                    <div class="absolute bottom-2 left-1/2 -translate-x-1/2 w-12 h-12 bg-rose-400/80 rounded-full blur-sm"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="font-serif text-xl text-velvet mb-1">Aurora Pendant</h3>
                    <p class="text-sm text-velvet/50 mb-2">Moonstone & Gold</p>
                    <div class="flex items-center justify-between">
                        <span class="text-gold-600 font-bold text-lg">$425.00</span>
                        <button class="text-sm text-velvet/70 hover:text-gold-600 transition-colors">Add to Cart</button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16 reveal">
                <a href="#" class="inline-flex items-center gap-3 px-10 py-4 border-2 border-gold-300 text-gold-700 rounded-full font-medium hover:border-gold-500 hover:text-gold-600 transition-all">
                    View Full Collection <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-32 overflow-hidden bg-velvet">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gold-400 to-transparent"></div>
        <div class="absolute top-1/2 left-1/4 w-64 h-64 bg-gold-500/10 rounded-full filter blur-[80px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-48 h-48 bg-rose-500/10 rounded-full filter blur-[60px]"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12 text-center reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 rounded-full mb-8">
                <i class="fas fa-gem text-gold-400 text-sm"></i>
                <span class="text-sm text-gold-200">Bespoke Services Available</span>
            </div>

            <h2 class="font-serif text-5xl md:text-6xl text-white mb-6">Create Something Unique</h2>
            <p class="text-gold-100/80 text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
                Dreaming of a custom piece? Let's collaborate to design jewelry that captures your unique story and style.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                <a href="https://wa.me/1234567890?text=Hi%20Aurelia!%20I'm%20interested%20in%20a%20custom%20jewelry%20piece." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-12 py-5 text-lg font-medium text-velvet transition-all duration-300 bg-gold-400 rounded-full hover:bg-gold-300 hover:scale-105 shadow-xl shadow-gold-500/20">
                    <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                    Start Your Custom Order
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-8 border-t border-white/10 text-gold-200/60 text-sm">
                <div>
                    <i class="fas fa-envelope text-gold-400 mb-2 block text-lg"></i>
                    <p>hello@aurelia.com</p>
                </div>
                <div>
                    <i class="fas fa-phone text-gold-400 mb-2 block text-lg"></i>
                    <p>+1 (555) 789-0123</p>
                </div>
                <div>
                    <i class="fas fa-map-marker-alt text-gold-400 mb-2 block text-lg"></i>
                    <p>Studio & Showroom, NYC</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER WITHOUT LINKS -->
    <footer class="bg-velvet border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-serif text-2xl italic gold-text">
                Aurelia
            </div>
            
            <p class="text-gold-200/40 text-sm">
                &copy; 2024 Aurelia Jewelry. Handcrafted with love.
            </p>

            <div class="flex items-center gap-2 text-gold-200/40 text-sm">
                <i class="fas fa-heart text-rose-400"></i>
                <span>Made for you</span>
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
                    navbar.classList.add('bg-cream/95', 'backdrop-blur-md', 'shadow-sm');
                } else {
                    navbar.classList.remove('bg-cream/95', 'backdrop-blur-md', 'shadow-sm');
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