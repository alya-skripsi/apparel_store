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
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">Men</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="category-item"><a href="#">All</a></li>
                                                <li class="category-item"><a href="#">T-shirt</a></li>
                                                <li class="category-item"><a href="#">Shirt</a></li>
                                                <li class="category-item"><a href="#">Pants</a></li>
                                                <li class="category-item"><a href="#">Jacket</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">Women</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="category-item"><a href="#">All</a></li>
                                                <li class="category-item"><a href="#">Dress</a></li>
                                                <li class="category-item"><a href="#">Blouse</a></li>
                                                <li class="category-item"><a href="#">Skirt</a></li>
                                                <li class="category-item"><a href="#">Jacket</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">Footwear</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="category-item"><a href="#">All</a></li>
                                                <li class="category-item"><a href="#">Sneakers</a></li>
                                                <li class="category-item"><a href="#">Boots</a></li>
                                                <li class="category-item"><a href="#">Sandals</a></li>
                                                <li class="category-item"><a href="#">Slippers</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">Accessories</button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="category-item"><a href="#">All</a></li>
                                                <li class="category-item"><a href="#">Hat</a></li>
                                                <li class="category-item"><a href="#">Bag</a></li>
                                                <li class="category-item"><a href="#">Watch</a></li>
                                                <li class="category-item"><a href="#">Glasses</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
                <section class="col-lg-9 col-md-12 products">
                    <div class="card mb-4 border-0 section-header">
                        <div class="card-body card-bg-sec p-5 rounded">
                            <h2 class="fs-2 fw-bold">Products</h2>
                            @if(isset($category))
                                <h2 class="fs-2 fw-bold">{{ $category }}</h2>
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
                                                <img src="{{ asset('storage/images/'.$p->image) }}" alt="product" class="img-fluid card-img-top">
                                            @else
                                                <img src="https://dummyimage.com/300x300/333/fff.png" alt="product" class="img-fluid card-img-top">
                                            @endif
                                        </div>
                                        <div class="card-body">
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