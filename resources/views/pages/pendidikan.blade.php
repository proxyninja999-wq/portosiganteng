@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Academic Journey • The Path</span>
            <h1 class="section-title">Educational Milestones</h1>
            <p class="section-subtitle">
                The schools and institutions that shaped my journey from primary curiosity to Full Stack Web Development.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-graduation-cap"></i>
            </div>
        </div>

        <div style="max-width: 760px; margin: 0 auto;" data-aos="fade-up">
            <div class="timeline-editorial">
                <!-- Higher Education -->
                <div class="timeline-node">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Present • Undergraduate Studies</div>
                    <h3 class="timeline-title">Universitas Dipa Makassar</h3>
                    <div class="timeline-institution">Software Engineering / Rekayasa Perangkat Lunak (TI)</div>
                    <p style="font-size: 0.95rem; color: var(--ink-muted);">
                        Continuing advanced studies in algorithms, web frameworks, and system design.
                    </p>
                </div>

                <!-- SMK -->
                <div class="timeline-node">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Vocational High School</div>
                    <h3 class="timeline-title">SMK Mutiara Ilmu Makassar</h3>
                    <div class="timeline-institution">Major: Rekayasa Perangkat Lunak (Software Engineering)</div>
                    <p style="font-size: 0.95rem; color: var(--ink-muted);">
                        Foundational training in programming, relational databases, web development, and hardware.
                    </p>
                </div>

                <!-- SMP -->
                <div class="timeline-node">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Junior High School</div>
                    <h3 class="timeline-title">SMP Plus Budi Utomo Makassar</h3>
                    <div class="timeline-institution">Secondary Education — Makassar</div>
                    <p style="font-size: 0.95rem; color: var(--ink-muted);">
                        Formative middle school studies and early exploration of computer systems.
                    </p>
                </div>

                <!-- SD -->
                <div class="timeline-node">
                    <div class="timeline-dot"></div>
                    <div class="timeline-date">Elementary School</div>
                    <h3 class="timeline-title">SD Negeri Pajjaiang</h3>
                    <div class="timeline-institution">Primary School Education — Makassar</div>
                    <p style="font-size: 0.95rem; color: var(--ink-muted);">
                        The foundation of my learning journey and childhood days.
                    </p>
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <a href="{{ url('/about') }}" class="btn-editorial-primary">
                    <i class="fa-solid fa-book-open"></i> Read Full Biography Essay
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
