{{-- resources/views/personal-page.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $name ?? 'Personal Page' }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #333;
            line-height: 1.6;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Section 1: Main Profile */
        .profile-section {
            text-align: center;
            padding: 60px 20px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .profile-image {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #667eea;
            margin-bottom: 25px;
            background: #e0e0e0;
            display: inline-block;
        }

        .profile-name {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .tagline {
            font-size: 1.2rem;
            color: #718096;
            font-style: italic;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Section 2: Social Icons */
        .social-section {
            text-align: center;
            padding: 40px 20px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .social-title {
            font-size: 1.5rem;
            color: #2d3748;
            margin-bottom: 25px;
            font-weight: 600;
        }

        .social-icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background: #667eea;
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-size: 1.5rem;
        }

        .social-link:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
            background: #764ba2;
        }

        .social-link svg {
            width: 28px;
            height: 28px;
            fill: currentColor;
        }

        /* Section 3: What We Do */
        .services-section {
            padding: 50px 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            margin-bottom: 30px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .services-title {
            text-align: center;
            font-size: 2rem;
            color: #2d3748;
            margin-bottom: 40px;
            font-weight: 700;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        @media (max-width: 768px) {
            .services-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 480px) {
            .services-grid {
                grid-template-columns: 1fr;
            }
        }

        .service-card {
            background: #f7fafc;
            padding: 30px 20px;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-color: #667eea;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.15);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 15px;
            display: block;
        }

        .service-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2d3748;
            margin-bottom: 8px;
        }

        .service-description {
            font-size: 0.9rem;
            color: #718096;
        }

        /* Section 4: Call to Action */
        .cta-section {
            text-align: center;
            padding: 60px 30px;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.1);
        }

        .cta-title {
            font-size: 2rem;
            color: #2d3748;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .cta-subtitle {
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 30px;
        }

        .whatsapp-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 18px 40px;
            background: #25D366;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(37, 211, 102, 0.3);
        }

        .whatsapp-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4);
            background: #128C7E;
        }

        .whatsapp-btn svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        /* Empty state for services */
        .services-empty {
            text-align: center;
            color: #a0aec0;
            padding: 40px;
            font-style: italic;
        }
    </style>
</head>
<body>

    <div class="container">

        {{-- Section 1: Main Profile --}}
        <section class="profile-section">
            <img 
                src="{{ $profileImage ?? 'https://via.placeholder.com/180' }}" 
                alt="{{ $name ?? 'Profile' }}" 
                class="profile-image"
            >
            <h1 class="profile-name">{{ $name ?? 'Your Name' }}</h1>
            
            @if(!empty($tagline))
                <p class="tagline">{{ $tagline }}</p>
            @endif
        </section>

        {{-- Section 2: Social Icons --}}
        @if(!empty($socialLinks) && count($socialLinks) > 0)
            <section class="social-section">
                <h2 class="social-title">Connect With Me</h2>
                <div class="social-icons">
                    @foreach($socialLinks as $social)
                        <a 
                            href="{{ $social['url'] }}" 
                            target="_blank" 
                            rel="noopener noreferrer" 
                            class="social-link"
                            title="{{ $social['name'] }}"
                        >
                            {!! $social['icon'] !!}
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

        {{-- Section 3: What We Do --}}
        <section class="services-section">
            <h2 class="services-title">What I Do</h2>
            
            @if(!empty($services) && count($services) > 0)
                <div class="services-grid">
                    @foreach($services as $service)
                        <div class="service-card">
                            <span class="service-icon">{{ $service['icon'] ?? '✨' }}</span>
                            <h3 class="service-title">{{ $service['title'] }}</h3>
                            <p class="service-description">{{ $service['description'] ?? '' }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="services-empty">Services coming soon...</p>
            @endif
        </section>

        {{-- Section 4: Call to Action --}}
        <section class="cta-section">
            <h2 class="cta-title">Let's Work Together</h2>
            <p class="cta-subtitle">Have a project in mind? Let's discuss it!</p>
            
            <a 
                href="https://wa.me/{{ $whatsappNumber ?? '' }}?text=Hi!%20I%20found%20your%20website%20and%20would%20like%20to%20connect." 
                target="_blank" 
                class="whatsapp-btn"
            >
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Contact on WhatsApp
            </a>
        </section>

    </div>

</body>
</html>