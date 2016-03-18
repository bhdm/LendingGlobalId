<?php
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8" />

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bg.js"></script>
    <script src="js/jquery.inputmask.bundle.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/scroll.js"></script>

    <script src="vendor/fancybox/jquery.fancybox.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/script.js"></script>
    <script src="js/wow.min.js"></script>

    <script src="https://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
    <script src="https://cdn.rawgit.com/nnattawat/flip/v1.0.19/dist/jquery.flip.min.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="vendor/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/common.css" rel="stylesheet">

    <script type="text/javascript">
        // Как только будет загружен API и готов DOM, выполняем инициализацию
        ymaps.ready(init);

        function init () {
            // Создание экземпляра карты и его привязка к контейнеру с
            // заданным id ("map")
            var myMap = new ymaps.Map('map', {
                // При инициализации карты, обязательно нужно указать
                // ее центр и коэффициент масштабирования
                center: [55.184253, 61.381497], // Победы, 198с1
                zoom: 13
            });

            // Создание метки
            var myPlacemark = new ymaps.Placemark(
                [55.184253, 61.381497],{
                    hintContent: 'ООО "Global-ID"'
                }, {
                    iconImageHref: 'images/map-pin.png', // картинка иконки
                    iconImageSize: [55, 51], // размеры картинки
                    iconImageOffset: [-27, -26] // смещение картинки
                }
            );
            // Добавление метки на карту
            myMap.geoObjects.add(myPlacemark);
        }
    </script>

</head>

<body id="top">

<div class="container-fluid content" id="page-1">
    <!--<div class="lr-menu hidden-xs hidden-sm">-->
    <!--<div class="lr-item-left lr-1 wow fadeInLeftBig" data-wow-delay="1s">-->
    <!--<img src="images/icon/icon-1-white.png" class="lr-icon">-->
    <!--<a href="#footer" class="dialog"><div class="lr-title">МОНТАЖ <br />ШЛАГБАУМОВ</div></a>-->
    <!--</div>-->
    <!--<div class="lr-item-left lr-2 wow fadeInLeftBig" data-wow-delay="1.3s">-->
    <!--<img src="images/icon/icon-2-white.png" class="lr-icon">-->
    <!--<a href="#footer" class="dialog"><div class="lr-title">МОНТАЖ <br />ТУРНИКЕТОВ</div></a>-->
    <!--</div>-->
    <!--<div class="lr-item-right lr-1 wow fadeInRightBig" data-wow-delay="1s">-->
    <!--<a href="#footer" class="dialog"><div class="lr-title">МОНТАЖ <br />ВИДЕОНАБЛЮДЕНИЯ</div></a>-->
    <!--<img src="images/icon/icon-3-white.png" class="lr-icon">-->
    <!--</div>-->
    <!--<div class="lr-item-right lr-2 wow fadeInRightBig" data-wow-delay="1.3s">-->
    <!--<a href="#footer" class="dialog"><div class="lr-title" style="line-height: 56px">Монтаж СКУД</div></a>-->
    <!--<img src="images/icon/icon-4-white.png" class="lr-icon" style="padding-top: 18px;">-->
    <!--</div>-->
    <!--</div>-->
    <img src="images/slide-1-5.png" id="slide-1">
    <div class="header-left">
        <div class="dialog2 wow fadeInLeft" data-wow-delay="1s" data-id="2">
            <img src="images/icon/cc-1.png">
            <div class="header-left-text">
                <div style="margin-left: 100px">
                    МОНТАЖ ШЛАГБАУМОВ
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInLeft" data-wow-delay="1s" data-id="1">
            <img src="images/icon/cc-2.png">
            <div class="header-left-text">
                <div style="margin-left: 100px">
                    МОНТАЖ ТУРНИКЕТОВ
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInLeft" data-wow-delay="1s" data-id="4">
            <img src="images/icon/cc-3.png">
            <div class="header-left-text">
                <div style="margin-left: 100px">
                    СИСТЕМЫ ВИДЕОНАБЛЮДЕНИЯ
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInLeft" data-wow-delay="1s" data-id="3">
            <img src="images/icon/cc-4.png">
            <div class="header-left-text">
                <div style="margin-left: 100px">
                    МОНТАЖ СКД
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInLeft" data-wow-delay="1s" data-id="5">
            <img src="images/icon/cc-5.png">
            <div class="header-left-text">
                <div style="margin-left: 100px">
                    МОНТАЖ СИГНАЛИЗЦИЙ
                </div>
            </div>
        </div>
    </div>
    <div class="header-right">
        <div class="dialog2 wow fadeInRight" data-wow-delay="1s" data-id="2">
            <img src="images/icon/cc-1.png">
            <div class="header-right-text">
                <div style="margin-right: 100px">
                    МОНТАЖ ШЛАГБАУМОВ
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInRight" data-wow-delay="1s" data-id="1">
            <img src="images/icon/cc-2.png">
            <div class="header-right-text">
                <div style="margin-right: 100px">
                    МОНТАЖ ТУРНИКЕТОВ
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInRight" data-wow-delay="1s" data-id="4">
            <img src="images/icon/cc-3.png">
            <div class="header-right-text">
                <div style="margin-right: 100px">
                    ВИДЕОНАБЛЮДЕНИЕ
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInRight" data-wow-delay="1s" data-id="3">
            <img src="images/icon/cc-4.png">
            <div class="header-right-text">
                <div style="margin-right: 100px">
                    МОНТАЖ СКД
                </div>
            </div>
        </div>
        <div class="dialog2 wow fadeInRight" data-wow-delay="1s" data-id="5">
            <img src="images/icon/cc-5.png">
            <div class="header-right-text">
                <div style="margin-right: 100px">
                    СИГНАЛИЗЦИИ
                </div>
            </div>
        </div>
    </div>
    <!--<div class="owl-carousel owl-carousel-3 text-center hidden-xs" style="top: 360px;">-->
    <!--&lt;!&ndash;<div class="item dialog2">&ndash;&gt;-->
    <!--&lt;!&ndash;<img src="images/icon/icon-1-white.png" data-src="images/icon/icon-1.png" class="dialog2 icon-1">&ndash;&gt;-->
    <!--&lt;!&ndash;<div>шлагбаумы</div>&ndash;&gt;-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--&lt;!&ndash;<div class="item dialog2">&ndash;&gt;-->
    <!--&lt;!&ndash;<img src="images/icon/icon-2-white.png" data-src="images/icon/icon-2.png" class="dialog2 icon-2" style="width: 50px;">&ndash;&gt;-->
    <!--&lt;!&ndash;<div  style="margin-top: 4px">турникеты</div>&ndash;&gt;-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--<div class="item dialog2">-->
    <!--<img src="images/icon/icon-3-white.png" data-src="images/icon/icon-3.png" class="dialog2 icon-3" style="margin-top: 4px;">-->
    <!--<div  style="margin-top: -4px">видео<br />наблюдение</div>-->
    <!--</div>-->
    <!--<div class="item dialog2">-->
    <!--<img src="images/icon/icon-4-white.png" data-src="images/icon/icon-4.png" class="dialog2 cd icon-4" style="width: 50px;">-->
    <!--<div  style="margin-top: 5px">СКУД</div>-->
    <!--</div>-->
    <!--<div class="item dialog2">-->
    <!--<img src="images/icon/icon-5-white.png" data-src="images/icon/icon-5.png" class="dialog2 cd icon-5" style="width: 50px;">-->
    <!--<div  style="margin-top: 5px">Сигнализации</div>-->
    <!--</div>-->
    <!--<div class="item dialog2">-->
    <!--<img src="images/icon/icon-6-white.png" data-src="images/icon/icon-5.png" class="dialog2 cd icon-6" style="width: 50px;">-->
    <!--<div  style="margin-top: 5px">Комп. Системы</div>-->
    <!--</div>-->
    <!--<div class="item dialog2">-->
    <!--<img src="images/icon/icon-7-white.png" data-src="images/icon/icon-5.png" class="dialog2 cd icon-7" style="width: 50px;">-->
    <!--<div  style="margin-top: 5px">Антикражные <br />системы</div>-->
    <!--</div>-->
    <!--</div>-->
    <div class="page-1-content wow fadeInUp" data-wow-delay="0.5s">

        <div class="first-title hidden-xs">
            <img src="images/gerb2.png" class="main-gerb hidden-sm">
            <div style="float: left; margin-top: -10px;" class="sdfg">
                МОНТАЖНЫЕ УСЛУГИ
            </div>
            <br/>
            <div style="float: left;margin-top: -10px;" class="sdfg2">
                В ЧЕЛЯБИНСКЕ
            </div>
        </div>
        <!--<div class="title animated fadeInUp fadeInUp"  data-wow-duration="1" data-wow-delay="1" id="ch-1">Челябинский монтажник</div>-->
        <!--<div class="title animated fadeInUp fadeInUp "  data-wow-duration="2" data-wow-delay="2" id="ch-2">лучше московского</div>-->
        <!--<div class="title animated fadeInUp fadeInUp"  data-wow-duration="3" data-wow-delay="3" id="ch-3">поддержи местного производителя</div>-->
    </div>
</div>

<div class="absolute-top">
    <div class="container-fluid content" id="header">
        <div class="header row">
            <div class="col-xs-2 col-sm-1">
                <a href="/"><img src="images/logo4.png" id="logo" title="Оборудование для систем безопасности" class="logo" style="width: 200px"></a>
            </div>
            <div class="col-xs-offset-2 col-sm-offset-4 col-xs-8 col-sm-7 header-phone text-right">
                <span class="hidden-xs" style="font-size: 18px">Диспетчер:</span>
                <span style="padding-right: 10px">+7 <span class="blue">(495)</span> 241-95-46</span>
                <a href="#footer" class="dialog"><button class="btn btn-blue">Заказать звонок</button></a>
                <!--<img src="images/gerb.png" class="" alt="Челябинск">-->
            </div>
        </div>
    </div>
    <div style="position: relative">
        <div class="content2" id="menu" style="">
            <nav class="navbar navbar-black-default navbar-black">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Навигация</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="/" id="logo2"><img src="images/logo2.png"></a>-->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="    margin-left: -15px !important;">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#top">Главная</a></li>
                            <li><a href="#page-6">О компании</a></li>
                            <li><a href="#page-2">Услуги</a></li>
                            <li><a href="#page-3">Сертификаты</a></li>
                            <li><a href="#footer">Контакты</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </div>
    </div>
</div>

<div class="container-fluid content" style="padding: 0" id="page-2">
    <div class="row row-service">
        <div class="col-xs-4 col-sm-3 flip-container" >
            <div class="wow slideInLeft" data-wow-delay="0.1s">
                <div class="btn-service btn-service-1 thumbnail">
                    <img src="images/button/btn-1.png">
                    <div class="service-btn-title" style="">Монтаж шлагбаумов</div>
                </div>
                <div class="btn-service btn-service-1 thumbnail absolute-top txt">
                            <span class="hidden-xs hidden-sm">
                            Мы готовы выполнить установку отдельных шлагбаумов на территории конкретного объекта или
                                разработать комплексные решения для обеспечения контролируемого проезда с нужными
                                режимами работы и другими параметрами.

                            </span>
                    <button type="button" class="btn btn-black-big dialog">Заказать</button>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-3   flip-container" >
            <div class="wow slideInLeft" data-wow-delay="0.2s">
                <div class="btn-service btn-service-2 thumbnail">
                    <img src="images/button/btn-2.png">
                    <div class="service-btn-title">Монтаж турникетов</div>
                </div>
                <div class="btn-service btn-service-2 thumbnail absolute-top txt">
                            <span class="hidden-xs hidden-sm">
                                При выборе турникетов наши специалисты учитывают специфику конкретного объекта и интенсивность
                                проходимости людей, места установки этих устройств и
                                обеспечиваемый уровень защиты от несанкционированного проникновения.
                            </span>
                    <button type="button" class="btn btn-black-big dialog">Заказать</button>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-3   flip-container" >
            <div class="wow slideInRight" data-wow-delay="0.3s">
                <div class="btn-service btn-service-3 thumbnail">
                    <img src="images/button/btn-3.png">
                    <div class="service-btn-title">Монтаж СКД</div>
                </div>
                <div class="btn-service btn-service-3 thumbnail absolute-top txt">
                            <span class="hidden-xs hidden-sm">
                                В каждом конкретном случае наши монтажники учитывают целый ряд факторов и подбирают
                                конфигурацию и режимы работы систем, максимально адаптируя их для данного объекта.
                            </span>
                    <button type="button" class="btn btn-black-big dialog">Заказать</button>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-3   flip-container" >
            <div class="wow slideInRight" data-wow-delay="0.4s">
                <div class="btn-service btn-service-4 thumbnail">
                    <img src="images/button/btn-4.png">
                    <div class="service-btn-title">системы видеонаблюдения</div>
                </div>
                <div class="btn-service btn-service-4 thumbnail absolute-top txt">
                            <span class="hidden-xs hidden-sm">
                                Установленные нами системы эксплуатируются уже не первый год и полностью справляются со своими задачами.
                                Благодаря грамотному расположению наши системы видеонаблюдения обеспечивают полный обзор без «слепых зон».
                            </span>
                    <button type="button" class="btn btn-black-big dialog">Заказать</button>
                </div>
            </div>
        </div>
        <!--</div>-->
        <!--<div class="row row-service"><div>-->
        <div class="col-xs-4 col-sm-3   flip-container" >
            <div class="wow slideInUp" data-wow-delay="0.5s">
                <div class="btn-service btn-service-5 thumbnail">
                    <img src="images/button/btn-5.png">
                    <div class="service-btn-title service-btn-title-top">Монтаж сигнализций</div>
                </div>
                <div class="btn-service btn-service-5 thumbnail absolute-top txt">
                            <span class="hidden-xs hidden-sm">
                                Специалисты нашей компании предлагают как локальное размещение устройств обеспечения
                                пожарной безопасности, так и комплексные решения с компоновкой оборудования и всех
                                составных элементов ОПС.
                            </span>
                    <button type="button" class="btn btn-black-big dialog">Заказать</button>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-3   flip-container" >
            <div class="wow slideInUp" data-wow-delay="0.6s">
                <div class="btn-service btn-service-6 thumbnail">
                    <img src="images/button/btn-6.png">
                    <div class="service-btn-title service-btn-title-top" style="">антикражные системы</div>
                </div>
                <div class="btn-service btn-service-6 thumbnail absolute-top txt">
                            <span class="hidden-xs hidden-sm">
                                В наши услуги под ключ входят выезд специалиста на объект, подбор оборудования,
                                монтаж антикражных систем, проверка их работоспособности и настройка.
                            </span>
                    <button type="button" class="btn btn-black-big dialog">Заказать</button>
                </div>
            </div>
        </div>
        <div class="col-xs-4 col-sm-3   flip-container" >
            <div class="wow slideInUp" data-wow-delay="0.7s">
                <div class="btn-service btn-service-7 thumbnail">
                    <img src="images/button/btn-7.png">
                    <div class="service-btn-title service-btn-title-top" style="">компьютерные системы</div>
                </div>
                <div class="btn-service btn-service-7 thumbnail absolute-top txt">
                            <span class="hidden-xs hidden-sm">
                                С каждым годом предъявляются все более высокие требования к компьютерным сетям и их
                                техническим возможностям, что также учитывают наши специалисты. Мы не предлагаем
                                стандартных решений, а разрабатываем индивидуальные проекты для каждого заказчика.
                            </span>
                    <button type="button" class="btn btn-black-big dialog">Заказать</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid content black" id="page-3">
    <div class="sub-title text-uppercase white text-center">СЕРТИФИКАТЫ</div>
    <div class="owl-carousel owl-carousel-1 text-center">
        <div class="item wow flipInX" data-wow-delay="0.7s"><a href="images/certificate/1.png" class="fancybox"><img src="images/certificate/1.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/2.png" class="fancybox"><img src="images/certificate/2.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/3.png" class="fancybox"><img src="images/certificate/3.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/4.png" class="fancybox"><img src="images/certificate/4.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/5.png" class="fancybox"><img src="images/certificate/5.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/6.png" class="fancybox"><img src="images/certificate/6.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/7.png" class="fancybox"><img src="images/certificate/7.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/8.png" class="fancybox"><img src="images/certificate/8.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/9.png" class="fancybox"><img src="images/certificate/9.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/10.png" class="fancybox"><img src="images/certificate/10.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/11.png" class="fancybox"><img src="images/certificate/11.png" class="certificate"></a></div>
        <div class="item wow flipInX" data-wow-delay="0.9s"><a href="images/certificate/12.png" class="fancybox"><img src="images/certificate/12.png" class="certificate"></a></div>
    </div>
</div>
<div class="container-fluid content black" id="page-5">
    <div class="sub-title text-uppercase white text-center">Официальные отзывы</div>
    <div class="owl-carousel owl-carousel-2 text-center">
        <div class="item wow flipInY" data-wow-delay="0.1s"><a href="images/review/1.jpg" class="fancybox"><img src="images/review/1.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.3s"><a href="images/review/2.jpg" class="fancybox"><img src="images/review/2.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.5s"><a href="images/review/3.jpg" class="fancybox"><img src="images/review/3.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.7s"><a href="images/review/4.jpg" class="fancybox"><img src="images/review/4.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.9s"><a href="images/review/5.jpg" class="fancybox"><img src="images/review/5.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.9s"><a href="images/review/6.jpg" class="fancybox"><img src="images/review/6.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.9s"><a href="images/review/7.jpg" class="fancybox"><img src="images/review/7.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.9s"><a href="images/review/8.jpg" class="fancybox"><img src="images/review/8.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.9s"><a href="images/review/9.jpg" class="fancybox"><img src="images/review/9.jpg" class="review"></a></div>
        <div class="item wow flipInY" data-wow-delay="0.9s"><a href="images/review/10.jpg" class="fancybox"><img src="images/review/10.jpg" class="review"></a></div>
    </div>
</div>
<div class="container-fluid content  " id="page-6">
    <div class="row" style="margin-top: 100px">
        <div class="col-xs-offset-2 col-xs-8 wow fadeInUp">
            <div class="title">О компании</div>
            <p style="margin-top: 50px">
                Компания ООО «Глобал-АйДи» <br />
                уже много лет является одним из российских <br />
                лидеров в области проектирования, монтажа <br />
                и обслуживания систем безопасности, а также <br />
                средств связи для корпоративных клиентов.
            </p>
        </div>
    </div>
</div>
<div class="container-fluid content  " id="page-4">
    <div class="row">
        <div class="col-sm-offset-2 col-xs-offset-1 col-sm-8 col-xs-10">
            <div class="sub-title text-uppercase  wow bounceInUp" data-wow-delay="0.1" data-wow-duration="2s">Наши клиенты</div>
            <p class="  wow bounceInUp"  data-wow-delay="0.2" data-wow-duration="2s">
                Наши клиенты - крупные корпоративные заказчики: банки и промышленные предприятия, государственные учреждения и иностранные компании, работающие на
                территории России и стран СНГ, а также предприятия малого и среднего бизнеса. Многих клиентов и проекты компания привлекает по итогам тендеров, что свидетельствует
                о высоком техническом уровне и экономической эффективности предлагаемых нами решений.
            </p>
            <div class="sub-title text-uppercase  wow bounceInUp" data-wow-delay="0.6" data-wow-duration="2s">Наша команда</div>
            <p class="  wow bounceInUp" data-wow-delay="0.7" data-wow-duration="2s">
                В штате компании работают опытные профессионалы. Благодаря этому мы гарантируем: высококвалифицированный технический уровень,экономическую эффективность
                предлагаемых решений,полную надежность в долгосрочных взаимоотношениях с нашими клиентами и партнерами.Мы постоянно смотрим вперед, в будущее: совершенствуя
                сервисы и запуская на рынок передовые услуги.
            </p>
            <div class="sub-title text-uppercase  wow bounceInUp" data-wow-delay="1" data-wow-duration="2s">Наши услуги</div>
            <p class="  wow bounceInUp" data-wow-delay="1.1" data-wow-duration="2s">
                Обширный опыт компании подтверждён множеством успешных комплексных проектов с применением передовых технологий и оборудования ведущих производителей.
                Мы предлагаем полный спектр услуг под ключ, начиная от совместного анализа технических требований к проекту, до сервисного обслуживания
            </p>
            <ul class=" wow bounceInUp"  data-wow-delay="2" data-wow-duration="2s">
                <li>установленных систем и оборудования: проектирование и монтаж оптических сетей; проектирование и монтаж структурированных кабельных систем (СКС);</li>
                <li>проектирование и монтаж систем электропитания и освещения (СЭП);</li>
                <li>проектирование и монтаж систем видеонаблюдения (CCTV);</li>
                <li>проектирование и монтаж систем безопасности и контроля доступа (СКУД);</li>
                <li>поставка и монтаж металлодетекторов, шлагбаумов и турникетов;</li>
                <li>поставка оборудования для предлагаемых решений СКС, СЭП, СКУД и видеонаблюдения;</li>
                <li>строительный ремонт и подготовка помещений;</li>
                <li>монтаж оборудования на объектах заказчика;</li>
                <li>уборка помещений после ремонта и монтажных работ;</li>
                <li>строительный ремонт и подготовка помещений;</li>
                <li>монтаж оборудования на объектах заказчика;</li>
                <li>уборка помещений после ремонта и монтажных работ;</li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid content map">
    <div id="map" style="height:400px"></div>
</div>
<footer class="container-fluid content" aria-label="footer" id="footer">
    <div class="title text-center">КОНТАКТЫ</div>
    <div class="row">
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-5 left-footer wow bounceInLeft" id="bottomline">
            <div class="media">
                <div class="media-left">
                    <img src="images/manager2.png" title="Менеджер" alt="Менеджер">
                </div>
                <div class="media-body">
                    <br />
                    <div class="manager black">
                        Менеджер: Каратаев Рамис <br />
                        <span class="footer-phone">+7 <span class="blue">495</span> 229 45 15 </span>
                        доб.
                        <span>33</span>
                        <br />
                        r.karataev@global-id.ru
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-5 wow bounceInRight">
            <form class="form" method="post" action="mail.php">
                <div class="form-group">
                    <label class="col-xs-3">Имя</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-3">Телефон</label>
                    <div class="col-xs-9">
                        <input type="text" class="form-control" name="phone">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <textarea placeholder="Задайте вопрос" class="form-control" name="text"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-right">
                        <button class="btn btn-blue" type="submit">Заказать</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</footer>
<div class="modal fade" tabindex="-1" role="dialog" id="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">ЗАКАЗАТЬ ЗВОНОК</h4>
            </div>
            <form method="POST" action="mail.php">
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-xs-3">Ваше имя:</label>
                        <div class="col-xs-9">
                            <input type="text" class="form-control" placeholder="Введите имя" name="name">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-xs-3">Ваш телефон:</label>
                        <div  class="col-xs-9">
                            <input type="text" class="form-control" placeholder="Введите телефон" name="phone">
                        </div>
                    </div>
                    <div class="form-group row text-right">
                        <div  class="col-xs-12">
                            <button type="submit" class="btn btn-blue">Отправить</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- ТУРНИКЕТЫ -->
<div class="modal fade" tabindex="-1" role="dialog" id="dialogc_1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">КОНТАКТЫ МЕНЕДЖЕРА</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <img src="images/manager.png" title="Менеджер" alt="Менеджер" style="width: 100px">
                    </div>
                    <div class="col-xs-5" style="line-height: 30px; color: #FEFEFE">
                        <span style="font-weight: bold; color: #DDD">АЛЕКСАНДР</span> <br />
                        <span style="font-weight: bold; color: #DDD">Телефон:</span> +7 (919) 121-25-17 <br />
                        <span style="font-weight: bold; color: #DDD">E-mail:</span> imikt@global-id.ru<br />
                    </div>
                </div>
                <hr style="border-top-color: #555"/>
            </div>
        </div>
    </div>
</div>
<!-- ШЛАГБАУМЫ -->
<div class="modal fade" tabindex="-1" role="dialog" id="dialogc_2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">КОНТАКТЫ МЕНЕДЖЕРА</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <img src="images/manager.png" title="Менеджер" alt="Менеджер" style="width: 100px">
                    </div>
                    <div class="col-xs-5" style="line-height: 30px; color: #FEFEFE">
                        <span style="font-weight: bold; color: #DDD">ОЛЕГ ВИТАЛЬЕВИЧ</span> <br />
                        <span style="font-weight: bold; color: #DDD">Телефон:</span> +7 (922) 698-55-44<br />
                        <span style="font-weight: bold; color: #DDD">E-mail:</span> esm74@global-id.ru<br />
                    </div>
                </div>
                <hr style="border-top-color: #555"/>
            </div>
        </div>
    </div>
</div>
<!-- СКУД, сигнализация -->
<div class="modal fade" tabindex="-1" role="dialog" id="dialogc_3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">КОНТАКТЫ МЕНЕДЖЕРА</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <img src="images/manager4.png" title="Менеджер" alt="Менеджер" style="width: 100px">
                    </div>
                    <div class="col-xs-5" style="line-height: 30px; color: #FEFEFE">
                        <span style="font-weight: bold; color: #DDD">СУСЛОВ АЛЕКСЕЙ</span> <br />
                        <span style="font-weight: bold; color: #DDD">Телефон:</span> +7 (905) 831-43-73<br />
                        <span style="font-weight: bold; color: #DDD">E-mail:</span> avsprofi@global-id.ru<br />
                    </div>
                </div>
                <hr style="border-top-color: #555"/>
            </div>
        </div>
    </div>
</div>
<!-- ВИДЕОНАБЛЮДЕНИЕ, КОМПЬЮТЕРНЫЕ СЕТИ -->
<div class="modal fade" tabindex="-1" role="dialog" id="dialogc_4">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">КОНТАКТЫ МЕНЕДЖЕРА</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <img src="images/manager3.png" title="Менеджер" alt="Менеджер" style="width: 100px">
                    </div>
                    <div class="col-xs-5" style="line-height: 30px; color: #FEFEFE">
                        <span style="font-weight: bold; color: #DDD" class="text-uppercase">Амирова Надежда Рафаэлевна</span> <br />
                        <span style="font-weight: bold; color: #DDD">Телефон:</span> +7 (351) 2337-137 <br />
                        <span style="font-weight: bold; color: #DDD">E-mail:</span> elsys74@global-id.ru<br />
                    </div>
                </div>
                <hr style="border-top-color: #555"/>
            </div>
        </div>
    </div>
</div>
<!-- ДОМОФОНЫ, СИГНАЛИЗАЦИЯ  -->
<div class="modal fade" tabindex="-1" role="dialog" id="dialogc_5">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">КОНТАКТЫ МЕНЕДЖЕРА</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <img src="images/manager.png" title="Менеджер" alt="Менеджер" style="width: 100px">
                    </div>
                    <div class="col-xs-5" style="line-height: 30px; color: #FEFEFE">
                        <span style="font-weight: bold; color: #DDD" class="text-uppercase">Коновалова Наталья Юрьевна</span> <br />
                        <span style="font-weight: bold; color: #DDD">Телефон:</span> +7 (351)723-00-62 <br />
                        <span style="font-weight: bold; color: #DDD">E-mail:</span> natka_plus@global-id.ru <br />
                    </div>
                </div>
                <hr style="border-top-color: #555"/>
            </div>
        </div>
    </div>
</div>

<!-- остальное -->
<div class="modal fade" tabindex="-1" role="dialog" id="dialog2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">КОНТАКТЫ МЕНЕДЖЕРОВ</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                        <img src="images/manager2.png" title="Менеджер" alt="Менеджер" style="width: 100px">
                    </div>
                    <div class="col-xs-5" style="line-height: 30px; color: #FEFEFE">
                        <span style="font-weight: bold; color: #DDD">КАРАТАЕВ РАМИС</span> <br />
                        <span style="font-weight: bold; color: #DDD">Телефон:</span> +7 (495) 229-45-15 <br />
                        <span style="font-weight: bold; color: #DDD">E-mail:</span>   r.karataev@global-id.ru<br />
                    </div>
                </div>
                <hr style="border-top-color: #555"/>
            </div>
        </div>
    </div>
</div>

<?php
if ($_SESSION['send'] == 1) {
    $_SESSION['send'] = 0;
    ?>
    <div class="modal show" tabindex="-1" role="dialog" id="dialog2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Сообщение отправлено</h4>
                </div>
                <div class="modal-body">
                    <div class="row text-center">
                        Спасибо что обратились к нам. С Вами скоро свяжутся.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter35988490 = new Ya.Metrika({
                    id:35988490,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/35988490" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>