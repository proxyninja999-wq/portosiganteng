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

    // Close menu on outside click
    $(document).on('click', function(e) {
        if (!$(e.target).closest('.site-nav').length) {
            $('#navMenu').removeClass('active');
            $('#mobileToggle').find('i').removeClass('fa-xmark').addClass('fa-bars-staggered');
        }
    });

    // 3. Category Filter for Works Catalog
    $('.filter-btn').on('click', function() {
        $('.filter-btn').removeClass('active').css({
            'background': '#ffffff',
            'color': 'var(--ink-body)',
            'border-color': 'var(--border-hairline)'
        });
        
        $(this).addClass('active').css({
            'background': 'var(--accent-primary)',
            'color': '#ffffff',
            'border-color': 'var(--accent-primary)'
        });

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

});
