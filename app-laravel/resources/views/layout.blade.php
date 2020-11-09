<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel BlogPosts</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">Laravel Blog</a>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.create') }}">Add blog post</a>
            </li>
        </ul>
    </nav>



    @if(session()->has('status'))
    <p>
        {{ session()->get('status') }}
    </p>
    @endif
    @yield('content')

    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
