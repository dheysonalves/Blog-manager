@extends('layout')

@section('content')
    <p>
        Post was Deleted {{ $posts->created_at->diffForHumans() }}
    </p>

@endsection('content')
