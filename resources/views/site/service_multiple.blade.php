@extends('site.app')
@section('content')

<section id="page-title">
    <div class="container clearfix">
        <h1>Our Services</h1>
        <span>Description of service</span>
    </div>
</section>
<section id="content">
    <div class="content-wrap pb-0">
        <div class="container clearfix">
            <div class="grid-filter-wrap">

               
            </div>
        </div>

        <div id="portfolio" class="portfolio row grid-container gutter-20 has-init-isotope" data-layout="fitRows">
            @for($i=1; $i<=12; $i++)    
            <article class="portfolio-item col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                <div class="grid-inner">
                   
                    <div class="portfolio-image">
                        <a href="{{ route('service', 'decor') }}">
                            <img style="height:200px" src="{{  asset('web/images/banner/banner' . $i . '.jpg') }}" alt="Open Imagination">
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="{{ route('service', 'decor') }}">Car Decor</a></h3>
                    </div>
                </div>
            </article>
          
            @endfor    
           

        </div>
    </div>
    <div class="line" style="padding-bottom: 20px; margin-bottom:20px;"></div>
</section>
@endsection