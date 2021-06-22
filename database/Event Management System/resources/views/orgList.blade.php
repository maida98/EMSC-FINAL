@extends('layouts.app')

@section('content')

    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background-color: #3964B7;">
                        {{-- <strong class="card-title">{{ $participant->event->title }} Participants</strong> --}}
                        <strong class="card-title text-white">ORGANIZERS</strong>
                    </div>
                    <div class="card-body">
                    <table id="example" class="display nowrap" style="width:100%">
                            <thead style="background-color: #3964B7;" class="text-white text-center">
                            <tr>
                                <th>Name</th>
                                <th>Reg No</th>
                                <th>Phone Number</th>
                                <th>Event Name</th>
                            </tr>
                            </thead>
                            <tbody class="text-center">
                            <input type="hidden" value = {{$societies}} name="societies">
                            @foreach($societies as $society)
                                @foreach($society->events as $event)

                                    @foreach($event->user as $user)
                                        <tr>

{{--                                                                                    <td>{{$event->user->society}}</td>--}}
                                            <td>{{$user->name}}</td>
                                            <td>{{ $user->reg_no}}</td>
                                            <td>{{ $user->phone}}</td>
                                            <td>{{ $event->title}}</td>
                                        </tr>
                                        @endforeach

                                @endforeach
                            @endforeach
                            {{--                            @foreach ($organisers as $organiser)--}}

                            {{--                            @if ($organiser->event)--}}
                            {{--                            <tr>--}}
                            {{--                                <td>{{ $organiser-> name}}</td>--}}
                            {{--                                <td>{{ $organiser-> reg_no}}</td>--}}
                            {{--                                <td>{{ $organiser-> phone}}</td>--}}
                            {{--                                <td>{{ $organiser-> event->title}}</td>--}}
                            {{--                            </tr>--}}
                            {{--                            @endif--}}
                            {{--                            @endforeach--}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
@endsection
