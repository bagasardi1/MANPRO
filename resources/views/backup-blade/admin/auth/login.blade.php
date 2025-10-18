@extends('admin.layouts.app')

@section('content')
<div class="container mt-5" style="max-width: 400px;">
    <h3 class="text-center mb-4">Login Admin</h3>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.login') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input 
                type="email" 
                class="form-control" 
                id="email" 
                name="email" 
                value="{{ old('email') }}" 
                required 
                autofocus
            >
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input 
                type="password" 
                class="form-control" 
                id="password" 
                name="password" 
                required
            >
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>
@endsection
