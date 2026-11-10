@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        
        <!-- Catalog Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Bibliography & Portfolio • Curated Works</span>
            <h1 class="section-title">Catalog of Systems & Engineering Works</h1>
            <p class="section-subtitle">
                A collection of system architectures, network infrastructures, and web platforms crafted with meticulous attention to performance and human experience.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-layer-group"></i>
            </div>
        </div>

        <!-- Category Filter Tabs (Bibliography Style) -->
        <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 45px; flex-wrap: wrap;" data-aos="fade-up">
            <button class="tag-badge filter-btn active" data-filter="all" style="padding: 8px 18px; font-size: 0.85rem; cursor: pointer; background: var(--accent-primary); color: #ffffff; border-color: var(--accent-primary);">
                All Works (3)
            </button>
            <button class="tag-badge filter-btn" data-filter="network" style="padding: 8px 18px; font-size: 0.85rem; cursor: pointer; background: #ffffff;">
                <i class="fa-solid fa-network-wired"></i> Networks & Hardware
            </button>
            <button class="tag-badge filter-btn" data-filter="web" style="padding: 8px 18px; font-size: 0.85rem; cursor: pointer; background: #ffffff;">
                <i class="fa-solid fa-code"></i> Web Engineering
            </button>
            <button class="tag-badge filter-btn" data-filter="education" style="padding: 8px 18px; font-size: 0.85rem; cursor: pointer; background: #ffffff;">
                <i class="fa-solid fa-graduation-cap"></i> Educational Systems
            </button>
        </div>

        <!-- Shelf Grid -->
        <div class="book-shelf-grid">
            
            <!-- Project 1 -->
            <div class="book-item-card project-filter-item" data-category="network" data-aos="fade-up" data-aos-delay="100">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/project1.png') }}" alt="Campus Network Infrastructure">
                    <span class="book-vol-tag">VOL. 01 • NET</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category"><i class="fa-solid fa-ethernet"></i> Networks & Hardware</span>
                    <span class="book-year">2025</span>
                </div>
                <h3 class="book-title">Integrated Campus Network Infrastructure</h3>
                <p class="book-synopsis">
                    Comprehensive design and implementation of Cat6 structured cabling, departmental VLANs, MikroTik firewall queuing, and high-density campus Wi-Fi.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 18px;">
                    <span class="tag-badge">MikroTik RouterOS</span>
                    <span class="tag-badge">Structured LAN</span>
                    <span class="tag-badge">Bandwidth QoS</span>
                </div>
                <div class="book-card-footer">
                    <span style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--ink-muted);">SMKS Persada</span>
                    <button class="book-action-link btn-view-project" style="background: none; border: none; cursor: pointer;"
                        data-title="Integrated Campus Network Infrastructure"
                        data-cat="Networks & Hardware (2025)"
                        data-img="{{ asset('images/project1.png') }}"
                        data-desc="This engineering initiative focused on modernizing institutional wired and wireless infrastructure across SMKS Persada. Faced with dense daily computer-based learning traffic, the topology was structured with deterministic CIDR subnets, VLAN segregation between staff and student labs, content DNS filtering, and prioritized bandwidth queues."
                        data-tech="MikroTik RouterOS, Cat6 UTP, Managed Cisco Switches, PoE APs, CIDR Subnetting">
                        Case Study <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="book-item-card project-filter-item" data-category="web" data-aos="fade-up" data-aos-delay="200">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/project2.png') }}" alt="Dynamic Editorial Portfolio">
                    <span class="book-vol-tag">VOL. 02 • WEB</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category"><i class="fa-solid fa-laptop-code"></i> Web Engineering</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">Dynamic Editorial Portfolio & Fellowship Portal</h3>
                <p class="book-synopsis">
                    Full-featured Laravel web platform built with a literary editorial design system, SQLite persistence, real-time AJAX, and community membership.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 18px;">
                    <span class="tag-badge">Laravel 11</span>
                    <span class="tag-badge">PHP 8.3</span>
                    <span class="tag-badge">AJAX Engine</span>
                </div>
                <div class="book-card-footer">
                    <span style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--ink-muted);">Personal Platform</span>
                    <button class="book-action-link btn-view-project" style="background: none; border: none; cursor: pointer;"
                        data-title="Dynamic Editorial Portfolio & Fellowship Portal"
                        data-cat="Web Engineering (2026)"
                        data-img="{{ asset('images/project2.png') }}"
                        data-desc="Engineered with a content-first philosophy inspired by John Green's literary web aesthetic. The application integrates an authenticated community fellowship module with secure Bcrypt credential hashing, dynamic AJAX service selectors, and an administrative curation dashboard."
                        data-tech="PHP 8.3, Laravel Framework, SQLite Database, jQuery AJAX, CSS3 Typography Architecture">
                        Case Study <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="book-item-card project-filter-item" data-category="education" data-aos="fade-up" data-aos-delay="300">
                <div class="book-cover-wrap">
                    <img src="{{ asset('images/project3.png') }}" alt="Digital Student Attendance System">
                    <span class="book-vol-tag">VOL. 03 • SYS</span>
                </div>
                <div class="book-meta-top">
                    <span class="book-category"><i class="fa-solid fa-chart-line"></i> Educational Systems</span>
                    <span class="book-year">2026</span>
                </div>
                <h3 class="book-title">Digital Student Attendance & Analytics Platform</h3>
                <p class="book-synopsis">
                    Automated web-based attendance tracking platform delivering real-time classroom statistics, automated reports, and streamlined administrative management.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 6px; margin-bottom: 18px;">
                    <span class="tag-badge">Student Tracking</span>
                    <span class="tag-badge">Automated Reports</span>
                    <span class="tag-badge">Responsive UI</span>
                </div>
                <div class="book-card-footer">
                    <span style="font-family: var(--font-mono); font-size: 0.72rem; color: var(--ink-muted);">Academic Systems</span>
                    <button class="book-action-link btn-view-project" style="background: none; border: none; cursor: pointer;"
                        data-title="Digital Student Attendance & Analytics Platform"
                        data-cat="Educational Systems (2026)"
                        data-img="{{ asset('images/project3.png') }}"
                        data-desc="Crafted to eliminate cumbersome paper-based roll calls in vocational schools. The system features a rapid-entry teacher interface, automatic monthly percentage calculations, early notification triggers for chronic absenteeism, and export-ready administrative reports."
                        data-tech="Web Stack, Relational SQL, Analytics Dashboard, PDF & Spreadsheet Export Engine">
                        Case Study <i class="fa-solid fa-arrow-right-long"></i>
                    </button>
                </div>
            </div>

        </div>

        <!-- Collaboration Callout -->
        <div class="facts-sidebar-card" style="margin-top: 70px; text-align: center; padding: 45px 30px;" data-aos="fade-up">
            <h3 style="font-size: 1.8rem; margin-bottom: 12px; color: var(--ink-title);">Have a Similar Project or Research Initiative in Mind?</h3>
            <p style="font-family: var(--font-story); font-size: 1.1rem; color: var(--ink-muted); max-width: 650px; margin: 0 auto 25px;">
                I am always excited to discuss new network deployments, web platforms, or digital education initiatives.
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
            <img id="modalImg" src="" alt="Work Detail" style="width: 100%; height: 100%; object-fit: cover;">
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
