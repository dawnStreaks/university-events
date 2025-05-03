<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class EventController extends Controller
{
    // Display all events
    public function index()
    {
        $events = Event::orderBy('start_time', 'asc')->get();
        return view('events.index', compact('events'));
    }

    // Show a form to create a new event
    public function create()
    {
        return view('events.create');
        // Event::create($request->only(['title', 'description', 'start_time', 'end_time', 'location']));

    }

    // Store a new event
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after_or_equal:start_time',
            'location' => 'required',
        ]);

        Event::create($request->all());

        return redirect('/')->with('success', 'Event created successfully!');
    }

    // Show a single event
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('events.show', compact('event'));
    }

    public function calendar() {
        return view('events.calendar');
    }
    
    public function getCalendarEvents() {
        $events = Event::where('start_time', '>=', now())->get();
    
        $formatted = $events->map(function ($event) {
            return [
                'title' => $event->title,
                'start' => Carbon::parse($event->start_time)->toIso8601String(),
                'end' => Carbon::parse($event->end_time)->toIso8601String(),
                'url' => route('events.show', $event->id), // optional if you want click to details
            ];
        });
    
        return response()->json($formatted);
    }
    
}

