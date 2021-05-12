<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        $participants = DB::table('users')->where('group', 'Participante')->count();
        $events = DB::table('events')->where('user_id', $user->id)->count();
        $activities = DB::table('activities')->join('events', 'events.id', '=', 'activities.event_id')->where('events.user_id', $user->id)->count();
        return view('admin.home', [
            'user' => $user,
            'participants' => $participants,
            'events' => $events,
            'activities' => $activities
        ]);
    }
}
