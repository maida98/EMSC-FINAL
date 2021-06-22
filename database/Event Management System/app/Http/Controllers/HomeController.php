<?php

namespace App\Http\Controllers;

use App\Event;
use App\Society;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();
//        if($user->roles->name == 'student_affairs');
        if( $user->hasRole('student_affairs'))
        {
            $societies = Society::all();

            return view('home', compact('societies'));
        }

    elseif($user->hasRole('organiser'))
    {
        $events = $user->event;
//        $events = Event::where('user_id', $user->id)->get();
//        return $events;

        return view('home', compact('events'));

    }
    else
    {
        $society = $user->society;
        $events = $society->events;
        return view('home', compact('events'));
    }
}

}
