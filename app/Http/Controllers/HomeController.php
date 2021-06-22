<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{

    /**
     * Show homepage with list of events
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::where('end_date', '>=', now())->orderBy('start_date', 'asc')->get();
        return view('public.home', [
            'events' => $events
        ]);
    }

}
