<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use App\Http\Requests\CreateEventRequest;
use Illuminate\Http\Request;


class CalendarController extends Controller
{


    public function index()
    {
        $eloquentEvent = CalendarEvent::all(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

        $calendar_events = \Calendar::addEvents($eloquentEvent);

        return view('calendar', compact('calendar_events'));
    }

    public function listEvent()
    {
        $calendar_events = CalendarEvent::all(); //EventModel implements MaddHatter\LaravelFullcalendar\Event

        return view('calendar_events.list', compact('calendar_events'));
    }

    public function create()
    {
        return view('calendar_events.create');
    }

    public function store(CreateEventRequest $request)
    {
        $calendar_event = new CalendarEvent();
        $calendar_event->title = $request->input("title");
        $calendar_event->start = $request->input("start");
        $calendar_event->end = $request->input("end");
        $calendar_event->is_all_day = $request->input("is_all_day");
        $calendar_event->background_color = $request->input("background_color");
        $calendar_event->save();
        return redirect()->route('eventIndex')->with('message', 'Item created successfully.');
    }

    public function show($id)
    {
        $calendar_event = CalendarEvent::findOrFail($id);
        return view('calendar_events.show', compact('calendar_event'));
    }

    public function edit($id)
    {
        $calendar_event = CalendarEvent::findOrFail($id);
        return view('calendar_events.edit', compact('calendar_event'));
    }

    public function update(Request $request, $event)
    {
        $calendar_event = CalendarEvent::findOrFail($event);
        $calendar_event->title = $request->input("title");
        $calendar_event->start = $request->input("start");
        $calendar_event->end = $request->input("end");
        $calendar_event->is_all_day = $request->input("is_all_day");
        $calendar_event->background_color = $request->input("background_color");
        $calendar_event->save();
        return redirect()->route('eventList')->with('message', 'Item updated successfully.');
    }

    public function destroy($event)
    {
        $calendar_event = CalendarEvent::findOrFail($event);
        $calendar_event->delete();
        return redirect()->route('eventList')->with('message', 'Item deleted successfully.');
    }


}
