<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioImage;
use App\Services;
use App\SiteInformation;
use App\Slider;
use App\Testimonial;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $siteInformation = SiteInformation::first();
        $sliders = Slider::orderBy('sequence')->get();
        $services = Services::orderBy('sequence');
        $awesomeWorks = PortfolioImage::where('show_in_home_page', 1)
        ->orderBy('created_at', 'desc')->limit(12)->get();
        $testmonials = Testimonial::orderBy('created_at', 'desc')->get();

        return view('site.home', ['siteInformation' => $siteInformation,
        'sliders' => $sliders,
        'services' => $services,
        'awesomeWorks' => $awesomeWorks,
        'testmonials' => $testmonials
        ]);
    }

    public function services(Request $request, $service=null)
    {
        $siteInformation = SiteInformation::first();
        if($service) {
            return view('site.service_single', ['siteInformation' => $siteInformation]);
        } else {
            return view('site.service_multiple', ['siteInformation' => $siteInformation]);
        }


    }

    public function portfolio()
    {

        $siteInformation = SiteInformation::first();
        $portfolio = Portfolio::orderBy('sequence')->get();
        $portfolioImages = PortfolioImage::get();

        return view('site.portfolio',
        ['portfolio' => $portfolio,
        'portfolioImages' => $portfolioImages,
        'siteInformation' => $siteInformation
        ]);
    }

    public function testimonial()
    {

    }

    public function howWeWork()
    {

    }

    public function faqs()
    {
        $siteInformation = SiteInformation::first();

        return view('site.faqs', ['siteInformation' => $siteInformation]);
    }

    public function saveEnquiry()
    {

    }
}
