<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Пошив | Одежд</title>
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

    <!-- ЗДЕСЬ CSS  -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/progressbar_barfiller.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/gijgo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/animated-headline.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <title>Пошив | Одежд</title>
</head>
<body>
<!-- Старт загаловок -->
<div class="header-area header_area">
    <div class="main-header">
        <div class="header-bottom header-sticky">
            <!-- Логотип -->
            <div class="logo">
                <a href="index.html"><h2><b style="color: #BE9278;font-size: 2.5em">ПошивОдежд</b></h2></a>
            </div>
            <div class="header-left  d-flex f-right align-items-center">
                <!-- Лево Btn -->
                <div class="header-right-btn f-right d-none d-lg-block  ml-30">
                    <a href="#" class="header-btn">Виды Одежды</a>
                </div>
            </div>

            <!-- Мобильный Меню -->
            <div class="col-12">
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{route('gender')}}">Назад</a>
                </div>
                <div class="mobile_menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
<!-- Конец Заголовак -->
<!-- Начало Card -->
<div class="clients-area section-padding40">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">

                <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".2s">
                    <div class="offers-img">
                        <img src="{{asset('assets/img/gallery/offers1.png')}}" alt="">
                    </div>
                    <div class="offers-cap">
                        <span>1</span>
                        <h3><a href="{{route('measurement.create')}}">Пиджак и брюк</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">

                <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".4s">
                    <div class="offers-img">
                        <img src="{{asset('assets/img/gallery/offers1.png')}}" alt="">
                    </div>
                    <div class="offers-cap">
                        <span>2</span>
                        <h3><a href="{{route('measurement.create')}}">Спортивная форма</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".4s">
                    <div class="offers-img">
                        <img src="{{asset('assets/img/gallery/offers1.png')}}" alt="">
                    </div>
                    <div class="offers-cap">
                        <span>3</span>
                        <h3><a href="{{route('measurement.create')}}">Другие</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Конец Card -->
</body>
</html>
