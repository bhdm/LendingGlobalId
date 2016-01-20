$(document).ready(function(){

    $('.navbar-nav li').click(function(){
        $('.navbar-nav li.active').removeClass('active');
        $(this).addClass('active');
    });

    $(".fancybox").fancybox();

    $('.owl-carousel').owlCarousel({
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