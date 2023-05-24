@extends('layout.app')
@section('content')
    <main>
{{--        @dd('salom')--}}
        <!--? slider Area Start-->
        <div class="slider-area  position-relative ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider position-relative hero-overly slider-height  d-flex align-items-center"
                     data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-caption">
                                    <img class="rotateme" src="{{asset('assets/img/hero/hero-icon.png')}}" alt=""
                                         data-animation="zoomIn" data-delay="1s">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Мы делаем одежду,
                                        которая подходит вам</h1>
                                    <!-- Hero Btn -->
                                    <a href="{{route('services')}}" class="btn" data-animation="fadeInLeft" data-delay=".8s">Наши Сервисы</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left img -->
                    <div class="hero-img">
                        <img src="{{asset('assets/img/hero/h1_hero1.png')}}" alt="" data-animation="fadeInRight"
                             data-transition-duration="5s">
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider position-relative hero-overly slider-height  d-flex align-items-center"
                     data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="hero-caption">
                                    <img class="rotateme" src="{{asset('assets/img/hero/hero-icon.png')}}" alt=""
                                         data-animation="zoomIn" data-delay="1s">
                                    <h1 data-animation="fadeInLeft" data-delay=".4s">Мы делаем одежду,которая подходит вам</h1>
                                    <!-- Hero Btn -->
                                    <a href="#" class="btn" data-animation="fadeInLeft" data-delay=".8s">НАШИ СЕРВИСЫ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left img -->
                    <div class="hero-img">
                        <img src="{{asset('assets/img/hero/h1_hero1.png')}}" alt="" data-animation="fadeInRight"
                             data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Clients Offers Start -->
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
                                <h3><a href="services.html">Портной Свинг</a></h3>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".4s">
                            <div class="offers-img">
                                <img src="{{asset('assets/img/gallery/offers2.png')}}" alt="">
                            </div>
                            <div class="offers-cap">
                                <span>2</span>
                                <h3><a href="{{route('gender')}}">Измерение</a></h3>
                                <p>Очень важно, чтоб клиент обращал внимание</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-offers mb-50 wow fadeInUp" data-wow-delay=".6s">
                            <div class="offers-img">
                                <img src="{{asset('assets/img/gallery/offers3.png')}}" alt="">
                            </div>
                            <div class="offers-cap">
                                <span>3</span>
                                <h3><a href="{{route('ready')}}">Готовый</a></h3>
                                <p>Готовый Одежды</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Clients Offers End -->
        <!--? Visit Our Tailor Start -->
        <section class="visit-tailor-area fix">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <h2>О нашем<br>ателье</h2>
                <p class="pera-top">Здесь вы можете ознакомливатса про нас.</p>
                <p class="pera-bottom">Мы будем рад для вас.</p>
                <a href="{{route('about')}}" class="btn">БОЛЬШЕ О НАС</a>
            </div>
        </section>
        <!-- Visit Our Tailor End -->

        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center" data-background="">
            <div class="container">
                <div class="video-wrap position-relative">
                    <!-- Video icon -->
                    <div class="video-icon">
                        <a class="popup-video btn-icon" href=""><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->
        <!--? Testimonial Area Start -->
        <section class="testimonial-area testimonial-padding fix">
            <div class="container">
                <div class="row align-items-center justify-content-center">

                </div>
            </div>
        </section>
        <!--? Testimonial Area End -->
        <!--? instagram-social start -->
        <section class="instagram-area fix pb-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-10">
                        <div class="section-tittle text-center mb-80">
                            <h2>Следите за нами в Instagram</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="single-instagram mb-30">
                            <img src="{{asset('assets/img/gallery/instra1.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="single-instagram">
                            <img src="{{asset('assets/img/gallery/instra2.png')}}" alt="">
                            <a href="#"><i class="ti-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- instagram-social End -->
    </main>

    <footer>
        <div class="footer-wrapper section-bg2 pl-100" data-background="assets/img/gallery/footer-bg.png">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-35">
                                        <a href="index.html"><img src="{{asset('assets/img/logo/logo3_footer.png')}}" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Связаться с нами.</p>
                                        </div>
                                        <ul class="mb-40">
                                            <li class="number"><a href="#">(94) 081 00-48</a></li>
                                            <li class="number2"><a href="#"></a></li>
                                        </ul>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Наши решение</h4>
                                    <ul>
                                        <li><a href="{{route('index')}}">Дом</a></li>
                                        <li><a href="{{route('about')}}">О</a></li>
                                        <li><a href="{{route('services')}}">Услуги</a></li>
                                        <li><a href="{{route('contact')}}">Контакт</a></li>
                                        <li><a href="{{route('gender')}}">Заказы</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- нижняя область нижнего колонтитула -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-right">
                                    <p>
                                        <!-- Связ на Colorib не может быть удалена. Шаблон лицензируется под CC BY 3.0. -->
                                         &copy;<script>document.write(new Date().getFullYear());</script>
                                        <i class="fa fa-heart" aria-hidden="true"></i> by
                                        <a href="https://colorlib.com" target="_blank"></a>
                                        <!--Связ на Colorib не может быть удалена. Шаблон лицензируется под CC BY 3.0.-->
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Конец нижнего колонтитула-->
            <!-- Карта -->
            <div class="map-area">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d23884.396504720404!2d60.63706009895018!3d41.557349153835474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2s!4v1683531923842!5m2!1sru!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </footer>

@endsection
