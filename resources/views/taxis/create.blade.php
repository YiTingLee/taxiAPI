@extends('layouts.main')

@section('content')
    <h1>Create Taxi</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'TaxisController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('car_id', 'Car_Id:') !!}
            {!! Form::text('car_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lat', 'Lat:') !!}
            {!! Form::text('lat', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('lng', 'Lng:') !!}
            {!! Form::text('lng', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create Taxi', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    {{--  @include('includes.form_error')  --}}

@stop