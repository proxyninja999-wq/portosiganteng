<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muh. Aditya Fadillah Badusi — Full Stack Web Developer</title>
    <meta name="description" content="Portfolio of Muh. Aditya Fadillah Badusi — a 21-year-old Full Stack Web Developer and Software Engineering student in Makassar. Crafting clean web systems, inspired by code, music, and gaming.">
    
    <!-- Editorial Monogram Favicon -->
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%231f3a2f%22/><text x=%2250%22 y=%2268%22 font-family=%22Georgia,serif%22 font-size=%2258%22 font-weight=%22bold%22 fill=%22%23e09f3e%22 text-anchor=%22middle%22>A</text></svg>">
    
    <!-- Google Fonts: Editorial Serif & Clean Sans (John Green Aesthetic) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;500;600&family=Lora:ital,wght@0,400;0,500;0,600;1,400&family=Playfair+Display:ital,wght@0,500;0,600;0,700;0,800;1,400;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Font Awesome 6 Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    
    <!-- AOS Scroll Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom Editorial Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @php
        // Date & Time Setup (English Locale)
        \Carbon\Carbon::setLocale('en');
        $now = \Carbon\Carbon::now('Asia/Makassar');
        $dayToday = $now->translatedFormat('l');
        $dateToday = $now->translatedFormat('F d, Y');
        $timeNow = $now->format('H:i');
    @endphp

    <!-- 1. Top Editorial Masthead Bar -->
    <div class="masthead-topbar">
        <div class="container topbar-wrapper">
            <div class="topbar-badge">
                <span class="status-dot online"></span>
                <span>OPEN FOR COLLABORATION</span>
                <span style="opacity: 0.4;">|</span>
                <span>MAKASSAR, ID</span>
            </div>
            <div class="topbar-time">
                <i class="fa-regular fa-calendar-days"></i>
                <span>{{ $dayToday }}, {{ $dateToday }}</span>
                <span style="opacity: 0.4;">•</span>
                <i class="fa-regular fa-clock"></i>
                <span id="live-clock">{{ $timeNow }}</span> WITA (UTC+8)
            </div>
        </div>
    </div>

    <!-- 2. Sticky Editorial Navigation -->
    <header class="site-header">
        <div class="container">
            <nav class="site-nav">
                <a href="{{ url('/') }}" class="brand-wrapper">
                    <div class="brand-title">Aditya Badusi<span>.</span></div>
                    <div class="brand-tagline">Full Stack Web Developer • Software Engineering</div>
                </a>

                <ul class="nav-menu" id="navMenu">
                    <li><a href="{{ url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                    <li><a href="{{ url('/about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Bio & Story</a></li>
                    <li><a href="{{ url('/projects') }}" class="{{ Request::is('projects') ? 'active' : '' }}">Works Catalog</a></li>
                    <li>
                        <a href="mailto:proxyninja999@gmail.com" class="nav-cta-btn">
                            <i class="fa-solid fa-envelope"></i> Email Me
                        </a>
                    </li>
                </ul>

                <button class="mobile-toggle" id="mobileToggle" aria-label="Toggle Menu">
                    <i class="fa-solid fa-bars-staggered"></i>
                </button>
            </nav>
        </div>
    </header>

    <!-- 3. Primary Page Content -->
    <main id="main-content">
        @yield('content')
    </main>

    <!-- 4. Editorial Footer (John Green & DFTBA Spirit) -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-brand">
                    <h3>Muh. Aditya Fadillah Badusi</h3>
                    <p>
                        A 21-year-old Full Stack Web Developer and Software Engineering student from Makassar, passionate about crafting clean web systems, exploring music, and gaming.
                    </p>
                    <div class="footer-motto-box">
                        <span>"Don't Forget to Be Awesome."</span>
                        <small>DFTBA — Coding with purpose, learning relentlessly, and staying curious.</small>
                    </div>
                </div>

                <div>
                    <div class="footer-col-title">Archive Navigation</div>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem; margin-right: 6px;"></i> Front Page</a></li>
                        <li><a href="{{ url('/about') }}"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem; margin-right: 6px;"></i> Biography & Journey</a></li>
                        <li><a href="{{ url('/projects') }}"><i class="fa-solid fa-chevron-right" style="font-size: 0.7rem; margin-right: 6px;"></i> Catalog of Works</a></li>
                    </ul>
                </div>

                <div>
                    <div class="footer-col-title">Affiliation & Inquiries</div>
                    <ul class="footer-links">
                        <li><span style="color: #c7c0b5;"><i class="fa-solid fa-graduation-cap" style="margin-right: 8px; color: #e09f3e;"></i> Universitas Dipa Makassar (RPL)</span></li>
                        <li><span style="color: #c7c0b5;"><i class="fa-solid fa-location-dot" style="margin-right: 8px; color: #e09f3e;"></i> Makassar, South Sulawesi (b. Barru)</span></li>
                        <li><a href="mailto:proxyninja999@gmail.com" style="color: #e09f3e;"><i class="fa-solid fa-envelope" style="margin-right: 8px;"></i> proxyninja999@gmail.com</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <div>
                    &copy; 2026 <strong>Muh. Aditya Fadillah Badusi</strong> — All personal works reserved.
                </div>
                <div class="footer-social-links">
                    <a href="https://github.com" target="_blank" title="GitHub"><i class="fa-brands fa-github"></i></a>
                    <a href="https://linkedin.com" target="_blank" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://instagram.com" target="_blank" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://youtube.com" target="_blank" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/script.js') }}"></script> 
    
    <script>
        // Realtime Clock
        setInterval(function() {
            var now = new Date();
            var h = String(now.getHours()).padStart(2, '0');
            var m = String(now.getMinutes()).padStart(2, '0');
            $('#live-clock').text(h + ":" + m);
        }, 30000);
    </script>
</body>
</html>
