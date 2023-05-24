@extends('layout.app')
@section('content')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider position-relative hero-overly slider-height2  d-flex align-items-center" data-background="assets/img/hero/h1_hero.png">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="hero-caption hero-caption2">
                                    <img src="{{asset('assets}/img/hero/hero-icon.png')}}" alt="" data-animation="zoomIn" data-delay="1s">
                                    <h2 data-animation="fadeInLeft" data-delay=".4s">О Нас</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left img -->
                    <div class="hero-img hero-img2">
                        <img src="{{asset('assets/img/hero/h2_hero2.png')}}" alt=""  data-animation="fadeInRight" data-transition-duration="5s">
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? Visit Our Tailor Start -->
        <section class="visit-tailor-area fix mt-margin">
            <!--Right Contents  -->
            <div class="tailor-offers"></div>
            <!-- left Contents -->
            <div class="tailor-details">
                <h2>О Нас<br>дом портного</h2>
                <p class="pera-top">.................</p>
                <p class="pera-bottom">...........</p>
                <a href="#" class="btn">БОЛЕЕ О НАС</a>
            </div>
        </section>
        <!-- Visit Our Tailor End -->
        <!--? Services Area Start -->
        <section class="categories-area section-padding40">
            <div class="container">
                <!-- section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-6 col-md-7 col-sm-9">
                        <div class="section-tittle text-center mb-60">
                            <h2>Почему использовать нашу услугу?</h2>
                            <p>....</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($readies as $ready)
                        <div class="col-lg-8 col-md-6 portfolio-item second wow fadeInUp mt-4"  data-wow-delay="0.5s" >
                            <div class="flex-container flex">
                                <div class="rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden" style="display: flex">
                                        <img class="img-fluid w-100" src="public/Image/{{$ready->image}}" width="300px" alt="">
                                    </div>
                                    <div class="bg-light p-4">
                                        <p class="text-primary fw-medium text-center mb-2">{{$ready->name}}</p>
                                        <h5 class="lh-base mb-0">{{$ready->text}}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--? Services Area End -->
        <!--? video_start -->
        <div class="video-area section-bg2 d-flex align-items-center"  data-background="">
            <div class="container">
                <div class="video-wrap position-relative">
                    <!-- Video icon -->
                    <div class="video-icon" >
                        <a class="popup-video btn-icon" href=""><i class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- video_end -->
        <!--? Testimonial Area Start -->
        <section class="testimonial-area testimonial-padding fix">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class=" col-lg-9">
                        <div class="about-caption pb-bottom">
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active dot-style">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="{{asset('assets}/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">
                                        <p></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="{{asset('assets}/img/icon/testimonial.png')}}" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial position-relative">
                                    <div class="testimonial-caption">
                                        <img src="{{asset('assets}/img/icon/quotes-sign.png')}}" alt="" class="quotes-sign">
                                        <p></p>
                                    </div>
                                    <!-- founder -->
                                    <div class="testimonial-founder d-flex align-items-center">
                                        <div class="founder-img">
                                            <img src="{{asset('assets}/img/icon/testimonial.png')}}" alt="">
                                        </div>
                                        <div class="founder-text">
                                            <span></span>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
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
                            <img src="" alt="">
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
