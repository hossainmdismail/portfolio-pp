                <!-- ========== Portfolio ========== -->
                <div class="our-work p-relative mb-section">
                    <div class="p-relative box-image-parallax dsn-style-cards">
                        <div class="root-posts has-filter">

                            <div class="dsn-filtering z-index-1 p-relative w-100 mb-70 pt-50 pb-50 border-bottom">

                                <div class="filtering-t w-100">
                                    <div class="filtering-wrap w-100">
                                        <div class="filtering w-100">
                                            <div class="container">
                                                <button class="active" data-filter="*" type="button">
                                                    Project
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="container">
                                <div class="dsn-posts hover-box-item d-grid grid-md-2 dsn-isotope use-filter v-dark-head"
                                    data-dsn-gap="30px">
                                    @foreach ($projects as $project)
                                        <article
                                            class="dsn-item-post grid-item over-hidden p-relative has-border-radius brand sports">

                                            <div class="box-content d-flex ">
                                                <div class="img-cat w-100">
                                                    <div class="box-image-bg w-100 over-hidden h-350 before-z-index dsn-swiper-parallax-transform p-relative"
                                                        data-overlay="7">
                                                        <img src="{{ Storage::url($project->thumbnail) }}"
                                                            class="cover-bg-img dsn-swiper-parallax-transform"
                                                            alt="" />
                                                    </div>

                                                    <div
                                                        class="cat background-main d-flex p-absolute top-0 right-0 z-index-1">
                                                        <svg class="top-svg" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                            viewBox="0 0 100 100" xml:space="preserve">
                                                            <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                            </path>
                                                        </svg>
                                                        <svg class="bottom-svg" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                            viewBox="0 0 100 100" xml:space="preserve">
                                                            <path d="M98.1 0h1.9v51.9h-1.9c0-27.6-22.4-50-50-50V0h50z">
                                                            </path>
                                                        </svg>
                                                        @foreach ($project->services as $service)
                                                            <span
                                                                class="background-section heading-color">{{ $service }}</span>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <div
                                                    class="post-content p-30 v-dark-head p-relative z-index-1 d-flex flex-column p-absolute w-100 bottom-0">

                                                    <div class="post-info">
                                                        <h2 class="post-title word-wrap d-inline-block title-block">
                                                            <a href="{{ route('project.view', $project->id) }}"
                                                                class="effect-ajax init-color"
                                                                data-dsn-ajax="work"><span
                                                                    style="font-size: 14px">{{ $project->client }}</span>
                                                                <br>
                                                                {{ $project->title }}</a>
                                                        </h2>

                                                    </div>
                                                </div>
                                            </div>

                                        </article>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ========== End Portfolio ========== -->
