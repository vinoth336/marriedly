<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceRequest;
use App\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::OrderBy('sequence')->get();

        return view('services.list', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateServiceRequest $request)
    {

        DB::beginTransaction();
        try{

            $this->saveServices(new Services(), $request);

            DB::commit();

            return redirect()->route('services.index')->with('status', 'Created Successfully');

        } catch(Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response(['status' => "Can't Store Data"], 500);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $service)
    {
        return view('services.edit')->with(['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateServiceRequest $request, Services $service)
    {
        DB::beginTransaction();
        try{

            $this->saveServices($service, $request);

            DB::commit();

            return redirect()->route('services.index')->with('status', 'Created Successfully');

        } catch(Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response(['status' => "Can't Store Data"], 500);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $service)
    {
        DB::beginTransaction();

        try{

            $this->unlinkServicesBanner($service->banner);

            $service->delete();

            DB::commit();

            return redirect()->route('services.index')->with('status', 'Created Successfully');

        } catch(Exception $e) {
            DB::rollBack();
            Log::error($e->getMessage());
            return response(['status' => "Can't Delete Data"], 500);
        }

    }

    public function updateSequence(Request $request)
    {

        DB::beginTransaction();

        try
        {
            foreach($request->input('sequence') as $sequence => $id) {
                $service = Services::find($id);
                $service->sequence = $sequence + 1;
                $service->save();
            }
        } catch(Exception $e) {
            DB::rollback();
            Log::error($e->getMessage());
            response(['status' => 'Cannot Update Sequence'], 500);
        }

        DB::commit();

        return response(['message' => 'Updated Successfully'], 200);
    }


     /**
     * Create or Update the Services in storage
     *
     * @param ServicesRequest $request
     * @param Services $Services
     * @return Services
     */
    public function saveServices(Services $service, $request)
    {
        $this->storeBanner($service, $request);
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->sequence = $service->sequence ?? Services::count() + 1;
        $service->save();
        return $service;
    }


    /**
     * Store uploaded Services banner
     *
     * @param $Services
     * @param $request
     * @return bool
     */
    public function storeBanner($service, $request)
    {
        if ($request->has('banner')) {
            // Get banner file
            $banner = $request->file('banner');

            $name = null;

            if($banner){
                $name = time() . '_' . preg_replace("/[^a-zA-Z]+/", "", $request->input('name')) . "." . $banner->getClientOriginalExtension();

                $banner->move(public_path('web/images/banner'), $name);
            }

            $this->unlinkServicesBanner($service->getOriginal('banner'));

            $service->banner = $name;

            return true;
        } elseif ($request->input('remove_banner')) {

            $this->unlinkServicesBanner($service->getOriginal('banner'));

            return true;
        }

        return false;
    }

    public function unlinkServicesBanner($banner)
    {
        $existing_file = public_path('web/images/banner/') . $banner;

        if (file_exists($existing_file)) {
            @unlink($existing_file);
            return true;
        } else {
            info(" File is not Exists " . $existing_file);
        }

        return false;
    }


}
