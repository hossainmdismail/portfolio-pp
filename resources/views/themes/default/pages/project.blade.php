@extends('themes.portfolio.layout.app')

@section('css')
    <style>
        h1 {
            margin-bottom: 1.5rem;
        }

        h2 {
            margin-bottom: 1.5rem;
        }

        h3 {
            margin-bottom: 1rem;
        }

        h4 {
            margin-bottom: 0.7rem;
        }

        ul {
            margin-bottom: .5rem;
        }

        ol {
            margin-bottom: .6rem;
        }

        #blog-content img {
            margin: 2rem 0 2rem 0;
            border-radius: 1rem;
        }

        #blog-content code {
            font-family: monospace;
            overflow: auto;
            background: #111111;
            padding: 10px 10px 10px 18px;
            border-radius: .6rem;
            margin: 7px 0 7px 0px;
            display: block;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 16px;
            text-align: left;
        }

        th,
        td {
            padding: 12px 15px;
            border-bottom: 1px solid #111111;
        }

        th {
            background-color: #111111;
            font-weight: bold;
        }

        tbody tr:hover {
            background-color: #111111;
        }

        /* Responsive Table Styling */
        @media (max-width: 768px) {
            table {
                display: block;
                width: 100%;
            }

            thead {
                display: none;
                /* Hide the header on small screens */
            }

            tbody,
            tr,
            td {
                display: block;
                width: 100%;
            }

            tr {
                margin-bottom: 15px;
                border: 1px solid #202020;
            }

            td {
                text-align: right;
                padding-left: 50%;
                position: relative;
            }

            td::before {
                content: attr(data-label);
                /* Use data-label attribute for column names */
                position: absolute;
                left: 10px;
                width: 45%;
                padding-right: 10px;
                text-align: left;
                font-weight: bold;
            }

            td:last-child {
                border-bottom: 0;
            }
        }

        /* Button Styling */
        button {
            padding: 5px 10px;
            margin: 2px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:nth-child(1) {
            background-color: #4CAF50;
            color: white;
        }

        button:nth-child(2) {
            background-color: #f44336;
            color: white;
        }

        /* List Styling */
        ul,
        ol {
            margin: 0;
            padding-left: 20px;
            text-align: left;
        }

        ul {
            list-style-type: disc;
            /* Bullet points for unordered lists */
        }

        ol li {
            list-style: auto;
        }

        ul li {
            margin-bottom: 5px;
            list-style: auto;
        }
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
