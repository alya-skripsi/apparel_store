@extends('layouts.main')
@section('content')
    {{-- Jumbotron Section--}}
    <section class="Jumbotron_sec">
        <div class="container">
            <div class="jumbotron mt-5 bg-jumbo-about rounded text-light d-flex align-items-center p-5 justify-content-center">
                <div>
                    <h1 class="display-4 fw-bold">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Jumbotron Section --}}

    {{-- About Section --}}
    <section class="sect_1">
        <div class="container">
            <div class="row my-5">
                <div class="col-lg-6">
                    <img src="{{ asset('image/img-about1.webp')}}" alt="" class="img-fluid">
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
                    <img src="{{ asset('image/img-about2.webp')}}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 d-flex align-items-center">
                    <div>
                        <h2 class="fw-bold mt-3 card-title-about">Our Mission</h2>
                        <p class="lead">Our mission is to inspire confidence and empower people to express their unique style through our clothing. We believe that fashion is a form of self-expression, and we're here to help you make a statement. Whether you're dressing up for a special occasion or keeping it casual, we've got you covered with our wide range of clothing and accessories.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- End of About Section --}}

    {{-- Community Section --}}
    <section class="comms">
        <div class="container">
            <div class="row my-5">
                <div class="col-12 col-lg-6">
                    <img src="{{asset('image/img-about3.webp')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="col-12 col-lg-6">
                    <h1 class="title-section fw-bold">Join Our Community</h1>
                    <p class="lead">At apparel_store, we're more than just a clothing brand we're a community of fashion lovers who share a passion for style and self-expression. Join us on social media to connect with like-minded individuals, share your favorite looks, and stay up to date on the latest trends.</p>
                </div>
            </div>
        </div>
    </section>
    {{-- End of Community Section --}}
@endsection