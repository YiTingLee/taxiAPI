@extends('layouts.main')

@section('content')
    <h1>Edit Taxi</h1>

    <div class="row">
        {!! Form::model($taxi, ['method'=>'PATCH', 'action'=>['TaxisController@update', $taxi->id]]) !!}
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
                {!! Form::submit('Edit Taxi', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['TaxisController@destroy', $taxi->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete Taxi', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>
        {!! Form::close() !!}
    </div>

    {{--  <div class="row">
        @include('includes.form_error')
    </div>  --}}
@stop