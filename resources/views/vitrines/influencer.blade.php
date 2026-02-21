<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wilder Trails | Adventure & Exploration</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'earth': {
                            50: '#f7f5f3',
                            100: '#e8e4e0',
                            200: '#d4ccc4',
                            300: '#b8a99c',
                            400: '#9c8574',
                            500: '#856b5a',
                            600: '#6b5547',
                            700: '#57453b',
                            800: '#4a3b33',
                            900: '#40342e',
                        },
                        'forest': {
                            50: '#f2fcf4',
                            100: '#e1f8e6',
                            200: '#c3eccd',
                            300: '#96daa8',
                            400: '#62bf7d',
                            500: '#3ea260',
                            600: '#2d824b',
                            700: '#26673e',
                            800: '#225234',
                            900: '#1d442d',
                        },
                        'rust': '#c45c26',
                        'sand': '#d4a574',
                    },
                    fontFamily: {
                        display: ['"Oswald"', 'sans-serif'],
                        body: ['"Inter"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 3s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'ken-burns': 'kenBurns 20s ease-out infinite alternate',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        kenBurns: {
                            '0%': { transform: 'scale(1)' },
                            '100%': { transform: 'scale(1.1)' },
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
            background: #1d442d;
        }
        ::-webkit-scrollbar-thumb {
            background: #3ea260;
            border-radius: 4px;
        }

        /* Texture Overlay */
        .texture-overlay {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
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

        /* Clip Path for diagonal sections */
        .clip-diagonal {
            clip-path: polygon(0 0, 100% 5%, 100% 100%, 0 95%);
        }

        /* Hover Card Effect */
        .adventure-card {
            transition: all 0.4s ease;
        }
        .adventure-card:hover {
            transform: translateY(-8px);
        }
        .adventure-card:hover .card-image {
            transform: scale(1.1);
        }

        /* Compass Animation */
        @keyframes compass-spin {
            0% { transform: rotate(0deg); }
            25% { transform: rotate(15deg); }
            75% { transform: rotate(-15deg); }
            100% { transform: rotate(0deg); }
        }
        .compass-icon:hover {
            animation: compass-spin 2s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-earth-900 text-earth-50 font-body antialiased overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <i class="fas fa-compass text-rust text-2xl compass-icon cursor-pointer"></i>
                    <span class="font-display text-2xl font-bold tracking-widest uppercase">Wilder<span class="text-rust">Trails</span></span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#expeditions" class="text-sm font-medium hover:text-rust transition-colors uppercase tracking-wider">Expeditions</a>
                    <a href="#social" class="text-sm font-medium hover:text-rust transition-colors uppercase tracking-wider">Follow</a>
                    <a href="#gear" class="text-sm font-medium hover:text-rust transition-colors uppercase tracking-wider">Gear</a>
                    <a href="#contact" class="px-6 py-2.5 bg-rust text-white rounded-sm font-bold hover:bg-orange-700 transition-all transform hover:scale-105 uppercase tracking-wider text-sm">
                        Join Adventure
                    </a>
                </div>

                <button class="md:hidden text-white text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-earth-800 absolute w-full border-t border-earth-700">
            <div class="px-4 pt-2 pb-6 space-y-1">
                <a href="#expeditions" class="block px-3 py-3 text-earth-200 hover:text-rust uppercase">Expeditions</a>
                <a href="#social" class="block px-3 py-3 text-earth-200 hover:text-rust uppercase">Follow</a>
                <a href="#contact" class="block px-3 py-3 text-rust font-bold uppercase">Join Adventure</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image with Ken Burns -->
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?auto=format&fit=crop&w=2000&q=80" 
                 class="w-full h-full object-cover animate-ken-burns" alt="Mountain Landscape">
            <div class="absolute inset-0 bg-gradient-to-b from-earth-900/60 via-earth-900/40 to-earth-900"></div>
            <div class="absolute inset-0 texture-overlay"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-sm rounded-full mb-6 reveal active">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                <span class="text-xs font-bold tracking-widest uppercase text-earth-100">Currently Exploring: Patagonia</span>
            </div>
            
            <h1 class="font-display text-6xl md:text-8xl lg:text-9xl font-bold uppercase leading-none mb-6 tracking-tight reveal active" style="transition-delay: 100ms;">
                Chase The <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-rust to-orange-400">Horizon</span>
            </h1>
            
            <p class="text-lg md:text-xl text-earth-200 max-w-2xl mx-auto mb-10 font-light reveal active" style="transition-delay: 200ms;">
                Documenting the world's most remote corners. From alpine peaks to desert canyons, I share the raw, unfiltered beauty of our planet.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center reveal active" style="transition-delay: 300ms;">
                <a href="#expeditions" class="group px-8 py-4 bg-rust text-white font-bold uppercase tracking-wider hover:bg-orange-700 transition-all flex items-center justify-center gap-3">
                    View Expeditions
                    <i class="fas fa-arrow-down group-hover:translate-y-1 transition-transform"></i>
                </a>
                <a href="#contact" class="px-8 py-4 border-2 border-white/30 text-white font-bold uppercase tracking-wider hover:bg-white/10 transition-all backdrop-blur-sm">
                    Collaborate
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce text-white/50">
            <i class="fas fa-chevron-down text-2xl"></i>
        </div>
    </header>

    <!-- SOCIAL SECTION - SECOND POSITION -->
    <section id="social" class="relative py-24 bg-earth-800 clip-diagonal -mt-20 pt-32">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Content -->
                <div class="reveal">
                    <h2 class="font-display text-5xl md:text-6xl font-bold uppercase mb-6">
                        Join The <span class="text-rust">Tribe</span>
                    </h2>
                    <p class="text-earth-300 text-lg mb-8 leading-relaxed">
                        2M+ adventurers follow the journey. Get daily inspiration, behind-the-scenes access, and real-time updates from the trail.
                    </p>
                    
                    <!-- Social Links - Large Format -->
                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="group flex items-center gap-4 p-4 bg-earth-700/50 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-600 rounded-lg transition-all">
                            <i class="fab fa-instagram text-3xl text-white"></i>
                            <div>
                                <p class="font-bold text-white">Instagram</p>
                                <p class="text-sm text-earth-300">@wildertrails</p>
                            </div>
                        </a>
                        
                        <a href="#" class="group flex items-center gap-4 p-4 bg-earth-700/50 hover:bg-black rounded-lg transition-all">
                            <i class="fab fa-tiktok text-3xl text-white"></i>
                            <div>
                                <p class="font-bold text-white">TikTok</p>
                                <p class="text-sm text-earth-300">@wildertrails</p>
                            </div>
                        </a>
                        
                        <a href="#" class="group flex items-center gap-4 p-4 bg-earth-700/50 hover:bg-red-600 rounded-lg transition-all">
                            <i class="fab fa-youtube text-3xl text-white"></i>
                            <div>
                                <p class="font-bold text-white">YouTube</p>
                                <p class="text-sm text-earth-300">Wilder Trails</p>
                            </div>
                        </a>
                        
                        <a href="#" class="group flex items-center gap-4 p-4 bg-earth-700/50 hover:bg-blue-600 rounded-lg transition-all">
                            <i class="fab fa-facebook text-3xl text-white"></i>
                            <div>
                                <p class="font-bold text-white">Facebook</p>
                                <p class="text-sm text-earth-300">Community</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual Grid -->
                <div class="grid grid-cols-2 gap-4 reveal">
                    <div class="space-y-4 mt-8">
                        <img src="https://images.unsplash.com/photo-1551632811-561732d1e306?auto=format&fit=crop&w=400&q=80" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform" alt="Hiking">
                        <img src="https://images.unsplash.com/photo-1533240332313-0db49b459ad6?auto=format&fit=crop&w=400&q=80" class="w-full h-64 object-cover rounded-lg hover:scale-105 transition-transform" alt="Camping">
                    </div>
                    <div class="space-y-4">
                        <img src="https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?auto=format&fit=crop&w=400&q=80" class="w-full h-64 object-cover rounded-lg hover:scale-105 transition-transform" alt="Tent">
                        <img src="https://images.unsplash.com/photo-1526772662000-3f88f10405ff?auto=format&fit=crop&w=400&q=80" class="w-full h-48 object-cover rounded-lg hover:scale-105 transition-transform" alt="Mountains">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Expeditions Grid -->
    <section id="expeditions" class="py-24 bg-earth-900 relative">
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-rust to-transparent"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 reveal">
                <div>
                    <p class="text-rust font-bold uppercase tracking-widest mb-2">Latest Adventures</p>
                    <h2 class="font-display text-4xl md:text-5xl font-bold uppercase">Expedition Log</h2>
                </div>
                <a href="#" class="hidden md:flex items-center gap-2 text-earth-400 hover:text-white transition-colors mt-4 md:mt-0">
                    View All Logs <i class="fas fa-arrow-right"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <article class="adventure-card group cursor-pointer reveal">
                    <div class="relative h-80 overflow-hidden rounded-lg mb-4">
                        <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?auto=format&fit=crop&w=800&q=80" 
                             class="card-image w-full h-full object-cover transition-transform duration-700" alt="Alpine">
                        <div class="absolute top-4 left-4 bg-rust text-white text-xs font-bold px-3 py-1 rounded-sm uppercase">
                            Extreme
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-t from-earth-900/90 to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-6">
                            <p class="text-sm text-earth-200">Elevation: 4,200m • Duration: 14 days</p>
                        </div>
                    </div>
                    <h3 class="font-display text-2xl font-bold uppercase mb-2 group-hover:text-rust transition-colors">Alpine Traverse</h3>
                    <p class="text-earth-400 text-sm line-clamp-2">Solo crossing of the Swiss Alps via the Haute Route. Glaciers, storms, and solitude.</p>
                </article>

                <!-- Card 2 -->
                <article class="adventure-card group cursor-pointer reveal" style="transition-delay: 100ms;">
                    <div class="relative h-80 overflow-hidden rounded-lg mb-4">
                        <img src="https://images.unsplash.com/photo-1504280506541-aca10509905c?auto=format&fit=crop&w=800&q=80" 
                             class="card-image w-full h-full object-cover transition-transform duration-700" alt="Desert">
                        <div class="absolute top-4 left-4 bg-sand text-earth-900 text-xs font-bold px-3 py-1 rounded-sm uppercase">
                            Desert
                        </div>
                    </div>
                    <h3 class="font-display text-2xl font-bold uppercase mb-2 group-hover:text-rust transition-colors">Sahara Crossing</h3>
                    <p class="text-earth-400 text-sm line-clamp-2">100km self-supported trek through the Moroccan desert. Stars, sand, and silence.</p>
                </article>

                <!-- Card 3 -->
                <article class="adventure-card group cursor-pointer reveal" style="transition-delay: 200ms;">
                    <div class="relative h-80 overflow-hidden rounded-lg mb-4">
                        <img src="https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=800&q=80" 
                             class="card-image w-full h-full object-cover transition-transform duration-700" alt="Ocean">
                        <div class="absolute top-4 left-4 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-sm uppercase">
                            Water
                        </div>
                    </div>
                    <h3 class="font-display text-2xl font-bold uppercase mb-2 group-hover:text-rust transition-colors">Pacific Paddle</h3>
                    <p class="text-earth-400 text-sm line-clamp-2">Kayaking the fjords of Norway. Whales, waterfalls, and wild camping.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- Stats / Milestones -->
    <section class="py-20 bg-earth-800 border-y border-earth-700">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center reveal">
                <div>
                    <p class="font-display text-4xl md:text-5xl font-bold text-rust mb-2">47</p>
                    <p class="text-earth-400 text-sm uppercase tracking-wider">Countries</p>
                </div>
                <div>
                    <p class="font-display text-4xl md:text-5xl font-bold text-rust mb-2">120+</p>
                    <p class="text-earth-400 text-sm uppercase tracking-wider">Summits</p>
                </div>
                <div>
                    <p class="font-display text-4xl md:text-5xl font-bold text-rust mb-2">2M</p>
                    <p class="text-earth-400 text-sm uppercase tracking-wider">Followers</p>
                </div>
                <div>
                    <p class="font-display text-4xl md:text-5xl font-bold text-rust mb-2">500k</p>
                    <p class="text-earth-400 text-sm uppercase tracking-wider">Miles Hiked</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section id="contact" class="relative py-32 overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0">
            <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?auto=format&fit=crop&w=2000&q=80" 
                 class="w-full h-full object-cover opacity-30" alt="Forest">
            <div class="absolute inset-0 bg-gradient-to-t from-earth-900 via-earth-900/80 to-earth-900/60"></div>
        </div>

        <div class="relative z-10 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center reveal">
            <i class="fas fa-mountain text-rust text-5xl mb-6 animate-float"></i>
            <h2 class="font-display text-5xl md:text-7xl font-bold uppercase mb-6">Let's Explore <span class="text-rust">Together</span></h2>
            <p class="text-xl text-earth-300 mb-12 max-w-2xl mx-auto">
                Brand partnerships, guided expeditions, or just want to share a trail recommendation? Drop me a message.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="https://wa.me/1234567890?text=Hey!%20Saw%20your%20adventure%20page.%20Let's%20connect!" target="_blank" 
                   class="group relative inline-flex items-center justify-center px-10 py-5 text-lg font-bold text-white transition-all duration-200 bg-[#25D366] rounded-lg hover:bg-[#128C7E] hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#25C366] focus:ring-offset-earth-900 shadow-lg shadow-green-900/50">
                    <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                    CHAT ON WHATSAPP
                </a>
            </div>

            <p class="mt-8 text-earth-500 text-sm">Usually responds within 24 hours</p>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-black py-12 border-t border-earth-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <i class="fas fa-compass text-rust"></i>
                <span class="font-display text-xl font-bold uppercase">Wilder Trails</span>
            </div>
            
            <p class="text-earth-600 text-sm uppercase tracking-wider">&copy; 2024 Wilder Trails. Keep Exploring.</p>

            <div class="flex gap-6 text-earth-500">
                <a href="#" class="hover:text-rust transition-colors"><i class="fab fa-instagram"></i></a>
                <a href="#" class="hover:text-rust transition-colors"><i class="fab fa-youtube"></i></a>
                <a href="#" class="hover:text-rust transition-colors"><i class="fab fa-tiktok"></i></a>
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
                    navbar.classList.add('bg-earth-900/95', 'backdrop-blur-md', 'shadow-lg');
                } else {
                    navbar.classList.remove('bg-earth-900/95', 'backdrop-blur-md', 'shadow-lg');
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