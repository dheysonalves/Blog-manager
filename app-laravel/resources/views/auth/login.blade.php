@extends('layout')
@section('content')
<div class="container py-3">
    <form action="{{ route('login')}}" method="POST" novalidate>
        @csrf
        <div class="form-group">
            <label for="email">E-mail</label>
        <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : ''  }}" required value="{{ old('email')}}">
        @if ($errors->has('email'))
            <span class="invalid-feedback">
                <strong>
                    {{ $errors->first('email') }}
                </strong>
            </span>
        @endif
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : ''  }}" required>
            @if ($errors->has('password'))
            <span class="invalid-feedback">
                <strong>
                    {{ $errors->first('password') }}
                </strong>
            </span>
        @endif
        </div>
        <div class="form-group">
            <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : ''}}">
            <label for="remember" class="form-check-label">
                Remember me
            </label>
            </div>
        </div>

        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
@endsection('content')
