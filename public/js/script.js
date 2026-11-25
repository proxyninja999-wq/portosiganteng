/* ==========================================================================
   PORTFOLIO ADITYA FADILLAH BADUSI - LITERARY EDITORIAL SCRIPTS
   ========================================================================== */

$(document).ready(function() {
    
    // 1. Initialize AOS (Animate On Scroll)
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true,
            offset: 40
        });
    }

    // 2. Mobile Navigation Toggle
    $('#mobileToggle').on('click', function(e) {
        e.stopPropagation();
        $('#navMenu').toggleClass('active');
        const icon = $(this).find('i');
        if ($('#navMenu').hasClass('active')) {
            icon.removeClass('fa-bars-staggered').addClass('fa-xmark');
        } else {
            icon.removeClass('fa-xmark').addClass('fa-bars-staggered');
        }
    });

    // Close menu on outside click or link click
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.site-nav').length) {
            $('#navMenu').removeClass('active');
            $('#mobileToggle').find('i').removeClass('fa-xmark').addClass('fa-bars-staggered');
        }
    });

    $('#navMenu a').on('click', function() {
        $('#navMenu').removeClass('active');
        $('#mobileToggle').find('i').removeClass('fa-xmark').addClass('fa-bars-staggered');
    });

    // 3. Category Filter for Works Catalog
    $('.filter-btn').on('click', function() {
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');

        const filter = $(this).data('filter');
        if (filter === 'all') {
            $('.project-filter-item').fadeIn(300);
        } else {
            $('.project-filter-item').hide();
            $('.project-filter-item[data-category="' + filter + '"]').fadeIn(300);
        }
    });

    // 4. Interactive Case Study Modal for Projects
    $('.btn-view-project').on('click', function() {
        const title = $(this).data('title');
        const cat = $(this).data('cat');
        const img = $(this).data('img');
        const desc = $(this).data('desc');
        const tech = $(this).data('tech');

        $('#modalTitle').text(title);
        $('#modalCat').text(cat);
        $('#modalImg').attr('src', img);
        $('#modalDesc').text(desc);
        $('#modalTech').text(tech);

        $('#projectModal').addClass('active');
        $('body').css('overflow', 'hidden');
    });

    $('#modalCloseBtn, #projectModal').on('click', function(e) {
        if (e.target === this || e.target.id === 'modalCloseBtn') {
            $('#projectModal').removeClass('active');
            $('body').css('overflow', 'auto');
        }
    });

    // 5. Picture Dumps Filter & Polaroid Lightbox
    $('.dump-filter-btn').on('click', function() {
        $('.dump-filter-btn').removeClass('active');
        $(this).addClass('active');

        const filter = $(this).data('dump-filter');
        if (filter === 'all') {
            $('.dump-filter-item').fadeIn(260);
        } else {
            $('.dump-filter-item').hide();
            $('.dump-filter-item[data-category="' + filter + '"]').fadeIn(260);
        }
    });

    let visibleDumpCards = [];
    let currentDumpIdx = 0;

    function openDumpAt(idx) {
        if (!visibleDumpCards.length) return;
        currentDumpIdx = (idx + visibleDumpCards.length) % visibleDumpCards.length;
        const $card = $(visibleDumpCards[currentDumpIdx]);

        $('#dumpLightboxImg').attr('src', $card.data('img')).attr('alt', $card.data('title'));
        $('#dumpLightboxTitle').text($card.data('title'));
        $('#dumpLightboxCaption').text($card.data('caption'));
        $('#dumpLightboxStamp').text($card.data('stamp') + ' • ' + $card.data('badge'));
        $('#dumpLightboxCounter').text((currentDumpIdx + 1) + ' / ' + visibleDumpCards.length);

        $('#dumpLightbox').addClass('active').attr('aria-hidden', 'false');
        $('body').css('overflow', 'hidden');
    }

    $('.dump-filter-item').on('click', function() {
        visibleDumpCards = $('.dump-filter-item:visible').toArray();
        const clickedIndex = visibleDumpCards.indexOf(this);
        openDumpAt(clickedIndex >= 0 ? clickedIndex : 0);
    });

    $('#dumpPrevBtn').on('click', function(e) {
        e.stopPropagation();
        openDumpAt(currentDumpIdx - 1);
    });

    $('#dumpNextBtn').on('click', function(e) {
        e.stopPropagation();
        openDumpAt(currentDumpIdx + 1);
    });

    $('#dumpLightboxClose, #dumpLightbox').on('click', function(e) {
        if (e.target === this || e.target.id === 'dumpLightboxClose' || $(e.target).hasClass('dump-lightbox-stage')) {
            $('#dumpLightbox').removeClass('active').attr('aria-hidden', 'true');
            $('body').css('overflow', 'auto');
        }
    });

    $(document).on('keydown', function(e) {
        if (!$('#dumpLightbox').hasClass('active')) return;
        if (e.key === 'Escape') {
            $('#dumpLightbox').removeClass('active').attr('aria-hidden', 'true');
            $('body').css('overflow', 'auto');
        } else if (e.key === 'ArrowLeft') {
            openDumpAt(currentDumpIdx - 1);
        } else if (e.key === 'ArrowRight') {
            openDumpAt(currentDumpIdx + 1);
        }
    });

    // Touch swipe support for Lightbox on mobile
    let touchStartX = 0;
    let touchStartY = 0;
    $('#dumpLightbox').on('touchstart', function(e) {
        const touch = e.originalEvent.changedTouches[0];
        touchStartX = touch.screenX;
        touchStartY = touch.screenY;
    });

    $('#dumpLightbox').on('touchend', function(e) {
        if (!$('#dumpLightbox').hasClass('active')) return;
        const touch = e.originalEvent.changedTouches[0];
        const dx = touch.screenX - touchStartX;
        const dy = touch.screenY - touchStartY;
        if (Math.abs(dx) > 45 && Math.abs(dx) > Math.abs(dy)) {
            if (dx < 0) {
                openDumpAt(currentDumpIdx + 1);
            } else {
                openDumpAt(currentDumpIdx - 1);
            }
        }
    });

});
