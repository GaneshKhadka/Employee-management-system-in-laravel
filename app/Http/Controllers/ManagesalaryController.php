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
//        dd($request->all());
        $users = Salary::find($request->employee_id);
        $amt = $users -> salary_amount;
        $users = Designation::find($request->employee_id);
        $des = $users -> designation_type;
      //  dd($amt);
        return view('admin.managesalary.detail',compact('amt','des'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
//        $request -> validate([
//           'salary_amount' => 'required'
//        ]);
//        $sal = new Salary();
//        $sal -> username = $request -> employee_name;
//        $sal -> salary_amount = $request -> salary_amount;
//        $sal -> save();
//      return redirect()->route('managesalary');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Managesalary  $managesalary
     * @return \Illuminate\Http\Response
     */
    public function show(Managesalary $managesalary)
    {
        //
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
