@extends('layouts.main')
@section('content')
    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/" class="text-decoration-none"">Home</a></li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
    </nav>
    {{-- Breadcrumb --}}

    {{-- @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @elseif (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif --}}

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Profile --}}
    <section class="main-profile">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h4 class="widget-title fs-3 fw-bold">Profile</h4>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="/profile" class="d-flex justify-content-between align-items-center text-decoration-none">Personal Information</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="/profile/change_pass" class="d-flex justify-content-between align-items-center text-decoration-none">Change Password</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="/profile/orders" class="d-flex justify-content-between align-items-center text-decoration-none">Order History</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="fw-bold">Personal Information</h5>
                            <hr>
                            <div class="div-profile d-flex align-items-center mb-4">
                                <div class="img-box">
                                    @if (auth()->user()->avatar)
                                        <img src="{{ asset('storage/' . auth()->user()->avatar)}}" class="rounded-circle" width="100" height="100" alt="{{ auth()->user()->name }}">
                                    @else
                                        <img src="https://ui-avatars.com/api/?name={{ auth()->user()->name }}" class="rounded-circle" width="100" height="100" alt="{{ auth()->user()->name }}">
                                    @endif
                                </div>
                                <div class="info-profile ms-3">
                                    <h5 class="fw-bold">{{ auth()->user()->name }}</h5>
                                    <p>{{ auth()->user()->email }}</p>
                                </div>
                            </div>

                            <p class="fs-6 fw-semibold">Address</p>
                            <p>{{ auth()->user()->address }}</p>
                            <a href="/profile/edit" class="btn btn-dark">Edit Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Profile --}}
@endsection