@extends('layouts.app')

@section('content')
@php
    $dumps = [
        [
            'img' => asset('images/dumps/dump3.jpg'),
            'cat' => 'partner',
            'badge' => 'With Partner',
            'icon' => 'fa-heart',
            'stamp' => 'FRAME 01 • US',
            'title' => 'Afternoon Under the Canopy',
            'caption' => 'Quiet campus walks under the green trees with my favorite person.',
            'tilt' => 'tilt-left',
        ],
        [
            'img' => asset('images/dumps/dump1.jpg'),
            'cat' => 'friends',
            'badge' => 'Friends & Crew',
            'icon' => 'fa-user-group',
            'stamp' => 'FRAME 02 • CAMPUS',
            'title' => 'Between Lectures & Laughter',
            'caption' => 'Peace signs, snack boxes, and surviving back-to-back classes with the boys.',
            'tilt' => 'tilt-right',
        ],
        [
            'img' => asset('images/dumps/dump4.jpg'),
            'cat' => 'partner',
            'badge' => 'With Partner',
            'icon' => 'fa-heart',
            'stamp' => 'FRAME 03 • KEEPSAKE',
            'title' => 'Photobooth Strips & Headlines',
            'caption' => 'Four little monochrome strips worth keeping forever — stealing the spotlight together.',
            'tilt' => 'tilt-none',
        ],
        [
            'img' => asset('images/dumps/dump2.jpg'),
            'cat' => 'friends',
            'badge' => 'Friends & Crew',
            'icon' => 'fa-umbrella-beach',
            'stamp' => 'FRAME 04 • COAST',
            'title' => 'Salt Air & Good Company',
            'caption' => 'Trading terminal screens for turquoise water, bright skies, and a day by the sea.',
            'tilt' => 'tilt-left',
        ],
        [
            'img' => asset('images/dumps/dump8.jpg'),
            'cat' => 'partner',
            'badge' => 'With Partner',
            'icon' => 'fa-heart',
            'stamp' => 'FRAME 05 • GOLDEN HOUR',
            'title' => 'Sunlit Shade Together',
            'caption' => 'Dappled sunlight through the leaves and the easiest smile of my week.',
            'tilt' => 'tilt-right',
        ],
        [
            'img' => asset('images/dumps/dump7.jpg'),
            'cat' => 'friends',
            'badge' => 'Friends & Crew',
            'icon' => 'fa-users',
            'stamp' => 'FRAME 06 • SQUAD',
            'title' => 'Hallway Mirror Check',
            'caption' => 'Full squad assembled in the campus corridor before heading out.',
            'tilt' => 'tilt-none',
        ],
        [
            'img' => asset('images/dumps/dump6.jpg'),
            'cat' => 'me',
            'badge' => 'Me & Moments',
            'icon' => 'fa-camera-retro',
            'stamp' => 'FRAME 07 • FESTIVE',
            'title' => 'Suited Up for Celebration',
            'caption' => 'Dressed in suit and tie amidst warm family smiles and traditional wedding festivities.',
            'tilt' => 'tilt-left',
        ],
        [
            'img' => asset('images/dumps/dump5.jpg'),
            'cat' => 'friends',
            'badge' => 'Friends & Crew',
            'icon' => 'fa-motorcycle',
            'stamp' => 'FRAME 08 • PITSTOP',
            'title' => 'Sunny Parking Lot Hangout',
            'caption' => 'Stickered helmets, afternoon sun, and unhurried conversations after class.',
            'tilt' => 'tilt-right',
        ],
        [
            'img' => asset('images/profil.jpg'),
            'cat' => 'me',
            'badge' => 'Me & Moments',
            'icon' => 'fa-user',
            'stamp' => 'FRAME 09 • PORTRAIT',
            'title' => 'Notes from 21',
            'caption' => 'Just me — building software, chasing good music, and enjoying the ride.',
            'tilt' => 'tilt-none',
        ],
    ];
@endphp

<section class="section">
    <div class="container">

        <!-- Scrapbook Header -->
        <div class="section-header" data-aos="fade-up">
            <span class="section-eyebrow">Visual Scrapbook • Unfiltered Frames</span>
            <h1 class="section-title">Picture Dumps & Everyday Joys</h1>
            <p class="section-subtitle">
                Life happens between lines of code — candid moments with my partner, chaotic adventures with friends, and little snapshots worth keeping.
            </p>
            <div class="editorial-divider">
                <i class="fa-solid fa-camera-retro"></i>
            </div>
        </div>

        <!-- Category Filter Pills -->
        <div class="dump-filter-bar" data-aos="fade-up">
            <button class="tag-badge dump-filter-btn active" data-dump-filter="all">
                <i class="fa-solid fa-grip"></i> All Frames ({{ count($dumps) }})
            </button>
            <button class="tag-badge dump-filter-btn" data-dump-filter="partner">
                <i class="fa-solid fa-heart"></i> With Partner (3)
            </button>
            <button class="tag-badge dump-filter-btn" data-dump-filter="friends">
                <i class="fa-solid fa-user-group"></i> Friends & Crew (4)
            </button>
            <button class="tag-badge dump-filter-btn" data-dump-filter="me">
                <i class="fa-solid fa-camera"></i> Me & Moments (2)
            </button>
        </div>

        <!-- Polaroid Scrapbook Masonry / Grid -->
        <div class="polaroid-dump-grid" id="dumpGrid">
            @foreach($dumps as $index => $item)
                <article class="polaroid-card {{ $item['tilt'] }} dump-filter-item"
                         data-category="{{ $item['cat'] }}"
                         data-index="{{ $index }}"
                         data-img="{{ $item['img'] }}"
                         data-title="{{ $item['title'] }}"
                         data-caption="{{ $item['caption'] }}"
                         data-badge="{{ $item['badge'] }}"
                         data-stamp="{{ $item['stamp'] }}"
                         data-aos="fade-up"
                         data-aos-delay="{{ ($index % 3) * 80 }}">
                    <div class="polaroid-tape"></div>
                    <div class="polaroid-photo-box">
                        <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}" loading="lazy">
                        <span class="polaroid-cat-pill">
                            <i class="fa-solid {{ $item['icon'] }}"></i> {{ $item['badge'] }}
                        </span>
                        <div class="polaroid-zoom-hint">
                            <i class="fa-solid fa-expand"></i>
                        </div>
                    </div>
                    <div class="polaroid-caption-area">
                        <div class="polaroid-stamp">{{ $item['stamp'] }}</div>
                        <h3 class="polaroid-title">{{ $item['title'] }}</h3>
                        <p class="polaroid-note">{{ $item['caption'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>

        <!-- Warm Closing Note -->
        <div class="facts-sidebar-card editorial-callout-banner" data-aos="fade-up">
            <span class="section-eyebrow" style="margin-bottom: 8px;">Scrapbook Colophon</span>
            <h3 class="callout-banner-title">"The Best Things in Life Aren't Things — They're People."</h3>
            <p class="callout-banner-desc" style="font-style: italic; margin-bottom: 0;">
                Grateful for the people who keep life grounded, loud, warm, and endlessly fun outside the code editor.
            </p>
        </div>

    </div>
</section>

<!-- Fullscreen Polaroid Lightbox Modal -->
<div class="dump-lightbox-overlay" id="dumpLightbox" aria-hidden="true">
    <button class="dump-lightbox-close" id="dumpLightboxClose" aria-label="Close photo">&times;</button>
    <button class="dump-lightbox-nav prev" id="dumpPrevBtn" aria-label="Previous photo">
        <i class="fa-solid fa-chevron-left"></i>
    </button>
    <button class="dump-lightbox-nav next" id="dumpNextBtn" aria-label="Next photo">
        <i class="fa-solid fa-chevron-right"></i>
    </button>

    <div class="dump-lightbox-stage">
        <div class="dump-lightbox-frame">
            <div class="dump-lightbox-img-wrap">
                <img id="dumpLightboxImg" src="" alt="">
            </div>
            <div class="dump-lightbox-meta">
                <div class="dump-lightbox-toprow">
                    <span id="dumpLightboxStamp" class="polaroid-stamp"></span>
                    <span id="dumpLightboxCounter" class="polaroid-counter"></span>
                </div>
                <h3 id="dumpLightboxTitle"></h3>
                <p id="dumpLightboxCaption"></p>
            </div>
        </div>
    </div>
</div>
@endsection
