<?php

namespace App\Http\Controllers;

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Registration;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show registration form
    public function create($id)
    {
        $event = Event::findOrFail($id);
        return view('registrations.create', compact('event'));
    }

    // Store registration
    public function store(Request $request)
    {
        $request->validate([
            'event_id' => 'required|exists:events,id',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        Registration::create($request->all());

        return redirect('/')->with('success', 'You are registered for the event!');
    }
}
