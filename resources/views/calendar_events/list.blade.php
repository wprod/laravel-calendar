@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents</h1>
    </div>


    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Evenement</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Journée</th>
                    <th>BCouleur</th>
                    <th class="text-right">Actions</th>
                </tr>
                </thead>

                <tbody>

                @foreach($calendar_events as $calendar_event)
                    <tr>
                        <td>{{$calendar_event->id}}</td>
                        <td>{{$calendar_event->title}}</td>
                        <td>{{$calendar_event->start}}</td>
                        <td>{{$calendar_event->end}}</td>
                        <td>{{$calendar_event->is_all_day}}</td>
                        <td>{{$calendar_event->background_color}}</td>

                        <td class="text-right">
                            <a class="btn btn-primary" href="{{ route('eventShow', $calendar_event->id) }}">View</a>
                            <a class="btn btn-warning " href="{{ route('eventEdit', $calendar_event->id) }}">Edit</a>
                            <form action="{{ route('eventDelete', $calendar_event->id) }}" method="POST" style="display: inline;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>

            <a class="btn btn-success" href="{{ route('eventCreate') }}">Create</a>
        </div>
    </div>


@endsection