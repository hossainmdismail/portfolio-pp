@extends('themes.default.layout.app')

@section('content')
    <section class="banner s2">
        <div class="shape"></div>
        <div class="shape right"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h6 class="sub-heading"><span>Find Us For</span></h6>
                        <h2 class="heading">Most Popular <span class="arlo_tm_animation_text_word"></span> <br>
                            Solutions
                        </h2>
                        <p class="mb-34">Your one-stop solution for premium UI/UX Design, Web Development, Digital
                            Marketing, and E-commerce Solutions.</p>

                        <a href="#" class="action-btn"><span>Get Connected</span></a>
                    </div>

                    <div class="swiper bannerSwiper">

                        <div class="swiper-wrapper">
                            @foreach ($projects as $project)
                                <div class="swiper-slide">
                                    <div class="card-box">
                                        <div class="top d-flex">
                                            <svg width="42px" height="42px" style="margin-right: 8px" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M3.37752 5.08241C3 5.62028 3 7.21907 3 10.4167V11.9914C3 17.6294 7.23896 20.3655 9.89856 21.5273C10.62 21.8424 10.9807 22 12 22V2C11.1886 2 10.405 2.26824 8.83772 2.80472L8.26491 3.00079C5.25832 4.02996 3.75503 4.54454 3.37752 5.08241Z"
                                                    fill="#FFFFFF" />
                                                <path opacity="0.5"
                                                    d="M21 11.9914V10.4167C21 7.21907 21 5.62028 20.6225 5.08241C20.245 4.54454 18.7417 4.02996 15.7351 3.00079L15.1623 2.80472C13.595 2.26824 12.8114 2 12 2V22C13.0193 22 13.38 21.8424 14.1014 21.5273C16.761 20.3655 21 17.6294 21 11.9914Z"
                                                    fill="#FFFFFF" />
                                            </svg>
                                            <div>
                                                <a
                                                    href="{{ route('project.view', $project->id) }}">{{ $project->title }}</a>
                                                <h6 class="price">{{ $project->created_at->format('d-m y') }}</h6>
                                            </div>
                                        </div>
                                        <div class="content">
                                            <div class="image">
                                                <img src="{{ Storage::url($project->thumbnail) }}" alt="">
                                            </div>

                                            <div class="info d-flex">
                                                <img src="{{ Storage::url($project->thumbnail) }}" alt="">

                                                <div>
                                                    <h6 class="name">{{ $project->client }}</h6>
                                                    <ul class="project-services">
                                                        @foreach ($project->services as $tag)
                                                            <li class="project-services-list">{{ $tag }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-button-next s1">
                        <svg width="10" height="15" viewBox="0 0 10 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M8.8788 7.46543L2.43654 13.8092C2.1795 14.0662 1.76387 14.0662 1.50683 13.8092L1.11856 13.4209C0.861521 13.1639 0.861521 12.7482 1.11856 12.4912L6.7131 7.00059L1.12402 1.50997C0.866998 1.25293 0.866998 0.837303 1.12402 0.580281L1.51231 0.191991C1.76933 -0.0650311 2.18496 -0.0650311 2.442 0.191991L8.88422 6.53574C9.1357 6.79278 9.1357 7.20841 8.8788 7.46543Z"
                                fill="white" fill-opacity="0.5" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev s1">
                        <svg width="10" height="15" viewBox="0 0 10 15" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M1.1212 7.46543L7.56346 13.8092C7.8205 14.0662 8.23613 14.0662 8.49317 13.8092L8.88144 13.4209C9.13848 13.1639 9.13848 12.7482 8.88144 12.4912L3.2869 7.00059L8.87598 1.50997C9.133 1.25293 9.133 0.837303 8.87598 0.580281L8.48769 0.191991C8.23067 -0.0650311 7.81504 -0.0650311 7.558 0.191991L1.11578 6.53574C0.864303 6.79278 0.864302 7.20841 1.1212 7.46543Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about s2">
        <div class="shape"></div>
        <div class="shape right"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center pd-0">
                        <h6 class="sub-heading"><span>About us</span></h6>
                        <h3 class="heading wow" data-splitting>Hight Quality
                            <br>
                            NFT Collections
                        </h3>

                    </div>

                    <div class="about__main center" data-aos="fade-up" data-aos-duration="3000">
                        <img src="{{ asset('themes/default') }}/assets/images/layouts/about-06.png" alt="">
                        <p class="mb-17">Cyfonii is the premier marketplace for nifties, which are digital items
                            you can truly own for yourself</p>
                        <p class="mb-30">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occae cat cupidatat non proident, sunt
                            in culpa qui officia dese runt mollit anim id est laborum velit esse cillum dolore eu
                            fugiat nulla pariatu epteur sint occaecat</p>
                        <a href="{{ route('about') }}" class="action-btn"><span>More About Us</span></a>
                    </div>

                    <div class="brands s2 block-text center pd-0">
                        <h6 class="sub-heading"><span>We Are Partnered with Top Brands</span></h6>

                        <div class="swiper brands-swiper">
                            <div class="swiper-wrapper">
                                @foreach ($partners as $partner)
                                    <div class="swiper-slide">
                                        <a href="#"><img src="{{ Storage::url($partner->image) }}" alt=""></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="couter">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="couter__main">
                        <div class="couter-list">
                            <div class="couter-box">
                                <div class="icon">
                                    <svg width="35" height="31" viewBox="0 0 35 31" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M17.5 12.1738C20.6907 12.1738 23.2773 9.58722 23.2773 6.39648C23.2773 3.20575 20.6907 0.619141 17.5 0.619141C14.3093 0.619141 11.7227 3.20575 11.7227 6.39648C11.7227 9.58722 14.3093 12.1738 17.5 12.1738Z"
                                            fill="url(#paint0_linear_1065_853)" />
                                        <path
                                            d="M29.1875 12.1738C31.2046 12.1738 32.8398 10.5386 32.8398 8.52148C32.8398 6.50435 31.2046 4.86914 29.1875 4.86914C27.1704 4.86914 25.5352 6.50435 25.5352 8.52148C25.5352 10.5386 27.1704 12.1738 29.1875 12.1738Z"
                                            fill="url(#paint1_linear_1065_853)" />
                                        <path
                                            d="M5.8125 12.1738C7.82963 12.1738 9.46484 10.5386 9.46484 8.52148C9.46484 6.50435 7.82963 4.86914 5.8125 4.86914C3.79537 4.86914 2.16016 6.50435 2.16016 8.52148C2.16016 10.5386 3.79537 12.1738 5.8125 12.1738Z"
                                            fill="url(#paint2_linear_1065_853)" />
                                        <path
                                            d="M9.41105 15.4536C7.97336 14.2757 6.67133 14.4316 5.00898 14.4316C2.52273 14.4316 0.5 16.4424 0.5 18.9134V26.1656C0.5 27.2387 1.3759 28.1113 2.45301 28.1113C7.10317 28.1113 6.54297 28.1955 6.54297 27.9108C6.54297 22.7719 5.93429 19.0032 9.41105 15.4536Z"
                                            fill="url(#paint3_linear_1065_853)" />
                                        <path
                                            d="M19.0806 14.4582C16.177 14.2161 13.6533 14.461 11.4764 16.2579C7.83357 19.1757 8.53462 23.1045 8.53462 27.9108C8.53462 29.1824 9.56923 30.2364 10.8602 30.2364C24.8773 30.2364 25.4352 30.6885 26.2664 28.8478C26.539 28.2253 26.4643 28.4231 26.4643 22.4682C26.4643 17.7383 22.3688 14.4582 19.0806 14.4582Z"
                                            fill="url(#paint4_linear_1065_853)" />
                                        <path
                                            d="M29.9919 14.4315C28.3205 14.4315 27.0256 14.2771 25.5898 15.4535C29.0406 18.9767 28.4579 22.4882 28.4579 27.9106C28.4579 28.1971 27.9929 28.1112 32.4782 28.1112C33.5938 28.1112 34.5009 27.2074 34.5009 26.0964V18.9132C34.5009 16.4423 32.4782 14.4315 29.9919 14.4315Z"
                                            fill="url(#paint5_linear_1065_853)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1065_853" x1="30.7502" y1="-16.0273"
                                                x2="4.99287" y2="-13.4479" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1065_853" x1="37.5641" y1="-5.65446"
                                                x2="21.2807" y2="-4.02384" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_1065_853" x1="14.1891" y1="-5.65446"
                                                x2="-2.09431" y2="-4.02384" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint3_linear_1065_853" x1="15.1742" y1="-5.30959"
                                                x2="-4.80447" y2="-4.0081" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint4_linear_1065_853" x1="38.1106" y1="-8.53467"
                                                x2="-1.88821" y2="-4.00346" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint5_linear_1065_853" x1="40.264" y1="-5.31003"
                                                x2="20.2854" y2="-4.00857" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                        </defs>
                                    </svg>

                                </div>

                                <h4 class="numb">100K</h4>
                                <p>Registered User</p>
                            </div>
                            <div class="couter-box">
                                <div class="icon">
                                    <svg width="34" height="35" viewBox="0 0 34 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1065_867)">
                                            <path
                                                d="M8.85351 25.31C6.58552 25.31 4.56812 23.8578 3.83556 21.696L3.78602 21.5331C3.61325 20.9605 3.54088 20.4791 3.54088 19.9974V10.3381L0.104009 21.8106C-0.338018 23.498 0.669255 25.2475 2.35928 25.7136L24.2658 31.5804C24.5393 31.6512 24.8127 31.6852 25.0819 31.6852C26.4928 31.6852 27.7821 30.7487 28.1434 29.3687L29.4197 25.31H8.85351Z"
                                                fill="black" />
                                            <path
                                                d="M8.85351 25.31C6.58552 25.31 4.56812 23.8578 3.83556 21.696L3.78602 21.5331C3.61325 20.9605 3.54088 20.4791 3.54088 19.9974V10.3381L0.104009 21.8106C-0.338018 23.498 0.669255 25.2475 2.35928 25.7136L24.2658 31.5804C24.5393 31.6512 24.8127 31.6852 25.0819 31.6852C26.4928 31.6852 27.7821 30.7487 28.1434 29.3687L29.4197 25.31H8.85351Z"
                                                fill="url(#paint0_linear_1065_867)" />
                                            <path
                                                d="M12.7515 10.4346C14.3141 10.4346 15.5847 9.16373 15.5847 7.60107C15.5847 6.03841 14.3141 4.76758 12.7515 4.76758C11.1888 4.76758 9.91797 6.03841 9.91797 7.60107C9.91797 9.16373 11.1888 10.4346 12.7515 10.4346Z"
                                                fill="black" />
                                            <path
                                                d="M12.7515 10.4346C14.3141 10.4346 15.5847 9.16373 15.5847 7.60107C15.5847 6.03841 14.3141 4.76758 12.7515 4.76758C11.1888 4.76758 9.91797 6.03841 9.91797 7.60107C9.91797 9.16373 11.1888 10.4346 12.7515 10.4346Z"
                                                fill="url(#paint1_linear_1065_867)" />
                                            <path
                                                d="M30.4562 0.517578H9.20573C7.2537 0.517578 5.66406 2.10722 5.66406 4.0595V19.643C5.66406 21.5953 7.2537 23.185 9.20573 23.185H30.4562C32.4085 23.185 33.9982 21.5953 33.9982 19.643V4.0595C33.9982 2.10722 32.4085 0.517578 30.4562 0.517578ZM9.20573 3.35107H30.4562C30.8474 3.35107 31.1647 3.66832 31.1647 4.0595V14.1167L26.6894 8.89457C26.2147 8.33788 25.5275 8.04035 24.7895 8.02348C24.0557 8.02764 23.3672 8.35345 22.8969 8.9174L17.6351 15.2329L15.921 13.5229C14.9521 12.554 13.3752 12.554 12.4076 13.5229L8.49755 17.4316V4.0595C8.49755 3.66832 8.8148 3.35107 9.20573 3.35107Z"
                                                fill="black" />
                                            <path
                                                d="M30.4562 0.517578H9.20573C7.2537 0.517578 5.66406 2.10722 5.66406 4.0595V19.643C5.66406 21.5953 7.2537 23.185 9.20573 23.185H30.4562C32.4085 23.185 33.9982 21.5953 33.9982 19.643V4.0595C33.9982 2.10722 32.4085 0.517578 30.4562 0.517578ZM9.20573 3.35107H30.4562C30.8474 3.35107 31.1647 3.66832 31.1647 4.0595V14.1167L26.6894 8.89457C26.2147 8.33788 25.5275 8.04035 24.7895 8.02348C24.0557 8.02764 23.3672 8.35345 22.8969 8.9174L17.6351 15.2329L15.921 13.5229C14.9521 12.554 13.3752 12.554 12.4076 13.5229L8.49755 17.4316V4.0595C8.49755 3.66832 8.8148 3.35107 9.20573 3.35107Z"
                                                fill="url(#paint2_linear_1065_867)" />
                                        </g>
                                        <defs>
                                            <linearGradient id="paint0_linear_1065_867" x1="48.4466" y1="-20.4157"
                                                x2="-16.5545" y2="-11.445" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1065_867" x1="19.2496" y1="-3.39663"
                                                x2="6.61749" y2="-2.13171" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_1065_867" x1="52.323" y1="-32.1385"
                                                x2="-10.4878" y2="-24.2762" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <clipPath id="clip0_1065_867">
                                                <rect width="34" height="34" fill="white"
                                                    transform="translate(0 0.452148)" />
                                            </clipPath>
                                        </defs>
                                    </svg>


                                </div>

                                <h4 class="numb">5M</h4>
                                <p>Total Assets</p>
                            </div>
                            <div class="couter-box">
                                <div class="icon">
                                    <svg width="34" height="35" viewBox="0 0 34 35" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M15.7711 4.90991C15.7711 3.80534 14.8711 2.89661 13.7752 3.035C6.00736 4.01597 0 10.6469 0 18.681C0 27.3911 7.06094 34.4521 15.7711 34.4521C23.8052 34.4521 30.4361 28.4447 31.4171 20.6769C31.5555 19.581 30.6467 18.681 29.5422 18.681H17.7711C16.6665 18.681 15.7711 17.7856 15.7711 16.681V4.90991Z"
                                            fill="black" />
                                        <path
                                            d="M15.7711 4.90991C15.7711 3.80534 14.8711 2.89661 13.7752 3.035C6.00736 4.01597 0 10.6469 0 18.681C0 27.3911 7.06094 34.4521 15.7711 34.4521C23.8052 34.4521 30.4361 28.4447 31.4171 20.6769C31.5555 19.581 30.6467 18.681 29.5422 18.681H17.7711C16.6665 18.681 15.7711 17.7856 15.7711 16.681V4.90991Z"
                                            fill="url(#paint0_linear_1065_881)" />
                                        <path
                                            d="M20.2224 0.577237C19.1266 0.438845 18.2266 1.34758 18.2266 2.45215V14.2232C18.2266 15.3278 19.122 16.2232 20.2266 16.2232H31.9976C33.1022 16.2232 34.011 15.3232 33.8726 14.2274C32.9741 7.11317 27.3366 1.47566 20.2224 0.577237Z"
                                            fill="black" />
                                        <path
                                            d="M20.2224 0.577237C19.1266 0.438845 18.2266 1.34758 18.2266 2.45215V14.2232C18.2266 15.3278 19.122 16.2232 20.2266 16.2232H31.9976C33.1022 16.2232 34.011 15.3232 33.8726 14.2274C32.9741 7.11317 27.3366 1.47566 20.2224 0.577237Z"
                                            fill="url(#paint1_linear_1065_881)" />
                                        <defs>
                                            <linearGradient id="paint0_linear_1065_881" x1="51.9417" y1="-42.5317"
                                                x2="-18.3711" y2="-35.4906" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_1065_881" x1="44.1974" y1="-22.2687"
                                                x2="9.04102" y2="-18.7481" gradientUnits="userSpaceOnUse">
                                                <stop offset="0.164688" stop-color="#DEC7FF" />
                                                <stop offset="0.855177" stop-color="#5C27FE" />
                                            </linearGradient>
                                        </defs>
                                    </svg>

                                </div>

                                <h4 class="numb">10B</h4>
                                <p>Yearly Trading</p>
                            </div>

                            <div class="image">
                                <img src="{{ asset('themes/default') }}/assets/images/layouts/couter.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="project s2">
        <div class="shape right"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h6 class="sub-heading"><span>Our Speciality</span></h6>
                        <h3 class="heading wow" data-splitting>OUR COLLECTION</h3>
                    </div>
                </div>
                @foreach ($products as $product)
                    <div class="col-xl-3 col-md-6">
                        <div class="project-box">
                            <div class="image">
                                <a>
                                    <img src="{{ Storage::url($product->thumbnail) }}" alt="">
                                </a>
                            </div>
                            <div class="content">
                                <a class="h5 title">{{ $product->title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="button mt-0">
                    <a href="#" class="action-btn"><span>View All COLLECTION</span></a>
                </div>

            </div>
        </div>
    </section>

    <section class="roadmap s2">
        <div class="shape"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h6 class="sub-heading"><span>Road Map</span></h6>
                        <h3 class="heading wow" data-splitting>The Journey of NFT
                            <br>
                            Portfolio
                        </h3>
                    </div>

                    <div class="roadmap__main s1">
                        <div class="swiper roadmap-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="roadmap-box">
                                        <div class="time">February 01, 2022</div>
                                        <div class="content">
                                            <h5 class="title">Idea Generation</h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis diam enim, scelerisque sit amet diam ut, molestie
                                                ultrices nisi. Suspendisse in ipsum ante. Ut rhoncus ligula dictum
                                                gravida.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-box">
                                        <div class="time">February 01, 2022</div>
                                        <div class="content">
                                            <h5 class="title">Initial Release</h5>
                                            <p class="text">Quisque ornare massa congue est cursus molestie.
                                                Suspendisse commodo enim turpis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-box">
                                        <div class="time">February 01, 2022</div>
                                        <div class="content">
                                            <h5 class="title">Design & Development</h5>
                                            <p class="text">Nulla id dolor dignissim lectus semper sollicitudin
                                                at vitae magna. Aliquam non arcu iaculis, auctor eros eget,
                                                fermentum lorem. In hac habitasse platea dictumst. Maecenas varius
                                                ligula a volutpat ornare</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-box">
                                        <div class="time">February 01, 2022</div>
                                        <div class="content">
                                            <h5 class="title">Result & Final Report</h5>
                                            <p class="text">Curabitur malesuada enim odio, nec gravida urna
                                                fermentum vitae. Maecenas euismod, risus a interdum rhoncus, ante
                                                mauris volutpat nisi, sit amet dignissim ex lorem vel nibh</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-box">
                                        <div class="time">February 01, 2022</div>
                                        <div class="content">
                                            <h5 class="title">Idea Generation</h5>
                                            <p class="text">Est et mattis eleifend, justo purus accumsan ante,
                                                finibus porta diam tortor et mi. Nullam egestas felis et dolor
                                                lobortis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-box">
                                        <div class="time">February 01, 2022</div>
                                        <div class="content">
                                            <h5 class="title">Idea Generation</h5>
                                            <p class="text">Aenean auctor nisl at nisi suscipit bibendum. Ut
                                                mollis nibh id blandit commodo. Maecenas euismod, risus a interdum
                                                rhoncus, ante mauris volutpat</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="roadmap-box">
                                        <div class="time">February 01, 2022</div>
                                        <div class="content">
                                            <h5 class="title">Idea Generation</h5>
                                            <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Duis diam enim, scelerisque sit amet diam ut, molestie
                                                ultrices nisi. Suspendisse in ipsum ante. Ut rhoncus ligula dictum
                                                gravida.</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="swiper-pagination"></div>

                        </div>
                        <div class="swiper-button-next">
                            <svg width="10" height="15" viewBox="0 0 10 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M8.8788 7.46543L2.43654 13.8092C2.1795 14.0662 1.76387 14.0662 1.50683 13.8092L1.11856 13.4209C0.861521 13.1639 0.861521 12.7482 1.11856 12.4912L6.7131 7.00059L1.12402 1.50997C0.866998 1.25293 0.866998 0.837303 1.12402 0.580281L1.51231 0.191991C1.76933 -0.0650311 2.18496 -0.0650311 2.442 0.191991L8.88422 6.53574C9.1357 6.79278 9.1357 7.20841 8.8788 7.46543Z"
                                    fill="white" fill-opacity="0.5" />
                            </svg>
                        </div>
                        <div class="swiper-button-prev">
                            <svg width="10" height="15" viewBox="0 0 10 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M1.1212 7.46543L7.56346 13.8092C7.8205 14.0662 8.23613 14.0662 8.49317 13.8092L8.88144 13.4209C9.13848 13.1639 9.13848 12.7482 8.88144 12.4912L3.2869 7.00059L8.87598 1.50997C9.133 1.25293 9.133 0.837303 8.87598 0.580281L8.48769 0.191991C8.23067 -0.0650311 7.81504 -0.0650311 7.558 0.191991L1.11578 6.53574C0.864303 6.79278 0.864302 7.20841 1.1212 7.46543Z"
                                    fill="white" />
                            </svg>
                        </div>

                        <!-- <div class="icon"></div>
                                                                                                                                                                                                                                                                                                                                                                                                                            <div class="icon bottom"></div> -->


                    </div>


                </div>

            </div>
        </div>
    </section>

    <section class="team s2">
        <div class="shape right"></div>
        <img src="{{ asset('themes/default') }}/assets/images/background/line-2.png" alt="" class="img-line">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="block-text center">
                        <h6 class="sub-heading"><span>Team Members</span></h6>
                        <h3 class="heading wow" data-splitting>Our Amazing Team
                            <br>
                            Members
                        </h3>
                    </div>

                </div>

                @foreach ($teams as $team)
                    <div class="col-xl-3 col-md-6">
                        <div class="team-box">
                            <div class="image">
                                <a>
                                    <img src="{{ Storage::url($team->profile) }}" alt="">
                                </a>

                                @if ($team->social_media)
                                    <ul class="list-social">
                                        @foreach ($team->social_media as $social)
                                            @if ($social['platform'] == 'tw')
                                                <li><a href="{{ $social['url'] }}">
                                                        <span class="icon-twitter"></span>
                                                    </a></li>
                                            @endif
                                            @if ($social['platform'] == 'fb')
                                                <li><a href="{{ $social['url'] }}">
                                                        <span class="icon-facebook"></span>
                                                    </a></li>
                                            @endif

                                            @if ($social['platform'] == 'tg')
                                                <li><a href="{{ $social['url'] }}">
                                                        <span class="icon-telegram"></span>
                                                    </a></li>
                                            @endif
                                        @endforeach

                                    </ul>
                                @endif
                            </div>
                            <div class="content">
                                <a class="h5 name">Jane Cooper</a>
                                <p class="postion">
                                    Founder & CEO
                                </p>


                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testimonials s2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonials__main">
                        <div class="block-text center">
                            <h6 class="sub-heading"><span>Testimonials</span></h6>
                            <h3 class="heading">What People Say <br>
                                about us
                            </h3>
                        </div>

                        <div class="swiper testimonials-swiper s2">
                            <div class="swiper-wrapper">
                                @foreach ($reviews as $review)
                                    <div class="swiper-slide">
                                        <div class="box-testimonial center">
                                            <div class="image">
                                                <img src="{{ Storage::url($review->profile) }}" alt="">
                                            </div>

                                            <div class="info">
                                                <h5 class="name">{{ $review->name }}</h5>
                                                <p>{{ $review->role }}</p>
                                                <img src="{{ asset('themes/default') }}/assets/images/icon/quote-2.png"
                                                    alt="">
                                            </div>
                                            <p class="text">{{ $review->comment }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="faq s2">
        <div class="shape"></div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h6 class="sub-heading"><span>FAQs</span></h6>
                        <h3 class="heading wow" data-splitting>Frequently
                            <br>
                            Aksed Questions
                        </h3>
                        <p class="mb-17">Below is a list of frequently asked questions and answers from partners
                            and 3D artist</p>
                        <p>Please check this FAQ first before contacting us.</p>

                    </div>

                    <div class="faq__main flat-tabs" data-aos="fade-up" data-aos-duration="3000">
                        <ul class="menu-tab">
                            <li>
                                <h6 class="fs-14">Cryptocurrency</h6>
                            </li>
                            <li class="active">
                                <h6 class="fs-14">NFT Token</h6>
                            </li>
                            <li>
                                <h6 class="fs-14">Collection</h6>
                            </li>
                            <li>
                                <h6 class="fs-14">Crypto Trading</h6>
                            </li>

                        </ul>
                        <div class="content-tab">
                            <div class="content-inner">
                                <div class="flat-accordion row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>01.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>02.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>03.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>04.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>05.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>06.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>07.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>08.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="flat-accordion row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>01.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>02.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>03.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>04.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>05.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>06.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>07.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>08.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="flat-accordion row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>01.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>02.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>03.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>04.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>05.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>06.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>07.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>08.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div class="content-inner">
                                <div class="flat-accordion row">
                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>01.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>02.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>03.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>04.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-sm-12">
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>05.</span> When the musics over turn off
                                                the light? <span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>06.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>07.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="flat-toggle">
                                            <h6 class="toggle-title"><span>08.</span> What is the best way to
                                                collect NFT?<span class="icon-plus"></span></h6>
                                            <div class="toggle-content">
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                    Tellus aliquam parturient erat id vel, condimentum a,
                                                    hendrerit egestas. Auctor cras diam, dui pulvinar elit.
                                                    Egestas feugiat gravida in imperdiet facilisi tortor ac
                                                    ultrices venenatis.
                                                </p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="blog s2">
        <div class="shape right"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="block-text center">
                        <h6 class="sub-heading"><span>From Our Blog</span></h6>
                        <h3 class="heading wow" data-splitting>Read Our Recent <br>
                            News & Articles</h3>
                    </div>

                </div>
                @foreach ($posts as $post)
                    <div class="col-md-4">
                        <div class="blog-box">
                            <div class="image">
                                <a>
                                    <img src="{{ Storage::url($post->thumbnail) }}" alt="">
                                </a>
                            </div>
                            <div class="content center">
                                <div class="meta ">
                                    <p><svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.9375 0.75V2.0625M9.0625 0.75V2.0625M0.75 9.9375V3.375C0.75 3.0269 0.888281 2.69306 1.13442 2.44692C1.38056 2.20078 1.7144 2.0625 2.0625 2.0625H9.9375C10.2856 2.0625 10.6194 2.20078 10.8656 2.44692C11.1117 2.69306 11.25 3.0269 11.25 3.375V9.9375M0.75 9.9375C0.75 10.2856 0.888281 10.6194 1.13442 10.8656C1.38056 11.1117 1.7144 11.25 2.0625 11.25H9.9375C10.2856 11.25 10.6194 11.1117 10.8656 10.8656C11.1117 10.6194 11.25 10.2856 11.25 9.9375M0.75 9.9375V5.5625C0.75 5.2144 0.888281 4.88056 1.13442 4.63442C1.38056 4.38828 1.7144 4.25 2.0625 4.25H9.9375C10.2856 4.25 10.6194 4.38828 10.8656 4.63442C11.1117 4.88056 11.25 5.2144 11.25 5.5625V9.9375"
                                                stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                        {{ $post->created_at->format('D m, Y') }}</p>
                                </div>

                                <a href="{{ route('blog.view', $post->slug) }}" class="h5 title">{{ $post->title }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endsection
