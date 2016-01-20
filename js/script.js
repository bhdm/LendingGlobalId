$(document).ready(function(){

    $('.navbar-nav li').click(function(){
        $('.navbar-nav li.active').removeClass('active');
        $(this).addClass('active');
    });

    $('.service-item').click(function(){
        if ($(this).children('.service-description').css('display') == 'none'){
            $('.service-description').fadeOut();
            $(this).children('.service-description').fadeIn();
        }else{
            $(this).children('.service-description').fadeOut();
        }
    });


    $(".fancybox").fancybox();

    $('.owl-carousel-1').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:4
            },
            600:{
                items:6
            },
            1000:{
                items:9
            }
        }
    });

    $('.owl-carousel-2').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsive:{
            0:{
                items:4
            },
            600:{
                items:6
            },
            1000:{
                items:9
            }
        }
    });

    // Анимация
    //var h = $(window).height();
    //
    //$('#page-2 div div').addClass('animated zoomIn');
    //
    $(window).scroll(function(){
        if ($(this).scrollTop() > 60){
            $('#menu').addClass('menuFixed');
            $('#logo2').fadeIn();
        }else{
            $('#menu').removeClass('menuFixed');
            $('#logo2').css('display','none')
        }
    })
    //    if ( ($(this).scrollTop()+h) >= ($('footer').offset().top)) {
    //        $("footer .row>div").css({visibility:"visible"});
    //        $("footer .row>div").eq(0).addClass('animated bounceInLeft');
    //        $("footer .row>div").eq(1).addClass('animated bounceInRight');
    //    }
    //
    //    if ( ($(this).scrollTop()+h) >= $("#page-4").offset().top) {
    //        $("#page-4 .row").eq(0).addClass('animated rotateIn');
    //    }
    //});

    new WOW().init();

});