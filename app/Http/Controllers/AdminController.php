<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class AdminController extends Controller
{

    /**
     * Display the admin dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $participants = User::where('group', 'Participante')->count();
        $events = $user->events->count();
        $activities = DB::table('activities')->join('events', 'events.id', '=', 'activities.event_id')->where('events.user_id', $user->id)->count();
        return view('admin.home', [
            'user' => $user,
            'participants' => $participants,
            'events' => $events,
            'activities' => $activities
        ]);
    }

}
