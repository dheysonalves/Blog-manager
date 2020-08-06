@extends('layout');

@section('content')
    <form action="{{ route('posts.update', ['post' => $posts->id]) }}" method="post">
        @csrf
        {{-- Method spoofing, like an action request with this method --}}
        @method('PUT')

        @include('posts._form');

        <button type="submit">Create!</button>

    </form>
@endsection
