@extends('layouts.main')
@section('content')
<div class="row align-items-center mt-5">
    <div class="col-lg-6">
        <img src="image/regist_img.webp" alt="Register" class="img-fluid rounded login_img">
    </div>
    <div class="col-12 col-lg-6">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <h1 class="text-start fw-bold">Sign Up</h1>
        <p class="text-start">Create your account to get started</p>
        <hr class="my-2">
        <p class="text-start">Already have an account? Please <a href="/login" class="text-decoration-none">Sign In</a>.</p>

        <form action="/registration" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your name" required value="{{ old('name')}}">
                <label for="name" class="form-label">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control @error('username') is-invalid
                @enderror" id="username" name="username" placeholder="Your username" required value="{{ old('username') }}">
                <label for="username" class="form-label">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control @error('email') is-invalid
                @enderror" id="email" name="email" placeholder="Your Email" required value="{{ old('email')}}">
                <label for="email" class="form-label">Email</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control @error('password') is-invalid
                @enderror" id="password" name="password" placeholder="Your password" required>
                <label for="password" class="form-label">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn-pri border-0">Sign Up</button>
        </form>
    </div>
</div>
@endsection