@extends('site.app')

@section('content')
<section id="page-title">
    <div class="container clearfix">
        <h1>Portfolio</h1>
        <span>Description of service</span>
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
                            <div class="w-100 mb-5 portfolio-single-image masonry-thumbs grid-container grid-3"
                            data-big="3" data-lightbox="gallery">
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
@endsection
       