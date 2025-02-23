<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from template.dsngrid.com/mexdot/dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 23 Feb 2025 06:30:23 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Antonio:wght@100..700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="{{ asset('themes/portfolio') }}/img/logo-32x32.html" sizes="32x32" />
    <link rel="icon" href="{{ asset('themes/portfolio') }}/img/logo-192x192.html" sizes="192x192" />
    <title>KHAALIFA</title>
    <link href="{{ asset('themes/portfolio') }}/css/plugins.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('themes/portfolio') }}/css/style.css">
</head>

<body class="v-dark dsn-ajax">

    <div id="dsn_preloader" class="preloader">

        <div class="dsnload p-absolute">
            <span class="dsnload__row">
                <span class="dsnload__img">
                    <img src="{{ asset('themes/portfolio') }}/img/logo-light.png" class="logo-dark" alt="mexdot"
                        decoding="async" loading="lazy" />
                    <img src="{{ asset('themes/portfolio') }}/img/logo.png" class="logo-light" alt="mexdot"
                        decoding="async" loading="lazy" />
                </span>
            </span>
            <span class="dsnload__row dsnload__row--sibling">
                <span class="dsnload__img">
                    <img src="{{ asset('themes/portfolio') }}/img/logo-light.png" class="logo-dark" alt="mexdot"
                        decoding="async" loading="lazy" />
                    <img src="{{ asset('themes/portfolio') }}/img/logo.png" class="logo-light" alt="mexdot"
                        decoding="async" loading="lazy" />
                </span>
            </span>
            <span class="dsnload__row dsnload__row--sibling">
                <span class="dsnload__img">
                    <img src="{{ asset('themes/portfolio') }}/img/logo-light.png" class="logo-dark" alt="mexdot"
                        decoding="async" loading="lazy" />
                    <img src="{{ asset('themes/portfolio') }}/img/logo.png" class="logo-light" alt="mexdot"
                        decoding="async" loading="lazy" />
                </span>
            </span>
            <span class="dsnload__row dsnload__row--sibling">
                <span class="dsnload__img">
                    <img src="{{ asset('themes/portfolio') }}/img/logo-light.png" class="logo-dark" alt="mexdot"
                        decoding="async" loading="lazy" />
                    <img src="{{ asset('themes/portfolio') }}/img/logo.png" class="logo-light" alt="mexdot"
                        decoding="async" loading="lazy" />
                </span>
            </span>


        </div>


        <div class="logo-box v-middle">
            <h3 class="title text-upper">ESMAIL</h3>
        </div>

        <div class="loading-count">
            <p>0</p>
        </div>

        <span class="loading-text text-uppercase mt-30 dsn-container">Loading ...</span>
        <div class="bg-load background-section d-flex align-items-end dsn-bg-pattern bg-offset bg-square">
            <svg class="dsn-separator-bottom dsn-icon-assistant-color" width="100%" height="100%"
                viewBox="0 0 100 10" preserveAspectRatio="none">
                <path class="path-anim separator__path" data-dsn-to="M 0 0 C 40 0 55 0 100 0 L 0 0 Z"
                    vector-effect="non-scaling-stroke" d="M 0 0 C 40 16 75 10 100 0 L 0 0 Z"></path>
            </svg>
        </div>

    </div>

    <svg width="0" height="0" class="p-absolute hidden">
        <defs>
            <filter id="buttonFilter">
                <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur">
                </feGaussianBlur>
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9"
                    result="buttonFilter"></feColorMatrix>
                <feComposite in="SourceGraphic" in2="buttonFilter" operator="atop">
                </feComposite>
                <feBlend in="SourceGraphic" in2="buttonFilter"></feBlend>
            </filter>
        </defs>
    </svg>

    <main id="main_root" class="main-root">


        @include('themes.portfolio.layout.header')

        <div id="dsn-scrollbar">

            @if (route('home') == url()->current())
                @include('themes.portfolio.component.hero')
            @endif
            {{-- @include('themes.portfolio.component.hero') --}}

            <div id="page_wrapper" class="wrapper">


                @yield('content')

                @include('themes.portfolio.layout.footer')

            </div>

        </div>


    </main>
    <!-- ========== Cursor ========== -->
    <div id="dsn_cursor" class="ball"></div>
    <div id="dsn_cursor_inner" class="ball"></div>
    <!-- ========== End Cursor ========== -->

    <script src="{{ asset('themes/portfolio') }}/js/jquery-3.7.1.min.js"></script>
    <script src="{{ asset('themes/portfolio') }}/js/plugins.min.js"></script>
    <script src="{{ asset('themes/portfolio') }}/js/plugins/dsn-grid.min.js"></script>
    <script src="{{ asset('themes/portfolio') }}/js/custom.js"></script>
</body>

</html>
