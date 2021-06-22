@extends('layouts.app')

@section('content')

<!-- =================================ADD event form==================================== -->
<div class="container">
    <div class="card">
        <div class="card-header" style="background-color:#3964B7;">
            <h3><strong class="card-title text-white">{{$event->society->title}}</strong></h3>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div class="row">

                <div class="col-md">
                    <div id="pay-invoice">
                        <div class="card-body">

                            <form action="{{route('modifyEvent')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$event->id}}" name="event_id">
                                <div class="row">
                                    <div class="form-group has-success col-md">
                                        <label for="cc-ename" class="control-label mb-1">Event Name </label>
                                        <input value="{{$event->title}}" id="cc-name" name="eventName" ename="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the event name" autocomplete="cc-ename" aria-required="true" aria-invalid="false" aria-describedby="cc-ename" required>

                                    </div>
                                    <div class="form-group has-success col-md">
                                        <label for="cc-venue" class="control-label mb-1">Event Venue </label>
                                        <input value="{{$event->venue}}" id="cc-venue" name="venue" type="text" class="form-control cc-venue valid" data-val="true" data-val-required="Please enter the Venue" autocomplete="cc-venue" aria-required="true" aria-invalid="false" aria-describedby="cc-venue" required>

                                    </div>
                                </div>
                                <hr>
                                @php
                                $count = $event->user->count();
                                @endphp

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group has-success">
                                            <label for="cc-org1" class="control-label mb-1">Event Organizer 1</label>
                                            <input id="cc-org1" name="organizer1" type="text" class="form-control cc-org1 valid" data-val="true" data-val-required="Please enter the Event Organizer" autocomplete="cc-org1" aria-required="true" aria-invalid="false" aria-describedby="cc-org1" required value="{{$event->user[$count-2]->name}}">

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-success">
                                            <label for="cc-id1" class="control-label mb-1">Registration Number </label>
                                            <input id="cc-id1" name="reg1" type="text" class="form-control cc-id1 valid" data-val="true" data-val-required="Please enter the registration number" autocomplete="cc-id1" aria-required="true" aria-invalid="false" aria-describedby="cc-id1" required value="{{$event->user[$count-2]->reg_no}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group has-success">
                                            <label for="cc-email1" class="control-label mb-1">Email </label>
                                            <input id="cc-email1" name="email1" type="email" class="form-control cc-email1 valid" data-val="true" data-val-required="Please enter the email" autocomplete="cc-email1" aria-required="true" aria-invalid="false" aria-describedby="cc-email1" required value="{{$event->user[$count-2]->email}}">

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-success">
                                            <label for="cc-phone1" class="control-label mb-1">Phone Number </label>
                                            <input id="cc-phone1" name="phone1" type="text" class="form-control cc-phone1 valid" data-val="true" data-val-required="Please enter the email" autocomplete="cc-phone1" aria-required="true" aria-invalid="false" aria-describedby="cc-phone1" required value="{{$event->user[$count-2]->phone}}">

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-6">

                                        <div class="form-group has-success">
                                            <label for="cc-org2" class="control-label mb-1">Event Organizer 2</label>
                                            <input id="cc-org2" name="organizer2" type="text" class="form-control cc-org2 valid" data-val="true" data-val-required="Please enter the Event Organizer" autocomplete="cc-org2" aria-required="true" aria-invalid="false" aria-describedby="cc-org2" required value="{{$event->user[$count-1]->name}}">

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-success">
                                            <label for="cc-id2" class="control-label mb-1">Registration Number </label>
                                            <input id="cc-id2" name="reg2" type="text" class="form-control cc-id2 valid" data-val="true" data-val-required="Please enter the registration number" autocomplete="cc-id2" aria-required="true" aria-invalid="false" aria-describedby="cc-id2" required value="{{$event->user[$count-1]->reg_no}}">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group has-success">
                                            <label for="cc-email2" class="control-label mb-1">Email </label>
                                            <input id="cc-email2" name="email2" type="email" class="form-control cc-email2 valid" data-val="true" data-val-required="Please enter the registration number" autocomplete="cc-email2" aria-required="true" aria-invalid="false" aria-describedby="cc-email2" required  value="{{$event->user[$count-1]->email}}">

                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group has-success">
                                            <label for="cc-phone2" class="control-label mb-1">Phone Number </label>
                                            <input id="cc-phone2" name="phone2" type="text" class="form-control cc-phone2 valid" data-val="true" data-val-required="Please enter the registration number" autocomplete="cc-phone2" aria-required="true" aria-invalid="false" aria-describedby="cc-phone2" required  value="{{$event->user[$count-1]->phone}}">

                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group has-success">
                                    <label for="cc-desc" class="control-label mb-1">Event Description </label>

                                    <textarea name="description" id="cc-desc" class="form-control" rows="5" required>{{$event->description}}</textarea>
                                </div>
                                <div class="form-group has-success">
                                    <label for="cc-rules" class="control-label mb-1">Event Rules </label>

                                    <textarea name="rules" id="cc-rules" class="form-control" rows="5" required>{{$event->rules}}</textarea>
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                        <i class="fa fa-check fa-lg"></i>&nbsp;
                                        <span id="payment-button-amount">MODIFY EVENT</span>
                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div> <!-- .card -->

</div>
<!-- =================================END add event form==================================== -->
@endsection
