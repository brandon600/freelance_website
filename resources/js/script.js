$(document).ready(function() {

    //Welcome Left

    $('.js--wp-1').waypoint(function(direction) {
        $('.js--wp-1').addClass('animated zoomIn opacity-add'); 
    }, {
        offset: '50%'
    });


    $('.js--wp-2').waypoint(function(direction) {
        $('.js--wp-2').addClass('animated flipInY opacity-add'); 
    }, {
        offset: '50%'
    });

    $('.js--wp-3').waypoint(function(direction) {
        $('.js--wp-3').addClass('animated fadeIn'); 
    }, {
        offset: '90%'
    });

    
    //Welcome Icons


    $('.js--wp-4').hover(function() {
        $('.js--wp-5').addClass('animated hvr-icon-pulse-grow-custom');
    }, function() {
        $('.js--wp-5').removeClass('hvr-icon-pulse-grow-custom');
    });


    $('.js--wp-6').hover(function() {
        $('.js--wp-7').addClass('animated hvr-icon-buzz-custom');
    }, function() {
        $('.js--wp-7').removeClass('animated hvr-icon-buzz-custom');
    });

    $('.js--wp-8').hover(function() {
        $('.js--wp-9').addClass('animated hvr-icon-drop-custom');
    }, function() {
        $('.js--wp-9').removeClass('animated hvr-icon-drop-custom');
    });


    $('.js--wp-10').hover(function() {
        $('.js--wp-11').addClass('animated hvr-icon-hang-custom');
    }, function() {
        $('.js--wp-11').removeClass('animated hvr-icon-hang-custom');
    });


    //About Section

    $('.js--wp-12').waypoint(function(direction) {
        $('.js--wp-12').addClass('animated fadeIn'); 
    }, {
        offset: '75%'
    });

    $('.js--wp-13').waypoint(function(direction) {
        $('.js--wp-13').addClass('animated fadeInLeft'); 
    }, {
        offset: '50%'
    });

    $('.js--wp-14').waypoint(function(direction) {
        $('.js--wp-14').addClass('animated fadeInRight');
        $('.skills-bb1-2').css({
            animation: "fillup8 1.5s",
        });
        $('.skills-bb2-2').css({
            animation: "fillup7 1.5s",
        });
        $('.skills-bb3-2').css({
            animation: "fillup6 1.5s",
        });
        $('.skills-bb4-2').css({
            animation: "fillup6 1.5s",
        });
        $('.skills-bb5-2').css({
            animation: "fillup6 1.5s",
        });
        $('.skills-bb6-2').css({
            animation: "fillup4 1.5s",
        });
        $('.skills-bb7-2').css({
            animation: "fillup5 1.5s",
        });
        $('.skills-bb8-2').css({
            animation: "fillup5 1.5s",
        });
        $('.skills-bb9-2').css({
            animation: "fillup7 1.5s",
        });
        $('.skills-bb10-2').css({
            animation: "fillup6 1.5s",
        });
    }, {
        offset: '50%'
    });



    $('.js--wp-skills-1').waypoint(function(direction) {
        $('.js--wp-skills-1').addClass('animated fadeInUp'); 
    }, {
        offset: '70%'
    });

    $('.js--wp-skills-2').waypoint(function(direction) {
        $('.js--wp-skills-2').addClass('animated fadeInUp'); 
    }, {
        offset: '70%'
    });


    $('.js--wp-skills-3').waypoint(function(direction) {
        $('.js--wp-skills-3').addClass('animated fadeInUp'); 
    }, {
        offset: '70%'
    });


    //Portfolio



    $('.js--wp-15').waypoint(function(direction) {
        $('.js--wp-15').addClass('animated fadeIn'); 
    }, {
        offset: '75%'
    });


    $('.js--wp-16').waypoint(function(direction) {
        $('.js--wp-16').addClass('animated bounceInUp'); 
    }, {
        offset: '70%'
    });

    $('.js--wp-17').waypoint(function(direction) {
        $('.js--wp-17').addClass('animated bounceInUp'); 
    }, {
        offset: '70%'
    });

    $('.js--wp-18').waypoint(function(direction) {
        $('.js--wp-18').addClass('animated bounceInUp'); 
    }, {
        offset: '70%'
    });


    $('.js--wp-19').waypoint(function(direction) {
        $('.js--wp-19').addClass('animated fadeIn'); 
    }, {
        offset: '70%'
    });



    $('.js--wp-20').waypoint(function(direction) {
        $('.js--wp-21').addClass('animated fadeIn');
        $('.js--wp-22').addClass('animated fadeIn');
        $('.js--wp-23').addClass('animated fadeIn');
        $('.blog-cell-container').css({
            animation: "fillupBlog .5s",
        });
        $('.bc-img-img').css({
            animation: "fillupBlogImg .5s",
        });
    }, {
        offset: '60%'
    });


    //Portfolio Popup

    

    
     $('.pc-popup').click(function(direction) {
   //     $('#portfolio-popup').removeClass('animated bounceOut');
        $('#portfolio-popup').addClass('animated bounceIn');
    });



    $('#popup-close').click(function(direction) {
        $('#portfolio-popup').addClass('animated bounceOut', function() {
            $('#portfolio-popup').removeClass('popup-yes-display');
            $('#portfolio-popup').removeClass('bounceIn');
        });
    });

    




    $(document).ready(function(){
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {
        
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
        
            // Store hash
            var hash = this.hash;
        
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top-75
            }, 700, function(){
            
                // Add hash (#) to URL when done scrolling (default click behavior)
     //           window.location.hash = hash;
            });
            } // End if
        });
    });



    $('.js--sticky-section').waypoint(function(direction) {
        if (direction =='down') {
            $('.header-section').addClass('sticky-nav');
            $('.header-section').addClass('animated fadeIn');
            $('.scroll-to-top').addClass('top-op');
        } else {
            $('.header-section').removeClass('sticky-nav');
            $('.header-section').removeClass('fadeIn');
            $('.scroll-to-top').removeClass('top-op');
          }
     }, { offset: '250px'
  
    });


    $('.js--nav-icon').click(function() {
        var nav = $('.js--nav-bar');
        var iconDiv = $('.js--nav-icon');
        var icon = $('.js--nav-icon i');
        var header = $('.js--head-sec');
        var logo = $('.js--nav-logo');

        nav.slideToggle(175);


        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
            header.addClass('nav-mobile-height');

        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
            header.removeClass('nav-mobile-height');
        }


    });







    /*

    $('.js--nav-icon').click(function() {
        var nav = $('.js--nav-bar');
        var iconDiv = $('.js--nav-icon');
        var icon = $('.js--nav-icon i');
        var header = $('.js--head-sec');
        var logo = $('.js--nav-logo');

        nav.slideToggle(175);


        if (icon.hasClass('ion-navicon-round')) {
            icon.addClass('ion-close-round');
            icon.removeClass('ion-navicon-round');
            header.addClass('nav-mobile-height');
            logo.addClass('logo-remove');
            iconDiv.addClass('navi-btn-margin-remove');

        } else {
            icon.addClass('ion-navicon-round');
            icon.removeClass('ion-close-round');
            header.removeClass('nav-mobile-height');
            logo.removeClass('logo-remove');
            iconDiv.removeClass('navi-btn-margin-remove');
        }


    })



    $('.js--wp-24').hover(function() {
        $('.js--wp-25').addClass('animated hvr-underline-from-center');
    }, function() {
        $('.js--wp-25').removeClass('hvr-underline-from-center');
    });



    $('.js--wp-4').hover(function() {
        $('.js--wp-5').addClass('animated hvr-icon-pulse-grow-custom');
    }, function() {
        $('.js--wp-5').removeClass('hvr-icon-pulse-grow-custom');
    });

    */




});