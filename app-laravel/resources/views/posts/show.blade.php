@extends('layout')

@section('content')
    <div class="container py-5">
        <div class="alert alert-success" role="alert">
        The post was created!
        </div>
         <h1 class="display-4"> {{ $posts->title }}</h1>
        <p class="lead">
            {{ $posts->content }}
        </p>
        <ul class="list-unstyled">
            <li> Added {{ $posts->created_at->diffForHumans() }}</li>
            <li> {{ (new Carbon\Carbon())->diffInMinutes($posts->created_at) }}</li>
            @if ((new Carbon\Carbon())->diffInMinutes($posts->created_at))
            <li> <strong>Post One!</strong></li>
            @endif
            </ul>
    </div>


@endsection('content')
