@extends('layouts.app')

@section('content')

<div class="animated fadeIn">
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="background-color: #3964B7;">
                    {{-- <strong class="card-title">{{ $participant->event->title }} Participants</strong> --}}
                    <strong class="card-title text-white" >SOCIETIES</strong>
                </div>
                <div class="card-body">
                <table id="example" class="display nowrap" style="width:100%">
                        <thead style="background-color: #3964B7;" class="text-white text-center">
                            <tr>
                                <th>Society</th>
                                <th>Description</th>
                                <th>Events</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($societies as $society)
                            <tr>
                                <td>{{ $society-> title}}</td>
                                <td>{{ $society-> description}}</td>
                                <td style="text-align:center">
                                @foreach ($society->events as $event)
                                <p>{{$event->title}}</p>
                                <hr>
                                @endforeach
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div><!-- .animated -->
@endsection
