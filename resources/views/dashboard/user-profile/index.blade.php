@extends('dashboard.layouts.main')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Profile</h1>
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
                    <div class="mb-3 row">
                        <label for="staticName" class="col-sm-2 col-form-label fw-bold">Name</label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{auth()->user()->name}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="staticEmail" class="col-sm-2 col-form-label fw-bold">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{auth()->user()->email}}">
                            </div>
                        </div>
                    <div class="mb-3 row">
                        <label for="staticAddress" class="col-sm-2 col-form-label fw-bold">Address</label>
                            <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{auth()->user()->address}}">
                        </div>
                    </div>
                    <div class="text-start">
                        <div class="btn-group">
                            <a href="/dashboard/user-profile/{{ auth()->user()->id }}/edit" class="btn btn-primary">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection