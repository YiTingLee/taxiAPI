@extends('layouts.main')

@section('content')
    <h1>Edit User</h1>

    <div class="row">
        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['UsersController@update', $user->id]]) !!}
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
                {!! Form::submit('Edit User', ['class'=>'btn btn-primary col-sm-6']) !!}
            </div>
        {!! Form::close() !!}

        {!! Form::open(['method'=>'DELETE', 'action'=>['UsersController@destroy', $user->id]]) !!}
            <div class="form-group">
                {!! Form::submit('Delete User', ['class'=>'btn btn-danger col-sm-6']) !!}
            </div>
        {!! Form::close() !!}
    </div>

    {{--  <div class="row">
        @include('includes.form_error')
    </div>  --}}
@stop