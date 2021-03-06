@extends('layout')
@section('content')
<div class="container">
    <form action="{{ route('register')}}" method="POST" novalidate>
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required value="{{ old('name') }}">

        @if ($errors->has('name'))
            <span class="invalid-feedback">
                <strong>
                    {{ $errors->first('name') }}
                </strong>
            </span>
        @endif
        </div>
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
            <label for="password_confirmation">Retyped Password</label>
            <input type="password" name="password_confirmation" class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : ''  }}" required>
            @if ($errors->has('password_confirmation'))
            <span class="invalid-feedback">
                <strong>
                    {{ $errors->first('password_confirmation') }}
                </strong>
            </span>
        @endif
        </div>
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>
@endsection('content')
