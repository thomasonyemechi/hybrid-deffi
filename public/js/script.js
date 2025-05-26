var w = 0;
$(function() {
    "use strict";


    // ***** Preloader ***** //
    $(window).on("load", function() {
        setTimeout(function() {
          $('.preloader').addClass('loaded');
          $('#preloader').delay(800).fadeOut();
        }, 2000);
    });


    // ***** Sticky Header ***** //
    $(window).on("scroll", function(){
        if ($(this).scrollTop() > 40) {
            $('.header').addClass('sticky-header');
        } else {
            $('.header').removeClass('sticky-header');
        }
    });


    // ***** Menu Toggle Start ***** //
    $(document).ready(function(){
        $(".menu-toggle").click(function(){
            $(".main-menu, .menu-toggle").toggleClass("active");
            $(".header").toggleClass("dark-color");
            $(".main-menu").slideToggle();
            $(".dropdown-content").slideUp(200);
            $(".opener").removeClass("active");
        });

        $(".opener").on("click", function() {
            if ($(this).hasClass("active")) {
                $(this).removeClass("active");
                $(this)
                    .siblings(".dropdown-content")
                    .slideUp(200);
            } else {
                $(".opener").removeClass("active");
                $(this).addClass("active");
                $(".dropdown-content").slideUp(200);
                $(this)
                    .siblings(".dropdown-content")
                    .slideDown(300);
                }
        });
    });


    // ***** Contact Form SMS Start ***** //
    $('.contactfrm').on('submit',function(e){
        e.preventDefault();
        $('.contactfrmmsg').slideDown('slow');
    });
    

    // ***** Tabing ***** //
    $('.tab-link li a').on('click', function(){
        var target = $(this).attr('data-tab');
        $('.tab-link li a').removeClass('active');
        $(this).addClass('active');
        $("#"+target).fadeIn(1200).siblings(".tab-panel").hide();
        return false;
    });


    // ***** Sign In Form ***** //
    $(document).ready(function() {
        $("#sign-up").on('click', function() {
            $(".form-box-1").fadeOut(500,function() {
                $(".form-box-2").fadeIn(1000);
            })
        })

        $("#sign-in").on('click', function() {
            $(".form-box-2").fadeOut(500,function() {
                $(".form-box-1").fadeIn(1000);
            })
        })
    });


    // ***** Full widht Section Start ***** //
    container_spacer();
        jQuery('.left-container').css('opacity', 1);
        jQuery('.right-container').css('opacity', 1);

        $(window).resize(function(){
            container_spacer();
    });

    function container_spacer(){
        var win = jQuery(window).width();
        var con = jQuery('.container').width();
        var total = (win - con) / 2;

        jQuery('.left-container').css('padding-left', total);
        jQuery('.right-container').css('padding-right', total);
    }


    // ***** FAQ According Start ***** //
    $(function() {
        $('.faq-title').on("click", function(j) {
            var dropDown = $(this).closest('.faq-box').find('.faq-panel');
            $(this).closest('.tab-panel').find('.faq-panel').not(dropDown).slideUp();
        
            if ($(this).hasClass('active')) {
                $(this).removeClass('active');
            } else {
                $(this).closest('.tab-panel').find('.faq-title.active').removeClass('active');
                $(this).addClass('active');
            }
            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });
    });


    // ***** Countdown Timer ***** //
    if ($("#timer").length > 0) {
        var target_date = new Date().getTime() + (3000*3600*48); // set the countdown date
        var days, hours, minutes, seconds; // variables for time units

        var countdown = document.getElementById("timer"); // get tag element

        getCountdown();

        setInterval(function () { getCountdown(); }, 1000);

        function getCountdown(){
            // find the amount of "seconds" between now and target
            var current_date = new Date().getTime();
            var seconds_left = (target_date - current_date) / 1000;

            days = pad( parseInt(seconds_left / 86400) );
            seconds_left = seconds_left % 86400;
                 
            hours = pad( parseInt(seconds_left / 3600) );
            seconds_left = seconds_left % 3600;
                  
            minutes = pad( parseInt(seconds_left / 60) );
            seconds = pad( parseInt( seconds_left % 60 ) );

            // format countdown string + set tag value
            countdown.innerHTML = "<ul><li><span>" + days + "</span><label>Days</label></li><li><span>" + hours + "</span><label>Hours</label></li><li><span>" + minutes + "</span><label>Minutes</label></li><li><span>" + seconds + "</span><label>Seconds</label></li></ul>"; 
        }

        function pad(n) {
            return (n < 10 ? '0' : '') + n;
        }
    }


    // ***** Coins Progress ***** //
    if ($(".coins-progress").length > 0) {
        setTimeout(coins_progress, 3000);
        function coins_progress() {
            $(".coins-progress span").each(function () {
                $(this).animate({
                    width: $(this).attr("data-progress") + "%",
                },1000
                );
                $(this).text($(this).attr("data-progress") + "%");
            });
        };
    }


    // ***** Roadmap Slider ***** //
    if ($(".roadmap-slider").length > 0) {
        $('.roadmap-slider').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            items: 3,
            smartSpeed: 900,
            responsiveClass: true,
            autoplay:false,
            margin: 30,
            responsive: {
                0: {
                    items: 1,
                    loop: true,
                    nav: true,
                    dots: false,
                },
                650: {
                    items: 2,
                    loop: true,
                    dots: false,
                    nav: true,
                },
                1080: {
                    items: 3,
                    dots: false,
                    nav: true,
                },
            }
        });
    }


    // ***** Team & Blog slider ***** //
    if ($(".team-slider,.blog-slider").length > 0) {
        $('.team-slider,.blog-slider').owlCarousel({
            loop: false,
            nav: false,
            dots: false,
            items: 3,
            smartSpeed: 900,
            responsiveClass: true,
            autoplay:false,
            margin: 40,
            touchDrag: false,
            mouseDrag: false,
            responsive: {
                0: {
                    items: 1,
                    loop: true,
                    nav: true,
                    dots:false,
                    touchDrag: true,
                    mouseDrag: true,
                },
                600: {
                    items: 2,
                    loop: true,
                    dots: false,
                    nav: true,
                    touchDrag: true,
                    mouseDrag: true,
                },
                992: {
                    items: 3,
                    dots: false,
                    nav: false,
                },
            }
        });
    }


    // ***** Testimonial Slider ***** //
    if ($(".testimonial-slider").length > 0) {
        $('.testimonial-slider').owlCarousel({
            loop: true,
            nav: true,
            dots: false,
            items: 4,
            smartSpeed: 900,
            responsiveClass: true,
            autoplay:false,
            margin: 40,
            responsive: {
                0: {
                    items: 1,
                    loop: true,
                    nav: true,
                    dots: false,
                },
                768: {
                    items: 2,
                    loop: true,
                    dots: false,
                    nav: true,
                },
                1200: {
                    items: 3,
                    loop: true,
                    dots: false,
                    nav: true,
                },
                1499: {
                    items: 4,
                    dots: false,
                    nav: true,
                },
            }
        });
    }

});