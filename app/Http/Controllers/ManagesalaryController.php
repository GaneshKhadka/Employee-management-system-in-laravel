<?php

namespace App\Http\Controllers;


use App\Designation;
use App\Managesalary;
use App\Salary;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManagesalaryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('admin.managesalary.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Request $request)
    {
//        dd($request->allemployee());
        $salary_amount = Salary::where('employee_id',$request->employee_id)->first();
        $amt = $salary_amount -> salary_amount;
        $users = Designation::find($request->employee_id);
        $des = $users -> designation_type;
        $employee_name = $users -> userss->username;

      //  dd($amt);
        return view('admin.managesalary.detail',compact('amt','des','employee_name'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function salarylist()
    {
        $users = Managesalary::all();
        return view('admin.managesalary.salarylist',compact('users'));
    }

    public function store(Request $request)
    {
//        dd($request->all());

        $users = new Managesalary();
        $users -> employee_name = $request -> employee_name;
        $users -> designation_type = $request -> employee_designation;
        $users -> working_days = $request -> working_days;
        $users -> tax = $request -> tax_deduction;
        $users -> gross_salary = $request -> gross_salary;
//        dd($users);
        $users -> save();
        return redirect()->route('managesalary.salarylist');
//        return view('admin.managesalary.salarylist');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Managesalary  $managesalary
     * @return \Illuminate\Http\Response
     */
    public function makepayment()
    {

        return view('admin.managesalary.makepayment');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Managesalary  $managesalary
     * @return \Illuminate\Http\Response
     */
    public function edit(Managesalary $managesalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Managesalary  $managesalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Managesalary $managesalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Managesalary  $managesalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Managesalary $managesalary)
    {
        //
    }
}
