<!-- resources/views/auth/login.blade.php -->
@extends('master')
@section('content')
<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <label>Confirm Password</label>
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
@endsection