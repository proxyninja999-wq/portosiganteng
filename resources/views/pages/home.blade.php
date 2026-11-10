@extends('layouts.app')

@section('content')

<!-- 1. Hero Section: Editorial Author Introduction -->
<section class="hero-editorial">
    <div class="container">
        <div class="hero-grid">
            <div data-aos="fade-up">

                <div class="hero-tag-wrap">
                    <i class="fa-solid fa-code"></i>
                    <span>Full Stack Web Developer • 21 Years Old</span>
                </div>

                <h1 class="hero-title">
                    Crafting Systems with <em>Code</em>, Music, & Curiosity.
                </h1>

                <p class="hero-lead">
                    Hello, I am <strong>Muh. Aditya Fadillah Badusi</strong> — a 21-year-old Full Stack Web Developer and Software Engineering (RPL) student based in Makassar, born in Barru.
                </p>

                <p class="hero-bio">
                    Currently pursuing my undergraduate studies in Software Engineering at <strong>Universitas Dipa Makassar</strong> after building my foundational tech roots at <strong>SMK Mutiara Ilmu Makassar</strong>. Outside the terminal, my world revolves around music and gaming — two passions that constantly inspire how I design interactive, engaging, and resilient software.
                </p>

                <div class="hero-actions">
                    <a href="{{ url('/projects') }}" class="btn-editorial-primary">
                        <i class="fa-solid fa-compass"></i> Explore Curated Works
                    </a>
                    <a href="{{ url('/about') }}" class="btn-editorial-outline">
                        <i class="fa-solid fa-book-open"></i> Read the Story
                    </a>
                    <a href="mailto:proxyninja999@gmail.com" class="btn-editorial-amber">
                        <i class="fa-solid fa-envelope"></i> Email Me
                    </a>
                </div>

                <div class="hero-meta-row">
                    <div class="hero-meta-item">
                        <span class="hero-meta-num">21</span>
                        <span class="hero-meta-label">Years Old (b. Barru, 2005)</span>
                    </div>
                    <div class="hero-meta-item">
                        <span class="hero-meta-num">RPL</span>
                        <span class="hero-meta-label">Software Engineering</span>
                    </div>
                    <div class="hero-meta-item">
                        <span class="hero-meta-num">Full Stack</span>
                        <span class="hero-meta-label">Web Architecture</span>
                    </div>
                </div>
            </div>

            <!-- Author Portrait Card (John Green Portrait Style) -->
            <div data-aos="fade-left" data-aos-delay="150">
                <div class="portrait-card">
                    <div class="portrait-frame">
                        <div class="portrait-img-wrap">
                            <img src="{{ asset('images/profil.jpeg') }}" alt="Portrait of Muh. Aditya Fadillah Badusi">
                        </div>
                        <div class="portrait-caption">
                            <div class="portrait-name">Muh. Aditya Fadillah Badusi</div>
                            <div class="portrait-role">Full Stack Developer • Music & Gaming</div>
                            <div>
                                <span class="portrait-quote-chip">"Don't Forget to Be Awesome"</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. Featured Spotlight (Flagship Project / John Green Novel Launch Style) -->
<section class="section section-warm">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Spotlight Release • Flagship Work</span>
            <h2 class="section-title">Integrated Campus Network Infrastructure</h2>
            <p class="section-subtitle">
                An institution-wide engineering project uniting robust structured cabling, VLAN segmentation, and distributed Wi-Fi.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-asterisk"></i>
            </div>
        </div>

        <div class="featured-spotlight-card" data-aos="fade-up" data-aos-delay="100">
            <div class="spotlight-media">
                <span class="spotlight-badge">Volume Spotlight</span>
                <img src="{{ asset('images/project1.png') }}" alt="School Network Infrastructure">
            </div>
            <div class="spotlight-info">
                <div class="spotlight-year"><i class="fa-regular fa-calendar"></i> COMMISSIONED: 2025 - 2026</div>
                <h3 class="spotlight-title">SMKS Persada Campus Infrastructure</h3>
                <p class="spotlight-desc">
                    A comprehensive institutional network overhaul encompassing Cat6 gigabit trunk routing, departmental VLAN segregation, MikroTik RouterOS firewall configuration for equitable bandwidth queues, and resilient wireless coverage for hundreds of active students and faculty.
                </p>
                <div class="spotlight-tech-stack">
                    <span class="tag-badge"><i class="fa-solid fa-network-wired"></i> MikroTik RouterOS</span>
                    <span class="tag-badge"><i class="fa-solid fa-wifi"></i> PoE Access Points</span>
                    <span class="tag-badge"><i class="fa-solid fa-shield-halved"></i> Firewall & Captive Portal</span>
                    <span class="tag-badge"><i class="fa-solid fa-diagram-project"></i> VLAN Subnets</span>
                </div>
                <div>
                    <a href="{{ url('/projects') }}" class="btn-editorial-primary">
                        <i class="fa-solid fa-book-bookmark"></i> Explore Works Catalog
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 3. Curated Bibliography / Bookshelf Style Projects Grid -->
<section class="section section-white">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Digital Bibliography • Selected Works</span>
            <h2 class="section-title">Catalog of Systems & Projects</h2>
            <p class="section-subtitle">
                Each project represents a distinct chapter in solving real computational challenges and refining user experiences.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-diamond"></i>
            </div>
        </div>

        <div class="book-shelf-grid">
            <!-- Project 1 -->
            <div class="book-item-card" data-aos="fade-up" data-aos-delay="100">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/project1.png') }}" alt="Network Infrastructure">
                    <span class="book-vol-tag">VOL. 01</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category">Network & Hardware</span>
                    <span class="book-year">2025</span>
                </div>
                <h3 class="book-title">Campus Network Architecture</h3>
                <p class="book-synopsis">
                    Comprehensive design and deployment of structured LAN cabling, captive hotspot access, and bandwidth governance at SMKS Persada.
                </p>
                <div class="book-card-footer">
                    <span class="tag-badge">SMKS Persada</span>
                    <a href="{{ url('/projects') }}" class="book-action-link">
                        Read Review <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="book-item-card" data-aos="fade-up" data-aos-delay="200">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/project2.png') }}" alt="Dynamic Web Portfolio">
                    <span class="book-vol-tag">VOL. 02</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category">Web Architecture</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">Dynamic Editorial Portfolio</h3>
                <p class="book-synopsis">
                    Modern web platform built with a literary editorial design system, structured data persistence, real-time interactions, and clean layout.
                </p>
                <div class="book-card-footer">
                    <span class="tag-badge">Laravel & JS</span>
                    <a href="{{ url('/projects') }}" class="book-action-link">
                        Read Review <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="book-item-card" data-aos="fade-up" data-aos-delay="300">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/project3.png') }}" alt="Digital Attendance System">
                    <span class="book-vol-tag">VOL. 03</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category">Educational System</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">Digital Attendance & Analytics</h3>
                <p class="book-synopsis">
                    Automated web-based student tracking platform providing live attendance records, automated reports, and streamlined administrative management.
                </p>
                <div class="book-card-footer">
                    <span class="tag-badge">Enterprise UI</span>
                    <a href="{{ url('/projects') }}" class="book-action-link">
                        Read Review <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 50px;" data-aos="fade-up">
            <a href="{{ url('/projects') }}" class="btn-editorial-outline">
                <i class="fa-solid fa-book-journal-whills"></i> View Complete Works Bibliography
            </a>
        </div>
    </div>
</section>

<!-- 4. Notes from the Desk: John Green-Style Quote & Reflection -->
<section class="quote-banner-section">
    <div class="container">
        <div class="quote-inner-box" data-aos="zoom-in">
            <span class="quote-lead-kicker">Notes from the Desk • Reflections</span>
            <div class="quote-text">
                "Writing clean code is a lot like playing a good song or immersing yourself in a great game: it takes practice, rhythm, and a genuine care for the person experiencing it on the other side."
            </div>
            <div class="quote-author">Muh. Aditya Fadillah Badusi</div>
            <div class="quote-role">Full Stack Web Developer • Makassar, Indonesia</div>
        </div>
    </div>
</section>

<!-- 5. Beyond the Terminal: Creative Passions & Collaboration -->
<section class="section section-warm">
    <div class="container">
        <div class="community-callout-card" data-aos="fade-up">
            <div>
                <span class="section-eyebrow">Beyond the Terminal • Creative Curiosity</span>
                <h2 style="font-size: 2.2rem; margin-bottom: 16px;">Music, Gaming, & Web Craft</h2>
                <p style="font-family: var(--font-story); font-size: 1.1rem; color: var(--ink-body); line-height: 1.7;">
                    I believe great software engineering draws inspiration from diverse creative worlds. When I am not debugging endpoints or fine-tuning CSS layouts, you will find me discovering new music genres or analyzing video game mechanics and interface narratives.
                </p>

                <ul class="community-perks-list">
                    <li><i class="fa-solid fa-headphones"></i> Soundtracks & Music for Flow</li>
                    <li><i class="fa-solid fa-gamepad"></i> Game Design & Interactive Systems</li>
                    <li><i class="fa-solid fa-layer-group"></i> Full Stack Architecture & REST APIs</li>
                    <li><i class="fa-solid fa-heart"></i> Don't Forget to Be Awesome (DFTBA)</li>
                </ul>

                <div style="display: flex; gap: 15px; flex-wrap: wrap;">
                    <a href="mailto:proxyninja999@gmail.com" class="btn-editorial-primary">
                        <i class="fa-solid fa-envelope"></i> Email Me Directly
                    </a>
                    <a href="{{ url('/about') }}" class="btn-editorial-outline">
                        <i class="fa-solid fa-book-open"></i> Read Full Biography
                    </a>
                </div>
            </div>

            <div class="community-stats-box">
                <div style="font-family: var(--font-serif); font-size: 1.3rem; font-weight: 700; margin-bottom: 20px; color: var(--ink-title);">
                    Developer Snapshot
                </div>
                <div class="stats-grid">
                    <div class="stat-item">
                        <div class="stat-number">21</div>
                        <div class="stat-title">Years of Curiosity</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">RPL</div>
                        <div class="stat-title">Software Engineering</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">100%</div>
                        <div class="stat-title">Passionate Builder</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">DFTBA</div>
                        <div class="stat-title">Guiding Ethos</div>
                    </div>
                </div>
                <p style="font-size: 0.85rem; color: var(--ink-muted); margin: 0;">
                    Building digital tools with empathy, structure, and joy.
                </p>
            </div>
        </div>
    </div>
</section>

@endsection
