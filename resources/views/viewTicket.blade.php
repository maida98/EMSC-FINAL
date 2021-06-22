@extends('layouts.app')

@section('content')
@if($ticket)
<div class="card">
    <div class=" ">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>Tickets</b></h3>
    </div>
    <div class="container">
        <br>
        <form action="{{url('disable/enable')}}" method="POST">
        @csrf
            <input type="hidden" value={{$ticket->id}} name="ticket" />
        @for($i = 0; $i< $ticket->quantity ; $i++ )
        <div class="form-group">
            <label for="subject">Event Name</label>
            <input type="text" class="form-control"
                   id="subject" placeholder="" name="ename" value="{{$ticket->Event_Name}}">
        </div>



        <div class="form-group">
            <label for="msg"> Data/Time of Event </label>
            <input  type="datetime-local" class="form-control" id="v"
                    placeholder="Date/Time" name="dt" value="{{$ticket->Date_and_Time}}">
        </div>
            <br>
            <hr>
        @endfor
        <button type="submit" class="btn text-white bg-success"  onclick="window.print()"
        >Print</button>
        </form>
       
        <br>
    </div>
</div>
@else
<div class=" ">
        <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>No Tickets Yet</b></h3>
    </div>

@endif

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>


</script>
@endsection
