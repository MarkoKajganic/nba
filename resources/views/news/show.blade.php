@extends('layouts.master')

@section('content')
    <div class="container">

        @if ($news)
        <h1>{{ $news->title}}</h1>
        <p> {{ $news->user->id}}
        <p>{{ $news->content }}</p>


       
        @endif

@endsection