<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STEEL & OAK | Men's Essentials</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Staatliches&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'steel': {
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
                            950: '#0a0a0b',
                        },
                        'oak': '#8b5a2b',
                        'bronze': '#cd7f32',
                        'indigo': '#2c3e50',
                    },
                    fontFamily: {
                        display: ['"Staatliches"', 'cursive'],
                        body: ['"Space Grotesk"', 'sans-serif'],
                    },
                    animation: {
                        'slide': 'slide 30s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        slide: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
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
            background: #0a0a0b;
        }
        ::-webkit-scrollbar-thumb {
            background: #343a40;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #8b5a2b;
        }

        /* Texture */
        .texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Product Card */
        .product-card {
            transition: all 0.4s ease;
        }
        .product-card:hover {
            transform: translateY(-8px);
        }

        /* Underline Animation */
        .hover-underline {
            position: relative;
        }
        .hover-underline::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #8b5a2b;
            transition: width 0.3s ease;
        }
        .hover-underline:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-steel-950 text-steel-100 font-body antialiased overflow-x-hidden selection:bg-oak selection:text-white">

    <!-- Texture Overlay -->
    <div class="fixed inset-0 texture pointer-events-none z-50"></div>

    <!-- Top Announcement -->
    <div class="bg-steel-900 text-steel-300 text-xs py-2 overflow-hidden border-b border-steel-800">
        <div class="flex whitespace-nowrap">
            <div class="animate-slide flex items-center gap-8 px-4">
                <span>FREE SHIPPING ON ORDERS OVER $100</span>
                <span>•</span>
                <span>NEW WORKWEAR COLLECTION AVAILABLE</span>
                <span>•</span>
                <span>30-DAY EASY RETURNS</span>
                <span>•</span>
                <span>FREE SHIPPING ON ORDERS OVER $100</span>
                <span>•</span>
                <span>NEW WORKWEAR COLLECTION AVAILABLE</span>
                <span>•</span>
                <span>30-DAY EASY RETURNS</span>
                <span>•</span>
            </div>
            <div class="animate-slide flex items-center gap-8 px-4">
                <span>FREE SHIPPING ON ORDERS OVER $100</span>
                <span>•</span>
                <span>NEW WORKWEAR COLLECTION AVAILABLE</span>
                <span>•</span>
                <span>30-DAY EASY RETURNS</span>
                <span>•</span>
                <span>FREE SHIPPING ON ORDERS OVER $100</span>
                <span>•</span>
                <span>NEW WORKWEAR COLLECTION AVAILABLE</span>
                <span>•</span>
                <span>30-DAY EASY RETURNS</span>
                <span>•</span>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="fixed w-full z-40 top-8 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-20 bg-steel-900/95 backdrop-blur-md border border-steel-800 px-6">
                <div class="flex-shrink-0">
                    <span class="font-display text-3xl tracking-wider text-white">STEEL <span class="text-oak">&</span> OAK</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-10">
                    <a href="#collection" class="text-sm font-medium text-steel-400 hover:text-white transition-colors uppercase tracking-wider hover-underline">Shop</a>
                    <a href="#social" class="text-sm font-medium text-steel-400 hover:text-white transition-colors uppercase tracking-wider hover-underline">Community</a>
                    <a href="#about" class="text-sm font-medium text-steel-400 hover:text-white transition-colors uppercase tracking-wider hover-underline">About</a>
                </div>

                <div class="flex items-center gap-6">
                    <button class="text-steel-400 hover:text-white transition-colors">
                        <i class="fas fa-search"></i>
                    </button>
                    <button class="text-steel-400 hover:text-white transition-colors relative">
                        <i class="fas fa-shopping-bag"></i>
                        <span class="absolute -top-2 -right-2 w-4 h-4 bg-oak text-white text-[10px] flex items-center justify-center rounded-sm">2</span>
                    </button>
                    <button class="md:hidden text-white text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-steel-900 border-b border-steel-800 absolute w-full top-20">
            <div class="px-6 py-8 space-y-4 text-center">
                <a href="#collection" class="block text-steel-400 hover:text-white uppercase tracking-wider">Shop</a>
                <a href="#social" class="block text-steel-400 hover:text-white uppercase tracking-wider">Community</a>
                <a href="#about" class="block text-steel-400 hover:text-white uppercase tracking-wider">About</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-32">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-steel-950 via-steel-900 to-steel-950"></div>
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-oak/10 rounded-full filter blur-[128px]"></div>
        <div class="absolute bottom-1/4 left-1/4 w-72 h-72 bg-steel-700/20 rounded-full filter blur-[100px]"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content -->
            <div class="text-center lg:text-left reveal active">
                <p class="text-oak text-sm font-bold tracking-[0.3em] uppercase mb-4">Est. 2019</p>
                
                <h1 class="font-display text-6xl md:text-7xl lg:text-8xl leading-none mb-6 text-white">
                    BUILT FOR <br>
                    <span class="text-steel-500">THE MODERN</span> <br>
                    <span class="text-oak">MAN</span>
                </h1>

                <p class="text-steel-400 text-lg max-w-md mx-auto lg:mx-0 mb-10 leading-relaxed">
                    Premium menswear combining rugged durability with refined style. From workshop to weekend, we've got you covered.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#collection" class="px-10 py-4 bg-oak text-white font-bold uppercase tracking-wider hover:bg-amber-700 transition-all flex items-center justify-center gap-3">
                        Shop Collection <i class="fas fa-arrow-right"></i>
                    </a>
                    <a href="#contact" class="px-10 py-4 border-2 border-steel-700 text-white font-bold uppercase tracking-wider hover:border-oak hover:text-oak transition-all flex items-center justify-center gap-3">
                        <i class="fab fa-whatsapp"></i> Get Help
                    </a>
                </div>

                <!-- Features -->
                <div class="flex gap-8 mt-16 justify-center lg:justify-start text-sm text-steel-500">
                    <span class="flex items-center gap-2"><i class="fas fa-hammer text-oak"></i> Premium Materials</span>
                    <span class="flex items-center gap-2"><i class="fas fa-truck text-oak"></i> Fast Shipping</span>
                    <span class="flex items-center gap-2"><i class="fas fa-undo text-oak"></i> Easy Returns</span>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="relative flex justify-center reveal active" style="transition-delay: 200ms;">
                <div class="relative w-full max-w-md">
                    <!-- Main Display -->
                    <div class="relative aspect-[3/4] bg-gradient-to-br from-steel-800 to-steel-900 border border-steel-700 overflow-hidden">
                        <!-- Abstract Clothing -->
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-3/4 h-5/6 relative">
                                <!-- Shirt -->
                                <div class="absolute top-0 left-0 right-0 h-2/3 bg-steel-600">
                                    <div class="absolute top-0 left-0 w-1/3 h-full bg-steel-500 transform -skew-x-12 origin-top-left"></div>
                                    <div class="absolute top-0 right-0 w-1/3 h-full bg-steel-500 transform skew-x-12 origin-top-right"></div>
                                    <!-- Pocket -->
                                    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-16 h-20 bg-steel-400 border-2 border-steel-300"></div>
                                </div>
                                <!-- Pants -->
                                <div class="absolute bottom-0 left-0 right-0 h-1/3 bg-indigo">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-full bg-indigo-900"></div>
                                </div>
                                <!-- Belt -->
                                <div class="absolute top-2/3 left-0 right-0 h-8 bg-oak"></div>
                            </div>
                        </div>

                        <!-- Overlay Badge -->
                        <div class="absolute bottom-0 left-0 right-0 p-6 bg-gradient-to-t from-black/80 to-transparent">
                            <p class="text-xs text-steel-400 uppercase tracking-wider mb-1">Featured</p>
                            <p class="font-display text-2xl text-white">Workwear Set</p>
                            <p class="text-oak font-bold mt-2">$189.00</p>
                        </div>
                    </div>

                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 bg-steel-800 border border-steel-700 px-4 py-2 text-xs uppercase tracking-wider animate-float">
                        New Arrival
                    </div>
                    <div class="absolute -bottom-4 -left-4 bg-oak text-white px-6 py-3 font-bold uppercase text-sm tracking-wider animate-float" style="animation-delay: 1s;">
                        Best Seller
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. SOCIAL LINKS SECTION -->
    <section id="social" class="relative py-24 bg-steel-900 border-y border-steel-800">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Content -->
                <div class="reveal">
                    <p class="text-oak text-xs uppercase tracking-[0.3em] mb-4">Join the Crew</p>
                    <h2 class="font-display text-5xl md:text-6xl text-white mb-6">STAY IN THE <span class="text-steel-500">LOOP</span></h2>
                    <p class="text-steel-400 mb-10 max-w-md leading-relaxed">
                        Follow us for style tips, new drops, and behind-the-scenes looks at how we craft our gear.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="group p-6 bg-steel-950 border border-steel-800 hover:border-oak transition-all">
                            <i class="fab fa-instagram text-2xl text-steel-500 group-hover:text-oak mb-3 block"></i>
                            <p class="font-bold text-white">Instagram</p>
                            <p class="text-xs text-steel-500">@steelandoak</p>
                        </a>
                        
                        <a href="#" class="group p-6 bg-steel-950 border border-steel-800 hover:border-oak transition-all">
                            <i class="fab fa-facebook-f text-2xl text-steel-500 group-hover:text-oak mb-3 block"></i>
                            <p class="font-bold text-white">Facebook</p>
                            <p class="text-xs text-steel-500">Community</p>
                        </a>
                        
                        <a href="#" class="group p-6 bg-steel-950 border border-steel-800 hover:border-oak transition-all">
                            <i class="fab fa-pinterest text-2xl text-steel-500 group-hover:text-oak mb-3 block"></i>
                            <p class="font-bold text-white">Pinterest</p>
                            <p class="text-xs text-steel-500">Style Board</p>
                        </a>
                        
                        <a href="#" class="group p-6 bg-steel-950 border border-steel-800 hover:border-oak transition-all">
                            <i class="fab fa-youtube text-2xl text-steel-500 group-hover:text-oak mb-3 block"></i>
                            <p class="font-bold text-white">YouTube</p>
                            <p class="text-xs text-steel-500">Behind Scenes</p>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual Grid -->
                <div class="grid grid-cols-3 gap-3 reveal">
                    <div class="space-y-3 mt-8">
                        <div class="aspect-[3/4] bg-steel-800 border border-steel-700"></div>
                        <div class="aspect-square bg-oak/20 border border-oak/30"></div>
                    </div>
                    <div class="space-y-3">
                        <div class="aspect-square bg-steel-700 border border-steel-600"></div>
                        <div class="aspect-[3/4] bg-steel-800 border border-steel-700"></div>
                    </div>
                    <div class="space-y-3 mt-12">
                        <div class="aspect-[3/4] bg-steel-900 border border-steel-800"></div>
                        <div class="aspect-square bg-steel-800 border border-steel-700"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHAT WE DO / COLLECTION SECTION -->
    <section id="collection" class="relative py-32 bg-steel-950">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div>
                    <p class="text-oak text-xs uppercase tracking-[0.3em] mb-2">The Shop</p>
                    <h2 class="font-display text-5xl md:text-6xl text-white">ESSENTIALS</h2>
                </div>
                <div class="flex gap-3 mt-6 md:mt-0">
                    <button class="px-5 py-2 bg-white text-steel-950 text-xs uppercase tracking-wider font-bold">All</button>
                    <button class="px-5 py-2 border border-steel-700 text-steel-400 text-xs uppercase tracking-wider hover:border-white hover:text-white transition-all">Shirts</button>
                    <button class="px-5 py-2 border border-steel-700 text-steel-400 text-xs uppercase tracking-wider hover:border-white hover:text-white transition-all">Pants</button>
                    <button class="px-5 py-2 border border-steel-700 text-steel-400 text-xs uppercase tracking-wider hover:border-white hover:text-white transition-all">Outerwear</button>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Product 1 -->
                <div class="product-card group reveal">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-steel-800 to-steel-900 border border-steel-700 overflow-hidden mb-4">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-2/3 h-3/4 bg-steel-600 relative">
                                <div class="absolute top-0 left-0 w-1/3 h-full bg-steel-500 transform -skew-x-6"></div>
                                <div class="absolute top-0 right-0 w-1/3 h-full bg-steel-500 transform skew-x-6"></div>
                                <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-12 h-16 bg-steel-400 border border-steel-300"></div>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <button class="w-10 h-10 bg-black/50 flex items-center justify-center text-white hover:bg-oak transition-colors">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <h3 class="font-display text-xl text-white mb-1">Utility Shirt</h3>
                    <p class="text-steel-500 text-sm mb-2">Heavy Cotton Twill</p>
                    <div class="flex items-center justify-between">
                        <span class="text-white font-bold">$79.00</span>
                        <button class="text-xs uppercase tracking-wider text-oak hover:text-white transition-colors">Add +</button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card group reveal" style="transition-delay: 100ms;">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-indigo-900 to-indigo-950 border border-steel-700 overflow-hidden mb-4">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-2/3 h-3/4 bg-indigo-800 relative">
                                <div class="absolute top-0 left-0 right-0 h-1/3 bg-indigo-700"></div>
                                <div class="absolute bottom-0 left-0 w-1/2 h-2/3 bg-indigo-900"></div>
                                <div class="absolute bottom-0 right-0 w-1/2 h-2/3 bg-indigo-900"></div>
                            </div>
                        </div>
                        <div class="absolute top-4 left-4 bg-oak text-white text-xs font-bold px-2 py-1">SALE</div>
                    </div>
                    <h3 class="font-display text-xl text-white mb-1">Work Jeans</h3>
                    <p class="text-steel-500 text-sm mb-2">Selvedge Denim</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <span class="text-white font-bold">$89.00</span>
                            <span class="text-steel-600 line-through text-sm ml-2">$120</span>
                        </div>
                        <button class="text-xs uppercase tracking-wider text-oak hover:text-white transition-colors">Add +</button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card group reveal" style="transition-delay: 200ms;">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-steel-800 to-black border border-steel-700 overflow-hidden mb-4">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-3/4 h-4/5 bg-steel-700 relative rounded-t-lg">
                                <div class="absolute top-4 left-1/2 -translate-x-1/2 w-16 h-4 bg-steel-600 rounded-full"></div>
                                <div class="absolute top-12 left-1/2 -translate-x-1/2 w-12 h-2 bg-steel-800 rounded-full"></div>
                                <div class="absolute bottom-0 w-full h-1/2 bg-steel-800"></div>
                            </div>
                        </div>
                    </div>
                    <h3 class="font-display text-xl text-white mb-1">Field Jacket</h3>
                    <p class="text-steel-500 text-sm mb-2">Waxed Canvas</p>
                    <div class="flex items-center justify-between">
                        <span class="text-white font-bold">$199.00</span>
                        <button class="text-xs uppercase tracking-wider text-oak hover:text-white transition-colors">Add +</button>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="product-card group reveal" style="transition-delay: 300ms;">
                    <div class="relative aspect-[3/4] bg-gradient-to-b from-steel-700 to-steel-800 border border-steel-700 overflow-hidden mb-4">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-2/3 h-1/2 bg-steel-600 rounded-sm relative">
                                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-24 h-8 bg-steel-500 rounded-full border-4 border-steel-400"></div>
                            </div>
                        </div>
                        <div class="absolute top-4 right-4">
                            <span class="text-xs text-steel-400 bg-black/50 px-2 py-1">NEW</span>
                        </div>
                    </div>
                    <h3 class="font-display text-xl text-white mb-1">Leather Belt</h3>
                    <p class="text-steel-500 text-sm mb-2">Full Grain</p>
                    <div class="flex items-center justify-between">
                        <span class="text-white font-bold">$59.00</span>
                        <button class="text-xs uppercase tracking-wider text-oak hover:text-white transition-colors">Add +</button>
                    </div>
                </div>
            </div>

            <div class="text-center mt-16 reveal">
                <a href="#" class="inline-flex items-center gap-3 px-12 py-4 border-2 border-steel-700 text-white font-bold uppercase tracking-wider hover:border-oak hover:text-oak transition-all">
                    View All Products <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- 4. CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-32 overflow-hidden bg-oak">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23000000%22%20fill-opacity%3D%220.05%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12 text-center reveal">
            <h2 class="font-display text-5xl md:text-6xl text-white mb-6">NEED HELP?</h2>
            <p class="text-white/80 text-xl mb-12 max-w-2xl mx-auto">
                Questions about sizing, shipping, or custom orders? We're here to help you find the perfect fit.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="https://wa.me/1234567890?text=Hi%20Steel%20%26%20Oak!%20I%20have%20a%20question%20about%20my%20order." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-12 py-5 text-lg font-bold text-oak transition-all duration-300 bg-white hover:scale-105 shadow-2xl">
                    <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                    WhatsApp Support
                </a>
                
                <div class="text-white text-left">
                    <p class="text-sm opacity-80">Email us</p>
                    <p class="text-xl font-bold">help@steelandoak.com</p>
                </div>
            </div>

            <div class="mt-16 pt-8 border-t border-white/20 flex flex-wrap justify-center gap-12 text-white/70 text-sm">
                <span class="flex items-center gap-2"><i class="fas fa-truck"></i> Free Shipping $100+</span>
                <span class="flex items-center gap-2"><i class="fas fa-undo"></i> 30-Day Returns</span>
                <span class="flex items-center gap-2"><i class="fas fa-shield-alt"></i> Secure Payment</span>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER WITHOUT LINKS -->
    <footer class="bg-steel-950 border-t border-steel-900 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-display text-2xl tracking-wider text-white">
                STEEL <span class="text-oak">&</span> OAK
            </div>
            
            <p class="text-steel-600 text-sm">
                &copy; 2024 Steel & Oak. Built to last.
            </p>

            <div class="flex items-center gap-2 text-steel-600 text-sm">
                <i class="fas fa-map-marker-alt text-oak"></i>
                <span>Portland, OR</span>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Navbar Effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    navbar.classList.add('top-0');
                    navbar.classList.remove('top-8');
                } else {
                    navbar.classList.add('top-8');
                    navbar.classList.remove('top-0');
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
                            top: targetElement.offsetTop - 100,
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