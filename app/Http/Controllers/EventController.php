<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\Util;

use App\Models\Event;
use App\Models\Subscription;
use App\Models\User;

class EventController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::orderBy('end_date', 'desc')->orderBy('start_date')->paginate(6);
        return view('admin.event.index', [
            'events' => $events
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        return view('admin.event.show', [
            'event' => $event
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'registration_fee' => 'required|numeric|max:999.99',
            'start_date' => 'required|date|after_or_equal:now',
            'end_date' => 'required|date|after:start_date',
            'image' => 'nullable|image|max:2000'
        ]);
        $user = User::find(auth()->user()->id);
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '-img.' . $image->getClientOriginalExtension();        
            $imagePath = Storage::putFileAs('events', $image, $imageName, 'public');
        }
        $event = $user->events()->create([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
            'registration_fee' => $request->registration_fee,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image_name' => $imageName ?? '',
            'image_path' => $imagePath ?? ''
        ]);                
        return redirect()->route('events.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        return view('admin.event.edit', [
            'event' => $event
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'registration_fee' => 'required|numeric',
            'start_date' => 'required|date|after_or_equal:now',
            'end_date' => 'required|date|after:start_date',
            'image' => 'nullable|image|max:2000'
        ]);
        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = time() . '-img.' . $image->getClientOriginalExtension();            
            $imagePath = Storage::putFileAs('events', $image, $imageName, 'public');
            if ($event->image_path != '') {
                Storage::delete($event->image_path);
            }                              
        }                     
        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'address' => $request->address,
            'phone' => $request->phone,
            'registration_fee' => $request->registration_fee,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'image_name' => $imageName ?? $event->image_name,
            'image_path' => $imagePath ?? $event->image_path
        ]);        
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $event->delete();        
        Storage::delete($image->image_path);                        
        return redirect()->route('events.index');
    }

    /**
     * Search for event
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        // Eventos atuais (data não passou)
        //$events = Event::where('end_date', '<=', date('Y-m-d'))->where('name', 'like', '%' . $request->search . '%')->get();
        $search = $request->query('event');
        $events = Event::where('name', 'like', '%' . $search . '%')->get();
        return view('public.event.search', [
            'events' => $events,
            'search' => $search
        ]);
    }

    /**
     * Show event details - public
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Event $event)
    {
        $subscribed = Subscription::where('user_id', auth()->user()->id)
            ->where('event_id', $event->id)
            ->count() > 0 ? true : false;
        return view('public.event.detail', [
            'event' => $event,
            'subscribed' => $subscribed
        ]);
    }

    /**
     * Show subscription page - public
     * 
     * @return \Illuminate\Http\Response
     */
    public function subscribe(Event $event)
    {
        return view('public.event.subscribe', [
            'event' => $event
        ]);
    }
    
}
