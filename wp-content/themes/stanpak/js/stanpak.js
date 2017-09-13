(function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 48)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  $(document).ready(function(){
    $('.carousel-inner').slick({
      dots: true,
      infinite: true,
      speed: 500,
      fade: true,
      pauseOnHover: false,
      arrows: false,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 2000,
      responsive:[
        {
          breakpoint: 480,
          settings: {
            dots: false
          }
        },
      ]
    });
    $('.img-project-thumb').slick({
      centerMode: true,
      centerPadding: '60px',
      slidesToShow: 3,
      arrows : true,
      nextArrow : '<div class="slick-next slick-arrow"></div>',
      prevArrow : '<div class="slick-prev slick-arrow"></div>',
      responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 3
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
      ],
      autoplay: true,
      autoplaySpeed: 2000,
    });

    $('.navbar-toggle-desktop').click(function(){
      $(this).toggleClass('open');
      $('#navbarResponsive').toggleClass('open');
    });
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 54
  });

  // Collapse the navbar when page is scrolled
  $(window).scroll(function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  });
  /* WOW Elements */
  if (typeof WOW == 'function') {
    new WOW().init();
  }

  /* Parallax Effects */
  if (!!$.prototype.enllax) {
    $(window).enllax();
  }

})(jQuery); // End of use strict
