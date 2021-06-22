<?php

namespace App\Http\Controllers;

use App\DemandList;
use App\Event;
use App\Notifications\DemandListApproval;
use App\Notifications\DemandListNotification;
use App\Notifications\NotifyOrganiser;
use App\Notifications\DemandListReject;
use App\Society;
use App\User;
use App\Ticket;
use Illuminate\Http\Request;
// use App\Notification;
use Illuminate\Support\Facades\Notification;

class EventController extends Controller
{
    public function viewAddEventForm()
    {
        // societies k id by request lani hen
        $user = auth()->user();
        $society = $user->society;
        return view('addEventForm', compact('society'));
    }

    public function addEvent(Request $request)
    {
        //lalallaal
        $society = Society::find($request->society);
        $event = new Event();
        $event->title = $request->eventName;
        $event->venue = $request->venue;
        $event->save();

        if($request->organizer1)
        {
            $user = new User();
            $user->name = $request->organizer1;
            $user->reg_no = $request->reg1;
            $user->email = $request->email1;
            $user->phone = $request->phone1;

            $user->password = bcrypt('password');
            $society->users()->save($user);
            $user->save();
            $user->assignRole('organiser');
            $event->user()->save($user);

            $user->notify(new NotifyOrganiser($event));
            // Notification::send($user, new NotifyOrganiser($event));

//            $user->notify(new NotifyOrganiser());
//            foreach ($user->notifications as $notification)
//            {
//                echo $notification->type;
//            }

        }
        if($request->organizer2)
        {
            $user = new User();
            $user->name = $request->organizer2;
            $user->reg_no = $request->reg2;
//            $user->email = $request->email2;
            $user->phone = $request->phone2;

            $user->password = bcrypt('password');
            $society->users()->save($user);
            $user->save();
            $user->assignRole('organiser');
            $event->user()->save($user);
            $user->notify(new NotifyOrganiser($event));
            // Notification::send($user, new NotifyOrganiser($event));

        }
        $event->save();
        $society->events()->save($event);
        return redirect()->back();
    }

    public function allSocietiesPage()
    {
        $societies = Society::all();
        return view('allSocieties', compact('societies'));
    }
    public function showEventPage(Request $request)
    {
        $society = Society::find($request->societyId);
        return view('eventList',compact('society'));
    }

    public function eventActions(Request $request)
    {
        if($request->view != null)
        {
            $event = Event::find($request->view);
            return view('viewEventDetails',compact('event'));
        }
        elseif($request->edit != null)
        {

            $event = Event::find($request->edit);

            return view('modifyEvent',compact('event'));
        }
        elseif($request->delete != null){

            $event = Event::find($request->delete);
            $society = $event->society;
            foreach($event->user as $user){
//                $user->event()->dissociate($event);
                $user->event_id = null;
            }
            $event->save();
            $event->delete();
            return redirect()->back();
        }
        elseif($request->demandList != null){
            $event = Event::find($request->demandList);

            return view('demand',compact('event'));
        }
    }

    public function viewEventList()
    {

        $user = auth()->user();
        $events = Event::all();

        if($user->hasRole('student_affairs'))
        {
            // if($events->count() != null)
            // {
            //     $societies = Society::all();
            //     return view('viewEvents',compact('societies'));

            // }
            // else
            // {
            //     return "No events yet";

            // }


            $societies = Society::all();
            return view ('viewEvents', compact('societies'));

        }

        else
        {
            $societies = Society::all();

            $society = $user->society;
            $events = Event::all();
            // if(count($events) != null)
            // {
                $events = $society->events;
                return view('viewEvents',compact('events', 'societies'));
            // else
            // {
            //     return "No events yet";

            // }
        }


    }

    public function modifyEvent(Request $request){
        $event = Event::find($request->event_id);
        $event->description = $request->description;
        $event->rules = $request->rules;
        $event->venue = $request->venue;
        $event->title = $request->eventName;
        $count = $event->user->count();
        $event->user[$count-2]->name = $request->organizer1;
        $event->user[$count-2]->reg_no = $request->reg1;
        $event->user[$count-1]->name = $request->organizer2;
        $event->user[$count-1]->reg_no = $request->reg2;
        $event->save();
        return redirect(route('eventList'));
    }

    public function demandList(){
        $user = auth()->user();
        if($user->hasRole('organiser')){
            $events = $user->event;
            return view('demandList',compact('events'));

        } else if($user->hasRole('society_head')){
            $society = $user->society;
            $events = $society->events;
            // return $events;
            return view('demandList',compact('events'));
        }
        elseif($user->hasRole('student_affairs'))
        {
            $societies = Society::all();
            $allEvents = null;
//            foreach ($socities as $society)
//            {
//                foreach ($society->events as $event)
//                {
//                    $allEvents = $event;
//                }
//            }
//            return $socities;
            return view('demandList', compact('societies'));
        }

    }
    public function UpDemandList(Request $request)
    {
        $event = Event::find($request->eventId);
        $demandList = null;
        $user = auth()->user();
//        return $request;
        if(($event->demandList != null) && ($user->hasRole('organiser')))
        {
            $demandList = $event->demandList;
            $demandList->demands = $request->demand;
            if($demandList->approve ==1)
            {
                $demandList->approve =0;
            }
            $demandList->pending = true;

            $demandList->save();
            $event->demandList()->save($demandList);

        }

        elseif($request->societyHeadAcceptButton != null) //accept and forward button
        {
            $demandList = $event->demandList;
            $demandList->pending = true;
            $demandList->forward = true;
            $demandList->demands = $request->demand;
            $demandList->save();
            $event->demandList()->save($demandList);  //notifi bhejni hy akmal
        }
        elseif ($request->societyHeadUpdateButton != null) //ye sai chal ra hy
        {
            $demandList = $event->demandList;
            $demandList->demands = $request->demand;
            $demandList->pending = true;
            $demandList->save();
            $event->demandList()->save($demandList); //notifi bhejni hy student ko

        }
        elseif($request->approve != null)
        {
            $demandList = $event->demandList;
            $demandList->demands = $request->demand;
            $demandList->pending = 0;
            $demandList->approve = 1;     //notifi bhejni hy student ko
            $demandList->forward = 0;
            $demandList->save();
            $event->demandList()->save($demandList);
            $society = $event->society;
            $societyHead = User::role('society_head')->where('society_id', $society->id)->get()->last();
            $societyHead->notify(new DemandListApproval($event));
            foreach($event->user as $org)
            {
                if($org->email != null)
                {
                    $organiser = $org;
                }
            }
            $organiser->notify(new DemandListApproval($event));

        }
        elseif($request->reject != null)
        {
            $demandList = $event->demandList;
            $demandList->demands = $request->demand;
            $demandList->pending = false;
            $demandList->approve = false;
            $demandList->reject = true; // notif bhejni hy student ko
            $demandList->save();
            $event->demandList()->save($demandList);
            $society = $event->society;
            $societyHead = User::role('society_head')->where('society_id', $society->id)->get()->last();
            $societyHead->notify(new DemandListReject($event));
            foreach($event->user as $org)
            {
                if($org->email != null)
                {
                    $organiser = $org;
                }
            }
            $organiser->notify(new DemandListReject($event));


        }
        elseif(($event->demandList == null) && ($user->hasRole('organiser')))
        {
            $demandList = new DemandList;

            $demandList->demands = $request->demand;
            $demandList->pending = true;
            $demandList->save();
            $event->demandList()->save($demandList);

        }
        $society = $event->society;
        $societyHead = User::role('society_head')->where('society_id', $society->id)->get()->last();
        $societyHead->notify(new DemandListNotification($event));
//        $societyHead = User::role('society_head')->get();

       $akmal = User::role('student_affairs')->get()->last();
       $akmal->notify(new DemandListNotification($event));

        return redirect(route('demandList'));
    }

    public function tickets()
    {
        return view('tickets');
    }
    public function insertTickets(Request $request) {
            $ticket = new Ticket();
            $ticket->quantity=$request->quantity;
            $ticket->Date_and_Time = $request->dt;
            $ticket->Event_Name = $request->ename;
            $ticket->save();
            return redirect()->back();
    }
    public function viewTickets()
    {
        $ticket= Ticket::all()->last();
            return view("viewTicket", compact('ticket'));
        

    }
    public function isdisable(Request $request)
    {
    $ticket=Ticket::find($request->ticket);
    $ticket->delete();
    return redirect(route('home'));
    }
}
