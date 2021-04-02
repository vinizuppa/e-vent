<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Event;

class HomeController extends Controller
{
    public function index()
    {
        // Eventos atuais (data não passou)
        //$events = Event::where('start_date', '>=', date('Y-m-d'))->paginate(6);
        // Todos os eventos cadastrados
        $events = Event::paginate(6);
        return view('public.home', [
            'events' => $events
        ]);

    }

    public function search(Request $request)
    {
        // Eventos atuais (data não passou)
        //$events = Event::where('start_date', '>=', date('Y-m-d'))->where('name', 'like', '%' . $request->search . '%')->get();
        $events = Event::where('name', 'like', '%' . $request->search . '%')->get();
        return view('public.events.search', [
            'events' => $events,
            'search' => $request->search
        ]);
    }
}
