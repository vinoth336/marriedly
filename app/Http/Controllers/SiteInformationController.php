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
        $siteInformation = SiteInformation::first();

        return view('site_information.create')->with(['siteInformation' => $siteInformation]);
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
        $siteInformation = SiteInformation::first();
        $siteInformation->site_name = $request->input('site_name');
        $siteInformation->meta_description = $request->input('meta_description');
        $siteInformation->facebook_id = $request->input('facebook_id');
        $siteInformation->instagram_id = $request->input('instagram_id');
        $siteInformation->phone_no = $request->input('phone_no');
        $siteInformation->email_id = $request->input('email_id');
        $siteInformation->lat = $request->input('lat');
        $siteInformation->long = $request->input('long');
        $siteInformation->working_hours_mon_fri = $request->input('working_hours_mon_fri');
        $siteInformation->working_hours_sat = $request->input('working_hours_sat');
        $siteInformation->working_hours_sun = $request->input('working_hours_sun');
        $this->storeLogo($siteInformation, $request);



        $siteInformation->save();


        return redirect()->route('site_information.index');

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


     /**
     * Store uploaded Services Logo
     *
     * @param $siteInformations
     * @param $request
     * @return bool
     */
    public function storeLogo($siteInformation, $request)
    {
        if ($request->has('logo')) {
            // Get Logo file
            $logo = $request->file('logo');

            $name = null;

            if($logo){
                $name = time() . '_' . preg_replace("/[^a-zA-Z]+/", "", $request->input('name')) . "." . $logo->getClientOriginalExtension();

                $logo->move(public_path('web/images/logo'), $name);
            }

            $this->unlinkServicesLogo($siteInformation->logo);

            $siteInformation->logo = $name;

            return true;
        } elseif ($request->input('remove_logo')) {

            $this->unlinkServicesLogo($siteInformation->logo);

            return true;
        }

        return false;
    }

    public function unlinkServicesLogo($logo)
    {
        $existing_file = public_path('web/images/logo/') . $logo;

        if (file_exists($existing_file)) {
            @unlink($existing_file);
            return true;
        } else {
            info(" File is not Exists " . $existing_file);
        }

        return false;
    }

}
