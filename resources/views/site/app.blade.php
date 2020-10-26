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
	<link rel="stylesheet" type="text/css" href="{{ asset('web/include/rs-plugin/css/settings.css') }}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{ asset('web/include/rs-plugin/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('web/include/rs-plugin/css/navigation.css') }}">
    <title>Marriedly - Wedding Planner</title>
    <script src="{{  asset('web/js/jquery.js') }}"></script>
</head>

<body class="stretched">
    <style>
        .float{
	position:fixed;
	width:60px;
	height:60px;
	bottom:89px;
	right:22px;
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top: 9px;
}
        </style>

	<div id="wrapper" class="clearfix">

		<header id="header" class="full-header" data-sticky-logo-height="74" data-menu-padding="32">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<div id="logo" style="background-color: #1abc9c;">
							<a href="index.html" class="standard-logo"
								data-dark-logo="{{ asset('web/images/site_images/logo2.png') }}"><img src="{{ asset('web/images/site_images/logo2.png') }}"
									alt="{{ config('app.name') }}" style="width: 126px;height: 30px;"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('web/images/site_images/logo2.png') }}"><img
									src="{{ asset('web/images/site_images/logo2.png') }}" alt="{{ config('app.name') }}"></a>
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

						@include('site.navbar')
					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
        </header>

        @yield('content')

        @include('site.footer')
