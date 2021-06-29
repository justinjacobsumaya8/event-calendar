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

            $data_array = array();
            foreach($calendar_dates as $calendar_date) 
            {
                array_push($data_array, 
                    array(
                        'name' => $request->name,
                        'calendar_date_id' => $calendar_date->id,
                        'monday' => $calendar_date->monday,
                        'tuesday' => $calendar_date->tuesday,
                        'wednesday' => $calendar_date->wednesday,
                        'thursday' => $calendar_date->thursday,
                        'friday' => $calendar_date->friday,
                        'saturday'=> $calendar_date->saturday,
                        'sunday' => $calendar_date->sunday,
                        'date_from' => $request->date_from,
                        'date_to' => $request->date_to
                    )
                );
            }

            // Save data all at once
            CalendarDateEvent::insert($data_array);

            return response()->json([
                'data' => $calendar_dates,
                'message' => 'Event successfully saved.',
                'type' => 'success'
            ], 200);
        }

        return response()->json([
            'message' => 'No data available',
            'type' => 'warning'
        ], 422);
    }
}
