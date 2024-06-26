<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    //

    public function index()
    {
        $events = Event::all();
        return view('Reserve.reserve', compact('events'));
    }

    /**
     * Store a newly created event in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
            'dateStart' => 'required',
            'timeStart' => 'required',
            'dateEnd' => 'required',
            'timeEnd' => 'required',
            'locations'=> 'required',
            'price'=> 'required',
        ]);
        $userId = null;

    // Ensure the user is authenticated
    if (Auth::check()) {
        $userId = Auth::id();
    } else {
        // Handle unauthenticated user
        // For example, you might want to redirect them to the login page
        return redirect()->route('login')->with('error', 'Please log in to create events');
    }
        Event::create([
            "user_id" => $userId,
            "name" => $request->name,
            "descriptions" => $request->descriptions,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd,
            'locations'=> $request->locations,
            'price'=> $request->price,
        ]);

        return back()->with('success', 'Event created successfully!');
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'descriptions' => 'required',
            'dateStart' => 'required',
            'timeStart' => 'required',
            'dateEnd' => 'required',
            'timeEnd' => 'required',
            'locations'=> 'required',
            'price'=> 'required',
        ]);

        $event = Event::findOrFail($id);

        // Ensure the user owns the event
        if ($event->user_id != Auth::id()) {
            return back()->with('error', 'You are not authorized to update this event');
        }

        $event->update([
            "name" => $request->name,
            "descriptions" => $request->descriptions,
            "dateStart" => $request->dateStart,
            "timeStart" => $request->timeStart,
            "dateEnd" => $request->dateEnd,
            "timeEnd" => $request->timeEnd,
            'locations'=> $request->locations,
            'price'=> $request->price,
        ]);

        return back()->with('success', 'Event updated successfully!');
    }

    /**
     * Remove the specified event from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $event = Event::findOrFail($id);

        // Ensure the user owns the event
        if ($event->user_id != Auth::id()) {
            return back()->with('error', 'You are not authorized to delete this event');
        }

        $event->delete();

        return back()->with('success', 'Event deleted successfully!');
    }

    /**
     * Get the events for display in the calendar.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Event $event)
    {

        // return view('calender', compact('calender'));

        $events = Event::all()->map(function (Event $e) {

            $start = $e->dateStart . " " . $e->timeStart;
            $end = $e->dateEnd . " " . $e->timeEnd;

            return [
                "start" => $start,
                "end" => $end,
                "title" => $e->name,
                "color" => "#FF5733", // Set the color of the event
                "textColor" => "#FFFFFF", // Set the text color of the event
                // "color" => "#000", 
            ];
        });
        return response()->json([
            'events' => $events,
        ]);
    }
}
