


(function($) {

    "use strict";

    

     var $WIN = $(window);
    
var AOS = require('../inc/animation/aos.js');
          require('../inc/custom/parallax.js');
 

    // Add the User Agent to the <html>
    // will be used for IE10 detection (Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0))
    var doc = document.documentElement;
    doc.setAttribute('data-useragent', navigator.userAgent);


   


   /* Preloader
    * -------------------------------------------------- */
   var clPreloader = function() {
        
    $("html").addClass('cl-preload');

    $WIN.on('load', function() {

        //force page scroll position to top at page refresh
        $('html, body').animate({ scrollTop: 0 }, 'normal');

        // will first fade out the loading animation 
        $("#loader").fadeOut("slow", function() {
            // will fade out the whole DIV that covers the website.
            $("#preloader").delay(300).fadeOut("slow");
        }); 
        
        // for hero content animations 
        $("html").removeClass('cl-preload');
        $("html").addClass('cl-loaded');
    
    });
};


/* Move header
* -------------------------------------------------- */
var clMoveHeader = function () {

    var hero = $('.page-hero'),
        hdr = $('header'),
        triggerHeight = hero.outerHeight() - 170;


    $WIN.on('scroll', function () {

        var loc = $WIN.scrollTop();

        if (loc > triggerHeight) {
            hdr.addClass('sticky');
        } else {
            hdr.removeClass('sticky');
        }

        if (loc > triggerHeight + 20) {
            hdr.addClass('offset');
        } else {
            hdr.removeClass('offset');
        }

        if (loc > triggerHeight + 150) {
            hdr.addClass('scrolling');
        } else {
            hdr.removeClass('scrolling');
        }

    });

    // $WIN.on('resize', function() {
    //     if ($WIN.width() <= 768) {
    //             hdr.removeClass('sticky offset scrolling');
    //     }
    // });

};


/* Mobile Menu
 * ---------------------------------------------------- */ 
var clMobileMenu = function() {

    var toggleButton = $('.header-menu-toggle'),
        nav = $('.header-nav-wrap');

    toggleButton.on('click', function(event){
        event.preventDefault();

        toggleButton.toggleClass('is-clicked');
        nav.slideToggle();
    });

    if (toggleButton.is(':visible')) nav.addClass('mobile');

    $WIN.on('resize', function() {
        if (toggleButton.is(':visible')) nav.addClass('mobile');
        else nav.removeClass('mobile');
    });

    nav.find('a').on("click", function() {

        if (nav.hasClass('mobile')) {
            toggleButton.toggleClass('is-clicked');
            nav.slideToggle(); 
        }
    });

};



   


   


  


   /* Animate On Scroll
    * ------------------------------------------------------ */
    var clAOS = function() {
        
        AOS.init( {
            offset: 200,
            duration: 600,
            easing: 'ease-in-sine',
            delay: 300,
            once: true,
            disable: 'mobile'
        });

    };




    var dropdown = function() {

		$('.has-dropdown').mouseenter(function(){

			var $this = $(this);
			$this
				.find('.dropdown')
				.css('display', 'block')
				.addClass('animated-fast fadeInUpMenu');

		}).mouseleave(function(){
			var $this = $(this);

			$this
				.find('.dropdown')
				.css('display', 'none')
				.removeClass('animated-fast fadeInUpMenu');
		});

    };
    
    var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');
			
			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
	
    };
    
    // Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});

// Mobile Navigation
$('.mobile-toggle').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.main_h').removeClass('open-nav');
    } else {
        $('.main_h').addClass('open-nav');
    }
});

$('.main_h li a').click(function() {
    if ($('.main_h').hasClass('open-nav')) {
        $('.navigation').removeClass('open-nav');
        $('.main_h').removeClass('open-nav');
    }
});

// Navigation Scroll - ljepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});



   

   /* Initialize
    * ------------------------------------------------------ */
    (function clInit() {

        clPreloader();
        clMoveHeader();
        clMobileMenu();
        clAOS();
        dropdown();
        goToTop();

        $WIN.on('resize', function() {
            clMoveHeader();
        });
    })();
        
})(jQuery);