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

    
    public function detail($id)
    {
//        $salary_amount = Salary::where('employee_id',$id)->first();
//        if(!$salary_amount -> salary_amount){
//            return redirect()->route('admin.salary.create');
//        }
        $user=User::find($id);
        $amt = $user->salary;
        $designation = Designation::find($id);
        if(!$designation){
            return redirect(route('designation.create'));
        }
        $des = $designation -> designation_type;
        $employee_name = $designation -> userss->username;

      //  dd($amt);
        return view('admin.managesalary.detail',compact('amt','des','employee_name'));
    }


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



    public function makepayment()
    {
//        $users = Managesalary::get()->first();
        return view('admin.managesalary.makepayment');
    }


    public function edit(Managesalary $managesalary)
    {
        //
    }


    public function update(Request $request, Managesalary $managesalary)
    {
        //
    }


    public function destroy(Managesalary $managesalary)
    {
        //
    }
}
