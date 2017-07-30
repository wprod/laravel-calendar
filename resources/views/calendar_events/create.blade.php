@extends('layout')

@section('content')
    <div class="page-header">
        <h1>CalendarEvents / Create </h1>
    </div>


    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('eventStore') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="title">Titre</label>
                    <input type="text" name="title" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="start">Début</label>
                    <input type="text" name="start" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="end">Fin</label>
                    <input type="text" name="end" class="form-control" value=""/>
                </div>
                <div class="form-group">
                    <label for="is_all_day">Journée complete : </label>
                    <label class="radio-inline"><input type="radio" value="1" name="is_all_day">Oui</label>
                    <label class="radio-inline"><input type="radio" value="0" name="is_all_day">Non</label>
                </div>
                <div class="form-group">
                    <label for="background_color">BACKGROUND_COLOR</label>
                    <input type="text" name="background_color" class="form-control" value=""/>
                </div>


                <a class="btn btn-default" href="{{ route('eventIndex') }}">Back</a>
                <button class="btn btn-primary" type="submit">Create</button>
            </form>
        </div>
    </div>


@endsection
