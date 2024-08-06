@extends('layouts.main')
@section('content')
    {{-- Breadcrumb --}}
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/" class="text-decoration-none"">Home</a></li>
        <li class="breadcrumb-item"><a href="/products?category={{ $product->category->slug }}" class="text-decoration-none""> {{ $product->category->name }} </a></li>
        <li class="breadcrumb-item active"> {{ $product->name}} </li>
        </ol>
    </nav>
    {{-- Breadcrumb --}}

    {{-- Product Detail --}}
    <section class="main-single-product">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-4">
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid" style="width: 500px;">
                    @else
                        <img src="https://dummyimage.com/400x450/333/fff.png" alt="{{ $product->name }}" class="img-fluid rounded" style="width: 500px;">
                    @endif
                </div>
                <div class="col-lg-8">
                    <p class="text-muted">Category: <a href="/products?category={{ $product->category->slug }}" class="badge text-bg-primary text-decoration-none">{{ $product->category->name }}</a></p>
                    <h2 class="fw-bold">{{ $product->name }}</h2>
                    <p class="lead">Rp. {{ number_format($product->price, 0, ',', '.') }}</p>
                    <form action="/cart/add/{{ $product->slug }}" method="post">
                        @csrf
                        <div class="my-3">
                            <label for="size">Size :</label>
                            <select name="size" id="size" class="form-select" style="width: 100px;">
                                <option value="s">S</option>
                                <option value="m">M</option>
                                <option value="l">L</option>
                                <option value="xl">XL</option>
                            </select>
                        </div>
                        <div class="div d-flex align-items-center">
                            <div class="mt-3">
                                <label for="qty">Quantity :</label>
                                <div class="input-group text-center" style="width: 130px;">
                                    <button class="btn btn-dark decre-btn" type="button">-</button>
                                    <input type="text" name="qty" id="qty" class="form-control qty-input text-center" value="1">
                                    <button class="btn btn-dark incre-btn" type="button">+</button>
                                </div>
                            </div>
                            <h6 class="ms-3 mt-5">Stock Available : {{ $product->stock }}</h6>
                        </div>
                        
                        @if ($product->stock > 0)
                            <button class="btn-outline-pri text-decoration-none mt-4" id="addtoCart" type="submit"><i class="fas fa-shopping-cart me-1"></i> Add to Cart</button>
                            <button class="btn-pri border-0">Buy Now</button>
                        @else
                            <button class="btn btn-secondary disabled mt-4" id="addtoCart" type="submit" disabled><i class="fas fa-shopping-cart me-1"></i>Out Of Stock</button>
                        @endif
                    </form>
                    <form action="/wishlist/add/{{ $product->slug }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger text-decoration-none mt-3">
                            <i class="fa-regular fa-heart me-1"></i> Add to Wishlist
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    {{-- Product Detail --}}
    
    {{-- Product Description & Rating --}}
    <section class="review-rating">
        <div class="container mt-5">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-desc-tab" data-bs-toggle="pill" data-bs-target="#pills-desc" type="button" role="tab" aria-controls="pills-desc" aria-selected="true">Descriptions</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-rating-tab" data-bs-toggle="pill" data-bs-target="#pills-rating" type="button" role="tab" aria-controls="pills-rating" aria-selected="false">Reviews</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-desc" role="tabpanel" aria-labelledby="pills-desc-tab" tabindex="0">
                    <p class="text-muted"> {{$product->description}} </p>
                </div>
                <div class="tab-pane fade" id="pills-rating" role="tabpanel" aria-labelledby="pills-rating-tab" tabindex="0">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="customer-review d-flex">
                                            <div class="me-3">
                                                <img src="https://dummyimage.com/50x50/333/fff.png" alt="" class="img-fluid rounded-circle">
                                            </div>
                                            <div class="lh-1">
                                                <h5 class="fw-bold">John Doe</h5>
                                                <span class="text-muted">5 days ago</span>
                                            </div>
                                        </div>
                                        <div class="rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star-half-stroke"></i>
                                        </div>
                                    </div>
                                    <p class="text-muted mt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui adipisci quisquam ipsa laudantium repellat obcaecati ut iusto accusamus exercitationem consequuntur. Voluptate obcaecati impedit modi consequatur consectetur voluptatem tenetur harum, vel numquam dolores error minus architecto adipisci laudantium cumque quia repudiandae amet aliquid? Porro quis, accusamus voluptatem officiis adipisci, inventore ipsam repudiandae tempore vero ab eaque sequi expedita, quas possimus iste.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Product Description & Rating --}}

@endsection

@section('scripts')
<script>
    const decreBtn = document.querySelector('.decre-btn');
    const increBtn = document.querySelector('.incre-btn');
    const qtyInput = document.querySelector('.qty-input');

    decreBtn.addEventListener('click', function(){
        const currentValue = parseInt(qtyInput.value);
        if(currentValue > 1){
            qtyInput.value = currentValue - 1;
        }
    });

    increBtn.addEventListener('click', function(){
        const currentValue = parseInt(qtyInput.value);
        qtyInput.value = currentValue + 1;
    });
</script>
@endsection