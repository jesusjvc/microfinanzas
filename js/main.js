ScrollReveal().reveal('#intro img.logo, table tr td', { delay: 800 });
ScrollReveal().reveal('#intro img.fecha', { delay: 1000 });
ScrollReveal({ reset: false });
ScrollReveal().reveal('#intro a', { delay: 1000 });


jQuery(function ($) {

    // Smooth scrolling when clicking on a hash link
    $('a[href*="#"]').on('click', function (e) {
        

        var target = this.hash;
        var $target = $(target);
     
            e.preventDefault();
            
            if ($(window).width() > 1023) {
                var $scrollTop = $target.offset().top - 140;
            } else {
                var $scrollTop = $target.offset().top;
            }

            $('html, body').stop().animate({
                'scrollTop': $scrollTop
            }, 900, 'swing');
        
    });






});