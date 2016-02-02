$(document).ready(function(){
    $('.navbar-nav li a').click(function(){
        $('.navbar-nav li.active').removeClass('active');
        $(this).parent().addClass('active');
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
        margin:15,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:8
            }
        }
    });

    $('.owl-carousel-3').owlCarousel({
        loop:false,
        margin:0,
        nav:false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:7
            }
        }
    });

    $('.owl-carousel-2').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:4
            },
            1000:{
                items:8
            }
        }
    });

    // Анимация
    //var h = $(window).height();
    //
    //$('#page-2 div div').addClass('animated zoomIn');
    //

    //setTimeout(function(){
    //    $('#ch-1').addClass('show');
    //    $('#ch-1').removeClass('hide');
    //}, 5000);


    var virtualScrol = 0;

    $(window).scroll(function(){
        //if ($(this).scrollTop() < 750) {
        //    $('body').css('marginTop', $(this).scrollTop());
        //}

        if ($(this).scrollTop() > 60){
            $('#menu').addClass('menuFixed');
            $('#logo2').fadeIn();
        }else{
            $('#menu').removeClass('menuFixed');
            $('#logo2').css('display','none')
        }

        if (
            $(this).scrollTop() > $('#page-2').offset().top && $(this).scrollTop() < $('#page-6').offset().top ||
            $(this).scrollTop() > $('.map').offset().top && $(this).scrollTop() < $('#footer').offset().top
        ){
            //Если на белом
            $('.navbar-nav li').animate({backgroundColor :'rgba(0,0,0,0.7)'},0);
            $('.navbar-nav li.active').animate({backgroundColor :'rgba(0,0,0,0.5)'},0);
            $('.navbar-nav li a').css('color','#FEFEFE')
        }else{
            $('.navbar-nav li').animate({backgroundColor :'rgba(255,255,255,0.7)'},0);
            $('.navbar-nav li.active').animate({backgroundColor :'rgba(255,255,255,0.5)'},0);
            $('.navbar-nav li a').css('color','#222')
        }

        if ($(this).scrollTop() < 250 ){
            $('#ch-2').addClass('fadeOutUp');
            $('#ch-2').removeClass('fadeInUp');
            $('#ch-3').addClass('fadeOutUp');
            $('#ch-3').removeClass('fadeInUp');
            $('#ch-1').addClass('fadeInUp');
            $('#ch-1').removeClass('fadeOutUp');
            $('#ch-1').css('display','block');
            $('#ch-2').css('display','none');
            $('#ch-3').css('display','none');

        }else{
            if($(this).scrollTop() >= 250 && $(this).scrollTop() < 500){
                $('#ch-3').addClass('fadeOutUp');
                $('#ch-3').removeClass('fadeInUp');
                $('#ch-2').addClass('fadeInUp');
                $('#ch-2').removeClass('fadeOutUp');
                $('#ch-1').addClass('fadeOutUp');
                $('#ch-1').removeClass('fadeInUp');
                $('#ch-1').css('display','none');
                $('#ch-2').css('display','block');
                $('#ch-3').css('display','none');

            }else{
                $('#ch-3').addClass('fadeInUp');
                $('#ch-3').removeClass('fadeOutUp');
                $('#ch-2').addClass('fadeOutUp');
                $('#ch-2').removeClass('fadeInUp');
                $('#ch-1').addClass('fadeOutUp');
                $('#ch-1').removeClass('fadeInUp');
                $('#ch-1').css('display','none');
                $('#ch-2').css('display','none');
                $('#ch-3').css('display','block');

            }
        }

        //var item = 1;
        //setInterval(function(){
        //    if (item == 1){
        //        $('#ch-1').addClass('fadeInUp');
        //        $('#ch-1').css('display','block');
        //    }
        //
        //});

        //if ($(this).scrollTop() > 140){
        //    $('#ch-3').removeClass('fadeInUp');
        //}else{
        //    if ($(this).scrollTop() > 100){
        //        $('#ch-2').removeClass('fadeInUp');
        //        $('#ch-2').addClass('fadeOutUp');
        //        $('#ch-2').css('display','none');
        //        $('#ch-3').css('display','block');
        //        $('#ch-3').addClass('fadeInUp');
        //    }else{
        //        if ($(this).scrollTop() > 60){
        //            $('#ch-1').addClass('fadeOutUp');
        //            $('#ch-2').css('display','block');
        //            $('#ch-1').css('display','none');
        //            $('#ch-2').addClass('fadeInUp');
        //        }else{
        //            if ($('#ch-1').css('display') == 'none'){
        //                $('#ch-1').addClass('fadeInUp');
        //                $('#ch-1').css('display','block');
        //                $('#ch-2').addClass('fadeOutUp');
        //                $('#ch-2').css('display','none');
        //            }
        //        }
        //    }
        //}

    });

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

    $('.dialog').click(function(){
        $('#dialog').modal();
        return false;
    });
    $('.dialog2').click(function(){
        $('#dialog2').modal();
        return false;
    });

    $('.flip-container div').flip(
        {
            speed: 500,
            trigger: 'click',
            reverse: true
        }
    );

    $('.owl-carousel-3 .item').hover(
      function(){
        $(this).css('background','#00a5d4');
          src = $(this).children('img').attr('data-src');
          //$(this).children('img').attr('data-src', $(this).children('img').attr('src'));
          //$(this).children('img').attr('src',src);
      },
        function(){
            $(this).css('background','rgba(0,0,0,0.7)');
            src = $(this).children('img').attr('data-src');
            //$(this).children('img').attr('data-src', $(this).children('img').attr('src'));
            //$(this).children('img').attr('src',src);
        }
    );

});