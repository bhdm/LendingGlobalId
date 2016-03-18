$(document).ready(function(){


    var cWidth = $('.content').eq(1).width();
    var bWidth = $('body').width()-30;

    if (bWidth-cWidth > 0){
        var bb = (bWidth-cWidth)/2;
        //$('#menu').css('left',bb+'px');
        $('#menu').css('margin-left',bb+'px');
    }


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
    });



    new WOW().init();

    $('.dialog').click(function(){
        $('#dialog').modal();
        return false;
    });
    $('.dialog2').click(function(){
        var t = $(this).data('id')
        $('#dialogc_'+t).modal();
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


    function resize(){
        var slideHeight = $('#slide-1').height() - 270;
        $('.header-left>div>img').css('width',(slideHeight/5)+'px');
        $('.header-left>div').css('width',(slideHeight/5)+'px');
        $('.header-left>div').css('height',(slideHeight/5)+'px');
        $('.header-left-text').css('width',(slideHeight/5)+'px');
        $('.header-left-text').css('height',(slideHeight/5)+'px');
        $('.header-left-text>div').css('margin-left',(slideHeight/5)+'px');
        $('.header-left-text').css('line-height',(slideHeight/5)+'px');
        $('.header-left-text').css('font-size',(slideHeight/25)+'px');

        $('.header-right').css('right',(30)+'px');
        $('.header-right>div>img').css('width',(slideHeight/5)+'px');
        $('.header-right>div').css('width',(slideHeight/5)+'px');
        $('.header-right>div').css('height',(slideHeight/5)+'px');
        $('.header-right-text').css('width',(slideHeight/5)+'px');
        $('.header-right-text').css('height',(slideHeight/5)+'px');
        $('.header-right-text>div').css('margin-right',(slideHeight/5)+'px');
        $('.header-right-text').css('line-height',(slideHeight/5)+'px');
        $('.header-right-text').css('font-size',(slideHeight/25)+'px');

        $('.header-left').css('display','block');
        $('.header-right').css('display','block');
    }

    setTimeout(resize,500)
    $( window ).resize(function() {
        resize();
    });


    $('.header-left div').hover(
        function(){
            var height = $('.header-left div').height();
            $(this).children('.header-left-text').css('height',height+'px');
            $(this).children('.header-left-text').css('width',height+'px');
            $(this).children('.header-left-text').css('border-radius',(height/2)+'px '+(height/2)+'px '+(height/2)+'px '+(height/2)+'px');

            $(this).children('.header-left-text').stop().animate({'width': (height*5)+'px'});
        },
        function(){
            var height = $('.header-left div').height();
            $(this).children('.header-left-text').stop().animate({'width': height+'px'});
        }
    );

    $('.header-right div').hover(
        function(){
            var height = $('.header-right div').height();
            $(this).children('.header-right-text').css('height',height+'px');
            $(this).children('.header-right-text').css('width',height+'px');
            $(this).children('.header-right-text').css('border-radius',(height/2)+'px '+(height/2)+'px '+(height/2)+'px '+(height/2)+'px');

            $(this).children('.header-right-text').stop().animate(
                {
                    'width': (height*5)+'px',
                    //'right': (height*5)+'px',
                });
        },
        function(){
            var height = $('.header-right div').height();
            $(this).children('.header-right-text').stop().animate({'width': height+'px'});
        }
    )

});
