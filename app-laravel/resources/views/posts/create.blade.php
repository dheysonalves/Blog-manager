@extends('layout')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        @include('posts._form');

        <button type="submit">Create!</button>
    </form>
@endsection
