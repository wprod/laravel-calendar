@extends('layouts.app')

@section('content')
    {!! $calendar_events->calendar() !!}
@stop

@section('scripts')
    {!! $calendar_events->script() !!}
@stop