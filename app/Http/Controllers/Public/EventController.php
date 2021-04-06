<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventController extends Controller
{
    public function search(Request $request)
    {
        // Eventos atuais (data não passou)
        //$events = Event::where('end_date', '<=', date('Y-m-d'))->where('name', 'like', '%' . $request->search . '%')->get();
        $search = $request->search;
        $events = Event::where('name', 'like', '%' . $search . '%')->get();
        return view('public.events.search', [
            'events' => $events,
            'search' => $search
        ]);
    }

    public function detail(Event $event)
    {
        return view('public.events.detail', [
            'event' => $event
        ]);
    }
}
