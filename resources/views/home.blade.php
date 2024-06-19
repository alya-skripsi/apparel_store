@extends('layouts.main')
@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron mt-5 bg-jumbo rounded text-light d-flex align-items-center p-5 justify-content-start">
        <div>
            <h1 class="display-4 fw-bold">Welcome to Apparel_store.</h1>
            <p class="lead">We provide the best quality of clothes for you.</p>
        </div>
    </div>
    {{-- Jumbotron --}}

    {{-- Category --}}
    <section class="py-5">
        <h2 class="mb-4 fs-2 fw-bold text-title">Category</h2>
        <div class="row g-3">
            <div class="col-6 col-lg-3">
                <div class="card card-category border-0">
                    <img src="{{ asset('image/category1.webp')}}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center color-overlay">
                        <h5 class="card-title mx-auto fs-3">Men</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-category border-0">
                <img src="{{ asset('image/categroy2.webp')}}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center color-overlay">
                        <h5 class="card-title mx-auto fs-3">Women</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-category border-0">
                    <img src="{{ asset('image/category3.webp')}}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center color-overlay">
                        <h5 class="card-title mx-auto fs-3">Footwear</h5>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-category border-0">
                    <img src="{{ asset('image/category4.webp')}}" class="card-img" alt="...">
                    <div class="card-img-overlay d-flex align-items-center color-overlay">
                        <h5 class="card-title mx-auto fs-3">Accessories</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Category --}}
    
    {{-- Product --}}
    <section class="py-5">
        <h2 class="mb-4 fs-2 fw-bold text-title">Product</h2>
        <div class="row g-3">
            <div class="col-6 col-lg-3">
                <div class="card card-product border-0">
                    <img src="{{ asset('image/product1.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">T-Shirt</h5>
                        <p class="card-text">Rp. 100.000</p>
                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-product border-0">
                    <img src="{{ asset('image/product2.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">Jacket</h5>
                        <p class="card-text">Rp. 200.000</p>
                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-product border-0">
                    <img src="{{ asset('image/product3.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-5">Pants</h5>
                        <p class="card-text">Rp. 150.000</p>
                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card card-product border-0">
                    <img src="{{ asset('image/product4.webp')}}" class="card-img-top" alt="...">
                    <div class="card-body px-0">
                        <h5 class="card-title fs-5">Shoes</h5>
                        <p class="card-text">Rp. 300.000</p>
                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Product --}}

    {{-- Service --}}
    <section class="py-5">
        <h2 class="mb-4 fs-2 fw-bold text-title">Service</h2>
        <div class="row g-3">
            <div class="col-6 col-lg-3">
                <div class="card-service border-0">
                    <div class="card-body">
                        <i class="fas fa-shipping-fast icon-service mb-3"></i>
                        <h5 class="card-title fs-5 fw-bold mb-2">Fast Delivery</h5>
                        <p class="card-text">We provide fast delivery for you</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card-service border-0">
                    <div class="card-body">
                        <i class="fas fa-headset icon-service mb-3"></i>
                        <h5 class="card-title fs-5 fw-bold mb-2">24/7 Support</h5>
                        <p class="card-text">We provide 24/7 support for you</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card-service border-0">
                    <div class="card-body">
                        <i class="fas fa-credit-card icon-service mb-3"></i>
                        <h5 class="card-title fs-5 fw-bold mb-2">Secure Payment</h5>
                        <p class="card-text">We provide secure payment for you</p>
                    </div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="card-service border-0">
                    <div class="card-body">
                        <i class="fas fa-tags icon-service mb-3"></i>
                        <h5 class="card-title fs-5 fw-bold mb-2">Discount</h5>
                        <p class="card-text">We provide discount for you</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Service --}}

    {{-- Testimonial --}}
    <section class="py-5">
        <h2 class="mb-4 fs-2 fw-bold text-title">Testimonial</h2>
        <div class="row g-3">
            <div class="col-12 col-lg-4">
                <div class="card-testimonial border-0">
                    <div class="card-body">
                        <p class="card-text">"I love the product that you provide, the quality is very good and the price is very affordable."</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('image/user1.png')}}" alt="testimonial1" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h5 class="card-title fs-6 fw-bold">Jeniffer Walker</h5>
                                <p class="card-text">CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card-testimonial border-0">
                    <div class="card-body">
                        <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante."</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('image/user2.png')}}" alt="testimonial2" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h5 class="card-title fs-6 fw-bold">Cameron Williamson</h5>
                                <p class="card-text">Designer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card-testimonial border-0">
                    <div class="card-body">
                        <p class="card-text">"I love the product that you provide, the quality is very good and the price is very affordable."</p>
                        <div class="d-flex align-items-center">
                            <img src="{{ asset('image/user3.png')}}" alt="testimonial3" class="rounded-circle me-3" width="50" height="50">
                            <div>
                                <h5 class="card-title fs-6 fw-bold">Mike Walter</h5>
                                <p class="card-text">Manager</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Testimonial --}}
@endsection
