<!-- resources/views/auth/password.blade.php -->
@extends('master')
@section('content')
<form method="POST" action="/password/email">
    {!! csrf_field() !!}

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            Send Password Reset Link
        </button>
    </div>
</form>
@endsection