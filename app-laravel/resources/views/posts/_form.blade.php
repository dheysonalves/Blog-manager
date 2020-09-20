@extends('layout');

@section('content')
     <form action="{{ route('posts.store') }}" method="post">
        @csrf
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $posts->title ?? null) }}">
            {{-- <span style="color:red;">{{ $errors->title }}</span> --}}
        </div>

        <div>
            <label for="content">Content</label>
            <input type="text" name="content" id="content" value="{{ old('content', $posts->content ?? null) }}">
            {{-- <span style="color:red;">{{ $errors->content }}</span> --}}
        </div>
        <button type="submit">Create!</button>

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
@endsection
