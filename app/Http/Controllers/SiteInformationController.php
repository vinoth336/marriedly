<?php

namespace App\Http\Controllers;

use App\SiteInformation;
use Illuminate\Http\Request;

class SiteInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('faqs.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function show(SiteInformation $siteInformation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteInformation $siteInformation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SiteInformation $siteInformation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteInformation  $siteInformation
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteInformation $siteInformation)
    {
        //
    }
}
