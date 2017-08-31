@extends('layouts.main')

@section('content')
    <h1>Users Page</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>User</th>
                <th>Lat</th>
                <th>Lng</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
        </thead>
        <tbody>
            @if($users)
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><a href="{{route('main.users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->lat}}</td>
                        <td>{{$user->lng}}</td>
                        <td>{{$user->created_at->diffForhumans()}}</td>
                        <td>{{$user->updated_at->diffForhumans()}}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@stop