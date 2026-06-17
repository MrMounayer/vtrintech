{{-- resources/views/personal-page-alt.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $vitrine->name ?? 'Personal Page' }}</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');

        :root {
            --primary: #0f172a;
            --accent: #6366f1;
            --accent-light: #818cf8;
            --hero-end: #a855f7;
            --surface: #ffffff;
            --surface-alt: #f8fafc;
            --text: #1e293b;
            --text-muted: #64748b;
            --whatsapp: #22c55e;
        }

        body.theme-default {
            --primary: #0f172a;
            --accent: #6366f1;
            --accent-light: #818cf8;
            --hero-end: #a855f7;
            --surface: #ffffff;
            --surface-alt: #f8fafc;
            --text: #1e293b;
            --text-muted: #64748b;
            --whatsapp: #22c55e;
        }

        body.theme-midnight {
            --primary: #f8fafc;
            --accent: #7c3aed;
            --accent-light: #a855f7;
            --hero-end: #1e293b;
            --surface: #0f172a;
            --surface-alt: #111827;
            --text: #e2e8f0;
            --text-muted: #94a3b8;
            --whatsapp: #22c55e;
        }

        body.theme-sunset {
            --primary: #1f2937;
            --accent: #f97316;
            --accent-light: #fb7185;
            --hero-end: #f43f5e;
            --surface: #fff7ed;
            --surface-alt: #ffedd5;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #ef4444;
        }

        body.theme-mint {
            --primary: #0f172a;
            --accent: #10b981;
            --accent-light: #6ee7b7;
            --hero-end: #22c55e;
            --surface: #ecfdf5;
            --surface-alt: #d9f99d;
            --text: #0f172a;
            --text-muted: #334155;
            --whatsapp: #16a34a;
        }

        body.theme-ocean {
            --primary: #0f172a;
            --accent: #0f60b7;
            --accent-light: #38bdf8;
            --hero-end: #0ea5e9;
            --surface: #eff6ff;
            --surface-alt: #e0f2fe;
            --text: #0f172a;
            --text-muted: #475569;
            --whatsapp: #0f766e;
        }

        body.theme-coral {
            --primary: #0f172a;
            --accent: #f97316;
            --accent-light: #fb7185;
            --hero-end: #f43f5e;
            --surface: #fff1f2;
            --surface-alt: #ffe4e6;
            --text: #1f2937;
            --text-muted: #7f1d1d;
            --whatsapp: #be123c;
        }

        body.theme-forest {
            --primary: #0f172a;
            --accent: #16a34a;
            --accent-light: #4ade80;
            --hero-end: #166534;
            --surface: #f0fdf4;
            --surface-alt: #dcfce7;
            --text: #0f172a;
            --text-muted: #166534;
            --whatsapp: #15803d;
        }

        body.theme-lavender {
            --primary: #1e293b;
            --accent: #8b5cf6;
            --accent-light: #c4b5fd;
            --hero-end: #818cf8;
            --surface: #f8fafc;
            --surface-alt: #eef2ff;
            --text: #1f2937;
            --text-muted: #4b5563;
            --whatsapp: #7c3aed;
        }

        body.theme-graphite {
            --primary: #f8fafc;
            --accent: #64748b;
            --accent-light: #94a3b8;
            --hero-end: #0f172a;
            --surface: #0f172a;
            --surface-alt: #111827;
            --text: #e2e8f0;
            --text-muted: #cbd5e1;
            --whatsapp: #38bdf8;
        }

        body.theme-blush {
            --primary: #1e293b;
            --accent: #ec4899;
            --accent-light: #f472b6;
            --hero-end: #f9a8d4;
            --surface: #fff1f2;
            --surface-alt: #ffe4e6;
            --text: #0f172a;
            --text-muted: #7f1d1d;
            --whatsapp: #db2777;
        }

        body.theme-ember {
            --primary: #0f172a;
            --accent: #ef4444;
            --accent-light: #f97316;
            --hero-end: #f59e0b;
            --surface: #fff7ed;
            --surface-alt: #ffedd5;
            --text: #1f2937;
            --text-muted: #7c2d12;
            --whatsapp: #c2410c;
        }

        body.theme-dune {
            --primary: #1e2937;
            --accent: #a16207;
            --accent-light: #f59e0b;
            --hero-end: #fbbf24;
            --surface: #f8f4ed;
            --surface-alt: #f5f3f1;
            --text: #111827;
            --text-muted: #52525b;
            --whatsapp: #a16207;
        }

        body.theme-aurora {
            --primary: #111827;
            --accent: #22d3ee;
            --accent-light: #0ea5e9;
            --hero-end: #7c3aed;
            --surface: #eff6ff;
            --surface-alt: #e0f2fe;
            --text: #0f172a;
            --text-muted: #475569;
            --whatsapp: #0ea5e9;
        }

        body.theme-slate {
            --primary: #0f172a;
            --accent: #334155;
            --accent-light: #64748b;
            --hero-end: #475569;
            --surface: #f8fafc;
            --surface-alt: #e2e8f0;
            --text: #1f293b;
            --text-muted: #475569;
            --whatsapp: #0f766e;
        }

        body.theme-rose {
            --primary: #831843;
            --accent: #be185d;
            --accent-light: #fb7185;
            --hero-end: #f472b6;
            --surface: #fdf2f8;
            --surface-alt: #fce7f3;
            --text: #500724;
            --text-muted: #be185d;
            --whatsapp: #be185d;
        }

        body.theme-peony {
            --primary: #be185d;
            --accent: #ec4899;
            --accent-light: #f472b6;
            --hero-end: #fbcfe8;
            --surface: #fdf2f8;
            --surface-alt: #fce7f3;
            --text: #500724;
            --text-muted: #be185d;
            --whatsapp: #ec4899;
        }

        body.theme-lilac {
            --primary: #6b21a8;
            --accent: #a855f7;
            --accent-light: #d8b4fe;
            --hero-end: #e9d5ff;
            --surface: #faf5ff;
            --surface-alt: #f3e8ff;
            --text: #581c87;
            --text-muted: #a855f7;
            --whatsapp: #c084fc;
        }

        body.theme-carnation {
            --primary: #be123c;
            --accent: #f43f5e;
            --accent-light: #fb7185;
            --hero-end: #fca5a5;
            --surface: #ffe4e6;
            --surface-alt: #fff1f2;
            --text: #600115;
            --text-muted: #be123c;
            --whatsapp: #f43f5e;
        }

        body.theme-iris {
            --primary: #5b21b6;
            --accent: #7c3aed;
            --accent-light: #c4b5fd;
            --hero-end: #ddd6fe;
            --surface: #f5f3ff;
            --surface-alt: #ede9fe;
            --text: #3730a3;
            --text-muted: #7c3aed;
            --whatsapp: #a78bfa;
        }

        body.theme-daisy {
            --primary: #92400e;
            --accent: #d97706;
            --accent-light: #fbbf24;
            --hero-end: #fcd34d;
            --surface: #fffbeb;
            --surface-alt: #fef3c7;
            --text: #451a03;
            --text-muted: #d97706;
            --whatsapp: #fbbf24;
        }

        body.theme-honeysuckle {
            --primary: #b45309;
            --accent: #f97316;
            --accent-light: #fed7aa;
            --hero-end: #ffeaa7;
            --surface: #fff7ed;
            --surface-alt: #ffedd5;
            --text: #5a2e0f;
            --text-muted: #f97316;
            --whatsapp: #fb923c;
        }

        body.theme-magnolia {
            --primary: #7e22ce;
            --accent: #a78bfa;
            --accent-light: #ddd6fe;
            --hero-end: #e9d5ff;
            --surface: #faf5ff;
            --surface-alt: #f3e8ff;
            --text: #4c1d95;
            --text-muted: #a78bfa;
            --whatsapp: #c084fc;
        }

        body.theme-orchid {
            --primary: #a21caf;
            --accent: #d946ef;
            --accent-light: #f0abfc;
            --hero-end: #f5d0fe;
            --surface: #fdf2f8;
            --surface-alt: #fae8ff;
            --text: #581c87;
            --text-muted: #d946ef;
            --whatsapp: #e879f9;
        }

        body.theme-peach {
            --primary: #b45309;
            --accent: #f97316;
            --accent-light: #fed7aa;
            --hero-end: #fecaca;
            --surface: #fff7ed;
            --surface-alt: #ffe4cc;
            --text: #5a2e0f;
            --text-muted: #f97316;
            --whatsapp: #fb923c;
        }

        body.theme-cherry {
            --primary: #be123c;
            --accent: #f472b6;
            --accent-light: #fbcfe8;
            --hero-end: #fce7f3;
            --surface: #fff1f2;
            --surface-alt: #ffe4e6;
            --text: #600115;
            --text-muted: #be123c;
            --whatsapp: #f43f5e;
        }

        body.theme-marigold {
            --primary: #92400e;
            --accent: #d97706;
            --accent-light: #fbbf24;
            --hero-end: #fcd34d;
            --surface: #fffbeb;
            --surface-alt: #fef3c7;
            --text: #451a03;
            --text-muted: #d97706;
            --whatsapp: #fbbf24;
        }

        body.theme-tulip {
            --primary: #be123c;
            --accent: #f43f5e;
            --accent-light: #fca5a5;
            --hero-end: #fbcfe8;
            --surface: #fff1f2;
            --surface-alt: #ffe4e6;
            --text: #600115;
            --text-muted: #be123c;
            --whatsapp: #f43f5e;
        }

        body.theme-sunflower {
            --primary: #78350f;
            --accent: #ca8a04;
            --accent-light: #fde047;
            --hero-end: #fef08a;
            --surface: #fefce8;
            --surface-alt: #fffbeb;
            --text: #3f2305;
            --text-muted: #ca8a04;
            --whatsapp: #eab308;
        }

        body.theme-jasmine {
            --primary: #78350f;
            --accent: #f59e0b;
            --accent-light: #fbbf24;
            --hero-end: #fef3c7;
            --surface: #fffbeb;
            --surface-alt: #fef3c7;
            --text: #3f2305;
            --text-muted: #b45309;
            --whatsapp: #f59e0b;
        }

        body.theme-camellia {
            --primary: #7f1d1d;
            --accent: #dc2626;
            --accent-light: #fca5a5;
            --hero-end: #fed7d7;
            --surface: #fef2f2;
            --surface-alt: #fff1f2;
            --text: #450a0a;
            --text-muted: #dc2626;
            --whatsapp: #dc2626;
        }

        body.theme-hydrangea {
            --primary: #0c4a6e;
            --accent: #60a5fa;
            --accent-light: #bfdbfe;
            --hero-end: #e0f2fe;
            --surface: #f0f9ff;
            --surface-alt: #e0f2fe;
            --text: #082f49;
            --text-muted: #60a5fa;
            --whatsapp: #38bdf8;
        }

        body.theme-zinnia {
            --primary: #b45309;
            --accent: #f97316;
            --accent-light: #fbbf24;
            --hero-end: #fde047;
            --surface: #fff7ed;
            --surface-alt: #fffbeb;
            --text: #5a2e0f;
            --text-muted: #f97316;
            --whatsapp: #fb923c;
        }

        body.theme-fuchsia {
            --primary: #a21caf;
            --accent: #d946ef;
            --accent-light: #f0abfc;
            --hero-end: #f5d0fe;
            --surface: #fdf2f8;
            --surface-alt: #fae8ff;
            --text: #581c87;
            --text-muted: #d946ef;
            --whatsapp: #e879f9;
        }

        body.theme-primrose {
            --primary: #78350f;
            --accent: #eab308;
            --accent-light: #fef08a;
            --hero-end: #fefce8;
            --surface: #fefce8;
            --surface-alt: #fffbeb;
            --text: #3f2305;
            --text-muted: #ca8a04;
            --whatsapp: #eab308;
        }

        body.theme-mist {
            --primary: #111827;
            --accent: #64748b;
            --accent-light: #cbd5e1;
            --hero-end: #e2e8f0;
            --surface: #f8fafc;
            --surface-alt: #e2e8f0;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #64748b;
        }

        body.theme-ash {
            --primary: #111827;
            --accent: #94a3b8;
            --accent-light: #e2e8f0;
            --hero-end: #f1f5f9;
            --surface: #f1f5f9;
            --surface-alt: #e2e8f0;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #0f766e;
        }

        body.theme-dove {
            --primary: #111827;
            --accent: #c4b5fd;
            --accent-light: #e9d5ff;
            --hero-end: #eef2ff;
            --surface: #f8fafc;
            --surface-alt: #eef2ff;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #7c3aed;
        }

        body.theme-pebble {
            --primary: #111827;
            --accent: #f9a8d4;
            --accent-light: #fde4ef;
            --hero-end: #fee2e9;
            --surface: #f8fafc;
            --surface-alt: #fdf2f8;
            --text: #111827;
            --text-muted: #6b7280;
            --whatsapp: #db2777;
        }

        body.theme-silver {
            --primary: #111827;
            --accent: #60a5fa;
            --accent-light: #bfdbfe;
            --hero-end: #e0f2fe;
            --surface: #f8fafc;
            --surface-alt: #e0f2fe;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #0ea5e9;
        }

        body.theme-pearl {
            --primary: #111827;
            --accent: #fb7185;
            --accent-light: #fed7e2;
            --hero-end: #ffe4ed;
            --surface: #fdf2f8;
            --surface-alt: #fce7f3;
            --text: #111827;
            --text-muted: #6b7280;
            --whatsapp: #ec4899;
        }

        body.theme-smoke {
            --primary: #111827;
            --accent: #fbbf24;
            --accent-light: #fde68a;
            --hero-end: #fef9c3;
            --surface: #f8fafc;
            --surface-alt: #fefce8;
            --text: #111827;
            --text-muted: #52525b;
            --whatsapp: #f59e0b;
        }

        body.theme-cloud {
            --primary: #111827;
            --accent: #38bdf8;
            --accent-light: #bae6fd;
            --hero-end: #eff6ff;
            --surface: #f8fafc;
            --surface-alt: #eff6ff;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #0ea5e9;
        }

        body.theme-stone {
            --primary: #111827;
            --accent: #a78bfa;
            --accent-light: #ddd6fe;
            --hero-end: #eef2ff;
            --surface: #f8fafc;
            --surface-alt: #eef2ff;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #8b5cf6;
        }

        body.theme-frost {
            --primary: #111827;
            --accent: #7dd3fc;
            --accent-light: #dbeafe;
            --hero-end: #eff6ff;
            --surface: #f8fafc;
            --surface-alt: #e0f2fe;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #38bdf8;
        }

        body.theme-ecru {
            --primary: #111827;
            --accent: #f59e0b;
            --accent-light: #fde68a;
            --hero-end: #fef9c3;
            --surface: #f8fafc;
            --surface-alt: #fefce8;
            --text: #111827;
            --text-muted: #52525b;
            --whatsapp: #f59e0b;
        }

        body.theme-latte {
            --primary: #111827;
            --accent: #c084fc;
            --accent-light: #e9d5ff;
            --hero-end: #f3e8ff;
            --surface: #f8fafc;
            --surface-alt: #f5f3ff;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #8b5cf6;
        }

        body.theme-biscuit {
            --primary: #111827;
            --accent: #fb7185;
            --accent-light: #fee2e7;
            --hero-end: #fdf2f8;
            --surface: #f8fafc;
            --surface-alt: #fdf2f8;
            --text: #111827;
            --text-muted: #6b7280;
            --whatsapp: #ec4899;
        }

        body.theme-cream {
            --primary: #111827;
            --accent: #f9a8d4;
            --accent-light: #fee2e7;
            --hero-end: #fff1f2;
            --surface: #f8fafc;
            --surface-alt: #fff1f2;
            --text: #111827;
            --text-muted: #6b7280;
            --whatsapp: #ec4899;
        }

        body.theme-alabaster {
            --primary: #111827;
            --accent: #60a5fa;
            --accent-light: #dbeafe;
            --hero-end: #eff6ff;
            --surface: #f8fafc;
            --surface-alt: #eff6ff;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #0ea5e9;
        }

        body.theme-shell {
            --primary: #111827;
            --accent: #fb7185;
            --accent-light: #fed7e2;
            --hero-end: #fff1f2;
            --surface: #f8fafc;
            --surface-alt: #fff1f2;
            --text: #111827;
            --text-muted: #6b7280;
            --whatsapp: #ec4899;
        }

        body.theme-chalk {
            --primary: #111827;
            --accent: #93c5fd;
            --accent-light: #dbeafe;
            --hero-end: #eff6ff;
            --surface: #f8fafc;
            --surface-alt: #eff6ff;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #3b82f6;
        }

        body.theme-linen {
            --primary: #111827;
            --accent: #f0abfc;
            --accent-light: #fde8ff;
            --hero-end: #f5d0fe;
            --surface: #f8fafc;
            --surface-alt: #f5d0fe;
            --text: #111827;
            --text-muted: #6b7280;
            --whatsapp: #d946ef;
        }

        body.theme-porcelain {
            --primary: #111827;
            --accent: #60a5fa;
            --accent-light: #dbeafe;
            --hero-end: #eff6ff;
            --surface: #f8fafc;
            --surface-alt: #eff6ff;
            --text: #111827;
            --text-muted: #475569;
            --whatsapp: #0ea5e9;
        }

        body.theme-flannel {
            --primary: #111827;
            --accent: #fbbf24;
            --accent-light: #fde68a;
            --hero-end: #fef9c3;
            --surface: #f8fafc;
            --surface-alt: #fef9c3;
            --text: #111827;
            --text-muted: #52525b;
            --whatsapp: #f59e0b;
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
            background: linear-gradient(135deg, var(--accent) 0%, var(--hero-end, #a855f7) 100%);
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
            background: var(--accent-light);
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
        .carousel-section {
            padding: 100px 8vw;
            max-width: 1400px;
            margin: 64px auto;
            background: var(--accent-light);
            border-radius: 32px;
            border: 1px solid rgba(15, 23, 42, 0.08);
            box-shadow: 0 24px 80px rgba(15, 23, 42, 0.04);
        }

        .carousel-wrapper {
            position: relative;
            margin-top: 36px;
        }

        .carousel-track {
            display: flex;
            align-items: stretch;
            gap: 24px;
            overflow-x: auto;
            scroll-snap-type: x mandatory;
            padding-bottom: 12px;
            scroll-behavior: smooth;
        }

        .carousel-track::-webkit-scrollbar {
            height: 10px;
        }

        .carousel-track::-webkit-scrollbar-thumb {
            background: rgba(99, 102, 241, 0.35);
            border-radius: 999px;
        }

        .carousel-card {
            flex: 0 0 min(320px, 100%);
            scroll-snap-align: start;
            border-radius: 28px;
            overflow: hidden;
            background: #f8fafc;
            border: 1px solid rgba(15, 23, 42, 0.06);
            min-width: 320px;
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }

        .carousel-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(15, 23, 42, 0.12);
        }

        .carousel-card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
            background: #e2e8f0;
        }

        .carousel-caption {
            padding: 20px 22px 24px;
            color: var(--text);
            font-size: 0.95rem;
            line-height: 1.6;
        }

        .carousel-caption strong {
            display: block;
            margin-bottom: 8px;
            font-size: 1rem;
            color: var(--primary);
        }

        .carousel-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 52px;
            height: 52px;
            border-radius: 50%;
            border: 1px solid rgba(15, 23, 42, 0.12);
            background: rgba(255, 255, 255, 0.9);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease;
            z-index: 1;
        }

        .carousel-btn:hover {
            transform: translateY(-50%) scale(1.05);
            border-color: rgba(99, 102, 241, 0.4);
            box-shadow: 0 12px 28px rgba(15, 23, 42, 0.12);
        }

        .carousel-btn svg {
            width: 20px;
            height: 20px;
            stroke: var(--accent);
        }

        .carousel-btn.prev {
            left: -26px;
        }

        .carousel-btn.next {
            right: -26px;
        }

        .fullscreen-overlay {
            position: fixed;
            inset: 0;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(15, 23, 42, 0.8);
            z-index: 99;
            backdrop-filter: blur(4px);
        }

        .fullscreen-overlay.open {
            display: flex;
        }

        .fullscreen-card {
            position: relative;
            width: min(100%, 1100px);
            max-height: calc(100vh - 80px);
            overflow: hidden;
            border-radius: 32px;
            background: rgba(255, 255, 255, 0.96);
            box-shadow: 0 40px 120px rgba(15, 23, 42, 0.3);
            display: flex;
            flex-direction: column;
        }

        .fullscreen-close {
            position: absolute;
            top: 18px;
            right: 18px;
            width: 44px;
            height: 44px;
            border: none;
            border-radius: 50%;
            background: rgba(15, 23, 42, 0.08);
            color: var(--text);
            cursor: pointer;
            font-size: 1.2rem;
            line-height: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.2s ease;
        }

        .fullscreen-close:hover {
            background: rgba(15, 23, 42, 0.16);
        }

        .fullscreen-card img {
            width: 100%;
            height: auto;
            max-height: calc(100vh - 240px);
            object-fit: contain;
            background: #000;
            display: block;
        }

        .fullscreen-caption {
            padding: 24px;
            overflow: auto;
            color: var(--text);
        }

        .fullscreen-caption strong {
            display: block;
            font-size: 1.25rem;
            color: var(--primary);
            margin-bottom: 10px;
        }

        .fullscreen-caption p {
            color: var(--text-muted);
            line-height: 1.75;
        }

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
            background: radial-gradient(circle at 50% 50%, var(--accent-light) 0%, var(--accent) 50%);
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

            .carousel-btn.prev {
                left: 8px;
            }

            .carousel-btn.next {
                right: 8px;
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

            .carousel-section {
                padding: 60px 24px;
            }

            .carousel-card {
                min-width: 260px;
            }

            .carousel-btn {
                width: 46px;
                height: 46px;
            }
        }

        /* Smooth scroll */
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>
<body class="theme-{{ $vitrine->theme }}">

    {{-- ===== HERO: Split Screen ===== --}}
    <section class="hero">
        <div class="hero-content">
            <p class="greeting">Hello, We Are</p>
            <h1 class="hero-name">{{ $vitrine->name ?? 'Your Name' }}<span>.</span></h1>
            
            @if(!empty($vitrine->description))
                <p class="tagline">{{ $vitrine->description }}</p>
            @endif
        </div>

        <div class="hero-visual">
            <div class="profile-ring">
                <img 
                    src="{{ $vitrine->getFirstMediaUrl('logo') ?? $profileImage ?? 'https://via.placeholder.com/280?text=Profile' }}" 
                    alt="{{ $name ?? 'Profile' }}" 
                    class="profile-image"
                >
            </div>
        </div>
    </section>

    {{-- ===== FLOATING SOCIAL DOCK ===== --}}
    @if(!empty($vitrine->links) && count($vitrine->links) > 0)
        <nav class="social-dock">
            @foreach($vitrine->links as $social)
                <a 
                    href="{{ $social['url'] }}" 
                    target="_blank" 
                    rel="noopener noreferrer"
                    data-label="{{ $social['label'] }}"
                    title="{{ $social['label'] }}"
                >
                    <img src="https://cdn.simpleicons.org/{{ $social['label'] }}"/>
                    
                </a>
            @endforeach
        </nav>
    @endif

    {{-- ===== SERVICES: Bento Grid ===== --}}
    @if(!empty($vitrine->services) && count($vitrine->services) > 0)
    <section class="services-section" id="services">
        <div class="section-header">
            <p class="section-label">Expertise</p>
            <h2 class="section-title">What I Do</h2>
        </div>

        
            <div class="bento-grid">
                @foreach($vitrine->services as $index => $service)
                    <div class="bento-item {{ $index === 0 && count($vitrine->services) >= 4 ? 'featured' : '' }}">
                        <span class="service-number">0{{ $index + 1 }}</span>
                        <span class="service-icon-large">{{ $service['icon'] ?? '✨' }}</span>
                        <h3 class="service-title">{{ $service['title'] }}</h3>
                        <p class="service-desc">{{ $service['description'] ?? '' }}</p>
                    </div>
                @endforeach
            </div>
        </section>
        @endif



    {{-- ===== IMAGE CAROUSEL ===== --}}
    @php
        $carouselImages = $vitrine->getMedia('carousel');
    @endphp
    
    @if($carouselImages->isNotEmpty())
    <section class="carousel-section">
        <div class="section-header">
            <p class="section-label">Portfolio</p>
            <h2 class="section-title">Recent Work</h2>
        </div>
            <div class="carousel-wrapper">
                <button type="button" class="carousel-btn prev" onclick="scrollCarousel(-1)" aria-label="Scroll previous">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
                <div id="image-carousel" class="carousel-track">
                    @foreach($carouselImages as $image)
                        <div class="carousel-card">
                            <img
                                src="{{ $image->getUrl() }}"
                                alt="{{ $image->name ?: 'Portfolio image' }}"
                                onclick="openFullscreen(this)"
                                data-fullscreen-src="{{ $image->getUrl() }}"
                                style="cursor:pointer;"
                            />
                        </div>
                    @endforeach
                </div>
                <button type="button" class="carousel-btn next" onclick="scrollCarousel(1)" aria-label="Scroll next">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>

        <div id="fullscreen-overlay" class="fullscreen-overlay" aria-hidden="true" onclick="closeFullscreen(event)">
            <div class="fullscreen-card" role="dialog" aria-modal="true" onclick="event.stopPropagation()">
                <button type="button" class="fullscreen-close" onclick="closeFullscreen(event)" aria-label="Close full screen">×</button>
                <img id="fullscreen-image" src="" alt="" />
      
            </div>
        </div>
    </section>
    @endif

    {{-- ===== CTA: Full Bleed ===== --}}
    <section class="cta-section ">
        <div class="cta-content">
            <h2 class="cta-title">{{ !empty($vitrine->cta) ? $vitrine->cta : "Let's Build Something Amazing" }}</h2>
            <p class="cta-subtitle">{{ $vitrine->cta_description ?? "Ready to start your next project? I'm just a message away." }}</p>
            
            <a 
                href="https://wa.me/{{ $vitrine->whatsapp ?? '' }}?text=SLM" 
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

    <script>
        function scrollCarousel(direction) {
            const carousel = document.getElementById('image-carousel');
            if (!carousel) {
                return;
            }

            const slide = carousel.querySelector('.carousel-card');
            if (!slide) {
                return;
            }

            const scrollAmount = slide.offsetWidth + 24;
            carousel.scrollBy({ left: direction * scrollAmount, behavior: 'smooth' });
        }

        function openFullscreen(image) {
            const overlay = document.getElementById('fullscreen-overlay');
            const fullscreenImage = document.getElementById('fullscreen-image');

            if (!overlay || !fullscreenImage ) {
                return;
            }

            fullscreenImage.src = image.dataset.fullscreenSrc || image.src;
            fullscreenImage.alt = image.alt || '';

            overlay.classList.add('open');
            overlay.setAttribute('aria-hidden', 'false');
            document.documentElement.style.overflow = 'hidden';
            document.body.style.overflow = 'hidden';
        }

        function closeFullscreen(event) {
            if (event) {
                event.stopPropagation();
            }

            const overlay = document.getElementById('fullscreen-overlay');
            if (!overlay) {
                return;
            }

            overlay.classList.remove('open');
            overlay.setAttribute('aria-hidden', 'true');
            document.documentElement.style.overflow = '';
            document.body.style.overflow = '';
        }

        document.addEventListener('keydown', function (event) {
            if (event.key === 'Escape') {
                closeFullscreen();
            }
        });
    </script>
</body>
</html>