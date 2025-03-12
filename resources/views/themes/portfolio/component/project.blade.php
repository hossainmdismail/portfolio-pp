@if ($project)
    <article class="dsn-item-post grid-item over-hidden p-relative has-border-radius fashion">

        <div class="box-content">
            <div class="w-100">
                <div class="box-image w-100 h-350 over-hidden before-z-index dsn-swiper-parallax-transform p-relative"
                    data-overlay="7">
                    <img src="{{ Storage::url($project->thumbnail) }}" class="cover-bg-img dsn-swiper-parallax-transform"
                        alt="" />
                </div>
            </div>

            <div class="post-content background-section z-index-1 d-flex flex-column">

                <div class="post-info d-flex justify-content-between align-items-center p-20">

                    <div class="cat d-flex p-0">
                        @foreach ($project->services as $service)
                            <span class="background-main heading-color">{{ $service }}</span>
                        @endforeach
                    </div>

                    <h2 class="post-title word-wrap d-inline-block title-block text-upper">
                        <a href="{{ route('project.view', $project->slug) }}" class="effect-ajax init-color"
                            data-dsn-ajax="work">{{ $project->title }}</a>
                    </h2>

                </div>
            </div>
        </div>

    </article>

@endif
