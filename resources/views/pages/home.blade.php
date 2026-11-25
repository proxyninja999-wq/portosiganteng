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
                            <img src="{{ asset('images/profil.jpg') }}" alt="Portrait of Muh. Aditya Fadillah Badusi">
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
            <h2 class="section-title">ChordFinder — AI Music Studio</h2>
            <p class="section-subtitle">
                Where software engineering meets musical craft: high-precision in-browser chord detection, DSP audio analysis, and AI composition tools.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-asterisk"></i>
            </div>
        </div>

        <div class="featured-spotlight-card" data-aos="fade-up" data-aos-delay="100">
            <div class="spotlight-media">
                <span class="spotlight-badge">Volume Spotlight</span>
                <img src="{{ asset('images/chordfinder.jpg') }}" alt="ChordFinder AI Music Studio">
            </div>
            <div class="spotlight-info">
                <div class="spotlight-year"><i class="fa-regular fa-calendar"></i> FEATURED RELEASE: 2026</div>
                <h3 class="spotlight-title">Real-Time MIR & Live Chord Studio</h3>
                <p class="spotlight-desc">
                    An in-browser Music Information Retrieval (MIR) suite uniting a WebGL TensorFlow.js ensemble with an 8192-FFT HPSS + HMM Viterbi DSP engine. Capable of live 60-chord recognition, full MP3/WAV/FLAC key and BPM analysis, ±0.05-cent YIN guitar tuning, and AI-assisted chord progressions.
                </p>
                <div class="spotlight-tech-stack">
                    <span class="tag-badge"><i class="fa-solid fa-brain"></i> TensorFlow.js Ensemble</span>
                    <span class="tag-badge"><i class="fa-solid fa-wave-square"></i> 8192-FFT HPSS + Viterbi</span>
                    <span class="tag-badge"><i class="fa-solid fa-guitar"></i> YIN Precision Tuner</span>
                    <span class="tag-badge"><i class="fa-solid fa-wand-magic-sparkles"></i> Gemini Copilot</span>
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
            <!-- Project 1: ChordFinder -->
            <div class="book-item-card" data-aos="fade-up" data-aos-delay="50">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/chordfinder.jpg') }}" alt="ChordFinder AI Studio">
                    <span class="book-vol-tag">VOL. 01</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category">AI & Music Tech</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">ChordFinder AI Studio</h3>
                <p class="book-synopsis">
                    Real-time 60-chord audio detector and studio monitor powered by TensorFlow.js, 8192-FFT HPSS + HMM Viterbi DSP, and a precision YIN tuner.
                </p>
                <div class="book-card-footer">
                    <span class="tag-badge">TF.js & Web Audio</span>
                    <a href="{{ url('/projects') }}" class="book-action-link">
                        Read Review <i class="fa-solid fa-arrow-right-long"></i>
                    </a>
                </div>
            </div>

            <!-- Project 2: Penggajian -->
            <div class="book-item-card" data-aos="fade-up" data-aos-delay="150">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/penggajian.svg') }}" alt="Penggajian Employee Payroll System">
                    <span class="book-vol-tag">VOL. 02</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category">Enterprise & Payroll</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">Penggajian — Payroll & Operations System</h3>
                <p class="book-synopsis">
                    Full-stack Laravel 12 workforce platform managing employee attendance, delivery trip-rate bonuses, automated salary deductions, and printable payslips.
                </p>
                <div class="book-card-footer">
                    <span class="tag-badge">Laravel 12 & MySQL</span>
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

<!-- 5. Picture Dumps Preview: Polaroid Scrapbook -->
<section class="section section-white">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Visual Scrapbook • Picture Dumps</span>
            <h2 class="section-title">Moments with Friends, Partner, & Life</h2>
            <p class="section-subtitle">
                Beyond code editors and server deployments — candid frames with the people who make everyday life brighter.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-camera-retro"></i>
            </div>
        </div>

        <div class="polaroid-preview-strip">
            <a href="{{ url('/dumps') }}" class="polaroid-card tilt-left" data-aos="fade-up" data-aos-delay="50">
                <div class="polaroid-tape"></div>
                <div class="polaroid-photo-box">
                    <img src="{{ asset('images/dumps/dump3.jpg') }}" alt="With Partner" loading="lazy">
                    <span class="polaroid-cat-pill"><i class="fa-solid fa-heart"></i> With Partner</span>
                </div>
                <div class="polaroid-caption-area">
                    <div class="polaroid-stamp">FRAME 01 • US</div>
                    <h3 class="polaroid-title">Afternoon Under the Canopy</h3>
                </div>
            </a>

            <a href="{{ url('/dumps') }}" class="polaroid-card tilt-right" data-aos="fade-up" data-aos-delay="120">
                <div class="polaroid-tape"></div>
                <div class="polaroid-photo-box">
                    <img src="{{ asset('images/dumps/dump2.jpg') }}" alt="Beach Day with Friends" loading="lazy">
                    <span class="polaroid-cat-pill"><i class="fa-solid fa-umbrella-beach"></i> Friends</span>
                </div>
                <div class="polaroid-caption-area">
                    <div class="polaroid-stamp">FRAME 04 • COAST</div>
                    <h3 class="polaroid-title">Salt Air & Good Company</h3>
                </div>
            </a>

            <a href="{{ url('/dumps') }}" class="polaroid-card tilt-left" data-aos="fade-up" data-aos-delay="190">
                <div class="polaroid-tape"></div>
                <div class="polaroid-photo-box">
                    <img src="{{ asset('images/dumps/dump4.jpg') }}" alt="Photobooth Keepsakes" loading="lazy">
                    <span class="polaroid-cat-pill"><i class="fa-solid fa-heart"></i> Keepsakes</span>
                </div>
                <div class="polaroid-caption-area">
                    <div class="polaroid-stamp">FRAME 03 • US</div>
                    <h3 class="polaroid-title">Photobooth Strips</h3>
                </div>
            </a>

            <a href="{{ url('/dumps') }}" class="polaroid-card tilt-right" data-aos="fade-up" data-aos-delay="260">
                <div class="polaroid-tape"></div>
                <div class="polaroid-photo-box">
                    <img src="{{ asset('images/dumps/dump1.jpg') }}" alt="Campus Friends" loading="lazy">
                    <span class="polaroid-cat-pill"><i class="fa-solid fa-user-group"></i> Campus Crew</span>
                </div>
                <div class="polaroid-caption-area">
                    <div class="polaroid-stamp">FRAME 02 • CAMPUS</div>
                    <h3 class="polaroid-title">Lectures & Laughter</h3>
                </div>
            </a>
        </div>

        <div style="text-align: center; margin-top: 48px;" data-aos="fade-up">
            <a href="{{ url('/dumps') }}" class="btn-editorial-primary">
                <i class="fa-solid fa-images"></i> Open Full Picture Dumps (9 Frames)
            </a>
        </div>
    </div>
</section>

<!-- 6. Beyond the Terminal: Creative Passions & Collaboration -->
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
