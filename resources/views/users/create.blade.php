@extends('layouts.main')

@section('content')
    <h1>Create User</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'UsersController@store']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
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
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>
    {!! Form::close() !!}

    {{--  @include('includes.form_error')  --}}

@stop