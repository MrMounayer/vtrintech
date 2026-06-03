{{-- resources/views/personal-page-alt.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name ?? 'Personal Page' }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary: #0f172a;
            --accent: #6366f1;
            --accent-light: #818cf8;
            --surface: #ffffff;
            --surface-alt: #f8fafc;
            --text: #1e293b;
            --text-muted: #64748b;
            --whatsapp: #22c55e;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--surface-alt);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* ===== HERO: Split Screen ===== */
        .hero {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            position: relative;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 60px 8vw;
            background: var(--surface);
            position: relative;
        }

        .hero-visual {
            background: linear-gradient(135deg, var(--accent) 0%, #a855f7 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .hero-visual::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 30px 30px;
            animation: float 20s linear infinite;
        }

        @keyframes float {
            0% { transform: translate(0, 0); }
            100% { transform: translate(-30px, -30px); }
        }

        .profile-ring {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            padding: 8px;
            background: linear-gradient(135deg, rgba(255,255,255,0.4), rgba(255,255,255,0.1));
            backdrop-filter: blur(10px);
            position: relative;
            z-index: 1;
        }

        .profile-image {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255,255,255,0.8);
            background: #e2e8f0;
        }

        .greeting {
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--accent);
            margin-bottom: 16px;
        }

        .hero-name {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 20px;
            color: var(--primary);
        }

        .hero-name span {
            color: var(--accent);
        }

        .tagline {
            font-size: 1.25rem;
            color: var(--text-muted);
            max-width: 480px;
            line-height: 1.7;
            opacity: 0;
            animation: fadeUp 0.8s ease 0.3s forwards;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* ===== FLOATING SOCIAL DOCK ===== */
        .social-dock {
            position: fixed;
            left: 30px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            gap: 12px;
            z-index: 100;
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(10px);
            padding: 16px 12px;
            border-radius: 50px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }

        .social-dock a {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--text-muted);
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
        }

        .social-dock a:hover {
            color: var(--accent);
            transform: scale(1.15);
            background: rgba(99, 102, 241, 0.1);
        }

        .social-dock a::after {
            content: attr(data-label);
            position: absolute;
            left: 60px;
            background: var(--primary);
            color: white;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 0.75rem;
            white-space: nowrap;
            opacity: 0;
            pointer-events: none;
            transition: all 0.2s ease;
            transform: translateX(-10px);
        }

        .social-dock a:hover::after {
            opacity: 1;
            transform: translateX(0);
        }

        .social-dock svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        /* ===== SERVICES: Bento Grid ===== */
        .services-section {
            padding: 100px 8vw;
            max-width: 1400px;
            margin: 0 auto;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-label {
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--accent);
            margin-bottom: 12px;
        }

        .section-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: var(--primary);
        }

        .bento-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-auto-rows: minmax(200px, auto);
            gap: 20px;
        }

        /* Line break at 3: first row takes 3, second row takes remaining */
        .bento-item {
            background: var(--surface);
            border-radius: 24px;
            padding: 32px;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(0,0,0,0.04);
            position: relative;
            overflow: hidden;
        }

        .bento-item::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--accent), var(--accent-light));
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .bento-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(99, 102, 241, 0.12);
        }

        .bento-item:hover::before {
            transform: scaleX(1);
        }

        /* Featured item spans 2 columns when we have 4+ items */
        .bento-item.featured {
            grid-column: span 2;
        }

        .service-number {
            font-size: 0.75rem;
            font-weight: 700;
            color: var(--accent);
            margin-bottom: 16px;
            font-family: monospace;
        }

        .service-icon-large {
            font-size: 2.5rem;
            margin-bottom: 20px;
            display: block;
        }

        .service-title {
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 10px;
            color: var(--primary);
        }

        .service-desc {
            font-size: 0.95rem;
            color: var(--text-muted);
            line-height: 1.6;
        }

        /* ===== CTA: Full Bleed ===== */
        .cta-section {
            background: var(--primary);
            padding: 100px 8vw;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at 50% 50%, rgba(99,102,241,0.15) 0%, transparent 50%);
        }

        .cta-content {
            position: relative;
            z-index: 1;
            max-width: 600px;
            margin: 0 auto;
        }

        .cta-title {
            font-size: clamp(2rem, 4vw, 3rem);
            font-weight: 800;
            color: white;
            margin-bottom: 16px;
        }

        .cta-subtitle {
            font-size: 1.125rem;
            color: rgba(255,255,255,0.6);
            margin-bottom: 40px;
        }

        .whatsapp-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 18px 40px;
            background: var(--whatsapp);
            color: white;
            text-decoration: none;
            border-radius: 16px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 10px 30px rgba(34, 197, 94, 0.3);
        }

        .whatsapp-btn:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 40px rgba(34, 197, 94, 0.4);
        }

        .whatsapp-btn svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 1024px) {
            .hero {
                grid-template-columns: 1fr;
                min-height: auto;
            }

            .hero-visual {
                min-height: 400px;
                order: -1;
            }

            .profile-ring {
                width: 200px;
                height: 200px;
            }

            .social-dock {
                position: static;
                flex-direction: row;
                justify-content: center;
                transform: none;
                margin: 30px auto;
                width: fit-content;
                border-radius: 50px;
            }

            .social-dock a::after {
                display: none;
            }

            .bento-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .bento-item.featured {
                grid-column: span 2;
            }
        }

        @media (max-width: 640px) {
            .hero-content {
                padding: 40px 24px;
            }

            .bento-grid {
                grid-template-columns: 1fr;
            }

            .bento-item.featured {
                grid-column: span 1;
            }

            .services-section {
                padding: 60px 24px;
            }
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body>

    {{-- ===== HERO: Split Screen ===== --}}
    <section class="hero">
        <div class="hero-content">
            <p class="greeting">Hello, I'm</p>
            <h1 class="hero-name">{{ $name ?? 'Your Name' }}<span>.</span></h1>
            
            @if(!empty($tagline))
                <p class="tagline">{{ $tagline }}</p>
            @endif
        </div>

        <div class="hero-visual">
            <div class="profile-ring">
                <img 
                    src="{{ $profileImage ?? 'https://via.placeholder.com/280' }}" 
                    alt="{{ $name ?? 'Profile' }}" 
                    class="profile-image"
                >
            </div>
        </div>
    </section>

    {{-- ===== FLOATING SOCIAL DOCK ===== --}}
    @if(!empty($socialLinks) && count($socialLinks) > 0)
        <nav class="social-dock">
            @foreach($socialLinks as $social)
                <a 
                    href="{{ $social['url'] }}" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    data-label="{{ $social['name'] }}"
                    title="{{ $social['name'] }}"
                >
                    {!! $social['icon'] !!}
                    
                </a>
            @endforeach
        </nav>
    @endif

    {{-- ===== SERVICES: Bento Grid ===== --}}
    <section class="services-section" id="services">
        <div class="section-header">
            <p class="section-label">Expertise</p>
            <h2 class="section-title">What I Do</h2>
        </div>

        @if(!empty($services) && count($services) > 0)
            <div class="bento-grid">
                @foreach($services as $index => $service)
                    <div class="bento-item {{ $index === 0 && count($services) >= 4 ? 'featured' : '' }}">
                        <span class="service-number">0{{ $index + 1 }}</span>
                        <span class="service-icon-large">{{ $service['icon'] ?? '✨' }}</span>
                        <h3 class="service-title">{{ $service['title'] }}</h3>
                        <p class="service-desc">{{ $service['description'] ?? '' }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p style="text-align:center;color:var(--text-muted);padding:60px;">Services coming soon...</p>
        @endif
    </section>

    {{-- ===== CTA: Full Bleed ===== --}}
    <section class="cta-section">
        <div class="cta-content">
            <h2 class="cta-title">Let's Build Something Amazing</h2>
            <p class="cta-subtitle">Ready to start your next project? I'm just a message away.</p>
            
            <a 
                href="https://wa.me/{{ $whatsappNumber ?? '' }}?text=Hi!%20I%20found%20your%20website%20and%20would%20love%20to%20work%20together." 
                target="_blank" 
                class="whatsapp-btn"
            >
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Chat on WhatsApp
            </a>
        </div>
    </section>

</body>
</html>