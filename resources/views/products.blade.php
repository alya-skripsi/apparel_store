@extends('layouts.main')
@section('content')
    <h1>{{ $title }}</h1>

    <div class="row">
        <div class="col-lg-4">
            <form action="/products">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search product..." name="search" value="{{ request('search') }}">
                    <button class="btn-pri" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row g-3">
        @foreach ($products as $p)
        <div class="col-lg-3">
            <a href="/products/{{ $p->slug }}" class="text-decoration-none">
                <div class="card h-100">
                    <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->name }}" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title"> {{ $p->name }} </h5>
                        <span>Rp{{ number_format($p->price, 0, ',', '.') }}</span>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>

    <div class="mt-3 d-flex justify-content-center">
        {{ $products->links() }}
    </div>
@endsection