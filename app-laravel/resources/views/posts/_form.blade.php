@extends('layout');

@section('content')
    <div class="container py-5">
        <form action="{{ route('posts.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text"  class="form-control" name="title" id="title" value="{{ old('title', $posts->title ?? null) }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" name="content" id="content" value="{{ old('content', $posts->content ?? null) }}">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>

        @if($errors->any())
        <div>
        <ul>
            @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif
        </form>
    </div>

@endsection
