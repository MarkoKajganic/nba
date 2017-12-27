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

            <h4>Post a comment</h4>
    <form method="POST" action="{{ route('comments-post', ['team_id' => $team->id]) }}">

        {{ csrf_field() }}


        <div class="form-group">
            <label for="text">Comment:</label>
            <textarea class="form-control" id="content" name="content"></textarea>
            
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>

        @endforeach

        <br>
        @endif

@endsection