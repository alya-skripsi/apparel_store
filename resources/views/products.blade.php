@extends('layouts.main')
@section('content')
    {{-- Breadcrumb --}}
    <section class="breadcrumb-section">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                </ol>
            </nav>
        </div>
    </section>
    {{-- End of Breadcrumb --}}

    {{-- Products Section --}}
    <section class="main-product-lists">
        <div class="container">
            <div class="row">
                <aside class="col-lg-3 col-md-4 mb-6 mb-md-0">
                    <div class="sidebar">
                        <div class="sidebar-widget">
                            <h4 class="widget-title fs-3 fw-bold">Categories</h4>
                            <ul class="list-group list-group-flush">
                                @foreach ($categories as $c)
                                    <li class="list-group-item">
                                        <a href="/products?category={{ $c->slug }}" class="d-flex justify-content-between align-items-center text-decoration-none">{{ $c->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </aside>
                <section class="col-lg-9 col-md-12 products">
                    <div class="card mb-4 border-0 section-header">
                        <div class="card-body card-bg-sec p-5 rounded">
                            @if (request()->has('category'))
                                <h2 class="fs-2 fw-bold text-dark"> {{ $category->name }} </h2>
                            @else
                                <h2 class="fs-2 fw-bold text-dark">All Products</h2>
                            @endif
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="d-lg-flex justify-content-between align-items-center">
                            <div class="mb-3 mb-lg-0">
                                <p class="mb-0"><span class="text-dark fw-bold">{{ count($products) }}</span> Products found</p>
                            </div>
                            <div class="d-flex mt-2 mt-lg-0">
                                <div class="me-2 flex-grow-1 d-flex align-items-center">
                                    <label for="show" class="me-2">Show</label>
                                    <select class="form-select">
                                        <option selected="">50</option>
                                        <option value="10">10</option>
                                        <option value="20">20</option>
                                        <option value="30">30</option>
                                    </select>
                                </div>
                                <div class="d-flex me-2 flex-grow-1 align-items-center">
                                    <label for="sort" class="me-2">Sort</label>
                                    <select class="form-select">
                                        <option selected="">Featured</option>
                                        <option value="Low to High">Price Low to High</option>
                                        <option value="High to Low"> Price High to Low</option>
                                        <option value="Release Date"> Release Date</option>
                                        <option value="Avg. Rating"> Avg. Rating</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 g-3">
                        @foreach ($products as $p)
                            <div class="col-lg-4">
                                <a href="/products/{{ $p->slug }}" class="text-decoration-none">
                                    <div class="card h-100">
                                        <div class="card-img">
                                            @if($p->image)
                                                <img src="{{ asset('storage/' . $p->image) }}" alt="{{ $p->name }}" class="img-fluid">
                                            @else
                                                <img src="https://dummyimage.com/315x415/333/fff.png" alt="product" class="img-fluid card-img-top">
                                            @endif
                                        </div>
                                        <div class="card-body">
                                            <span class="badge bg-primary mb-3">{{ $p->category->name }}</span>
                                            <h5 class="card-title"> {{ $p->name }} </h5>
                                            <span>Rp{{ number_format($p->price, 0, ',', '.') }}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-3 d-flex justify-content-end">
                        {{ $products->links() }}
                    </div>
                </section>
            </div>
        </div>
    </section>

@endsection