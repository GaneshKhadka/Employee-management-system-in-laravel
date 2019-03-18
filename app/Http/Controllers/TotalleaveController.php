<?php

namespace App\Http\Controllers;

use App\Totalleave;
use Illuminate\Http\Request;

class TotalleaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.totalleave.index');
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
     * @param  \App\Totalleave  $totalleave
     * @return \Illuminate\Http\Response
     */
    public function show(Totalleave $totalleave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Totalleave  $totalleave
     * @return \Illuminate\Http\Response
     */
    public function edit(Totalleave $totalleave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Totalleave  $totalleave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Totalleave $totalleave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Totalleave  $totalleave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Totalleave $totalleave)
    {
        //
    }
}
