<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;
use Brian2694\Toastr\Facades\Toastr;

class CalendarController extends Controller
{
    public function index()
    {
        $events = Calendar::all();
        $event = [];

        foreach ($events as $row){
//            $enddate = $row->end_date."24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'color'=>$row->color,
                ]
            );
        }
        $calendar =  \Calendar::addEvents($event);
//        return view('eventpage',compact('events','calendar'));
        return view('admin.calendar.event',compact('events','calendar'));
    }

    public function add()
    {
        return view('admin.calendar.addevent');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required'
        ]);
        $events = new Calendar();
        $events -> title = $request -> title;
        $events -> color = $request -> color;
        $events -> start_date = $request -> start_date;
        $events -> end_date = $request -> end_date;
        $events -> save();
        Toastr::success('Event successfully added!','Success');
        return redirect('calendar');
    }
}
