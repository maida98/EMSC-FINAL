@extends('layouts.app')

@section('content')
    {{$event->title}}
    @foreach ($event->user as $organizer)
        {{$organizer->name}}
        {{$organizer->reg_no}}
    @endforeach
    {{$event->venue}}
    {{$event->descripton}}
    {{$event->rule}}
@endsection
