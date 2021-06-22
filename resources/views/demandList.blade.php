@extends('layouts.app')

@section('content')
<!-- =================================Demand list==================================== -->

<div class="container">

    @role('society_head')
    @if(count($events)!=null)
    <form action="{{route('eventActions')}}" method="post">
        @csrf
        <input type="hidden" value="{{$events}}">
        @foreach($events as $event)
        <div class="container mt-5">
            <div class="card">
  <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>{{$event->title}} ( {{$event->society->title}} )</b></h3>
  <div class="card-body">
    <h4><b>VENUE</b></h4>
    <h5 class="card-title">{{$event->venue}}</h5>
                    <!-- right side of the card -->
                    

                        <div class="action mb-3">
                            <button class="btn btn-success " type="submit"
                                name="demandList" value="{{$event->id}}">Open DEMAND LIST</button>
                        </div>
                    
                </div>
            </div>
        </div>
        @endforeach
    </form>
    @else
        
<div class="card">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>No Demand List</b></h3>
         </div>
    @endif
    @endrole
    @role('student_affairs')
    @if(count($societies)!=null)
    <form action="{{route('eventActions')}}" method="post">
        @csrf
        <input type="hidden" value="{{$societies}}">
        @if($societies)
        @foreach($societies as $society)
            @foreach($society->events as $event)
                      <!-- start demo -->
            <div class="container mt-5">
            <div class="card">
  <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>{{$event->title}} ( {{$event->society->title}} )</b></h3>
  <div class="card-body">
    <h4><b>VENUE</b></h4>
    <h5 class="card-title">{{$event->venue}}</h5>
    
    <button class="btn btn-success" type="submit"
                                        name="demandList" value="{{$event->id}}">Open Demand List</button>

    <!-- button -->
   
    <!-- button end -->
  </div>
</div>
            </div>
            <!-- end demo -->
      
                @endforeach
        @endforeach
            @endif
    </form>
    @else
        
    <div class="card">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>No Demand List</b></h3>
         </div>
    @endif
    @endrole
    @role('organiser')
    @if(count($events)!=null)
    <form action="{{route('eventActions')}}" method="post">
        @csrf
        <input type="hidden" value="{{$events}}">
        @foreach($events as $event)
            <div class="container mt-5">
            <div class="card">
  <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>{{$event->title}}</b></h3>
  <div class="card-body">
    <h4><b>VENUE</b></h4>
    <h5 class="card-title">{{$event->venue}}</h5>
    
    <button class="btn btn-success" type="submit"
                                        name="demandList" value="{{$event->id}}">Open Demand List</button>

    <!-- button -->
   
    <!-- button end -->
  </div>
</div>
            </div>
        @endforeach
    </form>
    @else
        
<div class="card">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>No Demand List</b></h3>
         </div>
         @endif
    @endrole


</div>
<!-- =================================END Demand list==================================== -->
@endsection


<!-- start -->

<!-- end -->
