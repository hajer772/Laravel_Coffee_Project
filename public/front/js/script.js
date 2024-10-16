$(window).on("load", function () {

    "use strict";

    /* ===================================
            Loading Timeout
     ====================================== */
    $('.side-menu').removeClass('hidden');

    setTimeout(function () {
        $('.loader-bg').fadeToggle();

    }, 1500);

});

jQuery(function ($) {

    "use strict";
    /* ===================================
          Header appear
    ====================================== */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 260) { // Set position from top to add class
            $('.inner-header').addClass('header-appear');
        } else {
            $('.inner-header').removeClass('header-appear');
        }
    });

    /* ===================================
        Nav Scroll
   ====================================== */
    $(".scroll").on("click", function (event) {
        event.preventDefault();
        $('html,body').animate({
            scrollTop: $(this.hash).offset().top - 40
        }, 800);
    });

    /* ===================================
        WOW Animation
    ====================================== */
    if ($(window).width() > 991) {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        new WOW().init();
    }

    /* =====================================
        Parallax
    ====================================== */
    if ($(window).width() > 992) {
        $(".parallax").parallaxie({
            speed: 0.55,
            offset: 0,
        });
    }

    /* ===================================
         Counter
    ====================================== */
    $('.count').each(function () {
        $(this).appear(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });

    /* ===================================
       Side Menu
   ====================================== */
    if ($("#sidemenu_toggle").length) {
        $("#sidemenu_toggle").on("click", function () {
            $(".side-menu").removeClass("side-menu-opacity");
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active");
            setTimeout(function () {
                $(".side-menu").addClass("side-menu-opacity");
            }, 500);
        }), $(".side-nav .navbar-nav .nav-link").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active");
            setTimeout(function () {
                $(".side-menu").addClass("side-menu-opacity");
            }, 500);
        }), $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active");
            setTimeout(function () {
                $(".side-menu").addClass("side-menu-opacity");
            }, 500);
        });
    }

    var swiper = new Swiper('.swiper-container', {
        effect: 'coverflow',
        speed: 1500,
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 500,
            modifier: 1,
            slideShadows: false,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
        },
    });

    /*=====================================
        Reviews Carousel
    ======================================*/
    $('.testimonial-box').owlCarousel({
        loop: true,
        margin: 20,
        slideSpeed: 2000,
        slideTransition: 'linear',
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            },
        }
    });

});

/*=====================================
    Filtering by search
======================================*/
function search() {
    let filter = document.getElementById('find').value.toUpperCase();
    let item = document.querySelectorAll('.product');
    let l = document.getElementsByTagName('h3');
    for (var i = 0; i <= l.length; i++) {
        let a = item[i].getElementsByTagName('h3')[0];
        let value = a.innerHTML || a.innerText || a.textContent;
        if (value.toUpperCase().indexOf(filter) > -1) {
            item[i].style.display = "";
        } else {
            item[i].style.display = "none";
        }
    }
}

/*============================================
    For Confirmation message after send order
==============================================*/
document.querySelector('.message .close').addEventListener('click', function () {
    this.parentNode.style.display = 'none';
});

setTimeout(function () {
    $('#flash-message').fadeIn('slow').delay(3000).fadeOut('slow');
}, 2000); // Adjust the delay as needed
