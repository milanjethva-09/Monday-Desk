@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('register') }}" class="mx-auto" style="max-width:400px;">
    @csrf
    <h2 class="mb-3">Register</h2>
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input id="name" type="text" class="form-control" name="name" required autofocus>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" class="form-control" name="email" required>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="form-label">Confirm Password</label>
        <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
</form>
@endsection
