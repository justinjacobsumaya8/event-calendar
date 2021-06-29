<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{CalendarDate, CalendarDateEvent};

class EventCalendarController extends Controller
{
    public function index() 
    {
        $dates = CalendarDate::with('events')->get();
        return response()->json($dates);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'date_from' => 'required',
            'date_to' => 'required'
        ]);

        $calendar_dates = CalendarDate::whereDate('date', '>=', $request->date_from)
                        ->whereDate('date', '<=', $request->date_to)
                        ->where(function ($query) use ($request){
                            
                            // Look for the same day value
                            if($request->monday) 
                            {
                                $query->where('monday', true);
                            }

                            if($request->tuesday) 
                            {
                                $query->orWhere('tuesday', true);
                            }

                            if($request->wednesday) 
                            {
                                $query->orWhere('wednesday', true);
                            }

                            if($request->thursday) 
                            {
                                $query->orWhere('thursday', true);
                            }

                            if($request->friday) 
                            {
                                $query->orWhere('friday', true);
                            }

                            if($request->saturday) 
                            {
                                $query->orWhere('saturday', true);
                            }

                            if($request->sunday) 
                            {
                                $query->orWhere('sunday', true);
                            }
                        })
                        ->get();

        if (count($calendar_dates) > 0) 
        {
            // Truncate all data in database to save only 1 event
            CalendarDateEvent::truncate();

            foreach($calendar_dates as $calendar_date) 
            {
                // Saving event
                $event = new CalendarDateEvent;
                $event->name = $request->name;
                $event->calendar_date_id = $calendar_date->id;
                $event->monday = $calendar_date->monday;
                $event->tuesday = $calendar_date->tuesday;
                $event->wednesday = $calendar_date->wednesday;
                $event->thursday = $calendar_date->thursday;
                $event->friday = $calendar_date->friday;
                $event->saturday = $calendar_date->saturday;
                $event->sunday = $calendar_date->sunday;
                $event->save();
            }
        }

        return response()->json([
            'data' => $calendar_dates,
            'message' => 'Event successfully saved.'
        ]);
    }
}
