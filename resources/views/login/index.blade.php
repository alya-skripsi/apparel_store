@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-md-6 my-2">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h2 class="text-start fw-bold">Sign In</h2>
        <p class="text-start">Sign in to your account to continue shopping.</p>
        <hr>
        <p class="text-start">Don't have an account? <a href="/registration" class="text-decoration-none">Register here</a>.</p>

        <form action="/login" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your email" value="{{ old('email') }}">
                <label for="email" class="form-label">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="password" name="password" placeholder="Your password" required>
                <label for="password" class="form-label">Password</label>
                <small><a href="#" class="mt-2 text-decoration-none">Forgot Password ?</a></small>
            </div>
            <button type="submit" class="btn-pri border-0">Login</button>
        </form>
    </div>
    <div class="col-md-6">
        <img src="image/login_img.webp" alt="login" class="img-fluid login_img rounded">
    </div>
</div>
@endsection