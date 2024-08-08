@extends('layouts.main')
@section('content')
    {{-- Breadcrumb --}}
    <section class="breadcrumb-section pb-4 pb-md-4 pt-4 pt-md-4">
        <div class="container">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/" class="text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </nav>
        </div>
    </section>
    {{-- Breadcrumb --}}

    {{-- Cart --}}
    <section class="cart-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-4">
                        <div class="card-body card-bg-sec p-5 rounded">
                            <h2 class="fw-bold">Shopping Cart</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-8">
                    <ul class="list-group list-group-flush">
                        @foreach($carts as $cart)
                        <li class="list-group-item py-2 border-top ">
                            <div class="row align-items-center">
                                <div class="col-6 col-md-6 col-lg-7">
                                    <div class="d-flex">
                                        <input type="hidden" value="{{ $cart->id }}">
                                        <div class="ms-3">
                                            <h6 class="mb-0">{{ $cart->product->name }}</h6>
                                            <p class="mb-3">Rp. {{ number_format($cart->product->price) }}</p>
                                            <form action="/cart/{{ $cart->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-sm"><i class="fa-solid fa-trash me-1"></i>Remove</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 col-md-2 col-lg-2">
                                    <div class="input-group text-center mb-3" style="width: 150px;">
                                        <button class="btn btn-dark decre-btn" type="button">-</button>
                                        <input type="text" name="qty" id="qty" class="form-control qty-input text-center" value="{{ $cart->quantity }}">
                                        <button class="btn btn-dark incre-btn" type="button">+</button>
                                    </div>
                                </div>
                                <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                    <span class="fw-bold">Rp. {{ number_format($cart->product->price * $cart->quantity) }}</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Cart Summary</h5>
                            <div class="card">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex align-items-center justify-content-between">
                                        <div class="me-auto">
                                            <span>Subtotal</span>
                                        </div>
                                        <div>
                                            <span>Rp. {{ number_format($subtotal) }}</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="d-grid mb-1 mt-4">
                                <a href="/checkout" class="btn-pri text-decoration-none border-0 text-center">Checkout</a>
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
    const decreBtn = document.querySelectorAll('.decre-btn');
    const increBtn = document.querySelectorAll('.incre-btn');
    const qtyInput = document.querySelectorAll('.qty-input');

    decreBtn.forEach(btn => {
        btn.addEventListener('click', function(){
            const currentValue = parseInt(btn.nextElementSibling.value);
            if(currentValue > 1){
                btn.nextElementSibling.value = currentValue - 1;
            }

            // ubah qty di database
            const id = btn.parentElement.parentElement.parentElement.querySelector('input').value;
            const qty = btn.nextElementSibling.value;
            fetch(`/cart/change-qty/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    qty: qty
                })
            }).then(response => response.json()).then(data => window.location.reload());
        });
    });

    increBtn.forEach(btn => {
        btn.addEventListener('click', function(){
            const currentValue = parseInt(btn.previousElementSibling.value);
            btn.previousElementSibling.value = currentValue + 1;

            // ubah qty di database
            const id = btn.parentElement.parentElement.parentElement.querySelector('input').value;
            const qty = btn.previousElementSibling.value;
            fetch(`/cart/change-qty/${id}`, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    qty: qty
                })
            }).then(response => response.json()).then(data => window.location.reload());
        });
    });
</script>
@endsection