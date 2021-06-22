@extends('layouts.app')


@section('content')
@role('society_head')
@if(count($events)!=null)
<input type="hidden" value="{{$events}}">
<!-- =================================event==================================== -->
<form action="{{route('eventActions')}}" method="post">
    @csrf
    <input type="hidden" value="{{$events}}">
    @foreach($events as $event)
    <div class="container mt-5">
    <div class="card">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>{{$event->title}} ( {{$event->society->title}} )</b></h3>
        <div class="card-body">
  
    <h4><b>VENUE</b></h4>
    <div class="ml-4">
    <ul style="list-style-type:square">

    <li><h5 class="card-title">{{$event->venue}}</h5></li>
    <ul>
    </div>
                <!-- right side of the card -->
                <div class="row">

                    <div class="action mb-3 col-md-3">
                        <button class="btn btn-success" style="width: 100%;"  type="submit"
                            name="demandList" value="{{$event->id}}">DEMAND LIST</button>
                    </div>
                  
                <div class="action mb-3 col-md-6">
                    <button class="btn btn-info" style="width: 100%;" type="submit" name="edit"
                        value="{{$event->id}}">VIEW/MODIFY EVENT DETAILS</button>
                </div>
                <div class="action mb-3 col-md-3">
                    <button class="btn btn-danger " style="width: 100%;"  type="submit" name="delete"
                        value="{{$event->id}}" onclick="return confirm('Are you sure to delete this event?')">DELETE
                        EVENT</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    @endforeach
</form>

<!-- extra -->

<!-- extra end -->


<!-- =================================END event==================================== -->
@else
        
<div class="card">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>No Events Yet</b></h3>
         </div>
@endif
@endrole
@role('student_affairs')
@if(count($societies)!=null)
<form action="{{route('eventActions')}}" method="post">
    @csrf
    <input type="hidden" value="{{$societies}}">
    @foreach($societies as $society)
    @foreach($society->events as $event)
    <div class="container mt-5">
        

            <!-- card start -->
<!-- extra -->
<div class="card">
  <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>{{$event->title}} ( {{$event->society->title}} )</b></h3>
  <div class="card-body">
  
    <h4><b>VENUE</b></h4>
    <div class="ml-4">
    <ul style="list-style-type:square">

    <li><h5 class="card-title">{{$event->venue}}</h5></li>
    <ul>
    </div>
    
    

    <!-- button -->
   
    <!-- button end -->
 
<!-- end -->
            <!-- end card -->
               

                <!-- right side of the card -->
                <div 
                    >
                    <hr>
                    <h4><b>ORGANIZERS</b></h4>
                    <div class="eventsList ml-4">
                        <ul style="list-style-type:square">
                            @foreach($event->user as $org)
                            <li>{{$org->name}}</li>
                            @endforeach
                        </ul>
                    </div>

                </div>
            
    </div>
    </div>
</div>
    

    @endforeach
    @endforeach
</form>
@else
        
<div class="card">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>No Events Yet</b></h3>
         </div>
@endif
@endrole

@endsection