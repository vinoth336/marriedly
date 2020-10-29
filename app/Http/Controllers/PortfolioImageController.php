<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateServiceRequest;
use App\Portfolio;
use App\PortfolioImage;
use App\Services;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PortfolioImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolioImages = PortfolioImage::OrderBy('sequence')->get();

        return view('portfolio.list', ['portfolios' => $portfolioImages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $services = $this->getServices()->orderBy('sequence')->get();

        return view('portfolio.create', ['services' => $services]);
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

            $this->savePortfolioImage(new PortfolioImage(), $request);

            DB::commit();

            return redirect()->route('portfolio_images.index')->with('status', 'Created Successfully');

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
    public function edit(PortfolioImage $service)
    {
        return view('portfolio_images.edit')->with(['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateServiceRequest $request, PortfolioImage $service)
    {
        DB::beginTransaction();
        try{

            $this->savePortfolioImage($service, $request);

            DB::commit();

            return redirect()->route('portfolio_images.index')->with('status', 'Created Successfully');

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
    public function destroy(PortfolioImage $service)
    {
        DB::beginTransaction();

        try{

            $this->unlinkPortfolioImageBanner($service->banner);

            $service->delete();

            DB::commit();

            return redirect()->route('portfolio_images.index')->with('status', 'Created Successfully');

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
                $service = PortfolioImage::find($id);
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
     * Create or Update the PortfolioImage in storage
     *
     * @param PortfolioImageRequest $request
     * @param PortfolioImage $PortfolioImage
     * @return PortfolioImage
     */
    public function savePortfolioImage(PortfolioImage $service, $request)
    {
        $this->storeBanner($service, $request);
        $service->name = $request->input('name');
        $service->description = $request->input('description');
        $service->service_id = $request->input('service');
        $service->sequence = $service->sequence ?? Portfolio::count() + 1;
        $service->save();
        return $service;
    }


    public function getServices()
    {

        return new Services;
    }


}
