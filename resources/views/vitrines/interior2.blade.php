<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aura Interiors | Transforming Spaces</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'stone': {
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
                        },
                        'sage': '#9ca3af',
                        'terracotta': '#c2410c',
                        'cream': '#fef3c7',
                        'charcoal': '#1f2937',
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['"DM Sans"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out infinite 3s',
                        'slide': 'slide 20s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        slide: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
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
            background: #fafaf9;
        }
        ::-webkit-scrollbar-thumb {
            background: #d6d3d1;
            border-radius: 4px;
        }

        /* Subtle Texture */
        .texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.02'/%3E%3C/svg%3E");
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

        /* Service Card Hover */
        .service-card {
            transition: all 0.4s ease;
        }
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
        }

        /* Elegant Underline */
        .elegant-underline {
            position: relative;
        }
        .elegant-underline::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 1px;
            background: #c2410c;
            transition: width 0.4s ease;
        }
        .elegant-underline:hover::after {
            width: 100%;
        }

        /* Room Shape */
        .room-shape {
            clip-path: polygon(10% 0%, 100% 0%, 100% 90%, 90% 100%, 0% 100%, 0% 10%);
        }
    </style>
</head>
<body class="bg-stone-50 text-stone-800 font-sans antialiased overflow-x-hidden selection:bg-terracotta selection:text-white texture">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-24">
                <div class="flex-shrink-0">
                    <span class="font-serif text-3xl font-light tracking-wide text-stone-900">Aura <span class="italic text-terracotta">Interiors</span></span>
                </div>
                
                <div class="hidden md:flex items-center space-x-12">
                    <a href="#services" class="text-sm font-medium text-stone-600 hover:text-terracotta transition-colors tracking-wide elegant-underline">Services</a>
                    <a href="#social" class="text-sm font-medium text-stone-600 hover:text-terracotta transition-colors tracking-wide elegant-underline">Inspiration</a>
                    <a href="#about" class="text-sm font-medium text-stone-600 hover:text-terracotta transition-colors tracking-wide elegant-underline">About</a>
                    <a href="#contact" class="px-8 py-3 bg-stone-900 text-white rounded-full font-medium hover:bg-terracotta transition-all">
                        Book Consultation
                    </a>
                </div>

                <button class="md:hidden text-stone-800 text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white/95 backdrop-blur-md absolute w-full shadow-lg">
            <div class="px-6 py-8 space-y-4 text-center">
                <a href="#services" class="block text-stone-600 hover:text-terracotta">Services</a>
                <a href="#social" class="block text-stone-600 hover:text-terracotta">Inspiration</a>
                <a href="#contact" class="block text-terracotta font-medium">Book Consultation</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-24">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-gradient-to-b from-stone-100 via-stone-50 to-stone-100"></div>
        <div class="absolute top-20 right-20 w-96 h-96 bg-terracotta/5 rounded-full filter blur-3xl animate-float"></div>
        <div class="absolute bottom-20 left-20 w-72 h-72 bg-stone-300/30 rounded-full filter blur-3xl animate-float-delayed"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left Content -->
            <div class="text-center lg:text-left space-y-8 reveal active">
                <div class="inline-flex items-center gap-2 px-4 py-2 bg-white shadow-sm rounded-full text-sm text-stone-600">
                    <span class="w-2 h-2 rounded-full bg-terracotta"></span>
                    <span>Available for New Projects</span>
                </div>

                <h1 class="font-serif text-5xl md:text-6xl lg:text-7xl leading-tight text-stone-900">
                    Designing <br>
                    <span class="italic text-terracotta">Timeless</span> <br>
                    Living Spaces
                </h1>

                <p class="text-lg text-stone-600 max-w-md mx-auto lg:mx-0 leading-relaxed">
                    Creating harmonious interiors that blend functionality with aesthetic beauty. Where every detail tells your story.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#services" class="px-8 py-4 bg-stone-900 text-white rounded-full font-medium hover:bg-terracotta transition-all flex items-center justify-center gap-2 shadow-lg">
                        Explore Services <i class="fas fa-arrow-right text-sm"></i>
                    </a>
                    <a href="#contact" class="px-8 py-4 border-2 border-stone-300 text-stone-700 rounded-full font-medium hover:border-terracotta hover:text-terracotta transition-all flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp"></i> Get in Touch
                    </a>
                </div>

                <!-- Stats -->
                <div class="flex gap-12 mt-12 justify-center lg:justify-start pt-8 border-t border-stone-200">
                    <div>
                        <p class="font-serif text-3xl text-stone-900">150+</p>
                        <p class="text-xs text-stone-500 uppercase tracking-wider mt-1">Projects</p>
                    </div>
                    <div>
                        <p class="font-serif text-3xl text-stone-900">12</p>
                        <p class="text-xs text-stone-500 uppercase tracking-wider mt-1">Years</p>
                    </div>
                    <div>
                        <p class="font-serif text-3xl text-stone-900">35</p>
                        <p class="text-xs text-stone-500 uppercase tracking-wider mt-1">Awards</p>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="relative flex justify-center reveal active" style="transition-delay: 200ms;">
                <div class="relative w-full max-w-lg">
                    <!-- Decorative Frame -->
                    <div class="absolute -top-4 -left-4 w-full h-full border-2 border-stone-300 room-shape"></div>
                    
                    <!-- Main Visual -->
                    <div class="relative bg-white p-4 shadow-2xl room-shape">
                        <div class="aspect-[4/5] bg-gradient-to-br from-stone-200 via-stone-100 to-cream relative overflow-hidden">
                            <!-- Abstract Room Representation -->
                            <div class="absolute inset-8 bg-stone-300/50">
                                <!-- Floor -->
                                <div class="absolute bottom-0 w-full h-1/3 bg-stone-400/30"></div>
                                <!-- Wall Left -->
                                <div class="absolute left-0 w-1/3 h-2/3 bg-stone-300/40"></div>
                                <!-- Wall Right -->
                                <div class="absolute right-0 w-1/2 h-full bg-stone-200/50"></div>
                                <!-- Window -->
                                <div class="absolute top-8 left-1/2 -translate-x-1/2 w-32 h-40 bg-cream/60 border-4 border-stone-400/30">
                                    <div class="absolute top-1/2 w-full h-px bg-stone-400/30"></div>
                                    <div class="absolute left-1/2 h-full w-px bg-stone-400/30"></div>
                                </div>
                                <!-- Plant -->
                                <div class="absolute bottom-8 right-8 w-16 h-24 bg-sage/40 rounded-full"></div>
                                <!-- Furniture -->
                                <div class="absolute bottom-12 left-1/2 -translate-x-1/2 w-48 h-16 bg-terracotta/20 rounded-sm"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -right-6 bg-white px-6 py-4 shadow-xl rounded-lg animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-terracotta/10 rounded-full flex items-center justify-center text-terracotta">
                                <i class="fas fa-home"></i>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-stone-900">Full Service</p>
                                <p class="text-xs text-stone-500">Design to Installation</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. SOCIAL LINKS SECTION -->
    <section id="social" class="relative py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                
                <!-- Left: Content -->
                <div class="reveal">
                    <p class="text-terracotta text-sm uppercase tracking-[0.3em] mb-4">Get Inspired</p>
                    <h2 class="font-serif text-4xl md:text-5xl text-stone-900 mb-6">Follow Our Design Journey</h2>
                    <p class="text-stone-600 mb-10 max-w-md leading-relaxed">
                        Daily doses of interior inspiration, behind-the-scenes from our projects, and expert tips for your space.
                    </p>

                    <div class="grid grid-cols-2 gap-4">
                        <a href="#" class="group p-6 bg-stone-50 rounded-xl hover:bg-stone-100 transition-all border border-stone-200 hover:border-terracotta/30">
                            <i class="fab fa-instagram text-2xl text-stone-600 group-hover:text-terracotta mb-3 block transition-colors"></i>
                            <p class="font-medium text-stone-900">Instagram</p>
                            <p class="text-sm text-stone-500">@aura.interiors</p>
                        </a>
                        
                        <a href="#" class="group p-6 bg-stone-50 rounded-xl hover:bg-stone-100 transition-all border border-stone-200 hover:border-terracotta/30">
                            <i class="fab fa-pinterest text-2xl text-stone-600 group-hover:text-terracotta mb-3 block transition-colors"></i>
                            <p class="font-medium text-stone-900">Pinterest</p>
                            <p class="text-sm text-stone-500">Mood Boards</p>
                        </a>
                        
                        <a href="#" class="group p-6 bg-stone-50 rounded-xl hover:bg-stone-100 transition-all border border-stone-200 hover:border-terracotta/30">
                            <i class="fab fa-houzz text-2xl text-stone-600 group-hover:text-terracotta mb-3 block transition-colors"></i>
                            <p class="font-medium text-stone-900">Houzz</p>
                            <p class="text-sm text-stone-500">Project Gallery</p>
                        </a>
                        
                        <a href="#" class="group p-6 bg-stone-50 rounded-xl hover:bg-stone-100 transition-all border border-stone-200 hover:border-terracotta/30">
                            <i class="fab fa-youtube text-2xl text-stone-600 group-hover:text-terracotta mb-3 block transition-colors"></i>
                            <p class="font-medium text-stone-900">YouTube</p>
                            <p class="text-sm text-stone-500">Room Makeovers</p>
                        </a>
                    </div>
                </div>

                <!-- Right: Visual Grid -->
                <div class="grid grid-cols-2 gap-4 reveal">
                    <div class="space-y-4 mt-8">
                        <div class="aspect-[3/4] bg-gradient-to-br from-stone-300 to-stone-400 rounded-lg shadow-md"></div>
                        <div class="aspect-square bg-gradient-to-br from-terracotta/20 to-cream rounded-lg shadow-md"></div>
                    </div>
                    <div class="space-y-4">
                        <div class="aspect-square bg-gradient-to-br from-cream to-stone-200 rounded-lg shadow-md"></div>
                        <div class="aspect-[3/4] bg-gradient-to-br from-stone-400 to-stone-500 rounded-lg shadow-md"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHAT WE DO / SERVICES SECTION -->
    <section id="services" class="relative py-32 bg-stone-100">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16 reveal">
                <p class="text-terracotta text-sm uppercase tracking-[0.3em] mb-4">What We Offer</p>
                <h2 class="font-serif text-4xl md:text-5xl text-stone-900 mb-4">Our Services</h2>
                <p class="text-stone-600 max-w-2xl mx-auto">Comprehensive interior design solutions tailored to your lifestyle, preferences, and budget.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Service 1 -->
                <div class="service-card bg-white p-8 rounded-2xl shadow-sm border border-stone-200 reveal">
                    <div class="w-14 h-14 bg-terracotta/10 rounded-xl flex items-center justify-center text-terracotta mb-6">
                        <i class="fas fa-compass-drafting text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-stone-900 mb-3">Space Planning</h3>
                    <p class="text-stone-600 text-sm leading-relaxed mb-4">
                        Optimized floor plans that maximize functionality and flow for your unique space requirements.
                    </p>
                    <span class="text-terracotta text-sm font-medium">Starting at $2,500</span>
                </div>

                <!-- Service 2 -->
                <div class="service-card bg-white p-8 rounded-2xl shadow-sm border border-stone-200 reveal" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 bg-stone-800/10 rounded-xl flex items-center justify-center text-stone-800 mb-6">
                        <i class="fas fa-couch text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-stone-900 mb-3">Full Interior Design</h3>
                    <p class="text-stone-600 text-sm leading-relaxed mb-4">
                        End-to-end design service from concept to completion, including furniture, fixtures, and styling.
                    </p>
                    <span class="text-terracotta text-sm font-medium">Starting at $8,000</span>
                </div>

                <!-- Service 3 -->
                <div class="service-card bg-white p-8 rounded-2xl shadow-sm border border-stone-200 reveal" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 bg-sage/20 rounded-xl flex items-center justify-center text-stone-600 mb-6">
                        <i class="fas fa-leaf text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-stone-900 mb-3">Sustainable Design</h3>
                    <p class="text-stone-600 text-sm leading-relaxed mb-4">
                        Eco-conscious interiors using sustainable materials, vintage pieces, and energy-efficient solutions.
                    </p>
                    <span class="text-terracotta text-sm font-medium">Custom Quote</span>
                </div>

                <!-- Service 4 -->
                <div class="service-card bg-white p-8 rounded-2xl shadow-sm border border-stone-200 reveal">
                    <div class="w-14 h-14 bg-cream/50 rounded-xl flex items-center justify-center text-amber-600 mb-6">
                        <i class="fas fa-lightbulb text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-stone-900 mb-3">Lighting Design</h3>
                    <p class="text-stone-600 text-sm leading-relaxed mb-4">
                        Layered lighting schemes that create ambiance, highlight features, and enhance functionality.
                    </p>
                    <span class="text-terracotta text-sm font-medium">Starting at $1,800</span>
                </div>

                <!-- Service 5 -->
                <div class="service-card bg-white p-8 rounded-2xl shadow-sm border border-stone-200 reveal" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 bg-stone-300/30 rounded-xl flex items-center justify-center text-stone-600 mb-6">
                        <i class="fas fa-palette text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-stone-900 mb-3">Color Consultation</h3>
                    <p class="text-stone-600 text-sm leading-relaxed mb-4">
                        Expert color schemes that reflect your personality and create the desired atmosphere in every room.
                    </p>
                    <span class="text-terracotta text-sm font-medium">Starting at $800</span>
                </div>

                <!-- Service 6 -->
                <div class="service-card bg-white p-8 rounded-2xl shadow-sm border border-stone-200 reveal" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 bg-terracotta/10 rounded-xl flex items-center justify-center text-terracotta mb-6">
                        <i class="fas fa-home text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-stone-900 mb-3">Virtual Design</h3>
                    <p class="text-stone-600 text-sm leading-relaxed mb-4">
                        Remote design services with 3D visualizations, shoppable mood boards, and detailed implementation guides.
                    </p>
                    <span class="text-terracotta text-sm font-medium">Starting at $1,200</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-32 overflow-hidden bg-stone-900">
        <!-- Decorative Elements -->
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-terracotta to-transparent"></div>
        <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-terracotta/10 rounded-full filter blur-[100px]"></div>
        <div class="absolute bottom-1/4 right-1/4 w-64 h-64 bg-stone-700/20 rounded-full filter blur-[80px]"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12 text-center reveal">
            <h2 class="font-serif text-5xl md:text-6xl text-white mb-6">Ready to Transform Your Space?</h2>
            <p class="text-stone-300 text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
                Let's discuss your vision and create a home that truly reflects who you are. Book your complimentary consultation today.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                <a href="https://wa.me/1234567890?text=Hi!%20I'd%20like%20to%20schedule%20a%20design%20consultation." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-12 py-5 text-lg font-medium text-stone-900 transition-all duration-300 bg-white rounded-full hover:bg-terracotta hover:text-white hover:scale-105 shadow-xl">
                    <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                    Schedule Consultation
                </a>
                
                <div class="text-white text-left">
                    <p class="text-sm text-stone-400">Or email us at</p>
                    <p class="text-xl font-medium">hello@aurainteriors.com</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 pt-8 border-t border-stone-800 text-stone-400 text-sm">
                <div>
                    <i class="fas fa-phone text-terracotta mb-2 block text-lg"></i>
                    <p>+1 (555) 234-5678</p>
                </div>
                <div>
                    <i class="fas fa-map-marker-alt text-terracotta mb-2 block text-lg"></i>
                    <p>123 Design District, NY</p>
                </div>
                <div>
                    <i class="fas fa-clock text-terracotta mb-2 block text-lg"></i>
                    <p>Mon - Sat: 9AM - 6PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER WITHOUT LINKS -->
    <footer class="bg-stone-950 border-t border-stone-900 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="font-serif text-2xl font-light text-white">
                Aura <span class="italic text-terracotta">Interiors</span>
            </div>
            
            <p class="text-stone-500 text-sm">
                &copy; 2024 Aura Interiors. Creating beautiful spaces since 2012.
            </p>

            <div class="flex items-center gap-2 text-stone-500 text-sm">
                <i class="fas fa-heart text-terracotta"></i>
                <span>Designed with passion</span>
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