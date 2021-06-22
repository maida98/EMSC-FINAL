@extends('layouts.app')

@section('content')

<div class="animated fadeIn">
    <div class="row">
        <input type="hidden" value="{{$events}}" name = "orgEvents">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{-- <strong class="card-title">{{ $participant->event->title }} Participants</strong> --}}
                    <strong class="card-title">Event Participants</strong>
                </div>
                <div class="card-body">
                <table id="example" class="display nowrap" style="width:100%">
                        <thead class="text-center" style="background-color: #3964B7;">
                            <tr style=" color: white">
                                <th>Name</th>
                                <th>Reg No</th>
                                <th>Phone Number</th>
                                <th>Event</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            @foreach($event->participationForms as $participant)

                                    <tr class="text-center">
                                        <td style="text-transform: uppercase">{{ $participant->std_name }}</td>
                                        <td>{{ $participant->std_reg }}</td>
                                        <td>{{ $participant->std_phone }}</td>
                                        <td style="text-transform: uppercase; color: green; font-weight: bold">{{ $participant->event->title }}</td>

                                    </tr>

                                @endforeach
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
@endsection
