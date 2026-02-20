<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['"Space Grotesk"', 'system-ui', 'sans-serif'],
                        mono: ['"JetBrains Mono"', 'monospace'],
                    },
                    colors: {
                        cyber: {
                            black: '#0a0a0f',
                            dark: '#12121a',
                            gray: '#1a1a2e',
                            light: '#252542',
                            accent: '#00f0ff',
                            purple: '#7000ff',
                            pink: '#ff00aa',
                            lime: '#00ff88',
                            yellow: '#ffee00',
                        }
                    },
                    animation: {
                        'gradient-x': 'gradient-x 15s ease infinite',
                        'gradient-y': 'gradient-y 15s ease infinite',
                        'gradient-xy': 'gradient-xy 15s ease infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'spin-slow': 'spin 12s linear infinite',
                        'bounce-slow': 'bounce 3s infinite',
                        'wiggle': 'wiggle 1s ease-in-out infinite',
                        'slide-up': 'slide-up 0.5s ease-out',
                        'typewriter': 'typewriter 2s steps(20) infinite alternate',
                    },
                    keyframes: {
                        'gradient-y': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'center top'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'center center'
                            }
                        },
                        'gradient-x': {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'gradient-xy': {
                            '0%, 100%': {
                                'background-size': '400% 400%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            }
                        },
                        'float': {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: '1', filter: 'brightness(1)' },
                            '50%': { opacity: '.8', filter: 'brightness(1.3)' },
                        },
                        'wiggle': {
                            '0%, 100%': { transform: 'rotate(-3deg)' },
                            '50%': { transform: 'rotate(3deg)' },
                        },
                        'slide-up': {
                            '0%': { transform: 'translateY(100%)', opacity: '0' },
                            '100%': { transform: 'translateY(0)', opacity: '1' },
                        },
                        'typewriter': {
                            '0%': { width: '0%' },
                            '100%': { width: '100%' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap');
        
        body {
            font-family: 'Space Grotesk', sans-serif;
            background: #0a0a0f;
            color: #fff;
        }
        
        /* Glassmorphism 2.0 - Enhanced with noise and borders */
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 
                0 8px 32px 0 rgba(0, 0, 0, 0.37),
                inset 0 0 0 1px rgba(255, 255, 255, 0.05);
        }
        
        .glass-card-hover:hover {
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-4px) scale(1.01);
            box-shadow: 
                0 20px 60px 0 rgba(0, 0, 0, 0.5),
                inset 0 0 0 1px rgba(255, 255, 255, 0.1),
                0 0 30px rgba(0, 240, 255, 0.1);
        }
        
        /* Liquid Gradient Background */
        .liquid-bg {
            background: linear-gradient(-45deg, #7000ff, #ff00aa, #00f0ff, #00ff88);
            background-size: 400% 400%;
            animation: gradient-xy 15s ease infinite;
        }
        
        /* Mesh Gradient */
        .mesh-gradient {
            background-color: #0a0a0f;
            background-image: 
                radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), 
                radial-gradient(at 50% 0%, hsla(225,39%,30%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(339,49%,30%,1) 0, transparent 50%), 
                radial-gradient(at 0% 50%, hsla(340,60%,40%,1) 0, transparent 50%), 
                radial-gradient(at 100% 50%, hsla(240,60%,40%,1) 0, transparent 50%);
        }
        
        /* Spotlight Effect */
        .spotlight {
            background: radial-gradient(600px circle at var(--x) var(--y), rgba(0,240,255,0.15), transparent 40%);
        }
        
        /* Text Gradient */
        .text-gradient {
            background: linear-gradient(135deg, #00f0ff 0%, #7000ff 50%, #ff00aa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Glow Effects */
        .glow-cyan {
            box-shadow: 0 0 20px rgba(0, 240, 255, 0.3);
        }
        
        .glow-purple {
            box-shadow: 0 0 20px rgba(112, 0, 255, 0.3);
        }
        
        /* Bento Grid */
        .bento-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 1rem;
        }
        
        .bento-item {
            position: relative;
            overflow: hidden;
            border-radius: 24px;
        }
        
        .bento-tall {
            grid-row: span 2;
        }
        
        .bento-wide {
            grid-column: span 2;
        }
        
        .bento-large {
            grid-column: span 2;
            grid-row: span 2;
        }
        
        /* Glitch Effect */
        .glitch {
            position: relative;
        }
        
        .glitch::before,
        .glitch::after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        .glitch::before {
            left: 2px;
            text-shadow: -2px 0 #ff00aa;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim 5s infinite linear alternate-reverse;
        }
        
        .glitch::after {
            left: -2px;
            text-shadow: -2px 0 #00f0ff;
            clip: rect(44px, 450px, 56px, 0);
            animation: glitch-anim2 5s infinite linear alternate-reverse;
        }
        
        @keyframes glitch-anim {
            0% { clip: rect(30px, 9999px, 15px, 0); }
            20% { clip: rect(80px, 9999px, 70px, 0); }
            40% { clip: rect(10px, 9999px, 55px, 0); }
            60% { clip: rect(50px, 9999px, 18px, 0); }
            80% { clip: rect(90px, 9999px, 85px, 0); }
            100% { clip: rect(35px, 9999px, 15px, 0); }
        }
        
        @keyframes glitch-anim2 {
            0% { clip: rect(65px, 9999px, 99px, 0); }
            20% { clip: rect(25px, 9999px, 50px, 0); }
            40% { clip: rect(85px, 9999px, 10px, 0); }
            60% { clip: rect(15px, 9999px, 75px, 0); }
            80% { clip: rect(55px, 9999px, 25px, 0); }
            100% { clip: rect(75px, 9999px, 95px, 0); }
        }
        
        /* Hide Scrollbar */
        .hide-scroll::-webkit-scrollbar {
            display: none;
        }
        .hide-scroll {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        
        /* Custom Cursor Trail */
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
            background-color: #00f0ff;
        }
        
        .cursor-outline {
            width: 30px;
            height: 30px;
            border: 2px solid rgba(0, 240, 255, 0.5);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }
        
        /* Scroll Reveal */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }
        
        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* 3D Tilt Effect */
        .tilt-card {
            transform-style: preserve-3d;
            transform: perspective(1000px);
        }
        
        .tilt-content {
            transform: translateZ(20px);
        }
        
        /* Aurora Border */
        .aurora-border {
            position: relative;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 24px;
            z-index: 1;
        }
        
        .aurora-border::before {
            content: '';
            position: absolute;
            inset: -2px;
            border-radius: 26px;
            padding: 2px;
            background: linear-gradient(45deg, #00f0ff, #7000ff, #ff00aa, #00f0ff);
            background-size: 400% 400%;
            animation: gradient-xy 3s ease infinite;
            -webkit-mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            mask: 
                linear-gradient(#fff 0 0) content-box, 
                linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            z-index: -1;
        }
    </style>
</head>
<body class="mesh-gradient min-h-screen overflow-x-hidden">

    <!-- Custom Cursor -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-outline hidden md:block"></div>

    <!-- Spotlight Overlay -->
    <div id="spotlight" class="fixed inset-0 pointer-events-none z-0 spotlight opacity-0 transition-opacity duration-500"></div>

    <!-- Hero Section - Bento Grid Layout -->
    <section class="relative min-h-screen px-4 py-8 md:px-8 md:py-12 flex items-center justify-center z-10">
        <div class="max-w-7xl mx-auto w-full">
            
            <!-- Bento Grid Container -->
            <div class="bento-grid auto-rows-[200px] md:auto-rows-[180px]">
                
                <!-- Main Hero Card - Large -->
                <div class="bento-item bento-large glass-card glass-card-hover p-8 flex flex-col justify-between group">
                    <div class="flex justify-between items-start">
                        <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-cyber-accent/10 border border-cyber-accent/20 text-cyber-accent text-xs font-mono uppercase tracking-wider">
                            <span class="w-1.5 h-1.5 rounded-full bg-cyber-accent animate-pulse"></span>
                            Available for work
                        </span>
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center group-hover:bg-cyber-accent/20 transition-colors">
                            <svg class="w-5 h-5 text-cyber-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                            </svg>
                        </div>
                    </div>
                    
                    <div>
                        <h1 class="text-4xl md:text-6xl font-bold mb-4 leading-tight">
                            We build <span class="text-gradient glitch" data-text="digital">digital</span><br/>
                            realities
                        </h1>
                        <p class="text-gray-400 max-w-md text-sm md:text-base">
                            Next-gen web experiences combining AI, 3D, and immersive interfaces.
                        </p>
                    </div>
                </div>

                <!-- Stats Card -->
                <div class="bento-item glass-card glass-card-hover p-6 flex flex-col justify-center items-center text-center">
                    <div class="text-5xl font-black text-gradient mb-2">150+</div>
                    <div class="text-xs text-gray-400 uppercase tracking-widest">Projects Delivered</div>
                </div>

                <!-- Interactive Orb -->
                <div class="bento-item glass-card p-0 overflow-hidden relative group">
                    <div class="absolute inset-0 liquid-bg opacity-20 group-hover:opacity-40 transition-opacity duration-500"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="w-24 h-24 rounded-full bg-gradient-to-r from-cyber-accent to-cyber-purple blur-xl opacity-60 animate-pulse-glow"></div>
                        <div class="relative w-16 h-16 rounded-full bg-cyber-dark border border-cyber-accent/30 flex items-center justify-center">
                            <svg class="w-8 h-8 text-cyber-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Tech Stack -->
                <div class="bento-item glass-card glass-card-hover p-6 flex flex-col justify-between">
                    <div class="text-xs text-gray-400 uppercase tracking-widest mb-4">Tech Stack</div>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 rounded-lg bg-cyber-accent/10 border border-cyber-accent/20 text-cyber-accent text-xs">Laravel</span>
                        <span class="px-3 py-1 rounded-lg bg-cyber-purple/10 border border-cyber-purple/20 text-cyber-purple text-xs">React</span>
                        <span class="px-3 py-1 rounded-lg bg-cyber-pink/10 border border-cyber-pink/20 text-cyber-pink text-xs">Three.js</span>
                        <span class="px-3 py-1 rounded-lg bg-cyber-lime/10 border border-cyber-lime/20 text-cyber-lime text-xs">AI</span>
                    </div>
                </div>

                <!-- 3D Tilt Card -->
                <div class="bento-item bento-tilt glass-card glass-card-hover p-6 flex flex-col justify-between tilt-card" id="tilt-card">
                    <div class="tilt-content">
                        <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-cyber-purple to-cyber-pink flex items-center justify-center mb-4 glow-purple">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-lg mb-1">Innovation First</h3>
                        <p class="text-xs text-gray-400">Pushing boundaries with experimental tech</p>
                    </div>
                </div>

                <!-- Live Clock -->
                <div class="bento-item glass-card p-6 flex flex-col justify-center">
                    <div class="font-mono text-3xl md:text-4xl text-cyber-accent" id="clock">00:00:00</div>
                    <div class="text-xs text-gray-500 mt-2 uppercase tracking-widest">Local Time</div>
                </div>

                <!-- CTA Card -->
                <div class="bento-item glass-card glass-card-hover p-6 flex items-center justify-center cursor-pointer group" onclick="document.getElementById('work').scrollIntoView({behavior: 'smooth'})">
                    <div class="text-center">
                        <div class="w-16 h-16 rounded-full border-2 border-cyber-accent/30 flex items-center justify-center mx-auto mb-3 group-hover:bg-cyber-accent/10 transition-colors">
                            <svg class="w-8 h-8 text-cyber-accent group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-300">View Work</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Social Links - Horizontal Scroll with Glass Cards -->
    <section class="py-20 px-4 md:px-8 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-end justify-between mb-8">
                <div>
                    <span class="text-cyber-accent text-xs font-mono uppercase tracking-widest mb-2 block">Connect</span>
                    <h2 class="text-3xl md:text-4xl font-bold">Find us online</h2>
                </div>
                <div class="hidden md:flex gap-2">
                    <button onclick="scrollSocial(-1)" class="w-10 h-10 rounded-xl glass-card flex items-center justify-center hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="scrollSocial(1)" class="w-10 h-10 rounded-xl glass-card flex items-center justify-center hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>

            <div id="social-scroll" class="flex gap-4 overflow-x-auto hide-scroll snap-x snap-mandatory pb-4">
                
                <!-- Twitter/X -->
                <a href="#" class="flex-none w-72 snap-start glass-card glass-card-hover p-6 rounded-2xl group">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-cyber-accent/20 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </div>
                        <svg class="w-5 h-5 text-gray-500 group-hover:text-cyber-accent transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </div>
                    <h3 class="font-bold text-lg mb-1">Twitter / X</h3>
                    <p class="text-sm text-gray-400">@nexgenstudio</p>
                    <div class="mt-4 flex items-center gap-2 text-xs text-gray-500">
                        <span class="w-2 h-2 rounded-full bg-green-500"></span>
                        Active now
                    </div>
                </a>

                <!-- GitHub -->
                <a href="#" class="flex-none w-72 snap-start glass-card glass-card-hover p-6 rounded-2xl group">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-cyber-purple/20 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </div>
                        <svg class="w-5 h-5 text-gray-500 group-hover:text-cyber-purple transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </div>
                    <h3 class="font-bold text-lg mb-1">GitHub</h3>
                    <p class="text-sm text-gray-400">@nexgenstudio</p>
                    <div class="mt-4 text-xs text-gray-500">
                        42 repositories
                    </div>
                </a>

                <!-- Discord -->
                <a href="#" class="flex-none w-72 snap-start glass-card glass-card-hover p-6 rounded-2xl group">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-white/5 flex items-center justify-center group-hover:bg-cyber-pink/20 transition-colors">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028 14.09 14.09 0 001.226-1.994.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/></svg>
                        </div>
                        <svg class="w-5 h-5 text-gray-500 group-hover:text-cyber-pink transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </div>
                    <h3 class="font-bold text-lg mb-1">Discord</h3>
                    <p class="text-sm text-gray-400">Join Community</p>
                    <div class="mt-4 flex -space-x-2">
                        <div class="w-6 h-6 rounded-full bg-cyber-accent/30 border border-cyber-dark"></div>
                        <div class="w-6 h-6 rounded-full bg-cyber-purple/30 border border-cyber-dark"></div>
                        <div class="w-6 h-6 rounded-full bg-cyber-pink/30 border border-cyber-dark"></div>
                        <div class="w-6 h-6 rounded-full bg-white/10 border border-cyber-dark flex items-center justify-center text-[10px]">+2k</div>
                    </div>
                </a>

                <!-- Email -->
                <a href="#" class="flex-none w-72 snap-start aurora-border p-6 rounded-2xl group bg-cyber-dark/50">
                    <div class="flex items-center justify-between mb-6">
                        <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-cyber-accent to-cyber-purple flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="text-xs font-mono text-cyber-accent">NEW</span>
                    </div>
                    <h3 class="font-bold text-lg mb-1 text-gradient">Start Project</h3>
                    <p class="text-sm text-gray-400">hello@nexgen.studio</p>
                    <div class="mt-4 text-xs text-cyber-lime">
                        Average response: 2hrs
                    </div>
                </a>

            </div>
        </div>
    </section>

    <!-- Work Carousel - 3D Perspective Cards -->
    <section id="work" class="py-20 px-4 md:px-8 relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <span class="text-cyber-purple text-xs font-mono uppercase tracking-widest mb-2 block">Portfolio</span>
                    <h2 class="text-4xl md:text-5xl font-bold">Selected Work</h2>
                </div>
                
                <!-- Filter Pills -->
                <div class="flex gap-2 flex-wrap">
                    <button class="px-4 py-2 rounded-full bg-cyber-accent/20 border border-cyber-accent/40 text-cyber-accent text-sm font-medium hover:bg-cyber-accent/30 transition-colors">All</button>
                    <button class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:bg-white/10 transition-colors">Web</button>
                    <button class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:bg-white/10 transition-colors">App</button>
                    <button class="px-4 py-2 rounded-full bg-white/5 border border-white/10 text-gray-400 text-sm font-medium hover:bg-white/10 transition-colors">Brand</button>
                </div>
            </div>

            <!-- 3D Carousel -->
            <div class="relative h-[500px] perspective-1000">
                <div id="carousel-3d" class="relative w-full h-full flex items-center justify-center">
                    
                    <!-- Card 1 -->
                    <div class="carousel-card absolute w-80 md:w-96 glass-card rounded-3xl overflow-hidden transition-all duration-500 cursor-pointer" data-index="0">
                        <div class="aspect-[4/3] bg-gradient-to-br from-cyber-accent/20 to-cyber-purple/20 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%2300f0ff\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-24 h-24 rounded-2xl bg-cyber-accent/20 backdrop-blur-xl border border-cyber-accent/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-4xl">🚀</span>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 rounded-full bg-black/50 backdrop-blur-md text-xs font-mono text-cyber-accent border border-cyber-accent/30">2024</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Nebula Dashboard</h3>
                            <p class="text-sm text-gray-400 mb-4">AI-powered analytics platform with real-time data visualization</p>
                            <div class="flex gap-2">
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">React</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">Three.js</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">AI</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="carousel-card absolute w-80 md:w-96 glass-card rounded-3xl overflow-hidden transition-all duration-500 cursor-pointer" data-index="1">
                        <div class="aspect-[4/3] bg-gradient-to-br from-cyber-pink/20 to-cyber-purple/20 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ff00aa\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-24 h-24 rounded-2xl bg-cyber-pink/20 backdrop-blur-xl border border-cyber-pink/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-4xl">🎨</span>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 rounded-full bg-black/50 backdrop-blur-md text-xs font-mono text-cyber-pink border border-cyber-pink/30">2024</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">Chromatica</h3>
                            <p class="text-sm text-gray-400 mb-4">Generative art platform for NFT creators and digital artists</p>
                            <div class="flex gap-2">
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">Vue</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">WebGL</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">Blockchain</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="carousel-card absolute w-80 md:w-96 glass-card rounded-3xl overflow-hidden transition-all duration-500 cursor-pointer" data-index="2">
                        <div class="aspect-[4/3] bg-gradient-to-br from-cyber-lime/20 to-cyber-accent/20 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%2300ff88\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-24 h-24 rounded-2xl bg-cyber-lime/20 backdrop-blur-xl border border-cyber-lime/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-4xl">🌱</span>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 rounded-full bg-black/50 backdrop-blur-md text-xs font-mono text-cyber-lime border border-cyber-lime/30">2023</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">EcoTrack</h3>
                            <p class="text-sm text-gray-400 mb-4">Carbon footprint tracking app with IoT integration</p>
                            <div class="flex gap-2">
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">Flutter</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">IoT</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">ML</span>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="carousel-card absolute w-80 md:w-96 glass-card rounded-3xl overflow-hidden transition-all duration-500 cursor-pointer" data-index="3">
                        <div class="aspect-[4/3] bg-gradient-to-br from-cyber-yellow/20 to-cyber-orange/20 relative overflow-hidden group">
                            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffee00\' fill-opacity=\'0.05\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
                            <div class="absolute inset-0 flex items-center justify-center">
                                <div class="w-24 h-24 rounded-2xl bg-cyber-yellow/20 backdrop-blur-xl border border-cyber-yellow/30 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-4xl">⚡</span>
                                </div>
                            </div>
                            <div class="absolute top-4 right-4">
                                <span class="px-3 py-1 rounded-full bg-black/50 backdrop-blur-md text-xs font-mono text-cyber-yellow border border-cyber-yellow/30">2023</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-bold mb-2">VoltPay</h3>
                            <p class="text-sm text-gray-400 mb-4">Lightning-fast payment processing with crypto support</p>
                            <div class="flex gap-2">
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">Node.js</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">Web3</span>
                                <span class="px-2 py-1 rounded bg-white/5 text-xs text-gray-400">Security</span>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Navigation -->
                <div class="absolute bottom-0 left-1/2 -translate-x-1/2 flex gap-4">
                    <button onclick="rotateCarousel(-1)" class="w-12 h-12 rounded-full glass-card flex items-center justify-center hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>
                    <button onclick="rotateCarousel(1)" class="w-12 h-12 rounded-full glass-card flex items-center justify-center hover:bg-white/10 transition-colors">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Kinetic Typography -->
    <section class="py-32 px-4 md:px-8 relative z-10 overflow-hidden">
        <div class="absolute inset-0 liquid-bg opacity-10"></div>
        <div class="max-w-4xl mx-auto text-center relative">
            <h2 class="text-5xl md:text-7xl lg:text-8xl font-black mb-8 leading-none">
                <span class="block hover:text-cyber-accent transition-colors duration-300 cursor-default">LET'S</span>
                <span class="block text-gradient hover:scale-105 transition-transform duration-300 cursor-default inline-block">CREATE</span>
                <span class="block hover:text-cyber-pink transition-colors duration-300 cursor-default">TOGETHER</span>
            </h2>
            <p class="text-xl text-gray-400 mb-12 max-w-2xl mx-auto">
                Ready to build the next generation of digital experiences? We're here to make it happen.
            </p>
            <button class="group relative px-8 py-4 bg-cyber-accent text-cyber-black font-bold text-lg rounded-full overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-[0_0_40px_rgba(0,240,255,0.4)]">
                <span class="relative z-10 flex items-center gap-2">
                    Start Project
                    <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </span>
                <div class="absolute inset-0 bg-white opacity-0 group-hover:opacity-20 transition-opacity"></div>
            </button>
        </div>
    </section>

    <!-- Ultra Minimal Footer -->
    <footer class="border-t border-white/10 py-8 px-4 md:px-8 relative z-10">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="font-bold text-xl tracking-tight">
                NEXGEN<span class="text-cyber-accent">.</span>
            </div>
            <div class="font-mono text-xs text-gray-500">
                © 2024 — CRAFTED WITH PRECISION
            </div>
        </div>
    </footer>

    <script>
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
            }, { duration: 500, fill: 'forwards' });
            
            // Spotlight effect
            const spotlight = document.getElementById('spotlight');
            spotlight.style.setProperty('--x', `${posX}px`);
            spotlight.style.setProperty('--y', `${posY}px`);
            spotlight.classList.remove('opacity-0');
        });

        // Clock
        function updateClock() {
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-US', { 
                hour12: false, 
                hour: '2-digit', 
                minute: '2-digit', 
                second: '2-digit' 
            });
            document.getElementById('clock').textContent = timeString;
        }
        setInterval(updateClock, 1000);
        updateClock();

        // 3D Tilt Effect
        const tiltCard = document.getElementById('tilt-card');
        if (tiltCard) {
            tiltCard.addEventListener('mousemove', (e) => {
                const rect = tiltCard.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                
                const rotateX = (y - centerY) / 10;
                const rotateY = (centerX - x) / 10;
                
                tiltCard.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
            });
            
            tiltCard.addEventListener('mouseleave', () => {
                tiltCard.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
            });
        }

        // Social Scroll
        function scrollSocial(direction) {
            const container = document.getElementById('social-scroll');
            container.scrollBy({ left: direction * 300, behavior: 'smooth' });
        }

        // 3D Carousel
        let currentIndex = 0;
        const cards = document.querySelectorAll('.carousel-card');
        const totalCards = cards.length;

        function updateCarousel() {
            cards.forEach((card, index) => {
                const offset = index - currentIndex;
                const absOffset = Math.abs(offset);
                
                let translateX = offset * 120;
                let translateZ = -absOffset * 150;
                let rotateY = offset * -15;
                let opacity = 1 - (absOffset * 0.3);
                let scale = 1 - (absOffset * 0.1);
                
                if (absOffset > 2) {
                    opacity = 0;
                    translateZ = -500;
                }
                
                card.style.transform = `
                    translateX(${translateX}%) 
                    translateZ(${translateZ}px) 
                    rotateY(${rotateY}deg)
                    scale(${scale})
                `;
                card.style.opacity = opacity;
                card.style.zIndex = totalCards - absOffset;
            });
        }

        function rotateCarousel(direction) {
            currentIndex = (currentIndex + direction + totalCards) % totalCards;
            updateCarousel();
        }

        // Initialize carousel
        updateCarousel();

        // Auto rotate
        setInterval(() => rotateCarousel(1), 5000);

        // Scroll Reveal
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Magnetic effect for buttons
        document.querySelectorAll('button, a').forEach(btn => {
            btn.addEventListener('mousemove', (e) => {
                const rect = btn.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                
                btn.style.transform = `translate(${x * 0.2}px, ${y * 0.2}px)`;
            });
            
            btn.addEventListener('mouseleave', () => {
                btn.style.transform = 'translate(0, 0)';
            });
        });
    </script>
</body>
</html>