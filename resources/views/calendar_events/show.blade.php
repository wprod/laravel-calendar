@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Show </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="#">
                <div class="form-group">
                    <label for="nome">ID</label>
                    <p class="form-control-static">{{$calendar_event->id}}</p>
                </div>
                <div class="form-group">
                    <label for="title">TITLE</label>
                    <p class="form-control-static">{{$calendar_event->title}}</p>
                </div>
                <div class="form-group">
                    <label for="start">START</label>
                    <p class="form-control-static">{{$calendar_event->start}}</p>
                </div>
                <div class="form-group">
                    <label for="end">END</label>
                    <p class="form-control-static">{{$calendar_event->end}}</p>
                </div>
                <div class="form-group">
                    <label for="is_all_day">IS_ALL_DAY</label>
                    <p class="form-control-static">{{$calendar_event->is_all_day}}</p>
                </div>
                <div class="form-group">
                    <label for="background_color">BACKGROUND_COLOR</label>
                    <p class="form-control-static">{{$calendar_event->background_color}}</p>
                </div>
            </form>


            <a class="btn btn-default" href="{{ route('eventIndex') }}">Back</a>
            <a class="btn btn-warning" href="{{ route('eventEdit', $calendar_event->id) }}">Edit</a>
            <form action="#/$calendar->id" method="DELETE" style="display: inline;"
                  onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>
        </div>
    </div>


@endsection