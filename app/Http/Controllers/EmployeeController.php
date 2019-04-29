<?php

namespace App\Http\Controllers;

use App\City;
use App\Employee;
use App\Salary;
use Gate;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class EmployeeController extends Controller
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
        $employees = Employee::paginate(5);
        return view('admin.employee.index',compact('employees'));
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
        $empcities = City::all();
        $salamounts = Salary::all();
        return view('admin.employee.create',compact('empcities','salamounts'));
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
            'fname' => 'required',
            'lname' => 'required',
            'image' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'jdate' => 'required',
            'jtype' => 'required',
            'salary' => 'required',
            'age' => 'required',
        ]);

        $employee = new Employee();
        $employee -> first_name = $request -> fname;
        $employee -> last_name = $request -> lname;
       // $employee -> image = $request -> image;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('uploads/gallery/', $filename);
            $employee->image = $filename;
        }else{
//            return $request;
            $employee->image = '';
        }
        $employee -> email = $request -> email;
        $employee -> phone = $request -> phone;
        $employee -> address = $request -> address;
        $employee -> gender = $request -> gender;
        $employee -> dob = $request -> dob;
        $employee -> join_date = $request -> jdate;
        $employee -> job_type = $request -> jtype;
        $employee -> city = $request -> city;
        $employee -> salary = $request -> salary;
        $employee -> age = $request -> age;
        $employee -> save();
        Toastr::success('Employee successfully added!','Success');
        return redirect()->route('employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $employee = Employee::find($id);
        return view('admin.employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $request -> validate([
            'fname' => 'required',
            'lname' => 'required',
            'image' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'jdate' => 'required',
            'jtype' => 'required',
            'city' => 'required',
            'salary' => 'required',
            'age' => 'required',
        ]);
        $employee = Employee::find($id);
        $employee -> first_name = $request -> fname;
        $employee -> last_name = $request -> lname;
        if($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file -> move('uploads/gallery/', $filename);
            $employee->image = $filename;
        }else{
//            return $request;
            $employee->image = '';
        }
        $employee -> email = $request -> email;
        $employee -> phone = $request -> phone;
        $employee -> address = $request -> address;
        $employee -> gender = $request -> gender;
        $employee -> dob = $request -> dob;
        $employee -> join_date = $request -> jdate;
        $employee -> job_type = $request -> jtype;
        $employee -> city = $request -> city;
        $employee-> salary = $request -> salary;
        $employee -> age = $request -> age;
        $employee -> save();
        Toastr::success('Department successfully updated!','Updated');
        return redirect()->route('employee');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        if(!Gate::allows('isAdmin')){
            abort(401);
        }
        $employee = Employee::find($id);
        $employee -> delete();
        Toastr::error('Employee successfully deleted!','Deleted');
        return redirect()->route('employee');
    }
}
