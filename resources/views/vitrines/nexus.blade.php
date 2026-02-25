<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEXUS | Digital Innovation Studio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'void': '#050505',
                        'ink': '#0a0a0a',
                        'mist': '#141414',
                        'neon': '#00f0ff',
                        'pulse': '#ff006e',
                        'volt': '#8338ec',
                    },
                    fontFamily: {
                        sans: ['"Space Grotesk"', 'sans-serif'],
                    },
                    animation: {
                        'gradient': 'gradient 8s ease infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                    },
                    keyframes: {
                        gradient: {
                            '0%, 100%': { backgroundPosition: '0% 50%' },
                            '50%': { backgroundPosition: '100% 50%' },
                        },
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px #00f0ff, 0 0 10px #00f0ff' },
                            '100%': { boxShadow: '0 0 20px #00f0ff, 0 0 40px #00f0ff' },
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
            background: #050505;
        }
        ::-webkit-scrollbar-thumb {
            background: #1a1a1a;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00f0ff;
        }

        /* Grid Background */
        .bg-grid {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #00f0ff 0%, #8338ec 50%, #ff006e 100%);
            background-size: 200% 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradient 8s ease infinite;
        }

        /* Glass Effect */
        .glass {
            background: rgba(255, 255, 255, 0.02);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
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

        /* Neon Border */
        .neon-border {
            position: relative;
        }
        .neon-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            background: linear-gradient(45deg, #00f0ff, #8338ec, #ff006e);
            border-radius: inherit;
            z-index: -1;
            opacity: 0;
            transition: opacity 0.3s;
        }
        .neon-border:hover::before {
            opacity: 1;
        }

        /* Card Hover */
        .service-card {
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .service-card:hover {
            transform: translateY(-8px);
            border-color: rgba(0, 240, 255, 0.3);
        }

        /* Button Glow */
        .btn-glow {
            position: relative;
            overflow: hidden;
        }
        .btn-glow::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
            transform: rotate(45deg);
            transition: all 0.5s;
        }
        .btn-glow:hover::after {
            transform: rotate(45deg) translate(50%, 50%);
        }
    </style>
</head>
<body class="bg-void text-white font-sans antialiased overflow-x-hidden selection:bg-neon selection:text-void">

    <!-- Background Grid -->
    <div class="fixed inset-0 bg-grid pointer-events-none z-0"></div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <span class="text-2xl font-bold tracking-tighter">
                        NEXUS<span class="text-neon">.</span>
                    </span>
                </div>
                
                <div class="hidden md:flex items-center space-x-10">
                    <a href="#services" class="text-sm text-gray-400 hover:text-neon transition-colors tracking-wide">Services</a>
                    <a href="#social" class="text-sm text-gray-400 hover:text-neon transition-colors tracking-wide">Connect</a>
                    <a href="#contact" class="px-6 py-2.5 border border-white/20 text-sm hover:border-neon hover:text-neon transition-all">
                        Start Project
                    </a>
                </div>

                <button class="md:hidden text-white text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-ink absolute w-full border-b border-white/10">
            <div class="px-6 py-8 space-y-4 text-center">
                <a href="#services" class="block text-gray-400 hover:text-neon">Services</a>
                <a href="#social" class="block text-gray-400 hover:text-neon">Connect</a>
                <a href="#contact" class="block text-neon">Start Project</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <!-- Animated Background Elements -->
        <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-neon/20 rounded-full filter blur-[128px] animate-pulse-slow"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-volt/20 rounded-full filter blur-[128px] animate-pulse-slow" style="animation-delay: 2s;"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-12 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass mb-8 reveal active">
                <span class="w-2 h-2 rounded-full bg-neon animate-pulse"></span>
                <span class="text-xs uppercase tracking-widest text-gray-400">Available for new projects</span>
            </div>

            <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold leading-none mb-8 reveal active" style="transition-delay: 100ms;">
                We Craft <br>
                <span class="gradient-text italic font-light">Digital</span> Experiences
            </h1>

            <p class="text-lg md:text-xl text-gray-400 max-w-2xl mx-auto mb-12 leading-relaxed reveal active" style="transition-delay: 200ms;">
                A creative studio blending design, technology, and strategy to build brands that stand out in the digital landscape.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center reveal active" style="transition-delay: 300ms;">
                <a href="#services" class="px-8 py-4 bg-white text-void font-semibold hover:bg-neon transition-all flex items-center justify-center gap-2 btn-glow">
                    Explore Services
                    <i class="fas fa-arrow-down"></i>
                </a>
                <a href="#contact" class="px-8 py-4 border border-white/20 hover:border-neon hover:text-neon transition-all flex items-center justify-center gap-2">
                    Get in Touch
                </a>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-gray-500 reveal active" style="transition-delay: 500ms;">
                <div class="w-px h-12 bg-gradient-to-b from-neon to-transparent"></div>
            </div>
        </div>
    </header>

    <!-- 2. SOCIAL LINKS SECTION -->
    <section id="social" class="relative py-24 bg-ink border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16 reveal">
                <p class="text-neon text-xs uppercase tracking-[0.3em] mb-4">Stay Connected</p>
                <h2 class="text-4xl md:text-5xl font-bold">Follow Our Journey</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                <!-- Instagram -->
                <a href="#" class="group p-8 glass rounded-2xl hover:bg-gradient-to-br hover:from-purple-600/20 hover:to-pink-600/20 transition-all duration-500 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/5 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-instagram text-3xl text-gray-400 group-hover:text-white transition-colors"></i>
                    </div>
                    <p class="font-semibold text-gray-300 group-hover:text-white">Instagram</p>
                    <p class="text-sm text-gray-500 mt-1">@nexus.studio</p>
                </a>

                <!-- Twitter -->
                <a href="#" class="group p-8 glass rounded-2xl hover:bg-blue-500/10 transition-all duration-500 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/5 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-twitter text-3xl text-gray-400 group-hover:text-blue-400 transition-colors"></i>
                    </div>
                    <p class="font-semibold text-gray-300 group-hover:text-white">Twitter</p>
                    <p class="text-sm text-gray-500 mt-1">@nexusstudio</p>
                </a>

                <!-- LinkedIn -->
                <a href="#" class="group p-8 glass rounded-2xl hover:bg-blue-700/10 transition-all duration-500 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/5 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-linkedin-in text-3xl text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                    </div>
                    <p class="font-semibold text-gray-300 group-hover:text-white">LinkedIn</p>
                    <p class="text-sm text-gray-500 mt-1">Nexus Studio</p>
                </a>

                <!-- Dribbble -->
                <a href="#" class="group p-8 glass rounded-2xl hover:bg-pink-500/10 transition-all duration-500 text-center">
                    <div class="w-16 h-16 mx-auto mb-4 rounded-full bg-white/5 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-dribbble text-3xl text-gray-400 group-hover:text-pink-500 transition-colors"></i>
                    </div>
                    <p class="font-semibold text-gray-300 group-hover:text-white">Dribbble</p>
                    <p class="text-sm text-gray-500 mt-1">nexus-studio</p>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. WHAT WE DO SECTION -->
    <section id="services" class="relative py-32 bg-void">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex flex-col lg:flex-row gap-16">
                <!-- Left: Section Header -->
                <div class="lg:w-1/3 reveal">
                    <p class="text-neon text-xs uppercase tracking-[0.3em] mb-4">What We Do</p>
                    <h2 class="text-4xl md:text-5xl font-bold mb-6">Services We Offer</h2>
                    <p class="text-gray-400 leading-relaxed mb-8">
                        From concept to launch, we provide end-to-end digital solutions that drive growth and elevate brands.
                    </p>
                    <div class="w-24 h-1 bg-gradient-to-r from-neon to-volt"></div>
                </div>

                <!-- Right: Services Grid -->
                <div class="lg:w-2/3 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Service 1 -->
                    <div class="service-card p-8 glass rounded-2xl reveal">
                        <div class="w-12 h-12 rounded-lg bg-neon/10 flex items-center justify-center text-neon mb-6">
                            <i class="fas fa-paint-brush text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Brand Identity</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Strategic brand development including logo design, visual systems, and brand guidelines.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-card p-8 glass rounded-2xl reveal" style="transition-delay: 100ms;">
                        <div class="w-12 h-12 rounded-lg bg-pulse/10 flex items-center justify-center text-pulse mb-6">
                            <i class="fas fa-code text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Web Development</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Custom websites and web applications built with cutting-edge technologies.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-card p-8 glass rounded-2xl reveal" style="transition-delay: 200ms;">
                        <div class="w-12 h-12 rounded-lg bg-volt/10 flex items-center justify-center text-volt mb-6">
                            <i class="fas fa-mobile-alt text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Mobile Apps</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Native and cross-platform mobile applications for iOS and Android.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-card p-8 glass rounded-2xl reveal" style="transition-delay: 300ms;">
                        <div class="w-12 h-12 rounded-lg bg-green-500/10 flex items-center justify-center text-green-400 mb-6">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Digital Strategy</h3>
                        <p class="text-gray-400 text-sm leading-relaxed">
                            Data-driven marketing strategies and growth optimization.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-32 overflow-hidden">
        <!-- Background Effects -->
        <div class="absolute inset-0 bg-gradient-to-b from-void via-mist to-void"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-neon/10 rounded-full filter blur-[100px] animate-pulse-slow"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12 text-center reveal">
            <h2 class="text-5xl md:text-6xl font-bold mb-6">Ready to Start?</h2>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto">
                Let's collaborate and bring your vision to life. Every great project starts with a conversation.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                <a href="https://wa.me/1234567890?text=Hi%20Nexus!%20I'd%20like%20to%20discuss%20a%20project." target="_blank" 
                   class="group relative inline-flex items-center justify-center px-10 py-5 text-lg font-bold text-void transition-all duration-300 bg-neon rounded-full hover:scale-105 hover:shadow-[0_0_40px_rgba(0,240,255,0.4)]">
                    <i class="fab fa-whatsapp mr-3 text-xl"></i>
                    WhatsApp Us
                </a>
                
                <a href="mailto:hello@nexus.studio" class="text-gray-400 hover:text-white transition-colors flex items-center gap-2">
                    <i class="fas fa-envelope"></i>
                    hello@nexus.studio
                </a>
            </div>

            <!-- Trust Indicators -->
            <div class="mt-16 pt-8 border-t border-white/10 flex flex-wrap justify-center gap-8 text-gray-500 text-sm">
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-neon"></i> Free Consultation</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-neon"></i> 24/7 Support</span>
                <span class="flex items-center gap-2"><i class="fas fa-check-circle text-neon"></i> Global Reach</span>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER WITHOUT LINKS -->
    <footer class="bg-ink border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-2xl font-bold tracking-tighter">
                NEXUS<span class="text-neon">.</span>
            </div>
            
            <p class="text-gray-500 text-sm">
                &copy; 2024 Nexus Studio. Crafting digital excellence.
            </p>

            <div class="text-gray-600 text-sm">
                <i class="fas fa-code text-neon mr-2"></i>
                Made with passion
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
                    navbar.classList.add('bg-void/95', 'backdrop-blur-md', 'border-b', 'border-white/5');
                } else {
                    navbar.classList.remove('bg-void/95', 'backdrop-blur-md', 'border-b', 'border-white/5');
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