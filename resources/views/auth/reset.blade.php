<!-- resources/views/auth/reset.blade.php -->
@extends('master')
@section('content')

<form method="POST" action="/password/reset">
    {!! csrf_field() !!}
    <input type="hidden" name="token" value="{{ $token }}">

    <div class="form-group">
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="form-group">
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div>
        <button type="submit" class="btn btn-primary">
            Reset Password
        </button>
    </div>
</form>
@endsection