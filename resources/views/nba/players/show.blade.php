@extends('layouts.master')

@section('content')
    <div class="container">

        @if ($player)

        <h1>{{ $player->first_name}} {{$player->last_name}}</h1>
        <p>e-mail {{ $player->email }}</p>
        <a href="/nba/teams/{{ $player->team->id }}"> {{$player->team->name}} </a>
        
        @endif

@endsection