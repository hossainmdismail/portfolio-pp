@extends('themes.portfolio.layout.app')

@section('content')
    <!-- ========== Header ========== -->
    <header class="header-page v-dark-head dsn-header-animation pb-80 p-relative">

        <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
            <img class="cover-bg-img" src="{{ asset('themes/portfolio') }}/img/bg.svg" alt="">
        </div>

        <div class="p-relative container dsn-hero-parallax-title h-100">
            <div class="p-relative d-flex align-items-center w-100  h-100 ">

                <div class="box-content z-index-1">

                    @if ($type == 'project')
                        <h1 class="title-lg text-upper">Recent work</h1>
                    @endif
                    @if ($type == 'casestudy')
                        <h1 class="title-lg text-upper">Case study</h1>
                    @endif

                    <div class="contact-links w-50 mt-20">
                        <p>I bring ideas to life in the digital world, transforming concepts into seamless, engaging
                            experiences. With every project, I focus on crafting intuitive designs and flawless
                            functionality, turning vision into reality with precision and creativity.
                        </p>
                    </div>
                </div>


            </div>
        </div>

        <div class="footer-head w-100 p-relative mt-80 z-index-2">
            <div class="container d-flex justify-content-between">
                <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">

                    <a class="button v-dark background-section" href="#">
                        <span class="title-btn text-upper p-relative  z-index-1 heading-color"
                            data-animate-text="Scroll Down">
                            <span>Scroll Down</span>
                        </span>
                    </a>

                    <span class="icon v-dark background-section">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                            </path>
                        </svg>
                    </span>

                </div>

                <div class="social-box d-flex align-items-center">

                    <ul class="dsn-socials box-social">
                        <li>
                            <a href="https://www.linkedin.com/in/md-ismail-hossain-911a96236/" target="_blank"
                                class="background-section">
                                <i class="fab fa-linkedin" aria-hidden="true"></i> <span>LN</span>
                            </a>
                        </li>
                        <li>
                            <a href="https://x.com/esmailkhaalifa" target="_blank" class="background-main">
                                <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- ========== End Header ========== -->

    <div id="page_wrapper" class="wrapper">

        <!-- ========== Portfolio ========== -->
        <div class="p-relative mb-section">
            <div class="p-relative box-image-parallax dsn-style-cards">
                <div class="root-posts has-filter">

                    <div class="dsn-filtering z-index-1 p-relative w-100 mb-70 pt-50 pb-50 border-bottom">

                        <div class="filtering-t w-100">
                            <div class="filtering-wrap w-100">
                                <div class="filtering w-100">
                                    <div class="container">
                                        <button class="active" data-filter="*" type="button">
                                            Home
                                        </button>
                                        <button type="button" class="dsn-filter-category-production"
                                            data-filter=".brand , .category-brand">
                                            Projects
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="dsn-posts dsn-post-type-cards box-image-normal d-grid grid-md-2 dsn-isotope use-filter v-dark-head"
                            data-dsn-gap="30px">

                            @foreach ($projects as $project)
                                @include('themes.portfolio.component.project', ['project' => $project])
                            @endforeach
                            {{-- <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">

                                <div class="box-content">
                                    <div class="w-100">
                                        <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative"
                                            data-overlay="7">
                                            <img src="{{ asset('themes/portfolio') }}/img/portfolio/project1/1.jpg"
                                                class="cover-bg-img dsn-swiper-parallax-transform" alt="" />
                                        </div>
                                    </div>

                                    <div class="post-content background-section z-index-1 d-flex flex-column">

                                        <div class="post-info d-flex justify-content-between align-items-center p-20">

                                            <div class="cat d-flex p-0">
                                                <span class="background-main heading-color">UX / UI
                                                    Design</span>
                                            </div>

                                            <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                                                <a href="project-1.html" class="effect-ajax init-color"
                                                    data-dsn-ajax="work">Binge x The Iconic</a>
                                            </h2>

                                        </div>
                                    </div>
                                </div>

                            </article> --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ========== End Portfolio ========== -->
    </div>
@endsection
