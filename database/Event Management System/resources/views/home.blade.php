@extends('layouts.app')

@section('content')
<div class="animated fadeIn">
    <!-- Widgets  -->
    <div class="row justify-content-center">
        {{-- <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text">$<span class="count">23569</span></div>
                                    <div class="stat-heading">cash</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            

        <div class="col-lg-4 col-md-6">
           
            <div class="box mb-5">
                <div class="our-services gra speedup">
                    <div class="icon"> <img src="/images/123.png" height="50"> </div>
                    <h4><b>Organizers</b></h4>
                    <div class="stat-text"><span class="count">3435</span></div>
                    
                    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="box mb-5">
                <div class="our-services gra1 speedup">
                    <div class="icon"> <img src="/images/events.png" height="50"> </div>
                    <h4><b>Events</b></h4>
                    <div class="stat-text"><span class="count">349</span></div>
                    
                    
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6">
        <div class="box mb-5">
                <div class="our-services gra2 speedup">
                    <div class="icon"> <img src="/images/students.png" height="50"> </div>
                    <h4><b>Students</b></h4>
                    <div class="stat-text"><span class="count">2986</span></div>
                    
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /Widgets -->
    <!--  Traffic  -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-back">
                <div class="card-body">
                    <h4 class="box-title">Participants </h4>
                </div>
                <div class="row">
                    <div class="col-lg">
                        <div class="card-body">
                            <!-- <canvas id="TrafficChart"></canvas>   -->
                            <div id="traffic-chart" class="traffic-chart"></div>
                        </div>
                    </div>

                </div> <!-- /.row -->
                
            </div>
        </div><!-- /# column -->
    </div>
    <!--  /Traffic -->
    <div class="clearfix"></div>
    <!-- Orders -->
    <div class="orders">
        <div class="row">
            <div class="col-xl-12">
                <div class="card rounded">
                    <div class="card-body rounded mb-4" style="background-color: #4C9EDC;">
                        <h4 class="box-title text-white">EVENTS SUMMARY </h4>
                    </div>
                    @role('society_head')
                    <div class="card-body--">
                        <div class="table-stats order-table ov-h">

                        <table id="example" class="display nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th class="serial  text-white text-center" style="background-color: #3964B7;">#</th>
                                       
                                        <th class=" text-white text-center" style="background-color: #3964B7;">Event Name</th>
                                        <th class=" text-white text-center" style="background-color: #3964B7;">Participants</th>
                                        <th class=" text-white text-center" style="background-color: #3964B7;">Status</th>
                                    </tr>
                                </thead>
                                <tbody >
                                    @if($events)
                                    @php
                                    $i = 1;
                                    @endphp
                                    @foreach ($events as $event)


                                    <tr >
                                        <td class="serial bg-white text-center">{{$i++}}.</td>
                                       
                                        <td class="bg-white text-center"> <span class="name">{{$event->title}}</span> </td>
                                        <td class="bg-white text-center"><span class="count">{{$event->participationForms->count()}}</span></td>
                                        <td class="bg-white text-center">
                                            <span class="badge badge-complete">Complete</span>
                                        </td>
                                    </tr>

                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                    @endrole
                    @role('organiser')
                    <div class="card-body--">
                        <div class="">

                        <table id="example" class="display nowrap" style="width:100%">
                                <thead class="text-white text-center" style="background-color: #3964B7;">
                                    <tr>
                                        <th class="serial">#</th>
                                       
                                        <th>Event Name</th>
                                        <th>Participants</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($events)
                                    @php
                                    $i = 1;
                                    @endphp

                                    @foreach($events as $event)

                                    
                                    <tr class="text-center">
                                        <td class="serial">{{$i++}}.</td>
                                        
                                        <td> <span class="name">{{$event->title}}</span> </td>
                                        <td><span class="count">{{$event->participationForms->count()}}</span></td>
                                        <td>
                                            <span class="badge badge-complete">In Progress</span>
                                        </td>
                                    </tr>

                                    @endforeach
                                    @endif

                                </tbody>
                            </table>
                        </div> <!-- /.table-stats -->
                    </div>
                    @endrole
               </div>
            </div> <!-- /.col-lg-8 -->


<!-- my table -->

<!-- my table end -->

<!-- 

            <div class="col-xl-4" style="visibility:hidden">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card br-0">
                            <div class="card-body">
                                <div class="chart-container ov-h">
                                    <div id="flotPie1" class="float-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    

                    <div class="col-lg-6 col-xl-12">
                        <div class="card bg-flat-color-3 " style="display:none">
                            <div class="card-body">
                                <h4 class="card-title m-0  white-color ">August 2018</h4>
                            </div>
                            <div class="card-body">
                                <div id="flotLine5" class="flot-line"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- /.col-md-4 -->
        </div>
    </div>

    <div class="row">
        <div class="col-md-11 col-lg-11">
            <div class="card bg-light text-dark">
                <div class="card-body">
                    <!-- <h4 class="box-title">Chandler</h4> -->
                    <div class="calender-cont widget-calender">
                        <div id="calendar"></div>
                    </div>
                </div>
            </div><!-- /.card -->
        </div>

        <div class="col-lg col-md" style="visibility:hidden">
            <div class="card ov-h">
                <div class="card-body bg-flat-color-2">
                    <div id="flotBarChart" class="float-chart ml-4 mr-4"></div>
                </div>
                <div id="cellPaiChart" class="float-chart"></div>
            </div><!-- /.card -->
        </div>

    </div>
    <!-- /Calender Chart Weather -->
    <!-- Modal - Calendar - Add New Event -->
    <div class="modal fade none-border" id="event-modal">
        <div class="modal-dialog">
            <div class="modal-content bg-dark text-white">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                        event</button>
                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                        data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#event-modal -->
    <!-- Modal - Calendar - Add Category -->
    <div class="modal fade none-border" id="add-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><strong>Add a category </strong></h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="control-label">Category Name</label>
                                <input class="form-control form-white" placeholder="Enter name" type="text"
                                    name="category-name" />
                            </div>
                            <div class="col-md-6">
                                <label class="control-label">Choose Category Color</label>
                                <select class="form-control form-white" data-placeholder="Choose a color..."
                                    name="category-color">
                                    <option value="success">Success</option>
                                    <option value="danger">Danger</option>
                                    <option value="info">Info</option>
                                    <option value="pink">Pink</option>
                                    <option value="primary">Primary</option>
                                    <option value="warning">Warning</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect bg-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                        data-dismiss="modal">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- /#add-category -->
</div>

<div class="col-xl-4" style="visibility:hidden">
                <div class="row">
                    <div class="col-lg-6 col-xl-12">
                        <div class="card br-0">
                            <div class="card-body">
                                <div class="chart-container ov-h">
                                    <div id="flotPie1" class="float-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

@endsection