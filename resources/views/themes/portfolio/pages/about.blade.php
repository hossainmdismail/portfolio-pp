@extends('themes.portfolio.layout.app')

@section('content')
    <!-- ========== Header ========== -->
    <header id="dsn_header" class="p-relative header-normal section-padding dsn-header-animation">
        <div class="bg-pattarn p-absolute left-0 bottom-0 opacity-5 ">
            <div class="p-relative" data-dsn-animation='{"to":{"y":"20%","rotate":10},"responsive":["tablet","desktop"]}'>
                <img src="{{ asset('themes/portfolio') }}/img/bg-pattern-02.svg" alt="">

            </div>
        </div>
        <div class="p-relative container dsn-hero-parallax-title">
            <div class="p-relative mexdot-box d-flex flex-column justify-content-center background-inner">
                <div class="box-content d-grid grid-1-half z-index-1">

                    <h2 class="title text-upper text-right">I Obsessively Create Impactful Digital Solutions</h2>
                    <div class="">
                        <h5 class="sub-heading">The Studio</h5>
                        <p class="description-box max-w350 mt-15">I drive success by delivering cutting-edge Webflow
                            development services, crafting versatile solutions that help companies grow and innovate.</p>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <!-- ========== End Header ========== -->

    <!-- ========== Award Scroll Right ========== -->
    <div class="img-under-header p-relative">
        <div class="dsn-marque p-relative h-100 over-hidden">
            <div class="dsn-grid-layout  dsn-grid section-image section-move-image use-horizontal-scroll-image"
                data-dsn-option='{"speed":1,"start":"100%","end":"0%","pin":false}'>
                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc1.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc2.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc3.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc4.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc5.jpg"
                            alt="">
                    </div>
                </div>

            </div>
        </div>

        <div class="dsn-marque p-relative h-100 over-hidden mt-20">
            <div class="dsn-grid-layout  dsn-grid section-image section-move-image use-horizontal-scroll-image move-left"
                data-dsn-option='{"speed":1,"start":"100%","end":"0%","pin":false}'>
                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc7.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc8.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc6.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc7.jpg"
                            alt="">
                    </div>
                </div>

                <div class="grid-item">
                    <div class="image-item h-100">
                        <img class="cover-bg-img has-border-radius" src="{{ asset('themes/portfolio') }}/img/img-arc8.jpg"
                            alt="">
                    </div>
                </div>

            </div>
        </div>

        <div
            class=" over-hidden box-text has-border-radius v-middle d-flex align-items-center justify-content-center text-center dsn-fill">
            <h2 class="title-lg"><span class="fw-200">Seamless</span> <br> Experience</h2>
        </div>
    </div>
    <!-- ========== End Award Scroll Right========== -->


    <!-- ========== award========== -->
    <section class="dsn-award section-padding section-margin background-section">
        <div class="container">
            <div class="box-text d-flex flex-column justify-content-center">
                <div class="section-title d-flex flex-column mb-70 dsn-fill">
                    <h2 class="title">10 years <br> of experience</h2>
                </div>

                <div class="award-item p-relative dsn-up">
                    <div class="d-grid grid-half-1">
                        <div class="date">Webflow Layouts Level 1 - 2022</div>

                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h4 class="title-block mb-5">Certified</h4>
                                <p>Webflow Partner Certification exam</p>
                            </div>
                            <img src="{{ asset('themes/portfolio') }}/img/awwards/c-2.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="award-item p-relative dsn-up">
                    <div class="d-grid grid-half-1">
                        <div class="date">Webflow CMS Certification - 2022</div>

                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h4 class="title-block mb-5">Certified</h4>
                                <p>Webflow Partner Certification exam</p>
                            </div>
                            <img src="{{ asset('themes/portfolio') }}/img/awwards/c-3.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="award-item p-relative dsn-up">
                    <div class="d-grid grid-half-1">
                        <div class="date">Webflow 101 Certification - 2022</div>

                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h4 class="title-block mb-5">Certified</h4>
                                <p>Webflow Partner Certification exam</p>
                            </div>
                            <img src="{{ asset('themes/portfolio') }}/img/awwards/c-1.png" alt="">
                        </div>
                    </div>
                </div>


                <div class="award-item p-relative dsn-up">
                    <div class="d-grid grid-half-1">
                        <div class="date">Student Awards - 2018</div>

                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h4 class="title-block mb-5">AWARDS</h4>
                                <p>Diploma in Web Design from CREATIVE IT</p>
                            </div>
                            <img src="{{ asset('themes/portfolio') }}/img/awwards/trophy.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="award-item p-relative dsn-up">
                    <div class="d-grid grid-half-1">
                        <div class="date">Creative it - 2023</div>

                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h4 class="title-block mb-5">AWARDS</h4>
                                <p>CIT Success Meetup - Season 1 (2024)</p>
                            </div>
                            <img src="{{ asset('themes/portfolio') }}/img/awwards/trophy.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="dsn-up">
                    <div class="dsn-btn dsn-btn-shape d-flex">

                        <a class="button background-main v-dark effect-ajax" href="{{ route('contact') }}"
                            data-dsn-text="Contact Us">
                            <span class="title-btn text-upper p-relative  z-index-1 heading-color"
                                data-animate-text="Contact Us">
                                <span>Contact Us</span>
                            </span>
                        </a>

                        <span class="icon background-main v-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                </path>
                            </svg>
                        </span>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========== End award========== -->


    @include('themes.portfolio.component.testimonial')

    <!-- ==========  Brand========== -->
    <section class="brands background-section section-padding">
        <div class="container">

            <div class="section-title text-center d-flex flex-column mb-30">
                <span class="sub-heading dsn-fill ml-auto mr-auto mb-5">OUR BRANDS</span>

                <h2 class="title dsn-fill">ESMAIL WINS OVER <br>
                    THE TOUGHEST CLIENTS</h2>
            </div>

            <div class="d-flex flex-column align-items-center justify-content-center ">
                <div class="box-brands max-w750 dsn-swiper dsn-up"
                    data-dsn-option='{"spaceBetween":50,"centeredSlides":false,"direction":"horizontal","autoHeight":false,"slideToClickedSlide":false,"grabCursor":true,"mousewheel":false,"loop":false,"parallax":false,"slidesPerView":4,"speed":1000,"effect":"slide"}'>
                    <div class="brand-inner">
                        <div class="swiper-container swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/1.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/2.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/3.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/5.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/6.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/1.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/2.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/3.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/5.svg" alt="">
                                </div>

                                <div class="swiper-slide brand-item d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('themes/portfolio') }}/img/brand/6.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="max-w570 text-center mt-20 dsn-up">Learn why industry leaders trust Esmail's expertise in
                    Laravel, Webflow, and API development, delivering high-performance, scalable digital solutions.</p>

                <div class="dsn-up">
                    <div class="dsn-btn dsn-btn-shape d-flex mt-20">

                        <a class="button background-main v-dark" href="#">
                            <span class="title-btn text-upper p-relative  z-index-1 heading-color"
                                data-animate-text="Contact me">
                                <span>Contact me</span>
                            </span>
                        </a>

                        <span class="icon background-main v-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                </path>
                            </svg>
                        </span>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ========== End Brand========== -->
@endsection
