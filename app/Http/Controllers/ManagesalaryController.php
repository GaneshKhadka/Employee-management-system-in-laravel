<?php

namespace App\Http\Controllers;


use App\Managesalary;
use Illuminate\Http\Request;

class ManagesalaryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.managesalary.index');
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
    public function store(Request $request)
    {
        //
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
