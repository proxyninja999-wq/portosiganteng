@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        
        <!-- Editorial Biography Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Biography & Journey • The Record</span>
            <h1 class="section-title">About Muh. Aditya Fadillah Badusi</h1>
            <p class="section-subtitle">
                A personal chronicle of discovering software engineering, school days across Makassar, and the enduring joys of music, gaming, and code.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-feather-pointed"></i>
            </div>
        </div>

        <div class="bio-story-wrapper">
            
            <!-- Chapter 1 -->
            <div class="chapter-block" data-aos="fade-up">
                <span class="chapter-number">Chapter I — Early Days & Roots</span>
                <h2 class="chapter-heading">From Barru to the Classroom Desks of Makassar</h2>
                <div class="chapter-prose">
                    <p class="drop-cap">
                        I was born in <strong>Barru, South Sulawesi</strong> on March 2, 2005. Growing up, my childhood and school years unfolded across the vibrant city of Makassar, beginning with my primary school days at <strong>SD Negeri Pajjaiang</strong>. Those early years were marked by relentless curiosity about how gadgets, screens, and sounds came together.
                    </p>
                    <p>
                        Continuing my junior high education at <strong>SMP Plus Budi Utomo Makassar</strong>, I began exploring computers beyond mere pastime. It was during these formative years that the idea of creating digital experiences—rather than simply consuming them—started taking hold.
                    </p>
                </div>
            </div>

            <!-- Chapter 2 -->
            <div class="chapter-block" data-aos="fade-up">
                <span class="chapter-number">Chapter II — Falling in Love with Code</span>
                <h2 class="chapter-heading">Software Engineering at SMK Mutiara Ilmu</h2>
                <div class="chapter-prose">
                    <p>
                        The true turning point arrived when I entered <strong>SMK Mutiara Ilmu Makassar</strong>, majoring in <strong>Rekayasa Perangkat Lunak (Software Engineering)</strong>. Writing my very first lines of code felt like unlocking a quiet superpower: typing structured logic on a black screen and watching it instantly breathe into life on the web.
                    </p>
                    <p>
                        At vocational school, I honed practical craftsmanship across databases, algorithms, and application interfaces. That experience shaped me into a dedicated <strong>Full Stack Web Developer</strong>—equally fascinated by the architecture of backend data pipelines and the subtle visual details of frontend interactions.
                    </p>
                </div>

                <!-- Academic Timeline -->
                <div style="margin-top: 40px;">
                    <h3 style="font-size: 1.5rem; margin-bottom: 25px; color: var(--ink-title);">Educational Timeline</h3>
                    <div class="timeline-editorial">
                        
                        <!-- University -->
                        <div class="timeline-node">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">Present • Undergraduate</div>
                            <h4 class="timeline-title">Universitas Dipa Makassar</h4>
                            <div class="timeline-institution">Software Engineering / Rekayasa Perangkat Lunak (TI)</div>
                            <p style="font-size: 0.95rem; color: var(--ink-muted);">
                                Currently deepening computational theory, web architecture, and advanced software systems as an undergraduate engineering student.
                            </p>
                        </div>

                        <!-- Vocational High School -->
                        <div class="timeline-node">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">Vocational High School</div>
                            <h4 class="timeline-title">SMK Mutiara Ilmu Makassar</h4>
                            <div class="timeline-institution">Major: Rekayasa Perangkat Lunak (Software Engineering)</div>
                            <p style="font-size: 0.95rem; color: var(--ink-muted);">
                                Built core foundations in web development, object-oriented programming, relational databases, and hardware troubleshooting.
                            </p>
                        </div>

                        <!-- Junior High School -->
                        <div class="timeline-node">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">Junior High School</div>
                            <h4 class="timeline-title">SMP Plus Budi Utomo Makassar</h4>
                            <div class="timeline-institution">General Academic & Character Education</div>
                            <p style="font-size: 0.95rem; color: var(--ink-muted);">
                                Formative middle school education, fostering disciplined study habits and early interest in digital technology.
                            </p>
                        </div>

                        <!-- Elementary School -->
                        <div class="timeline-node">
                            <div class="timeline-dot"></div>
                            <div class="timeline-date">Elementary School</div>
                            <h4 class="timeline-title">SD Negeri Pajjaiang</h4>
                            <div class="timeline-institution">Primary Foundation — Makassar</div>
                            <p style="font-size: 0.95rem; color: var(--ink-muted);">
                                The beginning of my learning journey, childhood friendships, and first encounters with technology.
                            </p>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Chapter 3 -->
            <div class="chapter-block" data-aos="fade-up">
                <span class="chapter-number">Chapter III — Music, Gaming, & Code</span>
                <h2 class="chapter-heading">The Creative Balance: Rhythms & Play</h2>
                <div class="chapter-prose">
                    <p>
                        At 21, I believe that great software engineers are not one-dimensional machines. My favorite outlets outside of programming are <strong>Music</strong> and <strong>Gaming</strong>. Music provides the rhythm and flow during long hours of coding, while gaming has always been my favorite medium for storytelling, immersive systems, and complex problem-solving.
                    </p>
                    <p>
                        Whether dissecting a game's UI mechanics or finding the perfect playlist for a coding marathon, these passions keep my creative tank full. In the words of John Green and the Nerdfighteria community: <em>"Don't Forget to Be Awesome" (DFTBA)</em>.
                    </p>
                </div>

                <!-- Quick Facts Card -->
                <div class="facts-sidebar-card">
                    <div style="font-family: var(--font-serif); font-size: 1.25rem; font-weight: 700; margin-bottom: 20px; color: var(--ink-title);">
                        Biographical Quick Facts
                    </div>
                    <ul class="facts-list">
                        <li>
                            <div class="fact-title">Full Name</div>
                            <div class="fact-value">Muh. Aditya Fadillah Badusi</div>
                        </li>
                        <li>
                            <div class="fact-title">Birth Date & Origin</div>
                            <div class="fact-value">Barru, March 2, 2005 (Age 21)</div>
                        </li>
                        <li>
                            <div class="fact-title">Primary Discipline</div>
                            <div class="fact-value">Full Stack Web Developer</div>
                        </li>
                        <li>
                            <div class="fact-title">Academic Major</div>
                            <div class="fact-value">Rekayasa Perangkat Lunak (RPL)</div>
                        </li>
                        <li>
                            <div class="fact-title">Higher Education</div>
                            <div class="fact-value">Universitas Dipa Makassar</div>
                        </li>
                        <li>
                            <div class="fact-title">Vocational Alma Mater</div>
                            <div class="fact-value">SMK Mutiara Ilmu Makassar</div>
                        </li>
                        <li>
                            <div class="fact-title">Favorite Hobbies</div>
                            <div class="fact-value">Music & Gaming</div>
                        </li>
                        <li>
                            <div class="fact-title">Guiding Motto</div>
                            <div class="fact-value">DFTBA (Don't Forget to Be Awesome)</div>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Action Prompt -->
            <div style="text-align: center; margin-top: 50px;" data-aos="fade-up">
                <div class="editorial-divider">
                    <i class="fa-solid fa-asterisk"></i>
                </div>
                <h3 style="font-size: 1.6rem; margin-bottom: 18px;">Looking to Collaborate or Talk Tech?</h3>
                <p style="font-family: var(--font-story); font-size: 1.1rem; color: var(--ink-muted); margin-bottom: 30px;">
                    Whether it's discussing full-stack web architectures, sharing music playlists, or gaming recommendations, my inbox is always open.
                </p>
                <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:proxyninja999@gmail.com" class="btn-editorial-primary">
                        <i class="fa-solid fa-envelope"></i> Send Me an Email
                    </a>
                    <a href="{{ url('/projects') }}" class="btn-editorial-outline">
                        <i class="fa-solid fa-layer-group"></i> Browse Works Catalog
                    </a>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection
