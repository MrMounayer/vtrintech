<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FixIt Pro | Phone Repair Specialists</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'tech': {
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
                        'neon': '#00d4ff',
                        'dark': '#0a0a0f',
                        'darker': '#050508',
                    },
                    fontFamily: {
                        sans: ['"Inter"', 'sans-serif'],
                    },
                    animation: {
                        'pulse-fast': 'pulse 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'float': 'float 3s ease-in-out infinite',
                        'glow': 'glow 2s ease-in-out infinite alternate',
                        'spin-slow': 'spin 8s linear infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        glow: {
                            '0%': { boxShadow: '0 0 5px #00d4ff, 0 0 10px #00d4ff' },
                            '100%': { boxShadow: '0 0 20px #00d4ff, 0 0 30px #00d4ff' },
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
            background: #0a0a0f;
        }
        ::-webkit-scrollbar-thumb {
            background: #1a1a2e;
            border-radius: 3px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00d4ff;
        }

        /* Circuit Pattern Background */
        .bg-circuit {
            background-image: 
                linear-gradient(rgba(0, 212, 255, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 212, 255, 0.03) 1px, transparent 1px);
            background-size: 50px 50px;
        }

        /* Gradient Text */
        .gradient-text {
            background: linear-gradient(135deg, #00d4ff 0%, #0ea5e9 50%, #38bdf8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Glass Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Service Card Hover */
        .service-card {
            transition: all 0.3s ease;
        }
        .service-card:hover {
            transform: translateY(-5px);
            border-color: rgba(0, 212, 255, 0.3);
            box-shadow: 0 10px 40px -10px rgba(0, 212, 255, 0.1);
        }

        /* Neon Button */
        .btn-neon {
            position: relative;
            overflow: hidden;
        }
        .btn-neon::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.5s;
        }
        .btn-neon:hover::before {
            transform: translateX(100%);
        }

        /* Status Indicator */
        .status-dot {
            box-shadow: 0 0 10px #22c55e;
        }
    </style>
</head>
<body class="bg-dark text-white font-sans antialiased overflow-x-hidden selection:bg-neon selection:text-dark">

    <!-- Background Pattern -->
    <div class="fixed inset-0 bg-circuit pointer-events-none z-0"></div>

    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-3">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-tech-500 to-tech-700 flex items-center justify-center">
                        <i class="fas fa-mobile-alt text-white text-lg"></i>
                    </div>
                    <span class="text-xl font-bold tracking-tight">
                        FixIt<span class="text-neon">Pro</span>
                    </span>
                </div>
                
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#services" class="text-sm text-gray-400 hover:text-neon transition-colors">Services</a>
                    <a href="#social" class="text-sm text-gray-400 hover:text-neon transition-colors">Reviews</a>
                    <a href="#contact" class="px-6 py-2.5 bg-tech-600 text-white rounded-lg font-semibold hover:bg-tech-500 transition-all flex items-center gap-2">
                        <i class="fas fa-bolt text-xs"></i>
                        Book Repair
                    </a>
                </div>

                <button class="md:hidden text-white text-xl" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-darker absolute w-full border-b border-white/10">
            <div class="px-6 py-6 space-y-4 text-center">
                <a href="#services" class="block text-gray-400 hover:text-neon">Services</a>
                <a href="#social" class="block text-gray-400 hover:text-neon">Reviews</a>
                <a href="#contact" class="block text-neon font-semibold">Book Repair</a>
            </div>
        </div>
    </nav>

    <!-- 1. HERO SECTION -->
    <header class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
        <!-- Animated Background -->
        <div class="absolute top-1/4 right-1/4 w-96 h-96 bg-tech-500/20 rounded-full filter blur-[128px] animate-pulse-fast"></div>
        <div class="absolute bottom-1/4 left-1/4 w-72 h-72 bg-neon/10 rounded-full filter blur-[100px] animate-pulse-fast" style="animation-delay: 1s;"></div>

        <div class="relative z-10 max-w-6xl mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left Content -->
            <div class="text-center lg:text-left reveal active">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card mb-6">
                    <span class="w-2 h-2 rounded-full bg-green-500 status-dot animate-pulse"></span>
                    <span class="text-xs font-medium text-gray-300">Open Now — Same Day Service</span>
                </div>

                <h1 class="text-5xl md:text-6xl lg:text-7xl font-bold leading-tight mb-6">
                    Broken Phone? <br>
                    <span class="gradient-text">We Fix It Fast.</span>
                </h1>

                <p class="text-lg text-gray-400 max-w-lg mx-auto lg:mx-0 mb-8 leading-relaxed">
                    Professional repairs for all brands. Screen replacements, battery fixes, water damage recovery — done in 30 minutes or less.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="#contact" class="px-8 py-4 bg-gradient-to-r from-tech-500 to-tech-600 text-white rounded-lg font-semibold hover:shadow-lg hover:shadow-tech-500/25 transition-all flex items-center justify-center gap-2 btn-neon">
                        <i class="fas fa-wrench"></i>
                        Get Quote Now
                    </a>
                    <a href="#services" class="px-8 py-4 border border-white/20 text-white rounded-lg font-semibold hover:border-neon hover:text-neon transition-all flex items-center justify-center gap-2">
                        <i class="fas fa-list"></i>
                        Our Services
                    </a>
                </div>

                <!-- Quick Stats -->
                <div class="flex gap-8 mt-12 justify-center lg:justify-start text-center">
                    <div>
                        <p class="text-3xl font-bold text-neon">15min</p>
                        <p class="text-xs text-gray-500 uppercase tracking-wider">Screen Fix</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-neon">90 Days</p>
                        <p class="text-xs text-gray-500 uppercase tracking-wider">Warranty</p>
                    </div>
                    <div>
                        <p class="text-3xl font-bold text-neon">50k+</p>
                        <p class="text-xs text-gray-500 uppercase tracking-wider">Repairs</p>
                    </div>
                </div>
            </div>

            <!-- Right Visual -->
            <div class="relative flex justify-center reveal active" style="transition-delay: 200ms;">
                <div class="relative w-full max-w-md">
                    <!-- Decorative Rings -->
                    <div class="absolute inset-0 border-2 border-tech-500/20 rounded-3xl transform rotate-6"></div>
                    <div class="absolute inset-0 border-2 border-neon/10 rounded-3xl transform -rotate-3"></div>
                    
                    <!-- Main Card -->
                    <div class="relative glass-card rounded-3xl p-8 animate-float">
                        <div class="flex items-center justify-between mb-6">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-tech-400 to-tech-600 flex items-center justify-center">
                                    <i class="fas fa-mobile-alt text-white text-xl"></i>
                                </div>
                                <div>
                                    <p class="font-semibold">iPhone 15 Pro</p>
                                    <p class="text-xs text-gray-400">Screen Replacement</p>
                                </div>
                            </div>
                            <div class="text-right">
                                <p class="text-2xl font-bold text-neon">$89</p>
                                <p class="text-xs text-gray-500 line-through">$129</p>
                            </div>
                        </div>

                        <!-- Progress Steps -->
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-green-500/20 flex items-center justify-center text-green-400 text-xs">
                                    <i class="fas fa-check"></i>
                                </div>
                                <p class="text-sm text-gray-300">Diagnosis Complete</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-tech-500/20 flex items-center justify-center text-tech-400 text-xs animate-pulse">
                                    <i class="fas fa-cog fa-spin"></i>
                                </div>
                                <p class="text-sm text-white font-medium">Repair in Progress...</p>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-white/5 flex items-center justify-center text-gray-500 text-xs">
                                    <i class="fas fa-shield-alt"></i>
                                </div>
                                <p class="text-sm text-gray-500">Quality Check</p>
                            </div>
                        </div>

                        <!-- Time Badge -->
                        <div class="mt-6 p-4 rounded-xl bg-tech-500/10 border border-tech-500/20">
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-300">Estimated Time</span>
                                <span class="text-lg font-bold text-neon">12 minutes</span>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Badge -->
                    <div class="absolute -bottom-4 -right-4 glass-card px-4 py-3 rounded-xl animate-float" style="animation-delay: 1s;">
                        <div class="flex items-center gap-2">
                            <i class="fas fa-star text-yellow-400"></i>
                            <span class="text-sm font-semibold">4.9 Rating</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. SOCIAL LINKS SECTION -->
    <section id="social" class="relative py-24 bg-darker border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16 reveal">
                <p class="text-neon text-xs uppercase tracking-[0.3em] mb-4">Stay Updated</p>
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Follow Our Work</h2>
                <p class="text-gray-400 max-w-xl mx-auto">See before & after transformations, tips, and exclusive offers.</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 reveal">
                <!-- Google Reviews -->
                <a href="#" class="group p-6 glass-card rounded-2xl hover:bg-white/5 transition-all duration-300 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-blue-500/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-google text-2xl text-blue-400"></i>
                    </div>
                    <p class="font-semibold text-gray-200">Google</p>
                    <p class="text-xs text-gray-500 mt-1">4.9 ★ (2.3k reviews)</p>
                </a>

                <!-- Facebook -->
                <a href="#" class="group p-6 glass-card rounded-2xl hover:bg-white/5 transition-all duration-300 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-blue-600/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-facebook-f text-2xl text-blue-500"></i>
                    </div>
                    <p class="font-semibold text-gray-200">Facebook</p>
                    <p class="text-xs text-gray-500 mt-1">@FixItPro</p>
                </a>

                <!-- Instagram -->
                <a href="#" class="group p-6 glass-card rounded-2xl hover:bg-white/5 transition-all duration-300 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-pink-500/10 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-instagram text-2xl text-pink-400"></i>
                    </div>
                    <p class="font-semibold text-gray-200">Instagram</p>
                    <p class="text-xs text-gray-500 mt-1">@fixitpro_repairs</p>
                </a>

                <!-- TikTok -->
                <a href="#" class="group p-6 glass-card rounded-2xl hover:bg-white/5 transition-all duration-300 text-center">
                    <div class="w-14 h-14 mx-auto mb-4 rounded-xl bg-white/5 flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="fab fa-tiktok text-2xl text-white"></i>
                    </div>
                    <p class="font-semibold text-gray-200">TikTok</p>
                    <p class="text-xs text-gray-500 mt-1">Repair videos</p>
                </a>
            </div>

            <!-- Trust Badges -->
            <div class="mt-16 flex flex-wrap justify-center gap-8 text-gray-500 reveal">
                <div class="flex items-center gap-2">
                    <i class="fas fa-shield-alt text-green-400"></i>
                    <span class="text-sm">Certified Technicians</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-certificate text-tech-400"></i>
                    <span class="text-sm">Premium Parts</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-lock text-neon"></i>
                    <span class="text-sm">Data Protection</span>
                </div>
                <div class="flex items-center gap-2">
                    <i class="fas fa-undo text-purple-400"></i>
                    <span class="text-sm">90-Day Warranty</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. WHAT WE DO SECTION -->
    <section id="services" class="relative py-32 bg-dark">
        <div class="max-w-7xl mx-auto px-6 lg:px-12">
            <div class="text-center mb-16 reveal">
                <p class="text-neon text-xs uppercase tracking-[0.3em] mb-4">Our Services</p>
                <h2 class="text-4xl md:text-5xl font-bold mb-4">Expert Repairs</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Professional solutions for all your device problems. Fast, reliable, and guaranteed.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Service 1 -->
                <div class="service-card p-8 glass-card rounded-2xl reveal">
                    <div class="w-14 h-14 rounded-xl bg-red-500/10 flex items-center justify-center text-red-400 mb-6">
                        <i class="fas fa-mobile-screen text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Screen Replacement</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        Cracked or broken display? We replace screens for all phone models with premium quality parts.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/5">
                        <span class="text-neon font-bold">From $49</span>
                        <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>15-30 min</span>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card p-8 glass-card rounded-2xl reveal" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 rounded-xl bg-yellow-500/10 flex items-center justify-center text-yellow-400 mb-6">
                        <i class="fas fa-battery-half text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Battery Replacement</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        Restore your phone's battery life. We use high-capacity batteries that last longer than originals.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/5">
                        <span class="text-neon font-bold">From $39</span>
                        <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>10-20 min</span>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card p-8 glass-card rounded-2xl reveal" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 rounded-xl bg-blue-500/10 flex items-center justify-center text-blue-400 mb-6">
                        <i class="fas fa-droplet text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Water Damage</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        Dropped your phone in water? Our ultrasonic cleaning and diagnostic can save your device.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/5">
                        <span class="text-neon font-bold">From $59</span>
                        <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>1-2 hours</span>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-card p-8 glass-card rounded-2xl reveal">
                    <div class="w-14 h-14 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 mb-6">
                        <i class="fas fa-charging-station text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Charging Port</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        Phone not charging? We clean, repair, or replace charging ports to restore power connection.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/5">
                        <span class="text-neon font-bold">From $45</span>
                        <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>20-40 min</span>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-card p-8 glass-card rounded-2xl reveal" style="transition-delay: 100ms;">
                    <div class="w-14 h-14 rounded-xl bg-green-500/10 flex items-center justify-center text-green-400 mb-6">
                        <i class="fas fa-camera text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Camera Repair</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        Blurry photos or broken lens? We fix front and rear cameras for crystal clear shots again.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/5">
                        <span class="text-neon font-bold">From $55</span>
                        <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>30 min</span>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="service-card p-8 glass-card rounded-2xl reveal" style="transition-delay: 200ms;">
                    <div class="w-14 h-14 rounded-xl bg-orange-500/10 flex items-center justify-center text-orange-400 mb-6">
                        <i class="fas fa-unlock text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Software Unlock</h3>
                    <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                        Forgot your password? We safely recover access without losing your precious data and photos.
                    </p>
                    <div class="flex items-center justify-between pt-4 border-t border-white/5">
                        <span class="text-neon font-bold">From $35</span>
                        <span class="text-xs text-gray-500"><i class="fas fa-clock mr-1"></i>10-15 min</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. CALL TO ACTION SECTION -->
    <section id="contact" class="relative py-32 overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-b from-dark via-tech-950/30 to-dark"></div>
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[500px] h-[500px] bg-tech-500/10 rounded-full filter blur-[120px] animate-pulse"></div>

        <div class="relative z-10 max-w-4xl mx-auto px-6 lg:px-12 text-center reveal">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card mb-8">
                <i class="fas fa-bolt text-yellow-400"></i>
                <span class="text-sm text-gray-300">Emergency repairs welcome</span>
            </div>

            <h2 class="text-5xl md:text-6xl font-bold mb-6">Ready to Fix Your Phone?</h2>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto">
                Don't wait with a broken device. Message us now for instant quote and same-day repair appointment.
            </p>

            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12">
                <a href="https://wa.me/1234567890?text=Hi!%20My%20phone%20needs%20repair.%20Can%20you%20help?" target="_blank" 
                   class="group relative inline-flex items-center justify-center px-10 py-5 text-lg font-bold text-dark transition-all duration-300 bg-[#25D366] rounded-xl hover:scale-105 hover:shadow-[0_0_40px_rgba(37,211,102,0.3)]">
                    <i class="fab fa-whatsapp mr-3 text-2xl"></i>
                    WhatsApp Now
                    <span class="absolute -top-2 -right-2 w-4 h-4 bg-red-500 rounded-full animate-pulse"></span>
                </a>
                
                <div class="text-left">
                    <p class="text-gray-400 text-sm">Or call us directly</p>
                    <p class="text-2xl font-bold text-white">(555) 123-4567</p>
                </div>
            </div>

            <!-- Location & Hours -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 pt-8 border-t border-white/10">
                <div class="text-center">
                    <i class="fas fa-location-dot text-neon text-xl mb-2"></i>
                    <p class="text-sm text-gray-400">123 Tech Street</p>
                    <p class="text-white font-medium">Downtown, NY 10001</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-clock text-neon text-xl mb-2"></i>
                    <p class="text-sm text-gray-400">Mon - Sat</p>
                    <p class="text-white font-medium">9:00 AM - 8:00 PM</p>
                </div>
                <div class="text-center">
                    <i class="fas fa-envelope text-neon text-xl mb-2"></i>
                    <p class="text-sm text-gray-400">Email us</p>
                    <p class="text-white font-medium">fix@fixitpro.com</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. FOOTER WITHOUT LINKS -->
    <footer class="bg-darker border-t border-white/5 py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-12 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-tech-500 to-tech-700 flex items-center justify-center">
                    <i class="fas fa-mobile-alt text-white"></i>
                </div>
                <span class="text-xl font-bold">
                    FixIt<span class="text-neon">Pro</span>
                </span>
            </div>
            
            <p class="text-gray-500 text-sm">
                &copy; 2024 FixIt Pro. Professional phone repair services.
            </p>

            <div class="flex items-center gap-2 text-gray-600 text-sm">
                <i class="fas fa-wrench text-neon"></i>
                <span>Repairs done right</span>
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
                    navbar.classList.add('bg-dark/95', 'backdrop-blur-md', 'border-b', 'border-white/5');
                } else {
                    navbar.classList.remove('bg-dark/95', 'backdrop-blur-md', 'border-b', 'border-white/5');
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