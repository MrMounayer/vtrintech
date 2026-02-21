<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isabella Voss | Fashion Model</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Plus+Jakarta+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'champagne': {
                            50: '#faf9f6',
                            100: '#f5f3ed',
                            200: '#ebe7db',
                            300: '#ddd6c3',
                            400: '#c9bfa3',
                            500: '#b5a683',
                            600: '#9c8b6a',
                            700: '#817055',
                            800: '#6b5d48',
                            900: '#574c3d',
                        },
                        'noir': '#0a0a0a',
                        'blush': '#f4e7e7',
                        'gold': '#d4af37',
                    },
                    fontFamily: {
                        serif: ['"Playfair Display"', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 1s ease-out forwards',
                        'slide-up': 'slideUp 0.8s ease-out forwards',
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slideUp: {
                            '0%': { opacity: '0', transform: 'translateY(40px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
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
            background: #0a0a0a;
        }
        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #d4af37;
        }

        /* Grain Texture */
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

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Image Hover Effect */
        .portfolio-item {
            overflow: hidden;
        }
        .portfolio-item img {
            transition: transform 1.2s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .portfolio-item:hover img {
            transform: scale(1.05);
        }

        /* Custom Cursor */
        .cursor-dot,
        .cursor-outline {
            position: fixed;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: 9999;
            pointer-events: none;
        }
        .cursor-dot {
            width: 5px;
            height: 5px;
            background-color: #d4af37;
        }
        .cursor-outline {
            width: 30px;
            height: 30px;
            border: 1px solid rgba(212, 175, 55, 0.5);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }
        
        /* Magazine Layout */
        .magazine-text {
            writing-mode: vertical-rl;
            text-orientation: mixed;
        }
    </style>
</head>
<body class="bg-noir text-champagne-100 font-sans antialiased overflow-x-hidden selection:bg-gold selection:text-noir">

    <!-- Grain Overlay -->
    <div class="grain"></div>

    <!-- Custom Cursor Elements -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-outline hidden md:block"></div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-500" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0">
                    <span class="font-serif text-2xl italic tracking-wider">Isabella Voss</span>
                </div>
                
                <div class="hidden md:flex items-center space-x-12">
                    <a href="#portfolio" class="text-xs uppercase tracking-[0.2em] hover:text-gold transition-colors">Portfolio</a>
                    <a href="#social" class="text-xs uppercase tracking-[0.2em] hover:text-gold transition-colors">Connect</a>
                    <a href="#press" class="text-xs uppercase tracking-[0.2em] hover:text-gold transition-colors">Press</a>
                    <a href="#contact" class="px-6 py-2 border border-champagne-400/30 text-xs uppercase tracking-[0.2em] hover:bg-gold hover:border-gold hover:text-noir transition-all duration-300">
                        Book Now
                    </a>
                </div>

                <button class="md:hidden text-champagne-100 text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-noir absolute w-full border-b border-champagne-800">
            <div class="px-6 py-8 space-y-6 text-center">
                <a href="#portfolio" class="block text-sm uppercase tracking-widest hover:text-gold">Portfolio</a>
                <a href="#social" class="block text-sm uppercase tracking-widest hover:text-gold">Connect</a>
                <a href="#contact" class="block text-sm uppercase tracking-widest text-gold">Book Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=2000&q=80" 
                 class="w-full h-full object-cover opacity-60" alt="Fashion Portrait">
            <div class="absolute inset-0 bg-gradient-to-b from-noir via-transparent to-noir"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 w-full max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-12 gap-8 items-end pb-24 pt-32">
            
            <!-- Left Text -->
            <div class="lg:col-span-4 space-y-6 reveal active">
                <p class="text-gold text-xs uppercase tracking-[0.3em]">Fashion Model</p>
                <h1 class="font-serif text-6xl md:text-7xl lg:text-8xl leading-none">
                    <span class="block italic font-light">Elegance</span>
                    <span class="block font-bold">in Motion</span>
                </h1>
            </div>

            <!-- Center Image Indicator -->
            <div class="lg:col-span-4 flex justify-center reveal active" style="transition-delay: 200ms;">
                <div class="text-center">
                    <div class="w-px h-24 bg-gradient-to-b from-transparent via-gold to-transparent mx-auto mb-4"></div>
                    <p class="text-xs uppercase tracking-widest text-champagne-400">Scroll to explore</p>
                </div>
            </div>

            <!-- Right Stats -->
            <div class="lg:col-span-4 text-right space-y-8 reveal active" style="transition-delay: 400ms;">
                <div>
                    <p class="font-serif text-4xl text-gold">5'10"</p>
                    <p class="text-xs uppercase tracking-widest text-champagne-500 mt-1">Height</p>
                </div>
                <div>
                    <p class="font-serif text-4xl text-gold">24</p>
                    <p class="text-xs uppercase tracking-widest text-champagne-500 mt-1">Age</p>
                </div>
                <div>
                    <p class="font-serif text-4xl text-gold">NYC</p>
                    <p class="text-xs uppercase tracking-widest text-champagne-500 mt-1">Base</p>
                </div>
            </div>
        </div>

        <!-- Floating Badge -->
        <div class="absolute bottom-12 left-6 lg:left-12 reveal active" style="transition-delay: 600ms;">
            <div class="flex items-center gap-4">
                <div class="w-12 h-12 rounded-full border border-gold/30 flex items-center justify-center animate-float">
                    <i class="fas fa-star text-gold text-xs"></i>
                </div>
                <div>
                    <p class="text-xs text-champagne-400 uppercase tracking-wider">Available for</p>
                    <p class="text-sm font-medium">Editorial & Campaigns</p>
                </div>
            </div>
        </div>
    </header>

    <!-- SOCIAL SECTION - SECOND POSITION -->
    <section id="social" class="relative py-32 bg-champagne-100 text-noir">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Large Typography -->
                <div class="reveal">
                    <p class="text-noir/50 text-xs uppercase tracking-[0.3em] mb-4">Digital Presence</p>
                    <h2 class="font-serif text-5xl md:text-7xl leading-tight mb-8">
                        Follow the <br>
                        <span class="italic text-gold">Journey</span>
                    </h2>
                    <p class="text-noir/70 text-lg mb-12 max-w-md leading-relaxed">
                        Behind the scenes, runway moments, and daily inspiration. Join 500K+ followers across platforms.
                    </p>

                    <!-- Social Links -->
                    <div class="space-y-4">
                        <a href="#" class="group flex items-center justify-between p-6 bg-white hover:bg-noir hover:text-champagne-100 transition-all duration-300 border border-noir/10">
                            <div class="flex items-center gap-4">
                                <i class="fab fa-instagram text-2xl"></i>
                                <div>
                                    <p class="font-medium">@isabellavoss</p>
                                    <p class="text-xs opacity-50">320K Followers</p>
                                </div>
                            </div>
                            <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 transition-all transform group-hover:translate-x-2"></i>
                        </a>

                        <a href="#" class="group flex items-center justify-between p-6 bg-white hover:bg-noir hover:text-champagne-100 transition-all duration-300 border border-noir/10">
                            <div class="flex items-center gap-4">
                                <i class="fab fa-tiktok text-2xl"></i>
                                <div>
                                    <p class="font-medium">@isabellavoss</p>
                                    <p class="text-xs opacity-50">180K Followers</p>
                                </div>
                            </div>
                            <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 transition-all transform group-hover:translate-x-2"></i>
                        </a>

                        <a href="#" class="group flex items-center justify-between p-6 bg-white hover:bg-noir hover:text-champagne-100 transition-all duration-300 border border-noir/10">
                            <div class="flex items-center gap-4">
                                <i class="fab fa-youtube text-2xl"></i>
                                <div>
                                    <p class="font-medium">Isabella Voss</p>
                                    <p class="text-xs opacity-50">45K Subscribers</p>
                                </div>
                            </div>
                            <i class="fas fa-arrow-right opacity-0 group-hover:opacity-100 transition-all transform group-hover:translate-x-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Right: Featured Image -->
                <div class="relative reveal">
                    <div class="aspect-[3/4] overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?auto=format&fit=crop&w=800&q=80" 
                             class="w-full h-full object-cover" alt="Fashion Editorial">
                    </div>
                    <!-- Floating Stats Card -->
                    <div class="absolute -bottom-6 -left-6 bg-noir text-champagne-100 p-6 shadow-2xl">
                        <div class="flex gap-8 text-center">
                            <div>
                                <p class="font-serif text-2xl text-gold">50+</p>
                                <p class="text-[10px] uppercase tracking-widest mt-1">Runways</p>
                            </div>
                            <div>
                                <p class="font-serif text-2xl text-gold">12</p>
                                <p class="text-[10px] uppercase tracking-widest mt-1">Campaigns</p>
                            </div>
                            <div>
                                <p class="font-serif text-2xl text-gold">4</p>
                                <p class="text-[10px] uppercase tracking-widest mt-1">Magazines</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section id="portfolio" class="py-32 bg-noir relative">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div>
                    <p class="text-gold text-xs uppercase tracking-[0.3em] mb-2">Selected Works</p>
                    <h2 class="font-serif text-4xl md:text-5xl">Portfolio</h2>
                </div>
                <div class="flex gap-4 mt-6 md:mt-0">
                    <button class="px-4 py-2 text-xs uppercase tracking-widest border border-champagne-800 hover:border-gold hover:text-gold transition-colors">All</button>
                    <button class="px-4 py-2 text-xs uppercase tracking-widest text-champagne-600 hover:text-gold transition-colors">Editorial</button>
                    <button class="px-4 py-2 text-xs uppercase tracking-widest text-champagne-600 hover:text-gold transition-colors">Commercial</button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-1">
                <!-- Portfolio Item 1 -->
                <div class="portfolio-item aspect-[3/4] relative group cursor-pointer reveal">
                    <img src="https://images.unsplash.com/photo-1509631179647-0177331693ae?auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-full object-cover" alt="Editorial 1">
                    <div class="absolute inset-0 bg-noir/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="text-center">
                            <p class="font-serif text-2xl italic">Vogue Italia</p>
                            <p class="text-xs uppercase tracking-widest mt-2 text-gold">Spring 2024</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 2 -->
                <div class="portfolio-item aspect-[3/4] relative group cursor-pointer reveal" style="transition-delay: 100ms;">
                    <img src="https://images.unsplash.com/photo-1515886657613-9f3515b0c78f?auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-full object-cover" alt="Editorial 2">
                    <div class="absolute inset-0 bg-noir/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="text-center">
                            <p class="font-serif text-2xl italic">Elle</p>
                            <p class="text-xs uppercase tracking-widest mt-2 text-gold">Beauty</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 3 -->
                <div class="portfolio-item aspect-[3/4] relative group cursor-pointer reveal" style="transition-delay: 200ms;">
                    <img src="https://images.unsplash.com/photo-1469334031218-e382a71b716b?auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-full object-cover" alt="Editorial 3">
                    <div class="absolute inset-0 bg-noir/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="text-center">
                            <p class="font-serif text-2xl italic">Harper's Bazaar</p>
                            <p class="text-xs uppercase tracking-widest mt-2 text-gold">Fall Collection</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 4 -->
                <div class="portfolio-item aspect-[3/4] relative group cursor-pointer reveal">
                    <img src="https://images.unsplash.com/photo-1496747611176-843222e1e57c?auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-full object-cover" alt="Editorial 4">
                    <div class="absolute inset-0 bg-noir/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="text-center">
                            <p class="font-serif text-2xl italic">Chanel</p>
                            <p class="text-xs uppercase tracking-widest mt-2 text-gold">Campaign</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 5 -->
                <div class="portfolio-item aspect-[3/4] relative group cursor-pointer reveal" style="transition-delay: 100ms;">
                    <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-full object-cover" alt="Editorial 5">
                    <div class="absolute inset-0 bg-noir/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="text-center">
                            <p class="font-serif text-2xl italic">Dior</p>
                            <p class="text-xs uppercase tracking-widest mt-2 text-gold">Cruise 2024</p>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item 6 -->
                <div class="portfolio-item aspect-[3/4] relative group cursor-pointer reveal" style="transition-delay: 200ms;">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?auto=format&fit=crop&w=600&q=80" 
                         class="w-full h-full object-cover" alt="Editorial 6">
                    <div class="absolute inset-0 bg-noir/60 opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-center justify-center">
                        <div class="text-center">
                            <p class="font-serif text-2xl italic">Prada</p>
                            <p class="text-xs uppercase tracking-widest mt-2 text-gold">SS24</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Press Logos -->
    <section id="press" class="py-24 bg-champagne-50 text-noir border-y border-champagne-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <p class="text-center text-xs uppercase tracking-[0.3em] text-noir/50 mb-12 reveal">Featured In</p>
            <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 opacity-60 reveal">
                <span class="font-serif text-2xl font-bold">VOGUE</span>
                <span class="font-serif text-2xl font-bold">ELLE</span>
                <span class="font-serif text-2xl font-bold">BAZAAR</span>
                <span class="font-serif text-2xl font-bold">GQ</span>
                <span class="font-serif text-2xl font-bold">W</span>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="relative py-40 bg-noir overflow-hidden">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-gold to-transparent"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] border border-champagne-900/30 rounded-full"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] border border-champagne-900/50 rounded-full"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12 text-center reveal">
            <p class="text-gold text-xs uppercase tracking-[0.3em] mb-6">Bookings & Inquiries</p>
            <h2 class="font-serif text-5xl md:text-7xl mb-8 leading-tight">
                Let's Create <br>
                <span class="italic font-light">Something Beautiful</span>
            </h2>
            <p class="text-champagne-400 text-lg mb-12 max-w-2xl mx-auto">
                Available for editorial shoots, runway shows, brand campaigns, and creative collaborations worldwide.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="https://wa.me/1234567890?text=Hi%20Isabella,%20I'd%20like%20to%20discuss%20a%20project." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-12 py-5 text-sm font-bold uppercase tracking-[0.2em] text-noir transition-all duration-300 bg-gold hover:bg-white overflow-hidden">
                    <span class="relative z-10 flex items-center gap-3">
                        <i class="fab fa-whatsapp text-lg"></i>
                        Contact via WhatsApp
                    </span>
                </a>
            </div>

            <div class="mt-16 pt-8 border-t border-champagne-900/50 flex flex-col md:flex-row justify-center items-center gap-8 text-champagne-600 text-xs uppercase tracking-widest">
                <span>isabella@voss-management.com</span>
                <span class="hidden md:inline">•</span>
                <span>+1 (555) 123-4567</span>
                <span class="hidden md:inline">•</span>
                <span>New York / Paris / Milan</span>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-black py-12 border-t border-champagne-900/30">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-serif text-xl italic">Isabella Voss</div>
            
            <p class="text-champagne-700 text-xs uppercase tracking-widest">&copy; 2024 All Rights Reserved</p>

            <div class="flex gap-6 text-champagne-600">
                <a href="#" class="hover:text-gold transition-colors"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-gold transition-colors"><i class="fab fa-tiktok"></i></a>
                <a href="#" class="hover:text-gold transition-colors"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Custom Cursor
            const cursorDot = document.querySelector('.cursor-dot');
            const cursorOutline = document.querySelector('.cursor-outline');

            window.addEventListener('mousemove', (e) => {
                const posX = e.clientX;
                const posY = e.clientY;

                cursorDot.style.left = `${posX}px`;
                cursorDot.style.top = `${posY}px`;

                cursorOutline.animate({
                    left: `${posX}px`,
                    top: `${posY}px`
                }, { duration: 500, fill: "forwards" });
            });

            // Navbar Effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-noir/95', 'backdrop-blur-md');
                } else {
                    navbar.classList.remove('bg-noir/95', 'backdrop-blur-md');
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