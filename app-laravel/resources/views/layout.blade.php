<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <ul>
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('contact') }}">Contact</a></li>
        <li><a href="{{ route('posts.index') }}">Posts</a></li>
        <li><a href="{{ route('posts.create') }}">Add blog post</a></li>
    </ul>

    @if(session()->has('status'))
        <p>
            {{ session()->get('status') }}
        </p>
    @endif
    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
