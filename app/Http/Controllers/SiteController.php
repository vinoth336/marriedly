<?php

namespace App\Http\Controllers;

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
        return view('site.home');
    }

    public function services(Request $request, $service=null)
    {
        if($service) {
            return view('site.service_single');
        } else {
            return view('site.service_multiple');
        }
    
        
    }   

    public function portfolio()
    {
        return view('site.portfolio'); 
    }

    public function testimonial()
    {

    }

    public function howWeWork()
    {

    }

    public function faqs()
    {
        return view('site.faqs');
    }

    public function saveEnquiry()
    {

    }
}
