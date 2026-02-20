<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    animation: {
                        'fade-in-up': 'fadeInUp 0.8s ease-out',
                        'fade-in': 'fadeIn 1s ease-out',
                        'slide': 'slide 20s linear infinite',
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(30px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        },
                        fadeIn: {
                            '0%': { opacity: '0' },
                            '100%': { opacity: '1' },
                        },
                        slide: {
                            '0%': { transform: 'translateX(0)' },
                            '100%': { transform: 'translateX(-50%)' },
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
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .glass-effect {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .carousel-container {
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }
        
        .carousel-item {
            scroll-snap-align: start;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-slate-900 text-white overflow-x-hidden">

    <!-- Hero Section -->
    <section id="hero" class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0 bg-slate-900">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-indigo-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow"></div>
            <div class="absolute top-0 right-1/4 w-96 h-96 bg-purple-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="animation-delay: 2s;"></div>
            <div class="absolute -bottom-32 left-1/3 w-96 h-96 bg-pink-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-pulse-slow" style="animation-delay: 4s;"></div>
        </div>

        <!-- Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%239C92AC%22%20fill-opacity%3D%220.05%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>

        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in-up">
                
                
                <h1 class="text-5xl md:text-7xl lg:text-8xl font-bold tracking-tight mb-6 leading-tight">
                    Build something <br />
                    <span class="gradient-text">extraordinary</span>
                </h1>
                
                <p class="mt-6 text-xl md:text-2xl text-gray-400 max-w-3xl mx-auto leading-relaxed font-light">
                    Create stunning web applications with Laravel and Tailwind CSS. 
                    The perfect foundation for your next big idea.
                </p>
                
                <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center items-center">
                   
                </div>

                <!-- Stats -->
                <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-1">10k+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Developers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-1">500+</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Components</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-1">99%</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Uptime</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl md:text-4xl font-bold text-white mb-1">24/7</div>
                        <div class="text-sm text-gray-500 uppercase tracking-wider">Support</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Floating Elements -->
        <div class="absolute bottom-10 left-10 w-20 h-20 bg-indigo-500/20 rounded-2xl animate-float hidden lg:block backdrop-blur-sm border border-indigo-500/30"></div>
        <div class="absolute top-40 right-10 w-16 h-16 bg-purple-500/20 rounded-full animate-float hidden lg:block backdrop-blur-sm border border-purple-500/30" style="animation-delay: 1s;"></div>
        <div class="absolute bottom-40 right-20 w-24 h-24 bg-pink-500/20 rounded-xl animate-float hidden lg:block backdrop-blur-sm border border-pink-500/30 transform rotate-45" style="animation-delay: 2s;"></div>
    </section>

    <!-- Social Links Section -->
    <section id="social" class="py-20 relative overflow-hidden bg-slate-800/50">
        <div class="absolute inset-0 bg-gradient-to-b from-slate-900 via-slate-800/50 to-slate-900"></div>
        
        <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Contactez nous sur les Reseaux</h2>
                <p class="text-gray-400 max-w-2xl mx-auto">Connect with thousands of developers building the future of the web.</p>
            </div>

            <!-- Infinite Scroll Marquee -->
            <div class="relative overflow-hidden py-8">
                <div class="flex animate-slide whitespace-nowrap">
                    <!-- First set -->
                    <div class="flex space-x-8 mx-4">
                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-indigo-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#1DA1F2]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#1DA1F2]" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">Twitter</div>
                                <div class="text-sm text-gray-400">@laravel</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-gray-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-gray-100/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">GitHub</div>
                                <div class="text-sm text-gray-400">@laravel</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-indigo-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#5865F2]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#5865F2]" fill="currentColor" viewBox="0 0 24 24"><path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028 14.09 14.09 0 001.226-1.994.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">Discord</div>
                                <div class="text-sm text-gray-400">Join Server</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-blue-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#0077b5]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#0077b5]" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">LinkedIn</div>
                                <div class="text-sm text-gray-400">Follow Us</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-red-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#FF0000]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#FF0000]" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">YouTube</div>
                                <div class="text-sm text-gray-400">Subscribe</div>
                            </div>
                        </a>
                    </div>
                    <!-- Duplicate for seamless loop -->
                    <div class="flex space-x-8 mx-4">
                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-indigo-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#1DA1F2]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#1DA1F2]" fill="currentColor" viewBox="0 0 24 24"><path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">Twitter</div>
                                <div class="text-sm text-gray-400">@laravel</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-gray-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-gray-100/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">GitHub</div>
                                <div class="text-sm text-gray-400">@laravel</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-indigo-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#5865F2]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#5865F2]" fill="currentColor" viewBox="0 0 24 24"><path d="M20.317 4.37a19.791 19.791 0 00-4.885-1.515.074.074 0 00-.079.037c-.21.375-.444.864-.608 1.25a18.27 18.27 0 00-5.487 0 12.64 12.64 0 00-.617-1.25.077.077 0 00-.079-.037A19.736 19.736 0 003.677 4.37a.07.07 0 00-.032.027C.533 9.046-.32 13.58.099 18.057a.082.082 0 00.031.057 19.9 19.9 0 005.993 3.03.078.078 0 00.084-.028 14.09 14.09 0 001.226-1.994.076.076 0 00-.041-.106 13.107 13.107 0 01-1.872-.892.077.077 0 01-.008-.128 10.2 10.2 0 00.372-.292.074.074 0 01.077-.01c3.928 1.793 8.18 1.793 12.062 0a.074.074 0 01.078.01c.12.098.246.198.373.292a.077.077 0 01-.006.127 12.299 12.299 0 01-1.873.892.077.077 0 00-.041.107c.36.698.772 1.362 1.225 1.993a.076.076 0 00.084.028 19.839 19.839 0 006.002-3.03.077.077 0 00.032-.054c.5-5.177-.838-9.674-3.549-13.66a.061.061 0 00-.031-.03zM8.02 15.33c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.956-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.956 2.418-2.157 2.418zm7.975 0c-1.183 0-2.157-1.085-2.157-2.419 0-1.333.955-2.419 2.157-2.419 1.21 0 2.176 1.096 2.157 2.42 0 1.333-.946 2.418-2.157 2.418z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">Discord</div>
                                <div class="text-sm text-gray-400">Join Server</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-blue-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#0077b5]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#0077b5]" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">LinkedIn</div>
                                <div class="text-sm text-gray-400">Follow Us</div>
                            </div>
                        </a>

                        <a href="#" class="flex items-center space-x-3 px-8 py-4 bg-slate-800 rounded-2xl border border-slate-700 hover:border-red-500/50 hover:bg-slate-700/50 transition-all duration-300 group min-w-max">
                            <div class="w-10 h-10 bg-[#FF0000]/10 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform">
                                <svg class="w-5 h-5 text-[#FF0000]" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </div>
                            <div>
                                <div class="font-semibold text-white">YouTube</div>
                                <div class="text-sm text-gray-400">Subscribe</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Carousel Section -->
    <section id="showcase" class="py-24 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12">
                <div>
                    <h2 class="text-4xl md:text-5xl font-bold mb-4">Featured Projects</h2>
                    <p class="text-gray-400 text-lg max-w-xl">Explore our latest work and see how we help businesses transform their digital presence.</p>
                </div>
                <div class="flex space-x-4 mt-6 md:mt-0">
                    <button onclick="scrollCarousel(-1)" class="w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-all duration-300 group">
                        <svg class="w-5 h-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button onclick="scrollCarousel(1)" class="w-12 h-12 rounded-full border border-gray-600 flex items-center justify-center hover:bg-white hover:text-slate-900 transition-all duration-300 group">
                        <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Carousel Container -->
            <div id="carousel" class="carousel-container flex overflow-x-auto hide-scrollbar gap-6 pb-8 snap-x snap-mandatory">
                <!-- Card 1 -->
                <div class="carousel-item flex-none w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] group">
                    <div class="relative bg-slate-800 rounded-3xl overflow-hidden border border-slate-700 hover:border-indigo-500/50 transition-all duration-500 hover:transform hover:scale-[1.02] hover:shadow-2xl hover:shadow-indigo-500/20">
                        <div class="aspect-[4/3] overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-indigo-600 to-purple-700 flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
                                <svg class="w-20 h-20 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-3 py-1 bg-indigo-500/10 text-indigo-400 text-xs font-semibold rounded-full border border-indigo-500/20">Web App</span>
                                <span class="text-gray-500 text-sm">2024</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-indigo-400 transition-colors">E-Commerce Platform</h3>
                            <p class="text-gray-400 text-sm mb-4">Modern shopping experience with real-time inventory and AI recommendations.</p>
                            <div class="flex items-center text-indigo-400 text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                View Project 
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="carousel-item flex-none w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] group">
                    <div class="relative bg-slate-800 rounded-3xl overflow-hidden border border-slate-700 hover:border-purple-500/50 transition-all duration-500 hover:transform hover:scale-[1.02] hover:shadow-2xl hover:shadow-purple-500/20">
                        <div class="aspect-[4/3] overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-purple-600 to-pink-700 flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
                                <svg class="w-20 h-20 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-3 py-1 bg-purple-500/10 text-purple-400 text-xs font-semibold rounded-full border border-purple-500/20">Mobile</span>
                                <span class="text-gray-500 text-sm">2024</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-purple-400 transition-colors">Finance Dashboard</h3>
                            <p class="text-gray-400 text-sm mb-4">Real-time analytics and portfolio management for modern investors.</p>
                            <div class="flex items-center text-purple-400 text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                View Project 
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="carousel-item flex-none w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] group">
                    <div class="relative bg-slate-800 rounded-3xl overflow-hidden border border-slate-700 hover:border-pink-500/50 transition-all duration-500 hover:transform hover:scale-[1.02] hover:shadow-2xl hover:shadow-pink-500/20">
                        <div class="aspect-[4/3] overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-pink-600 to-rose-700 flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
                                <svg class="w-20 h-20 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-3 py-1 bg-pink-500/10 text-pink-400 text-xs font-semibold rounded-full border border-pink-500/20">SaaS</span>
                                <span class="text-gray-500 text-sm">2023</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-pink-400 transition-colors">Task Management</h3>
                            <p class="text-gray-400 text-sm mb-4">Collaborative workspace for teams with advanced automation features.</p>
                            <div class="flex items-center text-pink-400 text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                View Project 
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="carousel-item flex-none w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] group">
                    <div class="relative bg-slate-800 rounded-3xl overflow-hidden border border-slate-700 hover:border-blue-500/50 transition-all duration-500 hover:transform hover:scale-[1.02] hover:shadow-2xl hover:shadow-blue-500/20">
                        <div class="aspect-[4/3] overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-blue-600 to-cyan-700 flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
                                <svg class="w-20 h-20 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-3 py-1 bg-blue-500/10 text-blue-400 text-xs font-semibold rounded-full border border-blue-500/20">Analytics</span>
                                <span class="text-gray-500 text-sm">2023</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-blue-400 transition-colors">Data Visualization</h3>
                            <p class="text-gray-400 text-sm mb-4">Interactive charts and reports for enterprise data analysis.</p>
                            <div class="flex items-center text-blue-400 text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                View Project 
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="carousel-item flex-none w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] group">
                    <div class="relative bg-slate-800 rounded-3xl overflow-hidden border border-slate-700 hover:border-emerald-500/50 transition-all duration-500 hover:transform hover:scale-[1.02] hover:shadow-2xl hover:shadow-emerald-500/20">
                        <div class="aspect-[4/3] overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-emerald-600 to-teal-700 flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
                                <svg class="w-20 h-20 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-3 py-1 bg-emerald-500/10 text-emerald-400 text-xs font-semibold rounded-full border border-emerald-500/20">Social</span>
                                <span class="text-gray-500 text-sm">2023</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-emerald-400 transition-colors">Community Platform</h3>
                            <p class="text-gray-400 text-sm mb-4">Connect and engage with niche communities worldwide.</p>
                            <div class="flex items-center text-emerald-400 text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                View Project 
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="carousel-item flex-none w-full md:w-[calc(50%-12px)] lg:w-[calc(33.333%-16px)] group">
                    <div class="relative bg-slate-800 rounded-3xl overflow-hidden border border-slate-700 hover:border-orange-500/50 transition-all duration-500 hover:transform hover:scale-[1.02] hover:shadow-2xl hover:shadow-orange-500/20">
                        <div class="aspect-[4/3] overflow-hidden">
                            <div class="w-full h-full bg-gradient-to-br from-orange-600 to-red-700 flex items-center justify-center group-hover:scale-110 transition-transform duration-700">
                                <svg class="w-20 h-20 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-4">
                                <span class="px-3 py-1 bg-orange-500/10 text-orange-400 text-xs font-semibold rounded-full border border-orange-500/20">Media</span>
                                <span class="text-gray-500 text-sm">2023</span>
                            </div>
                            <h3 class="text-xl font-bold mb-2 group-hover:text-orange-400 transition-colors">Streaming Service</h3>
                            <p class="text-gray-400 text-sm mb-4">High-performance video delivery with adaptive bitrate streaming.</p>
                            <div class="flex items-center text-orange-400 text-sm font-semibold group-hover:translate-x-2 transition-transform">
                                View Project 
                                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Progress Indicators -->
            <div class="flex justify-center space-x-2 mt-8" id="carousel-indicators">
                <button class="w-2 h-2 rounded-full bg-indigo-500 transition-all duration-300" onclick="goToSlide(0)"></button>
                <button class="w-2 h-2 rounded-full bg-gray-600 hover:bg-gray-500 transition-all duration-300" onclick="goToSlide(1)"></button>
                <button class="w-2 h-2 rounded-full bg-gray-600 hover:bg-gray-500 transition-all duration-300" onclick="goToSlide(2)"></button>
                <button class="w-2 h-2 rounded-full bg-gray-600 hover:bg-gray-500 transition-all duration-300" onclick="goToSlide(3)"></button>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-indigo-600 to-purple-600"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width%3D%2260%22%20height%3D%2260%22%20viewBox%3D%220%200%2060%2060%22%20xmlns%3D%22http%3A//www.w3.org/2000/svg%22%3E%3Cg%20fill%3D%22none%22%20fill-rule%3D%22evenodd%22%3E%3Cg%20fill%3D%22%23ffffff%22%20fill-opacity%3D%220.1%22%3E%3Cpath%20d%3D%22M36%2034v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6%2034v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6%204V0H4v4H0v2h4v4h2V6h4V4H6z%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        
        <div class="relative z-10 max-w-4xl mx-auto px-4 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">Ready to start?</h2>
            <p class="text-xl text-indigo-100 mb-10 max-w-2xl mx-auto">Join thousands of developers building the future with Laravel and Tailwind CSS.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="px-8 py-4 bg-white text-indigo-600 rounded-full font-bold text-lg hover:bg-gray-100 transition-all duration-300 transform hover:scale-105 shadow-xl">
                    Get Started Free
                </button>
                <button class="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white/10 transition-all duration-300">
                    Contact Sales
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 border-t border-slate-800 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <h4 class="font-bold text-white mb-4">Product</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Features</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Pricing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Documentation</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Company</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">About</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Careers</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Resources</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Community</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Partners</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-bold text-white mb-4">Legal</h4>
                    <ul class="space-y-2 text-gray-400 text-sm">
                        <li><a href="#" class="hover:text-white transition-colors">Privacy</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Terms</a></li>
                        <li><a href="#" class="hover:text-white transition-colors">Security</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center space-x-2 mb-4 md:mb-0">
                    <div class="w-8 h-8 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-lg flex items-center justify-center">
                        <span class="text-sm font-bold">L</span>
                    </div>
                    <span class="font-semibold">© 2024 Laravel. All rights reserved.</span>
                </div>
                <div class="flex space-x-6">
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <span class="sr-only">Twitter</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white transition-colors">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('glass-effect');
            } else {
                navbar.classList.remove('glass-effect');
            }
        });

        // Carousel functionality
        const carousel = document.getElementById('carousel');
        const indicators = document.getElementById('carousel-indicators').children;
        let currentSlide = 0;
        const totalSlides = 4;

        function scrollCarousel(direction) {
            const cardWidth = carousel.children[0].offsetWidth + 24; // width + gap
            const scrollAmount = direction * cardWidth;
            carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            
            currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
            updateIndicators();
        }

        function goToSlide(index) {
            const cardWidth = carousel.children[0].offsetWidth + 24;
            carousel.scrollTo({ left: cardWidth * index, behavior: 'smooth' });
            currentSlide = index;
            updateIndicators();
        }

        function updateIndicators() {
            Array.from(indicators).forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.remove('bg-gray-600', 'hover:bg-gray-500');
                    indicator.classList.add('bg-indigo-500');
                } else {
                    indicator.classList.remove('bg-indigo-500');
                    indicator.classList.add('bg-gray-600', 'hover:bg-gray-500');
                }
            });
        }

        // Auto-scroll carousel
        setInterval(() => {
            scrollCarousel(1);
        }, 5000);

        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                    entry.target.style.opacity = '1';
                }
            });
        }, observerOptions);

        // Observe elements
        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            observer.observe(section);
        });
    </script>
</body>
</html>