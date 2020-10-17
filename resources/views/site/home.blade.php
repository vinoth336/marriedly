@extends('site.app')
@section('content')
		<section id="slider"
			class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header"
			data-autoplay="5000" data-speed="650" data-loop="true"
			data-effect="fade" data-progress="true">
			<div class="slider-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption slider-caption-center">
									<h3 data-animate="fadeInUp">Welcome to Marriedly Wedding planner</h3>
								</div>
							</div>
							<div class="swiper-slide-bg" style="background-image: url('{{ asset('web/images/banner/banner1.jpg') }}');">
							</div>
						</div>

						<div class="swiper-slide dark">
							<div class="container">
								<div class="slider-caption">

								</div>
							</div>
							<div class="swiper-slide-bg"
								style="background-image: url('{{  asset('web/images/banner/banner2.jpg') }}'); background-position: center top;">
							</div>
						</div>
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
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
								<div class="fbox-icon">
									<a href="{{ route('service','decor') }}"><i class="icon-check-empty"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Décor Planning</h3>
									<p>Powerful Layout with Responsive functionality that can be adapted to any screen
										size.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-address-card"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Cards Printing</h3>
									<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts
										&amp; Images.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-star2"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Entrance Decoration</h3>
									<p>Optimized code that are completely customizable and deliver unmatched fast
										performance.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-video"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Pre Wedding Shoots</h3>
									<p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width
										Background.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="800">
								<div class="fbox-icon">
									<a href="#"><i class="icon-car"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Car Decoration</h3>
									<p>Display your Content attractively using Parallax Sections that have unlimited
										customizable areas.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1000">
								<div class="fbox-icon">
									<a href="#"><i class="icon-compact-disc"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Chorography</h3>
									<p>Complete control on each &amp; every element that provides endless customization
										possibilities.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1200">
								<div class="fbox-icon">
									<a href="#"><i class="icon-bullhorn"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Music and MC</h3>
									<p>Change your Website's Primary Scheme instantly by simply adding the dark class to
										the body.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1400">
								<div class="fbox-icon">
									<a href="#"><i class="icon-bell-alt"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Innovative Bridal Entry Ideas</h3>
									<p>Stretch your Website to the Full Width or make it boxed to surprise your
										visitors.</p>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1600">
								<div class="fbox-icon">
									<a href="#"><i class="icon-leaf"></i></a>
								</div>
								<div class="fbox-content">
									<h3>Garland</h3>
									<p>We have covered each &amp; everything in our Documentation including Videos &amp;
										Screenshots.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>
				<div class="section parallax dark mb-0 border-bottom-0"
					style="background-image: url('{{ asset('web/images/parallax/2.jpg') }}');"
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
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">
									<div class="fbox-icon">
										<a href="#"><i class="icon-phone2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Décor Planning</h3>
										<p>Powerful Layout with Responsive functionality that can be adapted to any
											screen
											size.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="200">
									<div class="fbox-icon">
										<a href="#"><i class="icon-eye"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Cards Printing</h3>
										<p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts
											&amp; Images.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="400">
									<div class="fbox-icon">
										<a href="#"><i class="icon-star2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Entrance Decoration</h3>
										<p>Optimized code that are completely customizable and deliver unmatched fast
											performance.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="600">
									<div class="fbox-icon">
										<a href="#"><i class="icon-video"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Pre Wedding Shoots</h3>
										<p>Canvas provides support for Native HTML5 Videos that can be added to a Full
											Width
											Background.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="800">
									<div class="fbox-icon">
										<a href="#"><i class="icon-params"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Music and MC</h3>
										<p>Display your Content attractively using Parallax Sections that have unlimited
											customizable areas.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1000">
									<div class="fbox-icon">
										<a href="#"><i class="icon-fire"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Chorography</h3>
										<p>Complete control on each &amp; every element that provides endless
											customization
											possibilities.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1200">
									<div class="fbox-icon">
										<a href="#"><i class="icon-bulb"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Music and MC</h3>
										<p>Change your Website's Primary Scheme instantly by simply adding the dark
											class to
											the body.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1400">
									<div class="fbox-icon">
										<a href="#"><i class="icon-heart2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Innovative Bridal Entry Ideas</h3>
										<p>Stretch your Website to the Full Width or make it boxed to surprise your
											visitors.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4">
								<div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1600">
									<div class="fbox-icon">
										<a href="#"><i class="icon-note"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Garland</h3>
										<p>We have covered each &amp; everything in our Documentation including Videos
											&amp;
											Screenshots.</p>
									</div>
								</div>
							</div>
						</div>


					</div>
				</div>
				<div class="section mt-0 border-0 mb-0" style="padding: 20px 0;">
					<div class="container clearfix">
						<div class="heading-block center mb-0">
							<h2>Our Awesome Works</h2>
							<span></span>
						</div>
					</div>
				</div>

				<div id="portfolio" class="portfolio row no-gutters portfolio-reveal grid-container">
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-media pf-icons">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner1.jpg') }}" alt="Open Imagination">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Open Imagination</a></h3>
								<span><a href="#">Media</a>, <a href="#">Icons</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-illustrations">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner2.jpg') }}" alt="Locked Steel Gate">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Locked Steel Gate</a></h3>
								<span><a href="#">Illustrations</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics pf-uielements">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="#">
									<img src="{{  asset('web/images/banner/banner3.jpg') }}" alt="Mac Sunglasses">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
								<span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-icons pf-illustrations">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner4.jpg') }}" alt="Open Imagination">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
								<span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-uielements pf-media">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner5.jpg') }}" alt="Console Activity">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Console Activity</a></h3>
								<span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics pf-illustrations">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner6.jpg') }}" alt="Open Imagination">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
								<span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-uielements pf-icons">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single-video.html">
									<img src="{{  asset('web/images/banner/banner7.jpg') }}" alt="Backpack Contents">
								</a>

							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single-video.html">Backpack Contents</a></h3>
								<span><a href="#">UI Elements</a>, <a href="#">Icons</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner7.jpg') }}" alt="Sunset Bulb Glow">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
								<span><a href="#">Graphics</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner8.jpg') }}" alt="Sunset Bulb Glow">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
								<span><a href="#">Graphics</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner11.jpg') }}" alt="Sunset Bulb Glow">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
								<span><a href="#">Graphics</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner1.jpg') }}" alt="Sunset Bulb Glow">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
								<span><a href="#">Graphics</a></span>
							</div>
						</div>
					</article>
					<article class="portfolio-item col-6 col-md-4 col-lg-3 pf-graphics">
						<div class="grid-inner">
							<div class="portfolio-image">
								<a href="portfolio-single.html">
									<img src="{{  asset('web/images/banner/banner11.jpg') }}" alt="Sunset Bulb Glow">
								</a>
							</div>
							<div class="portfolio-desc">
								<h3><a href="portfolio-single.html">Sunset Bulb Glow</a></h3>
								<span><a href="#">Graphics</a></span>
							</div>
						</div>
					</article>
				</div>
				<a href="#" class="button button-full button-dark center text-right bottommargin-lg">
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
				<div class="section dark my-0 border-0" style="height: 500px; padding: 145px 0;">
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
							<source src='{{  asset('web/images/banner/marriedly.mp4') }}' type='video/mp4' />
							<source src='{{  asset('web/images/banner/marriedly.mp4') }}' type='video/mp4' />
						</video>
						<div class="video-overlay" style="background-color: rgba(0,0,0,0.3);"></div>
					</div>
				</div>
				<div class="line" style="padding: 20px 0; margin: 20px 0"></div>
				<div class="row bottommargin-lg align-items-stretch" >
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
				<div class="container clearfix" >
					<div class="row col-mb-50">
						<div class="col-lg-8">
							<div class="fancy-title title-border">
								<h4>Recent Posts</h4>
							</div>
							<div id="related-portfolio" class="owl-carousel portfolio-carousel carousel-widget"
								data-margin="30" data-nav="false" data-autoplay="5000" data-items-xs="1"
								data-items-sm="2" data-items-md="3" data-items-xl="4">
								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="portfolio-single.html">
												<img src="{{  asset('web/images/banner/banner6.jpg') }}" alt="Open Imagination">
											</a>

										</div>
										<div class="portfolio-desc">
											<h3><a href="portfolio-single.html">Sri Ram Mandapam - Coimbatore</a></h3>
											<span><a href="#">Media</a>, <a href="#">Icons</a></span>
										</div>
									</div>
								</div>
								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="portfolio-single.html">
												<img src="{{  asset('web/images/banner/banner6.jpg') }}" alt="Open Imagination">
											</a>

										</div>
										<div class="portfolio-desc">
											<h3><a href="portfolio-single.html">Sri Ram Mandapam - Coimbatore</a></h3>
											<span><a href="#">Media</a>, <a href="#">Icons</a></span>
										</div>
									</div>
								</div>
								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="portfolio-single.html">
												<img src="{{  asset('web/images/banner/banner6.jpg') }}" alt="Open Imagination">
											</a>

										</div>
										<div class="portfolio-desc">
											<h3><a href="portfolio-single.html">Sri Ram Mandapam - Coimbatore</a></h3>
											<span><a href="#">Media</a>, <a href="#">Icons</a></span>
										</div>
									</div>
								</div>
								<div class="oc-item">
									<div class="portfolio-item">
										<div class="portfolio-image">
											<a href="portfolio-single.html">
												<img src="{{  asset('web/images/banner/banner6.jpg') }}" alt="Open Imagination">
											</a>

										</div>
										<div class="portfolio-desc">
											<h3><a href="portfolio-single.html">Sri Ram Mandapam - Coimbatore</a></h3>
											<span><a href="#">Media</a>, <a href="#">Icons</a></span>
										</div>
									</div>
								</div>

							</div>

						</div>
                        <div class="col-lg-4">
                            <div id="instagram" class="widget">
                                <h4 class="highlight-me">Instagram Photos</h4>
                                <div id="instagram-photos" class="instagram-photos masonry-thumbs grid-container grid-4 customjs" data-user="marriedly_wedding_planner"></div>
                                </div>
                        </div>
					</div>
				</div>
			</div>
		</section>

		<section id="content" >
			<div id="contact_us" class="content-wrap " style="padding-top: 0px">
				<div class="container clearfix">
					<div class="row align-items-stretch col-mb-50 mb-0">
						<div class="col-lg-6">
							<div class="fancy-title title-border">
								<h3>Send us an Email</h3>
							</div>
							<div class="form-widget">
								<div class="form-result"></div>
								<form class="mb-0" id="template-contactform" name="template-contactform"
									action="http://themes.semicolonweb.com/html/canvas/include/form.php" method="post">
									<div class="form-process">
										<div class="css3-spinner">
											<div class="css3-spinner-scaler"></div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-4 form-group">
											<label for="template-contactform-name">Name <small>*</small></label>
											<input type="text" id="template-contactform-name"
												name="template-contactform-name" value=""
												class="sm-form-control required" />
										</div>
										<div class="col-md-4 form-group">
											<label for="template-contactform-email">Email <small>*</small></label>
											<input type="email" id="template-contactform-email"
												name="template-contactform-email" value=""
												class="required email sm-form-control" />
										</div>
										<div class="col-md-4 form-group">
											<label for="template-contactform-phone">Phone</label>
											<input type="text" id="template-contactform-phone"
												name="template-contactform-phone" value="" class="sm-form-control" />
										</div>
										<div class="w-100"></div>
										<div class="col-md-8 form-group">
											<label for="template-contactform-subject">Subject <small>*</small></label>
											<input type="text" id="template-contactform-subject" name="subject" value=""
												class="required sm-form-control" />
										</div>
										<div class="col-md-4 form-group">
											<label for="template-contactform-service">Services</label>
											<select id="template-contactform-service"
												name="template-contactform-service" class="sm-form-control">
												<option value="">-- Select One --</option>
												<option value="Wordpress">Wordpress</option>
												<option value="PHP / MySQL">PHP / MySQL</option>
												<option value="HTML5 / CSS3">HTML5 / CSS3</option>
												<option value="Graphic Design">Graphic Design</option>
											</select>
										</div>
										<div class="w-100"></div>
										<div class="col-12 form-group">
											<label for="template-contactform-message">Message <small>*</small></label>
											<textarea class="required sm-form-control" id="template-contactform-message"
												name="template-contactform-message" rows="6" cols="30"></textarea>
										</div>
										<div class="col-12 form-group d-none">
											<input type="text" id="template-contactform-botcheck"
												name="template-contactform-botcheck" value="" class="sm-form-control" />
										</div>
										<div class="col-12 form-group">
											<button name="submit" type="submit" id="submit-button" tabindex="5"
												value="Submit" class="button button-3d m-0">Submit Comment</button>
										</div>
									</div>
									<input type="hidden" name="prefix" value="template-contactform-">
								</form>
							</div>
						</div>

						<div class="col-lg-6 min-vh-50">
							<div class="card topmargin overflow-hidden" style="border:none">
								<div class="card-body">
									<h4>Opening Hours</h4>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit reprehenderit
										voluptates.</p>
									<ul class="iconlist mb-0">
										<li><i class="icon-time color"></i> <strong>Mondays-Fridays:</strong> 10AM to
											7PM</li>
										<li><i class="icon-time color"></i> <strong>Saturdays:</strong> 11AM to 3PM</li>
										<li><i class="icon-time text-danger"></i> <strong>Sundays:</strong> Closed</li>
									</ul>
									<i class="icon-time bgicon"></i>
								</div>
							</div>
						</div>

						<div class="row col-mb-50">
							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-map-marker2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Get Direction<span class="subtitle">Check In<br>Google Map</span></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-phone3"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Speak to<br> Us<span class="subtitle">(+91)9092780007</span></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-instagram"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Follow<br>Us<span class="subtitle">2.3M Followers</span></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-facebook2"></i></a>
									</div>
									<div class="fbox-content">
										<h3>Follow<br>Us<span class="subtitle">2.3M Followers</span></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3 " style="display:none">
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
@endsection		
		