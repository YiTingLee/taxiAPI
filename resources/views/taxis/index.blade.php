@extends('layouts.main')

@section('content')
    <h1>Taxis Page</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Taxi</th>
                <th>Car_Id</th>
                <th>Lat</th>
                <th>Lng</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if($taxis)
                @foreach($taxis as $taxi)
                    <tr>
                        <td>{{$taxi->id}}</td>
                        <td><a href="{{route('main.taxis.edit', $taxi->id)}}">{{$taxi->name}}</a></td>
                        <td>{{$taxi->car_id}}</td>
                        <td>{{$taxi->lat}}</td>
                        <td>{{$taxi->lng}}</td>
                        <td>{{$taxi->created_at->diffForhumans()}}</td>
                        <td>{{$taxi->updated_at->diffForhumans()}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@stop