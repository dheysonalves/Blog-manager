@extends('layout')

@section('content')
    <h1> {{ $posts->title }}</h1>
    <p>
        {{ $posts->content }}
    </p>
    <p>
        Added {{ $posts->created_at->diffForHumans() }}
    </p>
    {{ (new Carbon\Carbon())->diffInMinutes($posts->created_at) }}

    @if ((new Carbon\Carbon())->diffInMinutes($posts->created_at))
        <strong>Post One!</strong>
    @endif

@endsection('content')
