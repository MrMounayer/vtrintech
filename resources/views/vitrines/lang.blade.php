<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Maria Santos | Spanish Language & Culture</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Nunito"', 'sans-serif'],
                        display: ['"Playfair Display"', 'serif'],
                        hand: ['"Caveat"', 'cursive'],
                    },
                    colors: {
                        terra: {
                            50: '#fdf8f6',
                            100: '#f2e8e5',
                            200: '#eaddd7',
                            300: '#e0cec7',
                            400: '#d2bab0',
                            500: '#a18072',
                            600: '#8a6a5c',
                            700: '#73564a',
                            800: '#5c4339',
                            900: '#45332b',
                        },
                        sage: {
                            50: '#f4f7f4',
                            100: '#e3ebe3',
                            200: '#c5d8c5',
                            300: '#9bbd9b',
                            400: '#729b72',
                            500: '#5a7d5a',
                            600: '#466146',
                            700: '#384d38',
                            800: '#2d3d2d',
                            900: '#243224',
                        },
                        ochre: {
                            50: '#fff8ed',
                            100: '#ffefd5',
                            200: '#ffe0b3',
                            300: '#ffc97a',
                            400: '#ffa947',
                            500: '#ff8c1a',
                            600: '#f07000',
                            700: '#c75500',
                            800: '#9c4210',
                            900: '#7d3811',
                        },
                        sky: {
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
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'float-delayed': 'float 6s ease-in-out 2s infinite',
                        'wiggle': 'wiggle 2s ease-in-out infinite',
                        'scribble': 'scribble 3s ease-in-out infinite',
                        'type': 'type 2s steps(20) infinite',
                        'bounce-slow': 'bounce 3s infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px) rotate(0deg)' },
                            '50%': { transform: 'translateY(-15px) rotate(2deg)' },
                        },
                        wiggle: {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        },
                        scribble: {
                            '0%, 100%': { d: 'path("M0,50 Q25,30 50,50 T100,50")' },
                            '50%': { d: 'path("M0,50 Q25,70 50,50 T100,50")' },
                        },
                        type: {
                            '0%': { width: '0' },
                            '100%': { width: '100%' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Caveat:wght@400;500;600;700&display=swap');
        
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #fdf8f6;
            color: #45332b;
        }
        
        .font-display {
            font-family: 'Playfair Display', serif;
        }
        
        .font-hand {
            font-family: 'Caveat', cursive;
        }
        
        /* Paper texture overlay */
        .paper-texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 400 400' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
        }
        
        /* Hand-drawn underline */
        .hand-underline {
            position: relative;
            display: inline-block;
        }
        
        .hand-underline::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 100%;
            height: 12px;
            background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 12' preserveAspectRatio='none'%3E%3Cpath d='M0,8 Q25,2 50,8 T100,8' stroke='%23ff8c1a' stroke-width='3' fill='none' stroke-linecap='round'/%3E%3C/svg%3E") no-repeat center;
            background-size: 100% 100%;
            opacity: 0.6;
        }
        
        /* Sticker effect */
        .sticker {
            box-shadow: 2px 2px 0px rgba(0,0,0,0.1);
            transform: rotate(-2deg);
            transition: all 0.3s ease;
        }
        
        .sticker:hover {
            transform: rotate(0deg) scale(1.05);
            box-shadow: 4px 4px 0px rgba(0,0,0,0.15);
        }
        
        /* Washi tape */
        .washi-tape {
            position: relative;
        }
        
        .washi-tape::before {
            content: '';
            position: absolute;
            top: -15px;
            left: 50%;
            transform: translateX(-50%) rotate(-3deg);
            width: 120px;
            height: 30px;
            background: repeating-linear-gradient(
                45deg,
                #ff8c1a,
                #ff8c1a 10px,
                #ffa947 10px,
                #ffa947 20px
            );
            opacity: 0.8;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Notebook lines */
        .notebook-lines {
            background-image: repeating-linear-gradient(
                transparent,
                transparent 31px,
                #e0cec7 31px,
                #e0cec7 32px
            );
            background-attachment: local;
        }
        
        /* Polaroid frame */
        .polaroid {
            background: white;
            padding: 12px 12px 40px 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            transform: rotate(-3deg);
            transition: all 0.3s ease;
        }
        
        .polaroid:hover {
            transform: rotate(0deg) scale(1.02);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        
        /* Speech bubble */
        .speech-bubble {
            position: relative;
            background: white;
            border-radius: 20px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .speech-bubble::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 30px;
            width: 20px;
            height: 20px;
            background: white;
            transform: rotate(45deg);
            box-shadow: 2px 2px 2px rgba(0,0,0,0.05);
        }
        
        /* Stamp effect */
        .stamp {
            border: 3px solid #c75500;
            color: #c75500;
            transform: rotate(-5deg);
            mask-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='1.5' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.5'/%3E%3C/svg%3E");
        }
        
        /* Hide scrollbar */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }
        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f2e8e5;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #a18072;
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #8a6a5c;
        }
    </style>
</head>
<body class="antialiased bg-terra-50 paper-texture">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full z-50 bg-terra-50/95 backdrop-blur-sm border-b border-terra-200">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-ochre-400 rounded-full flex items-center justify-center text-white font-bold text-lg">
                    M
                </div>
                <span class="font-display text-xl font-semibold text-terra-800">Profe Maria</span>
            </div>
            <div class="hidden md:flex items-center gap-8 text-terra-700 font-medium">
                <a href="#about" class="hover:text-ochre-600 transition-colors">About</a>
                <a href="#courses" class="hover:text-ochre-600 transition-colors">Courses</a>
                <a href="#method" class="hover:text-ochre-600 transition-colors">Method</a>
                <a href="#stories" class="hover:text-ochre-600 transition-colors">Stories</a>
                <a href="#contact" class="px-6 py-2 bg-ochre-500 text-white rounded-full hover:bg-ochre-600 transition-colors shadow-md">
                    Book a Class
                </a>
            </div>
            <button class="md:hidden text-terra-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 px-6 overflow-hidden">
        <!-- Decorative elements -->
        <div class="absolute top-20 right-10 w-32 h-32 bg-sage-200/50 rounded-full blur-2xl animate-float"></div>
        <div class="absolute bottom-20 left-10 w-40 h-40 bg-ochre-200/50 rounded-full blur-2xl animate-float-delayed"></div>
        
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                
                <!-- Left Content -->
                <div class="space-y-8">
                    <!-- Hello badge -->
                    <div class="inline-flex items-center gap-2 px-4 py-2 bg-white rounded-full shadow-sm border border-terra-200">
                        <span class="text-2xl">👋</span>
                        <span class="font-hand text-xl text-ochre-600">¡Hola! Hello! Bonjour!</span>
                    </div>
                    
                    <div class="space-y-4">
                        <h1 class="font-display text-5xl md:text-6xl lg:text-7xl font-bold text-terra-900 leading-tight">
                            Learn Spanish<br>
                            <span class="hand-underline">the natural way</span>
                        </h1>
                        <p class="text-xl text-terra-600 max-w-lg leading-relaxed">
                            Immersive, personalized language lessons that feel like conversation with a friend. From beginner to fluent, one story at a time.
                        </p>
                    </div>

                    <!-- Stats cards -->
                    <div class="flex flex-wrap gap-4">
                        <div class="sticker bg-white px-5 py-3 rounded-xl border-2 border-sage-300">
                            <div class="font-display text-2xl font-bold text-sage-600">10+</div>
                            <div class="text-xs text-terra-600">Years Teaching</div>
                        </div>
                        <div class="sticker bg-white px-5 py-3 rounded-xl border-2 border-ochre-300" style="transform: rotate(2deg);">
                            <div class="font-display text-2xl font-bold text-ochre-600">500+</div>
                            <div class="text-xs text-terra-600">Happy Students</div>
                        </div>
                        <div class="sticker bg-white px-5 py-3 rounded-xl border-2 border-sky-300" style="transform: rotate(-1deg);">
                            <div class="font-display text-2xl font-bold text-sky-600">98%</div>
                            <div class="text-xs text-terra-600">Retention Rate</div>
                        </div>
                    </div>

                    <!-- CTAs -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4">
                        <a href="#contact" class="group inline-flex items-center justify-center px-8 py-4 bg-ochre-500 text-white font-semibold rounded-full hover:bg-ochre-600 transition-all shadow-lg hover:shadow-xl hover:-translate-y-1">
                            Start Learning Today
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#courses" class="inline-flex items-center justify-center px-8 py-4 bg-white text-terra-700 font-semibold rounded-full border-2 border-terra-300 hover:border-ochre-400 hover:text-ochre-600 transition-all">
                            Explore Courses
                        </a>
                    </div>
                </div>

                <!-- Right - Visual -->
                <div class="relative">
                    <!-- Main polaroid -->
                    <div class="polaroid washi-tape max-w-sm mx-auto relative z-10">
                        <div class="aspect-square bg-gradient-to-br from-terra-200 to-sage-200 flex items-center justify-center">
                            <div class="text-center">
                                <div class="w-32 h-32 mx-auto mb-4 rounded-full bg-white shadow-lg flex items-center justify-center">
                                    <span class="text-6xl">📚</span>
                                </div>
                                <p class="font-hand text-2xl text-terra-700">¡Vamos a aprender!</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-8 left-1/2 -translate-x-1/2 font-hand text-3xl text-terra-800 whitespace-nowrap">
                            Profe Maria
                        </div>
                    </div>

                    <!-- Floating speech bubbles -->
                    <div class="absolute -top-4 -right-4 speech-bubble p-4 max-w-[200px] animate-float" style="animation-delay: 0.5s;">
                        <p class="text-sm text-terra-700 font-medium">"The best teacher I've ever had!"</p>
                        <p class="text-xs text-terra-500 mt-1">— Sarah, USA</p>
                    </div>

                    <div class="absolute -bottom-4 -left-4 speech-bubble p-4 max-w-[180px] animate-float-delayed">
                        <p class="text-sm text-terra-700 font-medium">"Finally fluent after 6 months!"</p>
                        <p class="text-xs text-terra-500 mt-1">— James, UK</p>
                    </div>

                    <!-- Decorative stickers -->
                    <div class="absolute top-1/2 -right-8 sticker w-16 h-16 bg-sage-300 rounded-full flex items-center justify-center text-2xl shadow-md hidden lg:flex">
                        ✓
                    </div>
                    <div class="absolute bottom-1/4 -left-8 sticker w-20 h-20 bg-ochre-300 rounded-full flex items-center justify-center text-2xl shadow-md hidden lg:flex" style="transform: rotate(5deg);">
                        ★
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Courses Section -->
    <section id="courses" class="py-20 px-6 bg-white relative">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16">
                <span class="inline-block px-4 py-1 bg-sage-100 text-sage-700 rounded-full text-sm font-medium mb-4">Course Offerings</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-terra-900 mb-4">Choose Your Path</h2>
                <p class="text-terra-600 max-w-2xl mx-auto">From casual conversation to professional fluency, there's a perfect fit for every learner.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                
                <!-- Course 1: Beginner -->
                <div class="group relative bg-terra-50 rounded-3xl p-8 border-2 border-terra-200 hover:border-ochre-400 transition-all hover:shadow-xl">
                    <div class="absolute -top-4 left-8">
                        <span class="inline-block px-4 py-1 bg-sage-500 text-white text-sm font-medium rounded-full shadow-md">Popular</span>
                    </div>
                    
                    <div class="w-16 h-16 bg-sage-100 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">
                        🌱
                    </div>
                    
                    <h3 class="font-display text-2xl font-bold text-terra-900 mb-2">Spanish Basics</h3>
                    <p class="text-terra-600 text-sm mb-6">Perfect for complete beginners. Build your foundation with essential vocabulary, grammar, and pronunciation.</p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-sage-200 flex items-center justify-center text-sage-700 text-xs">✓</span>
                            12 weeks curriculum
                        </li>
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-sage-200 flex items-center justify-center text-sage-700 text-xs">✓</span>
                            2 sessions per week
                        </li>
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-sage-200 flex items-center justify-center text-sage-700 text-xs">✓</span>
                            Interactive materials
                        </li>
                    </ul>
                    
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="font-display text-4xl font-bold text-sage-600">$199</span>
                        <span class="text-terra-500 text-sm">/month</span>
                    </div>
                    
                    <button class="w-full py-3 bg-sage-500 text-white rounded-xl font-medium hover:bg-sage-600 transition-colors">
                        Get Started
                    </button>
                </div>

                <!-- Course 2: Conversation -->
                <div class="group relative bg-ochre-50 rounded-3xl p-8 border-2 border-ochre-200 hover:border-ochre-500 transition-all hover:shadow-xl transform md:-translate-y-4">
                    <div class="absolute -top-4 left-8">
                        <span class="inline-block px-4 py-1 bg-ochre-500 text-white text-sm font-medium rounded-full shadow-md">Best Value</span>
                    </div>
                    
                    <div class="w-16 h-16 bg-ochre-100 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">
                        💬
                    </div>
                    
                    <h3 class="font-display text-2xl font-bold text-terra-900 mb-2">Conversation Pro</h3>
                    <p class="text-terra-600 text-sm mb-6">For intermediate learners ready to speak confidently. Real-world scenarios, cultural insights, and fluency building.</p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-ochre-200 flex items-center justify-center text-ochre-700 text-xs">✓</span>
                            8 weeks intensive
                        </li>
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-ochre-200 flex items-center justify-center text-ochre-700 text-xs">✓</span>
                            3 sessions per week
                        </li>
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-ochre-200 flex items-center justify-center text-ochre-700 text-xs">✓</span>
                            Cultural immersion
                        </li>
                    </ul>
                    
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="font-display text-4xl font-bold text-ochre-600">$299</span>
                        <span class="text-terra-500 text-sm">/month</span>
                    </div>
                    
                    <button class="w-full py-3 bg-ochre-500 text-white rounded-xl font-medium hover:bg-ochre-600 transition-colors">
                        Join Now
                    </button>
                </div>

                <!-- Course 3: Mastery -->
                <div class="group relative bg-sky-50 rounded-3xl p-8 border-2 border-sky-200 hover:border-sky-400 transition-all hover:shadow-xl">
                    <div class="w-16 h-16 bg-sky-100 rounded-2xl flex items-center justify-center text-3xl mb-6 group-hover:scale-110 transition-transform">
                        🎯
                    </div>
                    
                    <h3 class="font-display text-2xl font-bold text-terra-900 mb-2">Business Spanish</h3>
                    <p class="text-terra-600 text-sm mb-6">Professional level Spanish for career advancement. Industry-specific vocabulary and formal communication.</p>
                    
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-sky-200 flex items-center justify-center text-sky-700 text-xs">✓</span>
                            Custom curriculum
                        </li>
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-sky-200 flex items-center justify-center text-sky-700 text-xs">✓</span>
                            Flexible scheduling
                        </li>
                        <li class="flex items-center gap-3 text-sm text-terra-700">
                            <span class="w-5 h-5 rounded-full bg-sky-200 flex items-center justify-center text-sky-700 text-xs">✓</span>
                            Certification prep
                        </li>
                    </ul>
                    
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="font-display text-4xl font-bold text-sky-600">$499</span>
                        <span class="text-terra-500 text-sm">/month</span>
                    </div>
                    
                    <button class="w-full py-3 bg-sky-500 text-white rounded-xl font-medium hover:bg-sky-600 transition-colors">
                        Apply Now
                    </button>
                </div>

            </div>
        </div>
    </section>

    <!-- Teaching Method -->
    <section id="method" class="py-20 px-6 bg-terra-100 relative overflow-hidden">
        <!-- Decorative notebook paper effect -->
        <div class="absolute inset-0 notebook-lines opacity-30"></div>
        
        <div class="max-w-6xl mx-auto relative">
            <div class="text-center mb-16">
                <span class="font-hand text-3xl text-ochre-600">my approach</span>
                <h2 class="font-display text-4xl md:text-5xl font-bold text-terra-900 mt-2">How We Learn Together</h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                
                <!-- Step 1 -->
                <div class="relative">
                    <div class="sticker bg-white p-6 rounded-2xl shadow-md h-full" style="transform: rotate(-2deg);">
                        <div class="w-12 h-12 bg-ochre-100 rounded-full flex items-center justify-center text-ochre-600 font-bold text-xl mb-4">
                            1
                        </div>
                        <h4 class="font-display text-xl font-bold text-terra-900 mb-2">Assess</h4>
                        <p class="text-sm text-terra-600">We start with your goals, current level, and learning style to create your personalized roadmap.</p>
                    </div>
                    <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-terra-300"></div>
                </div>

                <!-- Step 2 -->
                <div class="relative">
                    <div class="sticker bg-white p-6 rounded-2xl shadow-md h-full" style="transform: rotate(1deg);">
                        <div class="w-12 h-12 bg-sage-100 rounded-full flex items-center justify-center text-sage-600 font-bold text-xl mb-4">
                            2
                        </div>
                        <h4 class="font-display text-xl font-bold text-terra-900 mb-2">Immerse</h4>
                        <p class="text-sm text-terra-600">Learn through stories, music, and real conversations—not boring drills and memorization.</p>
                    </div>
                    <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-terra-300"></div>
                </div>

                <!-- Step 3 -->
                <div class="relative">
                    <div class="sticker bg-white p-6 rounded-2xl shadow-md h-full" style="transform: rotate(-1deg);">
                        <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center text-sky-600 font-bold text-xl mb-4">
                            3
                        </div>
                        <h4 class="font-display text-xl font-bold text-terra-900 mb-2">Practice</h4>
                        <p class="text-sm text-terra-600">Weekly speaking sessions, writing exercises, and interactive activities to build confidence.</p>
                    </div>
                    <div class="hidden md:block absolute top-1/2 -right-4 w-8 h-0.5 bg-terra-300"></div>
                </div>

                <!-- Step 4 -->
                <div class="relative">
                    <div class="sticker bg-white p-6 rounded-2xl shadow-md h-full" style="transform: rotate(2deg);">
                        <div class="w-12 h-12 bg-ochre-100 rounded-full flex items-center justify-center text-ochre-600 font-bold text-xl mb-4">
                            4
                        </div>
                        <h4 class="font-display text-xl font-bold text-terra-900 mb-2">Flourish</h4>
                        <p class="text-sm text-terra-600">Track progress, celebrate milestones, and adjust as you grow from beginner to fluent speaker.</p>
                    </div>
                </div>

            </div>

            <!-- Quote -->
            <div class="mt-16 max-w-3xl mx-auto">
                <div class="polaroid bg-white p-8 text-center" style="transform: rotate(1deg);">
                    <svg class="w-10 h-10 text-ochre-400 mx-auto mb-4" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z"/>
                    </svg>
                    <p class="font-display text-2xl text-terra-800 italic mb-4">"Language is not a genetic gift, it is a social gift. Learning a new language is becoming a member of the club."</p>
                    <p class="font-hand text-xl text-ochre-600">— Frank Smith</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Student Stories -->
    <section id="stories" class="py-20 px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <span class="font-hand text-3xl text-ochre-600">success stories</span>
                    <h2 class="font-display text-4xl md:text-5xl font-bold text-terra-900 mt-2">Student Journeys</h2>
                </div>
                <div class="flex gap-2">
                    <button onclick="scrollStories(-1)" class="w-12 h-12 rounded-full border-2 border-terra-300 flex items-center justify-center hover:border-ochre-400 hover:text-ochre-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="scrollStories(1)" class="w-12 h-12 rounded-full border-2 border-terra-300 flex items-center justify-center hover:border-ochre-400 hover:text-ochre-600 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>

            <div id="stories-carousel" class="flex gap-6 overflow-x-auto hide-scroll snap-x snap-mandatory pb-4">
                
                <!-- Story 1 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-terra-50 rounded-3xl p-8 h-full border-2 border-terra-200">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-sage-300 to-sage-400 flex items-center justify-center text-white font-bold text-xl">
                                S
                            </div>
                            <div>
                                <h4 class="font-display text-lg font-bold text-terra-900">Sarah Chen</h4>
                                <p class="text-sm text-terra-600">Marketing Director, Toronto</p>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-4">
                            <span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span>
                        </div>
                        <p class="text-terra-700 mb-4">"I needed Spanish for work trips to Mexico. After 6 months with Maria, I'm negotiating contracts confidently. Her business focus was exactly what I needed!"</p>
                        <div class="flex items-center gap-2 text-sm text-sage-600 font-medium">
                            <span class="w-2 h-2 rounded-full bg-sage-500"></span>
                            Business Spanish Graduate
                        </div>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-ochre-50 rounded-3xl p-8 h-full border-2 border-ochre-200">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-ochre-300 to-ochre-400 flex items-center justify-center text-white font-bold text-xl">
                                J
                            </div>
                            <div>
                                <h4 class="font-display text-lg font-bold text-terra-900">James Miller</h4>
                                <p class="text-sm text-terra-600">Retired Teacher, London</p>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-4">
                            <span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span>
                        </div>
                        <p class="text-terra-700 mb-4">"At 65, I thought it was too late to learn. Maria proved me wrong! Her patience and storytelling method made every lesson enjoyable. Now I'm chatting with locals in Spain."</p>
                        <div class="flex items-center gap-2 text-sm text-ochre-600 font-medium">
                            <span class="w-2 h-2 rounded-full bg-ochre-500"></span>
                            Conversation Pro Graduate
                        </div>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-sage-50 rounded-3xl p-8 h-full border-2 border-sage-200">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-sky-300 to-sky-400 flex items-center justify-center text-white font-bold text-xl">
                                E
                            </div>
                            <div>
                                <h4 class="font-display text-lg font-bold text-terra-900">Emma Rodriguez</h4>
                                <p class="text-sm text-terra-600">College Student, Sydney</p>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-4">
                            <span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span>
                        </div>
                        <p class="text-terra-700 mb-4">"Started from zero Spanish for my exchange year. Maria's immersive approach had me conversational in 3 months. I made local friends immediately thanks to her!"</p>
                        <div class="flex items-center gap-2 text-sm text-sky-600 font-medium">
                            <span class="w-2 h-2 rounded-full bg-sky-500"></span>
                            Spanish Basics Graduate
                        </div>
                    </div>
                </div>

                <!-- Story 4 -->
                <div class="flex-none w-[85vw] md:w-[400px] snap-start">
                    <div class="bg-sky-50 rounded-3xl p-8 h-full border-2 border-sky-200">
                        <div class="flex items-center gap-4 mb-6">
                            <div class="w-14 h-14 rounded-full bg-gradient-to-br from-terra-300 to-terra-400 flex items-center justify-center text-white font-bold text-xl">
                                M
                            </div>
                            <div>
                                <h4 class="font-display text-lg font-bold text-terra-900">Michael Park</h4>
                                <p class="text-sm text-terra-600">Software Engineer, Seoul</p>
                            </div>
                        </div>
                        <div class="flex gap-1 mb-4">
                            <span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span><span class="text-ochre-400">★</span>
                        </div>
                        <p class="text-terra-700 mb-4">"The flexible scheduling was perfect for my irregular hours. Maria adapted to my pace and made sure I never fell behind. Truly personalized education."</p>
                        <div class="flex items-center gap-2 text-sm text-terra-600 font-medium">
                            <span class="w-2 h-2 rounded-full bg-terra-500"></span>
                            Currently in Business Spanish
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Cultural Immersion -->
    <section class="py-20 px-6 bg-terra-100">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <span class="font-hand text-3xl text-ochre-600">more than language</span>
                    <h2 class="font-display text-4xl md:text-5xl font-bold text-terra-900 mt-2 mb-6">Culture is Part of Every Lesson</h2>
                    <p class="text-terra-700 leading-relaxed mb-6">
                        Language isn't just vocabulary and grammar—it's the soul of a people. In our lessons, you'll explore Spanish and Latin American culture through music, film, literature, and traditions.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4">
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                            <span class="text-2xl">🎵</span>
                            <span class="text-sm font-medium text-terra-700">Music & Lyrics</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                            <span class="text-2xl">🎬</span>
                            <span class="text-sm font-medium text-terra-700">Film & TV</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                            <span class="text-2xl">📖</span>
                            <span class="text-sm font-medium text-terra-700">Literature</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                            <span class="text-2xl">🍳</span>
                            <span class="text-sm font-medium text-terra-700">Cuisine</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                            <span class="text-2xl">🎨</span>
                            <span class="text-sm font-medium text-terra-700">Art History</span>
                        </div>
                        <div class="flex items-center gap-3 p-4 bg-white rounded-xl shadow-sm">
                            <span class="text-2xl">🎉</span>
                            <span class="text-sm font-medium text-terra-700">Festivals</span>
                        </div>
                    </div>
                </div>
                
                <div class="relative">
                    <div class="polaroid bg-white p-4 max-w-sm mx-auto" style="transform: rotate(-3deg);">
                        <div class="aspect-[4/3] bg-gradient-to-br from-ochre-200 via-sage-200 to-sky-200 flex items-center justify-center">
                            <div class="text-center">
                                <span class="text-6xl mb-2 block">🌍</span>
                                <p class="font-hand text-2xl text-terra-700">¡Bienvenidos!</p>
                            </div>
                        </div>
                        <p class="text-center mt-4 font-hand text-xl text-terra-600">Culture makes language come alive</p>
                    </div>
                    
                    <!-- Floating elements -->
                    <div class="absolute -top-4 -right-4 sticker w-20 h-20 bg-ochre-300 rounded-full flex items-center justify-center text-2xl shadow-md animate-float">
                        🇪🇸
                    </div>
                    <div class="absolute -bottom-4 -left-4 sticker w-16 h-16 bg-sage-300 rounded-full flex items-center justify-center text-2xl shadow-md animate-float-delayed" style="transform: rotate(5deg);">
                        🇲🇽
                    </div>
                    <div class="absolute top-1/2 -right-8 sticker w-14 h-14 bg-sky-300 rounded-full flex items-center justify-center text-xl shadow-md hidden lg:flex" style="transform: rotate(-5deg);">
                        🇦🇷
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section id="contact" class="py-24 px-6 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-full h-full bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-ochre-100 via-transparent to-transparent opacity-50"></div>
        
        <div class="max-w-4xl mx-auto text-center relative">
            <div class="inline-block mb-6">
                <span class="font-hand text-4xl text-ochre-600">let's begin your journey</span>
            </div>
            
            <h2 class="font-display text-5xl md:text-6xl font-bold text-terra-900 mb-6">
                Ready to Speak <span class="text-ochre-600">Spanish</span>?
            </h2>
            
            <p class="text-xl text-terra-600 mb-10 max-w-2xl mx-auto">
                Book a free 15-minute consultation to discuss your goals and find the perfect learning path for you.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="mailto:hola@mariasanos.com" class="group inline-flex items-center justify-center px-8 py-4 bg-ochre-500 text-white font-semibold rounded-full hover:bg-ochre-600 transition-all shadow-lg hover:shadow-xl">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    Schedule Free Call
                </a>
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 bg-white text-terra-700 font-semibold rounded-full border-2 border-terra-300 hover:border-ochre-400 hover:text-ochre-600 transition-all">
                    View Availability
                </a>
            </div>

            <!-- Contact info cards -->
            <div class="grid md:grid-cols-3 gap-6 max-w-3xl mx-auto">
                <div class="bg-terra-50 rounded-2xl p-6 border-2 border-terra-200">
                    <div class="w-12 h-12 bg-ochre-100 rounded-full flex items-center justify-center text-ochre-600 mb-4 mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <p class="font-medium text-terra-900">hola@mariasantos.com</p>
                </div>
                
                <div class="bg-terra-50 rounded-2xl p-6 border-2 border-terra-200">
                    <div class="w-12 h-12 bg-sage-100 rounded-full flex items-center justify-center text-sage-600 mb-4 mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <p class="font-medium text-terra-900">Mon–Sat, 9am–8pm CET</p>
                </div>
                
                <div class="bg-terra-50 rounded-2xl p-6 border-2 border-terra-200">
                    <div class="w-12 h-12 bg-sky-100 rounded-full flex items-center justify-center text-sky-600 mb-4 mx-auto">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <p class="font-medium text-terra-900">Online Worldwide</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Minimal Footer -->
    <footer class="bg-terra-800 text-terra-100 py-8 px-6">
        <div class="max-w-6xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-3">
                <div class="w-8 h-8 bg-ochre-400 rounded-full flex items-center justify-center text-terra-800 font-bold text-sm">
                    M
                </div>
                <span class="font-display text-lg">Maria Santos</span>
            </div>
            <div class="text-sm text-terra-300">
                © 2024 — Teaching with heart, worldwide
            </div>
            <div class="flex gap-4">
                <a href="#" class="w-8 h-8 rounded-full bg-terra-700 flex items-center justify-center hover:bg-ochre-500 transition-colors">
                    <span class="text-sm">📧</span>
                </a>
                <a href="#" class="w-8 h-8 rounded-full bg-terra-700 flex items-center justify-center hover:bg-ochre-500 transition-colors">
                    <span class="text-sm">💬</span>
                </a>
            </div>
        </div>
    </footer>

    <script>
        // Stories carousel
        function scrollStories(direction) {
            const container = document.getElementById('stories-carousel');
            const scrollAmount = 420;
            container.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.sticker').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease-out';
            observer.observe(el);
        });
    </script>
</body>
</html>