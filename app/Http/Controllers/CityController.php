<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;
use Gate;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $cities = City::paginate(15);
        return view('admin.city.index',compact('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        return view('admin.city.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $request -> validate([
            'city_name' => 'required',
            'zip_code' => 'required'
        ]);
        $city = new City();
        $city -> city_name = $request -> city_name;
        $city -> zip_code = $request -> zip_code;
        $city -> save();
        Toastr::success('City successfully added!','Success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $city = City::find($id);
        return view('admin.city.edit',compact('city'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $request -> validate([
           'city_name' => 'required',
           'zip_code' => 'required'
        ]);
        $city = City::find($id);
        $city -> city_name = $request -> city_name;
        $city -> zip_code = $request -> zip_code;
        $city -> save();
        Toastr::success('City successfully updated!','Success');
        return redirect()->route('city');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $city = City::find($id);
        $city -> delete();
        Toastr::error('City successfully deleted!','Deleted');
        return redirect()->route('city');
    }
}
