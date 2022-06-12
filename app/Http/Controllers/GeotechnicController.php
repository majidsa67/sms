<?php

namespace App\Http\Controllers;

use App\Models\Geotechnic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeotechnicController extends Controller
{

    public function geotechnic()
    {

        return view('pages.geotechnic.create');

    }
    public function doGeotechnic()
    {


    }


    public function geotechnicResult()
    {
        return view('pages.geotechnic.index');

    }


    public function doGeotechnicResult()
    {

    }



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.geotechnic.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->only(
            'user_id',
            'map_order_registration_number',
            'total_building_area',
            'type_of_land',
            'total_number_of_floors',
            'occupancy_level_downstairs',
            'number_of_underground_floors',
            'guard_structure',
            'upload_and_cut_in_place',
            'in_well_vibration_test',
            'bedrock',
            'drilling_surcharge',
            'number_of_payment',

        );
        $inputs['user_id'] = Auth::user()->id;


        $result = Geotechnic::create($inputs);
        if ($result) {
            return back()->with('success', 'با موفقیت ارسال شد');
        } else {
            return back()->with('error');
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
        $query = Geotechnic::find($id);
        return view('pages.geotechnic.show', ['item' => $query]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $query = Geotechnic::where('id', $id)->first();
        return view('pages.geotechnic.edit', ['item' => $query]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $query = $request->only(
            'map_order_registration_number',
            'total_building_area',
            'type_of_land',
            'total_number_of_floors',
            'occupancy_level_downstairs',
            'number_of_underground_floors',
            'guard_structure',
            'upload_and_cut_in_place',
            'in_well_vibration_test',
            'bedrock',
            'drilling_surcharge',
            'number_of_payment',
        );

        Geotechnic::where('id', $id)->update($query);
        return back()->with('success', 'ویرایش با موفقیت انجام شد');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
