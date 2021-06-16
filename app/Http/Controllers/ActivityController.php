<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Event;

class ActivityController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        $activities = $event->activities()->paginate(5);
        return view('admin.activity.index', [
            'activities' => $activities,
            'event' => $event
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function create(Event $event)
    {
        return view('admin.activity.create', [
            'event' => $event
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date|after_or_equal:' . $event->start_date,
            'end_date' => 'required|date|after:start_date|before:' . $event->end_date,
            'type' => 'required|string',
            'place' => 'required|string',
            'vacancies' => 'nullable|numeric',
            'instructions' => 'nullable|string',
            'responsible' => 'required|string'
        ]);
        $event->activities()->create([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'type' => $request->type,
            'place' => $request->place,
            'vacancies' => $request->vacancies,
            'instructions' => $request->instructions,
            'responsible' => $request->responsible
        ]);
        return redirect()->route('events.activities.index', $event);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event, Activity $activity)
    {
        return view('admin.activity.show', [
            'event' => $event,
            'activity' => $activity
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event, Activity $activity)
    {
        return view('admin.activity.edit', [
            'event' => $event,
            'activity' => $activity
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activity $activity)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'start_date' => 'required|date|after_or_equal:now',
            'end_date' => 'required|date|after:start_date',
            'type' => 'required|string',
            'place' => 'required|string',
            'vacancies' => 'string',
            'instructions' => 'string',
            'responsible' => 'required|string'
        ]);
        $activity->update([
            'name' => $request->name,
            'description' => $request->description,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'type' => $request->type,
            'place' => $request->place,
            'vacancies' => $request->vacancies,
            'instructions' => $request->instructions,
            'responsible' => $request->responsible
        ]);
        return redirect()->route('events.activities.index', $activity->event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Activity $activity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $activity)
    {
        $activity->delete();
        return redirect()->route('events.activities.index', $activity->event);
    }
}
