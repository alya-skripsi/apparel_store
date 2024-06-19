@extends('layouts.main')
@section('content')
    {{-- Jumbotron --}}
    <div class="jumbotron mt-5 bg-jumbo-about rounded text-light d-flex align-items-center p-5 justify-content-center">
        <div>
            <h1 class="display-4 fw-bold">About Us</h1>
        </div>
    </div>
    {{-- Jumbotron --}}

    {{-- About --}}
    <section class="about1">
        <div class="row my-5">
            <div class="col-lg-6">
                <img src="image/img-about1.webp" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h2 class="fw-bold mt-3 card-title-about">Our Story</h2>
                    <p class="lead">apparel_store was born out of a love for fashion and a desire to make high-quality, stylish clothing accessible to everyone. From our humble beginnings as a small online shop, we've grown into a global brand, serving fashion enthusiasts around the world. Our journey is driven by the belief that everyone deserves to look and feel their best, no matter the occasion.</p>
                </div>
            </div>
        </div>
        <div class="row reverse">
            <div class="col-lg-6">
                <img src="image/img-about2.webp" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 d-flex align-items-center">
                <div>
                    <h2 class="fw-bold mt-3 card-title-about">Our Mission</h2>
                    <p class="lead">Our mission is to inspire confidence and empower people to express their unique style through our clothing. We believe that fashion is a form of self-expression, and we're here to help you make a statement. Whether you're dressing up for a special occasion or keeping it casual, we've got you covered with our wide range of clothing and accessories.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- About --}}

    {{-- Why Shop with Us --}}
    <section>
        <h1 class="title-section fw-bold text-center my-5">Why Shop with Us?</h1>
        <div class="row g-3">
            <div class="col-12 col-lg-4">
                <div class="card-why">
                    <i class="fa-solid fa-medal icon-why"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Quality Products</h5>
                        <p class="card-text mt-2">We take pride in the quality of our products, using only the finest materials and craftsmanship to create stylish, durable clothing that you'll love to wear.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card-why">
                    <i class="fa-solid fa-truck-fast icon-why"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Fast Shipping</h5>
                        <p class="card-text mt-2">We offer fast, reliable shipping to get your order to you as quickly as possible, so you can start enjoying your new clothes right away.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card-why">
                    <i class="fa-solid fa-handshake-angle icon-why"></i>
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Excellent Customer Support</h5>
                        <p class="card-text mt-2">Our friendly, knowledgeable customer support team is here to help with any questions or concerns you may have, so you can shop with confidence.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Why Shop with Us --}}

    {{-- Community --}}
    <section>
        <div class="row my-5">
            <div class="col-12 col-lg-6">
                <img src="image/img-about3.webp" class="img-fluid rounded" alt="">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="title-section fw-bold">Join Our Community</h1>
                <p class="lead">At apparel_store, we're more than just a clothing brand we're a community of fashion lovers who share a passion for style and self-expression. Join us on social media to connect with like-minded individuals, share your favorite looks, and stay up to date on the latest trends.</p>
            </div>
        </div>
    </section>
    {{-- Community --}}
@endsection