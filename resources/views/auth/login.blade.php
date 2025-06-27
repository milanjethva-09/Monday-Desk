@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}" class="mx-auto" style="max-width:400px;">
    @csrf
    <h2 class="mb-3">Login</h2>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input id="email" type="email" class="form-control" name="email" required autofocus>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
