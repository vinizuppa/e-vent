<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use App\Models\Activity;
use App\Models\Event;
use App\Models\Subscription;
use App\Models\User;

class AdminController extends Controller
{

    /**
     * Display the admin dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        if (Auth::user()->group == 'Participante') {
            return view('admin.home', [
                'subscriptions' => Subscription::where('user_id', Auth::user()->id)
                    ->orderBy('status')
                    ->orderBy('created_at')
                    ->paginate(6)
            ]);
        } else {
            $user = User::find(Auth::user()->id);
            $participants = User::where('group', 'Participante')->count();
            $organizers = User::where('group', 'Organizador')->count();
            $events = Event::count();
            $activities = Activity::count();
            $subscriptions = Subscription::count();
            $subsChart = [
                ['Aguardando pagamento', Subscription::where('status', 'Aguardando pagamento')->count()],
                ['Pago', Subscription::where('status', 'Pago')->count()]
            ];
            return view('admin.home-admin', [
                'user' => $user,
                'participants' => $participants,
                'organizers' => $organizers,
                'events' => $events,
                'activities' => $activities,
                'subscriptions' => $subscriptions,
                'subsChart' => $subsChart
            ]);
        }
    }

    /**
     * Display configurations menu
     *
     * @return \Illuminate\Http\Response
     */
    public function configs ()
    {
        return view('admin.config');
    }

    /**
     * Display subscriptions menu
     *
     * @return \Illuminate\Http\Response
     */
    public function subscriptions()
    {
        return view('admin.subscriptions', [
            'events' => Event::orderBy('end_date', 'desc')->orderBy('start_date')->paginate(6)
        ]);
    }

    /**
     * Display activities menu
     *
     * @return \Illuminate\Http\Response
     */
    public function activities()
    {
        return view('admin.activities', [
            'events' => Event::orderBy('end_date', 'desc')->orderBy('start_date')->paginate(6)
        ]);
    }

}
