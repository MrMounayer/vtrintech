<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Morgan | Digital Growth Architect</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Space Grotesk', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            dark: '#0a0a0a',
                            gray: '#1a1a1a',
                            accent: '#00ff9d',
                            purple: '#7000ff',
                            text: '#e5e5e5'
                        }
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
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
        body {
            background-color: #050505;
            color: #ffffff;
            overflow-x: hidden;
            cursor: none; /* Custom cursor */
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
            width: 8px;
            height: 8px;
            background-color: #00ff9d;
        }

        .cursor-outline {
            width: 40px;
            height: 40px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: width 0.2s, height 0.2s, background-color 0.2s;
        }

        body:hover .cursor-outline {
            width: 50px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0.05);
            border-color: #00ff9d;
        }

        /* Grain Overlay */
        .grain {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 9000;
            opacity: 0.05;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)'/%3E%3C/svg%3E");
        }

        /* Glassmorphism Card */
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        /* Text Scramble Effect Class */
        .scramble-text {
            display: inline-block;
        }

        /* Gradient Text */
        .text-gradient {
            background: linear-gradient(to right, #ffffff, #a5a5a5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .text-gradient-accent {
            background: linear-gradient(to right, #00ff9d, #7000ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Hide scrollbar for clean look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0a0a0a;
        }
        ::-webkit-scrollbar-thumb {
            background: #333;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #00ff9d;
        }

        /* Interactive Grid Background */
        .grid-bg {
            background-size: 50px 50px;
            background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px);
            mask-image: radial-gradient(circle at center, black 40%, transparent 100%);
        }
    </style>
</head>
<body class="antialiased selection:bg-brand-accent selection:text-black">

    <!-- Custom Cursor -->
    <div class="cursor-dot hidden md:block"></div>
    <div class="cursor-outline hidden md:block"></div>

    <!-- Grain Overlay -->
    <div class="grain"></div>

    <!-- Background Elements -->
    <div class="fixed inset-0 z-0 grid-bg pointer-events-none"></div>
    <div class="fixed top-0 left-0 w-full h-full overflow-hidden -z-10 pointer-events-none">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-brand-purple/20 rounded-full blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-brand-accent/10 rounded-full blur-[120px] animate-pulse-slow" style="animation-delay: 2s;"></div>
    </div>

    <!-- HERO SECTION -->
    <section class="relative min-h-screen flex flex-col justify-center items-center px-6 overflow-hidden">
        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="flex flex-col items-center text-center">
                <div class="mb-6 inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card border border-white/10 opacity-0 translate-y-10 animate-in">
                    <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>
                    <span class="text-xs font-mono text-brand-accent tracking-widest uppercase">Available for Projects</span>
                </div>
                
                <h1 class="font-display text-6xl md:text-8xl lg:text-9xl font-bold tracking-tighter mb-8 leading-none">
                    <span class="block overflow-hidden"><span class="hero-title-line block translate-y-full">DIGITAL</span></span>
                    <span class="block overflow-hidden"><span class="hero-title-line block translate-y-full text-transparent bg-clip-text bg-gradient-to-r from-brand-accent to-brand-purple">GROWTH</span></span>
                    <span class="block overflow-hidden"><span class="hero-title-line block translate-y-full">ARCHITECT</span></span>
                </h1>

                <p class="text-lg md:text-xl text-gray-400 max-w-2xl mb-12 font-light leading-relaxed opacity-0 translate-y-10 animate-in delay-300">
                    I help ambitious brands shatter revenue ceilings through data-driven strategies, viral content systems, and precision paid acquisition.
                </p>

                <div class="flex flex-col md:flex-row gap-4 opacity-0 translate-y-10 animate-in delay-500">
                    <button onclick="scrollToSection('cta')" class="group relative px-8 py-4 bg-white text-black font-bold rounded-full overflow-hidden transition-transform hover:scale-105 active:scale-95">
                        <span class="relative z-10 flex items-center gap-2">
                            Start a Project
                            <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </span>
                        <div class="absolute inset-0 bg-brand-accent transform scale-x-0 group-hover:scale-x-100 transition-transform origin-left duration-300 ease-out"></div>
                    </button>
                    
                    <button onclick="scrollToSection('services')" class="px-8 py-4 glass-card text-white font-medium rounded-full hover:bg-white/10 transition-all border border-white/20">
                        View Services
                    </button>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex flex-col items-center gap-2 opacity-50 animate-bounce">
            <span class="text-[10px] uppercase tracking-widest text-gray-500">Scroll</span>
            <div class="w-[1px] h-12 bg-gradient-to-b from-brand-accent to-transparent"></div>
        </div>
    </section>

    <!-- SOCIAL PROOF / LINKS SECTION -->
    <section id="socials" class="py-24 relative border-t border-white/5">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-sm font-mono text-brand-accent mb-2 tracking-widest uppercase">Community & Presence</h2>
                <h3 class="text-3xl md:text-4xl font-display font-bold">Join the Movement</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                <!-- Card 1: Twitter/X -->
                <a href="#" class="social-card group relative p-8 glass-card rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:border-brand-accent/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-blue-500/20 rounded-full flex items-center justify-center mb-6 text-blue-400 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </div>
                        <h4 class="text-xl font-bold mb-2">Twitter / X</h4>
                        <p class="text-gray-400 text-sm mb-4">Daily marketing insights, growth hacks, and industry commentary.</p>
                        <div class="flex items-center text-blue-400 text-sm font-medium">
                            <span>Follow @AlexM</span>
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Card 2: Instagram -->
                <a href="#" class="social-card group relative p-8 glass-card rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:border-pink-500/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-pink-500/20 rounded-full flex items-center justify-center mb-6 text-pink-400 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </div>
                        <h4 class="text-xl font-bold mb-2">Instagram</h4>
                        <p class="text-gray-400 text-sm mb-4">Behind the scenes of campaigns and lifestyle of a digital nomad.</p>
                        <div class="flex items-center text-pink-400 text-sm font-medium">
                            <span>Follow @AlexMorgan</span>
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                    </div>
                </a>

                <!-- Card 3: LinkedIn -->
                <a href="#" class="social-card group relative p-8 glass-card rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:border-blue-700/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-blue-700/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <div class="relative z-10">
                        <div class="w-12 h-12 bg-blue-700/20 rounded-full flex items-center justify-center mb-6 text-blue-400 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </div>
                        <h4 class="text-xl font-bold mb-2">LinkedIn</h4>
                        <p class="text-gray-400 text-sm mb-4">Professional network, case studies, and B2B marketing strategies.</p>
                        <div class="flex items-center text-blue-400 text-sm font-medium">
                            <span>Connect</span>
                            <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- WHAT WE DO SECTION -->
    <section id="services" class="py-24 relative">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-16">
                <!-- Sticky Sidebar -->
                <div class="md:w-1/3">
                    <div class="sticky top-24">
                        <h2 class="text-sm font-mono text-brand-accent mb-2 tracking-widest uppercase">Capabilities</h2>
                        <h3 class="text-4xl md:text-5xl font-display font-bold mb-6 leading-tight">What We Do</h3>
                        <p class="text-gray-400 mb-8 leading-relaxed">
                            We don't just post content; we engineer ecosystems. Our approach combines creative storytelling with ruthless data analysis.
                        </p>
                        <div class="h-1 w-20 bg-gradient-to-r from-brand-accent to-brand-purple"></div>
                    </div>
                </div>

                <!-- Services List -->
                <div class="md:w-2/3 space-y-8">
                    <!-- Service Item 1 -->
                    <div class="service-item group p-8 rounded-2xl border border-white/5 hover:border-brand-accent/50 bg-white/5 hover:bg-white/10 transition-all duration-300 cursor-pointer">
                        <div class="flex items-start justify-between mb-4">
                            <h4 class="text-2xl font-bold font-display group-hover:text-brand-accent transition-colors">Performance Marketing</h4>
                            <span class="text-4xl font-display text-white/10 group-hover:text-brand-accent/20 transition-colors">01</span>
                        </div>
                        <p class="text-gray-400 mb-6">High-ROI campaigns across Meta, Google, and TikTok. We optimize for ROAS, not just clicks.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">Meta Ads</span>
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">Google Ads</span>
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">TikTok Shop</span>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="service-item group p-8 rounded-2xl border border-white/5 hover:border-brand-purple/50 bg-white/5 hover:bg-white/10 transition-all duration-300 cursor-pointer">
                        <div class="flex items-start justify-between mb-4">
                            <h4 class="text-2xl font-bold font-display group-hover:text-brand-purple transition-colors">Content Strategy</h4>
                            <span class="text-4xl font-display text-white/10 group-hover:text-brand-purple/20 transition-colors">02</span>
                        </div>
                        <p class="text-gray-400 mb-6">Viral-first content calendars and brand storytelling that converts passive scrollers into active buyers.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">Copywriting</span>
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">Video Scripts</span>
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">SEO</span>
                        </div>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="service-item group p-8 rounded-2xl border border-white/5 hover:border-blue-500/50 bg-white/5 hover:bg-white/10 transition-all duration-300 cursor-pointer">
                        <div class="flex items-start justify-between mb-4">
                            <h4 class="text-2xl font-bold font-display group-hover:text-blue-400 transition-colors">Automation & CRO</h4>
                            <span class="text-4xl font-display text-white/10 group-hover:text-blue-500/20 transition-colors">03</span>
                        </div>
                        <p class="text-gray-400 mb-6">Email flows, landing page optimization, and marketing automation that works while you sleep.</p>
                        <div class="flex flex-wrap gap-2">
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">Klaviyo</span>
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">Hubspot</span>
                            <span class="px-3 py-1 text-xs rounded-full border border-white/10 text-gray-300">A/B Testing</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA SECTION -->
    <section id="cta" class="py-32 relative overflow-hidden">
        <!-- Background Glow -->
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-brand-accent/20 rounded-full blur-[150px] pointer-events-none"></div>

        <div class="container mx-auto px-6 relative z-10 text-center">
            <h2 class="text-5xl md:text-7xl font-display font-bold mb-8 tracking-tight">
                Ready to <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-accent to-brand-purple">Scale?</span>
            </h2>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto mb-12">
                Stop guessing. Start growing. Book a free strategy call and let's audit your current funnel.
            </p>

            <form class="max-w-md mx-auto space-y-4 text-left glass-card p-8 rounded-2xl border border-white/10" onsubmit="event.preventDefault(); alert('Thanks for reaching out! This is a demo form.');">
                <div>
                    <label class="block text-xs font-mono text-gray-500 uppercase mb-2">Name</label>
                    <input type="text" class="w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent transition-colors" placeholder="John Doe">
                </div>
                <div>
                    <label class="block text-xs font-mono text-gray-500 uppercase mb-2">Email</label>
                    <input type="email" class="w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent transition-colors" placeholder="john@company.com">
                </div>
                <div>
                    <label class="block text-xs font-mono text-gray-500 uppercase mb-2">Budget Range</label>
                    <select class="w-full bg-black/50 border border-white/10 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-brand-accent transition-colors">
                        <option>$2,000 - $5,000 / mo</option>
                        <option>$5,000 - $10,000 / mo</option>
                        <option>$10,000+ / mo</option>
                    </select>
                </div>
                <button type="submit" class="w-full py-4 bg-brand-accent text-black font-bold rounded-lg hover:bg-white transition-colors mt-4">
                    Book Strategy Call
                </button>
            </form>
        </div>
    </section>

    <!-- MINIMAL FOOTER -->
    <footer class="py-12 border-t border-white/5 text-center">
        <p class="text-gray-600 font-mono text-sm">
            &copy; 2023 Alex Morgan. All rights reserved.
        </p>
    </footer>

    <script>
        // Register GSAP
        gsap.registerPlugin(ScrollTrigger);

        // Custom Cursor Logic
        const cursorDot = document.querySelector('.cursor-dot');
        const cursorOutline = document.querySelector('.cursor-outline');

        window.addEventListener('mousemove', (e) => {
            const posX = e.clientX;
            const posY = e.clientY;

            // Dot follows immediately
            cursorDot.style.left = `${posX}px`;
            cursorDot.style.top = `${posY}px`;

            // Outline follows with lag (using GSAP for smoothness)
            gsap.to(cursorOutline, {
                x: posX,
                y: posY,
                duration: 0.15,
                ease: "power2.out"
            });
        });

        // Add hover effect to interactive elements
        const interactiveElements = document.querySelectorAll('a, button, input, select, .service-item');
        interactiveElements.forEach(el => {
            el.addEventListener('mouseenter', () => {
                gsap.to(cursorOutline, { scale: 1.5, borderColor: "#00ff9d", backgroundColor: "rgba(0, 255, 157, 0.1)" });
            });
            el.addEventListener('mouseleave', () => {
                gsap.to(cursorOutline, { scale: 1, borderColor: "rgba(255, 255, 255, 0.5)", backgroundColor: "transparent" });
            });
        });

        // Hero Animation Sequence
        const tl = gsap.timeline();

        tl.to('.hero-title-line', {
            y: 0,
            duration: 1.2,
            stagger: 0.2,
            ease: "power4.out"
        })
        .to('.animate-in', {
            opacity: 1,
            y: 0,
            duration: 0.8,
            stagger: 0.1,
            ease: "power2.out"
        }, "-=0.5");

        // Scroll Animations
        // Social Cards Stagger
        gsap.from(".social-card", {
            scrollTrigger: {
                trigger: "#socials",
                start: "top 80%",
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power3.out"
        });

        // Service Items Slide In
        gsap.from(".service-item", {
            scrollTrigger: {
                trigger: "#services",
                start: "top 70%",
            },
            x: 50,
            opacity: 0,
            duration: 0.8,
            stagger: 0.2,
            ease: "power3.out"
        });

        // Smooth Scroll Function
        function scrollToSection(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Text Scramble Effect for Service Headers on Hover
        class TextScramble {
            constructor(el) {
                this.el = el;
                this.chars = '!<>-_\\/[]{}—=+*^?#________';
                this.update = this.update.bind(this);
            }
            setText(newText) {
                const oldText = this.el.innerText;
                const length = Math.max(oldText.length, newText.length);
                const promise = new Promise((resolve) => this.resolve = resolve);
                this.queue = [];
                for (let i = 0; i < length; i++) {
                    const from = oldText[i] || '';
                    const to = newText[i] || '';
                    const start = Math.floor(Math.random() * 40);
                    const end = start + Math.floor(Math.random() * 40);
                    this.queue.push({ from, to, start, end });
                }
                cancelAnimationFrame(this.frameRequest);
                this.frame = 0;
                this.update();
                return promise;
            }
            update() {
                let output = '';
                let complete = 0;
                for (let i = 0, n = this.queue.length; i < n; i++) {
                    let { from, to, start, end, char } = this.queue[i];
                    if (this.frame >= end) {
                        complete++;
                        output += to;
                    } else if (this.frame >= start) {
                        if (!char || Math.random() < 0.28) {
                            char = this.randomChar();
                            this.queue[i].char = char;
                        }
                        output += `<span class="text-brand-accent">${char}</span>`;
                    } else {
                        output += from;
                    }
                }
                this.el.innerHTML = output;
                if (complete === this.queue.length) {
                    this.resolve();
                } else {
                    this.frameRequest = requestAnimationFrame(this.update);
                    this.frame++;
                }
            }
            randomChar() {
                return this.chars[Math.floor(Math.random() * this.chars.length)];
            }
        }

        // Apply scramble to service headers
        const serviceItems = document.querySelectorAll('.service-item h4');
        serviceItems.forEach(item => {
            const originalText = item.innerText;
            const fx = new TextScramble(item);
            
            item.parentElement.parentElement.addEventListener('mouseenter', () => {
                fx.setText(originalText);
            });
        });

    </script>
</body>
</html>