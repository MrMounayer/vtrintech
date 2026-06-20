{{-- resources/views/linktree.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#0f172a">
    <title>{{ $pageTitle ?? ($name ?? 'Linktree') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-primary: #0f172a;
            --bg-card: rgba(30, 41, 59, 0.6);
            --bg-card-hover: rgba(30, 41, 59, 0.8);
            --border: rgba(148, 163, 184, 0.1);
            --border-hover: rgba(148, 163, 184, 0.2);
            --text-primary: #f8fafc;
            --text-secondary: #94a3b8;
            --text-muted: #64748b;
            --accent: #6366f1;
            --accent-glow: rgba(99, 102, 241, 0.3);
            --whatsapp: #22c55e;
            --whatsapp-dark: #16a34a;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.3), 0 2px 4px -2px rgba(0, 0, 0, 0.3);
            --shadow-lg: 0 20px 25px -5px rgba(0, 0, 0, 0.4), 0 8px 10px -6px rgba(0, 0, 0, 0.4);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            -webkit-tap-highlight-color: transparent;
        }

        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            background: var(--bg-primary);
            color: var(--text-primary);
            min-height: 100vh;
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Animated background mesh */
        .bg-mesh {
            position: fixed;
            inset: 0;
            z-index: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .bg-mesh::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background:
                radial-gradient(ellipse 80% 50% at 20% 40%, rgba(99, 102, 241, 0.15), transparent),
                radial-gradient(ellipse 60% 40% at 80% 20%, rgba(168, 85, 247, 0.1), transparent),
                radial-gradient(ellipse 50% 60% at 50% 80%, rgba(236, 72, 153, 0.08), transparent);
            animation: meshFloat 20s ease-in-out infinite;
        }

        @keyframes meshFloat {
            0%, 100% { transform: translate(0, 0) rotate(0deg); }
            33% { transform: translate(30px, -30px) rotate(1deg); }
            66% { transform: translate(-20px, 20px) rotate(-1deg); }
        }

        /* Noise texture overlay */
        .bg-noise {
            position: fixed;
            inset: 0;
            z-index: 1;
            opacity: 0.03;
            pointer-events: none;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
        }

        /* Main container */
        .page {
            position: relative;
            z-index: 2;
            max-width: 480px;
            margin: 0 auto;
            padding: 40px 20px 60px;
            display: flex;
            flex-direction: column;
            gap: 32px;
        }

        /* ===== HERO SECTION ===== */
        .hero {
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 16px;
        }

        .logo-wrapper {
            position: relative;
            width: 120px;
            height: 120px;
        }

        .logo-wrapper::before {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent), #a855f7, #ec4899);
            animation: logoPulse 3s ease-in-out infinite;
        }

        .logo-wrapper::after {
            content: '';
            position: absolute;
            inset: -4px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent), #a855f7, #ec4899);
            filter: blur(20px);
            opacity: 0.5;
            animation: logoPulse 3s ease-in-out infinite;
        }

        @keyframes logoPulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.02); opacity: 0.8; }
        }

        .logo {
            position: relative;
            z-index: 1;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid var(--bg-primary);
            background: #1e293b;
        }

        .verified-badge {
            position: absolute;
            bottom: 4px;
            right: 4px;
            z-index: 2;
            width: 28px;
            height: 28px;
            background: var(--accent);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 3px solid var(--bg-primary);
        }

        .verified-badge svg {
            width: 14px;
            height: 14px;
            fill: white;
        }

        .hero-name {
            font-size: 1.75rem;
            font-weight: 800;
            letter-spacing: -0.02em;
            color: var(--text-primary);
        }

        .hero-handle {
            font-size: 0.9375rem;
            font-weight: 500;
            color: var(--text-secondary);
            margin-top: -8px;
        }

        .hero-bio {
            font-size: 0.9375rem;
            color: var(--text-muted);
            max-width: 320px;
            line-height: 1.7;
        }

        /* ===== SOCIAL SECTION ===== */
        .social-section {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
        }

        .social-btn {
            width: 52px;
            height: 52px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--bg-card);
            border: 1px solid var(--border);
            color: var(--text-secondary);
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            backdrop-filter: blur(10px);
        }

        .social-btn:hover {
            transform: translateY(-4px) scale(1.05);
            border-color: var(--border-hover);
            box-shadow: var(--shadow-lg);
        }

        .social-btn svg {
            width: 22px;
            height: 22px;
            fill: currentColor;
            transition: fill 0.3s ease;
        }

        .social-btn[data-platform="facebook"]:hover {
            background: rgba(24, 119, 242, 0.15);
            color: #1877f2;
            border-color: rgba(24, 119, 242, 0.3);
        }

        .social-btn[data-platform="instagram"]:hover {
            background: linear-gradient(135deg, rgba(225, 48, 108, 0.15), rgba(88, 81, 219, 0.15));
            color: #e1306c;
            border-color: rgba(225, 48, 108, 0.3);
        }

        .social-btn[data-platform="tiktok"]:hover {
            background: rgba(0, 0, 0, 0.3);
            color: #fff;
            border-color: rgba(255, 255, 255, 0.2);
        }

        .social-btn[data-platform="snapchat"]:hover {
            background: rgba(255, 252, 0, 0.15);
            color: #fffc00;
            border-color: rgba(255, 252, 0, 0.3);
        }

        .social-btn[data-platform="youtube"]:hover {
            background: rgba(255, 0, 0, 0.15);
            color: #ff0000;
            border-color: rgba(255, 0, 0, 0.3);
        }

        /* ===== SECTION DIVIDER ===== */
        .section-divider {
            display: flex;
            align-items: center;
            gap: 16px;
            color: var(--text-muted);
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }

        .section-divider::before,
        .section-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
        }

        /* ===== SERVICES / LINKS SECTION ===== */
        .links-section {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .link-card {
            display: flex;
            align-items: center;
            gap: 16px;
            padding: 16px 20px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 16px;
            text-decoration: none;
            color: inherit;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            backdrop-filter: blur(10px);
            position: relative;
            overflow: hidden;
        }

        .link-card::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background: linear-gradient(180deg, var(--accent), #a855f7);
            transform: scaleY(0);
            transition: transform 0.3s ease;
        }

        .link-card:hover {
            background: var(--bg-card-hover);
            border-color: var(--border-hover);
            transform: translateX(4px);
            box-shadow: var(--shadow);
        }

        .link-card:hover::before {
            transform: scaleY(1);
        }

        .link-icon {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--accent), #a855f7);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.25rem;
            flex-shrink: 0;
        }

        .link-content {
            flex: 1;
            min-width: 0;
        }

        .link-title {
            font-size: 0.9375rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 2px;
        }

        .link-desc {
            font-size: 0.8125rem;
            color: var(--text-muted);
        }

        .link-arrow {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: rgba(255,255,255,0.05);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            transition: all 0.3s ease;
            flex-shrink: 0;
        }

        .link-card:hover .link-arrow {
            background: var(--accent);
            color: white;
            transform: translateX(2px);
        }

        .link-arrow svg {
            width: 16px;
            height: 16px;
            fill: none;
            stroke: currentColor;
            stroke-width: 2;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        /* ===== CTA SECTION ===== */
        .cta-section {
            margin-top: 8px;
        }

        .whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            width: 100%;
            padding: 18px 24px;
            background: linear-gradient(135deg, var(--whatsapp), var(--whatsapp-dark));
            color: white;
            text-decoration: none;
            border-radius: 16px;
            font-size: 1rem;
            font-weight: 700;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(34, 197, 94, 0.25);
            position: relative;
            overflow: hidden;
        }

        .whatsapp-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s ease;
        }

        .whatsapp-btn:hover::before {
            transform: translateX(100%);
        }

        .whatsapp-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 15px 40px rgba(34, 197, 94, 0.35);
        }

        .whatsapp-btn:active {
            transform: translateY(0) scale(0.98);
        }

        .whatsapp-btn svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
            flex-shrink: 0;
        }

        /* ===== FOOTER ===== */
        .footer {
            text-align: center;
            padding-top: 20px;
        }

        .footer-text {
            font-size: 0.75rem;
            color: var(--text-muted);
        }

        /* ===== ANIMATIONS ===== */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-in {
            opacity: 0;
            animation: fadeUp 0.6s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .delay-1 { animation-delay: 0.1s; }
        .delay-2 { animation-delay: 0.2s; }
        .delay-3 { animation-delay: 0.3s; }
        .delay-4 { animation-delay: 0.4s; }
        .delay-5 { animation-delay: 0.5s; }

        /* ===== SCROLLBAR ===== */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: var(--bg-primary);
        }

        ::-webkit-scrollbar-thumb {
            background: var(--border-hover);
            border-radius: 3px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--text-muted);
        }

        /* Selection */
        ::selection {
            background: var(--accent);
            color: white;
        }
    </style>
</head>
<body>

    <div class="bg-mesh"></div>
    <div class="bg-noise"></div>

    <main class="page">

        {{-- ===== HERO ===== --}}
        <section class="hero animate-in">
            <div class="logo-wrapper">
                <img 
                    src="{{ $logo ?? 'https://via.placeholder.com/120' }}" 
                    alt="{{ $name ?? 'Logo' }}" 
                    class="logo"
                    onerror="this.src='https://ui-avatars.com/api/?name={{ urlencode($name ?? 'L') }}&size=120&background=6366f1&color=fff'"
                >
                @if($verified ?? false)
                    <div class="verified-badge">
                        <svg viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/></svg>
                    </div>
                @endif
            </div>

            <h1 class="hero-name">{{ $name ?? 'Your Name' }}</h1>
            
            @if(!empty($handle))
                <p class="hero-handle">{{ $handle }}</p>
            @endif

            @if(!empty($bio))
                <p class="hero-bio">{{ $bio }}</p>
            @endif
        </section>

        {{-- ===== SOCIAL ICONS ===== --}}
        @if(!empty($socials))
            <section class="social-section animate-in delay-1">
                @if(!empty($socials['facebook']))
                    <a href="{{ $socials['facebook'] }}" target="_blank" rel="noopener" class="social-btn" data-platform="facebook" aria-label="Facebook">
                        <svg viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                @endif

                @if(!empty($socials['instagram']))
                    <a href="{{ $socials['instagram'] }}" target="_blank" rel="noopener" class="social-btn" data-platform="instagram" aria-label="Instagram">
                        <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                    </a>
                @endif

                @if(!empty($socials['tiktok']))
                    <a href="{{ $socials['tiktok'] }}" target="_blank" rel="noopener" class="social-btn" data-platform="tiktok" aria-label="TikTok">
                        <svg viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                @endif

                @if(!empty($socials['snapchat']))
                    <a href="{{ $socials['snapchat'] }}" target="_blank" rel="noopener" class="social-btn" data-platform="snapchat" aria-label="Snapchat">
                        <svg viewBox="0 0 24 24"><path d="M12.206.793c.99 0 4.347.276 5.93 3.821.529 1.193.403 3.219.299 4.847l-.003.06c-.012.18-.022.345-.03.51.075.045.203.09.401.09.3-.016.659-.12 1.033-.301a.42.42 0 01.17-.029c.118 0 .244.03.356.09a.49.49 0 01.213.357.48.48 0 01-.151.384c-.424.403-1.067.764-1.766.989-.09.03-.15.075-.18.135-.03.076-.015.165.045.27.734 1.215 2.25 2.655 4.027 2.715h.09c.15 0 .3-.015.435-.045.135-.03.27-.045.39-.045.24 0 .465.06.66.18.18.105.33.255.435.45a.974.974 0 01.165.54c0 .24-.06.465-.18.66a.99.99 0 01-.435.45 1.19 1.19 0 01-.66.18c-.12 0-.255-.015-.39-.045a1.47 1.47 0 00-.435-.045c-.06 0-.135.015-.21.045-.12.045-.225.12-.315.225-.09.105-.165.24-.225.39-.06.15-.12.315-.165.495-.045.18-.09.36-.135.54-.045.18-.105.345-.18.495a1.63 1.63 0 01-.315.435c-.12.12-.27.225-.435.3-.165.075-.36.12-.585.135-.225.015-.48-.015-.765-.09-.285-.075-.6-.21-.945-.405-.345-.195-.75-.465-1.215-.81-.465-.345-1.02-.78-1.665-1.305-.645.525-1.2.96-1.665 1.305-.465.345-.87.615-1.215.81-.345.195-.66.33-.945.405-.285.075-.54.105-.765.09a1.55 1.55 0 01-.585-.135 1.47 1.47 0 01-.435-.3 1.63 1.63 0 01-.315-.435c-.075-.15-.135-.315-.18-.495-.045-.18-.09-.36-.135-.54-.045-.18-.105-.345-.165-.495-.06-.15-.135-.285-.225-.39-.09-.105-.195-.18-.315-.225-.075-.03-.15-.045-.21-.045-.15 0-.3.015-.435.045-.135.03-.27.045-.39.045a1.19 1.19 0 01-.66-.18.99.99 0 01-.435-.45.974.974 0 01-.18-.66c0-.195.06-.375.165-.54.105-.195.255-.345.435-.45.195-.12.42-.18.66-.18.12 0 .255.015.39.045.135.03.285.045.435.045h.09c1.777-.06 3.293-1.5 4.027-2.715.06-.105.075-.195.045-.27-.03-.06-.09-.105-.18-.135-.699-.225-1.342-.586-1.766-.989a.48.48 0 01-.151-.384.49.49 0 01.213-.357.66.66 0 01.356-.09.42.42 0 01.17.029c.374.181.733.285 1.033.301.198 0 .326-.045.401-.09-.008-.165-.018-.33-.03-.51l-.003-.06c-.104-1.628-.23-3.654.299-4.847C7.857 1.069 11.214.793 12.206.793z"/></svg>
                    </a>
                @endif

                @if(!empty($socials['youtube']))
                    <a href="{{ $socials['youtube'] }}" target="_blank" rel="noopener" class="social-btn" data-platform="youtube" aria-label="YouTube">
                        <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                @endif
            </section>
        @endif

        {{-- ===== WHAT WE DO ===== --}}
        @if(!empty($services) && count($services) > 0)
            <div class="section-divider animate-in delay-2">Services</div>

            <section class="links-section animate-in delay-3">
                @foreach($services as $service)
                    <a href="{{ $service['url'] ?? '#' }}" class="link-card" {{ !empty($service['url']) ? 'target="_blank" rel="noopener"' : '' }}>
                        <div class="link-icon">
                            {{ $service['icon'] ?? '✨' }}
                        </div>
                        <div class="link-content">
                            <div class="link-title">{{ $service['title'] }}</div>
                            @if(!empty($service['description']))
                                <div class="link-desc">{{ $service['description'] }}</div>
                            @endif
                        </div>
                        <div class="link-arrow">
                            <svg viewBox="0 0 24 24"><path d="M7 17L17 7M17 7H7M17 7V17"/></svg>
                        </div>
                    </a>
                @endforeach
            </section>
        @endif

        {{-- ===== CALL TO ACTION ===== --}}
        <section class="cta-section animate-in delay-4">
            <a 
                href="https://wa.me/{{ $whatsappNumber ?? '' }}?text={{ urlencode($whatsappMessage ?? 'Hi! I found your page and would love to connect.') }}" 
                target="_blank" 
                rel="noopener"
                class="whatsapp-btn"
            >
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                {{ $ctaText ?? 'Contact on WhatsApp' }}
            </a>
        </section>

        {{-- ===== FOOTER ===== --}}
        <footer class="footer animate-in delay-5">
            <p class="footer-text">{{ $footerText ?? 'Made with care' }}</p>
        </footer>

    </main>

    <script>
        // Subtle parallax on mouse move for background
        document.addEventListener('mousemove', (e) => {
            const mesh = document.querySelector('.bg-mesh::before');
            const x = (e.clientX / window.innerWidth - 0.5) * 20;
            const y = (e.clientY / window.innerHeight - 0.5) * 20;
            document.querySelector('.bg-mesh').style.transform = `translate(${x}px, ${y}px)`;
        });
    </script>

</body>
</html>