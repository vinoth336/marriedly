<?php

namespace App\Http\Controllers;

use App\Enquiries;
use App\Http\Requests\EnquiryRequest;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class EnquiriesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('store');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiries = Enquiries::OrderBy('created_at')->get();

        return view('enquiries.list', ['enquiries' => $enquiries]);
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
    public function store(EnquiryRequest $request)
    {
        DB::beginTransaction();

        try{

            Enquiries::create(
                [
                    'name' => $request->input("name"),
                    'email' => $request->input("name"),
                    'phone_no' => $request->input("name"),
                    'subject' => $request->input("name"),
                    'message' => $request->input("name"),
                    'status' => 'Pending',
                ]
            );

            DB::commit();

            return response(['status' => 'Updated Successfully'], 200);

        } catch( Exception $e) {
            Log::error('Enquiry Form Error ' . $e->getMessage() );
            DB::rollback();

            return response(['status' => 'Sorry Something Went Wrong'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Enquiries $enquiries)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enquiries $enquiries)
    {
        $enquiries->status = $request->input('status');
        $enquiries->save();

        return response(['message' => 'Updated Successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enquiries $enquiry)
    {
        $enquiry->delete();

        return redirect()->route('enquiries.index')->with('status', 'Removed Successfully');
    }
}
