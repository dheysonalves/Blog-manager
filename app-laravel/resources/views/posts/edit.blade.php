@extends('layout');

@section('content')
    <form action="{{ route('posts.update', ['post' => $posts->id]) }}" method="post">
        @csrf
        @method('PUT')

        @include('posts._form');

        <button type="submit">Create!</button>

    </form>
@endsection
