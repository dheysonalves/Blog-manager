@extends('layout')
@section('content')
<div class="container">
    <form action="{{ route('register')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" name="name" class="form-control" required value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control" required value="{{ old('email')}}">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="password_confirmation">Retyped Password</label>
            <input type="password" name="password_confirmation" class="form-control" required >
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
@endsection('content')
