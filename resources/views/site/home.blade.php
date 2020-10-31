@extends('site.app')
@section('content')
    <section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header"
        data-autoplay="5000" data-speed="650" data-loop="true" data-effect="fade" data-progress="true">
        <div class="slider-inner">
            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    @foreach ($sliders as $slider)
                        <div class="swiper-slide dark">
                            <div class="container">
                                @if ($slider->description)
                                    <div class="slider-caption slider-caption-center text-white">
                                        <h3 data-animate="fadeInUp">{{ $slider->description }}</h3>
                                    </div>
                                @endif
                            </div>
                            <div class="swiper-slide-bg"
                                style="background-image: url('{{ asset('web/images/slider/' . $slider->slider) }}');">
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>
        </div>
    </section>

    <section id="content">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="section header-stick" style="padding-bottom: 0px; margin-bottom:20px;">
                    <div class="container clearfix">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-block bottommargin-sm">
                                    <h3>Who We Are</h3>
                                </div>
                                <p class="mb-0 justify-content-center">Marriedly is a bespoke wedding planning and
                                    decor company based in Coimbatore.
                                    They believe in delivering quality services to their clients.
                                    They understand the client’s vision first and then conceptualise the wedding
                                    based on those points.
                                    Their mission is to convert your vision into a beautiful reality.
                                    The team at Marriedly specialise in Décor and Planning.
                                    For décor they have their own in-house team that works efficiently but they are
                                    happy to work with other decorators as well as per the clients’ requirements.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line" style="margin: 2rem 0;"></div>
                <h2 class="text-center">Our Services</h2>

                <div class="row justify-content-center col-mb-10">

                    @foreach ($services
            ->skip(0)
            ->take(9)
            ->get()
        as $service)

                        <div class="col-sm-6 col-lg-4">
                            <div class="feature-box fbox-sm fbox-plain">
                                <div class="fbox-icon">
                                    <a href="{{ route('service', $service->slug) }}">
                                        <i class="{{ $service->icon }}"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <a href="{{ route('service', $service->slug) }}">
                                        <h3>{{ ucwords($service->slug) }}</h3>
                                    </a>
                                    <p>{{ substr($service->description, 0, 100) }}... </p>
                                    <br>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>
            </div>
            <div class="clear"></div>
            <div class="section parallax dark mb-0 border-bottom-0"
                style="background-image: url('{{ asset('web/images/site_images/2.jpg') }}');"
                data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
                <div class="container clearfix">
                    <div class="heading-block center">
                        <h2>We Not End With This</h2>
                        <span>Built with passion &amp; intuitiveness in mind. Canvas is a masterclass piece of work
                            presented to you.</span>
                    </div>

                </div>
            </div>
            <div class="section border-top-0 topmargin-sm bottommargin-sm border-0 bg-transparent">
                <div class="container clearfix">
                    <div class="row justify-content-center col-mb-10">

                        @foreach ($services
            ->skip(9)
            ->take(9)
            ->get()
        as $service)

                            <div class="col-sm-6 col-lg-4">
                                <div class="feature-box fbox-sm fbox-plain">
                                    <div class="fbox-icon">
                                        <a href="{{ route('service', $service->slug) }}">
                                            <i class="{{ $service->icon }}"></i></a>
                                    </div>
                                    <div class="fbox-content">
                                        <a href="{{ route('service', $service->slug) }}">
                                            <h3>{{ ucwords($service->slug) }}</h3>
                                        </a>
                                        <p>{{ substr($service->description, 0, 100) }}...</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="section mt-0 border-0 mb-0" style="padding: 20px 0;padding-bottom:10px;">
                <div class="container clearfix">
                    <div class="heading-block center mb-0">
                        <h2>Our Awesome Works</h2>
                        <span></span>
                    </div>
                </div>
            </div>

            <div id="portfolio" class="portfolio row no-gutters grid-container">
                @foreach ($awesomeWorks as $work)
                    <article class="portfolio-item col-6 col-md-4 col-lg-3 pf-media pf-icons">
                        <div class="grid-inner">
                            <div class="portfolio-image" data-lightbox="gallery">
                                <a href="{{ asset('web/images/portfolio_images/' . $work->image) }}"
                                    data-lightbox="gallery-item">
                                    <img src="{{ asset('web/images/portfolio_images/thumbnails/' . $work->image) }}"
                                        style="max-height: 160px" alt="Open Imagination">
                                </a>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
            <a href="{{ route('portfolio') }}" class="button button-full button-dark center text-right bottommargin-lg">
                <div class="container clearfix">
                    We have more than 100+ stage decoration. <strong>See More</strong> <i class="icon-caret-right"
                        style="top:4px;"></i>
                </div>
            </a>

            <div class="container mx-auto clearfix">
                <div class="heading-block center">
                    <h2>Marriedly: We know you want it!</h2>
                    <span>Built with passion &amp; intuitiveness in mind. Marriedly is a masterclass piece of work
                        presented to you.</span>
                </div>
            </div>
            {{-- <div class="section dark my-0 border-0"
                style="height: 500px; padding: 145px 0;">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center" style="position: relative;">
                        <div data-animate="fadeInUp">
                            <h2 style="font-size: 42px;">Beautiful Decoration</h2>
                            <p class="d-none d-sm-block">Looks beautiful &amp; ultra-sharp on Retina Screen
                                Displays. Powerful Layout with Responsive functionality that can be adapted to any
                                screen size.</p>
                            <a href="#"
                                class="button button-border button-rounded button-white button-light button-large ml-0 mb-0 d-none d-md-inline-block"
                                style="margin-top: 20px;">Show More</a>
                        </div>
                    </div>
                </div>
                <div class="video-wrap">
                    <video poster="{{ asset('web/images/banner/banner3.jpg') }}" preload="none" loop autoplay muted>
                        <source src='{{ asset('web/images/banner/marriedly.mp4') }}' type='video/mp4' />
                        <source src='{{ asset('web/images/banner/marriedly.mp4') }}' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
                </div>
            </div>
            <div class="line" style="padding: 20px 0; margin: 20px 0"></div>
            --}}

            <div class="row bottommargin-lg align-items-stretch">
                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #1abc9c;">
                    <div>
                        <h3 class="text-uppercase" style="font-weight: 600;">Why choose Us</h3>
                        <p style="line-height: 1.8;">Transform, agency working families thinkers who make change
                            happen communities. Developing nations legal aid public sector our ambitions future aid
                            The Elders economic security Rosa.</p>
                        <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read
                            More</a>
                        <i class="icon-bulb bgicon"></i>
                    </div>
                </div>
                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;">
                    <div>
                        <h3 class="text-uppercase" style="font-weight: 600;">Our Mission</h3>
                        <p style="line-height: 1.8;">Frontline respond, visionary collaborative cities advancement
                            overcome injustice, UNHCR public-private partnerships cause. Giving, country educate
                            rights-based approach; leverage disrupt solution.</p>
                        <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read
                            More</a>
                        <i class="icon-cog bgicon"></i>
                    </div>
                </div>
                <div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;">
                    <div>
                        <h3 class="text-uppercase" style="font-weight: 600;">What you get</h3>
                        <p style="line-height: 1.8;">Sustainability involvement fundraising campaign connect carbon
                            rights, collaborative cities convener truth. Synthesize change lives treatment
                            fluctuation participatory monitoring underprivileged equal.</p>
                        <a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read
                            More</a>
                        <i class="icon-thumbs-up bgicon"></i>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="container clearfix">
                <div class="row col-mb-50">
                    <div class="col-lg-8">
                        <h4>What our Clients Say?</h4>
                        <div class="fslider testimonial" data-animation="slide" data-arrows="false">
                            <div class="flexslider">
                                <div class="flex-viewport" style="overflow: hidden; position: relative;">
                                    <div class="slider-wrap"
                                        style="width: 1000%; transition-duration: 0s; transform: translate3d(-247px, 0px, 0px);">

                                        @php
                                        $total_testmonials = $testmonials->count() ;
                                        @endphp
                                        @foreach ($testmonials as $client)
                                            <div class="slide" data-thumb-alt=""
                                                style="width: 247.984px; margin-right: 0px; float: left; display: block;">
                                                <div class="testi-image">
                                                    <a href="#">
                                                        <img src="{{ asset('web/images/avatar/thumbnails/' . $client->client_image) }}"
                                                            alt="{{ $client->client_name }}" draggable="false">
                                                    </a>
                                                </div>
                                                <div class="testi-content">
                                                    <p>{{ $client->comment }}</p>
                                                    <div class="testi-meta">
                                                        {{ $client->designation }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div id="instagram" class="widget">
                            <h4 class="highlight-me">Instagram Photos</h4>
                            <div id="instagram-photos"
                                class="instagram-photos masonry-thumbs grid-container grid-4 customjs"
                                data-user="{{ $siteInformation->instagram_id }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="content">
        <div id="contact_us" class="content-wrap " style="padding-top: 0px">
            <div class="container clearfix">
                <div class="row align-items-stretch col-mb-50 mb-0">
                    <div class="col-lg-6">
                        <div class="fancy-title title-border">
                            <h3>Send us an Email</h3>
                        </div>
                        <!-- Enquiry Form Start Here -->

                        <?php $enquiry_form_class = 'col-md-4'; ?>
                        @include('site.enquiry_form', ['enquiry_form_class' => $enquiry_form_class] )

                        <!-- Enquiry Form Ended Here -->

                    </div>

                    <div class="col-lg-6 min-vh-50">
                        <div class="card topmargin overflow-hidden" style="border:none">
                            <div class="card-body">
                                <h4>Opening Hours</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit
                                    voluptates.</p>
                                <ul class="iconlist mb-0">
                                    <li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> {{ $siteInformation->working_hours_mon_fri }}</li>
                                    <li><i class="icon-time color"></i> <strong>Saturdays:</strong> {{ $siteInformation->working_hours_sat }}</li>
                                    <li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> {{ $siteInformation->working_hours_sun }}</li>
                                </ul>
                                <i class="icon-time bgicon"></i>
                            </div>
                        </div>
                    </div>
                </div>
                    <div class="row col-mb-50">
                        <div class="col-sm-6 col-lg-3" style="cursor: pointer" onclick="window.open('https://goo.gl/maps/u86ebsZ7AeX54e7g9', '_blank')">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-map-marker2"></i></a>
                                </div>
                                <div class="fbox-content" >
                                    <h3>Get Direction<span class="subtitle">Check In<br>Google Map</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" style="cursor: pointer" onclick="window.open('tel:+91{{ $siteInformation->phone_no }}', '_blank')">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href=""><i class="icon-phone3"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Speak to<br> Us<span class="subtitle"><a style="text-decoration: none;color:#000" href="tel:+91{{ $siteInformation->phone_no }}"> (+91) {{ $siteInformation->phone_no  }}</a></span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" style="cursor: pointer" onclick="window.open('https://www.instagram.com/{{ $siteInformation->instagram_id }}/', '_blank')">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-instagram"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Follow<br>Us<span class="subtitle">2.3M Followers</span></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3" style="cursor: pointer" onclick="window.open('https://www.facebook.com/{{ $siteInformation->facebook_id }}', '_blank')">
                            <div class="feature-box fbox-center fbox-bg fbox-plain">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-facebook2"></i></a>
                                </div>
                                <div class="fbox-content">
                                    <h3>Follow<br>Us<span class="subtitle">2.3M Followers</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            // bind 'myForm' and provide a simple callback function
            $('#myForm').ajaxForm(function() {
                alert("Thank you for your comment!");
            });
        });

    </script>
@endsection
