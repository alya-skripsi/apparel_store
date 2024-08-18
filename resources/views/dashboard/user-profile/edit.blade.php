@extends('dashboard.layouts.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Profile</h1>
    </div>
    
    <div class="row">
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body text-center">
                    <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="rounded-circle" width="100" height="100" alt="{{ auth()->user()->name }}">
                    <h5 class="mt-2">{{ auth()->user()->name }}</h5>
                    <p class="text-muted mb-2">{{ auth()->user()->email }}</p>
                    <button class="btn btn-primary">Change Avatar</button>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card">
                <div class="card-body">
                    <form action="/dashboard/user-profile/{{ auth()->user()->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label fw-bold">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', auth()->user()->name) }}">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label fw-bold">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', auth()->user()->email) }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label fw-bold">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{ old('address', auth()->user()->address) }}">
                                @error('address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="text-start">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection