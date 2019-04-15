<?php

namespace App\Http\Controllers;


use App\Advancepayment;
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

    public function detail(Request $request,$id)
    {
//        if($request->startdate){
//            $advance=Advancepayment::where('date',$request->startdate)->get();
//        }else{
//            $advance = Advancepayment::all();
//        }

//        $from = date('2018-04-12');
//       $to = date('2019-04-16');
        $from = $request->input('startdate');
        $to = $request->input('enddate');
        if ( empty($to) && empty($from) ) {
            $advance = Advancepayment::all();
        } elseif ( empty($to) && ! empty($from) ) {
            $advance = Advancepayment::where('date', $from)->get();
            // or Advancepayment::where('date', '>', $from)->get(); depending upon your requirmeent
        } else {
            $advance = Advancepayment::whereBetween('date', [$from, $to])->get();
        }

        $designation = Designation::find($id);
        if(!$designation){
            return redirect(route('designation.create'));
        }
        $des = $designation -> designation_type;
        $user=User::find($id);
        $amt = $user->salary;
        $employee_name = $designation -> userss->username;
        return view('admin.managesalary.detail',compact('amt','des','employee_name','user','advance'));
    }

    public function salarylist()
    {
        $users = Managesalary::all();
        return view('admin.managesalary.salarylist',compact('users'));
    }

    public function store(Request $request)
    {
        $users = new Managesalary();
        $users -> employee_name = $request -> employee_name;
        $users -> designation_type = $request -> employee_designation;
        $users -> working_days = $request -> working_days;
        $users -> tax = $request -> tax_deduction;
        $users -> gross_salary = $request -> gross_salary;
        $users -> save();
        return redirect()->route('managesalary.salarylist');
    }

    public function makepayment()
    {
        return view('admin.managesalary.makepayment');
    }

    public function makeAdvance(Request $request)
    {
        $salaries = new Advancepayment();
        $salaries -> employee_id = $request -> employee_id;
        $salaries -> date = $request -> date;
        $salaries -> amount = $request -> amount;
        $salaries -> save();

        return redirect()->route('managesalary.detail', $request->employee_id);
    }

    public function search(Request $request){
        $data =User::where('username', 'LIKE',"%{$request->search}%")->paginate();
        return redirect()->route('managesalary.detail');
    }
}
