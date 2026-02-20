<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dr. Sarah Mitchell | Modern Dental Care</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', 'sans-serif'],
                        serif: ['"Crimson Pro"', 'Georgia', 'serif'],
                    },
                    colors: {
                        dental: {
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
                        mint: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        cream: '#faf9f6',
                        warm: {
                            50: '#fdfbf7',
                            100: '#f7f3eb',
                            200: '#efe5d5',
                            300: '#e4d2b6',
                            400: '#d4b68e',
                            500: '#c49a6c',
                            600: '#a67c52',
                            700: '#856241',
                            800: '#6d4f38',
                            900: '#594230',
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 2s infinite',
                        'pulse-soft': 'pulse-soft 3s ease-in-out infinite',
                        'wave': 'wave 8s linear infinite',
                        'slide-up': 'slide-up 0.6s ease-out',
                        'fade-in': 'fade-in 1s ease-out',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-15px)' },
                        },
                        'pulse-soft': {
                            '0%, 100%': { opacity: '0.6' },
                            '50%': { opacity: '1' },
                        },
                        wave: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
                        },
                        'slide-up': {
                            '0%': { transform: 'translateY(30px)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        'fade-in': {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&family=Crimson+Pro:ital,wght@0,400;0,500;0,600;1,400&display=swap');
        
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #faf9f6;
            color: #1e293b;
        }
        
        .serif {
            font-family: 'Crimson Pro', serif;
        }
        
        /* Smooth scroll behavior */
        html {
            scroll-behavior: smooth;
        }
        
        /* Glass morphism for cards */
        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 
                0 4px 6px -1px rgba(0, 0, 0, 0.05),
                0 2px 4px -1px rgba(0, 0, 0, 0.03),
                inset 0 0 0 1px rgba(255, 255, 255, 0.5);
        }
        
        /* Organic blob shapes */
        .blob-shape {
            border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
            animation: morph 8s ease-in-out infinite;
        }
        
        @keyframes morph {
            0%, 100% { border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%; }
            50% { border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%; }
        }
        
        /* Tooth icon animation */
        .tooth-icon {
            transition: transform 0.3s ease;
        }
        
        .tooth-icon:hover {
            transform: scale(1.1) rotate(5deg);
        }
        
        /* Soft gradient text */
        .text-gradient-dental {
            background: linear-gradient(135deg, #0ea5e9 0%, #22c55e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #94a3b8;
        }
        
        /* Hide scrollbar for carousel */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }
        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Service card hover effect */
        .service-card {
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 
                0 20px 25px -5px rgba(0, 0, 0, 0.1),
                0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .service-card:hover .service-icon {
            background: linear-gradient(135deg, #e0f2fe 0%, #dcfce7 100%);
            transform: scale(1.1);
        }
        
        /* Appointment button pulse */
        .btn-pulse {
            animation: btn-pulse 2s infinite;
        }
        
        @keyframes btn-pulse {
            0%, 100% { box-shadow: 0 0 0 0 rgba(14, 165, 233, 0.4); }
            50% { box-shadow: 0 0 0 15px rgba(14, 165, 233, 0); }
        }
        
        /* Wave separator */
        .wave-separator {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 100px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23faf9f6' fill-opacity='1' d='M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-size: 50% 100%;
            animation: wave 20s linear infinite;
        }
        
        /* Testimonial card */
        .testimonial-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }
        
        /* Before/After slider simulation */
        .comparison-badge {
            background: linear-gradient(135deg, #0ea5e9 0%, #22c55e 100%);
        }
    </style>
</head>
<body class="antialiased bg-cream">

    <!-- Floating Action Button (Mobile) -->
    <a href="#appointment" class="md:hidden fixed bottom-6 right-6 z-50 w-14 h-14 bg-dental-500 rounded-full flex items-center justify-center text-white shadow-lg btn-pulse">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
        </svg>
    </a>

    <!-- Hero Section -->
    <section class="relative min-h-screen bg-gradient-to-br from-dental-50 via-cream to-mint-50 overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute top-20 right-0 w-96 h-96 bg-dental-200/30 blob-shape blur-3xl"></div>
        <div class="absolute bottom-0 left-0 w-80 h-80 bg-mint-200/30 blob-shape blur-3xl animate-float-delayed"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-6 py-12 lg:py-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center min-h-[80vh]">
                
                <!-- Left Content -->
                <div class="space-y-8 animate-slide-up">
                    <!-- Trust badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white/80 backdrop-blur-sm rounded-full border border-dental-100 shadow-sm">
                        <span class="flex h-2 w-2 rounded-full bg-mint-500 animate-pulse"></span>
                        <span class="text-sm font-medium text-dental-700">Accepting New Patients</span>
                    </div>
                    
                    <!-- Main heading -->
                    <h1 class="text-5xl lg:text-6xl xl:text-7xl font-bold text-slate-800 leading-[1.1]">
                        Your smile,<br>
                        <span class="serif italic text-dental-600">reimagined</span>
                    </h1>
                    
                    <p class="text-lg text-slate-600 max-w-lg leading-relaxed">
                        Experience modern dentistry where advanced technology meets compassionate care. Creating beautiful, healthy smiles in a relaxing environment.
                    </p>
                    
                    <!-- CTA Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#appointment" class="inline-flex items-center justify-center px-8 py-4 bg-dental-500 text-white font-semibold rounded-full hover:bg-dental-600 transition-all duration-300 shadow-lg shadow-dental-500/25 hover:shadow-xl hover:shadow-dental-500/30 hover:-translate-y-1 btn-pulse">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Book Appointment
                        </a>
                        <a href="#services" class="inline-flex items-center justify-center px-8 py-4 bg-white text-slate-700 font-semibold rounded-full border-2 border-slate-200 hover:border-dental-300 hover:text-dental-600 transition-all duration-300 hover:-translate-y-1">
                            Our Services
                            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>
                    
                    <!-- Quick stats -->
                    <div class="flex gap-8 pt-4">
                        <div>
                            <div class="text-2xl font-bold text-slate-800">15+</div>
                            <div class="text-sm text-slate-500">Years Experience</div>
                        </div>
                        <div class="w-px bg-slate-200"></div>
                        <div>
                            <div class="text-2xl font-bold text-slate-800">5k+</div>
                            <div class="text-sm text-slate-500">Happy Patients</div>
                        </div>
                        <div class="w-px bg-slate-200"></div>
                        <div>
                            <div class="text-2xl font-bold text-slate-800">4.9</div>
                            <div class="text-sm text-slate-500">Google Rating</div>
                        </div>
                    </div>
                </div>
                
                <!-- Right Image -->
                <div class="relative lg:h-[600px] flex items-center justify-center">
                    <!-- Decorative rings -->
                    <div class="absolute w-[500px] h-[500px] border border-dental-200/50 rounded-full animate-spin-slow"></div>
                    <div class="absolute w-[400px] h-[400px] border border-mint-200/50 rounded-full animate-spin-slow" style="animation-direction: reverse; animation-duration: 15s;"></div>
                    
                    <!-- Main image container -->
                    <div class="relative w-full max-w-md aspect-square">
                        <div class="absolute inset-0 bg-gradient-to-br from-dental-100 to-mint-100 rounded-[3rem] transform rotate-3"></div>
                        <div class="absolute inset-0 bg-white rounded-[3rem] shadow-2xl overflow-hidden transform -rotate-3 hover:rotate-0 transition-transform duration-500">
                            <div class="w-full h-full bg-gradient-to-br from-dental-50 to-mint-50 flex items-center justify-center">
                                <!-- Abstract dental illustration -->
                                <svg class="w-48 h-48 text-dental-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.87-3.13-7-7-7zm-1 13H8v-2h3v2zm5 0h-3v-2h3v2zm-3-4V9h2c0 1.1-.9 2-2 2h-2v2H9v-2H7c-1.1 0-2-.9-2-2V7h2v4h2V7h2v4h2V7h2v4c0 1.1-.9 2-2 2h-2z"/>
                                </svg>
                                <div class="absolute bottom-8 left-8 right-8 glass-card rounded-2xl p-4">
                                    <div class="flex items-center gap-3">
                                        <div class="w-12 h-12 rounded-full bg-gradient-to-br from-dental-400 to-mint-400 flex items-center justify-center text-white font-bold">
                                            SM
                                        </div>
                                        <div>
                                            <div class="font-semibold text-slate-800">Dr. Sarah Mitchell</div>
                                            <div class="text-sm text-slate-500">DDS, FAGD</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Floating badge -->
                    <div class="absolute -bottom-4 -left-4 glass-card rounded-2xl p-4 shadow-xl animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-mint-100 flex items-center justify-center">
                                <svg class="w-5 h-5 text-mint-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <div class="text-sm font-semibold text-slate-800">Board Certified</div>
                                <div class="text-xs text-slate-500">American Dental Association</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Wave separator -->
        <div class="wave-separator"></div>
    </section>

    <!-- Services Section - Bento Grid -->
    <section id="services" class="py-24 px-6 relative">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-dental-600 font-semibold text-sm uppercase tracking-wider">Our Services</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-800 mt-3 mb-4">Comprehensive Dental Care</h2>
                <p class="text-slate-600">From routine checkups to advanced cosmetic procedures, we offer a full spectrum of dental services tailored to your needs.</p>
            </div>
            
            <!-- Bento Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 auto-rows-[280px]">
                
                <!-- Preventive Care - Large -->
                <div class="service-card lg:col-span-2 lg:row-span-2 glass-card rounded-3xl p-8 relative overflow-hidden group cursor-pointer">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-dental-100/50 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2 group-hover:bg-dental-200/50 transition-colors"></div>
                    <div class="relative h-full flex flex-col justify-between">
                        <div>
                            <div class="service-icon w-16 h-16 rounded-2xl bg-dental-50 flex items-center justify-center mb-6 transition-all duration-300">
                                <svg class="w-8 h-8 text-dental-600 tooth-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-800 mb-3">Preventive Care</h3>
                            <p class="text-slate-600 leading-relaxed">Regular checkups, cleanings, and digital X-rays to maintain optimal oral health and catch issues early.</p>
                        </div>
                        <div class="flex items-center text-dental-600 font-semibold group-hover:gap-2 transition-all">
                            Learn more
                            <svg class="w-5 h-5 ml-1 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Cosmetic Dentistry -->
                <div class="service-card glass-card rounded-3xl p-6 relative overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative h-full flex flex-col justify-between">
                        <div>
                            <div class="service-icon w-14 h-14 rounded-2xl bg-pink-50 flex items-center justify-center mb-4 transition-all duration-300">
                                <svg class="w-7 h-7 text-pink-500 tooth-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Cosmetic</h3>
                            <p class="text-sm text-slate-600">Veneers, whitening, and smile makeovers.</p>
                        </div>
                    </div>
                </div>

                <!-- Orthodontics -->
                <div class="service-card glass-card rounded-3xl p-6 relative overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-br from-purple-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative h-full flex flex-col justify-between">
                        <div>
                            <div class="service-icon w-14 h-14 rounded-2xl bg-purple-50 flex items-center justify-center mb-4 transition-all duration-300">
                                <svg class="w-7 h-7 text-purple-500 tooth-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Orthodontics</h3>
                            <p class="text-sm text-slate-600">Invisalign and traditional braces for all ages.</p>
                        </div>
                    </div>
                </div>

                <!-- Restorative - Wide -->
                <div class="service-card lg:col-span-2 glass-card rounded-3xl p-6 relative overflow-hidden group cursor-pointer">
                    <div class="absolute right-0 top-0 w-48 h-full bg-gradient-to-l from-warm-100/50 to-transparent"></div>
                    <div class="relative h-full flex items-center gap-6">
                        <div class="service-icon w-16 h-16 rounded-2xl bg-warm-100 flex items-center justify-center flex-shrink-0 transition-all duration-300">
                            <svg class="w-8 h-8 text-warm-600 tooth-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Restorative Dentistry</h3>
                            <p class="text-sm text-slate-600">Crowns, bridges, implants, and fillings using biocompatible materials.</p>
                        </div>
                    </div>
                </div>

                <!-- Emergency Care -->
                <div class="service-card glass-card rounded-3xl p-6 relative overflow-hidden group cursor-pointer bg-gradient-to-br from-red-50/50 to-transparent border-red-100">
                    <div class="relative h-full flex flex-col justify-between">
                        <div>
                            <div class="service-icon w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center mb-4 transition-all duration-300">
                                <svg class="w-7 h-7 text-red-500 tooth-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Emergency</h3>
                            <p class="text-sm text-slate-600">Same-day appointments for urgent care.</p>
                        </div>
                        <span class="inline-flex items-center px-2 py-1 rounded-full bg-red-100 text-red-700 text-xs font-semibold w-fit">
                            24/7 Available
                        </span>
                    </div>
                </div>

                <!-- Pediatric -->
                <div class="service-card glass-card rounded-3xl p-6 relative overflow-hidden group cursor-pointer">
                    <div class="absolute inset-0 bg-gradient-to-br from-yellow-50/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative h-full flex flex-col justify-between">
                        <div>
                            <div class="service-icon w-14 h-14 rounded-2xl bg-yellow-50 flex items-center justify-center mb-4 transition-all duration-300">
                                <svg class="w-7 h-7 text-yellow-600 tooth-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold text-slate-800 mb-2">Pediatric</h3>
                            <p class="text-sm text-slate-600">Gentle care for little smiles.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose Us / Features -->
    <section class="py-24 px-6 bg-white relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%230ea5e9\' fill-opacity=\'0.03\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-50"></div>
        
        <div class="max-w-7xl mx-auto relative">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div>
                    <span class="text-dental-600 font-semibold text-sm uppercase tracking-wider">Why Choose Us</span>
                    <h2 class="text-4xl lg:text-5xl font-bold text-slate-800 mt-3 mb-6">Technology meets compassion</h2>
                    <p class="text-slate-600 text-lg mb-8 leading-relaxed">We invest in the latest dental technology to ensure precise diagnoses and comfortable treatments, while maintaining the human connection that makes you feel at ease.</p>
                    
                    <div class="space-y-6">
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-dental-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-dental-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 mb-1">Digital X-Rays</h4>
                                <p class="text-slate-600 text-sm">90% less radiation with instant, high-resolution images.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-mint-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-mint-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 mb-1">Laser Dentistry</h4>
                                <p class="text-slate-600 text-sm">Pain-free procedures with faster healing times.</p>
                            </div>
                        </div>
                        
                        <div class="flex gap-4">
                            <div class="w-12 h-12 rounded-xl bg-warm-50 flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-warm-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-slate-800 mb-1">Same-Day Crowns</h4>
                                <p class="text-slate-600 text-sm">CEREC technology for crowns in a single visit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="aspect-square rounded-[3rem] bg-gradient-to-br from-dental-100 to-mint-100 p-8 relative overflow-hidden">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-64 h-64 bg-white rounded-full shadow-2xl flex items-center justify-center relative">
                                <div class="absolute inset-0 rounded-full bg-gradient-to-br from-dental-200/20 to-mint-200/20 animate-pulse-soft"></div>
                                <svg class="w-32 h-32 text-dental-300" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2C8.13 2 5 5.13 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.87-3.13-7-7-7z"/>
                                </svg>
                                <!-- Orbiting elements -->
                                <div class="absolute w-full h-full animate-spin-slow" style="animation-duration: 20s;">
                                    <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-dental-400 rounded-full shadow-lg"></div>
                                </div>
                                <div class="absolute w-full h-full animate-spin-slow" style="animation-duration: 15s; animation-direction: reverse;">
                                    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 translate-y-1/2 w-3 h-3 bg-mint-400 rounded-full shadow-lg"></div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Floating cards -->
                        <div class="absolute top-8 left-8 glass-card rounded-xl p-3 animate-float">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-slate-700">Pain-free</span>
                            </div>
                        </div>
                        
                        <div class="absolute bottom-8 right-8 glass-card rounded-xl p-3 animate-float-delayed">
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-dental-100 flex items-center justify-center">
                                    <svg class="w-4 h-4 text-dental-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <span class="text-sm font-medium text-slate-700">Fast recovery</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel -->
    <section class="py-24 px-6 bg-gradient-to-b from-cream to-white">
        <div class="max-w-7xl mx-auto">
            <div class="text-center max-w-2xl mx-auto mb-16">
                <span class="text-dental-600 font-semibold text-sm uppercase tracking-wider">Testimonials</span>
                <h2 class="text-4xl lg:text-5xl font-bold text-slate-800 mt-3">Patient stories</h2>
            </div>
            
            <div class="relative">
                <div id="testimonial-carousel" class="flex gap-6 overflow-x-auto hide-scroll snap-x snap-mandatory pb-8">
                    
                    <!-- Testimonial 1 -->
                    <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                        <div class="testimonial-card rounded-3xl p-8 h-full">
                            <div class="flex items-center gap-1 mb-4">
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <p class="text-slate-700 mb-6 leading-relaxed">"Dr. Mitchell transformed my smile completely. I was terrified of dentists before, but her gentle approach and modern techniques made every visit comfortable. Best decision I ever made!"</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-dental-300 to-dental-400 flex items-center justify-center text-white font-bold">
                                    EM
                                </div>
                                <div>
                                    <div class="font-semibold text-slate-800">Emma Thompson</div>
                                    <div class="text-sm text-slate-500">Invisalign Patient</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                        <div class="testimonial-card rounded-3xl p-8 h-full">
                            <div class="flex items-center gap-1 mb-4">
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <p class="text-slate-700 mb-6 leading-relaxed">"The office is stunning and the technology is incredible. I got my crown done in one visit while watching Netflix. Truly a 21st century dental experience."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-mint-300 to-mint-400 flex items-center justify-center text-white font-bold">
                                    JR
                                </div>
                                <div>
                                    <div class="font-semibold text-slate-800">James Rodriguez</div>
                                    <div class="text-sm text-slate-500">Crown & Bridge</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                        <div class="testimonial-card rounded-3xl p-8 h-full">
                            <div class="flex items-center gap-1 mb-4">
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                            </div>
                            <p class="text-slate-700 mb-6 leading-relaxed">"My kids actually look forward to dental visits now! The pediatric team is amazing with children. The office has a play area and the staff is so patient."</p>
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-warm-300 to-warm-400 flex items-center justify-center text-white font-bold">
                                    SC
                                </div>
                                <div>
                                    <div class="font-semibold text-slate-800">Sarah Chen</div>
                                    <div class="text-sm text-slate-500">Family Patient</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                
                <!-- Navigation dots -->
                <div class="flex justify-center gap-2 mt-4">
                    <button onclick="scrollTestimonial(0)" class="w-2 h-2 rounded-full bg-dental-500 transition-all"></button>
                    <button onclick="scrollTestimonial(1)" class="w-2 h-2 rounded-full bg-slate-300 hover:bg-dental-400 transition-all"></button>
                    <button onclick="scrollTestimonial(2)" class="w-2 h-2 rounded-full bg-slate-300 hover:bg-dental-400 transition-all"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointment CTA -->
    <section id="appointment" class="py-24 px-6 bg-dental-600 relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')]"></div>
        
        <div class="max-w-4xl mx-auto text-center relative z-10">
            <h2 class="text-4xl lg:text-5xl font-bold text-white mb-6">Ready for your healthiest smile?</h2>
            <p class="text-dental-100 text-lg mb-10 max-w-2xl mx-auto">New patients receive a comprehensive exam, digital X-rays, and cleaning for just $99. Book your appointment today.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="tel:+1234567890" class="inline-flex items-center justify-center px-8 py-4 bg-white text-dental-700 font-semibold rounded-full hover:bg-dental-50 transition-all duration-300 shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    (123) 456-7890
                </a>
                <button class="inline-flex items-center justify-center px-8 py-4 bg-dental-700 text-white font-semibold rounded-full hover:bg-dental-800 transition-all duration-300 border-2 border-white/20">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    Book Online
                </button>
            </div>
            
            <div class="mt-8 flex flex-wrap justify-center gap-6 text-dental-200 text-sm">
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    Mon-Fri: 8am - 6pm
                </span>
                <span class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    123 Smile Street, Medical District
                </span>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-slate-900 text-slate-400 py-8 px-6">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-2">
                <svg class="w-6 h-6 text-dental-400" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2C8.13 2 5 5.13 5 9c0 2.38 1.19 4.47 3 5.74V17c0 .55.45 1 1 1h6c.55 0 1-.45 1-1v-2.26c1.81-1.27 3-3.36 3-5.74 0-3.87-3.13-7-7-7z"/>
                </svg>
                <span class="text-white font-semibold">Dr. Sarah Mitchell, DDS</span>
            </div>
            <div class="text-sm">
                © 2024 All rights reserved.
            </div>
        </div>
    </footer>

    <script>
        // Testimonial carousel
        function scrollTestimonial(index) {
            const container = document.getElementById('testimonial-carousel');
            const cardWidth = container.children[0].offsetWidth + 24;
            container.scrollTo({ left: cardWidth * index, behavior: 'smooth' });
            
            // Update dots
            const dots = document.querySelectorAll('.flex.justify-center.gap-2.mt-4 button');
            dots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('bg-slate-300');
                    dot.classList.add('bg-dental-500');
                } else {
                    dot.classList.remove('bg-dental-500');
                    dot.classList.add('bg-slate-300');
                }
            });
        }

        // Auto-scroll testimonials
        let currentTestimonial = 0;
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % 3;
            scrollTestimonial(currentTestimonial);
        }, 5000);

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>