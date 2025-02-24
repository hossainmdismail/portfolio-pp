                <!-- ==========  Work Vertical Effect ========== -->
                <section class="our-work work-scroll  section-padding background-section not-filter dsn-filter">
                    <div class="container">

                        <div class="section-title dsn-fill d-flex flex-column mb-70">
                            <span class="sub-heading mb-5">What we’re good at</span>
                            <h2 class="title ">FIND A CASE STUDY THAT<br>
                                SHOWCASES OUR EXPERTISE</h2>
                        </div>
                    </div>

                    <div class="container">
                        <div class="dsn-cards use-v-scroll p-relative"
                            data-dsn-option='{"speed" : 4,"center_screen" : true }'>
                            <div class="dsn-posts ">
                                @foreach ($casestudies as $casestudy)
                                    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius">

                                        <div class="box-content d-flex ">
                                            <div class="img-cat w-100">
                                                <div class="box-image-bg w-100 over-hidden has-border-radius before-z-index dsn-swiper-parallax-transform p-relative"
                                                    data-overlay="7">
                                                    <img src="{{ Storage::url($casestudy->thumbnail) }}"
                                                        class="cover-bg-img dsn-swiper-parallax-transform"
                                                        alt="" />
                                                </div>
                                            </div>

                                            <div
                                                class="post-content v-light background-main z-index-1 d-flex flex-column p-absolute">

                                                <div
                                                    class="post-info d-flex justify-content-between align-items-center">
                                                    <h2 class="post-title word-wrap d-inline-block title-block">
                                                        <a href="project-1.html" class="effect-ajax init-color"
                                                            data-dsn-ajax="work">{{ $casestudy->title }}</a>
                                                    </h2>

                                                    <div class="cat background-main d-flex">
                                                        @foreach ($casestudy->services as $service)
                                                            <span
                                                                class="background-section heading-color">{{ $service }}</span>
                                                        @endforeach
                                                    </div>

                                                    <a href="project-1.html"
                                                        class="dsn-btn dsn-btn-shape d-flex effect-ajax">
                                                        <span class="icon background-section">
                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 384 512">
                                                                <path
                                                                    d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                                                </path>
                                                            </svg>
                                                        </span>

                                                    </a>

                                                </div>
                                            </div>
                                        </div>

                                    </article>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <!-- ========== End Work Vertical Effect ========== -->
