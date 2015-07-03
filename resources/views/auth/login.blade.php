<!-- resources/views/auth/login.blade.php -->
@extends('master')
@section('content')
<form method="POST" action="/auth/login">
    {!! csrf_field() !!}

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="form-group">
        <label><input type="checkbox" name="remember" class="checkbox-inline"> Remember Me</label>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Login</button>
    </div>

    <div class="form-group">
    <a href="{{ url('password/email') }}">Forgot your password?</a>
    </div>
</form>
@endsection