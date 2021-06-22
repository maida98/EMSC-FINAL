<?php

namespace App\Http\Controllers;

use App\Event;
use App\ParticipationForm;
use App\Society;
use App\User;
use Illuminate\Http\Request;

class ParticipantController extends Controller
{


    public function viewParticipationForm(Request $request)
    {
        $event = Event::find($request->eventId);
        return view('viewPartForm', compact('event'));
    }

    public function addParticipant(Request $request)
    { 
        $event = Event::find($request->eventId);
        $society = $event->society;
        $participant = new ParticipationForm();
        $participant->std_name = $request->stdName;
        $participant->std_reg = $request->stdreg;
        $participant->std_phone = $request->phoneNo;

        $event->participationForms()->save($participant);
        $participant->save();
        return redirect(route('welcomeScreen'));
    }

        public function participantslist(){

            $user = auth()->user();
            $events = $user->event;
//            $participants = $event->participationForms;
            // return $participants;
            return view('participantsList',compact('events'));
        }
        public function organiserList(){
            $user = auth()->user();
            $organisers = null;
            if($user->hasRole('student_affairs'))
            {
                $societies = Society::all();

//                $users = User::all();
//               foreach ($users as $user)
//               {
//                   if($user->hasRole('organiser'))
//                   {
//                       $organisers = $user;
//                   }
//               }
                return view('orgList',compact('societies'));

            }
            else{
                $society = $user->society;
                $organisers = $society->users;
                $societies = Society::all();


                // return $participants;
                return view('orgList',compact('organisers','societies'));
            }

        }
        public function societiesList(){
            $societies = Society::all();

            // return $participants;
            return view('societiesList',compact('societies'));
        }
}
