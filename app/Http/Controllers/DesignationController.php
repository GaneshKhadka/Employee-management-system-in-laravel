<?php

namespace App\Http\Controllers;

use App\Designation;
use App\User;
use Illuminate\Http\Request;
use Gate;
use Brian2694\Toastr\Facades\Toastr;

class DesignationController extends Controller
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
        $designations = Designation::paginate(15);
        return view('admin.designation.index',compact('designations'));
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
        $users = User::all();
        return view('admin.designation.create',compact('users'));
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
            'designation' => 'required',
        ]);
        $designation = new Designation();
        $designation -> employee_id = $request -> employee_name;
        $designation -> designation_type = $request -> designation;
        $designation -> save();
        Toastr::success('Designation successfully added!','Success');
        return redirect()->route('designation');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function show(Designation $designation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $designation = Designation::find($id);
        return view('admin.designation.edit',compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $request -> validate([
            'designation' => 'required',
        ]);
        $designation = Designation::find($id);
        $designation -> designation_type = $request -> designation;
        $designation -> save();
        Toastr::success('Designation successfully updated!','Updated');
        return redirect()->route('designation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Designation  $designation
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $designation = Designation::find($id);
        $designation -> delete();
        Toastr::error('Designation successfully deleted!','Deleted');
        return redirect()->route('designation');
    }
}
