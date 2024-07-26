@extends('layouts.main')
@section('content')
    {{-- Hero Section --}}
    <section class="jumbo-carousel">
        <div class="container">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="bg-jumbo text-light d-flex align-items-center p-5 justify-content-start bg-text-jumbo rounded">
                            <div>
                                <h1 class="display-4 fw-bold">Welcome to Apparel_store.</h1>
                                <p class="lead">We provide the best quality of clothes for you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-jumbo-2 text-light d-flex align-items-center p-5 justify-content-start bg-text-jumbo rounded">
                            <div>
                                <h1 class="display-4 fw-bold">Welcome to Apparel_store.</h1>
                                <p class="lead">We provide the best quality of clothes for you.</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="bg-jumbo-3 text-light d-flex align-items-center p-5 justify-content-start bg-text-jumbo rounded">
                            <div>
                                <h1 class="display-4 fw-bold">Welcome to Apparel_store.</h1>
                                <p class="lead">We provide the best quality of clothes for you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Hero Section --}}

    {{-- New Arrival Section --}}
    <section class="new-arrival">
        <div class="container mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="fw-bold title-sec ps-2">New Arrival</h1>
                <a href="#" class="text-decoration-none">View More</a>
            </div>
            <div class="row">
                <div class="swiper arrival">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of New Arrival Section --}}

    {{-- Best Seller Section --}}
    <section class="best-seller">
        <div class="container mt-5">
            <div class="d-flex align-items-center justify-content-between">
                <h1 class="fw-bold title-sec ps-2">Best Seller</h1>
                <a href="#" class="text-decoration-none">View More</a>
            </div>
            <div class="row">
                <div class="swiper arrival">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card">
                                <img src="https://dummyimage.com/400x450/333/fff.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Product Name</h5>
                                    <p class="card-text">Rp. 100.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="#" class="btn-pri text-decoration-none">Add to Cart</a>
                                        <a href="#" class="btn btn-danger rounded"><i class="fa-solid fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Best Seller Section --}}

    {{-- Category Section --}}
    <section class="categories">
        <div class="container mt-5">
            <h1 class="fw-bold title-sec ps-2">Categories</h1>
            <div class="row g-3 mt-1">
                <div class="col-12 col-lg-6">
                <div class="card">
                    <img src="{{asset('image/banner-img-4.webp')}}" alt="">
                    <div class="card-img-overlay d-flex justify-content-end align-items-end">
                        <h3 class="card-title fw-bold text-white">Men</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <img src="{{ asset('image/banner-img-6.webp')}}" alt="">
                    <div class="card-img-overlay d-flex justify-content-end align-items-end">
                        <h3 class="card-title fw-bold text-white">Footwear</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <img src="{{asset('image/banner-img-3.webp')}}" alt="" >
                    <div class="card-img-overlay d-flex justify-content-end align-items-end">
                        <h3 class="card-title fw-bold">Women</h3>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="card">
                    <img src="{{asset('image/banner-img-5.webp')}}" alt="">
                    <div class="card-img-overlay d-flex justify-content-end align-items-end">
                        <h3 class="card-title fw-bold">Accessories</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Category Section --}}

    {{-- Our Service Section --}}
    <section class="service">
        <div class="container mt-5">
            <h1 class="fw-bold title-sec ps-2">Our Service</h1>
            <div class="row g-3 mt-1">
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body card-bg-sec">
                            <i class="fa-solid fa-truck"></i>
                            <h5 class="card-title">Free Shipping</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body card-bg-sec">
                            <i class="fa-solid fa-headset"></i>
                            <h5 class="card-title">24/7 Support</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body card-bg-sec">
                            <i class="fa-solid fa-lock"></i>
                            <h5 class="card-title">Secure Payment</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Our Service Section --}}

    {{-- Testimonial Section --}}
    <section class="testimonial">
        <div class="container mt-5">
            <h1 class="fw-bold title-sec ps-2">Testimonials</h1>
            <div class="row g-3 mt-2">
                <div class="col-12 col-lg-4">
                    <div class="card h-100">
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
                    <div class="card h-100">
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
                    <div class="card h-100">
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
        </div>
    </section>
@endsection

@section('scripts')
    <script>
        var swiper = new Swiper(".arrival", {
            slidesPerView: 2,
            spaceBetween: 10,
            // loop: true,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
            },
        });
    </script>
@endsection