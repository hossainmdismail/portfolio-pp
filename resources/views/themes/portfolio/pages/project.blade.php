@extends('themes.portfolio.layout.app')

@section('css')
    <style>

    </style>
@endsection
@section('content')
    <!-- ========== Header ========== -->
    <header class="header-project dsn-header-animation p-relative over-hidden">

        <div class="p-relative container dsn-hero-parallax-title pb-60">
            <div class="p-relative d-flex align-items-center w-100  h-100 ">

                <div class="box-content w-100 d-flex flex-column z-index-1">

                    <h1 class="title-lg text-upper" data-dsn-ajax="title"> {{ $project->title }}</h1>

                    <div class="d-flex justify-content-between align-items-center w-100 mt-30">
                        <div class="cat p-0">
                            @foreach ($project->services as $service)
                                <span class="background-section heading-color">{{ $service }} </span>
                            @endforeach
                        </div>

                        <div class="item">
                            <span class="text-upper"><span>{{ $project->client }}</span>
                        </div>

                        <div class="dsn-btn dsn-btn-shape d-inline-flex d-flex no-padding text-upper">

                            <a class="button" href="{{ $project->link }}" target="_blank">
                                <span class="title-btn p-relative  z-index-1" data-animate-text="View project">
                                    <span>View project</span>
                                </span>
                            </a>

                            <span class="icon background-section theme-color">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                    <path d="M328 96h24v288h-48V177.9L81 401l-17 17-33.9-34 17-17 223-223H64V96h264z">
                                    </path>
                                </svg>
                            </span>

                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div class="container" style="margin-bottom: 2rem">
            <div class="box-img p-relative before-z-index has-border-radius" data-overlay="5" data-dsn-grid="move-up">
                <img class="cover-bg-img has-border-radius" src="{{ Storage::url($project->thumbnail) }}" alt="">
            </div>
        </div>

    </header>
    <!-- ========== End Header ========== -->

    <div id="page_wrapper" class="wrapper">
        <div class="box-move section-padding background-section">
            <div class="container" style="overflow: hidden;" id="blog-content">
                {{-- {!! $project->content !!} --}}
                {!! str($project->content)->markdown()->sanitizeHtml() !!}
            </div>
        </div>

    </div>
@endsection
