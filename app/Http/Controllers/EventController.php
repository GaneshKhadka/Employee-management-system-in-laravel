<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event()
    {
        $events=$this->getEventbyMonth(date('m'));
//        dd($events);
        return view('admin.calendar.event',compact('events'));
    }

    public function store(Request $request)
    {
//        dd($request->all);
        $request -> validate([
            'date' => 'required',
            'event' => 'required',
        ]);
        $event = new Event();
        $event -> date = $request -> date;
        $event -> event = $request -> event;
        $event -> description = $request -> description;
        $event ->save();
        return redirect()->route('event');
    }

    private function getEventbyMonth($month)
    {
        return Event::whereMonth('date',$month)->get();
    }
}
