<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        return view('admin.calendar.event');
    }
}
