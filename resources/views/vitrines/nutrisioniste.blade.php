<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Elena Vance | Holistic Nutrition & Wellness</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'sage': {
                            50: '#f4f7f4',
                            100: '#e3ebe3',
                            200: '#c5d8c5',
                            300: '#9cb99c',
                            400: '#749674',
                            500: '#547854',
                            600: '#3f5e3f',
                            700: '#344b34',
                            800: '#2b3d2b',
                            900: '#243224',
                        },
                        'clay': {
                            50: '#fdf8f6',
                            100: '#f2e8e5',
                            200: '#eaddd7',
                            300: '#e0cec7',
                            400: '#d2bab0',
                            500: '#a18072',
                            600: '#8a6a5c',
                            700: '#735448',
                            800: '#5c4239',
                            900: '#45332c',
                        },
                        'sand': '#f9f7f2'
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'serif'],
                        sans: ['"Montserrat"', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'fade-in-up': 'fadeInUp 1s ease-out forwards',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
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
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #f9f7f2;
        }
        ::-webkit-scrollbar-thumb {
            background: #9cb99c;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #749674;
        }

        /* Organic Blob Shapes */
        .blob-shape {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            transition: all 1s ease-in-out;
        }
        .blob-shape:hover {
            border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
        }

        /* Glassmorphism */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        /* Reveal on Scroll Classes */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Leaf Pattern Background */
        .bg-leaf-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239cb99c' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
<base target="_blank">
</head>
<body class="bg-sand text-clay-800 font-sans antialiased overflow-x-hidden selection:bg-sage-200 selection:text-sage-900">

    <!-- Navigation / Header -->
    <nav class="fixed w-full z-50 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center">
                    <span class="font-serif text-2xl font-semibold tracking-wide text-sage-800">Elena Vance.</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-8">
                        <a href="#about" class="hover:text-sage-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">About</a>
                        <a href="#philosophy" class="hover:text-sage-600 px-3 py-2 rounded-md text-sm font-medium transition-colors">Philosophy</a>
                        <a href="#connect" class="bg-sage-600 text-white hover:bg-sage-700 px-5 py-2.5 rounded-full text-sm font-medium transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Book Consultation</a>
                    </div>
                </div>
                <!-- Mobile menu button -->
                <div class="-mr-2 flex md:hidden">
                    <button type="button" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')" class="inline-flex items-center justify-center p-2 rounded-md text-sage-600 hover:text-sage-800 hover:bg-sage-100 focus:outline-none">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="hidden md:hidden bg-white/95 backdrop-blur-md absolute w-full border-b border-sage-100" id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#about" class="text-gray-600 hover:text-sage-600 block px-3 py-2 rounded-md text-base font-medium">About</a>
                <a href="#philosophy" class="text-gray-600 hover:text-sage-600 block px-3 py-2 rounded-md text-base font-medium">Philosophy</a>
                <a href="#connect" class="text-sage-600 font-bold block px-3 py-2 rounded-md text-base">Book Now</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <!-- Background Elements -->
        <div class="absolute top-0 left-0 w-full h-full bg-leaf-pattern opacity-50 z-0"></div>
        <div class="absolute top-[-10%] right-[-5%] w-[500px] h-[500px] bg-sage-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[600px] h-[600px] bg-clay-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-float" style="animation-delay: 2s;"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Text Content -->
            <div class="order-2 lg:order-1 text-center lg:text-left space-y-6 reveal active">
                <div class="inline-block px-4 py-1.5 rounded-full bg-sage-100 text-sage-800 text-xs font-semibold tracking-wider uppercase mb-2 border border-sage-200">
                    Holistic Nutritionist
                </div>
                <h1 class="font-serif text-5xl md:text-7xl font-light text-clay-900 leading-tight">
                    Nourish Your Body, <br>
                    <span class="italic text-sage-600">Heal Your Life.</span>
                </h1>
                <p class="text-lg md:text-xl text-clay-600 font-light max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Personalized nutrition strategies that go beyond diet sheets. I help you build a sustainable relationship with food through science-backed holistic practices.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start pt-4">
                    <a href="#connect" class="px-8 py-4 bg-sage-700 text-white rounded-full font-medium hover:bg-sage-800 transition-all shadow-lg hover:shadow-sage-300/50 transform hover:-translate-y-1 flex items-center justify-center gap-2">
                        <i class="fab fa-whatsapp text-lg"></i> Start Your Journey
                    </a>
                    <a href="#about" class="px-8 py-4 bg-white text-sage-800 border border-sage-200 rounded-full font-medium hover:bg-sage-50 transition-all flex items-center justify-center">
                        Learn More
                    </a>
                </div>
            </div>

            <!-- Image Content -->
            <div class="order-1 lg:order-2 flex justify-center relative reveal active" style="transition-delay: 200ms;">
                <div class="relative w-80 h-80 md:w-96 md:h-96 lg:w-[500px] lg:h-[500px]">
                    <!-- Decorative Circle -->
                    <div class="absolute inset-0 border-2 border-sage-300 rounded-full transform rotate-12 scale-95 opacity-50"></div>
                    <div class="absolute inset-0 border border-clay-300 rounded-full transform -rotate-6 scale-105 opacity-40"></div>
                    
                    <!-- Main Image Container with Blob Mask -->
                    <div class="w-full h-full overflow-hidden blob-shape shadow-2xl relative z-10 bg-gray-200">
                        <img src="https://images.unsplash.com/photo-1559839734-2b71ea197ec2?q=80&w=1000&auto=format&fit=crop" 
                             alt="Dr. Elena Vance - Nutritionist" 
                             class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-2xl shadow-xl z-20 animate-float" style="animation-delay: 1s;">
                        <div class="flex items-center gap-3">
                            <div class="bg-green-100 p-3 rounded-full text-green-600">
                                <i class="fas fa-leaf text-xl"></i>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 uppercase font-bold">Experience</p>
                                <p class="text-lg font-serif font-bold text-gray-800">10+ Years</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Philosophy Section -->
    <section id="philosophy" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 reveal">
                <h2 class="font-serif text-4xl text-clay-900 mb-4">My Philosophy</h2>
                <div class="w-24 h-1 bg-sage-400 mx-auto mb-6"></div>
                <p class="text-clay-600 text-lg">Food is medicine, but it is also joy, culture, and connection. My approach integrates modern nutritional science with mindful eating practices.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="group p-8 rounded-3xl bg-sage-50 hover:bg-sage-100 transition-colors duration-300 reveal">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-sage-600 shadow-sm mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-seedling text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-clay-900 mb-3">Whole Foods</h3>
                    <p class="text-clay-600 leading-relaxed">Prioritizing nutrient-dense, unprocessed ingredients that fuel your body at the cellular level.</p>
                </div>

                <!-- Card 2 -->
                <div class="group p-8 rounded-3xl bg-clay-50 hover:bg-clay-100 transition-colors duration-300 reveal" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-clay-600 shadow-sm mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-brain text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-clay-900 mb-3">Mindful Eating</h3>
                    <p class="text-clay-600 leading-relaxed">Cultivating awareness around hunger cues and emotional eating patterns for lasting change.</p>
                </div>

                <!-- Card 3 -->
                <div class="group p-8 rounded-3xl bg-orange-50 hover:bg-orange-100 transition-colors duration-300 reveal" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center text-orange-500 shadow-sm mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-heartbeat text-2xl"></i>
                    </div>
                    <h3 class="font-serif text-2xl text-clay-900 mb-3">Gut Health</h3>
                    <p class="text-clay-600 leading-relaxed">Healing from the inside out by focusing on microbiome diversity and digestive wellness.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Proof / Instagram Feed Simulation -->
    <section class="py-20 bg-sage-900 text-sage-50 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-12 flex justify-between items-end reveal">
            <div>
                <h2 class="font-serif text-3xl md:text-4xl mb-2">Daily Inspiration</h2>
                <p class="text-sage-300">Follow my journey on social media</p>
            </div>
            <a href="#" class="hidden md:inline-flex items-center gap-2 text-white hover:text-sage-200 transition-colors border-b border-sage-600 pb-1">
                @dr.elenavance <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>

        <!-- Horizontal Scrolling Gallery -->
        <div class="flex space-x-4 overflow-x-auto pb-8 px-4 hide-scrollbar snap-x">
            <!-- Item 1 -->
            <div class="snap-center shrink-0 w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Healthy Bowl">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-3xl text-white"></i>
                </div>
            </div>
            <!-- Item 2 -->
            <div class="snap-center shrink-0 w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Salad">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-3xl text-white"></i>
                </div>
            </div>
            <!-- Item 3 -->
            <div class="snap-center shrink-0 w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Smoothie">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-3xl text-white"></i>
                </div>
            </div>
            <!-- Item 4 -->
            <div class="snap-center shrink-0 w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1505253716362-afaea1d3d1af?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Ingredients">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-3xl text-white"></i>
                </div>
            </div>
             <!-- Item 5 -->
             <div class="snap-center shrink-0 w-64 h-64 md:w-80 md:h-80 rounded-2xl overflow-hidden relative group cursor-pointer">
                <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Meal Prep">
                <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                    <i class="fab fa-instagram text-3xl text-white"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Connect / CTA Section -->
    <section id="connect" class="py-24 relative bg-sand">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="glass-card rounded-[3rem] p-8 md:p-16 text-center shadow-2xl border-t border-white/50 relative overflow-hidden reveal">
                
                <!-- Decorative Elements inside card -->
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-sage-300 via-clay-300 to-sage-300"></div>
                <i class="fas fa-quote-left absolute top-8 left-8 text-6xl text-sage-200/50 -z-10"></i>

                <h2 class="font-serif text-4xl md:text-5xl text-clay-900 mb-6">Ready to transform your health?</h2>
                <p class="text-lg text-clay-600 mb-10 max-w-2xl mx-auto">
                    Book a free 15-minute discovery call. Let's discuss your goals and see if we are a good fit to work together.
                </p>

                <!-- WhatsApp CTA -->
                <a href="https://wa.me/1234567890?text=Hi%20Elena,%20I'm%20interested%20in%20learning%20more%20about%20your%20nutrition%20programs." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-8 py-4 text-lg font-medium text-white transition-all duration-200 bg-[#25D366] rounded-full hover:bg-[#128C7E] hover:shadow-lg hover:shadow-green-500/30 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#25D366]">
                    <span class="absolute inset-0 w-full h-full -mt-1 rounded-lg opacity-30 bg-gradient-to-b from-transparent via-transparent to-black"></span>
                    <i class="fab fa-whatsapp mr-3 text-2xl group-hover:scale-110 transition-transform"></i>
                    <span class="relative">Chat on WhatsApp</span>
                </a>

                <div class="mt-8 flex justify-center gap-6 text-clay-400">
                    <div class="flex items-center gap-2 text-sm">
                        <i class="fas fa-check-circle text-sage-500"></i> Free Discovery Call
                    </div>
                    <div class="flex items-center gap-2 text-sm">
                        <i class="fas fa-check-circle text-sage-500"></i> No Obligation
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-white border-t border-sage-100 pt-16 pb-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 mb-12">
                <!-- Brand -->
                <div class="text-center md:text-left">
                    <span class="font-serif text-2xl font-bold text-sage-800 block mb-4">Elena Vance.</span>
                    <p class="text-clay-500 text-sm leading-relaxed">
                        Helping you find balance, energy, and vitality through the power of whole foods.
                    </p>
                </div>

                <!-- Social Links -->
                <div class="flex flex-col items-center">
                    <h4 class="text-clay-900 font-semibold mb-4 uppercase tracking-widest text-xs">Connect</h4>
                    <div class="flex space-x-6">
                        <a href="#" class="text-clay-400 hover:text-sage-600 transition-colors transform hover:scale-110">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-clay-400 hover:text-blue-600 transition-colors transform hover:scale-110">
                            <i class="fab fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-clay-400 hover:text-black transition-colors transform hover:scale-110">
                            <i class="fab fa-tiktok text-xl"></i>
                        </a>
                        <a href="#" class="text-clay-400 hover:text-red-600 transition-colors transform hover:scale-110">
                            <i class="fab fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>

                <!-- Contact Info -->
                <div class="text-center md:text-right">
                    <h4 class="text-clay-900 font-semibold mb-4 uppercase tracking-widest text-xs">Contact</h4>
                    <p class="text-clay-500 text-sm">hello@elenavance.com</p>
                    <p class="text-clay-500 text-sm">Los Angeles, CA</p>
                </div>
            </div>

            <div class="border-t border-sage-100 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-clay-400 text-xs">&copy; 2023 Elena Vance Nutrition. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <!-- Minimal links allowed in footer structure, kept invisible or styled subtly if needed, but user asked for minimal footer -->
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Interactions -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            // 1. Navbar Scroll Effect
            const navbar = document.getElementById('navbar');
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    navbar.classList.add('bg-white/90', 'backdrop-blur-md', 'shadow-sm');
                } else {
                    navbar.classList.remove('bg-white/90', 'backdrop-blur-md', 'shadow-sm');
                }
            });

            // 2. Intersection Observer for Scroll Reveals
            const observerOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target); // Only animate once
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal').forEach(el => {
                observer.observe(el);
            });

            // 3. Smooth Scroll for Anchor Links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('href');
                    if(targetId === '#') return;
                    
                    const targetElement = document.querySelector(targetId);
                    if(targetElement){
                        window.scrollTo({
                            top: targetElement.offsetTop - 80, // Offset for fixed header
                            behavior: 'smooth'
                        });
                        // Close mobile menu if open
                        document.getElementById('mobile-menu').classList.add('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>