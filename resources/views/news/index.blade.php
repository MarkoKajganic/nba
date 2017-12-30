@extends('layouts.master')

@section('content')
    <div class="container">
        @if ($news)
        <h1>News index</h1>
            <ul>
            @foreach ($news as $vest)
                <li>

                   <a href="/news/{{$vest->id}}" <h4>{{ $vest->title }}</h4> </a>
                   
                

                </li>
            @endforeach
            </ul>
        @endif

        {{ $news->links() }}
    </div>
@endsection