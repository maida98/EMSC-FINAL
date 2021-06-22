@extends('welcome')

@section('content')

            <!-- =================================event==================================== -->
            
            <form action="{{route('viewPartForm')}}" method="post">
                @csrf
                <input type="hidden" name="society" value="{{$society}}">
                @foreach($society->events as $oneEvent)
                <div class="container mt-5">
            <div class="card">
  <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>{{$oneEvent->title}}</b></h3>
  <div class="card-body">
    <h4><b>Description:</b></h4>
    <h5 class="card-title">{{$oneEvent->description}}</h5>
    <hr>
    <h4><b>Rules:</b></h4>
    <h5 class="card-title">{{$oneEvent->rules}}</h5>
                            <!-- right side of the card -->
                           
                                <div class="register">
                                    <button class="btn btn-info"  type="submit"
                                        name="eventId" value="{{$oneEvent->id}}">PARTICIPATE NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </form>
           
            <!-- =================================END event==================================== -->
<!-- extra work -->


    
<!-- extra work end -->

       @endsection
