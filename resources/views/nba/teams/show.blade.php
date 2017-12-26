@extends('layouts.master')

@section('content')
    <div class="container">

        @if ($team)
        <h1>{{ $team->name}}</h1>
        <p>City : {{ $team->city }}</p>
        <p>Adress: {{ $team->adress }} </p>
        <p>Email: {{ $team->email }}</p>

        <h4> Player List: </h4>

        @foreach ($team->players as $player)

            <p>
            <a href="/nba/players/{{ $player->id }}">

             {{$player->first_name}} {{$player->last_name}}
             
            </p>

        @endforeach

        <br>
        @endif

@endsection