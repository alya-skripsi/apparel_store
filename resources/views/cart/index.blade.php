@extends('layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-8">
        <h2>Cart</h2>
        <div class="card">
            <div class="card-body">
                @if ($carts->isEmpty())
                    <div class="alert alert-danger">Your Cart is empty</div>
                @else
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $cart)
                                <tr>
                                    <input type="hidden" value="{{ $cart->id }}">
                                    <td>{{ $cart->product->name }}</td>
                                    <td>Rp. {{ number_format($cart->product->price) }}</td>
                                    <td>
                                        <div class="input-group text-center mb-3" style="width: 130px;">
                                            <button class="btn btn-secondary decre-btn" type="button">-</button>
                                            <input type="text" name="qty" id="qty" class="form-control qty-input" value="{{ $cart->quantity }}">
                                            <button class="btn btn-secondary incre-btn" type="button">+</button>
                                        </div>
                                    </td>
                                    <td>Rp. {{ number_format($cart->product->price * $cart->quantity) }}</td>
                                    <td>
                                        <form action="/cart/{{ $cart->id }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
    <div class="col-lg-4 mt-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Cart Summary</h5>
                <table class="table">
                    <tr>
                        <th>Subtotal</th>
                        <td>Rp. {{ number_format($subtotal) }}</td>
                    </tr>
                </table>
                <a href="/checkout" class="btn-pri text-decoration-none">Checkout</a>
            </div>
        </div>
    </div>
</div>
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