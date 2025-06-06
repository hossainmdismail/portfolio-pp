@extends('themes.portfolio.layout.app')


@section('content')
    <div id="dsn-scrollbar">

        <!-- ========== Header ========== -->
        <header class="header-page v-dark-head dsn-header-animation pb-80 p-relative">

            <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                <img class="cover-bg-img" src="{{ asset('themes/portfolio') }}/img/bg.svg" alt="">
            </div>

            <div class="p-relative container dsn-hero-parallax-title h-100">
                <div class="p-relative d-flex align-items-center w-100  h-100 ">

                    <div class="box-content d-flex flex-column z-index-1">


                        <h1 class="title-lg text-upper">CONTACT US</h1>

                        <div class="contact-links d-flex flex-column w-50 mt-50">
                            <a href="mailto:hello@esmail.pro"
                                class="sm-title-block text-upper d-flex justify-content-between align-items-center"
                                target="_blank">hello@esmail.pro
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            <a href="https://www.upwork.com/freelancers/~018ae8da89391f7845?mp_source=share"
                                class="sm-title-block text-upper d-flex justify-content-between align-items-center"
                                target="_blank">UpWork
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                            <a href="https://www.fiverr.com/s/7YrABYe"
                                class="sm-title-block text-upper d-flex justify-content-between align-items-center"
                                target="_blank">Fiverr
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                        <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                        </path>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>


                </div>
            </div>

            <div class="footer-head w-100 p-relative mt-80 z-index-2">
                <div class="container d-flex justify-content-between">
                    <div class="dsn-btn dsn-btn-shape rotate-icon d-flex">

                        <a class="button v-dark background-section" href="#page_wrapper" rel="nofollow"
                            data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
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

            <div class="">

                <!-- ========== Contact  ========== -->
                <div class="p-relative contact-form over-hidden section-padding">
                    <div class="p-relative container ">
                        <div class="d-grid grid-md-2" data-dsn-gap="30px 30px">
                            <div class="box-info d-grid">
                                <div class="box-title background-section has-border-radius p-relative over-hidden">
                                    <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                                        <img class="cover-bg-img" src="{{ asset('themes/portfolio') }}/img/bg.svg"
                                            alt="">
                                    </div>
                                    <h2 class="title text-upper p-relative">Let's Work Together</h2>
                                </div>

                                <div class="info background-section has-border-radius p-relative over-hidden">
                                    <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                                        <img class="cover-bg-img" src="{{ asset('themes/portfolio') }}/img/bg.svg"
                                            alt="">
                                    </div>

                                    <div class="p-relative">
                                        <div class="mb-20">
                                            <h4 class="title-block mb-15">Business Hours</h4>

                                            <p>Monday to Friday: 9 AM - 6 PM<br>Saturday: 10 AM - 4 PM<br>Sunday:
                                                Closed
                                            </p>
                                        </div>

                                        <div class="">
                                            <h4 class="title-block mb-15">Address</h4>
                                            <p>26-30 New Damietta,<br>El-Mahalla El-Kubra,<br>LO 12345</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box-form background-section p-relative over-hidden box-padding has-border-radius">
                                <div class="box-img h-100 w-100 h-100 p-absolute top-0 right-0" data-overlay="7">
                                    <img class="cover-bg-img" src="{{ asset('themes/portfolio') }}/img/bg.svg"
                                        alt="">
                                </div>
                                <div class="dsn-form form-box d-flex flex-column p-relative">
                                    <form id="contact-form" class="form w-100" method="post"
                                        action="https://template.dsngrid.com/mexdot/dark/contact.php"
                                        data-toggle="validator">
                                        <div class="messages"></div>
                                        <div class="input__wrap controls">
                                            <div class="d-grid" data-dsn-gap="0px 30px">
                                                <div class="form-group dsn-up">
                                                    <div class="entry-box">

                                                        <input id="form_name" type="text" name="name"
                                                            placeholder="Type your name" required="required"
                                                            data-error="name is required." />
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="form-group dsn-up">
                                                    <div class="entry-box">

                                                        <input id="form_email" type="email" name="email"
                                                            placeholder="Type your Email Address" required="required"
                                                            data-error="Valid email is required." />
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>


                                            <div class="form-group dsn-up">
                                                <div class="entry-box">

                                                    <textarea id="form_message" class="form-control" name="message" rows="7"
                                                        placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="d-flex dsn-up w-100">
                                                <div class="image-zoom move-circle w-100" data-dsn="parallax">
                                                    <input class="background-theme w-100" type="submit"
                                                        value="Not Available" disabled="disabled" />
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div
                            class="social-box border-bottom border-top mt-30 d-flex align-items-center justify-content-center">
                            <p class="heading-color">Available for work</p>

                            <ul class="dsn-socials box-social">
                                <li>
                                    <a href="https://x.com/esmailkhaalifa" target="_blank" class="background-section">
                                        <i class="fab fa-twitter" aria-hidden="true"></i> <span>TW</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="https://www.linkedin.com/in/md-ismail-hossain-911a96236/" target="_blank"
                                        class="background-section">
                                        <i class="fab fa-linkedin" aria-hidden="true"></i> <span>LN</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ========== End Contact  ========== -->
            </div>

            <!-- ========== Map  ========== -->
            {{-- <div class="map-custom hv-80" data-dsn-lat="51.5073509" data-dsn-len="-0.1277583" data-dsn-zoom="14">
            </div> --}}
        </div>

    </div>
@endsection
