<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Marriedly" />

    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap"
        rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="{{ asset('web/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('web/css/bootstrap.css') }} " type="text/css" />
    <link rel="stylesheet" href="{{ asset('web/css/dark.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('web/css/font-icons.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('web/css/animate.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('web/css/magnific-popup.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('web/css/custom.css') }}" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('web/css/swiper.css') }}" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/include/rs-plugin/css/settings.css') }}"
        media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/include/rs-plugin/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('web/include/rs-plugin/css/navigation.css') }}">

    <title>Marriedly - Wedding Planner</title>
</head>

<body class="stretched">

    <div id="wrapper" class="clearfix">

        <header id="header" class="full-header" data-sticky-logo-height="74" data-menu-padding="32">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row">

                        <div id="logo" style="background-color: #1abc9c;">
                            <a href="index.html" class="standard-logo"
                                data-dark-logo="{{ asset('web/images/site_images/logo2.png') }}"><img
                                    src="{{ asset('web/images/site_images/logo2.png') }}" alt="{{ config('app.name') }}"
                                    style="width: 126px;height: 30px;"></a>
                            <a href="index.html" class="retina-logo"
                                data-dark-logo="{{ asset('web/images/site_images/logo2.png') }}"><img
                                    src="{{ asset('web/images/site_images/logo2.png') }}"
                                    alt="{{ config('app.name') }}"></a>
                        </div>
                        <div class="header-misc">

                        </div>
                        <div id="primary-menu-trigger">
                            <svg class="svg-trigger" viewBox="0 0 100 100">
                                <path
                                    d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20">
                                </path>
                                <path d="m 30,50 h 40"></path>
                                <path
                                    d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20">
                                </path>
                            </svg>
                        </div>


                        <nav class="primary-menu sub-title">
                            <ul class="menu-container">
                                <li class="menu-item">
                                    <a class="menu-link" href="index.html">
                                        <div>Home</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a class="menu-link" href="#">
                                        <div>Services</div>
                                    </a>
                                    <ul class="sub-menu-container">
                                        <li class="menu-item">
                                            <a class="menu-link" href="rs-demos.html">
                                                <div>Premium Templates</div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Portfolio</div>
                                    </a>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Testimonails</div>
                                    </a>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Contact Us</div>
                                    </a>
                                </li>
                                <li class="menu-item mega-menu">
                                    <a class="menu-link" href="#">
                                        <div>Blog</div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header>


        <section id="page-title" class="page-title-parallax page-title-dark"
            style="background-image: url('{{ asset('web/images/banner/banner1.jpg') }}'); background-size: cover;"
            data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -100px;">
            <div class="container clearfix">
                <h1>Page Title Parallax</h1>
                <span>A Short Page Title Tagline</span>
            </div>
        </section>

        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="row col-mb-50">
                        <div class="col-12">
                            Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh
                            ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit
                            aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.
                            Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget
                            metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum id ligula porta
                            felis euismod semper.
                        </div>


                        <section id="slider" class="slider-element">
                            <div class="masonry-thumbs grid-container grid-6" data-big="3" data-lightbox="gallery">
                                <a class="grid-item" href="{{  asset('web/images/banner/banner1.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner1.jpg') }}" alt="Gallery Thumb 1">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner3.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner3.jpg') }}" alt="Gallery Thumb 2">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner2.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner2.jpg') }}" alt="Gallery Thumb 3">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner7.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner7.jpg') }}" alt="Gallery Thumb 4">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner4.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner4.jpg') }}" alt="Gallery Thumb 5">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner12.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner12.jpg') }}" alt="Gallery Thumb 6">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner10.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner10.jpg') }}" alt="Gallery Thumb 7">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner9.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner9.jpg') }}" alt="Gallery Thumb 8">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner8.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner8.jpg') }}" alt="Gallery Thumb 9">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner7.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner7.jpg') }}" alt="Gallery Thumb 10">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner6.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner6.jpg') }}" alt="Gallery Thumb 11">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner5.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner5.jpg') }}" alt="Gallery Thumb 12">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner4.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner4.jpg') }}" alt="Gallery Thumb 13">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner3.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner3.jpg') }}" alt="Gallery Thumb 14">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-image"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a class="grid-item" href="{{  asset('web/images/banner/banner2.jpg') }}" data-lightbox="gallery-item">
                                    <div class="grid-inner">
                                        <img src="{{  asset('web/images/banner/banner2.jpg') }}" alt="Gallery Thumb 15">
                                        <div class="bg-overlay">
                                            <div class="bg-overlay-content dark">
                                                <span class="overlay-trigger-icon bg-light text-dark"
                                                    data-hover-animate="zoomIn" data-hover-animate-out="zoomOut"
                                                    data-hover-speed="400"><i class="icon-line-play"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer" class="dark">
            <div id="copyrights">
                <div class="container">
                    <div class="row col-mb-30">
                        <div class="col-md-6 text-center text-md-left">
                            Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
                            <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-md-right">
                            <div class="d-flex justify-content-center justify-content-md-end">
                                <a href="#" class="social-icon si-small si-borderless si-facebook">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-borderless si-twitter">
                                    <i class="icon-twitter"></i>
                                    <i class="icon-twitter"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-borderless si-gplus">
                                    <i class="icon-gplus"></i>
                                    <i class="icon-gplus"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-borderless si-pinterest">
                                    <i class="icon-pinterest"></i>
                                    <i class="icon-pinterest"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-borderless si-vimeo">
                                    <i class="icon-vimeo"></i>
                                    <i class="icon-vimeo"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-borderless si-github">
                                    <i class="icon-github"></i>
                                    <i class="icon-github"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-borderless si-yahoo">
                                    <i class="icon-yahoo"></i>
                                    <i class="icon-yahoo"></i>
                                </a>
                                <a href="#" class="social-icon si-small si-borderless si-linkedin">
                                    <i class="icon-linkedin"></i>
                                    <i class="icon-linkedin"></i>
                                </a>
                            </div>
                            <div class="clear"></div>
                            <i class="icon-envelope2"></i> <a
                                href="http://themes.semicolonweb.com/cdn-cgi/l/email-protection" class="__cf_email__"
                                data-cfemail="7d14131b123d1e1c130b1c0e531e1210">[email&#160;protected]</a> <span
                                class="middot">&middot;</span> <i class="icon-headphones"></i> +1-11-6541-6369 <span
                                class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div id="gotoTop" class="icon-angle-up"></div>
    <script src="{{ asset('web/js/jquery.js') }}"></script>
    <script src="{{ asset('web/js/plugins.min.js') }}"></script>
    <script src="{{ asset('web/js/functions.js') }}"></script>
</body>

<!-- Mirrored from themes.semicolonweb.com/html/canvas/index-corporate.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 25 Jun 2020 02:50:35 GMT -->

</html>
