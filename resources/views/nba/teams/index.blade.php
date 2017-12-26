@extends('layouts.master')

@section('content')
    <div class="container">
        @if ($teams)
        <h1>Teams index</h1>
            <ul>
            @foreach ($teams as $team)
                <li>

                <a href="/nba/teams/{{ $team->id }}"> <h4>{{ $team->name}}</h4> </a>
                

                </li>
            @endforeach
            </ul>
        @endif
    </div>
@endsection