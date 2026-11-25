@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        
        <!-- Catalog Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Bibliography & Portfolio • Curated Works</span>
            <h1 class="section-title">Catalog of Systems & Engineering Works</h1>
            <p class="section-subtitle">
                A curated selection of AI audio applications and enterprise web platforms crafted with meticulous attention to performance and human experience.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-layer-group"></i>
            </div>
        </div>

        <!-- Category Filter Tabs (Bibliography Style) -->
        <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 45px; flex-wrap: wrap;" data-aos="fade-up">
            <button class="tag-badge filter-btn active" data-filter="all" style="padding: 8px 18px; font-size: 0.85rem; cursor: pointer; background: var(--accent-primary); color: #ffffff; border-color: var(--accent-primary);">
                All Works (2)
            </button>
            <button class="tag-badge filter-btn" data-filter="ai" style="padding: 8px 18px; font-size: 0.85rem; cursor: pointer; background: #ffffff;">
                <i class="fa-solid fa-wand-magic-sparkles"></i> AI & Music Tech
            </button>
            <button class="tag-badge filter-btn" data-filter="web" style="padding: 8px 18px; font-size: 0.85rem; cursor: pointer; background: #ffffff;">
                <i class="fa-solid fa-briefcase"></i> Enterprise & Payroll
            </button>
        </div>

        <!-- Shelf Grid -->
        <div class="book-shelf-grid">

            <!-- Project 1: ChordFinder -->
            <div class="book-item-card project-filter-item" data-category="ai" data-aos="fade-up" data-aos-delay="50">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/chordfinder.jpg') }}" alt="ChordFinder AI Studio">
                    <span class="book-vol-tag">VOL. 01 • AI & MIR</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category"><i class="fa-solid fa-music"></i> AI & Music Tech</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">ChordFinder — AI Music Studio & Live Chord Detector</h3>
                <p class="book-synopsis">
                    In-browser real-time chord detection and audio analysis studio powered by a dual TensorFlow.js ensemble and 8192-FFT HPSS + HMM Viterbi DSP engine with 60-chord recognition, precision YIN guitar tuner, and Gemini AI copilot.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 18px;">
                    <span class="tag-badge">TensorFlow.js</span>
                    <span class="tag-badge">8192-FFT & Viterbi DSP</span>
                    <span class="tag-badge">YIN Tuner</span>
                    <span class="tag-badge">Gemini Copilot</span>
                </div>
                <div class="book-card-footer">
                    <span style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--ink-muted);">AI Audio Studio</span>
                    <button class="book-action-link btn-view-project" style="background: none; border: none; cursor: pointer;"
                        data-title="ChordFinder — AI Music Studio & Live Chord Detector"
                        data-cat="AI & Music Tech (2026)"
                        data-img="{{ asset('images/chordfinder.jpg') }}"
                        data-desc="Born at the intersection of software engineering and a lifelong love for music, ChordFinder is a high-precision Music Information Retrieval (MIR) web studio. It pairs a WebGL-accelerated TensorFlow.js neural ensemble with an 8192/16K-FFT Harmonic-Percussive Source Separation (HPSS) and HMM Viterbi decoding pipeline to recognize 60 chord qualities (Major, Minor, 7th) live from microphone input or uploaded MP3/WAV/FLAC tracks. Features include automatic key & BPM detection, bass anchoring, a 12-pitch class chromagram monitor, a ±0.05-cent YIN precision guitar tuner, reverse fretboard/piano finder, and an integrated Gemini AI progression & lyric copilot."
                        data-tech="TensorFlow.js (WebGL), Web Audio API, 8192/16K-FFT MIR, HPSS & HMM Viterbi DSP, YIN Pitch Algorithm, Gemini AI API">
                        Case Study <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>

            <!-- Project 2: Penggajian -->
            <div class="book-item-card project-filter-item" data-category="web" data-aos="fade-up" data-aos-delay="150">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/penggajian.svg') }}" alt="Employee Payroll & Operations System">
                    <span class="book-vol-tag">VOL. 02 • ERP & PAYROLL</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category"><i class="fa-solid fa-file-invoice-dollar"></i> Enterprise & Payroll</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">Penggajian — Employee Payroll & Operations System</h3>
                <p class="book-synopsis">
                    Full-stack enterprise payroll, attendance, and operational dispatch platform built with Laravel 12, featuring multi-role portals, geolocation attendance recaps, delivery trip bonuses, and automated digital payslips.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 18px;">
                    <span class="tag-badge">Laravel 12</span>
                    <span class="tag-badge">PHP 8.3 & MySQL</span>
                    <span class="tag-badge">Multi-Role Auth</span>
                    <span class="tag-badge">Automated Payslips</span>
                </div>
                <div class="book-card-footer">
                    <span style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--ink-muted);">PT Espri Tirta Kencana</span>
                    <button class="book-action-link btn-view-project" style="background: none; border: none; cursor: pointer;"
                        data-title="Penggajian — Employee Payroll & Operations System"
                        data-cat="Enterprise Web & Payroll (2026)"
                        data-img="{{ asset('images/penggajian.svg') }}"
                        data-desc="Engineered to streamline workforce administration and monthly payroll calculations for industrial operations (PT Espri Tirta Kencana). Built on Laravel 12 with dedicated Admin and Employee (Pegawai) role portals, the platform manages employee & position master records, geolocation-verified daily attendance windows, delivery manifests and driver trip-rate bonuses (Surat Jalan & Ritase), configurable salary deductions, monthly financial & attendance reports, and one-click printable employee payslips."
                        data-tech="Laravel 12, PHP 8.3, MySQL, Bootstrap UI, jQuery AJAX, Role-Based Access Control (RBAC), Printable Slip Engine">
                        Case Study <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- Collaboration Callout -->
        <div class="facts-sidebar-card" style="margin-top: 70px; text-align: center; padding: 45px 30px;" data-aos="fade-up">
            <h3 style="font-size: 1.8rem; margin-bottom: 12px; color: var(--ink-title);">Have a Similar Project or Software Initiative in Mind?</h3>
            <p style="font-family: var(--font-story); font-size: 1.1rem; color: var(--ink-muted); max-width: 650px; margin: 0 auto 25px;">
                I am always excited to collaborate on full-stack enterprise systems, payroll & operational platforms, or interactive AI web applications.
            </p>
            <a href="mailto:proxyninja999@gmail.com" class="btn-editorial-primary">
                <i class="fa-solid fa-envelope"></i> Email Me to Discuss
            </a>
        </div>

    </div>
</section>

<!-- Interactive Case Study Modal (Book Excerpt Style) -->
<div class="modal-editorial-overlay" id="projectModal">
    <div class="modal-editorial-card">
        <button class="modal-close-btn" id="modalCloseBtn">&times;</button>
        <div style="width: 100%; aspect-ratio: 16 / 9; overflow: hidden; background: var(--bg-warm);">
            <img id="modalImg" src="" alt="Work Detail" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
        </div>
        <div class="modal-content-box">
            <div id="modalCat" style="font-family: var(--font-mono); font-size: 0.78rem; color: var(--accent-amber); text-transform: uppercase; margin-bottom: 6px; font-weight: 600;"></div>
            <h2 id="modalTitle" style="font-size: 1.75rem; margin-bottom: 16px; color: var(--ink-title);"></h2>
            <p id="modalDesc" style="font-family: var(--font-story); font-size: 1.05rem; line-height: 1.7; color: var(--ink-body); margin-bottom: 24px;"></p>
            
            <div style="margin-bottom: 20px;">
                <div style="font-family: var(--font-mono); font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.08em; color: var(--ink-muted); margin-bottom: 8px;">
                    Technical Specifications:
                </div>
                <div id="modalTech" style="font-size: 0.95rem; color: var(--accent-primary); font-weight: 600;"></div>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 25px;">
                <a href="mailto:proxyninja999@gmail.com" class="btn-editorial-primary" style="flex: 1; justify-content: center;">
                    <i class="fa-solid fa-envelope"></i> Inquire Regarding This Work
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
