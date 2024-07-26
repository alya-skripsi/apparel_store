@extends('layouts.main')
@section('content')

    {{-- Breadcrumb --}}
    <section class="breadcrumb-section">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">My Wishlist</li>
                </ol>
            </nav>
        </div>
    </section>
    {{-- Breadcrumb --}}

    {{-- Wishlist --}}
    <section class="my_wishlist">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-4">
                        <div class="card-body card-bg-sec p-5 rounded">
                            <h2 class="fw-bold">My Wishlist</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-3">
                    @foreach ($wishlist as $w)
                    <div class="card">
                        @if ($w->product->image)
                            <img src="{{ asset('storage/products/' . $w->product->image) }}" alt="{{ $w->product->name }}" class="card-img-top">
                        @else
                        <img src="https://dummyimage.com/400x400/333/fff.png" alt="" class="card-img-top">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title text-truncate">{{ $w->product->name }}</h5>
                            <p class="card-text">Rp. {{ number_format($w->product->price) }}</p>
                            <form action="/wishlist/{{ $w->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger"><i class="fa-solid fa-trash me-1"></i>Remove</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- Wishlist --}}
{{-- <div class="container">
    <div class="row">
        <div class="col-lg-7">
            <h1>Wishlist</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($wishlist as $w)
                        <tr>
                            <td>{{ $w->product->name }}</td>
                            <td>Rp. {{ number_format($w->product->price) }}</td>
                            <td class="d-flex">
                                <form action="/wishlist/{{ $w->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger me-2">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
@endsection