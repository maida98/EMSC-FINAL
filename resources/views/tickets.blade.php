@extends('layouts.app')

@section('content')

    <div class="card">
        <div class=" ">
            <h3 class="card-header text-white" style="background-color: #3964B7;" ><b>Tickets</b></h3>
        </div>
        <div class="container">
            <br>
<form action={{route("issue-tickets")}} method= "POST">
@csrf
<div class="form-group">
                     <label for="subject">Event Name</label>
                          <input type="text" class="form-control"
                                 id="subject" placeholder="" name="ename">
                                                        </div>



<div class="form-group">
     <label for="msg"> Data/Time of Event </label>
          <input  type="datetime-local" class="form-control" id="v"
                  placeholder="Date/Time" name="dt">
                 </div>


                 <div class="form-group">
                     <label for="subject">Quantity</label>
                          <input type="number" class="form-control"
                                 id="subject" placeholder="" name="quantity">
                                                        </div>

              <button type="submit"  class="btn text-white bg-success"
                         >Submit</button>
                         </form>
            <br>
        </div>
    </div>
                 @endsection
