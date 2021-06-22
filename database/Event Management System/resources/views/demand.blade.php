@extends('layouts.app')

@section('content')
    <div class="container print">
        <div class="card print">
            <div class="card-header text-white" style="background-color: #3964B7;">
                <h3><strong class="card-title">{{$event->title}}</strong></h3>
            </div>
            <div class="card-body">
                <!-- Credit Card -->
                <div class="row">

                    <div class="col-md">
                        <div id="pay-invoice">
                            <div class="card-body">
                                @role('organiser')
                                @if($event->demandList)
                                    @if(($event->demandList->pending != null) && ($event->demandList->forward != null))

                                        <style>
                                            .card{
                                                pointer-events: none;
                                            }
                                        </style>
                                    @endif
                                    @if(($event->demandList->pending == null) && ($event->demandList->forward == null))

                                        <style>
                                            .card{
                                                pointer-events: all;
                                            }
                                        </style>
                                    @endif
                                @endif
                                <div class="card">

                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-md">
                                                <div id="pay-invoice">
                                                    <div class="card-body text-white" style="background-color: #4C9EDC;">

                                                        <form action="{{route('UpDemandList')}}" method="post">
                                                            @csrf
                                                            <input type="hidden" value="{{$event->id}}" name="eventId">
                                                            @php
                                                                $count = $event->user->count();
                                                            @endphp
                                                            <div class="row">
                                                                <div class="col-md" style=""><h4><strong>Organizers:</strong></h4>
                                                                {{$event->user[$count-2]->name}} ({{$event->user[$count-2]->reg_no}}) <br> {{$event->user[$count-1]->name}} ({{$event->user[$count-1]->reg_no}})</div>
                                                            </div>
                                                            <br>
                                                            <div class="form-group has-success">
                                                                <label for="cc-dmnd" class="control-label mb-1"><h4><b>Items Description:</b> </h4></label>


                                                            </div>

                                                            <textarea name="demand" id="dmnd" rows="5" class="form-control mb-3" required>{{ $event->demandList ? $event->demandList->demands : '' }}</textarea>

                                                            <div>
                                                                <button id="payment-button" type="submit" class="btn btn-lg btn-success btn-block">
                                                                    <i class="fa fa-gear fa-lg"></i>&nbsp;
                                                                    <span id="payment-button-amount">Update Demand List</span>
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
                                @endrole
                                @if($event->demandList != null)
                                    @role('society_head')
                                    <div class="card text-white" style="background-color: #4C9EDC;">
                                    <div class="card-body">
                                    <form action="{{route('UpDemandList')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$event->id}}" name="eventId">
                                        @php
                                            $count = $event->user->count();
                                        @endphp

                                        <div class="row">
                                            <div class="col-md" >
                                                <h4><strong>Organizers:</strong></h4>
                                                <ul style="list-style-type:square">
                                                <li class="ml-4">{{$event->user[$count-2]->name}} ({{$event->user[$count-2]->reg_no}})</li>
                                                
                                               <li class="ml-4"> {{$event->user[$count-1]->name}} ({{$event->user[$count-1]->reg_no}})</li>
                                               
                                                </ul>
                                                </div>
                                        </div>
                                        <div class="form-group has-success">
                                            <label for="cc-dmnd" class="control-label mb-1"><h4><b>ITEMS DESCRIPTION</b></h4></label>


                                        </div>
                                        <textarea name="demand" id="dmnd" rows="5" class="form-control mb-3"
                                                  required>{{ $event->demandList->demands}}</textarea>

                                        <div>
                                            <button id="payment-button" name="societyHeadUpdateButton" value="{{$event->id}}"
                                                    type="submit" class="btn btn-lg btn-block text-white" style="background-color: #3964B7;">
                                                <i class="fa fa-gear fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">UPDATE DEMAND LIST</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                            <button id="payment-button" name="societyHeadAcceptButton" value="{{$event->id}}"
                                                    type="submit" class="btn btn-lg btn-success btn-block">
                                                <i class="fa fa-check fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">ACCEPT AND FORWARD</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                        </div>
                                    </form>
                                    </div>
                                    </div>
                                    @endrole
                                    @role('student_affairs')
                                    <div class="container card text-white" style="background-color:#4C9EDC;">
                                    <div class=" card-body">
                                    <form action="{{route('UpDemandList')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$event->id}}" name="eventId">
                                        @php
                                            $count = $event->user->count();
                                        @endphp

                                        <div class="row">
                                       
                                            <div class="col-md- ml-3">
                                            
                                                <h4 class=""><strong>ORGANIZERS</strong></h4>
                                                {{$event->user[$count-2]->name}}({{$event->user[$count-2]->reg_no}})
                                                <br>
                                                {{$event->user[$count-1]->name}} ({{$event->user[$count-1]->reg_no}})</div>
                                        </div>
                                        <br>
                                        <div class="form-group has-success">
                                            <label for="cc-dmnd" class="control-label mb-1"><h4><b>ITEMS DESCRIPTION</b></h4></label>


                                        </div>
                                        <textarea name="demand" id="dmnd" rows="5"
                                                  class="form-control mb-3">{{ $event->demandList->demands}}</textarea>

                                        <div>
                                            <style>
                                                @media print {
                                                    *> {
                                                        display: none !important
                                                    }

                                                    .print {
                                                        display: block;
                                                        margin: 0;
                                                    }

                                                    .printHide {
                                                        display: none
                                                    }

                                                }
                                            </style>
                                            <button id="payment-button" name="approve" value="{{$event->id}}" type="submit"
                                                    onclick="window.print()" class="btn btn-lg btn-success btn-block printHide">
                                                <i class="fa fa-check fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">APPROVE</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                            <button id="payment-button" name="reject" value="{{$event->id}}" type="submit"
                                                    class="btn btn-lg btn-danger btn-block printHide">
                                                <i class="fa fa-times fa-lg"></i>&nbsp;
                                                <span id="payment-button-amount">REJECT</span>
                                                <span id="payment-button-sending" style="display:none;">Sending…</span>
                                            </button>
                                            </div>
                                        
                                    </form>
                                    </div>
                                    </div>
                                    @endrole


                                @else
                                    <p>There is no demand list of {{$event->title}} at this moment</p>
                                @endif


                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div> <!-- .card -->
    </div>

@endsection
